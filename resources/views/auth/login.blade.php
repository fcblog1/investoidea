@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-2 offset-5">
        <img src="{{asset('images/logo/639927622.png')}}" alt="logo" width="270px" style="max-height:200px;" class="img-responsive">
      </div>
    </div>
    <div class="row justify-content-center mt-4">

      <div class="col-md-5  offset-1">
        <div class="card login-card" style="background-color: rgb(204, 241, 241);">
          <div class="text-center mt-4"><h3 style="font-size: 1.6rem;">Login into Your Account hahfa</h3></div>

          <div class="card-body">
            <form method="POST" action="{{ route('login.custom') }}">
              @csrf
              <div class="form-group ml-5">
                <label for="email" class="" style="color:#999;">Email Address</label>
                <input name="email" id="email" style="background-color: #f2f2f2;
    border: 1px solid #f2f2f2; border-radius:2px; height:50px; box-shadow:none;" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} col-md-10" value="{{ old('email') }}" placeholder="Email Id"  required autofocus>

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
              </div>

              <div class="form-group ml-5">
                <label for="password" class="" style="color:#999;">Password</label>
                <input type="password" id="password" style="background-color: #f2f2f2;
    border: 1px solid #f2f2f2; border-radius:2px; height:50px; box-shadow:none;"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} col-md-10 required "  placeholder="password"   style="height:50px;" name="password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group" style="display:flex;">
                <label class="form-check-label" style="margin-left:70px; color:#999;">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me!</label>
                  {{-- <p id="forgot_password" class="font-light" style="margin-left:64px;"> --}}
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#999; margin-left:50px; margin-top:-7px; text-decoration:none;">
                          Forgot Password?
                    </a>
                  @endif

                </div>

                <div class="row">
                  <div class="col-lg-8" style=" margin-left:46px;" >
                    <button type="submit" class="btn btn-success fa fa-lock form-control ">
                    LOG IN SECURELY
                    </button>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 offset-3 mt-4" style="font-size:.9rem">
                    <label style="align:center;">Don't have an account?</label><br>
                  <a  href="{{ route('register') }}" class="ml-3" style="color:#1ec0f7; text-decoration:none;">Create an account</a>
                  </div>
                  </div>
                </form>
                </div>


                {{-- ======= --}}

                {{-- <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                </div> --}}

                {{-- <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div> --}}

                {{-- <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                      </label>
                    </div>
                  </div>
                </div> --}}

                {{-- <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </a>
                    @endif
                  </div>
                </div> --}}


            </div>
          </div>
        </div>
      </div>

  @endsection
