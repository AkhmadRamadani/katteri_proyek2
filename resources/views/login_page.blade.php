@extends('layouts.app_login')

@section('container')
<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="assets\img\menu\menu-item-5.png" alt="sing up image"></figure>
                <a href="{{ url('sign-up') }}" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Log In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" onclick="myFunction()"/>
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Show Password</label>
                        <script>
                        function myFunction() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label" style="font-weight: bolder; font-size: 15px">Katteri<span
                            style="color: #ce1212">.</span></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection