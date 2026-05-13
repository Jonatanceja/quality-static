@extends('_layouts.main')

@section('body')

{{-- ── Hero ─────────────────────────────────────────────── --}}
<section class="relative min-h-[65vh] flex items-end overflow-hidden pt-20">

    <div class="absolute inset-0">
        <img src="/assets/images/4-point-service.jpg" alt="" class="w-full h-full object-cover object-center" aria-hidden="true">
    </div>
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(0,0,0,0.82) 0%, rgba(0,0,0,0.45) 65%, rgba(0,0,0,0.20) 100%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 lg:py-28 w-full">
        <div class="max-w-xl">
            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest mb-5 px-4 py-2 rounded-full text-white"
                  style="background-color: var(--color-tertiary)">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                Essential Insurance Requirement
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-5">
                Professional<br>4-Point Inspections
            </h1>
            <p class="text-base text-white/75 leading-relaxed max-w-md mb-8">
                Required by most insurance carriers for homes over 25 years old. Get your inspection completed quickly with same-day report delivery.
            </p>
            <a href="/contact"
               class="inline-flex items-center gap-2 px-7 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
               style="background-color: var(--color-tertiary)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Book Your 4-Point Inspection
            </a>
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
                    Insurance Requirements
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-6">
                    Why Do Insurance Carriers Require a 4-Point?
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Insurance companies use 4-point inspections to assess the risk of insuring older homes. By evaluating the four primary systems, they can determine the likelihood of a claim and set premiums accordingly, or decide whether to offer coverage at all.
                </p>
                <ul class="space-y-4">
                    @foreach([
                        ['icon' => 'shield', 'title' => 'Risk Assessment', 'desc' => 'Insurers need to know the condition of critical systems before underwriting a policy on older properties.'],
                        ['icon' => 'dollar', 'title' => 'Premium Calculation', 'desc' => 'The inspection results directly influence your insurance premium. A clean report can mean significant savings.'],
                        ['icon' => 'check', 'title' => 'Coverage Eligibility', 'desc' => 'Many carriers in Florida will not issue or renew a policy without a current 4-point inspection on file.'],
                    ] as $point)
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-secondary) 12%, transparent)">
                                @if ($point['icon'] === 'shield')
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                @elseif ($point['icon'] === 'dollar')
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                @else
                                    <svg class="w-5 h-5" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
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

            {{-- Right: inspector photo --}}
            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-[4/5]">
                    <img src="/assets/images/4-point.jpg" alt="4-Point inspection in progress"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0"
                         style="background: linear-gradient(to top, rgba(0,0,0,0.25) 0%, transparent 55%)"></div>
                </div>
                <div class="absolute top-6 right-0 translate-x-4 rounded-2xl p-5 shadow-xl text-white"
                     style="background-color: var(--color-tertiary)">
                    <p class="text-2xl font-black leading-none">24h</p>
                    <p class="text-xs font-semibold mt-1 opacity-90 max-w-[90px] leading-snug">Same-day report delivery</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── Systems Breakdown ────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-secondary)">
                What We Inspect
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-gray-900 mb-4">Detailed Systems Breakdown</h2>
            <p class="text-gray-500 max-w-lg mx-auto leading-relaxed">
                Our certified inspectors evaluate four critical systems that insurance carriers require for coverage on homes 25 years and older.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- HVAC --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-primary)">01</span>
                    <h3 class="text-xl font-black text-gray-900">HVAC Systems</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    We assess the age, condition, and functionality of your heating, ventilation, and air conditioning units, including ductwork, filters, and safety controls.
                </p>
                <ul class="space-y-2">
                    @foreach(['Age and condition of all HVAC units', 'Ductwork integrity and airflow', 'Safety shut-offs and controls', 'Evidence of leaks or corrosion'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-primary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Electrical --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-tertiary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-tertiary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-tertiary)">02</span>
                    <h3 class="text-xl font-black text-gray-900">Electrical System</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    Our inspector evaluates the main panel, wiring type, and overall electrical safety, identifying outdated or hazardous systems that could affect insurability.
                </p>
                <ul class="space-y-2">
                    @foreach(['Main electrical panel and breakers', 'Wiring type (copper, aluminum, knob-and-tube)', 'GFCI protection in wet areas', 'Double-tapped breakers or open knockouts'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-tertiary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Plumbing --}}
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background-color: color-mix(in srgb, var(--color-secondary) 10%, transparent)">
                    <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full text-white"
                          style="background-color: var(--color-secondary)">03</span>
                    <h3 class="text-xl font-black text-gray-900">Plumbing Integrity</h3>
                </div>
                <p class="text-gray-500 leading-relaxed mb-5">
                    We identify the pipe material, check for active leaks, and evaluate the water heater, all factors that insurers use to assess potential water damage risk.
                </p>
                <ul class="space-y-2">
                    @foreach(['Pipe material (copper, CPVC, polybutylene)', 'Water heater age and condition', 'Visible leaks and supply shutoffs', 'Drain lines and drainage conditions'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: var(--color-secondary)"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Roof --}}
            <div class="rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300 text-white"
                 style="background-color: var(--color-primary)">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5 bg-white/15">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xs font-bold uppercase tracking-widest px-2.5 py-1 rounded-full bg-white/20 text-white">04</span>
                    <h3 class="text-xl font-black text-white">Roof Condition</h3>
                </div>
                <p class="text-white/75 leading-relaxed mb-5">
                    The roof is the most critical factor in most insurance decisions. We assess the roofing material, estimated remaining life, and any visible damage that may affect coverage.
                </p>
                <ul class="space-y-2">
                    @foreach(['Roofing material type and age', 'Condition of shingles, tiles, or flat membrane', 'Flashings, penetrations, and gutters', 'Evidence of prior repairs or water intrusion'] as $item)
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
                    Coverage Across South Florida
                </h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    We proudly serve homeowners, buyers, and real estate professionals throughout Miami-Dade, Broward, and Palm Beach counties.
                </p>
                <div class="grid grid-cols-2 gap-3">
                    @foreach([
                        'Miami', 'Miami Beach', 'Coral Gables', 'Hialeah',
                        'Fort Lauderdale', 'Hollywood', 'Pembroke Pines', 'Miramar',
                        'Boca Raton', 'West Palm Beach', 'Doral', 'Homestead',
                        'Aventura', 'Kendall', 'Weston', 'Davie',
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
                <p class="text-xs text-gray-400 mt-5">Don't see your city? <a href="/contact" class="font-semibold underline" style="color: var(--color-primary)">Contact us</a>, we likely cover it.</p>
            </div>

            {{-- Right: map --}}
            <div class="relative">
                <div class="rounded-3xl overflow-hidden aspect-square">
                    <img src="/assets/images/map.jpg" alt="South Florida service area map"
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-6 left-6 rounded-xl p-4 shadow-lg text-white text-center"
                     style="background-color: var(--color-tertiary)">
                    <p class="text-2xl font-black leading-none">3</p>
                    <p class="text-xs font-semibold mt-1 opacity-90">Counties<br>Covered</p>
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
            Ready to Secure Your Insurance?
        </h2>
        <p class="text-white/70 leading-relaxed mb-8 max-w-lg mx-auto">
            Most reports are delivered within 24 hours. Schedule your 4-point inspection today and keep your coverage on track.
        </p>
        <a href="/contact"
           class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90 mb-6"
           style="background-color: var(--color-tertiary)">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Book Your 4-Point Inspection
        </a>
        <p class="text-white/50 text-xs font-medium">
            Trusted by 5,000+ South Florida Homeowners &nbsp;·&nbsp; Licensed &amp; Insured &nbsp;·&nbsp; Same-Day Reports Available
        </p>
    </div>
</section>

@endsection
