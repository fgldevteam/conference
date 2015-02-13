@extends('app/layout')

@section('title')
Log In
@stop

@section('content')



<div class="login-box">
    <div class="login-header">
        <h4>Reset your password</h4>
    </div>
    <div class="login-form">
        <form action="{{ action('RemindersController@postRemind') }}" method="POST">
            <p>Enter your email address below and we'll send a special reset password link to your inbox.</p>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="row">
                <div class="col-sm-12 cta">
                    <button class="btn btn-main btn-large">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop



    <!-- <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form> -->
