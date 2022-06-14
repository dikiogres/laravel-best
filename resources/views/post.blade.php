@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2 class="mb-3">{{ $post->title }}</h2>
            
                    <h5>by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">
                        {{ $post->category->name }}</a></h5>
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Back to Blog Page</a>
            </div>
        </div>
    </div>

@endsection


