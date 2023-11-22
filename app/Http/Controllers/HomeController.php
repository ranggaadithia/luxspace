<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Landing Pages";

        $categories = Category::all();

        return view('frontpage.home', compact('title', 'categories'));
    }

    public function product()
    {
        $title = "Product Pages";

        return view('frontpage.product', compact('title'));
    }

    public function cart()
    {
        $title = "Cart Pages";

        return view('frontpage.cart', compact('title'));
    }
}
