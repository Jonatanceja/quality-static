---
title: "FAQ | Calidad Inspections South Florida"
description: "Answers to common questions about home inspections, 4-Point inspections, reports, service areas and scheduling with Calidad Inspections."
---
@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">FAQ</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">Frequently Asked Questions</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl">
            Quick answers to help you understand the process and reach us faster.
        </p>
    </div>
</section>

{{-- ── FAQ list ─────────────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 space-y-4">
        @php
            $faqs = [
                ['q' => 'How long does a home inspection usually take?', 'a' => 'Most inspections take approximately 2 to 4 hours depending on the size, condition and complexity of the property.'],
                ['q' => 'Do you provide same-day reports?', 'a' => 'Same-day digital reports are available for many inspections. Timing can vary depending on the property and report type.'],
                ['q' => 'What areas do you serve?', 'a' => 'Calidad Inspections serves South Florida, including Broward, Miami-Dade and Palm Beach.'],
                ['q' => 'What is included in a 4-Point Inspection?', 'a' => 'A 4-Point Inspection focuses on four major systems: roof, electrical, plumbing and HVAC.'],
                ['q' => 'Can real estate agents schedule inspections for clients?', 'a' => 'Yes. Realtors can call, text or use the contact form to request scheduling support for their clients.'],
                ['q' => 'How do I schedule an inspection?', 'a' => 'Call or text ' . $page->phone . ', email ' . $page->email . ' or fill out the contact form on this page.'],
            ];
        @endphp
        @foreach ($faqs as $faq)
            <details class="group bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <summary class="flex items-center justify-between gap-4 cursor-pointer list-none px-6 py-5 font-bold text-gray-900">
                    {{ $faq['q'] }}
                    <svg class="w-5 h-5 flex-shrink-0 text-gray-400 transition-transform duration-200 group-open:rotate-180"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                <p class="px-6 pb-5 text-gray-500 leading-relaxed">{{ $faq['a'] }}</p>
            </details>
        @endforeach
    </div>
</section>

@include('_partials._cta')

@endsection
