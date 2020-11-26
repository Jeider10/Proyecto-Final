<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register here</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
        @import url("https://fonts.googleapis.com/css?family=Cairo&display=swap");

body{
  background-color: #004c40;
}
#login-container{
  width: 450px;
  height: 375px;
  background-color: #00796b;
  border-radius: 10px;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
}
#login-container h3{
  font-family: 'Cairo', sans-serif;
  font-weight: normal;
  text-align: center;
  color: #ffffff;
  font-size: 2rem;
  margin-top: 25px;
  margin-bottom: 5px;
}
#login-container hr{
  margin-top: 15px;
  margin-bottom: 2.7rem;
  width: 250px;
  border-color: #ffffff;
}
#login-container .input-group{
  padding-left: 30px;
  padding-right: 30px;
}
#login-container .input-group span{
  background-color: #004c40;
  color: #ffffff;
  border-color: #004c40;
  border-radius: 10px 0px 0px 10px;
}
#login-container .input-group input{
  border: 1px solid #00796b;
  border-radius: 0px 10px 10px 0px;
  font-family: 'Cairo', sans-serif;
}
#login-container .input-group input:focus{
  box-shadow: none;
  border: 1px solid #00796b;
}

.container-checkbox {
  display: block;
  position: relative;
  padding-left: 55px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #ffffff;
  font-size: 15px;
}

/* Hide the browser's default checkbox */
.container-checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 30px;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 5px;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
  background-color: #004c40;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
  left: 8px;
  top: 4px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.btn-customized{
  background-color: #004c40;
  margin-top: 30px;
  color: #ffffff;
  border-color: #004c40;
  font-family: 'Cairo', sans-serif;
  border-radius: 10px;
}

.btn-customized:hover, .btn-customized:focus, .btn-customized:active{
  color: #ffffff;
  border-color: #004c40;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="login-container">
    <h3>Register here</h3>
    <hr>
    <div class="container">
    <div class="register-box-body">
        <!-- <p class="login-box-msg">@lang('registration')</p> -->

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="@lang('full_name')">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('email')">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="@lang('password')">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="@lang('confirm_password')">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <!-- <input type="checkbox"> @lang('registration.i_agree') <a href="#">@lang('registration.terms')</a> -->
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('register')</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- <a href="{{ url('/login') }}" class="text-center">@lang('registration.have_membership')</a> -->
    </div>
      </div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
