<x-layout :title="$post->title">
    <div class="container">
        <article>
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </article>

        <a href="/" class="asd"> Inicio </a>
        <a href="/posts/{{ $post->id }}/edit" class="asd"> Editar </a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block">
            @method('DELETE')
            @csrf
            <button class="noselect" onclick="return confirm('¿Estás seguro de borrar el post?')"><span
                    class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                        </path>
                    </svg></span></button>
        </form>
        <br><br>
        <h4 class="font-semibold font-black">Comentarios</h4>
        <div>
            @foreach ($comments as $comment)
                <div>{{ $comment->content }}</div>
                <small style="color: #aaa"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $comment->name }}</small>
                <hr>
            @endforeach
        </div>
    </div>
</x-layout>
