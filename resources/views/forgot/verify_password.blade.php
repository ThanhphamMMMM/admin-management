@extends('layouts.auth')


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

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <div class="mb-3">

            <label for="email" class="form-label">Emai</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder=" ...@gmail.com">

        </div>
        <a href="{{ route('auth.login') }}" class="btn btn-secondary ms-2"> Huỷ</a>
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
@endsection

@section('js')
@endsection


