<section id="featured-services" class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-secondary)">
                Most Requested
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                Critical Inspection Services
            </h2>
            <p class="mt-4 text-lg text-gray-500 leading-relaxed">
                Specialized reporting for Florida insurance compliance and structural integrity.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach ($page->featured_services as $item)
                <div class="flex flex-col rounded-2xl overflow-hidden border border-gray-200 bg-white shadow-sm hover:shadow-md transition-shadow duration-300">

                    <div class="h-2 w-full" style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary))"></div>

                    <div class="flex flex-col flex-1 p-10">
                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 flex-shrink-0"
                             style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                            @if ($item['slug'] === '4-point')
                                <svg class="w-7 h-7" style="color: var(--color-primary)" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            @else
                                <svg class="w-7 h-7" style="color: var(--color-primary)" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                </svg>
                            @endif
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $item['title'] }}</h3>

                        <p class="text-gray-500 leading-relaxed flex-1 mb-8">{{ $item['description'] }}</p>

                        <a href="#contact"
                           class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-sm font-semibold text-white transition-opacity duration-200 hover:opacity-90 self-start"
                           style="background-color: var(--color-primary)">
                            {{ $item['cta'] }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
