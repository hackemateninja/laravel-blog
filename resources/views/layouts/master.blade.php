<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog salomondrin</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>
  <body>

    @include('layouts.nav')

    @include('layouts.header')


    <div class="container">
        <div class="row">
            @yield('content')
            @include('layouts.sidebar')
        </div>
    </div>


    @include('layouts.footer')
  </body>
</html>
