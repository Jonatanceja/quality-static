---
title: "Service Areas | Broward, Miami-Dade & Palm Beach | Calidad Inspections"
description: "Calidad Inspections serves Broward, Miami-Dade and Palm Beach, including Fort Lauderdale, Hollywood, Coral Springs, Davie, Weston, Pompano Beach and more."
---
@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Service Areas</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">Serving South Florida</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-2xl">
            Professional inspection support for homeowners, buyers, sellers and real estate professionals across Broward, Miami-Dade and Palm Beach.
        </p>
    </div>
</section>

{{-- ── Counties ─────────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @php
                $counties = [
                    'Broward County'   => ['Fort Lauderdale','Pembroke Pines','Coral Springs','Hollywood','Weston','Miramar','Plantation','Davie','Pompano Beach','Deerfield Beach','Sunrise','Tamarac','Cooper City','Parkland','Margate','Lauderhill','Oakland Park','Hallandale Beach'],
                    'Miami-Dade County'=> ['Miami','Hialeah','Doral','Miami Beach','Kendall','Aventura'],
                    'Palm Beach County'=> ['Boca Raton','West Palm Beach','Delray Beach','Boynton Beach'],
                ];
            @endphp
            @foreach ($counties as $county => $cities)
                <div class="bg-white rounded-2xl p-7 border border-gray-100 shadow-sm">
                    <h2 class="text-xl font-black text-gray-900 mb-4">{{ $county }}</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($cities as $city)
                            <span class="text-sm px-3 py-1.5 rounded-full text-gray-600"
                                  style="background-color: var(--color-neutral)">{{ $city }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── City pages ───────────────────────────────────────── --}}
<section class="py-20" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="mb-12">
            <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Local Pages</span>
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900">Home inspector by city</h2>
        </div>

        @php
            $cityGroups = [
                'Core Service Areas' => [
                    'plantation' => 'Plantation', 'davie' => 'Davie', 'sunrise' => 'Sunrise', 'weston' => 'Weston',
                    'cooper-city' => 'Cooper City', 'pembroke-pines' => 'Pembroke Pines', 'miramar' => 'Miramar',
                    'southwest-ranches' => 'Southwest Ranches', 'fort-lauderdale' => 'Fort Lauderdale', 'tamarac' => 'Tamarac',
                ],
                'Greater Broward Coverage' => [
                    'coral-springs' => 'Coral Springs', 'parkland' => 'Parkland', 'coconut-creek' => 'Coconut Creek',
                    'margate' => 'Margate', 'north-lauderdale' => 'North Lauderdale', 'lauderhill' => 'Lauderhill',
                    'deerfield-beach' => 'Deerfield Beach', 'pompano-beach' => 'Pompano Beach', 'oakland-park' => 'Oakland Park',
                    'wilton-manors' => 'Wilton Manors',
                ],
                'Coastal & Waterfront Communities' => [
                    'hallandale-beach' => 'Hallandale Beach', 'hollywood' => 'Hollywood', 'dania-beach' => 'Dania Beach',
                    'lighthouse-point' => 'Lighthouse Point', 'lauderdale-by-the-sea' => 'Lauderdale-by-the-Sea',
                    'hillsboro-beach' => 'Hillsboro Beach',
                ],
            ];
        @endphp

        @foreach ($cityGroups as $groupName => $cities)
            <h3 class="text-sm font-bold uppercase tracking-wide mb-4 mt-10 first:mt-0" style="color: var(--color-primary)">{{ $groupName }}</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($cities as $slug => $name)
                    <a href="/city-{{ $slug }}"
                       class="group flex flex-col p-5 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                        <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">Home Inspector in {{ $name }}</span>
                        <span class="text-sm text-gray-400 mt-1">Broward County</span>
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
</section>

@include('_partials._cta')

@endsection
