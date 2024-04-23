@csrf

<label class="uppercase text-gray-700 text-xs">ID</label>
<input type="number" name="id" class="rounded border-gray-200 w-full mb-4" value="{{$posts->id}}">

<label class="uppercase text-gray-700 text-xs">TITULO</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{$posts->title}}">

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4" >{{$posts->body}}</textarea>

<div>
    <a href="{{route('posts.index')}}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-xs rounded bg-gray-800 text-white py-2 px-1 cursor-pointer">
</div>
