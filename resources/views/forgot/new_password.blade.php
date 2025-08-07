@extends('layouts.auth')

@section('heading')
    Confirm your password
@endsection

@section('p')
    Please enter a new password for your account.
@endsection

@section('form')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="input-group-overlay cs-password-toggle form-group">
            <div class="input-group-prepend-overlay">
                <span class="input-group-text">
                    <i class="fe-lock"></i>
                </span>
            </div>
            <input class="form-control prepended-form-control" type="password" placeholder="password" id="password"
                   name="password" required>
            <label class="cs-password-toggle-btn">
                <input class="custom-control-input" type="checkbox">
                <i class="fe-eye cs-password-toggle-indicator"></i>
                <span class="sr-only">Show password</span>
            </label>
        </div>

        <div class="input-group-overlay cs-password-toggle form-group">
            <div class="input-group-prepend-overlay">
                <span class="input-group-text">
                    <i class="fe-lock"></i>
                </span>
            </div>
            <input class="form-control prepended-form-control" type="password" placeholder="ComfFirm password"
                   id="password" name="password_confirmation" required>
            <label class="cs-password-toggle-btn">
                <input class="custom-control-input" type="checkbox">
                <i class="fe-eye cs-password-toggle-indicator"></i>
                <span class="sr-only">Show password</span>
            </label>
        </div>
        <a href="#" class="btn btn-secondary ms-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

@section('js')
@endsection



