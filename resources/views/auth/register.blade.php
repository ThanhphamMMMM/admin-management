<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login-registerc.css')}}">
    <title>REgister</title>
</head>
<body>
    @if (session('error')) 
        <div style="color: red; margin-bottom: 10px;">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success')) 
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="container">
        <h1>Register</h1>
        <hr>

    <form action="{{ route('auth.process')}}" method="POST">
        @csrf

        <div class="item">
            <label for="email">Email : </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="Nhập email của bạn...(@gmail.com)" required>
                @error('email')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="item">
                <label for="password">Password: </label>

                <div class="container_password">
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn..." required >
                    @error('password')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror 
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

        <div class="item">
            <label for="fullname">Họ và tên : </label>
            <input type="text" id="fullname" name="fullname" value="{{ old('fullname')}}" placeholder="Nhập họ và tên củ bạn..." required>
                @error('fullname')
                    <div style="color:red;">{{ $message }}</div>
                @enderror       
        </div>

        <div class="item">
            <label for="tel">Phone : </label>
            <input type="tel" id="tel" name="tel"  value="{{ old('tel')}}" placeholder="Nhập số điện thoại của bạn..." required> 
                @error('tel')
                    <div style="color:red;">{{ $message }}</div>
                @enderror      
        </div>

        <div class="item">
            <label for="address">Address : </label>
            <input type="text" id="address" name="address" value="{{ old('address')}}"  placeholder="Nhập địa chỉ của bạn..." required>
                @error('address')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
        </div>

        <div class="item">
            <label for="birthday">Birthday : </label>
            <input type="date" id="birthday" name="birthday" value="{{ old('birthday')}}" placeholder="Nhập mật khẩu của bạn..." required>
                @error('birthday')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
        </div>


        <div class="submit_form">
            <button type="submit">ĐĂNG NHẬP</button>
        </div>

        <h4><a href="/login">Đã có tài khoản</a></h4>
        
    </form>        
    </div>
</body>
</html>