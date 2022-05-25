<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function getIndex(){
        $obj=new \stdClass();
        $obj ->name ='mohammed';
        $obj ->id =5;
        $obj ->gender='MAle';
        // $data =[];
        // return view('welcome',compact('obj'));
        // return view('welcome')->with('name','mohammed');
        // return view('welcome',compact('data'));
    }
}
