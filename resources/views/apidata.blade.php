@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data fatch From Api</h1>
<table border="1" class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Image</td>
        </tr>
    </thead>
    <tbody>
     
        @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['last_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}" alt=""></td>
        </tr>
        @endforeach
        
    </tbody>
</table>

</div>
@endsection

