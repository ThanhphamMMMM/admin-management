<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login-registerc.css')}}">
    <title>LOgin</title>
</head>
<body>
    
    @if (session('seccuss')) 
        <div style="color: green; margin-bottom: 10px;">
        {{ session('seccuss') }}
    </div>
    @endif

    @if (session('error')) 
        <div style="color: red; margin-bottom: 10px;">
        {{ session('error') }}
    </div>
    @endif
        
    <div class="container">

        <h1>Login</h1>
        <hr>

        <form action="{{ route('auth.checklogin')}}" method="POST">

            @csrf

            <div class="item">
            
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="Nhập email của bạn...(@gmail.com)" required>
                    @error('email')
                        <div style="color: red">{{ 'message'}}</div>
                    @enderror
            </div>
            
            <div class="item">
                <label for="password">Password: </label>

                <div class="container_password">
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn..." required >
                    <button type="button" onclick="tongglePassword()">👁️</button>
                </div>
                <script>
                    function tongglePassword() {
                        const button_password = document.getElementById("password");

                        if (button_password.type === "password") {
                            button_password.type = "text";
                            } else {
                            button_password.type = "password";
                            }
                    }
                    
            </script>
            </div>

            


            <div class="submit_form">
                <button type="submit">ĐĂNG NHẬP</button>
            </div>

            <h5><a href="">Quên mật khẩu</a></h5>
            <h4><a href="/register">Tạo tài khoản</a></h4>

        </form>
    </div>
</body>
</html>

