@extends('layouts.app')

@section('title')
    quản lí user
@endsection

@section('content')
    <h3>Danh sách tài khoản</h3>
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
    <a href="{{ route('user.create') }} " class="btn btn-success float-end m-3"> Thêm người dùng</a>

    <table class="table">
        <thead>
        <tr class="TableCustom">
            <th>Stt</th>
            <th>Email</th>
            <th>Họ và Tên</th>
            <th>Số Phone</th>
            <th>Địa Chỉ</th>
            <th>Sinh Thần</th>
            <th>Vai Trò</th>
            <th>Ngày Tạo</th>
            <th>Thao Tác</th>
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
                <td>{{ $user->role->name }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td>
                    <div class="nav">
                        <div class="nav-delete">
                            <a href="{{ route('user.edit',$user->id)}}">
                                <button type="button" class="btn btn-primary m-2 ">Sửa</button>
                            </a>
                        </div>

                        <div class="nav-update">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-start mt-4 ">
        {{ $users->links() }}
    </div>
@endsection



