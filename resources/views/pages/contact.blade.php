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
					<form class="mt-8 max-w-xl sm:mt-8" action="{{ route('send_contact_message') }}" method="POST"
						enctype="application/x-www-form-urlencoded">
						@csrf
						<div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
							<div>
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="first-name">First name</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="first-name" name="firstname" type="text" value="{{ old('firstname') }}" autocomplete="given-name">

									@error('firstname')
										<p class="error text-sm text-red-600">{{ $message }}</p>
									@enderror
								</div>
							</div>
							<div>
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="last-name">Last name</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="last-name" name="lastname" type="text" value="{{ old('lastname') }}" autocomplete="family-name">
									@error('lastname')
										<p class="error text-sm text-red-600">{{ $message }}</p>
									@enderror
								</div>
							</div>

							<div class="sm:col-span-2">
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="email">Email</label>
								<div class="mt-2.5">
									<input
										class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
										id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email">

									@error('email')
										<p class="error text-sm text-red-600">{{ $message }}</p>
									@enderror
								</div>
							</div>

							<div class="sm:col-span-2">
								<label class="block text-sm font-semibold leading-6 text-gray-900" for="message">Message</label>
								<div class="mt-2.5">
									<textarea
									 class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
									 id="message" name="message" rows="4">
                                    {{ old('message') }}</textarea>
									@error('message')
										<p class="error text-sm text-red-600">{{ $message }}</p>
									@enderror
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

	<h3 class="my-2 text-center text-xl font-semibold text-teal-800">Our Locations</h3>
	<section
		class="church-branches flex flex-wrap gap-x-8 gap-y-4 px-2 py-3 sm:flex-col sm:flex-wrap sm:justify-center md:flex-wrap lg:flex-row lg:justify-normal">

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">Choice People Church.
			</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">18 Oyegoke street off Rufai/Daudu street
				Mafoluku
				Oshodi, Lagos State.</p>
		</div>

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">IKOTUN- EGBE BRANCH
			</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">24, Adewalag Street Off Modupe Shitta Liasu
				Road Ile-iwe
				Bus Stop Ikotun,Lagos
			</p>
		</div>

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">House of grace and
				mercy
			</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">28 dare street ojokodo okitipupa ondo state
			</p>
		</div>

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">Sanctuary of
				David,Obere

			</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">1-3, Church Sreet,Mesan Obere, Okitipupa,
				Ondo State
			</p>
		</div>

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">TGBC Peace Haven</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">33 Babatope street off Brown road Agenda
				Surulere Lagos</p>
		</div>

		<div
			class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 text-center shadow dark:border-gray-700 dark:bg-gray-800">
			<x-heroicon-o-map-pin class="mx-auto mb-2 h-10 w-10 text-center text-blue-800" />

			<h5 class="mb-2 text-2xl font-semibold uppercase tracking-tight text-gray-900 dark:text-white">Mount Zion Chapel</h5>
			<p class="mb-3 font-normal capitalize text-gray-500 dark:text-gray-400">3, Mosunmola Etti Str, Kudeyibu Estate,
				Ijegun.</p>
		</div>
	</section>
</x-layout>
