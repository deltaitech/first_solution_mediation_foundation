@extends('front.layouts.master')

@section('title')
    {{ trans('words.home') }}
@endsection


@section('content')
    @include('front.components.slider')

    @include('front.components.about')

    {{-- @include('front.components.charts') --}}

    @include('front.components.services')

    @include('front.components.separator')

    @include('front.components.partners')

    {{-- @include('front.components.news') --}}
@endsection
