<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.frontend.head')
    
</head>
<body>
    @include('includes.frontend.header')
    @yield('content')
    @include('includes.frontend.footer')
    @yield('scripts')
</body>
</html>