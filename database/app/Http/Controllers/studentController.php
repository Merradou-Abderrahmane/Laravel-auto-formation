<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class studentController extends Controller
{
    public function addStudent(Request  $request){
        // print_r($request -> input());
        $student = new student;
        $student -> name = $request-> input('name');
        $student -> save();
        // $student->save();
    }

    public function getStudents(){
        // return student::all();
        $data = student::all();
        return view('index', ['students' => $data]);
    }

}
