<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="login col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-heading text-center"><h3>Sign in</h3></div>

							<form class="form-horizontal" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<div class="col-md-12">
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<div class="col-md-12">
										<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="panel-heading col-xs-12">
									  <button type="submit" class="btn btn-primary btn-block btn-flat">
										Login
									  </button>
									</div>
								</div>

								<div class="text-center">- OR -</div>

								<div class="social-auth-links text-center">
									<a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat">
										<i class="fa fa-facebook"></i>
										Login with Facebook
									</a>

									<a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-block btn-social btn-twitter btn-flat">
										<i class="fa fa-twitter"></i>
										Login with Twitter
									</a>

									<a href="{{ route('social.oauth', 'google') }}" class="btn btn-block btn-social btn-google btn-flat">
										<i class="fa fa-google"></i>
										Login with Google
									</a>

									<a href="{{ route('social.oauth', 'github') }}" class="btn btn-block btn-social btn-github btn-flat">
										<i class="fa fa-github"></i>
										Login with Github
									</a>
								</div>

								<div class="row" style="padding:8px 0px">
								  <div class="col-xs-6">
									<div class="pull-left">
									  <a ui-sref="forgot_password" href="{{ route('password.request') }}">Forgot password?</a>
									</div>
								  </div>
								  <div class="col-xs-6">
									<div class="pull-right">
									  <a ui-sref="register" class="text-center" href="{{ route('register') }}">Create an account</a>
									</div>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
