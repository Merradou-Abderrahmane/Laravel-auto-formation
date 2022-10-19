<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    // public function show($id){
    //     return 'User '.$id;
    // }
    public function show($id){ 
        return $id;
    } 
}
