<?php

namespace App\Http\Controllers;
use App\Models\Course;
use DB;

use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function adminManageCourse()
    {
        $coursesWithTeacher = DB::table('courses')
            ->join('teachers','teachers.id','courses.teacher_id')
            ->select('teachers.*','courses.*')
            ->orderBy('courses.id','DESC')
            ->get();
        return view('admin.course.manage',[
            'allData' => $coursesWithTeacher,
        ]);
    }

    public function changeCourseStatus($id)
    {
        $courseInfo = Course::find($id);

        if($courseInfo->c_status == 0)
        {
            $courseInfo->c_status = 1;
            $courseInfo->save();
        }
        else{
            $courseInfo->c_status = 0;
            $courseInfo->save();
        }

        return back()->with('message','Course Status Changed');
    }
}
