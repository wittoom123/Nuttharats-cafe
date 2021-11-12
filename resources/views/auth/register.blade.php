@extends('layouts.app')

@section('content')
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('back_end/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('back_end/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('register') }}">
                    @csrf
					
                    <span class="login100-form-title p-b-70">
                    Register
					</span>
					<div class="wrap-input100 validate-input m-t-85 m-b-35">
                                <input class="input100" type="text" name="username"id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                <span class="focus-input100" data-placeholder="Username"></span>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        

                        <div class="wrap-input100 validate-input m-t-85 m-b-35">
                                <input class="input100" type="name"id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="focus-input100" data-placeholder="Name"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        <div class="wrap-input100 validate-input m-t-85 m-b-35">
                                <input class="input100" type="password"id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="Password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div class="wrap-input100 validate-input m-t-85 m-b-35">
                                <input class="input100" type="password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="Password_confirmation"></span>
                            </div>
                        

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Register
						</button>
                        </div>
                    <hr>
                    <a href="/login" class="login100-form-btn">Login</a>
						</button>
					
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
<script src="{{asset('back_end/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('back_end/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('back_end/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('back_end/js/main.js')}}"></script>
@endsection