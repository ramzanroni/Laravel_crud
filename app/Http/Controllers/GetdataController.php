<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetdataController extends Controller
{
    //
    public function http_handel(Request $req)
   {
     return $req->input();
   }
   public function http_handel_data_get(Request $re)
   {
       return $re->input();
   }
}
