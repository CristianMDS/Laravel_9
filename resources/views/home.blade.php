@extends('template')

@section('content')

    <div class="bg-purple-700 px-20 py-20 rounded-xl drop-shadow-2xl mb-8 relative overflow-hidden">
        <span class="text-sm uppercase text-purple-950 bg-gray-300 rounded-md px-2 py-1">Publicaciones</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-300 mt-2">Proyecto de laravel 9.x foro desarrollo web.</p>
        <img 
            src="{{ asset('images/logo-dev.png') }}" 
            alt="logo-dev" 
            class="absolute -right-20 -bottom-20 opacity-45"/>
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900"> Contenido tecnico </h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach ($posts as $post)
                <a href="{{route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-900 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                        <span class="text-orange-700 ">{{ $post->created_at->format('Y-m-d')}}</span>
                    </p>

                    <h2>{{ $post->title }}</h2>
                    
                    <div class="text-xs text-gray-700 opacity-75 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" 
                                stroke-linejoin="round" 
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                        {{$post->user->name}}
                    </div>

                </a>
            @endforeach
                
        </div>

        {{ $posts->links() }}

    </div>


@endsection