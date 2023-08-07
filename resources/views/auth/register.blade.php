
<link id="theme-style" rel="stylesheet" href="{{ asset('admin/assets/css/portal.css') }}">

<div class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="{{ route('auth.login')}}"><img class="logo-icon me-2" src="{{asset('admin/assets/images/app-logo.svg')}}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-2">Sign Up</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" action="{{ route('auth.getRegister')}}">
                            <div class="email mb-2">
                                <label class="" for="email">Name <span class="text-danger">*</span></label>
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror signin-email" placeholder="Username"  value="{{ old('name')}}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div><!--//form-group-->
                            <div class="email mb-2">
                                <label class="" for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror signin-email" placeholder="Email address"  value="{{ old('email')}}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div><!--//form-group-->
                            <div class="password mb-2">
                                <label class="" for="password">Password <span class="text-danger">*</span></label>
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror signin-password" placeholder="*********"  value="{{ old('password')}}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div><!--//form-group-->
                            <div class="password mb-2">
                                <label class="" for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror signin-password" placeholder="*********" >
                            </div><!--//form-group-->
                                @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-3">No Account? Sign up <a class="text-link" href="{{ route('auth.login')}}" >here</a>.</div>
                    </div><!--//auth-form-container-->

                </div><!--//auth-body-->

            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
    </div><!--//row-->
</div>

@include('auth.alert')
