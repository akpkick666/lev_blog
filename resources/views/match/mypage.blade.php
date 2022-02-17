@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">マイページ</h2>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-4">
                <div class="text-center">
                    <img class="mx-auto rounded-circle" src="" alt="..." />
                    <h4>{{$user -> name}}</h4>
                </div>
            </div>
        </div>   
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <div>
                                    {{$user -> email}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">メンバー数</label>
                            <div class="col-md-6">
                                <div>
                                    {{$user -> number}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">経験者数</label>
                            <div class="col-md-3">
                                <div>
                                    {{$user -> number_3}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    {{$user -> number_6}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">チーム紹介</label>
                            <div class="col-md-6">
                                <div>
                                    {{$user -> body}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-info" href="/match/{{$user->id}}/edit" role="button">編集</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection