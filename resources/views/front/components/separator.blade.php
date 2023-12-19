<!-- Start ui-block-15 -->
<section class="bg-admission-img ui-block-15 quote"
    style="background-image:url('{{ $separator->image }}');	background-size: auto !important;
    ">
    <div class="overlay-admission"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="admission-text">
                    {{-- <p class="sub-heading text-white m-0">We Believe that education is for everyone.</p> --}}
                    <p class="main-heading text-white mt-2 mb-4">{!! $separator->description !!}</p>
                    <a class="button1">@lang('words.request_consultation')</a>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End ui-block-15 -->
@push('script')
    {{-- <script src="vendor/js/parallaxie.min.js"></script> --}}
    <script>
        if (screen.width > 768) {
            $('.ui-block-15.quote.bg-admission-img').parallaxie({
                speed: 0.5,
                offset: -100,
            });
        }
    </script>
@endpush
