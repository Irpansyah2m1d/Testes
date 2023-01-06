
@extends("layouts/main")
@section("container")
<h1 class="text-center mb-4"><a href="/posts" class="text-decoration-none text-dark">{{ $title }}</a></h1>
<div class="row justify-content-center">
      <div class="col-md-8">
            <form action="" method="get">
                  @if(request("category"))
                        <input type="hidden" name="category" value="{{ request("category") }}">
                  @endif
                  @if(request("author"))
                        <input type="hidden" name="author" value="{{ request("author") }}">
                  @endif
                  <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ request("keyword") }}" name="keyword" placeholder="Masukan Pencarian...">
                        <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
      </div>
</div>
@if ($posts->count())
      <div class="container">
            <div class="row">
                  <div class="col-md-12 my-3">
                        <div class="card mb-3">
                              <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                              <div class="card-body text-center">
                              <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                              <small>
                                    <p class="fw-bold">Created By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> Post at {{ $posts[0]->created_at->diffForHumans() }}</p></small>
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
                              <div class="position-absolute py-2 px-3" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a> </div>
                              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                              <div class="card-body">
                              <h4 class="card-title">{{ $post->title }}</h4>
                              <small>
                                    <p class="fw-bold">Created By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> Post at {{ $post->created_at->diffForHumans() }}</p></small>
                              <p class="card-text">{{ $post->excerp }}</p>
                              <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                              </div>
                        </div>
                  </div>
                  @endforeach
            </div>
      </div>
@else
      <p class="text-danger text-center fw-bold">Post Not Found!!!</p>
@endif
        
<div class="d-flex justify-content-end">
      {{ $posts->links() }}
</div>
@endsection

