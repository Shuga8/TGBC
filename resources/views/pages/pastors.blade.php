<x-layout :title="$title">

	<section class="pastors-page">
		<div class="hero">

			<div class="overlay p-1">
				<h2 class="slide-up text-center text-3xl uppercase text-white">{{ $title }}</h2>
			</div>
		</div>

		<h3 class="my-2 text-center text-2xl font-extrabold text-teal-800">Our Pastors</h3>

		<div class="pastors-content flex justify-center px-2 py-5 sm:justify-center md:justify-center lg:justify-normal">

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor1.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">Pastor Kolawole s.a</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor2.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">Rev Solomon I Olomojare</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor3.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">Pastor Sunday Akinyemi</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor4.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">Pastor David Akingbelure</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor5.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">PASTOR GBENRO OLAJIDE</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<figure>
						<img src="{{ asset('images/pastor6.jpg') }}" alt="" loading="lazy">
					</figure>
				</div>

				<div class="card-body">
					<h4 class="text-center text-sm font-bold uppercase text-gray-800">Pastor Solomon Adeleke</h4>
				</div>
			</div>

		</div>
	</section>

</x-layout>
