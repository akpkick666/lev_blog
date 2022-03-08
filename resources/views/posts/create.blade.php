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
                                <p>Prefecture</p>
                                <select name="post[prefecture]" id="prefList" class="form-control">
                                    <option value="">選択してください</option>
                                    @forEach($prefectures as $index => $name)
                                        <option value="{{$index}}">{{$name}}</option>
                                    @endforeach
                                </select>
                                <p class="prefecture__error" style="color:red">{{ $errors->first('post.prefecture') }}</p>
                            </div>   
                            <div class="form-floating mb-3">
                                <p>City（複数選択可）</p>
                                <select name="post[city]" id="cityList" class="select2 form-control" multiple>
                                    <option value="">選択してください</option>
                                    @foreach ($cities as $index => $name)
                                        <option value="{{$index}}" data-val="">{{$name}}</option>
                                    @endforeach
                                </select>
                                <p class="city__error" style="color:red">{{ $errors->first('post.city') }}</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="date" name="post[date]" value="{{ old('post.date') }}" placeholder="Select date..."/>
                                <label for="date">Day</label>
                                <p class="date__error" style="color:red">{{ $errors->first('post.date') }}</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="gym" type="text" name="post[gym]" value="{{ old('post.gym') }}" placeholder="Input address..."/>
                                <label for="gym">Gym address</label>
                                <p class="gym__error" style="color:red">{{ $errors->first('post.gym') }}</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="fee" type="number" min="0" step="100" name="post[fee]" placeholder="How much does it take?" value="{{ old('post.fee') }}"/>
                                <label for="fee">Fee</label>
                                <p class="fee__error" style="color:red">{{ $errors->first('post.fee') }}</p>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" name="post[message]" placeholder="Enter your message here..." value="{{ old('post.message') }}" style="height: 10rem"></textarea>
                                <label for="message">Message</label>
                                <p class="message__error" style="color:red">{{ $errors->first('post.message') }}</p>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="button" data-toggle="modal" data-target="#exampleModal">submit</button></div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">チーム募集</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>投稿してよろしいですか？</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                                    <button type="submit" class="btn btn-primary">投稿</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>    
        
        
        
      
      
        
        
        
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
