<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('img/icon.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition">
<br><br>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <img src="{{asset('img/logo.png')}}" class="img img-responsive">
        </div>
        <!-- /.login-logo -->
        <div class="col-md-12">
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{route('login')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/min.js') }}"></script>


</body>
</html>
