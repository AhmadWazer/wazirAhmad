<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function create()
    {
        $url = url('/students');
        $tittle = "Student Registration";
        $students = null;
        if ($students) {
            $student = Student::find($id);
            $url = url('/students/update/'.$id);
            $title = "Update Student";
        }
        $data = compact('students', 'url', 'tittle');

        return view('students')->with($data);
    }

    public function store(request $request)
    {

        $students = new Students;
        $students->name = $request['name'];
        $students->email= $request['email'];
        $students->gender = $request['gender'];
        $students->DOB = $request['dob'];
        $students->address = $request['address'];
        $students->state = $request['state'];
        $students->country = $request['country'];
        $students->password = md5($request['password']);
        $students->status = $request['status'];
        $students->points = $request['points'];
        $students->save();

        return redirect('/students/view');

    }

    //searching and view all data
    public function view(request $request)
    {
        $search = $request['search'] ?? "";
        if("search" != ""){
             $students = Students::Where('name' ,'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->paginate(10);
        }else{
            $students = Students::paginate(10);
        }
        
        $data = compact('students','search');
        return view('student_view')->with($data);
    }

//for delete
    public function delete($id)
    {
        $students = Students::find($id);
        if(!is_null($students)){
            $students->delete();
        }
        return redirect()->back();
    }
    //for permenent delete
    public function forceDelete($id)
    {
        $students = Students::withTrashed()->find($id);
        if(!is_null($students)){
            $students->forceDelete();
        }
        return redirect()->back();
    }
    //for restore
    public function restore($id)
    {
        $students = Students::withTrashed()->find($id);
        if(!is_null($students)){
            $students->restore();
        }
        return redirect()->back();
    }
    public function trash(){
        $students = Students::onlyTrashed()->get();
        $data = compact('students');
        return view('studentTrash')->with($data);
    }


    public function edit($id)
    {
        $students = Students::find($id);
        if(is_null($students)){
            return redirect('students/view');
        }else{
            $tittle = "Update Students";
            $url = url('/students/update/')."/".$id;
            $data = compact('students','url','tittle');
            return view('students')->with($data);
        }
    }
    
    

    public function update($id, Request $request)
    {
        $students = Students::find($id);
        $students->name = $request['name'];
        $students->email= $request['email'];
        $students->gender = $request['gender'];
        $students->DOB = $request['dob'];
        $students->address = $request['address'];
        $students->state = $request['state'];
        $students->country = $request['country'];
        $students->status = $request['status'];
        $students->points = $request['points'];
        $students->save();
        
        return redirect('/students/view');
        
    }

}
