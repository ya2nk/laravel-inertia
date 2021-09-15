<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Laravel Inertia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	
    @routes
    <script src="{{ asset('/js/app.js') }}" defer></script>
	<script src="{{ asset('assets/js/main.js') }}" defer></script>
</head>
<body>
  @inertia
</body>
</html>