<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
         
        echo $request->method(). "</br>"; #output: GET
        echo $request->path(). "</br>"; #output: /student
        echo $request->url(). "</br>"; #output : localhost/public/student
        echo $request->fullUrl(). "</br>"; #ouput : fullurl as request
    }
    public function create(){
        
    }
    public function store(Request $request){
       
        
    }
}
