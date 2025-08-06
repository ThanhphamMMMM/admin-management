@extends('layouts.app')

@section('title')
    Quản lí user
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/edit.css')}}">
<link rel="stylesheet" href="{{ asset('css/notification.css')}}">
@endsection


@section('content')
<h1>Sửa người dùng</h1>
     <div class="container">
    <form action="{{ route('user.update',$user->id)}}" method="POST">
        @csrf

        <div class="item">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ old('email',$user->email)}}"
                   placeholder="Nhập họ và tên " required>
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="item">
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu(ít nhất 7 kí tự)" >
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="full_name">Full name :</label>
            <input type="text" id="full_name" name="full_name" value="{{ old('full_name',$user->profile->full_name)}}"
                   placeholder="Nhập họ và tên " required>
            @error('full_name')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="phone">Phone :</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone',$user->profile->phone)}}"
                   placeholder="Nhập số điện thoại " required>
            @error('phone')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="item">
            <label for="address">Address :</label>
            <input type="text" id="address" name="address" value="{{ old('address', $user->profile->address) }}"
                   placeholder="Nhập địa chỉ " required>
            @error('address')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="birthday">Birthday :</label>
            <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $user->profile->birthday)}}" required>
            @error('birthday')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="item">
            <label for="role">Role</label>
            <select name="role" id="role">`
                @foreach ($roles as $role)
                    <option value="{{ $role->id}}"
                        {{ $role->id == old('role', $user->role_id) ? 'selected' : '' }}>
                        {{ $role->id }} - {{  $role->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Thực Hiện</button>
    </form>
</div>
@endsection



