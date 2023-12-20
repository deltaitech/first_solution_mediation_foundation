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
                <div class="text-center pt-5">
                    <a href="corporate-finance/standalone.html" class="button1">@lang('words.show_more')</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PORTFOLIO -->
