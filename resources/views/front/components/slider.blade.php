<section class="slider">
    <!--Rev Slider-->
    <section class="bg-white pb-0 about-banner">
        <h2 class="d-none">heading</h2>
        <!-- Slider main container -->
        <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="swiper main-slider">
            <div class="swiper-wrapper">
                @foreach ($sliders as $index => $slider)
                    <div class="swiper-slide">
                        <img class="scale-img" src="{{ $slider->image }}" alt="">
                        <div class="content">
                            <h2 class="text-limit" style="--lines: 3;">{{ $slider->title }}</h2>
                            <p>{!! $slider->description !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next custom-navigation"></div>
            <div class="swiper-button-prev custom-navigation"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!--End Rev Slider-->
    <!--scroll down-->
    {{-- <a href="#about" class="scroll-down link scroll main-font font-15 animate">Scroll Down <i
            class="fas fa-long-arrow-alt-down"></i></a> --}}
    <!-- END MAIN SLIDER -->

    @push('script')
        <script>
            const mainSwiper = new Swiper('.main-slider', {
                spaceBetween: 30,
                centeredSlides: true,
                effect: "fade",
                // effect: "coverflow",
                speed: 1000,
                // zoomChange: scale,

                // scale: 10,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });
        </script>
    @endpush

</section>




<!-- START MAIN SLIDER -->
{{-- <div id="slider-section" class="slider-section">

</div> --}}
