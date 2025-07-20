@extends('layouts.app')

@section('title','quản lí user')

@section('css')

@endsection


@section('content')
<h3>Danh sách tài khoản & hồ sơ tài khoản</h3>
<a href="{{ route('user.create') }} " class="btn btn-success float-end m-3"> Thêm người dùng</a>

     <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Stt</th>
                <th>Email</th>
                <th>Fullname</th>
                <th>Phone</th>
                <th>Addrees</th>
                <th>Birthday</th>
                <th>Roles</th>
                <th>Create time</th>
                <th>Pperationc</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td></td>
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

                            <div class="nav-s">
                                <a href="{{ route('user.edit',$user->id)}}">
                                    <button type="button" class="btn btn-primary m-2 ">Sửa</button>
                                </a>
                            </div>

                            <div class="nav-x">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger m-2" onclick="return confirm('xác nhận xoá người dùng này không')">Xoá</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



