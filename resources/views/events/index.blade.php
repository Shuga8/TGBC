<x-layout :title="$title">

    <section class="events-page">
        <div class="hero">

            <div class="overlay p-1">
                <h2 class="slide-up text-center text-3xl text-red-700">{{ $title }}</h2>
            </div>
        </div>

        <div class="content px-2 py-5">
            @unless ($events->count() == 0)
                <div class="events">

                    @foreach ($events as $event)
                        <div class="event">
                            <figure>
                                <a href="">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="">
                                </a>
                            </figure>

                            <div class="content px-2 pb-2">
                                <date class="date flex flex-row justify-end text-teal-600"><x-heroicon-o-calendar-days
                                        class="h-6 w-4 text-teal-900" />&nbsp;{{ $event->happning_at }}</date>

                                <p class="text-sm font-semibold uppercase"><a
                                        href="{{ route('events.single', $event->id) }}">{{ $event->name }}</a></p>

                                <div class="event-content mb-2">
                                    {!! $event->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-red-900 text-2xl font-semibold">No events found.</p>
            @endunless
        </div>

        <div class="pagination-links p-2">
            {{ $events->links() }}
        </div>
    </section>
</x-layout>
