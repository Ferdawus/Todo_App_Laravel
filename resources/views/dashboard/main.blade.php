<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('dashboard.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('dashboard.sidebar')
        <!--Body main start-->
        @yield('content')
        <!--Body main End-->
        @include('dashboard.footer')
    </div>
</body>
</html>
