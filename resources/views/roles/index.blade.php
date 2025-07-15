@extends('layouts.app')

@section('title','quản lí role')

@section('css')

@endsection

@section('content')
<h3>Danh sách vai trò</h3>
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
                        <div class="nav">
                            <div class="nav-s">
                                <a href="{{ route('role.edit', $role->id) }}">
                                    <button type="button" class="btn btn-primary m-2 ">Sửa</button>
                                </a>
                            </div>

                            <div class="nav-x">
                                <form action="{{ route('role.destroy',$role->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-2" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <tbody>
            @endforeach
        </tbody>
    </table>
@endsection

