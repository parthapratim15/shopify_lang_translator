<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Store FAQ')</title>
    <!-- plugins:css -->
    @include('partials.styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
    <div class="">
        @include('partials.topbar')
        <div class="contents">
            @yield('contents')
        </div>
    </div>
    @include('partials.scripts', ['_withAppBridge' => true])
</body>

</html>
