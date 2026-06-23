---
title: "Home Inspector in Pembroke Pines, FL | Calidad Inspections"
description: "Home inspector in Pembroke Pines, Broward County. Diego Cano, Certified Master Inspector with 15,000+ inspections. Full home, Wind Mitigation, 4-Point and Condo inspections with same-day digital reports. Call 954-598-2278."
---
@extends('_layouts.main')

@section('body')

{{-- ── Hero ─────────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4 flex items-center gap-2 flex-wrap" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)] transition-colors">Home</a><span>/</span>
            <a href="/areas" class="hover:text-[var(--color-primary)] transition-colors">Areas</a><span>/</span>
            <span class="text-gray-600">Pembroke Pines</span>
        </nav>
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Broward County</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">Home Inspector in Pembroke Pines, Florida</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-2xl">Calidad Inspections provides professional home inspections in Pembroke Pines, Broward County. Led by Diego Cano, Certified Master Inspector with over 15,000 inspections completed throughout Florida, we deliver clear findings, detailed photos and same-day digital reports.</p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <a href="/contact" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90" style="background-color: var(--color-primary)">Schedule Online</a>
            <a href="tel:{{ $page->phone_raw }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl text-sm font-bold transition-colors border-2" style="border-color: var(--color-primary); color: var(--color-primary)">Call or Text {{ $page->phone }}</a>
        </div>
    </div>
</section>

{{-- ── Intro ────────────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
        <h2 class="text-2xl font-black text-gray-900 mb-4 mt-10 first:mt-0">Home inspections in Pembroke Pines</h2>
                <p class="text-gray-500 leading-relaxed mb-4">Pembroke Pines is part of Broward County in South Florida, an area of established neighborhoods, family homes and a strong real estate market. Whether you are buying your first home, selling a property or maintaining the one you own, a professional inspection gives you a clear, honest picture before you make a decision.</p>
                <h2 class="text-2xl font-black text-gray-900 mb-4 mt-10 first:mt-0">Why homeowners in Pembroke Pines choose Calidad Inspections</h2>
                <ul class="list-disc pl-5 space-y-2 mb-4 text-gray-600">
                  <li class="leading-relaxed">Local knowledge of Pembroke Pines and the surrounding Broward County area</li>
                  <li class="leading-relaxed">Same-day digital reports available</li>
                  <li class="leading-relaxed">Clear photos and easy-to-understand findings</li>
                  <li class="leading-relaxed">Honest, professional communication from start to finish</li>
                </ul>
    </div>
</section>

{{-- ── Meet your inspector ───────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="rounded-2xl overflow-hidden shadow-sm aspect-[4/3]">
                <picture>
                    <source srcset="/assets/images/diego-cano.webp" type="image/webp">
                    <img src="/assets/images/diego-cano.jpeg" alt="Diego Cano, Certified Master Inspector serving Pembroke Pines" class="w-full h-full object-cover">
                </picture>
            </div>
            <div>
                <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Meet Your Inspector</span>
                <h2 class="text-2xl sm:text-3xl font-black text-gray-900 mb-4">Diego Cano, Certified Master Inspector</h2>
                <p class="text-gray-500 leading-relaxed mb-6">Every Pembroke Pines inspection is handled with the same care Diego brings to every home: as if he were inspecting it for his own family. With over 15 years of experience and more than 15,000 inspections completed throughout Florida, Diego helps clients understand their property and make confident, informed decisions.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach (['Certified Master Inspector', '15+ years of experience', '15,000+ inspections completed', 'Serving Pembroke Pines & South Florida'] as $check)
                        <div class="flex items-center gap-2.5 text-sm text-gray-600">
                            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center" style="background-color: color-mix(in srgb, var(--color-secondary) 15%, transparent)">
                                <svg class="w-3 h-3" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            {{ $check }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Services ─────────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        @include('_partials._service-links', ['kicker' => 'Services', 'heading' => 'Inspection services in Pembroke Pines'])

        <div class="max-w-3xl mt-14">
            <h3 class="text-lg font-bold text-gray-900 mb-2 mt-8">Wind Mitigation Inspections</h3>
                      <p class="text-gray-500 leading-relaxed mb-4">Documents the wind-resistance features of your Pembroke Pines home, which can help qualify for insurance premium discounts.</p>
                      <h3 class="text-lg font-bold text-gray-900 mb-2 mt-8">4-Point Inspections</h3>
                      <p class="text-gray-500 leading-relaxed mb-4">Focused review of roof, electrical, plumbing and HVAC, commonly required by insurers for older Pembroke Pines homes.</p>
                      <h3 class="text-lg font-bold text-gray-900 mb-2 mt-8">Condo Inspections</h3>
                      <p class="text-gray-500 leading-relaxed mb-4">Detailed inspection of the unit&rsquo;s systems and visible components for Pembroke Pines condo buyers and owners.</p>
        </div>
    </div>
</section>

{{-- ── FAQ ───────────────────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
        <div class="mb-10">
            <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">FAQ</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900">Pembroke Pines home inspection questions</h2>
        </div>
        <div class="space-y-4">
        <details class="group bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <summary class="flex items-center justify-between gap-4 cursor-pointer list-none px-6 py-5 font-bold text-gray-900">
                How much does a home inspection cost in Pembroke Pines?
                <svg class="w-5 h-5 flex-shrink-0 text-gray-400 transition-transform duration-200 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </summary>
            <p class="px-6 pb-5 text-gray-500 leading-relaxed">Pricing depends on the size, age and type of property. Call or text 954-598-2278 for a fast quote for your Pembroke Pines property.</p>
        </details>
        <details class="group bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <summary class="flex items-center justify-between gap-4 cursor-pointer list-none px-6 py-5 font-bold text-gray-900">
                How soon can you inspect my home in Pembroke Pines?
                <svg class="w-5 h-5 flex-shrink-0 text-gray-400 transition-transform duration-200 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </summary>
            <p class="px-6 pb-5 text-gray-500 leading-relaxed">We serve Pembroke Pines and the surrounding Broward County area and can often schedule quickly, with same-day digital reports available.</p>
        </details>
        <details class="group bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <summary class="flex items-center justify-between gap-4 cursor-pointer list-none px-6 py-5 font-bold text-gray-900">
                Do you offer Wind Mitigation and 4-Point inspections in Pembroke Pines?
                <svg class="w-5 h-5 flex-shrink-0 text-gray-400 transition-transform duration-200 group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </summary>
            <p class="px-6 pb-5 text-gray-500 leading-relaxed">Yes. We provide Wind Mitigation, 4-Point, Full Home and Condo inspections throughout Pembroke Pines.</p>
        </details>
        </div>
    </div>
</section>

{{-- ── Nearby areas ──────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="mb-10">
            <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">More Service Areas</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900">Nearby areas we serve</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="/city-miramar" class="group flex flex-col p-5 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">Miramar</span>
                <span class="text-sm text-gray-400 mt-1">Broward County</span>
            </a>
            <a href="/city-southwest-ranches" class="group flex flex-col p-5 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">Southwest Ranches</span>
                <span class="text-sm text-gray-400 mt-1">Broward County</span>
            </a>
            <a href="/city-fort-lauderdale" class="group flex flex-col p-5 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">Fort Lauderdale</span>
                <span class="text-sm text-gray-400 mt-1">Broward County</span>
            </a>
            <a href="/city-tamarac" class="group flex flex-col p-5 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">Tamarac</span>
                <span class="text-sm text-gray-400 mt-1">Broward County</span>
            </a>
        </div>
    </div>
</section>

@include('_partials._cta', ['cta_title' => 'Ready to schedule your Pembroke Pines inspection?'])

@endsection
