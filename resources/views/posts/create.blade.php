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
                        <form action="/posts" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="date" name="post[date]" placeholder="Enter your name..." value="{{ old('post.date') }}"/>
                                <label for="date">Day</label>
                                <p class="date__error" style="color:red">{{ $errors->first('post.date') }}</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="text" placeholder="name@example.com" data-sb-validations="required,date" />
                                <label for="date">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>    
        
        
        
        <p>都道府県</p>
        <select name="pref_id" id="prefList">
            <option value="">選択してください</option>
            @forEach($prefectures as $index => $name)
                <option value="{{$index}}">{{$name}}</option>
            @endforeach
        </select>
        
        <p>市区町村</p>
        <select name="city_id" id="cityList">
            <option value="">選択してください</option>
            @foreach ($cities as $index => $name)
                <option value="{{$index}}" data-val="">{{$name}}</option>
            @endforeach
        </select>
        
        
        <script src="{{ mix('js/city.js') }}"></script>
        
        
        
        
        <h1>Blog Name</h1>
        
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        
        <div class="footer">
            <a href="/">back</a>
        </div>
        
        
    @endsection    
    </body>
</html>
