@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">
            Get in Touch
        </span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">
            Schedule Your Inspection
        </h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl">
            Book directly through our online scheduler. Pick your date, time, and service in minutes.
        </p>
    </div>
</section>

{{-- ── Contact info + form ──────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Sidebar --}}
            <aside class="space-y-4">

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                    <h2 class="text-base font-black text-gray-900 mb-5">Contact Details</h2>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-9 h-9 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                                <svg class="w-4 h-4" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide mb-0.5">Phone</p>
                                <a href="tel:{{ $page->phone_raw }}" class="text-sm font-semibold text-gray-900 hover:underline">{{ $page->phone }}</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-9 h-9 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                                <svg class="w-4 h-4" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide mb-0.5">Email</p>
                                <a href="mailto:{{ $page->email }}" class="text-sm font-semibold text-gray-900 hover:underline">{{ $page->email }}</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-9 h-9 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                                <svg class="w-4 h-4" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide mb-0.5">Hours</p>
                                <p class="text-sm font-semibold text-gray-900">Mon – Sun: 7 AM – 7 PM</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-9 h-9 rounded-xl flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-primary) 10%, transparent)">
                                <svg class="w-4 h-4" style="color: var(--color-primary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide mb-0.5">Service Area</p>
                                <p class="text-sm font-semibold text-gray-900">Miami-Dade, Broward &amp; Palm Beach</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                    <h2 class="text-base font-black text-gray-900 mb-4">What to Expect</h2>
                    <ul class="space-y-3">
                        @foreach([
                            'Pick your service and preferred time slot',
                            'Receive instant booking confirmation',
                            'Inspector arrives on schedule',
                            'Report delivered within 24 hours',
                        ] as $i => $step)
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full text-xs font-black flex items-center justify-center text-white"
                                      style="background-color: var(--color-secondary)">{{ $i + 1 }}</span>
                                <span class="text-sm text-gray-600 leading-snug">{{ $step }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="rounded-2xl p-6 text-white" style="background-color: var(--color-primary)">
                    <p class="text-xs font-bold uppercase tracking-widest text-white/60 mb-2">Response Time</p>
                    <p class="text-2xl font-black mb-1">Same Day</p>
                    <p class="text-sm text-white/70 leading-relaxed">
                        We respond to all inquiries the same business day. Emergency inspections available.
                    </p>
                </div>

            </aside>

            {{-- Booking form --}}
            <div class="lg:col-span-2">
                <iframe
                    id="spectora-iframe"
                    src="https://app.spectora.com/home-inspectors/my-inspection-company-4686c315ed/schedule?iframe=1"
                    style="display: block; width: 100%; height: 700px; transition: height 0.35s ease; background-color: transparent; border: 1px solid gray;"
                    title="Schedule an Inspection"
                    loading="lazy"
                ></iframe>
            </div>

        </div>
    </div>
</section>

@endsection
