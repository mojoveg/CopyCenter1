<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Copy Center</title>
{{--   <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css"> --}}
{{--   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{-- Debugging CSS --}}
  {{-- <link rel="stylesheet" href="styles/debug.css"> --}}
  @yield('head')
  @livewireStyles
</head>
<body>

  @yield('main')



  @livewireScripts
</body>
</html>
