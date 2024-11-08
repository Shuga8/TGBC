<x-layout :title="$title">

    <section class="sermons-page">
        <div class="hero">

            <div class="overlay p-1">
                <h2 class="slide-up text-center text-3xl text-red-700">{{ $title }}</h2>
            </div>
        </div>

        <div class="content px-4 py-14">
            @unless ($sermons->count() == 0)
                <div class="sermons">
                    @foreach ($sermons as $sermon)
                        <div class="sermon">
                            <h4 class="mb-3 font-semibold uppercase text-teal-700">{{ $sermon->title }}</h4>
                            <audio controls width="100%">
                                <source src="{{ asset('storage/' . $sermon->file_url) }}" type="audio/mp3">
                            </audio>
                            <div class="inner-content mt-4">
                                {!! $sermon->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-2xl font-semibold text-red-800">No Sermons Found!</p>
            @endunless
        </div>

        <div class="pagination-links p-1">
            {{ $sermons->links() }}
        </div>

    </section>

</x-layout>
