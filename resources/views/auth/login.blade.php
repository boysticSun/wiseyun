@extends('layouts.app')

@section('content')
<div class="container login-box">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Account Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 login-input">
                            <label for="account" class="col-md-3 col-form-label">{{ __('Account') }}</label>

                            <div class="col-md-9">
                                <input id="account" type="account" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}" required autocomplete="account" autofocus placeholder="{{ __('Login Account Placeholder') }}">

                                @error('account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 login-input">
                            <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Login Password Placeholder') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-9 p-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Next automatic login') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 login-forgot-pwd">
                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Forgot Your Password?') }}
                                  </a>
                              @endif
                            </div>
                        </div>

                        <div class="row mb-3 login-btn">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="row mb-0">
                          <div class="col-md-8 login-reg-btn">
                            {{ __('Register Button Words') }} <a href="{{ route('register') }}">{{ __('Free Register') }}</a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
