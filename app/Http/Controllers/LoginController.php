<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function create(){
        
    }
    public function store(Request $request){
        
        $validateData = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6|max:12'
        ]);
         
        #to get all data from a form we use
        return $request->all();#to get all post 
        
        
        $name = $request->input('name');
        $email = $request->input('email');
        
    }
}
