<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Api extends Controller
{
   function GetList(){
        return student::all();
    }

   function list(Request $request){
        return $request->input();
    }

}