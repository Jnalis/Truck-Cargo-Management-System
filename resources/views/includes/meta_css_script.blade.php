<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>@yield('title')</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
<!-- END Icons -->

<!-- Stylesheets -->

<!-- Fonts and Codebase framework -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
{{-- <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/flat.min.css') }}"> --}}
<!-- END Stylesheets -->
