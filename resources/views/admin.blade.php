<!DOCTYPE html>
<html lang="en">
<head>
@include('admin_partials.head')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('admin_partials.navbar')
            @include('admin_partials.side_nav')
        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
    @include('admin_partials.javascripts')
</body>
</html>
