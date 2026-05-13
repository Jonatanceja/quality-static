@extends('_layouts.main')

@section('body')

{{-- ── Hero ─────────────────────────────────────────────── --}}
<section class="relative min-h-[65vh] flex items-end overflow-hidden pt-20">

    <div class="absolute inset-0">
        <img src="/assets/images/wind-mitigation-service.jpg" alt="" class="w-full h-full object-cover object-center" aria-hidden="true">
    </div>
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(0,0,0,0.82) 0%, rgba(0,0,0,0.45) 65%, rgba(0,0,0,0.20) 100%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28 w-full">
        <div class="max-w-xl">
            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest mb-5 px-4 py-2 rounded-full text-white"
                  style="background-color: var(--color-secondary)">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                </svg>
                Hurricane Preparedness
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-5">
                Wind Mitigation<br>Inspections
            </h1>
            <p class="text-base text-white/75 leading-relaxed max-w-md mb-8">
                Maximize your home's safety and significantly reduce your insurance premiums in Florida with our professional structural evaluations.
            </p>
            <div class="flex flex-wrap gap-3">
                <a href="/contact"
                   class="inline-flex items-center gap-2 px-7 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                   style="background-color: var(--color-tertiary)">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Schedule Wind Mitigation
                </a>
                <a href="/contact"
                   class="inline-flex items-center gap-2 px-7 py-4 rounded-xl text-sm font-bold text-white border-2 border-white/30 hover:border-white/70 transition-colors duration-200">
                    View Sample Report
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ── Why Section ──────────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: text + bullets --}}
            <div>
                <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
                    Unlock Savings
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6">
                    Unlock Substantial Premium Credits
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Florida law requires insurance companies to offer discounts for homes with wind-resistant features. Our Wind Mitigation Inspection verifies the construction of your home to ensure you receive the maximum credits allowed by your carrier, sometimes up to 40% off your annual premium.
                </p>
                <ul class="space-y-4">
                    @foreach([
                        ['icon' => 'percent', 'title' => 'Average Savings Up to 40%', 'desc' => 'Documented wind-resistant features translate directly into lower annual insurance premiums on your policy.'],
                        ['icon' => 'form',    'title' => 'Industry-Standard OIR-B1-1802 Form', 'desc' => 'We complete the official Florida form accepted by all insurance carriers statewide.'],
                        ['icon' => 'shield',  'title' => 'Increases Structural Confidence', 'desc' => 'Beyond savings, the report confirms your home can withstand South Florida\'s hurricane-force winds.'],
                    ] as $point)
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-secondary) 12%, transparent)">
                                @if ($point['icon'] === 'percent')
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M17 17h.01M7 7a1 1 0 100-2 1 1 0 000 2zm10 10a1 1 0 100-2 1 1 0 000 2zM5 19L19 5"/>
                                    </svg>
                                @elseif ($point['icon'] === 'form')
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                @else
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                @endif
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 mb-1">{{ $point['title'] }}</p>
                                <p class="text-sm text-gray-500 leading-relaxed">{{ $point['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: inspector photo + badge --}}
            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-[4/5]">
                    <img src="/assets/images/unlock-credits-wind.jpg" alt="Wind mitigation inspection"
                         class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0"
                         style="background: linear-gradient(to top, rgba(0,0,0,0.25) 0%, transparent 55%)"></div>
                </div>
                <div class="absolute top-6 right-0 translate-x-4 rounded-2xl p-5 shadow-xl text-white"
                     style="background-color: var(--color-secondary)">
                    <p class="text-2xl font-black leading-none">40%</p>
                    <p class="text-xs font-semibold mt-1 opacity-90 max-w-[90px] leading-snug">Average premium savings</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── Evaluation Areas ─────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
                What We Inspect
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-4">Precision Evaluation Areas</h2>
            <p class="text-gray-500 max-w-lg mx-auto leading-relaxed">
                Our inspection covers the four structural areas defined by the Florida OIR-B1-1802 form, the industry-standard document accepted by all Florida insurance carriers.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- Roof Covering --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-primary)">01</span>
                    <h3 class="text-xl font-black text-gray-900">Roof Covering</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    Verification of the roof installation date and compliance with the 2001 Florida Building Code (or subsequent updates) to ensure impact resistance.
                </p>
                <ul class="space-y-2">
                    @foreach(['Roofing material type and permit date', 'Florida Building Code compliance', 'Age and condition of covering', 'Evidence of impact-resistant rating'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-primary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Roof Deck Attachment --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-tertiary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-tertiary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-tertiary)">02</span>
                    <h3 class="text-xl font-black text-gray-900">Roof Deck Attachment</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    Analysis of the nail size and spacing used to secure the roof decking to the trusses, critical for preventing uplift during high winds.
                </p>
                <ul class="space-y-2">
                    @foreach(['Nail size, type, and spacing pattern', 'Deck-to-truss connection quality', 'Single vs. double layer decking', 'Code compliance of attachment method'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-tertiary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Roof-to-Wall Connection --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-secondary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 9l4-4 4 4m0 6l-4 4-4-4"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-secondary)">03</span>
                    <h3 class="text-xl font-black text-gray-900">Roof-to-Wall Connection</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    Identifying the hardware including clips, single wraps, or double wraps, used to anchor the roof structure to the home's walls.
                </p>
                <ul class="space-y-2">
                    @foreach(['Clip, single-wrap, or double-wrap type', 'Number of wraps per truss', 'Structural anchor strength rating', 'Connection method and code compliance'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-secondary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Opening Protection --}}
            <div class="rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 text-white"
                 style="background-color: var(--color-primary)">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5 bg-white/15">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full bg-white/20 text-white">04</span>
                    <h3 class="text-xl font-black text-white">Opening Protection</h3>
                </div>
                <p class="text-white/75 leading-relaxed mb-5">
                    Evaluation of impact-rated doors, windows, and skylights, or the presence of approved shutters for all glazed openings.
                </p>
                <ul class="space-y-2">
                    @foreach(['Impact-rated windows and doors', 'Hurricane shutter type and coverage', 'Skylight and garage door ratings', 'Florida Product Approval numbers'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-white/80">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0 bg-white/50"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- ── Coverage Area ─────────────────────────────────────── --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: cities --}}
            <div>
                <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
                    Service Area
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6">
                    Serving Greater Miami &amp; South Florida
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    We provide rapid, professional wind mitigation services across Miami-Dade, Broward, and Palm Beach Counties. Our inspectors are highly familiar with local construction standards and wind zone requirements.
                </p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach([
                        'Miami', 'Coral Gables', 'Fort Lauderdale', 'Hollywood',
                        'Pembroke Pines', 'Miramar', 'Doral', 'Hialeah',
                        'Homestead', 'Kendall', 'Aventura', 'Weston',
                        'Boca Raton', 'West Palm Beach', 'Davie', 'Miami Beach',
                    ] as $city)
                        <div class="flex items-center gap-2.5">
                            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0"
                                 style="background-color: color-mix(in srgb, var(--color-secondary) 15%, transparent)">
                                <svg class="w-3 h-3" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">{{ $city }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="/contact"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                   style="background-color: var(--color-primary)">
                    Check Availability
                </a>
            </div>

            {{-- Right: map --}}
            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-square">
                    <img src="/assets/images/map.jpg" alt="South Florida service area map"
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-6 left-6 rounded-xl p-4 shadow-lg bg-white border border-gray-100">
                    <p class="text-xs font-black uppercase tracking-widest mb-1" style="color: var(--color-secondary)">On-site within 24–48 hours</p>
                    <p class="text-xs text-gray-500 max-w-[160px] leading-snug">Available for expedited emergency inspections across South Florida.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-primary)">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-white/60 block mb-4">Get Started Today</span>
        <h2 class="text-3xl sm:text-4xl font-black text-white mb-5">
            Ready to Lower Your Premiums?
        </h2>
        <p class="text-white/70 leading-relaxed mb-8 max-w-lg mx-auto">
            Don't leave your insurance credits on the table. Schedule your Wind Mitigation Inspection today and secure your home's future.
        </p>
        <a href="/contact"
           class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90 mb-6"
           style="background-color: var(--color-tertiary)">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Book Your Wind Mitigation Inspection
        </a>
        <p class="text-white/50 text-xs font-medium">
            Trusted by 5,000+ South Florida Homeowners &nbsp;·&nbsp; Licensed &amp; Insured &nbsp;·&nbsp; Reports Accepted by All FL Carriers
        </p>
    </div>
</section>

@endsection
