<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@stack('metas')
	<title>{{ config('app.name', 'Total Gospel BC') }} - {{ $title }}</title>
	<link type="image/x-icon" href="{{ asset('favicon.png') }}" rel="shortcut icon">
	<link type="text/css" href="{{ asset('css/pages/main.css') }}" rel="stylesheet">
	@stack('links')
	@stack('scripts')
	@vite('resources/js/app.js')
</head>

<body>

	@include('partials._navbar')

	<main>
		{{ $slot }}
	</main>

</body>

</html>
