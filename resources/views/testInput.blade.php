@extends('layouts.app')

@section('content')
<h1>User Login System</h1>

<form method="POST" action="getdata">
    @csrf
    <label>Name</label><br>
    <input type="text" name="username" placeholder="Enter Your Username"/>
    <br>
    <br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Enter Your Password"/>
    <br>
    <br>
    <input type="submit" name="submit"/>
</form>
@endsection