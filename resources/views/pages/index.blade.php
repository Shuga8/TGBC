<x-layout :title="$title">

	<div class="slider">
		<div class="slides">

			{{-- Radios for slides --}}

			<input id="radio1" name="radio-btn" type="radio" checked>
			<input id="radio2" name="radio-btn" type="radio">
			<input id="radio3" name="radio-btn" type="radio">
			<input id="radio4" name="radio-btn" type="radio">

			{{-- Images --}}
			<div class="slide first">
				<img src="{{ asset('images/1.jpg') }}" alt="">
				<div class="content first">
					<h1 class="">{{ config('app.name') }}</h1>

					<div class="actions slide-up">
						<a class="more" href="">More</a>
						<a class="donate" href="">Donate</a>
					</div>
				</div>
			</div>

			<div class="slide">
				<img src="{{ asset('images/2.jpg') }}" alt="">

				<div class="content">
					<h1 class="">{{ config('app.name') }}</h1>

					<div class="actions">
						<a class="more" href="">More</a>
						<a class="donate" href="">Donate</a>
					</div>
				</div>
			</div>

			<div class="slide">
				<img src="{{ asset('images/3.jpg') }}" alt="">

				<div class="content">
					<h1 class="">{{ config('app.name') }}</h1>

					<div class="actions">
						<a class="more" href="">More</a>
						<a class="donate" href="">Donate</a>
					</div>
				</div>
			</div>

			<div class="slide">
				<img src="{{ asset('images/4.jpg') }}" alt="">

				<div class="content">
					<h1 class="">{{ config('app.name') }}</h1>

					<div class="actions">
						<a class="more" href="">More</a>
						<a class="donate" href="">Donate</a>
					</div>
				</div>
			</div>



			{{-- Automatic navigation --}}
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>

			{{-- Manual Navigation --}}
			<div class="navigation-manual">
				<label class="manual-btn" for="radio1"></label>
				<label class="manual-btn" for="radio2"></label>
				<label class="manual-btn" for="radio3"></label>
				<label class="manual-btn" for="radio4"></label>
			</div>
		</div>
	</div>

	@unless ($events->count() == 0)
		<div class="events-container w-full px-4 py-10">
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
			<figure class="slide-right">
				<img src="{{ asset('images/kelly-sikkema-4le7k9XVYjE-unsplash.jpg') }}" alt="">
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

		<figure>
			<img src="{{ asset('images/im4-1024x654.jpg') }}" alt="">
		</figure>

		<figure>
			<img src="{{ asset('images/men-768x397.jpg') }}" alt="">
		</figure>

		<figure>
			<img src="{{ asset('images/im-1024x664.jpg') }}" alt="">
		</figure>

	</section>


	@push('scripts')
		<script type="text/javascript">
			let counter = 1;

			setInterval(() => {
				document.getElementById("radio" + counter).checked = true;
				counter++;
				if (counter > 4) {
					counter = 1;
				}
			}, 5000);
		</script>
	@endpush


</x-layout>
