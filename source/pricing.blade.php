@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16" style="background-color: var(--color-neutral)">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-black tracking-tight mb-5" style="color: var(--color-primary)">
            TRANSPARENT PRICING
        </h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl mx-auto mb-6">
            Precision inspections for South Florida homeowners. Choose the coverage you need,
            from focused insurance reports to comprehensive property evaluations.
        </p>
        <span class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest"
              style="color: var(--color-secondary)">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Serving Miami-Dade, Broward, and Palm Beach Counties
        </span>
    </div>
</section>

{{-- ── Pricing cards ────────────────────────────────────── --}}
<section class="pb-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">

            {{-- 4-Point --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="mb-6">
                    <h2 class="text-xl font-black text-gray-900">4-Point</h2>
                    <p class="text-xs font-bold uppercase tracking-widest text-gray-400 mt-1">Insurance Essential</p>
                </div>
                <div class="mb-6">
                    <span class="text-5xl font-black" style="color: var(--color-primary)">$150</span>
                </div>
                <ul class="space-y-3 flex-1 mb-8">
                    @foreach(['HVAC System', 'Electrical Panels & Wiring', 'Plumbing Connections', 'Roof Condition'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="/contact"
                   class="block text-center py-3 rounded-xl text-sm font-bold border-2 transition-colors duration-200 hover:bg-gray-50"
                   style="border-color: var(--color-primary); color: var(--color-primary)">
                    SELECT PLAN
                </a>
            </div>

            {{-- Wind Mit --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="mb-6">
                    <h2 class="text-xl font-black text-gray-900">Wind Mit</h2>
                    <p class="text-xs font-bold uppercase tracking-widest text-gray-400 mt-1">Credit Verification</p>
                </div>
                <div class="mb-6">
                    <span class="text-5xl font-black" style="color: var(--color-primary)">$150</span>
                </div>
                <ul class="space-y-3 flex-1 mb-8">
                    @foreach(['Roof-to-Wall Attachment', 'Secondary Water Barrier', 'Opening Protection', 'Reduces Insurance Premiums'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="/contact"
                   class="block text-center py-3 rounded-xl text-sm font-bold border-2 transition-colors duration-200 hover:bg-gray-50"
                   style="border-color: var(--color-primary); color: var(--color-primary)">
                    SELECT PLAN
                </a>
            </div>

            {{-- The Bundle — featured --}}
            <div class="relative rounded-2xl p-8 flex flex-col shadow-lg"
                 style="background-color: var(--color-primary); border: 2px solid var(--color-primary)">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest text-white whitespace-nowrap"
                          style="background-color: var(--color-secondary)">
                        Best Value Bundle
                    </span>
                </div>
                <div class="mb-6 mt-2">
                    <h2 class="text-xl font-black text-white">The Bundle</h2>
                    <p class="text-xs font-bold uppercase tracking-widest text-white/60 mt-1">4-Point + Wind Mit</p>
                </div>
                <div class="flex items-baseline gap-3 mb-6">
                    <span class="text-5xl font-black text-white">$225</span>
                    <span class="text-lg font-bold text-white/40 line-through">$300</span>
                </div>
                <ul class="space-y-3 flex-1 mb-6">
                    @foreach(['Complete 4-Point Report', 'Full Wind Mitigation Study', 'Digital Report Delivery', 'Insurance Submission Ready'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-white font-medium">
                            <svg class="w-4 h-4 flex-shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <div class="text-center py-2 rounded-lg text-xs font-black uppercase tracking-widest text-white/70 bg-white/10 mb-4">
                    Save $75 Instantly
                </div>
                <a href="/contact"
                   class="block text-center py-3 rounded-xl text-sm font-black bg-white transition-opacity duration-200 hover:opacity-90"
                   style="color: var(--color-primary)">
                    BOOK BUNDLE
                </a>
            </div>

            {{-- Full Home --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="mb-6">
                    <h2 class="text-xl font-black text-gray-900">Full Home</h2>
                    <p class="text-xs font-bold uppercase tracking-widest text-gray-400 mt-1">Comprehensive Analysis</p>
                </div>
                <div class="mb-6">
                    <span class="text-2xl font-bold text-gray-400">From </span>
                    <span class="text-5xl font-black" style="color: var(--color-primary)">$450</span>
                </div>
                <ul class="space-y-3 flex-1 mb-8">
                    @foreach(['Structural Components', 'Exterior & Interior Walls', 'Appliance Testing', 'Foundation & Attic'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="/contact"
                   class="block text-center py-3 rounded-xl text-sm font-bold border-2 transition-colors duration-200 hover:bg-gray-50"
                   style="border-color: var(--color-primary); color: var(--color-primary)">
                    GET QUOTE
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ── Photo + features row ─────────────────────────────── --}}
<section class="pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Photo --}}
            <div class="relative rounded-2xl overflow-hidden min-h-[360px]">
                <img src="/assets/images/precision-authority.jpg" alt="South Florida home inspection"
                     class="w-full h-full object-cover object-center absolute inset-0">
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.70) 0%, rgba(0,0,0,0.10) 60%, transparent 100%)"></div>
                <div class="absolute bottom-8 left-8 right-8">
                    <p class="text-2xl font-black text-white uppercase tracking-wide leading-tight">Precision Authority</p>
                    <p class="text-white/70 text-sm mt-1">Every detail documented with clinical accuracy.</p>
                </div>
            </div>

            {{-- Feature blocks --}}
            <div class="flex flex-col gap-6">

                {{-- 24-Hour Turnaround --}}
                <div class="rounded-2xl p-8 flex items-start gap-5 text-white"
                     style="background-color: var(--color-secondary)">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-white mb-2">24-Hour Turnaround</h3>
                        <p class="text-white/80 text-sm leading-relaxed">
                            Most digital reports delivered within one business day of the site visit.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 flex-1">

                    {{-- Smart Reports --}}
                    <div class="rounded-2xl border border-gray-100 p-7 bg-white shadow-sm flex flex-col gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                             style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                            <svg class="w-6 h-6" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 uppercase tracking-wide mb-2" style="color: var(--color-primary)">Smart Reports</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Interactive PDF reports with high resolution photos and clear action items.
                            </p>
                        </div>
                    </div>

                    {{-- Easy Online Booking --}}
                    <div class="rounded-2xl border border-gray-100 p-7 shadow-sm flex flex-col gap-4"
                         style="background-color: var(--color-neutral)">
                        <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center">
                            <svg class="w-6 h-6" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black uppercase tracking-wide mb-2" style="color: var(--color-primary)">Easy Online Booking</h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                                Schedule your inspection in under 60 seconds. Select your service, pick a time, and we'll handle the rest.
                            </p>
                            <a href="/contact"
                               class="inline-flex items-center px-5 py-2.5 rounded-lg text-xs font-black uppercase tracking-widest text-white transition-opacity hover:opacity-90"
                               style="background-color: var(--color-secondary)">
                                Schedule Now
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── Custom package CTA ───────────────────────────────── --}}
<section class="py-24 text-center" style="background-color: var(--color-primary)">
    <div class="max-w-2xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-black text-white uppercase tracking-wide mb-5">
            Need a Custom Inspection Package?
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-10">
            We offer specialty services including mold testing, radon gas screening,
            and commercial property evaluations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:{{ $page->phone_raw }}"
               class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl text-sm font-bold text-white border-2 border-white/40 hover:border-white transition-colors duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call {{ $page->phone }}
            </a>
            <a href="mailto:{{ $page->email }}"
               class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
               style="background-color: var(--color-tertiary)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Email Estimates
            </a>
        </div>
    </div>
</section>

@endsection
