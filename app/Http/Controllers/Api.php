<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Api extends Controller
{
    function GetList()
    {
        return student::all();
    }

    function list(Request $request)
    {
        return $request->input();
    }

    // data insert....................
    // function DataInsert(Request $rst)
    // {
    //     $model = new student();
    //     $model->name = $rst->name;
    //     $model->email = $rst->email;
    //     $model->city = $rst->city;
    //     $model->Contact = $rst->phone;
    //     if ($model->save()) {
    //         return "data insert";
    //     } else {
    //         return "data is faild";
    //     }
    // }
    function UpdateData(Request $rst){
    $model = student::find($rst->id);
   

    $model->name = $rst->input('name');
    $model->email = $rst->input('email');
    $model->city = $rst->input('city');
    $model->contact = $rst->input('contact');

    if ($model->save()) {
        return "data updated";
    } else {
        return "update failed";
    }
}

// delete data
function deleteData($id){
  $del=student::destroy($id);
  if($del){
    return "Your Data is delete";

  }else{
    return "Your somthing code error";
  }
}



}
