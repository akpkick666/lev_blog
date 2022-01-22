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
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline" onsubmit="return check();">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>

        <div class="post">
            <h2 class="title">{{$post -> title}}</h2>
            <img src=""></img>
            <p class="body">{{$post -> body}}</p>
            <p class="updated_at">{{$post -> updated_at}}</p>
        </div>
        
        <div class="footer">
            <a href="/">back</a>
        </div>
         <script>
            function check(){
                const checked = confirm("本当に削除しますか？");
                if(checked == true){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        @endsection
    </body>
</html>
