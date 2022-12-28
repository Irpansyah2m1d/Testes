
@extends("layouts/main")
@section("container")

<div class="container">
        <div class="row">
                <h1 class="mb-3">All Categories</h1>
                @foreach($categories as $category)
                    <div class="col-md-4">
                                <div class="card bg-dark">
                                        <a href="/categories/{{ $category->slug }}" class="text-white"><img src="https://source.unsplash.com/500x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                        <div class="card-img-overlay p-0 d-flex align-items-center">
                                        <h3 class="card-title flex-fill text-center" style="background-color: rgba(0,0,0,0.6);">{{ $category->name }}</h3>
                                        </div></a>
                                </div>
                        </div>
                 @endforeach
                        </div>
                </div>
@endsection

