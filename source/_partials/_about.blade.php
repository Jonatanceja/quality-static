<section id="about" class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div>
                <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-primary)">
                    Who We Are
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                    Inspectors You Can Trust,<br>Results You Can Rely On
                </h2>
                <p class="mt-6 text-lg text-gray-500 leading-relaxed">
                    With over 12 years of experience and more than 15,000 completed inspections, Calidad Inspections
                    has built its reputation on accuracy, transparency, and outstanding client care.
                </p>
                <p class="mt-4 text-lg text-gray-500 leading-relaxed">
                    Our certified inspectors use the latest tools and follow InterNACHI standards to deliver
                    comprehensive, easy to read reports, helping buyers, sellers, and agents make informed decisions
                    with confidence.
                </p>

                <ul class="mt-8 space-y-4">
                    @foreach ([
                        'InterNACHI certified inspectors',
                        'Detailed digital reports in 24 hours',
                        'Available 7 days a week',
                        'Serving all property types'
                    ] as $point)
                        <li class="flex items-center gap-3">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center"
                                  style="background-color: color-mix(in srgb, var(--color-secondary) 15%, transparent)">
                                <svg class="w-4 h-4" style="color: var(--color-secondary)" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                          d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">{{ $point }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-[4/3] relative">
                    <img src="/assets/images/home.jpg" alt="Home inspection"
                         class="w-full h-full object-cover object-center">
                    {{-- subtle dark scrim so the text stays readable --}}
                    <div class="absolute inset-0"
                         style="background: linear-gradient(to top, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.10) 60%, transparent 100%)"></div>
                    <p class="absolute bottom-5 left-0 right-0 text-center text-white font-semibold text-base tracking-wide drop-shadow">
                        Your Home, Inspected Right
                    </p>
                </div>

                <div class="absolute -bottom-6 -left-6 w-32 h-32 rounded-2xl flex flex-col items-center justify-center text-center shadow-xl bg-white border border-gray-100">
                    <span class="text-3xl font-bold" style="color: var(--color-primary)">98%</span>
                    <span class="text-xs text-gray-500 mt-1 font-medium">Client<br>Satisfaction</span>
                </div>
            </div>

        </div>
    </div>
</section>
