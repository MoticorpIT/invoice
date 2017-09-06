<?php

namespace App\Http\Controllers;

use App\Product;
use App\Customer;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{

    /* AUTHENTICATION */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.create', compact('products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $product = new Product(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'msrp' => $request->msrp,
                'default_price' => $request->default_price,
                'pack_size' => $request->pack_size,
                'description' => $request->description,
                'short_descript' => $request->short_descript
            ]
        );
        $product->save();
        $product->categories()->attach($request->category);
        // store page
        return redirect('products')->with('message', 'Product Added!');
        // // Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $product->update(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'msrp' => $request->msrp,
                'default_price' => $request->default_price,
                'pack_size' => $request->pack_size,
                'description' => $request->description,
                'short_descript' => $request->short_descript
            ]
        );
        $product->categories()->sync($request->category);
        //store page
        dd($product);
        return redirect('products')->with('message', 'Product Modified Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
