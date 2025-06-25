<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/createform.css') }}">

    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<h2><a href="{{ route('user.index')}}">Hiển thị danh sách user</a></h2>

<div class="container">
    <form action="{{ route('user.update',$user->id)}}" method="POST">
        @csrf
        <div class="item">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ old('email',$user->email)}}"
                   placeholder="Nhập email :(...@gmail.com) " required> <br>
            @error('email')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu(ít nhất 7 kí tự)" required>
            @error('password')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="fullname">Full name :</label>
            <input type="text" id="fullname" name="fullname" value="{{ old('fullname',$user->profile->full_name)}}"
                   placeholder="Nhập họ và tên " required>
            @error('fullname')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="tel">Phone :</label>
            <input type="tel" id="tel" name="tel" value="{{ old('tel',$user->profile->phone)}}"
                   placeholder="Nhập số điện thoại " required>
            @error('tel')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="item">
            <label for="address">Address :</label>
            <input type="text" id="address" name="address" value="{{ old('address', $user->profile->address) }}"
                   placeholder="Nhập địa chỉ " required>
            @error('address')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>


        <div class="item">
            <label for="date">Birthday :</label>
            <input type="date" id="date" name="date" value="{{ old('date', $user->profile->birthday)}}" required>
            @error('date')
            <div style="color:red;">{{ $message }}</div>
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


        <button type="submit">THỰC HIỆN</button>


    </form>


</div>


</body>
</html>
