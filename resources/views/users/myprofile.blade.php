@extends('layouts.app')

@section('title')
    my-profile
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/myprofilepa.css')}}">
@endsection

@section('content')
    <div class="Container">
        <div class="Re-per">
            <div class="avatar-wrapper">
                <img id="avatarPreview" src="{{ asset('images/myprofile.png') }}" alt="Avatar" >
                <br>
                <button class="button-custom" onclick="document.getElementById('avatarInput').click()">Thay đổi ảnh</button>
                <input type="file" id="avatarInput" accept="image/*" class="file-custom">
            </div>
        </div>
        <script>
            document.getElementById('avatarInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        document.getElementById('avatarPreview').src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                }
            });
        </script>

        <div class="Container-custom">
            <div class="information">
                <h3>Thông tin cá nhân</h3>
                <hr>
                <form action="{{ route('updateProfile') }}" method="POST">
                    @csrf
                    <div class="tab-content">
                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="full_name">Họ và Tên</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="full_name" name="full_name" value="{{ $user->profile->full_name }}" required>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="email">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="phone">Số điện thoại</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="phone" name="phone" value="{{ $user->profile->phone }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label font-weight-medium" for="address">Địa chỉ</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="address" name="address" rows="5" >{{ $user->profile->address }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="birthday">Ngày sinh</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="birthday" name="birthday" value="{{ old('date', $user->profile->birthday)}}" required>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="name">Vai trò</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="name" name="name" value="{{ $user->role->name }}">
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-md-2 col-form-label font-weight-medium" for="descride">Mô tả</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="descride" name="descride" value="{{ $user->role->descride }}">
                            </div>
                        </div>

                        <button type="submit"  class="btn btn-outline-primary "> Cập nhật thông tin</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <div class="Update-password">
        <h3>Đổi mật khẩu</h3>
        <form action="#" method="POST">
            @csrf
                            <label>Mật khẩu hiện tại</label>
            <div class="input-group-overlay cs-password-toggle form-group">
                {{--                <label>saad</label>--}}
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-lock"></i></span></div>

                <input class="form-control prepended-form-control" type="password" placeholder="password" id="password"
                       name="password" required>
                <label class="cs-password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i
                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
            </div>

                            <label>Mật khẩu mới</label>
            <div class="input-group-overlay cs-password-toggle form-group">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-lock"></i></span></div>
                <input class="form-control prepended-form-control" type="password" placeholder="password" id="password"
                       name="password" required>
                <label class="cs-password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i
                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
            </div>

                            <label>Xác nhận mật khẩu mới</label>
            <div class="input-group-overlay cs-password-toggle form-group">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-lock"></i></span></div>
                <input class="form-control prepended-form-control" type="password" placeholder="password" id="password"
                       name="password" required>
                <label class="cs-password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i
                        class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
            </div>

            <button type="submit"  class="btn btn-outline-primary "> Đổi mật khẩu</button>
        </form>
    </div>

@endsection



