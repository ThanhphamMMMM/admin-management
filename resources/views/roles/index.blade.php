@extends('layouts.app')

@section('title')
    quản lí role
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/indexha.css')}}">
@endsection
@section('content')
    <h3>Danh sách vai trò</h3>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng"></button>
        </div>
    @endif
    @if(Auth::user()->role->permissions->contains('name', 'role.create'))
        <a href="{{ route('role.create') }} " class="btn btn-success float-end m-3"> Thêm vai trò</a>
    @endif
    <table>
        <thead>
        <tr class="TableCustom">
            <th>STT</th>
            <th>Tên Vai Trò</th>
            <th>Mô Tả Về Vai Trò</th>
            <th>Tính Năng Vai Trò Có Thể Truy Cập</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        @foreach($roles as $role)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $role->name }}</td>
                <td class="text-center">{{ $role->description }}</td>
                <td class="text-center-custom">
                    @foreach($role->permissions as $permission)
                        <span>
                            {{$permission->description}}
                            @if(!$loop->last)
                            @endif
                        </span>
                    @endforeach
                </td>
                <td>
                    <div class="nav nav-custom">
                        <div class="nav-update">
                            @if(Auth::user()->role->permissions->contains('name', 'role.edit'))
                                <a href="{{ route('role.edit',$role->id)}}">
                                    <button type="button" class="btn btn-primary m-2 btn-sm ">Sửa</button>
                                </a>
                        </div>
                        @endif
                        <div class="nav-delete">
                            @if(Auth::user()->role->permissions->contains('name', 'role.destroy'))
                                <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-2 btn-sm"
                                            onclick="return confirm('Bạn  chắc chắn muốn xoá không?')">Xoá
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tbody>
            @endforeach
            </tbody>
    </table>
    <div class="d-flex justify-content-start mt-4 ">
        {{ $roles->links('pagination::bootstrap-4') }}
    </div>
@endsection

