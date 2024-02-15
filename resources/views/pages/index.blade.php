<x-layout :title="$title">



	<div class="relative w-full" id="default-carousel" data-carousel="slide">
		<!-- Carousel wrapper -->
		<div class="carousel-images relative overflow-hidden">
			<!-- Item 1 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
					src="{{ asset('images/2.jpg') }}" alt="..." loading="lazy">
			</div>
			<!-- Item 2 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
					src="{{ asset('images/3.jpg') }}" alt="...">
			</div>
			<!-- Item 3 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
					src="{{ asset('images/4.jpg') }}" alt="...">
			</div>
			{{-- <!-- Item 4 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
					src="/docs/images/carousel/carousel-4.svg" alt="...">
			</div>
			<!-- Item 5 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
					src="/docs/images/carousel/carousel-5.svg" alt="...">
			</div> --}}
		</div>
		<!-- Slider indicators -->
		<div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
			<button class="h-3 w-3 rounded-full" data-carousel-slide-to="0" type="button" aria-current="true"
				aria-label="Slide 1"></button>
			<button class="h-3 w-3 rounded-full" data-carousel-slide-to="1" type="button" aria-current="false"
				aria-label="Slide 2"></button>
			<button class="h-3 w-3 rounded-full" data-carousel-slide-to="2" type="button" aria-current="false"
				aria-label="Slide 3"></button>
			{{-- <button class="h-3 w-3 rounded-full" data-carousel-slide-to="3" type="button" aria-current="false"
				aria-label="Slide 4"></button>
			<button class="h-3 w-3 rounded-full" data-carousel-slide-to="4" type="button" aria-current="false"
				aria-label="Slide 5"></button> --}}
		</div>
		<!-- Slider controls -->
		<button
			class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 outline-none focus:outline-none"
			data-carousel-prev type="button">
			<span
				class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
				<svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
					xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
				</svg>
				<span class="sr-only">Previous</span>
			</span>
		</button>
		<button
			class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 outline-none focus:outline-none"
			data-carousel-next type="button">
			<span
				class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
				<svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true"
					xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
				</svg>
				<span class="sr-only">Next</span>
			</span>
		</button>
	</div>


	@unless ($events->count() == 0)
		<div class="events-container w-full px-4 py-11">
			<h2 class="flex justify-center text-center text-xl font-semibold uppercase text-cyan-700"><x-heroicon-o-calendar-days
					class="h-6 w-10 text-cyan-700" />Events
			</h2>

			<div class="cards-container py-5">
				@foreach ($events as $event)
					<div class="card slide-up">
						<figure>
							<img class="" src="{{ asset('storage/' . $event->image) }}" alt="Flier">
						</figure>
						<div class="title font-bold uppercase">{{ $event->name }}</div>
						<div class="block">
							<span class="float-left flex text-sm text-cyan-600"><x-heroicon-o-map-pin class="h-5 w-4 text-cyan-600" />
								{{ $event->location }}</span>
							<i class="float-right flex text-sm text-gray-400"><x-heroicon-o-clock class="h-5 w-4 text-gray-400" />
								{{ $event->happning_at }}</i>
						</div>

						<div class="float-left mt-1 block w-full">
							<a class="text-sm text-blue-800" href="">See more</a>
						</div>
					</div>
				@endforeach
			</div>

		</div>
	@endunless

	<div class="about-index-container block w-full px-4 pb-2 pt-10">
		<h2 class="text-center text-xl font-semibold uppercase text-cyan-700">About <x-heroicon-o-book-open
				class="mx-auto block h-6 w-8 text-center" />
		</h2>
		<blockquote class="p-3 text-center text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident
			cumque
			laboriosam
			nulla nemo atque id. </blockquote>

		<div class="inner-about-container px-5 py-3">
			<figure class="slide-up" lazy="true">
				<img src="{{ asset('images/kelly-sikkema-4le7k9XVYjE-unsplash.jpg') }}" alt="" loading="lazy">
			</figure>

			<div class="quote slide-left">
				<h3>What We Do</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit quos molestias odit sunt, quo quis
					delectus minus ea, sit ullam! Quam ipsum odit provident repellendus velit pariatur deserunt quibusdam?
				</p>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, optio cupiditate accusamus quos repellendus aut
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ut sapiente provident modi suscipit iure unde
				</p>
			</div>
		</div>
	</div>

	<section class="three-images px-10 pb-4">

		<figure lazy="true">
			<img src="{{ asset('images/im4-1024x654.jpg') }}" alt="" loading="lazy">
		</figure>

		<figure lazy="true">
			<img src="{{ asset('images/men-768x397.jpg') }}" alt="" loading="lazy">
		</figure>

		<figure lazy="true">
			<img src="{{ asset('images/im-1024x664.jpg') }}" alt="" loading="lazy">
		</figure>

	</section>


	<section class="pastors-talk-container my-5">

		<div class="overlay p-2">
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->

					<div class="swiper-slide pastor py-25">
						<figure>
							<img src="{{ asset('images/SXP_1962.jpg') }}" alt="">
						</figure>

						<div class="name text-center text-xl text-gray-200">REV DAN AKINGBELURE</div>
						<div class="position text-center text-orange-400"><small>General Overseer</small></div>
						<blockquote class="text-center text-sm text-gray-100">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rem quisquam voluptates fuga.
						</blockquote>
					</div>

					<div class="swiper-slide pastor py-25">
						<figure>
							<img src="{{ asset('images/SXP_2019 (2).jpg') }}" alt="">
						</figure>

						<div class="name text-center text-xl text-gray-200">REV MRS AKINGBELURE</div>
						<div class="position text-center text-orange-400"><small>Mummy G.O</small></div>
						<blockquote class="text-center text-sm text-gray-100">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rem quisquam voluptates fuga.
						</blockquote>
					</div>


					<div class="swiper-slide pastor py-25">
						<figure>
							<img src="{{ asset('images/Rev.-Mrs-Dorcas-Adetuyi-440x333.jpg') }}" alt="">
						</figure>

						<div class="name text-center text-xl text-gray-200">REV MRS DORCAS</div>
						<div class="position text-center text-orange-400"><small>Senoir Pastor</small></div>
						<blockquote class="text-center text-sm text-gray-100">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rem quisquam voluptates fuga.
						</blockquote>
					</div>

					<div class="swiper-slide pastor py-25">
						<figure>
							<img src="{{ asset('images/Rev.-Sunday-Olomojare.jpg-5.jpg-6-768x637.jpg') }}" alt="">
						</figure>

						<div class="name text-center text-xl text-gray-200">REV SUNDAY OLOMOJARE</div>
						<div class="position text-center text-orange-400"><small>Senoir Pastor</small></div>
						<blockquote class="text-center text-sm text-gray-100">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rem quisquam voluptates fuga.
						</blockquote>
					</div>




				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev text-orange-800"></div>
				<div class="swiper-button-next text-orange-800"></div>

				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar"></div>
			</div>
		</div>
	</section>

	@unless ($posts->count() == 0)
		<section class="index-post-section block px-9 pt-10">
			<h2 class="flex justify-center text-center text-xl font-semibold uppercase text-cyan-700">
				<x-heroicon-o-clipboard-document-list class="h-6 w-10 text-cyan-700" />Latest News
			</h2>

			<div class="inner-posts px-2 pt-8">
				@foreach ($posts as $post)
					<div class="card">
						<figure lazy="true">
							<img src="{{ asset('storage/' . $post->image_url) }}" alt="Post Image" loading="lazy">
						</figure>

						<div class="block p-1">

							<small class="float-right flex text-gray-400"><x-heroicon-o-clock class="h-4 w-4 text-gray-400" />
								{{ $post->created_at }}</small>
							<h4 class="text-sm font-semibold text-teal-800">{{ $post->title }}</h4>
							<div class="overflow-hidden text-ellipsis whitespace-nowrap text-sm text-gray-500">{{ $post->content }}</div>

						</div>
					</div>
				@endforeach
			</div>
		</section>
	@endunless

	<section class="subsciption-container mb-10">

		<div class="overlay">
			<form action="{{ route('subscribe') }}" method="POST">
				@csrf
				<input class="" name="email" type="email" placeholder="Subscribe to Our News Letter">
				<button type="submit flex">Subscribe<x-heroicon-o-sparkles class="h-4 w-4 text-white" /></button>
			</form>
		</div>
	</section>
	@push('links')
		<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
	@endpush

	@push('scripts')
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

		<script>
			const swiper = new Swiper('.swiper', {
				slidesPerView: 3,
				spaceBetween: 15,
				// Optional parameters
				direction: 'horizontal',
				loop: true,

				/* // If we need pagination
				pagination: {
					el: '.swiper-pagination',
				}, */

				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},

				/* // And if we need scrollbar
				scrollbar: {
					el: '.swiper-scrollbar',
				}, */
			});
		</script>
	@endpush


</x-layout>
