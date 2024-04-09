@extends('template')

@section('content')

<br><br>
@foreach ($post as $p)

<tr>
    <span> <b>ID: </b> {{$p->id}}  </span><br>
    <span> <b>TITLE: </b> {{$p->title}}  </span><br>
    <span> <b>BODY: </b> {{$p->body}}  </span><br>
</tr>
    
@endforeach

@endsection