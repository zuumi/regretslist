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
			<a class="btn btn-lg btn-block btn-facebook" href="#"> Register with Facebook</a>
		</div>

		<div class="input-group">
			<span class="input-group-addon addon-twitter">
				<i class="fa fa-fw fa-2x fa-twitter fa-fw"></i>
			</span>
			<a class="btn btn-lg btn-block btn-twitter" href="#"> Register with Twitter</a>
		</div>

		<form role="form" method="POST" action="{{ route('register') }}">
      @csrf
			<div class="divider-form"></div>
      <div class="form-group">
          <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>
      <div class="divider-form"></div>

      <div class="form-group">
          <label for="exampleInputEmail1" class="col-md-4 col-form-label text-md-right">MailAddress</label>
              <input id="exampleInputEmail1" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

			<div class="divider-form"></div>

			<div class="form-group">
				<label for="exampleInputPassword1" class="col-md-4 col-form-label text-md-right">Password</label>
				<input type="password" id="exampleInputPassword1" placeholder="Password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>

			<div class="divider-form"></div>

      <div class="form-group">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
          <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>

      <div class="divider-form"></div>

			<button type="submit" class="btn-block btn btn-lg btn-primary">Register Account</button>

			<p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
		</form>
	</div>
</div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
