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
	<script src="https://unpkg.com/scrollreveal"></script>
	<script>
		ScrollReveal({
			reset: true
		});

		var slideUp = {
			distance: '150%',
			origin: 'bottom',
			opacity: null
		};

		ScrollReveal().reveal('.slide-up', slideUp);
	</script>
	@stack('scripts')
	@vite('resources/js/app.js')
</head>

<body>

	@include('partials._navbar')

	<main>
		{{ $slot }}
	</main>


	<script src="{{ asset('js/pages/header.js') }}"></script>

	<!-- Include jQuery library -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

	<script>
		$(document).ready(function() {
			// Function to toggle the height of .header.active-header
			function toggleHeaderHeight() {
				if ($('.dropdown.active-dropdown').length > 0) {
					$('.header.active-header').css('height', '600px');
				} else {
					$('.header.active-header').css('height', '510px');
				}
			}

			// Call the function initially
			toggleHeaderHeight();

			// Event listener for changes in .dropdown.active-dropdown
			$('.dropdown').on('click', function() {
				toggleHeaderHeight();
			});
		});
	</script>
</body>



</html>
