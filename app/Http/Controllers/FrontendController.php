<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.frontend.index');
    }

    public function details(Request $request, $slug)
    {
        return view('pages.frontend.details');
    }

    public function cart(Request $request)
    {
        return view('pages.frontend.cart');
    }

    public function checkout(Request $request)
    {
        // TODO Checkout page
    }

    public function success(Request $request)
    {
        return view('pages.frontend.success');
    }
}
