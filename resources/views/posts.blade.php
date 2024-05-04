@extends('template')

@section('content')

<h1>Publicaciones</h1>

@foreach ($posts as $post)
<br><br>
<tr>
    <span> <b>ID: </b> {{$post->id}}  </span><br>
    <span> <b>TITLE: </b> {{$post->title}}  </span><br>
    <span> <b>SLUG: </b> <a href="/post/{{$post->slug}}">{{$post->slug}}</a>  </span><br>
    <span> <b>USER_ID: </b> {{$post->user_id}}  </span><br>
</tr>
@endforeach

@endsection