<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class TeacherController extends Controller
{
    public  function index()
    {
        return view('admin.teacher.index');
    }

    public  function manage()
    {
        return view('admin.teacher.manage',[
            'teachers' => Teacher::latest()->get(),
        ]);
    }

    public  function createTeacher(Request $request)
    {
        Teacher::saveTeacher($request);
        return back()->with('success','Teacher Created Successfully');
    }

    //editTeacher
    public  function editTeacher($id)
    {
//        return Teacher::find($id);
        return view('admin.teacher.edit',[
            'teacher'=>Teacher::find($id),
        ]);
    }

    //updateTeacher
    public function updateTeacher(Request $request)
    {
        $id = $request->update_teacher;
        Teacher::updateData($request,$id);
        return redirect()->route('manage.teacher')->with('success','Teacher Updated Successfully');

    }

    //deleteTeacher
    public function deleteTeacher($id)
    {
        Teacher::deleteTeacher($id);
        return back()->with('message','Data Deleted');

    }

    //changeStatus
    public function changeStatus($id)
    {
        $status = Teacher::find($id);
        if($status->status == 1)
        {
            $status->status = 0;
            $status->save();
        }
        else{
            $status->status = 1;
            $status->save();
        }

        return back()->with('message','Status Changed');
    }
}
