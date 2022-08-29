@extends('layouts.app')

@section('content')
<div class="container register-box">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                  <span class="register-title col-md-8">
                    <i class="fas fa-mobile" aria-hidden="true"></i>
                    {{ __('Register Title') }}
                  </span>

                  <div class="col-md-4 reg-right-login">{{ __('Already Has Account') }}<a href="{{ route('login') }}">{{ __('Account Login') }}</a></div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                          <label class="col-md-4">
                            <input type="radio" value="1" name="usertype" checked /> 工业企业注册
                          </label>
                          <label class="col-md-4">
                            <input type="radio" value="2" name="usertype" /> 解决方案商注册
                          </label>
                          <label class="col-md-4">
                            <input type="radio" value="3" name="usertype" /> 服务商注册
                          </label>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3 register-input">
                            <label for="mobile" class="col-md-4 col-form-label">
                              {{ __('Mobile') }}
                              <span>*</span>
                            </label>

                            <div class="col-md-8">
                                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="{{ __('Please enter your mobile phone number') }}">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 register-input">
                            <label for="mobile_code" class="col-md-4 col-form-label">
                              {{ __('Mobile Code') }}
                              <span>*</span>
                            </label>

                            <div class="col-md-8">
                                <input id="mobile_code" type="mobile_code" class="form-control @error('mobile_code') is-invalid @enderror" name="mobile_code" value="{{ old('mobile_code') }}" required autocomplete="mobile_code" placeholder="{{ __('Please enter SMS verification code') }}">
                                <a class="btn btn-primary send-code">{{ __('Send SMS verification code') }}</a>
                                @error('mobile_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3 register-input">
                            <label for="password" class="col-md-4 col-form-label">
                              {{ __('Set Password') }}
                              <span>*</span>
                            </label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Please input a password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 register-input">
                            <label for="password-confirm" class="col-md-4 col-form-label">
                              {{ __('Confirm Password') }}
                              <span>*</span>
                            </label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Please enter the password again') }}">
                            </div>
                        </div>

                        <div class="row mb-3 register-input">
                            <label for="qq" class="col-md-4 col-form-label">
                              {{ __('QQ') }}
                              <span></span>
                            </label>

                            <div class="col-md-8">
                                <input id="qq" type="qq" class="form-control" name="qq" value="{{ old('qq') }}" autocomplete="qq" placeholder="{{ __('Please enter your QQ number') }}">
                            </div>
                        </div>

                        <div class="row mt-5 mb-4">
                          <label class="register-agreement">
                            <input type="checkbox" value="" name="agreement" checked /> {{ __('Register Agreement Words') }}<a href="#">《智慧wise服务协议》</a> <a href="#">《智慧wise用户协议》</a>
                          </label>
                        </div>

                        <div class="row mb-0">
                          <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                          </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
