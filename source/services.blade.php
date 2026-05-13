@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
            What We Offer
        </span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">
            Our Inspection Services
        </h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl">
            Comprehensive, certified inspections for every stage of homeownership — from purchase to insurance renewal.
        </p>
    </div>
</section>

{{-- ── Featured Services ────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="mb-12">
            <h2 class="text-2xl font-black text-gray-900 mb-2">Insurance Inspection Specialists</h2>
            <p class="text-gray-500">The two inspections most commonly required by Florida insurance carriers.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- 4-Point --}}
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                <div class="p-8 flex-1">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                         style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                        <svg class="w-6 h-6" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full text-white"
                              style="background-color: var(--color-primary)">Most Requested</span>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-3">4-Point Inspection</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        Required by most insurance carriers for homes over 25 years old. We assess the four critical systems — HVAC, electrical, plumbing, and roof — that determine your home's insurability and premium rates.
                    </p>
                    <ul class="space-y-2 mb-8">
                        @foreach(['HVAC Systems', 'Electrical Panel & Wiring', 'Plumbing & Water Heater', 'Roof Condition & Age'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-gray-600">
                                <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-primary)"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="px-8 pb-8">
                    <a href="/four-point-inspection"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                       style="background-color: var(--color-primary)">
                        Learn About 4-Point
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Wind Mitigation --}}
            <div class="rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col text-white"
                 style="background-color: var(--color-primary)">
                <div class="p-8 flex-1">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5 bg-white/15">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full bg-white/20 text-white">Save Up to 40%</span>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-3">Wind Mitigation Inspection</h3>
                    <p class="text-white/75 leading-relaxed mb-6">
                        Proactively protect your property and lower your insurance premiums by documenting your home's hurricane-resistant features. Required for maximum insurance credits under Florida law.
                    </p>
                    <ul class="space-y-2 mb-8">
                        @foreach(['Roof Covering & Deck Attachment', 'Roof-to-Wall Connection', 'Opening Protection (Windows & Doors)', 'OIR-B1-1802 Form Included'] as $item)
                            <li class="flex items-center gap-2.5 text-sm text-white/80">
                                <span class="w-1.5 h-1.5 rounded-full flex-shrink-0 bg-white/50"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="px-8 pb-8">
                    <a href="/wind-mitigation"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white border-2 border-white/30 hover:border-white/70 transition-colors duration-200">
                        Learn About Wind Mitigation
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── Additional Services ───────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="mb-12">
            <h2 class="text-2xl font-black text-gray-900 mb-2">Comprehensive Inspection Services</h2>
            <p class="text-gray-500">Every evaluation you need, backed by certified expertise.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($page->services as $service)
                <div class="p-7 rounded-2xl border border-gray-100 hover:shadow-md transition-shadow duration-300 group">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                         style="background-color: color-mix(in srgb, var(--color-secondary) 10%, transparent)">
                        @if ($service['icon'] === 'home')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        @elseif ($service['icon'] === 'shield')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        @elseif ($service['icon'] === 'zap')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        @elseif ($service['icon'] === 'droplets')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        @elseif ($service['icon'] === 'thermometer')
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                        @else
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        @endif
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $service['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── Why Choose Us ────────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div>
                <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
                    Why Calidad
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6">
                    Every Inspection. Every System. Done Right.
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    From the moment you book to the moment you receive your report, we're committed to accuracy, speed, and clarity. Our digital-first process means you never wait long for answers.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach([
                        ['stat' => '2,400+', 'label' => 'Inspections Completed'],
                        ['stat' => '24h',    'label' => 'Report Delivery'],
                        ['stat' => '12+',    'label' => 'Years of Experience'],
                        ['stat' => '98%',    'label' => 'Client Satisfaction'],
                    ] as $s)
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 text-center">
                            <p class="text-3xl font-black mb-1" style="color: var(--color-primary)">{{ $s['stat'] }}</p>
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">{{ $s['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-4">
                @foreach([
                    ['icon' => 'cert',  'title' => 'Certified Master Inspectors', 'desc' => 'Licensed by the State of Florida and certified through InterNACHI and ASHI — the most respected bodies in the industry.'],
                    ['icon' => 'cam',   'title' => 'Thermal Imaging Included',    'desc' => 'Every inspection includes thermal imaging at no extra cost, uncovering hidden moisture and insulation gaps.'],
                    ['icon' => 'clock', 'title' => 'Same-Day Report Delivery',    'desc' => 'Receive your detailed digital report — complete with photos — within 24 hours of your inspection.'],
                    ['icon' => 'star',  'title' => '5-Star Rated Service',         'desc' => 'Consistently top-rated across Google and Yelp by hundreds of South Florida homeowners and real estate professionals.'],
                ] as $item)
                    <div class="flex items-start gap-4 bg-white rounded-2xl p-5 border border-gray-100">
                        <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center"
                             style="background-color: color-mix(in srgb, var(--color-secondary) 12%, transparent)">
                            @if ($item['icon'] === 'cert')
                                <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            @elseif ($item['icon'] === 'cam')
                                <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            @elseif ($item['icon'] === 'clock')
                                <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            @else
                                <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            @endif
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 mb-0.5">{{ $item['title'] }}</p>
                            <p class="text-sm text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-primary)">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-white/60 block mb-4">Get Started</span>
        <h2 class="text-3xl sm:text-4xl font-black text-white mb-5">
            Not Sure Which Inspection You Need?
        </h2>
        <p class="text-white/70 leading-relaxed mb-8 max-w-lg mx-auto">
            Our team will help you identify exactly what your insurance carrier requires. Reach out and we'll guide you to the right service for your property.
        </p>
        <a href="/contact"
           class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90 mb-6"
           style="background-color: var(--color-tertiary)">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Talk to an Inspector
        </a>
        <p class="text-white/50 text-xs font-medium">
            Licensed &amp; Insured &nbsp;·&nbsp; Same-Day Reports &nbsp;·&nbsp; Serving All of South Florida
        </p>
    </div>
</section>

@endsection
