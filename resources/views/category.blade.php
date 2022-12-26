
@extends("layouts/main")
@section("container")
<h1>Post Category: {{ $category }}</h1>
        @foreach($posts as $post)
        <article>
              <h1>
               <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h1>
              <p>{{ $post->excerp }}</p>
        </article>
             
        @endforeach
@endsection

