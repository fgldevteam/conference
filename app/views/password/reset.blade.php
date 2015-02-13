@extends('app/layout')

@section('title')
Log In
@stop

@section('content')

@if( count($errors) > 0)
<h3 style="color: #c00;">Oops!</h3>
@endif
@foreach ($errors->all() as $error)

<div>{{ $error }}</div>

@endforeach

<div class="login-box">
    <div class="login-header">
        <h4>Reset your password</h4>
    </div>
    <div class="login-form">
        <form action="{{ action('RemindersController@postReset') }}" method="POST">
            <input type="hidden" name="token" value="{{ $token }}">
            <p>Enter your email address and a new password.</p>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" name="email" class="form-control" placeholder="E-mail">


            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon-pencil"></i></span>
                <input type="password" name="password" class="form-control" placeholder="New Password">
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon-pencil"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password">
            </div>

            <div class="row">
                <div class="col-sm-12 cta">
                    <input type="submit" class="btn btn-main btn-large" value="Reset Password">
                </div>
            </div>
        </form>
    </div>
</div>

@stop

<!-- <form action="{{ action('RemindersController@postReset') }}" method="POST">
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="submit" value="Reset Password">
</form> -->
