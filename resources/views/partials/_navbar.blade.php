<header class="header" id="header">
	<nav class="navbar" id="navbar">
		<div class="logo">
			<a href="{{ route('home') }}"><img src="{{ asset('logo_300X300.png') }}" alt="Logo"></a>
		</div>

		<div class="links">
			<div class="link">
				<a href="{{ route('home') }}">Home</a>
			</div>

			<div class="link dropable">
				<a href="javascript:void(0)">About</a>

				<div class="dropdown about-dropdown">
					<a href="{{ route('general_overseer') }}">Meet Our G.O</a>
					<a href="{{ route('mummy_go') }}">Our Mummy G.O</a>
					<a href="{{ route('pastors') }}">Meet Our Pastors</a>
				</div>
			</div>

			<div class="link">
				<a href="">Sermons</a>
			</div>

			<div class="link">
				<a href="">Events</a>
			</div>

			<div class="link">
				<a href="{{ route('blog') }}">Blog</a>
			</div>

			<div class="link">
				<a href="{{ route('contact') }}">Contact</a>
			</div>

			<div class="link">
				<a class="donate-btn" href="">Donate</a>
			</div>

			<div class="link">
				<a class="toggle-icon" href="javascript:void(0)">&#9776;</a>
			</div>
		</div>
	</nav>
</header>
