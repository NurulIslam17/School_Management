<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentAuthController extends Controller
{

    public function studentLogin(Request $request)
    {
//        return $request;
     $studentData = Student::where('email',$request->email)->first();

     if($studentData)
     {
         if(password_verify($request->password,$studentData->password))
         {
             Session::put('student_id',$studentData->id);
             Session::put('student_name',$studentData->name);
             return redirect('/student/dashboard');


         }
         else{
             return redirect('/font-login')->with('message','Invalid Password');
         }

     }
     else{
         return redirect('/font-login')->with('message','Invalid Email account');
     }

    }

    public function studentLogout()
    {
        Session::forget('student_id');
        Session::forget('student_name');
        return redirect()->route('home');
    }
}
