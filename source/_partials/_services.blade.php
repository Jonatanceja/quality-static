<section id="services" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-secondary)">
                What We Offer
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                Comprehensive Inspection Services
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                From foundation to roof, we leave no stone unturned. Every inspection is backed by years of expertise.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($page->services as $service)
                <div class="group p-8 rounded-2xl border border-gray-100 hover:border-[var(--color-secondary)] hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5"
                         style="background-color: color-mix(in srgb, var(--color-primary) 12%, transparent)">
                        @include('_partials._icon', ['name' => $service['icon']])
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-500 leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
