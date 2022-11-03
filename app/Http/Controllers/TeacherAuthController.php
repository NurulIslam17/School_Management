<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherAuthController extends Controller
{
    private $teacher;
    public function loginForm()
    {
        return view('teacher.auth.login');
    }

    public function teacherLoginCheck(Request $request)
    {
       $this->teacher = Teacher::where('t_email',$request->email)->first();

        if ($this->teacher)
        {
            if( password_verify( $request->password, $this->teacher->t_password) )
            {
                Session::put('teacher_id',$this->teacher->id);
                Session::put('teacher_name',$this->teacher->t_name);
                Session::put('teacher_image',$this->teacher->t_image);

                return redirect()->route('teacher.dashboard');
            }
            else{
                return redirect()->route('teacher.login')->with('message','Invalid Password');
            }
        }
        else{
            return redirect()->route('teacher.login')->with('message','Invalid Mail');
        }
    }

    //teacherLogout
    public  function teacherLogout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        Session::forget('teacher_image');

        return redirect()->route('teacher.login')->with('message','Logout Successed');
    }
}
