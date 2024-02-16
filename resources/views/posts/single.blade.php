<x-layout :title="$title">

	<section class="single-blog-page">
		<div class="hero">

			<div class="overlay p-1">
				<h2 class="slide-up text-center text-3xl text-red-700">{{ $title }}</h2>
			</div>
		</div>

		<div class="content px-6 py-20">

			<div class="post">
				<figure>
					<img src="{{ asset('storage/' . $post->image_url) }}" alt="">
				</figure>

				<h3 class="mt-8 text-2xl font-bold">{{ $post->title }}</h3>

				<div class="inner-content mt-4">
					{!! $post->content !!}
				</div>

				<time class="flex"><x-heroicon-o-calendar-days class="h-5 w-7 text-right" />{{ $post->published_at }}</time>
			</div>
		</div>

</x-layout>
