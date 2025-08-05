@extends('layouts.auth')

@section('heading')
    Find your account
@endsection

@section('p')
    Please provide your account registration email.
@endsection

@section('form')
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form action="{{ route('reset.email') }}" method="POST">
        @csrf
        <div class="input-group-overlay form-group">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-mail"></i></span></div>
            <input class="form-control prepended-form-control" type="email" placeholder="Email" id="email" name="email"
                   value="{{ old('email')}}" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
@endsection

@section('js')
@endsection


