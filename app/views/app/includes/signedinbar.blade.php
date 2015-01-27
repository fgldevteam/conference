

<div class="login-strip">
    <!-- <a href="register.html"><i class="icon-plus"></i> Sign Up</a> |
    <a href="login.html"><i class="icon-signin"></i> Sign In</a> -->

    Welcome {{ Auth::user()->first }} {{ Auth::user()->last }}!  <br /><a href="/logout"><i class="icon-signin"></i> Log Out</a>
</div>
