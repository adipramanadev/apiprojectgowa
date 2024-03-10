<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')
    @yield('script')

    @include('admin.components.styles')
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layouts.nav')
            
            @include('admin.layouts.sidebar')
            <!-- Main Content -->
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
    @yield('script-bottom')
    @include('admin.components.scripts')
    @include('sweetalert::alert')
</body>
</html>
