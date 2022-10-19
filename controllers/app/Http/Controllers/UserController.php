<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show()
    {
        return "Hello World";
    }

    public function index(){
        $name= " Merradou ";
        $age=2000 . " years old";
        return view('index',compact('name','age'));
        
      }
}
