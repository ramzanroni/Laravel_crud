<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
   public function lodeView()
   {
       $data=['Ramzan', 'Roni'];
    return view('users', ["user"=>$data]);
   }
   public function getData(Request $req)
   {
      return $req->input();
   }
   public function dataview()
   {
      return DB::select("SELECT * FROM `books`");
   }
   public function index()
   {
      $data= Http::get("https://reqres.in/api/users?page=1");
      return view('apidata', ["collection"=>$data['data']]);
   }
   public function http_handel(Request $req)
   {
     return $req->input();
   }
}
