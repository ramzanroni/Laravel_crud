<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h1>THis is user page</h1>
@csrf
@for($i=0; $i<10; $i++)
<h1>{{$i}}</h1>
@endfor

@foreach ($user as $item)
 <h1>{{$item}}</h1>   
@endforeach
<h2>Current time {{ time() }}</h2>

<script>
   alert("This is working");
    var data= @JSON($user);
    console.log(data);
    console.warn(data);
</script>