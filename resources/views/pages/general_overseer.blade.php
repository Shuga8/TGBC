<x-layout :title="$title">

	<section class="general-overseer-page">
		<div class="hero">

			<div class="overlay p-1">
				<h2 class="slide-up text-center text-3xl text-white">Meet Our General Overseer</h2>
			</div>
		</div>

		<div class="overseer-content px-3 py-8">
			<div class="content">
				<h3 class="text-2xl font-extrabold text-gray-950">Rev Dan Akingbelure</h3>

				<blockquote class="p-2 text-gray-600">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi recusandae possimus obcaecati, a expedita culpa.
					</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor facere hic porro itaque praesentium, eum numquam
						dolore veritatis nam?</p>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum ducimus corporis cupiditate, voluptatem
						temporibus soluta aspernatur odio.</p>
				</blockquote>
				<div class="itenary">
					<h4 class="text-xl font-bold text-gray-900">G.O's Itenary for the year
						<mark>
							<script>
								document.write(new Date().getFullYear())
							</script>
						</mark>
					</h4>

					<ul class="p-2 text-gray-600">
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.</li>
					</ul>
				</div>
			</div>
			<figure>
				<img src="{{ asset('images/SXP_1962.jpg') }}" alt="" loading="lazy">
			</figure>
		</div>
	</section>

</x-layout>
