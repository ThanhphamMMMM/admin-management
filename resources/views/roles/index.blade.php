<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Quản lí ROLE</title>
</head>
<body>

    @if (session('error','update vai trò thành công'))
        <div style="color: red">{{ session('error')}}</div>
    @endif
    @if (session('success','update vai trò thành công'))
        <div style="color: green">{{ session('success')}}</div>
    @endif

    <h1 id="h1">List of Roles</h1>

    <h2><a href="{{ route('user.index')}}">List User </a></h2>
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
