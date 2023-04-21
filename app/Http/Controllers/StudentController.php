<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }
    public function index()
    {
        $data['student'] = Student::get();
        return view('student.index', compact('data'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:25',
            'address' => 'required|max:255',
            'email' => 'required|email|max:25',
            'contact' => 'required|numeric|digits:10',
            'gender' => 'required'

        ]);
        $model = new Student;
        $model->name = $request->name;
        $model->address = $request->address;
        $model->email = $request->email;
        $model->contact = $request->contact;
        $model->gender = $request->gender;
        $success = $model->save();
        return redirect('/index');
    }
    public function delete($id){
        $data['student']=Student::findOrFail($id);
        $data['student']->delete();
        return redirect('/index');


    }


}
