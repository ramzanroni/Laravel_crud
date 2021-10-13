<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    public function userVerify(Request $req)
    {
        $data= $req->input('name');
        $req->session()->put('username', $data);
        return redirect('profile');

    }
    public function flashSession(Request $res_data)
    {
        $data= $res_data->input('name');
        $res_data->session()->flash('username', $data);
        return redirect('flashsession');
    }
    public function upFile(Request $req)
    {
        return $req->file('file')->store('img');
    }
}
