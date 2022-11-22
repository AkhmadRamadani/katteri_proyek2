@extends('layouts.app_login')

@section('container')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                required />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" required />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Repeat your password" />
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <script>
                                Enable = function(checkbox, btnId) {
                                    document.getElementById(btnId).disabled = !checkbox.checked; // ← !
                                }
                            </script>
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" onclick="Enable(this, 'signup')" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                           
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" disabled/>
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
