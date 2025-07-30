@extends('layouts.app')

@section('title')
    quản lí user
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/indexth.css') }}">
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
            <th class="kh-custom">STT</th>
            <th class="hh-custom">Email</th>
            <th class="hh-custom">Họ và Tên</th>
            <th class="hh-custom">Số Phone</th>
            <th class="hh-custom">Địa Chỉ</th>
            <th class="hh-custom">Ngày Sinh</th>
            <th class="hh-custom">Vai Trò</th>
            <th class="hh-custom">Ngày Tạo</th>
            <th class="th-custom">Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">{{ optional($user->profile)->full_name }}</td>
                <td class="text-center">{{ optional($user->profile)->phone }}</td>
                <td class="text-center">{{ optional($user->profile)->address }}</td>
                <td class="text-center">{{ optional($user->profile)->birthday }}</td>
                <td class="text-center">{{ $user->role->name }}</td>
                <td class="text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                <td>
                    <div class="nav">
                        <div class="nav-delete">
                            <a href="{{ route('user.edit',$user->id)}}">
                                <button type="button" class="btn btn-primary m-1 btn-sm ">Sửa</button>
                            </a>
                        </div>

                        <div class="nav-update">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1 btn-sm"
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



