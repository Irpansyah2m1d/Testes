
@extends("layouts/main")
@section("container")
<h1>{{ $title }}</h1>
<div class="container">
      <div class="row">
            <div class="col-md-12 my-3">
                  <div class="card mb-3">
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                        <div class="card-body text-center">
                          <h3 class="card-title">{{ $posts[0]->title }}</h3>
                          <small>
                              <p class="fw-bold">Created By <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> Post at {{ $posts[0]->created_at->diffForHumans() }}</p></small>
                          <p class="card-text">{{ $posts[0]->excerp }}</p>
                          <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                        </div>
                  </div>
            </div>
      </div>
</div>
<div class="container">
      <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4">
                  <div class="card my-3">
                        <div class="position-absolute py-2 px-3" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a> </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                          <h4 class="card-title">{{ $post->title }}</h4>
                          <small>
                              <p class="fw-bold">Created By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> Post at {{ $post->created_at->diffForHumans() }}</p></small>
                          <p class="card-text">{{ $post->excerp }}</p>
                          <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                        </div>
                  </div>
            </div>
            @endforeach
      </div>
</div>
        
@endsection

