@extends('layouts.app')
@section('content')
<div class="container">
    <a href={{'/saveData'}} class="btn btn-info p-2 m-2">Add Product</a>
    <a href="view_student_qb" class="btn btn-warning">Go Query Builder</a>
    <p class="p2 bg-primary p-3 text-center text-white">Product List</p>
    <table class="table table-hover table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($products as $product)
            
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_brand}}</td>
                    <td>{{$product->product_category}}</td>
                    <td>
                        <a class="m-2" href={{"delete/".$product->id}}><i class="far fa-trash-alt text-danger btn"></i></a>
                        <a href={{'/update/'.$product->id}}><i class="fas fa-edit text-info"></i></a>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$products->links()}}
    </div>
</div>
    
@endsection
