<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        /* this is fulent string functions */
        echo "<h4>This is a fluent string work</h4>";
      
        $slice = Str::of("Welcome to fluent string in laravel")->after('Welcome');
        echo $slice . "</br>"; #output [to fluent string in laravel]
        
        $slice2 = Str::of("App\Http\Controllers\FluentController")->afterlast("\\");
        echo $slice2 . "</br>"; #output [FluentController];
        
        $append = Str::of("Hellow ")->append("World");
        echo $append . "</br>"; #Output: [Hellow World]
        
        $strtolower = Str::of("LARAVEL: 8")->lower();
        echo $strtolower . "</br>"; #output: [laravel: 8]
        
        $strtoupper = Str::of("this will uppercase the string")->upper();
        echo $strtoupper ."</br>"; #output: [THIS WILL UPPERCASE THE STRING];
        
        $replace = Str::of("Laravel 7.0")->replace("7.0", "8.0");
        echo $replace . "</br>"; #output : [Laravel 8.0]
        
        $title  = Str::of("this is a title function")->title();
        echo $title . "</br>"; #output : [This Is a Title Function];
        
        $slug = Str::of("This function add slug")->slug("-");
        echo $slug ." </br>"; #output : [This-function-add-slug];
        
        $substr = Str::of("Laravel Framework")->substr(8, 5);
        echo $substr . "</br>"; #output [Frame]
        
        $trim = Str::of("/Laravel8/")->trim('/');
        echo $trim ."</br>"; #output [laravel8] 
                
    }
}
