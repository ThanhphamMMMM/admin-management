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
         @method('POST')
            <div class="item">

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Nhập email mới (...@gmail.com) " required>

            </div>

            <div class="item">

                <label for="password">Password :</label>
                <input type="password" id="password" placeholder="Nhập mật khẩu mới (ít nhất 7 kí tự)" name="password" required>

            </div>

            <div class="item">

                <label for="fullname">Name Space :</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên mới " required>

            </div>

            <div class="item">

                <label for="tel">Phone :</label>
                <input type="tel" id="tel" placeholder="Nhập số điện thoại mới " name="tel" required>

            </div>

            <div class="item">

                <label for="address">Address :</label>
                <input type="text" id="address" placeholder="Nhập địa chỉ mới " name="address" required>

            </div>

            <div class="item" >

                <label for="date">Birthday :</label>
                <input type="date" id="date" name="date" required  >

            </div>

            <div class="item">

                <label for="role">Role</label>

                    <select name="role" id="role">
                        <option value="role_id"></option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id}}">{{ $role->id }} - {{  $role->name }} </option>
                            @endforeach
                    </select>

            </div>


            <button type="submit">THỰC HIỆN</button>

            

            
        
        </form>

    </div>
    


</body>
</html>