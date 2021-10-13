@extends('layouts.app')

@section('content')
    <p class="h2">Welcome {{session('username')}}</p>
    <a href="/logout">Logout</a>
@endsection