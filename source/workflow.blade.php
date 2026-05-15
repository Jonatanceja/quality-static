@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">
            Our Digital Workflow
        </h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-lg">
            Precision-engineered for clarity. Our streamlined process ensures transparency
            from the first click to the final digital delivery.
        </p>
    </div>
</section>

{{-- ── Steps ────────────────────────────────────────────── --}}
<section class="py-16 bg-white"
         x-data="{ active: 1 }"
         @scroll.window="
            const ids = [1,2,3,4];
            for (const id of ids) {
                const el = document.getElementById('step-' + id);
                if (el) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top <= 160) active = id;
                }
            }
         ">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex gap-12 items-start">

            {{-- Sticky sidebar --}}
            <aside class="hidden lg:block w-56 flex-shrink-0 sticky top-24 self-start">
                <p class="text-xs font-black uppercase tracking-widest text-gray-500 mb-5">Process Overview</p>
                <ul class="space-y-1">
                    @foreach ([
                        [1, 'Booking Online'],
                        [2, 'On-site Inspection'],
                        [3, 'Digital Report Generation'],
                        [4, 'Sharing & Finalization'],
                    ] as [$num, $label])
                        <li>
                            <a href="#step-{{ $num }}"
                               class="block py-3 border-l-2 pl-4 transition-all duration-200 group"
                               :class="active === {{ $num }}
                                   ? 'border-[var(--color-tertiary)]'
                                   : 'border-gray-200 hover:border-gray-400'">
                                <span class="block text-[10px] font-bold uppercase tracking-widest mb-0.5 transition-colors"
                                      :class="active === {{ $num }} ? 'text-[var(--color-tertiary)]' : 'text-gray-500'">
                                    Step 0{{ $num }}
                                </span>
                                <span class="block text-sm font-semibold transition-colors"
                                      :class="active === {{ $num }} ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-700'">
                                    {{ $label }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

            {{-- Steps content --}}
            <div class="flex-1 space-y-10">

                {{-- Step 1: Booking Online --}}
                <div id="step-1" class="rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                    <div class="aspect-[16/6] overflow-hidden">
                        <picture>
                            <source srcset="/assets/images/booking-online.webp" type="image/webp">
                            <img src="/assets/images/booking-online.jpg" alt="Booking online"
                                 class="w-full h-full object-cover object-center">
                        </picture>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-4 h-4" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-xs font-black uppercase tracking-widest" style="color: var(--color-primary)">Phase One</span>
                        </div>
                        <h2 class="text-2xl font-black text-gray-900 mb-3">1. Booking Online</h2>
                        <p class="text-gray-500 leading-relaxed mb-6">
                            Our intuitive portal allows you to select your service, choose an available time slot,
                            and provide property details in under 3 minutes. Automated confirmation emails keep
                            all stakeholders in the loop immediately.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest text-white"
                                  style="background-color: var(--color-primary)">Real-time Availability</span>
                            <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest text-white"
                                  style="background-color: var(--color-primary)">Instant Quote</span>
                        </div>
                    </div>
                </div>

                {{-- Step 2: On-site Inspection --}}
                <div id="step-2" class="rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                    <div class="aspect-[16/6] overflow-hidden">
                        <picture>
                            <source srcset="/assets/images/on-site.webp" type="image/webp">
                            <img src="/assets/images/on-site.jpg" alt="On-site inspection"
                                 class="w-full h-full object-cover object-center">
                        </picture>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-4 h-4" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span class="text-xs font-black uppercase tracking-widest" style="color: var(--color-primary)">Phase Two</span>
                        </div>
                        <h2 class="text-2xl font-black text-gray-900 mb-3">2. On Site Inspection</h2>
                        <p class="text-gray-500 leading-relaxed mb-6">
                            Certified inspectors arrive with precision tools and digital tablets. Every finding
                            is logged, photographed, and tagged with metadata in real time, ensuring no detail
                            of the property's condition is overlooked.
                        </p>
                        <ul class="space-y-3">
                            @foreach(['Standardized 400-point physical check', 'High resolution thermal imaging capture'] as $point)
                                <li class="flex items-center gap-3 text-sm text-gray-600">
                                    <svg class="w-4 h-4 flex-shrink-0" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Step 3: Digital Report Generation --}}
                <div id="step-3" class="rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                    <div class="aspect-[16/6] overflow-hidden relative">
                        <picture>
                            <source srcset="/assets/images/report-generation.webp" type="image/webp">
                            <img src="/assets/images/report-generation.jpg" alt="Report generation"
                                 class="w-full h-full object-cover">
                        </picture>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-4 h-4" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="text-xs font-black uppercase tracking-widest" style="color: var(--color-primary)">Phase Three</span>
                        </div>
                        <h2 class="text-2xl font-black text-gray-900 mb-3">3. Digital Report Generation</h2>
                        <p class="text-gray-500 leading-relaxed mb-6">
                            Raw data is synthesized into a readable, authoritative report. We use high contrast
                            modules and color coded status chips (Orange for Action Required, Teal for Passed)
                            to help you prioritize home repairs.
                        </p>
                        <div class="flex items-center justify-between p-4 rounded-xl border border-gray-100 bg-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                                     style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                                    <svg class="w-5 h-5" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Sample_Inspection_Report.pdf</p>
                                    <p class="text-xs text-gray-500">4.2 MB · Ready for review</p>
                                </div>
                            </div>
                            <a href="/contact" class="text-sm font-bold" style="color: var(--color-primary)">
                                View Live Demo
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Step 4: Sharing & Finalization --}}
                <div id="step-4" class="rounded-2xl overflow-hidden shadow-sm"
                     style="background-color: var(--color-primary)">
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-4 h-4 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            <span class="text-xs font-black uppercase tracking-widest text-white/60">Phase Four</span>
                        </div>
                        <h2 class="text-2xl font-black text-white mb-3">4. Sharing & Finalization</h2>
                        <p class="text-white/75 leading-relaxed mb-8">
                            Deploy your findings instantly to agents, buyers, or contractors. Our secure sharing
                            infrastructure ensures your data remains private yet accessible to authorized parties.
                        </p>
                        <blockquote class="border border-white/20 rounded-xl p-5 mb-8 text-white/80 text-sm italic leading-relaxed">
                            "Click Create to get the link to copy/paste into your own email or send directly through the system!"
                        </blockquote>
                        <div class="flex flex-wrap gap-4">
                            <a href="/contact"
                               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                               style="background-color: var(--color-tertiary)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                                Create Share Link
                            </a>
                            <a href="/contact"
                               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white border-2 border-white/30 hover:border-white/70 transition-colors duration-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Send to Client
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ── CTA ──────────────────────────────────────────────── --}}
<section class="py-24 text-center" style="background-color: var(--color-neutral)">
    <div class="max-w-xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-black text-gray-900 mb-4">Ready for a faster closing?</h2>
        <p class="text-gray-500 leading-relaxed mb-8">
            Experience the precision of Calidad Inspections today. Book your next digital workflow inspection now.
        </p>
        <a href="/contact"
           class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
           style="background-color: var(--color-primary)">
            Book Inspection Now
        </a>
    </div>
</section>

@endsection
