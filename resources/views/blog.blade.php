@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Blog Page</h1>

    @foreach ($posts as $post)
        <article class="mb-5 pb-4 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <h5>by <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">
                {{ $post->category->name }}</a></h5>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection