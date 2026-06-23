---
title: "For Realtors | Fast Reports & Clear Communication | Calidad Inspections"
description: "Calidad Inspections helps South Florida real estate agents with fast communication, clear reports and professional support for buyers and sellers."
---
@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">For Realtors</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">Fast communication. Clear reports.</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl">
            Real estate timelines move quickly. We help agents and their clients with organized reports, clear findings and professional support across South Florida.
        </p>
    </div>
</section>

{{-- ── Two panels ───────────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

            {{-- Highlight panel --}}
            <div class="rounded-2xl p-8 sm:p-10 text-white flex flex-col" style="background-color: var(--color-primary)">
                <span class="text-xs font-bold uppercase tracking-widest text-white/60 block mb-3">For Realtors</span>
                <h2 class="text-2xl sm:text-3xl font-black mb-4">Fast communication. Clear reports. Professional support.</h2>
                <p class="text-white/75 leading-relaxed mb-8">
                    Calidad Inspections helps agents and clients receive organized inspection reports with clear findings, photos and professional communication.
                </p>
                <a href="/contact"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold text-white border-2 border-white/30 hover:border-white/70 transition-colors self-start mt-auto">
                    Schedule for a Client
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            {{-- Feature list panel --}}
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-gray-100">
                <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Why Choose Calidad</span>
                <h2 class="text-2xl sm:text-3xl font-black text-gray-900 mb-6">Built for trust and clarity.</h2>
                <ul class="space-y-4">
                    @foreach([
                        'Same-day digital reports when available.',
                        'Clear photos, labels and easy-to-read findings.',
                        'Support for buyers, sellers, homeowners and agents.',
                        'Professional service across Broward, Miami-Dade and Palm Beach.',
                        'Focused inspection options including 4-Point, Wind Mitigation, Roof and Condo inspections.',
                    ] as $item)
                        <li class="flex items-start gap-3 text-gray-600">
                            <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center mt-0.5"
                                  style="background-color: color-mix(in srgb, var(--color-secondary) 15%, transparent)">
                                <svg class="w-3 h-3" style="color: var(--color-secondary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

@include('_partials._cta')

@endsection
