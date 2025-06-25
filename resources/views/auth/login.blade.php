<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login-register.css')}}">
    <title>LOgin</title>
</head>
<body>
    
    @if (session('error')) 
        <div style="color: red; margin-bottom: 10px;">
        {{ session('error') }}
    </div>
    @endif

    @if (session('error')) 
        <div style="color: green; margin-bottom: 10px;">
        {{ session('error') }}
    </div>
    @endif
        
    <div class="container">

        <h1>Login</h1>
        <div class="line"></div>

        <form action="{{ route('auth.checklogin')}}" method="POST">

            @csrf

            <div class="item">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn...(@gmail.com)" required>
            </div>
            
            <div class="item">
                <label for="">Password: </label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn..." required>
            </div>


            <button type="submit">ĐĂNG NHẬP</button>

            <h5><a href="">Quên mật khẩu</a></h5>
            <h4><a href="/register">Tạo tài khoản</a></h4>

        </form>
    </div>
</body>
</html>

