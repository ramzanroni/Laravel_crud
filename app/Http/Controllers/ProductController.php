<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function data_insert(Request $req)
    {
        $member=new Product;
        $member->product_name=$req->product_name;
        $member->product_price=$req->product_price;
        $member->product_brand=$req->product_brand;
        $member->product_category=$req->product_category;
        $member->save();
        return redirect('pagination');
    }
}
