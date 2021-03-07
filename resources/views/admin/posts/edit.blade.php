@extends('admin.layout.app')

@section('title', "Editar o Post {$post->title}")

@section('content')
    <h1>Editar o Post <strong>{{ $post->title }}</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @method('put')
        @include('admin.posts._partials.form')
    </form>
@endsection
