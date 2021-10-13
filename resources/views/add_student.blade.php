@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <p class="p-2 m-2 text-center text-white bg-info">Add Student Query Builder</p>
        </div>
        <form action="insert_student" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" name="student_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="product_address" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Student ID</label>
                <input type="text" name="student_id" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-success p-2">
        </form>
    </div>
@endsection