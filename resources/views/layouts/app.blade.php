<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      html {
        position: relative;
        min-height: 100%;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        line-height: 60px;
        background-color: #f5f5f5;
        text-align:center;
      }
    </style>
    <title>{{ config('app.name', 'Larablog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p>&copy;2018 | All rights reserved | Developed by <strong><a href="http://www.sainathparkar.com" target="_blank">Sainath Parkar</a><strong>.</p>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
