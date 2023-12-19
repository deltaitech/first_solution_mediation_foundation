<!-- Start ui-block-08 -->
{{-- <section class="ui-block-08 about">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-6 col-lg-6 img-sec">
                <div class="green_rectangle"></div>
                <div class="about_img margin_aboutimg">
                    <img src="{{ $about_us->image }}" alt="Yoga Image">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="about-heading">

                    <h1 class="heading margin_heading wow fadeInUp" data-wow-delay="600ms" data-wow-duration="0.8s"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        {{ $about_us->title }}</h1>
                    <p class="info  wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.3s"
                        style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        {!! $about_us->description !!}
                    </p>
                    <a href="#" class="btn btn-medium btn-rounded btn-blue margin_button  wow fadeInUp"
                        data-wow-delay="900ms" data-wow-duration="1s"
                        style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End ui-block-08 -->


<section class="ui-block-32 about">
    <div class="container">
        <div class="row dot-box">
            <!-- Heading Area-->
            <div class="col-lg-6 order-lg-2">
                <div class="heading-area pl-lg-4 p-0 about-description text-limit" style="--lines:8">
                    <h2 class="title">{{ $about_us->title }}</h2>
                    <p class="paragraph">{!! $about_us->description !!}</p>
                </div>
                @if (request()->routeIs('front.home'))
                    <div class="pt-lg-5 d-flex justify-content-start align-items-center">
                        <a class="button1" href="{{ route('about') }}">@lang('words.read_more')</a>
                    </div>
                @endif
            </div>
            <!-- Features Box-->
            <div class="col-lg-6">
                <!--About Image-->
                <div class="about-image js-tilt">
                    <img src="{{ $about_us->image }}" alt="about-img">
                </div>
            </div>
        </div>

    </div>
</section>



<!-- START ABOUT US -->
<section>
    <div class="container">
        {{-- <div class="row">
            <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                <h1 class="main-font font-weight-600 text-black">{{ $about_us->title }}</h1>
            </div>

            <div class="col-12 col-lg-6 m-ipad wow fadeInRight" data-wow-delay="300ms">
                <div class="ml-md-4 pl-md-2 font-weight-200 text-grey font-18">
                    <p>{!! $about_us->description !!} </p>

                </div>
            </div>
        </div> --}}


        <!-- About Boxes -->
        <div class="row about-margin">
            <div class="title text-center pb-5 wow fadeInUp" data-wow-delay="100ms">
                <h2 class="main-font font-weight-600 text-black">@lang('words.our_feature')</h2>
            </div>

            <!-- First Box -->
            @foreach ($features as $feature)
                <div class="col-md-4 col-sm-12">
                    <div class="about-box center-block bg-green wow zoomIn" data-wow-delay="400ms">
                        <div class="about-main-icon pb-4">
                            <img src="{{ $feature->image }}" alt="">
                            {{-- <i class="fa fa-lightbulb" aria-hidden="true"></i> --}}
                        </div>
                        <h5>{{ $feature->title }}</h5>
                    </div>
                </div>
            @endforeach

        </div>


        <!-- About Image -->
        {{-- <div class="d-flex justify-content-center wow bounceInLeft" data-wow-delay="300ms">
            <img src="{{ $about_us->image }}" alt="About-Us Plant">
        </div> --}}
    </div>
</section>
<!-- END ABOUT US -->
