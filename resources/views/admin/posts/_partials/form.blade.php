@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="file" name="image" id="image"><br><br>
<input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title ?? old('title') }}"><br><br>
<textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" style="resize: none">{{ $post->content ?? old('content') }}</textarea><br><br>
<button type="submit">Enviar</button>
