@extends('layouts.app')

@section('title','quản lí user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/createhkt.css')}}">

@endsection

@section('content')
    <h3>Thêm mới vai trò</h3>
     <div class="card-body">
        <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="tab-content">
                <div class="form-group row align-items-center">
                    <label class="col-md-2 col-form-label font-weight-medium" for="name">Name</label>
                    <div class="col-md-10">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nhập vai trò cần cần tạo " required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label font-weight-medium" for="descride">Description</label>
                    <div class="col-md-10">
                    <textarea class="form-control" id="descride" name="descride" rows="5"  placeholder="Mô tả chung về vai trò cần cần tạo "></textarea>
                    </div>
                </div>

                <button type="submit"  class="btn btn-outline-primary"> Thực hiện</button>
            </div>
        </form>
     </div>
@endsection

