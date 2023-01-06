@extends("layouts.main")

@section("container")
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <small><p class="fw-bold">Created By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="card-img-top img-fluid img-thumbnail my-3" alt="{{ $post->category->name }}"></small> 

            <article class="mb-3">

                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block">Back To Post</a>

        </div>
    </div>
</div>
    
@endsection
