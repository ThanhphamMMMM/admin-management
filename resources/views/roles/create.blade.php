<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/createform.css') }}">
    <title>Create role</title>
</head>
<body>

    <h1>Create ROLE</h1>

    <h2><a href=" {{ route('role.index') }}"> Danh sách Role</a></h2>

    <h2><a href="{{ route('user.index')}}">List User </a></h2>
        <div class="container">

            <form action="{{ route('role.store') }}" method="POST">

                @csrf

                    <div class="item">
                        <label for="name">Name Role :</label>
                        <input type="text" id="name" name="name" placeholder="Nhập vai trò muốn tạo " required>
                    </div>

                    <div class="item">
                        <label for="disride">Discridetion :</label>
                        <input type="text" id="descride" name="descride" placeholder="Mô tả tổng quan về vai trò mới ">
                    </div>

                    <button type="submit"> Thực hiện</button>

            </form>
        </div>

</body>
</html>