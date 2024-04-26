@csrf

<label class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-xs text-red-600">
    @error('title')
        {{$message}}
    @enderror
</span>
<input type="text" 
    name="title" 
    class="rounded border-gray-200 w-full mb-4" 
    value="{{ old('title', $posts->title) }}"
/>

<label class="uppercase text-gray-700 text-xs">Slug</label>
<span class="text-xs text-red-600">
    @error('slug')
        {{$message}}
    @enderror
</span>
<input type="text" 
    name="slug" 
    class="rounded border-gray-200 w-full mb-4" 
    value="{{ old('slug', $posts->slug) }}"
/>

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600">
    @error('body')
        {{$message}}
    @enderror
</span>
<textarea 
    name="body" 
    rows="5" 
    class="rounded border-gray-200 w-full mb-4" >{{ old('body', $posts->body)}}
</textarea>

<div>
    <a href="{{route('posts.index')}}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-xs rounded bg-gray-800 text-white py-2 px-1 cursor-pointer">
</div>
