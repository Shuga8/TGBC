<x-layout :title="$title">

	<section class="contact-page">
		<div class="hero">

			<div class="overlay p-1">
				<h2 class="slide-up text-center text-3xl capitalize text-white">{{ $title }}</h2>
			</div>
		</div>

		<div class="contact-content justify-center gap-x-7 gap-y-3 px-3 py-4">

			<div class="contact-form flex px-2 py-1">

				<div class="isolate bg-white px-6 py-4 sm:py-4 lg:w-96 lg:px-8">

					<div class="mx-auto max-w-2xl text-center">
						<h2 class="text-xl font-bold tracking-tight text-gray-900 sm:text-xl">Send Us A Message</h2>
					</div>
					<form class="mt-8 max-w-xl sm:mt-8" action="#" method="POST">
						<div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
							<div>
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="first-name">First name</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="first-name" name="first-name" type="text" autocomplete="given-name">
								</div>
							</div>
							<div>
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="last-name">Last name</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="last-name" name="last-name" type="text" autocomplete="family-name">
								</div>
							</div>

							<div class="sm:col-span-2">
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="email">Email</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="email" name="email" type="email" autocomplete="email">
								</div>
							</div>

							<div class="sm:col-span-2">
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="message">Message</label>
								<div class="mt-2.5">
									<textarea
									 class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
									 id="message" name="message" rows="4"></textarea>
								</div>
							</div>

						</div>
						<div class="mt-10">
							<button
								class="flex w-full flex-row justify-center rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
								type="submit">Send&nbsp;<x-heroicon-o-paper-airplane class="h-5 w-4" /></button>
						</div>
					</form>
				</div>

				<object type="map" data="">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.383022972392!2d3.6540454739926256!3d6.473072493518706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9516edb73d1%3A0x4488f2364cdc8877!2sTotal%20Gospel%20Bible%20Church%20(House%20Of%20Goshen)!5e0!3m2!1sen!2sng!4v1707905436745!5m2!1sen!2sng"
						style="border:0;" width="600" height="450" allowfullscreen="true" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</object>

			</div>
		</div>
	</section>

</x-layout>
