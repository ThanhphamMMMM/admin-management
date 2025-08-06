@extends('layouts.app')

@section('title')
    quản lí user
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection


@section('content')
    <h3 class="text-left ml-0">Sửa vai trò</h3>
    <div class="container">

        <form action="{{ route('role.update', $role->id) }}" method="POST">
            @csrf
            <div class="tab-content">
                <div class="form-group row align-items-center">
                    <label class="col-md-2 col-form-label font-weight-medium" for="name">Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="name" name="name"
                               value="{{ old('name',$role->name) }}"
                               placeholder="Nhập vai trò cần cần tạo " required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label font-weight-medium" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="description" name="description" rows="5"
                                  placeholder="Mô tả chung về vai trò cần cần tạo ">
                                {{ old('description',$role->description)}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label font-weight-medium" for="description">Authority</label>
                    <div class="col-md-10">
                        @foreach($allPermissions as $permission)
                            <div>
                                <label>
                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                        {{ in_array($permission->id, $rolePermissionsIds) ? 'checked':'' }}>
                                    {{ $permission->description }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit"> Thực Hiện </button>

            </div>

        </form>
    </div>
@endsection
