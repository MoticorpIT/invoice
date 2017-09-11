<?php

namespace App\Http\Controllers;

use App\Product;
use App\Customer;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{

    // FORM AUTHENTICATION
    public function __construct(){
        $this->middleware('auth');
    }


    // INDEX - VIEW ALL
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }


    // CREATE
    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.create', compact('products', 'categories'));
    }


    // SAVE AFTER CREATE
    public function store(ProductFormRequest $request)
    {
        // CREATE NEW PRODUCT
        $product = new Product(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'msrp' => $request->msrp,
                'default_price' => $request->default_price,
                'pack_size' => $request->pack_size,
                'upc' => $request->upc,
                'description' => $request->description,
                'short_descript' => $request->short_descript
            ]
        );

        // SAVE PRODUCT WITH RELATED CATEGORY
        $product->save();
        $product->categories()->attach($request->category);
        
        //PRODUCTS INDEX PAGE
        return redirect('products')->with('message', 'Product Added!');

    }

    
    // SHOW
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    // EDIT
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }


    // STORE AFTER EDITING
    public function update(ProductFormRequest $request, Product $product)
    {
        // CREATE UPDATED PRODUCT
        $product->update(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'msrp' => $request->msrp,
                'default_price' => $request->default_price,
                'pack_size' => $request->pack_size,
                'upc' => $request->upc,
                'description' => $request->description,
                'short_descript' => $request->short_descript,
                'active' => $request->active
            ]
        );

        // SAVE UPDATED PRODUCT W RELATED CATEOGRIES
        $product->categories()->sync($request->category);

        // PRODUCT SHOW PAGE
        return redirect('products')->with('message', 'Product Modified Sucessfully!');
    }


    // DELETE / DEACTIVATE
    public function destroy($id)
    {
        //
    }
}
