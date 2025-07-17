@extends('layouts.auth')

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

        <div class="mb-3">
            <label for="password">Mật khẩu mới</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Xác nhận lại</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <a href="{{ route('password.request') }}" class="btn btn-secondary ms-2"> Huỷ</a>
        <button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
    </form>
@endsection

@section('js')
@endsection



