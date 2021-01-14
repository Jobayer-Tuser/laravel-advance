<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }
        else{
            echo "No Data Availeable in Session";
        }
    }
    
    public function storeSessionData(Request $request){
        
        $request->session()->put('name', 'Jobayer');
        echo "Session Data Added Successfully";
    }
    
    public function removeSessionData(Request $request){
        $request->session()->forget('name');
        echo "Session Data removed from session";
    }
    
}
