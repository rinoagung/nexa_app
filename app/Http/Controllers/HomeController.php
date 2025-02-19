<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $products = DB::table('products')->get();
        $new_products = DB::table('products')->orderBy('updated_at', 'DESC')->limit(5)->get();
        $best_products = DB::table('products')->orderBy('total_jual', 'DESC')->limit(5)->get();
        $categories = DB::table('categories')->get();
        $blogs = DB::table('blogs')->get();

        return view('components.home', [
            'products' => $products,
            'new_products' => $new_products,
            'best_products' => $best_products,
            'categories' => $categories,
            'blogs' => $blogs,
        ]);
    }
}
