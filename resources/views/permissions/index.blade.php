@extends('layouts.app')

@section('title')
    quản lí permission
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/indexha.css')}}">
@endsection
@section('content')
    <h3>Danh sách các quyền </h3>
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
    {{--@if(Auth::user()->role->permissions->contains('name', 'role.create'))--}}
    {{--@endif--}}
    <a href="#" class="btn btn-success float-end m-3"> Thêm quyền mới</a>

    <table>
        <thead>
            <tr class="TableCustom">
                <th>STT</th>
                <th>Tên Quyền</th>
                <th>Mô Tả Quyền</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        @foreach($permissions as $permission)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $permission->name }}</td>
                <td class="text-center">{{ $permission->description }}</td>
                <td>
                    <div class="nav nav-custom">
                        <div class="nav-update">
                            {{--                        @if(Auth::user()->role->permissions->contains('name', 'role.edit'))--}}
                            {{--                            --}}
                            {{--                        @endif--}}
                            <a href="{{ route('permission.edit',$permission->id) }}">
                                <button type="button" class="btn btn-primary m-2 btn-sm ">Sửa</button>
                            </a>
                        </div>

                        <div class="nav-delete">
                            {{--                        @if(Auth::user()->role->permissions->contains('name', 'role.destroy'))--}}
                            {{--                            --}}
                            {{--                        @endif--}}

                            <form action="{{ route('permission.destroy',$permission->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-2 btn-sm"
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
        {{ $permissions->links('pagination::bootstrap-4') }}
    </div>
@endsection

