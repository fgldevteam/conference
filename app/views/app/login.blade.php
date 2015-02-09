@extends('app/layout')

@section('title')
Log In
@stop

@section('content')
<div class="login-box">
    <div class="login-header">
        <h4>Sign In to your account</h4>
    </div>

    {{ $errors->first('email') }}
    {{ $errors->first('password') }}

    <div class="login-form">
        {{ Form::open(array('url' => 'login')) }}
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input id="email" name="email" class="form-control" type="text" placeholder="E-mail">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon-pencil"></i></span>
                <input id="password" name="password" class="form-control" type="password" placeholder="Password">
            </div>
            <!-- <div class="row">
                <div class="col-sm-12 remember-me">
                    <label class="checkbox"><input type="checkbox"> Remember me</label>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12 cta">
                    <button class="btn btn-main btn-large"><i class="icon-signin"></i> Sign In</button>
                </div>
            </div>
            <div class="related-links">
                <a href="recover-password.html">Forgot your password?</a>
                <!-- <h5>Don't have an account? <a href="register.html">Sign Up</a></h5> -->
            </div>
        {{ Form::close() }}
    </div>

</div>
@stop
