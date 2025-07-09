@extends('layouts.layoutapp')

@section('css')

@section('title','Quản lý vai trò')

@section('h1', 'Quản lý')
@section('h2', 'Danh sách vai trò')
@section('h3')
    <a href="{{ route('role.create')}}">Tạo Mới Vai Trò </a>
@endsection

@section('content')

     <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Name Role</th>
                <th>Descride</th>
                <th>Thao tác</th>
            </tr>
        </thead>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->descride }}</td>
                    <td>
                        {{-- nút xoá roles --}}
                        <form action="{{ route('role.destroy',$role->id)}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</button>
                        </form>
                        {{-- nút xoá roles --}}
                        <a href="{{ route('role.edit', $role->id) }}">
                            <button>Sửa</button>
                        </a>

                    </td>
                </tr>
            <tbody>
            @endforeach
        </tbody>
    </table>
@endsection

