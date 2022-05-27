<?php

namespace App\Http\Controllers;

use App\ProductsCategory;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $product_category = ProductsCategory::join('products','products.id','=','products_categories.product_id')->get();

        return view("index", compact('category','product_category'));
    }
}
