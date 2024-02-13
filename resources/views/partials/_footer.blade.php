<footer class="footer px-3 py-7" id="footer">
	<section class="upper-section">
		<div class="">
			<figure class="logo" lazy="true">
				<a href="{{ route('home') }}"><img src="{{ asset('logo_300X300.png') }}" alt="Logo"></a>
			</figure>

			<div class="content">
				<blockquote class="text-sm text-gray-400">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae ullam officia odio, ut dolores eos.
				</blockquote>
			</div>
		</div>

		<div class="">
			<h5>Recent Posts</h5>

			<div class="content">
				@unless ($posts->count() == 0)
					@foreach ($posts as $post)
						<div class="card">
							<figure lazy="true">
								<a href="">
									<img class="w-15 h-9" src="{{ asset('storage/' . $post->image_url) }}" alt="" loading="lazy">
								</a>
							</figure>

							<div class="">
								<p class="text-sm font-semibold">{{ $post->title }}</p>
								<time class="text-sm" datetime="{{ $post->created_at }}">{{ $post->created_at }}</time>
							</div>
						</div>
					@endforeach
				@endunless
			</div>
		</div>

		<div class="">
			<h5>Contact Info</h5>

			<div class="content">
				<a href="tel:+234(101-101-101)">+234(101-101-101)</a>
				<a href="mailto:info@totalgospelbc.org">Info@totalgospelbc.org</a>
				<address class="text-sm text-gray-400">22 Gomez Street Majek, Lekki Epe Expressway, Eti-Osa LGA, Lagos State
				</address>
			</div>
		</div>

		<div class="">
			<h5>Useful Links</h5>

			<div class="content">
				<a href="">Events</a>
				<a href="">Blog</a>
				<a href="">Sermons</a>

			</div>
		</div>
	</section>

	<section class="lower-section">
		All rights reserved &copy;
		<script>
			document.write(new Date().getFullYear() + " ")
		</script> <a href=""> Blue Dragon</a>&trade;
	</section>
</footer>
