@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @section('content')
        <h1>Blog Name</h1>
        <p class="create">[<a href='/posts/create'>create</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <div class="info">
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <img src=""></img>
                        <p class="body">{{$post -> body}}</p>
                    </div>
                    <div class="select">
                        <bottun type="bottun">Bottun1</bottun>
                        <bottun type="bottun">Bottun2</bottun>
                        <p>comment</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
</html>
