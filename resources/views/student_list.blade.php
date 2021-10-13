@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12 m-2">
        <a href={{'/pagination'}} class="btn btn-warning p-2 m-2">Go Add Product</a>
        <a href={{'/add_student'}} class="btn btn-primary p-2 m-2">Student Add Using Query Builder</a>
        <p class="p-3 bg-info text-center text-white">Student List</p>
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Student ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->stu_name}}</td>
                        <td>{{$student->stu_address	}}</td>
                        <td>{{$student->stu_phone}}</td>
                        <td>{{$student->stu_id}}</td>
                        <td><a href={{'/update_student/'.$student->id}} class="m-2"><i class="fas fa-edit text-info"></i></a> <a href={{'/stu_delete/'.$student->id}} class="m-2 "><i class="fas fa-trash text-danger"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        {{$students->links()}}
    </div>
    <div class="col-md-12 m-2">
        <p class="p-3 text-center text-white bg-success">Data Find Using Where Condition</p>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Student ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($base_addresses as $base_address)
                    <tr>
                        <td>{{$base_address->id}}</td>
                        <td>{{$base_address->stu_name}}</td>
                        <td>{{$base_address->stu_address	}}</td>
                        <td>{{$base_address->stu_phone}}</td>
                        <td>{{$base_address->stu_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$base_addresses->links()}}
    </div>
    <div class="col-md-12">

        <p class="p-2 text-center text-white bg-primary mt-2 mb-2">
            Seleted By ID
        </p>
        <table class="table table-striped table-hober table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Student ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection