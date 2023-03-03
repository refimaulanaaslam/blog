@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-8">
                <h2 class="text-center">{{$posts->slug}}</h2>  
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to my post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $posts->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('are you sure want to delete?')">Delete<span data-feather="x-circle"></span></button>
                  </form>
                @if ($posts->image)
                <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid my-3" alt="{{ $posts->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x800?{{ $posts->category->name }}" class="img-fluid my-3" alt="{{ $posts->category->name }}">
                @endif
            <article class="my-4 fs-6">
                {!! $posts->body !!}
            </article>
        </div>
    </div>
</div>
 
@endsection