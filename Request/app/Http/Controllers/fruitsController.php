<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\fruit;

class fruitsController extends Controller
{
    // public function showFruits(){
    //     $fruits = DB::table('fruits')->get();
    //     return view('index', ['fruits' => $fruits]);
    // // 
    public function showFruits()
    {
        // return fruit::all();
        // return view('index');

        $data = fruit::all();
        return view('index', ['fruits' => $data]);
    }
    
    // get fruit by id
    public function getFruit($id)
    {
        $fruit = DB::table('fruits')->where("id",$id)->get();
        
        return view('fruit',compact('fruit'));
    }

    public function select()
    {
        $fruit = DB::table('fruits')
        ->select('name','id')
        ->get();
 
        return view('fruit',compact('fruit'));
    }
    
    // join table

    public function join(){
        $students = DB::table('students')
            ->join('promotions', 'promotions.id', '=', 'students.promotionID')
            ->select('*')
            ->get();
            return view('join',compact('students'));
    }

}
