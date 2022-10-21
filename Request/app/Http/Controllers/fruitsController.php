<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fruit;

class fruitsController extends Controller
{
    public function showFruits()
    {
        // return fruit::all();
        // return view('index');

        $data = fruit::all();
        return view('index', ['fruits' => $data]);


    }
}
