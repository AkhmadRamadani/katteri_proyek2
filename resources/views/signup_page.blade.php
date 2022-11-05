@extends('layouts.app_login')

@section('container')
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="assets\img\menu\menu-item-3.png" alt="sing up image"></figure>
                <a href="{{ url('login') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection