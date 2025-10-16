<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title','default title')</title>
    <!-- css/js go here -->
</head>
<body>
    <!-- header -->  
        <header> @yield('header_content') </header>
    <!-- main -->
     <main> @yield('main_content') </main>
    <!-- footer -->
     <footer> @yield('footer_content','default footer text') </footer>
</body>
</html>