<header class="header" id="header">
	<nav class="navbar" id="navbar">
		<div class="logo">
			<a href="{{ route('home') }}"><img src="{{ asset('logo_300X300.png') }}" alt="Logo"></a>
		</div>

		<div class="links">
			<div class="link">
				<a href="">Home</a>
			</div>

			<div class="link dropable">
				<a href="javascript:void(0)">About</a>

				<div class="dropdown about-dropdown">
					<a href="">Meet Our G.O</a>
					<a href="">Our Mummy G.O</a>
					<a href="">Meet Our Pastors</a>
				</div>
			</div>

			<div class="link">
				<a href="">Sermons</a>
			</div>

			<div class="link">
				<a href="">Events</a>
			</div>

			<div class="link">
				<a href="">Blog</a>
			</div>

			<div class="link">
				<a href="">Contact</a>
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
