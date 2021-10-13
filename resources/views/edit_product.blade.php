@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <p class="h2 bg-primary p-2 text-center text-white ">Update Product</p>
    <form method="POST" action="/update_data">
        @csrf
        <input type="text" name="id" value="{{$up_product->id}}" hidden>
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product_name" class="form-control" value="{{$up_product->product_name}}">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="product_price" class="form-control" value="{{$up_product->product_price}}">
        </div>
        <div class="form-group">
            <label for="">Product Brand</label>
            <input type="text" name="product_brand" class="form-control" value="{{$up_product->product_brand}}">
        </div>
        <div class="form-group">
            <label for="">Product Category</label>
            <input type="text" name="product_category" class="form-control" value="{{$up_product->product_category}}">
        </div>
        <input type="submit" name="submit" value="Update" class="btn btn-success p-2">
    </form>
</div>
@endsection