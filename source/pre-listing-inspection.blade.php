---
title: "Pre-Listing Inspection in South Florida | Calidad Inspections"
description: "Helpful documentation for sellers who want to identify issues early and prepare the home before listing."
---
@extends('_layouts.main')

@section('body')

{{-- ── Hero ─────────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="text-sm text-gray-400 mb-4 flex items-center gap-2 flex-wrap" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)] transition-colors">Home</a><span>/</span>
            <a href="/services" class="hover:text-[var(--color-primary)] transition-colors">Services</a><span>/</span>
            <span class="text-gray-600">Pre-Listing Inspection</span>
        </nav>
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Inspection Service</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">Pre-Listing Inspection</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-2xl">
            Helpful documentation for sellers who want to identify issues early and prepare the home before listing.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <a href="/contact"
               class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
               style="background-color: var(--color-primary)">Request this inspection</a>
            <a href="tel:{{ $page->phone_raw }}"
               class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl text-sm font-bold transition-colors border-2"
               style="border-color: var(--color-primary); color: var(--color-primary)">Call or Text {{ $page->phone }}</a>
        </div>
    </div>
</section>

{{-- ── Overview ─────────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 space-y-10">
        <div>
            <h2 class="text-2xl font-black text-gray-900 mb-4">Inspect before you list</h2>
            <p class="text-gray-500 leading-relaxed">
                A pre-listing inspection lets sellers identify issues early, before a property goes on the market. This gives you time to address concerns and reduces surprises during the buyer's inspection.
            </p>
        </div>
        <div>
            <h2 class="text-2xl font-black text-gray-900 mb-4">A smoother transaction</h2>
            <p class="text-gray-500 leading-relaxed">
                By understanding the condition of the home up front, sellers can price and prepare with confidence and help the transaction move forward smoothly.
            </p>
        </div>
    </div>
</section>

{{-- ── Other services ───────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        @include('_partials._service-links', ['exclude' => '/pre-listing-inspection'])
    </div>
</section>

@include('_partials._cta')

@endsection
