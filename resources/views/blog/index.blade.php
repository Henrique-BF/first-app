@extends('main')
    
@section('content')

    @foreach($posts as $post)
            <a href=" {{ route('blog.show', [$post->slug]) }} ">{{ $post->title }}</a>
            <p>{{$post->abstract}}</p>      
    @endforeach

    <br>
    
    <div class="flex justify-center">
        {!! $posts->links() !!}
    </div>

@endsection