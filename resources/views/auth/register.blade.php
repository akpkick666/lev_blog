@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">???????????????</label>
        
                            <div class="col-md-4">
                                <input id="nunber" type="number" min="1" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}">
                                                   
                                @error('number')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">????????????</label>
        
                            <div class="col-md-3">
                                <input id="nunber_3" type="number" placeholder="3?????????" min="1" class="form-control{{ $errors->has('number_3') ? ' is-invalid' : '' }}" name="number_3" value="{{ old('number_3') }}">
                                                   
                                @error('number_3')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                            
                            <div class="col-md-3">
                                <input id="nunber_6" type="number" placeholder="6?????????" min="1" class="form-control{{ $errors->has('number_6') ? ' is-invalid' : '' }}" name="number_6" value="{{ old('number_6') }}">
                                                   
                                @error('number_3')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">???????????????</label>
        
                            <div class="col-md-6">
                                <textarea id="body" type="text" rows="3" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}"></textarea>
                                                   
                                @error('body')
                                    <span class="invalid-feedback" role="alert" style="display:inline;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">????????????</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>????????????????????????????????????</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">???????????????</button>
                                    <button type="submit" class="btn btn-primary">??????</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
