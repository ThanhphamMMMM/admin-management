<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createform.css') }}">
    <title>Create ROLE</title>
</head>
<body>
    
        <h1>Edit ROLE</h1>
        
            <div class="container">

            <form action="{{ route('role.update', $role->id) }}" method="POST">
                @csrf

                    <div class="item">
                        <label for="name">Name Role :</label>
                        <input type="text" id="name" name="name" value="{{ old('name',$role->name) }}" placeholder="Nhập vai trò muốn update " required>
                    </div>

                    <div class="item">
                        <label for="disride">Discridetion :</label>
                        <input type="text" id="descride" name="descride"  value="{{ old('descride',$role->descride)}}" placeholder="Mô tả tổng quan về vai trò mới ">
                    </div>

                    <button type="submit"> Cập Nhật</button>

            </form>
        </div>


</body>
</html>