@extends('layouts.auth')

@section('title')
    Sign in
@endsection

@section('css')
    @endsection

@section('heading')
    Sign in
@endsection


@section('p')
    Sign in to your account using the email and password provided when registering.
@endsection

@section('form')

    <form class="needs-validation" action="{{ route('auth.checklogin')}}" method="POST">
        @csrf
        <div class="input-group-overlay form-group">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-mail"></i></span></div>
            <input class="form-control prepended-form-control" type="email" placeholder="Email" id="email" name="email"
                   value="{{ old('email')}}" required>
        </div>
        <div class="input-group-overlay cs-password-toggle form-group">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-lock"></i></span></div>
            <input class="form-control prepended-form-control" type="password" placeholder="password" id="password"
                   name="password" required>
            <label class="cs-password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i
                    class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
            </label>
        </div>
        <div class="d-flex justify-content-between align-items-center form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="keep-signed-2">
                <label class="custom-control-label" for="keep-signed-2">Keep me signed in</label>
            </div>
            <a class="nav-link-style font-size-ms" href="#">Forgot password?</a>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        <p class="font-size-sm pt-3 mb-0">Don't have an account? <a href='{{ route('auth.register')}}'
                                                                    class='font-weight-medium' data-view='#signup-view'>Register</a>
        </p>
    </form>
@endsection


@section('js')
@endsection


