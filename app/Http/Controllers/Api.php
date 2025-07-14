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

    // data insert....................
    function DataInsert(Request $rst){
       $model=new student();
       $model->name=$rst->name;
       $model->email=$rst->email;
     
       $model->city=$rst->city;
         $model->Contact=$rst->phone;
       if($model->save()){
        return "data insert";
       }else{
        return"data is faild";
       }

    }

}