
@extends("layouts/main")
@section("container")
        @foreach($posts as $post)
        <article>
              <h1>
               <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h1>
              <p>{{ $post->excerp }}</p>
        </article>
             
        @endforeach
@endsection

