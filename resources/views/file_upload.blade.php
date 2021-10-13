@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="up_file" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlFile1">Example file input</label>
              <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-success">
          </form>
    </div>
@endsection