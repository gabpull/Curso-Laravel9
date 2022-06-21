@extends('layouts.app')

@section('content')
    <div class="w-1/2 mx-auto">

        @foreach ($posts as $post)
            <article class="mt-5">
                <h1>
                    <a class="bg-blue-200 hover:bg-blue-400 text-blue-800 text-xl font-semibold mr-2 px-.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 dark:hover:bg-blue-300" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <p class="text-gray-800">{{ $post->excerpt }}</p>
            </article>
        @endforeach

    </div>
@endsection
