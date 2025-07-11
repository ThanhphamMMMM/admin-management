@extends('layouts.app')

@section('title','quản lí user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/createhkt.css')}}">
@endsection


@section('content')
 <h1>Thêm vai trò</h1>
     <div class="container">
            <form action="{{ route('role.store') }}" method="POST">
                @csrf
                    <div class="item">
                        <label for="name">Name Role :</label>
                        <input type="text" id="name" name="name" placeholder="Nhập vai trò mới " required>
                    </div>

                    <div class="item">
                        <label for="disride">Discridetion :</label>
                        <input type="text" id="descride" name="descride" placeholder="Mô tả tổng quan về vai trò mới ">
                    </div>

                    <button type="submit"> Thực hiện</button>

            </form>
    </div>
@endsection