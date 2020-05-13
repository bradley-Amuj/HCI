<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Supports\Facades\View;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }
    public function register(){

      return view('pages.registration');
    }
    public function product()
    {
        return view('products.product_insert');
        
    }
    public function edit()
    {
        return view('products.edit');
    }

}
