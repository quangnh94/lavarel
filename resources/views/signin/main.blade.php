@extends('layouts.auth')
@section('content')
<div class="panel signin">
    <div class="panel-heading">
        <h1>Lavarel  5.2</h1>
        <h4 class="panel-title">Welcome! Please signin.</h4>
    </div>
    <div class="panel-body">
        <button class="btn btn-primary btn-quirk btn-fb btn-block">Connect with Facebook</button>
        <div class="orLine">or</div>
        {!! Form::open(['url' => 'auth/login','method' => 'POST']) !!}
        <div class="form-group mb10">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Password']) }}
            </div>
        </div>
        <div class="form-group nomargin">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <!--<input type="text" class="form-control" placeholder="Enter Password">-->
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Your Password']) }}
            </div>
        </div>
        <div><a href="#" class="forgot">Forgot password?</a></div>
        <div class="form-group">
            {{ Form::submit('Sign In', ['class' => 'btn btn-success btn-quirk btn-block']) }}
        </div>
        {!! Form::close() !!}
        <hr class="invisible">
        <div class="form-group">
            <a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
        </div>
    </div>
</div>
@endsection