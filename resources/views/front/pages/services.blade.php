@extends('front.layouts.master')
@section('title')
    {{ trans('words.services') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.services'),
        // 'title' => $portfolio->title,
        // 'route' => 'portfolio.index',
    ])
    <!--breadcrumb-->
    <section id="about-page">
        @include('front.components.services')

    </section>
@endsection
