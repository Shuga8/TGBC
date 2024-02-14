<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="title" content="Total Gospel Bible Church - {{ $title }}">
	@stack('metas')
	<title>{{ config('app.name', 'Total Gospel BC') }} - {{ $title }}</title>
	<link type="image/x-icon" href="{{ asset('favicon.png') }}" rel="shortcut icon">
	<link type="text/css" href="{{ asset('css/pages/main.css') }}" rel="stylesheet">
	@stack('links')
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	@vite('resources/js/app.js')
</head>

<body>

	@include('partials._navbar')

	<x-flash-message />

	<main>
		{{ $slot }}
	</main>

	@php

		$footer_post = App\Models\Post::latest()->take(2)->get();

	@endphp


	@include('partials._footer', $posts = $footer_post)

	<script src="{{ asset('js/pages/header.js') }}"></script>

	<!-- Include jQuery library -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<script>
		ScrollReveal().reveal('.slide-up', {
			distance: '150px',
			origin: 'bottom',
			opacity: 0,
			duration: 1000
		});

		ScrollReveal().reveal('.slide-left', {
			distance: '150%',
			origin: 'left',
			opacity: 0,
			duration: 1000
		});

		ScrollReveal().reveal('.slide-right', {
			distance: '150%',
			origin: 'right',
			opacity: 0,
			duration: 1000
		});

		ScrollReveal().reveal('.slide-top', {
			distance: '150%',
			origin: 'top',
			opacity: 0,
			duration: 1000
		});
	</script>
	@stack('scripts')
</body>



</html>
