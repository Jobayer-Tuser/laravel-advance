<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $fruits = ['Mango', 'Apple', 'Orange', 'Banana'];
        
        return view('welcome', compact('fruits'));
    }
}
