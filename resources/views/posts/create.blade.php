<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crea un Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> <!-- Este maneja la posicion -->
                <div class="p-6 text-gray-900 dark:text-gray-100"> <!-- Este maneja la caja de cada uno de los elementos -->
                    <form action="{{ route('posts.store') }}" method="post">
                        <!-- @csrf -->
                        @include('posts._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
