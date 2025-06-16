<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title>Danh sách người dùng</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Danh sách người dùng </h1>

    <h2><a href="">Thêm mới user</a></h2>

    <table>
        <thead>
            <tr>
                <th>stt</th>
                <th>Email</th>
                <th>fullname</th>
                <th>phone</th>
                <th>addrees</th>
                <th>birthday</th>
                <th>profile</th>
                <th>role</th>
                <th>create time</th>
                <th>thao tác</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ optional($user->profile)->full_name }}</td>
                    <td>{{ optional($user->profile)->phone }}</td>
                    <td>{{ optional($user->profile)->address }}</td>
                    <td>{{ optional($user->profile)->birthday }}</td>
                    <td>{{ optional($user->profile)->user_id }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    {{-- nút xoá user --}}
                    <td>

                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('xác nhận xoá người user này không')">

                                XoÁ
                            </button>
                        </form>
                        
                        <a href="" >
                            
                            Sửa</a>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>