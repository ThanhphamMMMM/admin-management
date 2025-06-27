<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/createform.css') }}">

    <title>Create User</title>
</head>
<body>
 
    <h1>Create new User</h1>

    <h2><a href="{{ route('user.index')}}">Hiển thị danh sách user</a></h2>


    <div class="container">

        <form action="{{ route('user.store')}}" method="POST">

         @csrf

            <div class="item">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="{{ old('email')}}"  placeholder="Nhập email :(...@gmail.com) " required> <br>
                                    @error('email')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
            </div>


            <div class="item">
                <label for="password">Password :</label>
                <input type="password" id="password" placeholder="Nhập mật khẩu(ít nhất 7 kí tự)" name="password" required>
                                @error('password')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
            </div>


            <div class="item">
                <label for="fullname">Full Name :</label>
                <input type="text" id="fullname" name="fullname" value="{{ old('fullname')}}"  placeholder="Nhập họ và tên " required>
                                @error('fullname')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
            </div>


            <div class="item">
                <label for="tel">Phone :</label>
                <input type="tel" id="tel" value="{{ old('tel')}}"  placeholder="Nhập số điện thoại " name="tel" required>
                                @error('tel')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="item">
                <label for="address">Address :</label>
                <input type="text" id="address" value="{{ old('address')}}"  placeholder="Nhập địa chỉ " name="address" required>
                                @error('address')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
            </div>


            <div class="item" >
                <label for="date">Birthday :</label>
                <input type="date" id="date" name="date" value="{{ old('date')}}"  required  >
                                @error('date')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
            </div>

            <div class="item">
                <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="role_id"></option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id}}">{{ $role->id }} - {{  $role->name }} </option>
                            @endforeach
                                @error('date')
                    <div style="color:red;">{{ $message }}</div>
            @enderror
                    </select>

            </div>


            <button type="submit">THỰC HIỆN</button>

            

            
        
        </form>

    </div>
    


</body>
</html>