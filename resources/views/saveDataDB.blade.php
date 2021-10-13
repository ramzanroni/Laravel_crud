@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <form method="POST" action="save_data_db">
        @csrf
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="product_price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Brand</label>
            <input type="text" name="product_brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Product Category</label>
            <input type="text" name="product_category" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-success p-2">
    </form>
</div>
@endsection