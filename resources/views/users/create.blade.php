@extends('layouts.app')

@section('title','quản lí user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/createth.css')}}">

@endsection

@section('content')
<h3>Thêm mới tài khoản người dùng </h3>
  <div class="card-body">
    <form action="{{ route('user.store')}}" method="POST">
      @csrf
      <div class="tab-content">

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="fullname">Full Name</label>
        <div class="col-md-10">
          <input class="form-control" type="text" id="fullname" value="{{ old('fullname')}}" placeholder="Nhập họ và tên " name="fullname" required>
          @error('fullname')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="tel">Phone</label>
        <div class="col-md-10">
          <input class="form-control" type="text" id="tel" value="{{ old('tel')}}" placeholder="Nhập số điện thoại " name="tel" required>
          @error('tel')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="address">Address</label>
        <div class="col-md-10">
          <input class="form-control" type="text" id="address" value="{{ old('address')}}" placeholder="Nhập địa chỉ " name="address" required>
          @error('address')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="date">Brithday</label>
        <div class="col-md-10">
          <input class="form-control" type="date" id="date" value="{{ old('date')}}" placeholder="Nhập địa chỉ " name="date" required>
          @error('date')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="email">Email</label>
        <div class="col-md-10">
          <input class="form-control" type="email" id="email" name="email" value="{{ old('email')}}" placeholder="Nhập email :(...@gmail.com) " required >
            @error('email')
            <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>
      
      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="password">Password</label>
        <div class="col-md-10">
          <label class="cs-password-toggle-btn">
        <input class="custom-control-input" type="checkbox">
      </label>
          <input class="form-control" type="password" id="password" name="password">
        </div>
          @error('password')
          <div style="color:red;">{{ $message }}</div>
          @enderror
      </div> 

      <div class="form-group row align-items-center">
        <label class="col-md-2 col-form-label font-weight-medium" for="role">Roles</label>
        <div class="col-md-10">
            <select class="form-control custom-select" name="role" id="role">
                <option value="">-- Chọn vai trò --</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>
                        {{ $role->id }} - {{ $role->name }}
                    </option>
                @endforeach
            </select>
            @error('role')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
      </div>
          
      <button class="btn btn-outline-primary" type="submit">Thực HIỆN</button>

  </form>         
      </div>

@endsection


     

    



