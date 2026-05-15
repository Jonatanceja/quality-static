@extends('_layouts.main')

@section('body')

{{-- ── Hero ─────────────────────────────────────────────── --}}
<section class="relative min-h-[60vh] flex items-end overflow-hidden pt-20">

    <div class="absolute inset-0">
        <picture>
            <source srcset="/assets/images/about.webp" type="image/webp">
            <img src="/assets/images/about.jpg" alt="" class="w-full h-full object-cover object-center" aria-hidden="true">
        </picture>
    </div>
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(0,0,0,0.78) 0%, rgba(0,0,0,0.35) 70%, transparent 100%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28 w-full">
        <div class="max-w-xl">
            <span class="text-sm font-bold uppercase tracking-widest mb-4 block" style="color: var(--color-secondary)">
                Calidad Inspections
            </span>
            <h1 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                Our Story: Precision &amp; Integrity in South Florida
            </h1>
            <p class="text-base text-white/75 leading-relaxed max-w-sm">
                Dedicated to setting the standard in residential and commercial property evaluations
                through rigorous technical standards and architectural expertise.
            </p>
        </div>
    </div>
</section>

{{-- ── Mission & Vision ─────────────────────────────────── --}}
<section class="py-16" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Mission --}}
            <div class="p-10 rounded-2xl border border-gray-100 shadow-sm border-l-4" style="border-left-color: var(--color-primary)">
                <div class="w-10 h-10 mb-6 flex items-center justify-center rounded-lg"
                     style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                    <svg class="w-5 h-5" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 21l1.9-5.7a8.5 8.5 0 113.8 3.8z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-gray-500 leading-relaxed">
                    To provide homeowners and real estate professionals with the most accurate, thorough,
                    and timely inspection reports, empowering informed decisions and long term peace of mind.
                </p>
            </div>

            {{-- Vision --}}
            <div class="p-10 rounded-2xl shadow-sm text-white" style="background-color: var(--color-primary)">
                <div class="w-10 h-10 mb-6 flex items-center justify-center rounded-lg bg-white/15">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Our Vision</h2>
                <p class="text-white/80 leading-relaxed mb-8">
                    To be the gold standard for home inspections in South Florida, recognized for our technical
                    expertise, innovative digital reporting, and unwavering commitment to client safety.
                </p>
                <div class="pt-6 border-t border-white/20 flex items-center gap-3">
                    <svg class="w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    <span class="text-sm font-bold tracking-widest text-white/70 uppercase">Since 2010</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── Core Values ──────────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-3" style="color: var(--color-primary)">Our Core Values</h2>
            <p class="text-gray-500">The principles that guide every inspection we perform.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                ['icon' => 'scale',   'title' => 'Integrity',     'desc' => 'Unbiased reporting that puts your safety and investment first, always.'],
                ['icon' => 'target',  'title' => 'Accuracy',      'desc' => 'Precision in every measurement and detail of your property evaluation.'],
                ['icon' => 'cpu',     'title' => 'Innovation',    'desc' => 'Leveraging cutting edge digital reporting and thermal imaging technology.'],
                ['icon' => 'users',   'title' => 'Client Focus',  'desc' => 'Exceptional service designed to provide clarity throughout the process.'],
            ] as $value)
                <div class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-md transition-shadow duration-300 text-center">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mx-auto mb-5"
                         style="background-color: color-mix(in srgb, var(--color-secondary) 12%, transparent)">
                        @if ($value['icon'] === 'scale')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                        @elseif ($value['icon'] === 'target')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke-width="2"/><circle cx="12" cy="12" r="2" stroke-width="2"/>
                            </svg>
                        @elseif ($value['icon'] === 'cpu')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H7a2 2 0 00-2 2v2M9 3h6M9 3v2m6-2h2a2 2 0 012 2v2m0 0v6m0-6H3m18 0v6m0 0v2a2 2 0 01-2 2h-2m0 0H9m6 0v2m-6-2H7a2 2 0 01-2-2v-2m0 0H3m4 0V9"/>
                            </svg>
                        @else
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        @endif
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">{{ $value['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ── Legacy / Heritage ────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Photo + badge --}}
            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-[4/5]">
                    <picture>
                        <source srcset="/assets/images/diego-cano.webp" type="image/webp">
                        <img src="/assets/images/diego-cano.jpeg" alt="Calidad Inspections inspector"
                             class="w-full h-full object-cover object-bottom">
                    </picture>
                    <div class="absolute inset-0"
                         style="background: linear-gradient(to top, rgba(0,0,0,0.30) 0%, transparent 60%)"></div>
                </div>
                <div class="absolute bottom-0 right-0 translate-x-4 translate-y-4 rounded-2xl p-6 shadow-xl text-white"
                     style="background-color: var(--color-secondary)">
                    <p class="text-3xl font-black leading-none">14+</p>
                    <p class="text-sm font-semibold mt-1 opacity-90">Years</p>
                    <p class="text-xs opacity-75 mt-1 max-w-[120px] leading-snug">Serving South Florida's unique coastal communities.</p>
                </div>
            </div>

            {{-- Copy --}}
            <div>
                <span class="text-sm font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">
                    Our Heritage
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6">
                    A Legacy of Excellence
                </h2>
                <p class="text-gray-500 leading-relaxed mb-5">
                    Founded in South Florida, Calidad Inspections grew from a commitment to excellence in structural
                    evaluation. We recognized the unique challenges of the Florida landscape, from humidity and
                    hurricanes to high salinity coastal environments.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Our team specializes in critical regional evaluations, including comprehensive
                    <span class="font-semibold" style="color: var(--color-primary)">4-Point Inspections</span> and
                    <span class="font-semibold" style="color: var(--color-primary)">Wind Mitigation</span> reports.
                    These aren't just boxes to check. They are the safeguards of your property's longevity
                    and your family's safety.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach ([
                        'Certified Master Inspectors',
                        'Thermal Imaging Included',
                        '24-Hour Report Delivery',
                        'Florida Licensed & Insured',
                    ] as $point)
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-secondary) 15%, transparent)">
                                <svg class="w-3.5 h-3.5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700">{{ $point }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="/contact"
                   class="inline-flex items-center gap-2 mt-10 px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                   style="background-color: var(--color-primary)">
                    Book an Inspection
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ── Stats bar ────────────────────────────────────────── --}}
<section class="py-16" style="background-color: var(--color-primary)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach ($page->stats as $stat)
                <div>
                    <div class="text-4xl font-black text-white mb-1">{{ $stat['value'] }}</div>
                    <div class="text-sm font-medium text-white/60 uppercase tracking-wide">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
