<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}">
</head>

<body style="background: #f3f3f3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('pages.nav')
            </div>
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
