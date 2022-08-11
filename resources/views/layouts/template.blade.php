<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="description" content="{{$meta_content}}">
      <meta name="keywords" content="{{$meta_keywords}}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- fonts -->
         <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
      <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        {{$main}}
    </body>
</html>
@livewireScripts
