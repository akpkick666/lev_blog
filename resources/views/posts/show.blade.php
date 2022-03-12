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
    
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Get in touch</h2>
                    <p class="lead mb-0">We'd love to hear from you</p>
                </div>
            
                
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        
                        
                        
                            
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>   
        
        
       
    
        
        
        
        
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline" onsubmit="return check();">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>

        <div class="post">
            <h2 class="title">{{$post -> date}}</h2>
            <img src=""></img>
            <p class="body">{{$post -> message}}</p>
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
