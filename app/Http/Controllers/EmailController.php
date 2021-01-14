<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(){
        
        $details = [
            'subject' => 'This is test email',
            'message' => 'I have send this message to check that it is working or not',
        ];
        Mail::to('one0355@gmail.com')->send(new TestMail($details));
        return "Email Sent";
    }
}
