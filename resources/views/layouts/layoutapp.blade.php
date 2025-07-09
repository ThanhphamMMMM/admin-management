<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/indexhttp.css') }}">
    @yield('css')
    <title> @yield('title')</title>
</head>

<body>

        @if (session('success')) 
            <div class="success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error')) 
            <div class="error">
            {{ session('error') }}
        </div>
        @endif
    
       <div class="container_mtp2">
       
            <h1>@yield('h1')</h1>

            <h2>@yield('h2')</h2>

            <h3>@yield('h3')</h3>
         @yield('content')
        </div>
    
</body>
</html>