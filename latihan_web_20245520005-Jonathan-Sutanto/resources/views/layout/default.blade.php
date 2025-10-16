<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    <header>@include('layout.header')</header>
    <main>
        @yield('main_content')
    </main>
    <footer>@include('layout.footer')</footer>
</body>
</html>