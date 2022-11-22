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
                            <input type="text" name="name" id="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password"  required/>
                        </div>
                        {{-- <div class="form-group">
                            <input type="password" name="re_password" id="re_password" placeholder="Repeat your password" />
                        </div> --}}
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                            <script>
                                // function myFunction() {
                                // $(document).ready(function() {
                                //     $('#agree-term').click(function() {
                                //         if ($(this).is(':checked')) {
                                //             $('#signup').submit(function() {
                                //                 return true;
                                //             });
                                //         } else {
                                //             $('#signup').submit(function() {
                                //                 return false;
                                //             });


                                //         }
                                //     });
                                // });
                            </script>
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
