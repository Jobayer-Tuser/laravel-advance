<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $name = "Jenefer";
        $user = array(
            'name' => 'Jobayer Al Mahmud tuser',
            'age' => 'Age 12',
            'Occupation' => 'Student'
        );
        return view('user', compact('name', 'user'));
    }
}
