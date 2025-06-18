<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('.css/formrole.css')}}">
    <title>Quản lí ROLE</title>
</head>
<body>
    
    <h1>List of Roles</h1>

    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>

    <h2><a href="{{ route('role.indexform')}}">Tạo Mới Vai Trò </a></h2>

    <h2><a href="{{ route('user.index')}}">List User </a></h2>

    <table>

        <thead>
            <tr>
                <th>STT</th>
                <th>Name Role(vai trò)</th>
                <th>Descride(Mô tả chung về vài trò)</th>
                <th>Thao tác</th>
            </tr>
        </thead>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->descride }}</td>   
                    <td>
                        <button>xoá</button>
                    </td>
                </tr>
            <tbody>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>