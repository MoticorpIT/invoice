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
    public function store(ProductFormRequest $request, $id)
    {
        // $product = new Product(
        //     [
        //         'name' => $request->name,
        //         'slug' => str_slug($request->name, '-'),
        //         'msrp' => $request->msrp,
        //         'retailer_price' => $request->retailer_price,
        //         'distributor_price' => $request->distributor_price,
        //         'description' => $request->description,
        //         'short_descript' => $request->short_descript
        //     ]
        // );
        // // $request->slug = str_slug($request->name);
        // // dd($request->all());
        // // Product::create($request->all());

        // $product->save();
        $catId = Category::select('id')->get();
        $product = Product::find($id);

        $product->categories()->attach($catId);

        // store page
        return redirect('products')->with('message', 'Product Added!');
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
    public function update(ProductFormRequest $request, $id)
    {

        $catId = Category::select('id')->get();
        $product = Product::find($id);
        // $product->fill($request->toArray())->save();

        $product->categories()->sync($catId);

        //store page
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
