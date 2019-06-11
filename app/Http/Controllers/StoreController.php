<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    //
    public function admin()
    {
        //$products = Product::orderBy('id','DESC')->where('visible',1)->paginate(9);
        return view('admin.index');
    }

    public function index()
    {
        //$products = Product::all();
        $products = Product::orderBy('id','DESC')->where('visible',1)->paginate(9);
        return view('store.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        //dd($product);
        return view('store.show', compact('product'));
    }

    //
    public function welcome()
    {
        return view('welcome');
    }
}
