@extends('layouts.app')

@section('title')
    quản lí role
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
    <a href="{{ route('role.create') }} " class="btn btn-success float-end m-3"> Thêm vai trò</a>
    <table>
        <thead>
        <tr class="TableCustom">
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
                        <div class="nav-update">
                            <a href="{{ route('role.edit', $role->id) }}">
                                <button type="button" class="btn btn-primary m-2 ">Sửa</button>
                            </a>
                        </div>

                        <div class="nav-delete">
                            <form action="{{ route('role.destroy',$role->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-2"
                                        onclick="return confirm('Bạn  chắc chắn muốn xoá không?')">Xoá
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            <tbody>
            @endforeach
            </tbody>
    </table>
    <div class="d-flex justify-content-start mt-4 ">
        {{ $roles->links() }}
    </div>
@endsection

