
@extends("layouts/main")
@section("container")
<h1>Halaman Post</h1>
        @foreach($posts as $post)
        <article class="mt-4">
              <h3>
               <a href="/post/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }}</a></h3>
               <p class="fw-bold">Created By <a href="/authors/" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
              <p>{{ $post->excerp }}</p>
              <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
              <hr class="pb-3">
        </article>
             
        @endforeach
@endsection

