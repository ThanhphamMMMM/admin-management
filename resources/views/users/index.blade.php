@extends('layouts.main')

@section('css')

    @section('title','Quản lý người dùng')

    @section('h1', 'Quản lý')
    @section('h2', 'Danh sách người dùng')
    @section('h3')
        <a href="{{ route('user.create') }}">Tạo mới User</a>
    @endsection


    @section('content1')
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

                    <td>
                        {{-- nút xoá user --}}
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('xác nhận xoá người user này không')">
                                XoÁ
                            </button>
                        </form>
                        {{-- nút sửa user --}}
                        <a href="{{ route('user.edit',$user->id)}}">
                            <button>
                                Sửa
                            </button>
                        </a>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection

    @section('content')
        <!-- Basic table -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>FullName</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th>Profile</th>
                    <th>Role</th>
                    <th>Created time</th>
                    <th>Actions</th>
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
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('xác nhận xoá người user này không')">
                                    XoÁ
                                </button>
                            </form>

                            <a class="btn btn-info edit-user-btn" href="{{ route('user.edit',$user->id)}}">
                                Sửa
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
