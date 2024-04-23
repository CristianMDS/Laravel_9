<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>{{ __("You're logged in!") }}</h2>
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> <!-- Este maneja la posicion -->
                <div class="p-6 text-gray-900 dark:text-gray-100"> <!-- Este maneja la caja de cada uno de los elementos -->
                    <table class="mb-4">
                        <thead>
                            <tr>
                                <th class="border-b border-cyan-950">Listado</th>
                            </tr>
                        </thead>
                        <tr>    
                            <td>
                                <a href="{{ route('posts.index') }}" class="text-indigo-600">Listado de publicaciones</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
