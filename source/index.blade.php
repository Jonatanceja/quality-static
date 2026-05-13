@extends('_layouts.main')

@section('body')
    @include('_partials._hero')
    @include('_partials._stats')
    @include('_partials._badge')
    @include('_partials._featured-services')
    @include('_partials._services')
    @include('_partials._workflow')
    @include('_partials._about')
    @include('_partials._testimonials')
    @include('_partials._contact')
    @include('_partials._certifications')
@endsection
