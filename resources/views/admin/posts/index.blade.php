@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')

<!--<a href="{{ route('posts.create') }}">Criar novo Post</a>-->
<a href="create.blade.php">Criar novo Post</a>
<hr>

@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<form action="{{ route('posts.search') }}" method="post">
@csrf
    <input type="text" name="search" placeholder="Filtar">
    <button type="submit">Filtrar</button>
</form>

<h1>Posts</h1>

@foreach ($posts as $post)
    <p>
        <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width:100px;">
        {{ $post->title }}
    [
        <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
        <a href="{{ route('posts.edit', $post->id) }}">Edite</a>
    ]
    </p>

@endforeach

<hr>
@if (isset($filters))
    {{ $posts ->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif

@endsection
