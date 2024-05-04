@extends('template')

@section('content')
<div class=" max-w-3xl mx-auto">
    @foreach ($post as $p)
        <h1 class="text-5xl mb-8"> {{$p->title}}  </h1>
        <h2 class="text-3xl mb-8"> 
            <strong>ID: </strong> 
            {{$p->id}}  
        </h2>
        <textarea rows="10" cols="90" class="resize-none leading-relaxed text-lg bg-gray-500 py-2 px-4 rounded-xl bg-opacity-35"> {{$p->body}}  </textarea>

    @endforeach

    <div class="flex m-4 justify-end ">
        <a href="{{ route('home') }}" class="m-4">
            <input type="button" value="Volver" class="bg-red-600 text-sm text-white rounded px-1 py-2 cursor-pointer">
        </a>
    </div>
</div>


@endsection