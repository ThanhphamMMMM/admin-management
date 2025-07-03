<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/dashboardmn.css')}}">
  <title>Dash board</title>
</head>
<body>
      
    @if (session('seccuss')) 
        <div class="seccuss">
        {{ session('seccuss') }}
    </div>
    @endif

    @if (session('error')) 
        <div class="error">
        {{ session('error') }}
    </div>
    @endif
    <div class="container">
    <div class="left_content"></div>
    <div class="right_content">
      <img src="{{ asset('images/anhlamviec.jpg')}}" alt="anhlamviec" class="anhlamviec">
    </div>
  </div>
  <!--navbar-->
  <div class="navbar">
    <div class="nav_left">
        <a href="#"> 
          <img src="{{ asset('images/logotf.jpg')}}" alt="anhlogo" class="anhlogo"> Management
        </a>
    </div>
    <div class="menu_list">
      <ul class="container_menu">
        <li>trang1</li>
        <li>trang2</li>
        <li>trang3</li>
        <li>trang4</li>
        <li>trang5</li>
      </ul>
    </div>
    <div class="nav_right">
        <div class="nav_right_signin"> Sign in</div>
        <div class="nav_right_signup"> Sign up</div>
    </div>
  </div>
  <!--form_signin-->
  <div id="signin_modal" class="modal" >
  <div class="modal-content">
    <div class="up_cat">
      <h2>Sign in</h2>
      <div class="close-btn"><span>&times;</span></div>
    </div>
    <div class="div_p"><p>Sign in to your account using email and password provided during registration.</p></div>
    <form action=" {{ route('auth.checklogin')}}" method="POST" id="signin-form" >
      @csrf
      <div class="item">
            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="Nhập email của bạn...(@gmail.com)" required>
                @error('email')
                    <div style="color:red;">{{ $message }}</div>
                @enderror
      </div>

      <div class="item">

            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn..." required >
            @error('password')
                <div style="color:red;">{{ $message }}</div>
            @enderror 
      </div>

      <div class="button-container">
        <button type="submit">Sign in</button>
      </div>

    </form>
  </div>
</div>
<script>
  const signInBtn = document.querySelector('.nav_right_signin');
  const form = document.getElementById('signin_modal');
  signInBtn.addEventListener('click', () => {
    form.style.display = 'block'; 
  });
  const closeBtn = document.querySelector('.close-btn');       
  const formWrapper = document.getElementById('signin_modal');  
  closeBtn.addEventListener('click', () => {
    formWrapper.style.display = 'none'; 
  });
</script>



</body>
</html>