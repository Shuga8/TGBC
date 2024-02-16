<x-layout :title="$title">
	<section class="blog-page">
		<div class="hero">

			<div class="overlay p-1">
				<h2 class="slide-up text-center text-3xl text-red-700">{{ $title }}</h2>
			</div>
		</div>

		<div class="content px-2 py-5">
			<div class="posts">
				@unless ($posts->count() == 0)
					@foreach ($posts as $post)
						<div class="post block">
							<figure>
								<a href="{{ route('blog.single', $post->id) }}">
									<img src="{{ asset('storage/' . $post->image_url) }}" alt="">
								</a>
							</figure>

							<div class="content px-2 pb-2">
								<date class="date flex flex-row justify-end text-teal-600"><x-heroicon-o-calendar-days
										class="h-6 w-4 text-teal-900" />&nbsp;{{ $post->published_at }}</date>

								<p class="text-sm font-semibold uppercase"><a
										href="{{ route('blog.single', $post->id) }}">{{ $post->title }}</a></p>

								<div class="post-content mb-2">
									{!! $post->content !!}
								</div>

								<a class="more-btn" href="">more</a>
							</div>
						</div>
					@endforeach
				@else
					<div class="text-center text-2xl font-bold text-red-800">No posts found!</div>
				@endunless
			</div>

			<div class="pagination-links p-2">
				{{ $posts->links() }}
			</div>
		</div>


</x-layout>
