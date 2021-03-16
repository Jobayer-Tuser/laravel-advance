<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {

            return view('students.index');
    }
    public function getData()
    {
        $students = Student::orderBy('id','DESC')->get();
        $data = '';
        $n= 1;
        foreach($students AS $student){
            $data .='<tr><td>'.$n++.'</td><td>'.$student['first_name'].'</td><td>'.$student['last_name'].'</td><td>'.$student['email'].'</td><td>'.$student['phone'].'</td><td><a class="btn btn-warning btn-sm" data-eid="'.$student['id'].'">Edit</a></td></tr>';
        }
        return response($data);

    }

    public function create(Request $request){

        echo $request->method(). "</br>"; #output: GET
        echo $request->path(). "</br>"; #output: /student
        echo $request->url(). "</br>"; #output : localhost/public/student
        echo $request->fullUrl(). "</br>"; #ouput : fullurl as request
    }

    public function store(Request $request){

        $validatedData = $this->validate($request, [
           'firstName' => 'required',
           'lastName' => 'required',
           'email' => 'required',
           'phone' => 'required',
        ]);
        //return($validatedData);

        $student = Student::create([
            'first_name' => $validatedData['firstName'] ,
            'last_name' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);
        return response()->json($student);

    }
}
