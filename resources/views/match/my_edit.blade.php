@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録情報変更</div>

                <div class="card-body">
                    <form method="POST" action="/match/{{ $user->id }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old("name",$user -> name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user -> email) }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">メンバー数</label>
        
                            <div class="col-md-4">
                                <input id="nunber" type="number" min="1" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number',$user -> number) }}">
                                                   
                                @error('number')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">経験者数</label>
        
                            <div class="col-md-3">
                                <input id="nunber_3" type="number" placeholder="3年以上" min="1" class="form-control{{ $errors->has('number_3') ? ' is-invalid' : '' }}" name="number_3" value="{{ old('number_3',$user -> number_3) }}">
                                                   
                                @error('number_3')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                            
                            <div class="col-md-3">
                                <input id="nunber_6" type="number" placeholder="6年以上" min="1" class="form-control{{ $errors->has('number_6') ? ' is-invalid' : '' }}" name="number_6" value="{{ old('number_6',$user -> number_6) }}">
                                                   
                                @error('number_3')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">チーム紹介</label>
        
                            <div class="col-md-6">
                                <textarea id="body" type="text" rows="3" class="form-control @error('body') is-invalid @enderror" name="body" >{{ old('body',$user -> body) }}</textarea>
                                                   
                                @error('body')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-info" href="/match/{{ $user->id }}" role="button">戻る</a>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    変更する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection