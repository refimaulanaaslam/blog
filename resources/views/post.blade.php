@extends('layouts.main')

@section('container')

    
    {{-- karena pengambilan array sudah di definisikan oleh fungsi collection firstWhere di model berdasarkan slug jdi tidak perlu looping lagi--}}
    {{-- @foreach ($posts as $post) --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h2 class="text-center">{{$posts->title}}</h2>  
                    <p class="text-center">By {{ $posts->user->name }} in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" class="img-fluid rounded" style="height:
                    400" alt="{{ $posts->category->name }}">
                <article class="my-4 fs-6">
                    {!! $posts->body !!}
                </article>
                <a href="/posts" class="d-block mb-5 text-decoration-none "> <<< Back to post </a>
            </div>
        </div>
    </div>
        


@endsection