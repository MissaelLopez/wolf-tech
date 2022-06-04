@extends('layouts.dashboardLayout')
@section('content')
@include('includes.breadcrumb', [ 'breadcrumbs' => [ 'Home' => '/', 'Dashboard' => '/dashboard', 'Publicaciones' => '/dashboard/posts', 'Nueva Publicación' => '' ] ])
<div class="py-12">    
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6">
              <form method="POST" action="/edit-post/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                  <div class="mb-4">
                      <label class="text-xl text-black dark:text-white">Titulo <span class="text-red-500">*</span></label></br>
                      <input value="{{ $post->title }}" type="text" class="text-black border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required />
                  </div>                  

                  <div class="mb-8">
                      <label class="text-xl text-black dark:text-white">Contenido <span class="text-red-500">*</span></label></br>
                      <textarea name="content" class="border-2 border-gray-500">
                        {{ $post->content }}
                      </textarea>
                  </div>

                  <div class="mb-8">
                      <label class="text-xl text-black dark:text-white">Sección <span class="text-red-500">*</span></label></br>
                      <select class="focus:outline-none p-2 text-primary" name="section">
                        <option value="noticias">Noticias</option>
                        <option value="opiniones">Opiniones</option>
                        <option value="componentes">Componentes</option>
                      </select>
                  </div>

                  <input type="text" name="editor" value="{{ $user->id }}" hidden>

                  <div class="flex p-1">
                    <button type="submit" class="mt-4 font-bold bg-transparent hover:bg-primary px-5 py-2 border hover:border-none border-dark dark:border-white text-dark dark:text-white hover:text-white rounded-lg transition ease-in-out uppercase duration-300">
                      Guardar
                    </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'content' );
</script>
@endsection