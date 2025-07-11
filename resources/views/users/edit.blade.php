@extends('layouts.app')

@section('title','quản lí user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/createhkt.css')}}">
@endsection


@section('content')
    <h3 class="text-left">Sửa người dùng</h3>
    <div class="p-4">
        <form action="{{ route('user.update',$user->id)}}" method="POST">
            @csrf

            <!-- Text input -->
            <div class="form-group">
                <label for="text-input">Text</label>
                <input class="form-control" type="text" id="text-input" value="Artisanal kale">
            </div>

            <!-- Search input -->
            <div class="form-group">
                <label for="search-input">Search</label>
                <input class="form-control" type="search" id="search-input" value="How do I shoot web">
            </div>

            <!-- Email input -->
            <div class="form-group">
                <label for="email-input">Email</label>
                <input class="form-control" type="email" id="email-input" value="email@example.com">
            </div>

            <!-- URL Input -->
            <div class="form-group">
                <label for="url-input">URL</label>
                <input class="form-control" type="url" id="url-input" value="https://getbootstrap.com">
            </div>

            <!-- Phone Input -->
            <div class="form-group">
                <label for="tel-input">Phone</label>
                <input class="form-control" type="tel" id="tel-input" value="1-(770)-334-2518">
            </div>

            <div class="form-group">
                <label for="pass-visibility" class="form-label">Password</label>
                <div class="cs-password-toggle">
                    <input type="password" id="pass-visibility" class="form-control" value="hidden@password">
                    <label class="cs-password-toggle-btn">
                        <input type="checkbox" class="custom-control-input">
                        <i class="fe-eye cs-password-toggle-indicator"></i>
                        <span class="sr-only">Show password</span>
                    </label>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label for="textarea-input">Textarea</label>
                <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
            </div>

            <!-- Select -->
            <div class="form-group">
                <label for="select-input">Select</label>
                <select class="form-control custom-select" id="select-input">
                    <option>Choose option...</option>
                    <option>Option item 1</option>
                    <option>Option item 2</option>
                    <option>Option item 3</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info btn-sm m-0" disabled>Lưu lại</button>
        </form>
    </div>
@endsection

