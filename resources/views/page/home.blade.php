@extends('main')

@section('content')
    @parent

    <p>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        aqui vem o conteudo do site <br>
        <br>
        aqui vem os titulos das postagens <br>
        @foreach($posts as $post)
            <a href=" {{ route('blog.show', [$post->slug]) }} ">{{ $post->title }}</a>
        @endforeach

    </p>
@endsection