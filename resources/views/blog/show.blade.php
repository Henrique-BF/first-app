@extends('main')
    
@section('content')
    <p>Titulo: {{$post->title}}</p>
    <br>
    <p>Resumo: {{ $post->abstract }}</p>
    <br>
    <p>Conteúdo: {{ $post->content }}</p>
    
@endsection