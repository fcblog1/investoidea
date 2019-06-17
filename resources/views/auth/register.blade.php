@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-2 offset-5">
        <img src="{{asset('images/logo/639927622.png')}}" alt="logo" width="270px" style="max-height:200px;" class="img-responsive">
      </div>
    </div>
    <div class="row justify-content-center mt-4">

      <div class="col-md-6  offset-1">
        <div class="card login-card" style="background-color: rgb(204, 241, 241);">
          <div class="text-center mt-4"><h3 style="font-size: 1.6rem;">Create an Account</h3></div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                {{-- name --}}
                <div class="col-lg-6">  <input name="name" id="name" style="background-color: #f2f2f2;
                border: 1px solid #f2f2f2; border-radius:10px; height:50px; box-shadow:none;" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Name*"  required autofocus>



                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
              {{-- /. Name --}}

              <div class="col-lg-6"> <input name="designation" id="designation" style=" background-color: #f2f2f2;
              border: 1px solid #f2f2f2;  border-radius:10px; height:50px; box-shadow:none;" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }} " value="{{ old('designation') }}" placeholder="Designation*"  required autofocus>



              @if ($errors->has('designation'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('designation') }}</strong>
                </span>
              @endif

            </div>
            {{-- /.Designation --}}

          </div>
          {{-- /. end of row --}}


          <div class="form-group row">

            {{-- email --}}

            <div class="col-lg-6">  <input name="email" id="email" style="background-color: #f2f2f2;
            border: 1px solid #f2f2f2; border-radius:10px; height:50px; box-shadow:none;" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " value="{{ old('email') }}" placeholder="Email*"  required autofocus>

            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          {{-- /. email --}}

          {{-- password --}}

          <div class="col-lg-3"> <input name="password" id="password" style=" background-color: #f2f2f2;
          border: 1px solid #f2f2f2;  border-radius:10px; height:50px; box-shadow:none;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} "  placeholder="Password*"  required autofocus>



          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif</div>
          {{-- /. password --}}

          <div class="col-lg-3"> <input name="password_confirmation" id="password-confirm" style=" background-color: #f2f2f2;
          border: 1px solid #f2f2f2;  border-radius:10px; height:50px; box-shadow:none;" type="password" class="form-control"  placeholder="Confirm Password*"  required autofocus>



          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif</div>

        </div>

        <div class="form-group row">
          <div class="col-lg-6">  <input name="permanent_address" id="permanent_address" style="background-color: #f2f2f2;
          border: 1px solid #f2f2f2; border-radius:10px; height:50px; box-shadow:none;" type="permanent_address" class="form-control{{ $errors->has('permanent_address') ? ' is-invalid' : '' }} " value="{{ old('permanent_address') }}" placeholder="Premanenet Address*"  required autofocus>



          @if ($errors->has('permanent_address'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('permanent_address') }}</strong>
            </span>
          @endif
        </div>
        {{-- /. permanent address --}}

        <div class="col-lg-6"> <input name="current_address" id="current_address" style=" background-color: #f2f2f2;
        border: 1px solid #f2f2f2;  border-radius:10px; height:50px; box-shadow:none;" type="current_address" class="form-control{{ $errors->has('current_address') ? ' is-invalid' : '' }} " value="{{ old('current_address') }}" placeholder="Current Address*"  required autofocus>



        @if ($errors->has('current_address'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('current_address') }}</strong>
          </span>
        @endif</div>


      </div>
      <div class="form-group row">
        <div class="col-lg-6">  <input name="contact" id="contact" style="background-color: #f2f2f2;
        border: 1px solid #f2f2f2; border-radius:10px; height:50px; box-shadow:none;" type="contact" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }} " value="{{ old('contact') }}" placeholder="Contact1*"  required autofocus>



        @if ($errors->has('contact'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('contact') }}</strong>
          </span>
        @endif
      </div>
      <div class="col-lg-6"> <input name="contact1" id="contact1" style=" background-color: #f2f2f2;
      border: 1px solid #f2f2f2;  border-radius:10px; height:50px; box-shadow:none;" type="contact1" class="form-control{{ $errors->has('contact1') ? ' is-invalid' : '' }} " value="{{ old('contact1') }}" placeholder="Contact2"   autofocus>



      @if ($errors->has('contact1'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('contact1') }}</strong>
        </span>
      @endif</div>
    </div>

    <div class="row">
      <div class="col-lg-8" style=" margin-left:46px;" >
        <button type="submit" class="btn btn-success form-control ">
          Continue
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 offset-3 mt-4" style="font-size:.9rem">
        <label style="align:center;">If You already have an Account,</label><br>
        <a  href="{{ route('login') }}" class="ml-5" style="color:#1ec0f7;  text-decoration:none;">Login here</a>
      </div>
    </div>
  </form>
</div>

</div>
</div>
</div>
</div>

@endsection
