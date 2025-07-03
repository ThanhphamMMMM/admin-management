<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/indexhd.css') }}">
    <title>Quản lí ROLE</title>
</head>
<body>

    @if (session('success')) 
        <div class="success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error')) 
        <div class="error">
        {{ session('error') }}
    </div>
    @endif

    <h1 id="h1">List of Roles</h1>

    <h2><a href="/dashboard">Trang chủ </a></h2>
    <h2><a href="{{ route('role.create')}}">Tạo Mới Vai Trò </a></h2>

    <table>

        <thead>
            <tr>
                <th>STT</th>
                <th>Name Role(Vai trò)</th>
                <th>Descride(Mô tả chung về vai trò)</th>
                <th>Thao tác</th>
            </tr>
        </thead>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->descride }}</td>
                    <td>
                        <form action="{{ route('role.destroy',$role->id)}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</button>
                        </form>

                        <a href="{{ route('role.edit', $role->id) }}">
                            <button>Sửa</button>
                        </a>

                    </td>
                </tr>
            <tbody>
            @endforeach
        </tbody>
    </table>

</body>
</html>
