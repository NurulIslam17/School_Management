<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

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

    //detailsCourse
    public function detailsCourse($id)
    {
//        return $courseAndTeacher = DB::table('courses')
//            ->join('teachers','teachers.id','courses.teacher_id')
//            ->select('teachers.*','courses.*')
//            ->get();
        return view('teacher.course.details',[
            'courseDetails' => Course::find($id),
//            'teacher' => $courseAndTeacher,
        ]);
    }
}
