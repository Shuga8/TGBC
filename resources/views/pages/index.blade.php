<x-layout :title="$title">

	<div class="slider">
		<div class="slides">

			{{-- Radios for slides --}}

			<input id="radio1" name="radio-btn" type="radio">
			<input id="radio2" name="radio-btn" type="radio">
			<input id="radio3" name="radio-btn" type="radio">
			<input id="radio4" name="radio-btn" type="radio">

			{{-- Images --}}
			<div class="slide first">
				<img src="{{ asset('images/1.jpg') }}" alt="">
			</div>

			<div class="slide">
				<img src="{{ asset('images/2.jpg') }}" alt="">
			</div>

			<div class="slide">
				<img src="{{ asset('images/3.jpg') }}" alt="">
			</div>

			<div class="slide">
				<img src="{{ asset('images/4.jpg') }}" alt="">
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


</x-layout>
