@extends('layouts.main')
{{-- @dd($posts) --}}

@section('container')
<h1 class="mt-5 text-center">{{ $title }}</h1>
{{-- Searching --}}
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

{{-- Header post --}}
@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
        <div style="max-height:350px; overflow:hidden;">
            <img src="{{ route('storage.' . $posts[0]->image) }}" class="card-img-top" alt="...">
        </div>
        @else
        <img src="https://source.unsplash.com/500x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none text-dark"> 
                {{ $posts[0]->slug}}</a> | <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->category->name }}</a></h3>
            <small class="text-muted ">
                By :<a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none text-danger">{{ $posts[0]->user->name }}</a>in
                    <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-danger">{{$posts[0]->category->name}}</a>
                    {{-- diffForHumans() untuk agar tanggal postingannya bisa dibaca dengan user ambil data created  di db lalu change pada method  diffForhumans() --}}
                    {{ $posts[0]->created_at->diffForHumans() }}
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-danger rounded-0 p-3 px-4">Read More</a>
        </div>
    </div>
{{-- main content --}}
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card" style="min-height : 670px">
                <div class="position-absolute px-4 py-2" style="background-color: rgb(0, 0, 0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title p-2">{{ $post->slug}}</h5>
                    <small class="text-muted p-2">
                        By :<a href="/posts?user={{ $post->user->username }}" class="text-decoration-none text-danger">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                        <p class="card-text" style="margin-bottom: 20px">{{ $post->excerpt }}</p>
                    <div class="buton" style=""> 
                        <a href="/posts/{{ $post->slug }}" class="btn btn-secondary text-white btn-cart" >Read More...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-3">No Post Found</p>
@endif

{{-- pagination --}}
<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>
@endsection

