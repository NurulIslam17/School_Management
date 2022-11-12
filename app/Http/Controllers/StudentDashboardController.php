<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    public function studentDashboard()
    {
        return view('student.home.home');
    }

    public function studentProfile()
    {
        if(Session::get('student_id')){
            $studentProfileInfo = Student::find(Session::get('student_id'));
        }
        return view('student.profile.profile',[
            'studentProfileInfo' =>$studentProfileInfo,
        ]);
    }

    public function updateProfile($id)
    {
        $editZProfile = Student::where('id',Session::get('student_id'))->first();

        return view('student.profile.update',[
            'editData' => $editZProfile,
        ]);
    }

    public function updateProfileData(Request $request)
    {

//        return $request;
        $id = $request->updateById;
        Student::updateProfile($request,$id);
        return back()->with('message','Profile Updated Successfully');
    }


}
