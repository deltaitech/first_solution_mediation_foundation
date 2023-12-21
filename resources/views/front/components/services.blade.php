<!-- START PORTFOLIO -->
<section id="portfolio" class="padding services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center pb-5 wow fadeInUp" data-wow-delay="100ms">
                    {{-- <p class="text-green font-weight-200 font-20">Basic Info about work</p> --}}
                    <h1 class="main-font font-weight-600 text-black">@lang('words.services')</h1>

                </div>


                <ul class="da-thumbs gallery">
                    <!-- First Image -->

                    @foreach ($services as $service)
                        <li class="items services-item">
                            <img src="{{ $service->image }}" alt="img">
                            <a href="{{ $service->image }}" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div class="text-center">
                                        <div class="search-icon">
                                            <i class="fa fa-search"></i>
                                        </div>
                                        <a href="#">
                                            <h4 class="">{{ $service->title }}</h4>
                                        </a>
                                        {{-- <span>New York, USA</span> --}}
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach

                </ul>
                @if (request()->routeIs('front.home'))
                    <div class="text-center pt-5" data-aos="fade-down">
                        <a href="{{ route('front_services.index') }}" class="button1">@lang('words.show_more')</a>
                    </div>
                @endif

            </div>
        </div>


        @if (request()->routeIs('front_services.index'))
            <!--pagination-->
            <div class="row mt-5 text-center d-flex justify-content-center align-items-center">
                {{ $services->links('front.pagination.default') }}
            </div>
        @endif
    </div>
</section>
<!-- END PORTFOLIO -->
