@extends('front.layouts.master')
@section('title')
    {{ trans('words.about_us') }}
@endsection

@section('content')
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => __('words.about_us'),
        // 'title' => $portfolio->title,
        // 'route' => 'portfolio.index',
    ])
    <!--breadcrumb-->
    <section id="about-page">
        @include('front.components.about')

    </section>
@endsection
