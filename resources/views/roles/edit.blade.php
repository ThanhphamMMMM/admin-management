@extends('layouts.app')

@section('title','quản lí user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/createhkt.css')}}">
@endsection


@section('content')
 <h1>Sửa vai trò</h1>
      <div class="container">
        
                <form action="{{ route('role.update', $role->id) }}" method="POST">
                    @csrf
                        <div class="item">
                            <label for="name">Name Role :</label>
                            <input type="text" id="name" name="name" value="{{ old('name',$role->name) }}" placeholder="Nhập vai trò muốn update " required>
                        </div>

                        <div class="item">
                            <label for="disride">Discridetion :</label>
                            <input type="text" id="descride" name="descride"  value="{{ old('descride',$role->descride)}}" placeholder="Mô tả tổng quan về vai trò mới ">
                        </div>

                        <button type="submit"> Cập Nhật</button>

                </form>
            </div>
@endsection