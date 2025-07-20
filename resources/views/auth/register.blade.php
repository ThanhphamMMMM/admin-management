@extends('layouts.auth')

@section('title')
    Sign up
@endsection

@section('heading')
    Register
@endsection

@section('p')
    Register your account by providing your personal information.
@endsection

@section('form')

    <form class="needs-validation" action="{{ route('auth.process')}}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Full name" name="fullname" value="{{ old('fullname')}}"
                   required>
            @error('fullname')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="tel" placeholder="Phone" name="tel" value="{{ old('tel')}}" required>
            @error('tel')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Address" name="address" value="{{ old('address')}}"
                   required>
            @error('address')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="date" placeholder= "Brithday" name="birthday" value="{{ old('birthday')}}"
                   required>
            @error('birthday')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email')}}"
                   required>
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="cs-password-toggle form-group">
            <input class="form-control" type="password" placeholder="Password" name="password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
            <label class="cs-password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i>
            </label>
        </div>
        <div class="cs-password-toggle form-group">
            <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation"
                   required>
            <label class="cs-password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i>
            </label>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Register</button>
        <p class="font-size-sm pt-3 mb-0">Already have an account?
            <a href=" {{ route('auth.login') }}" >Log in</a>
        </p>
@endsection
@section('js')
@endsection
