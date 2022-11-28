@extends('layout.layout')
@section('content')
	<div class="limiter">
		<i>{{session()->get('erorr')}}</i>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/undraw_lost_online_re_upmy.svg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{route('login_action')}}" method="post">
					@csrf
					<span class="login100-form-title">Loogin</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection