<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    function DataInsert(Request $rst)
    {
        $rules=array('name'=>'required|min:2|max:10');
        $validation=Validator::make($rst->all(),$rules);
        if($validation->fails()){
            return $validation->errors();
        }
        else{
             $model = new student();
        $model->name = $rst->name;
        $model->email = $rst->email;
        $model->city = $rst->city;
        $model->Contact = $rst->phone;
        if ($model->save()) {
            return "data insert";
        } else {
            return "data is faild";
        }

        }
       
    }
    // update
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

// serch
function searchData($name){
    $serch=student::where('name','like',"%$name%")->get();
    if($serch){
        return "This is your data=>  $serch";
    }else{
        return "Somthing is wrong";
    }
}
// validation....................................


}
