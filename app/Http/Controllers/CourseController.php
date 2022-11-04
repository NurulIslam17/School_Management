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
}
