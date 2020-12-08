<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/logo/logo.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100">

 <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
<a href="/"><span class="login100-form-logo">
<img src="images/logo/logo.png" style="border-radius:50px;"/>
</span></a>
<span class="login100-form-title ">
Register
</span>

<div class="wrap-input100 validate-input" data-validate="Name">
<input class="input100" type="text" placeholder="Username" name="username" value="{{ old('name') }}" required autocomplete="name" >
<span class="focus-input100" data-placeholder="&#xf207;"></span>
</div>
@error('name')
    <span style="color:orange;">
        <strong>{{ $message }}</strong>
    </span>
@enderror



<div class="wrap-input100 validate-input" data-validate="E-Mail Address">
<input class="input100" type="email" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" >
<span class="focus-input100" data-placeholder="&#xf200;"></span>
</div>
@error('email')
    <span style="color:orange;">
        <strong>{{ $message }}</strong>
    </span>
@enderror



<div class="wrap-input100 validate-input" data-validate="Password">
<input class="input100" type="password" placeholder="Password" name="password" value="{{ old('password') }}" required autocomplete="password" >
<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>
@error('password')
    <span style="color:orange;">
        <strong>{{ $message }}</strong>
    </span>
@enderror



<div class="wrap-input100 validate-input" data-validate="Confirm Password">
<input class="input100" type="password" placeholder="Confirm Password" name="password_confirmation" required  >
<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>

 


                        <div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" checked required name="try">
<label class="label-checkbox100" for="ckb1">
Agree to <span><a href="/login" style="color:yellow;font-weight:bold">Our Terms & Conditions</a></span>
</label>
</div>

  <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
        Register
        </button>
    </div>
    <div class="text-center">
<a class="txt1" href="{{ route('login') }}">
Already A Member? Login
</a>
</div>
                    </form>



</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>



                    









