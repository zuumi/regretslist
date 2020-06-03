@extends('layouts.app')
<style media="screen">
  @import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

  body {
    background-color: #f0f3f5;
  	font-family: 'Roboto';
  }

  .box {
  	background-color: #fff;
  	padding: 25px 40px;
  	margin-top: 30px; /*Remove, its example*/
  	box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .input-group {
  	margin: 5px 0px;
  }

  .addon-facebook {
  	background-color: #345387;
  	border: none;
  	border-radius: 2px 0px 0px 2px;
  	color: #fff;
  }

  .btn-facebook,
  .btn-facebook:hover {
  	background-color: #4b6ea9;
  	color: #fff;
  	border-radius: 0px 2px 2px 0px;
  	font-size: 15px;
  }

  .addon-twitter {
  	background-color: #00c6e9;
  	border: none;
  	border-radius: 2px 0px 0px 2px;
  	color: #fff;
  }

  .btn-twitter,
  .btn-twitter:hover {
  	background-color: #00d7fa;
  	color: #fff;
  	border-radius: 0px;
  	font-size: 15px;
  }

  .btn-primary {
  	border-radius: 2px;
  	background-color: #23a9f6;
  	border-color: #23a9f6;
  	margin: 10px 0px;
  }

  p {
  	color: #aebbcb;
  }

  a {
  	color: #23a9f6;
  }

  .divider-form {
      border: 1px solid #EBEFF1;
      margin: 15px -40px 10px;
  }

  label {
  	text-transform: uppercase;
  	color: #bdc7d4;
  }

  strong {
  	color: #95a5bb;
  }

  .form-control {
      background: none;
      height: 40px;
      border: none;
      border-radius: 0px;
      box-shadow: none;
      color: #8b9eb6;
      padding: 0px;
  }

  .form-control:focus {
      box-shadow: none;
  }
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@section('content')
<div class="row">
<div class="container col-md-4 col-md-offset-4">
	<div class="box">
		<div class="input-group">
			<span class="input-group-addon addon-facebook">
				<i class="fa fa-fw fa-2x fa-facebook fa-fw"></i>
			</span>
			<a class="btn btn-lg btn-block btn-facebook" href="#"> Login with Facebook</a>
		</div>

		<div class="input-group">
			<span class="input-group-addon addon-twitter">
				<i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
			</span>
			<a class="btn btn-lg btn-block btn-twitter" href="#"> Login with Twitter</a>
		</div>


      <form  role="form" method="POST" action="{{ route('login') }}">
          @csrf
			<div class="divider-form"></div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input id="exampleInputEmail1" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

			<div class="divider-form"></div>

			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input id="exampleInputPassword1" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
			</div>



			<div class="divider-form"></div>
      <p class="text-center">
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
      </p>
      <button type="submit" class="btn-block btn btn-lg btn-primary">{{ __('Login') }}</button>
      </form>
      @if (Route::has('password.request'))
          <p class="text-center"><a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
      @endif
	</div>
</div>
</div>

@endsection
