@extends('layouts.app')

@section('title')
    Quản lý Quyền
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <h3>Thêm mới Quyền</h3>
    <div class="card-body">
        <form action="{{ route('permission.store') }}" method="POST">
            @csrf
            {{--            Nhập tên role--}}
            <div class="tab-content">
                <div class="form-group row align-items-center">
                    <label class="col-md-2 col-form-label font-weight-medium" for="name">Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="name" name="name"
                               placeholder="Nhập vai trò cần cần tạo " required>
                    </div>
                </div>
                {{--                Mô tả role--}}
                <div class="form-group row">
                    <label class="col-md-2 col-form-label font-weight-medium" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="description" name="description" rows="5"
                                  placeholder="Mô tả chung về vai trò cần cần tạo "></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-primary"> Thực hiện</button>
            </div>
        </form>
    </div>
@endsection

