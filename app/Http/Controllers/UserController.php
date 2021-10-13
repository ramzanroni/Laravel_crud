<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show($id)
    {
       return "This is my ID: ". $id;
    }
    function blade($user_name)
    {
        return view('hello',['user_name'=>$user_name]);
    }

}
