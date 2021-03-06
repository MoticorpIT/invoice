<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) {
    	$products = $category->products;
    	$categories = Category::all();
    	return view('products.index', compact('products', 'categories'));
    }
}
