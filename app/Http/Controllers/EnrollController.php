<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class EnrollController extends Controller
{
    public $student,$alreadyEnroll;


    public function newEnroll($id)
    {
        //return Course::find($id);

        if(Session::get('student_id'))
        {
            $this->alreadyEnroll = Student::find(Session::get('student_id'));
        }

        return view('website.courses.enroll-course',[
            'course'=>Course::find($id),
            'alreadyEnrolled' => $this->alreadyEnroll,
        ]);
    }

    public function enrollNewCourse(Request $request ,$id)
    {

        if(Session::get('student_id'))
        {
            $this->student=Student::find(Session::get('student_id'));
        }
        else{

            $validated = $request->validate([
                'name' => 'required|max:55',
                'email' => 'required|unique:students|max:25',
                'mobile' => 'required|unique:students|max:20|min:11',
            ],[
                'name.required' => 'This field require a information',
                'email.required' => 'This field require a information',
                'mobile.required' => 'This field require a information',

                'email.unique' => 'Enter Unique email',
                'mobile.unique' => 'Enter Unique Mobile number',
            ]);

            $this->student=Student::newStudent($request);
        }

//
//        $this->student=Student::newStudent($request);

        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);


        Enroll::storeEnroll($request,$this->student->id,$id);
        return back()->with('success','Your enroll request is sent');

    }
}
