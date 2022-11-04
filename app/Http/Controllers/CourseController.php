<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function createCourse(Request $request)
    {
        Course::create($request);
        return back()->with('success','Course Created');
    }

    public function deleteCourse($id)
    {
        Course::deleteCourseData($id);
        return back()->with('message','Course Deleted');

    }

    //  editCourse
    public function editCourse($id)
    {
        return view('teacher.course.edit',[
            'course' => Course::find($id),
        ]);
    }

    //updateCourse
    public  function updateCourse(Request $request)
    {
        $id = $request->updateId;
        Course::updateCourseData($request,$id);
        return redirect()->route('manage.course')->with('message','Course Updated');
    }
}
