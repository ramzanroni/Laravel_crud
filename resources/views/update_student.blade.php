@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <p class="p-2 mt-2 mb-2 text-center text-white bg-info">Add Student Query Builder</p>
        </div>
        <form action="/update_student_data" method="POST">
            @csrf
            <input type="text" value="{{$student_data->id}}" name="id" hidden>
            <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" name="student_name" value="{{$student_data->stu_name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" value="{{$student_data->stu_address}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="{{$student_data->stu_phone}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Student ID</label>
                <input type="text" name="student_id" value="{{$student_data->stu_id}}" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-success p-2">
        </form>
    </div>
@endsection