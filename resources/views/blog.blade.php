@extends('app')

@section('content')
<div class="container px-3 py-5">
    <h1>Blog</h1>

    <hr>

    @foreach($posts as $post)
    <h4>{{ $post->title }}</h4>

    <p>
        <i>Fecha de publicacion</i> {{ $post->created_at->format('d-m-y')}} <br>
        <a href="{{ route('post', $post->slug)}}"> ver mas &raquo;</a>
    </p>
    @endforeach
</div>
@endsection