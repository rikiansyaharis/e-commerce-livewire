
<link id="theme-style" rel="stylesheet" href="{{ asset('admin/assets/css/portal.css') }}">


<div class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="{{ route('auth.login')}}"><img class="logo-icon me-2" src="{{ asset('admin/assets/images/app-logo.svg')}}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-5">Log in</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" action=" {{ route('auth.getLogin')}}">
                            @csrf
                            <div class="email mb-3">
                                <label class="" for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control signin-email @error('email') is-invalid @enderror" placeholder="Email address" required >
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div><!--//form-group-->
                            <div class="password mb-3">
                                <label class="" for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control signin-password @error('password') is-invalid @enderror" placeholder="Password" required >
                                @error(' password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="extra mt-3 row">
                                    <div class="col--md-12">
                                        <div class="forgot-password text-end">
                                            <a href="reset-password.html">Forgot password?</a>
                                        </div>
                                    </div><!--//col-6-->
                                </div><!--//extra-->
                            </div><!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign In</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">No Account?  <a class="text-link" href="{{ route('auth.register')}}" >Sign up here</a>.</div>
                    </div><!--//auth-form-container-->

                </div><!--//auth-body-->

            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
    </div><!--//row-->
</div>

@include('auth.alert')


