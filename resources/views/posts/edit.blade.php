@extends('layouts.app')

@section('content')
    
    <div class=" shadow-md sm:rounded-lg w-1/2 mx-auto">
        
        <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="text-xl">Título</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Resumen</label>
                <textarea type="text" class="form-control" name="excerpt" rows="6">{{ $post->excerpt }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="content">Contenido</label>
                <textarea type="text" class="form-control" name="content" rows="6">{{ $post->content }}</textarea>
                
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <a href="/" class="asd">Inicio</a>
        <a href="/posts/{{ $post->id }}" class="asd">Cancelar</a>
    </div>


    @endsection

