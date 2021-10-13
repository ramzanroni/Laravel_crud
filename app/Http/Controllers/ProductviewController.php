<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductviewController extends Controller
{
    //
    public function show()
    {
        $data=Product::paginate(3);
        return view('product_list', ['products'=>$data]);
    }
    public function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('pagination');
    }
    public function selectUpData($id)
    {
        $updata= Product::find($id);
        return view('edit_product', ['up_product'=>$updata]);
    }
    public function updateData(Request $req)
    {
        $data=Product::find($req->id);
        $data->product_name=$req->product_name;
        $data->product_price=$req->product_price;
        $data->product_brand=$req->product_brand;
        $data->product_category=$req->product_category;
        $data->save();
        return redirect('pagination');
    }
}
