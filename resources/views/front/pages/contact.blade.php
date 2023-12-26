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
    <!-- START CONTACT-FORM -->
    <section id="contact" class="contact-sec">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    {{-- <p class= font-weight-200 font-20">How to reach us</p> --}}
                    <h1 class="main-font font-weight-600 text-black">@lang('words.contact_us')</h1>
                </div>
            </div>

            <!-- Contact-us -->
            <div class="row">
                <div class="col-12 col-lg-6 contact-details text-start">
                    <div class="font-15 alt-font light-grey text-start text-capitalize">
                        @lang('words.contact_msg')
                    </div>
                    <div class="row mt-5 wow fadeIn" data-wow-delay="200ms">
                        <!-- Address-Box -->
                        <div class="col-12 col-md-6 text-start">
                            <h4 class="main-font font-16 font-weight-600">Our Address</h4>
                            <p class="alt-font font-14 light-grey mt-3">123 Stree New York City , United States Of America.
                            </p>
                        </div>
                        <!-- Phone-Box -->
                        <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-start" data-wow-delay="400ms">
                            <h4 class="main-font font-16 font-weight-600">Our Phone</h4>
                            <p class="alt-font font-14 light-grey mt-3">Office Telephone : 001 01085379709 Mobile : 001
                                63165370895 </p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <!-- Email-Box -->
                        <div class="col-12 col-md-6 wow fadeIn text-start" data-wow-delay="600ms">
                            <h4 class="main-font font-16 font-weight-600">Our Email</h4>
                            <p class="alt-font font-14 light-grey mt-3">Main Email : admin@website.com Inquiries :
                                email@website.com </p>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6 contact-form-box">
                    <form class="contact-form" id="contact-us" method="post" action="{{ route('contact.save') }}">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <!-- Submission Popup -->
                            <div class="col-12">
                                <div class="col-sm-12 px-0" id="result"></div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="@lang('words.name')"
                                        id="name" name="name">
                                    <div class="invalid-feedback d-none"></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="@lang('words.email')"
                                        id="email" name="email">
                                    <div class="invalid-feedback d-none"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="@lang('words.phone')"
                                        id="phone" name="phone">
                                    <div class="invalid-feedback d-none"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="@lang('words.message')" id="message" name="message"></textarea>
                                    <div class="invalid-feedback d-none"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-3 d-flex justify-content-center align-items-center" data-aos="fade-down">
                                    <button class="button1" type="submit" id='submit-btn'>
                                        <span id='btn-text'>@lang('words.send')</span>
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            id="loading-spinner"></span>
                                        <span class="d-none" id="loading-text">@lang('words.loading')</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT-FORM -->

    <!-- START GOOGLE MAP -->
    <section id="map" class="p-0">
        <div class="row">
            <div class="col-12">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        {!! settings()->map !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GOOGLE-MAP -->
@endsection


@push('script')
    <script>
        $('#message-success').hide();

        $('#contact-us').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(e.target);
            $('.form-control').each(function() {
                $(this).attr('disabled', true);
            });
            $('.form-control-md').each(function() {
                $(this).attr('disabled', true);
            });

            $('#submit-btn').attr('disabled', true); // disable
            $("#loading-spinner").removeClass('d-none'); // spinner
            $("#loading-text").removeClass('d-none'); // spinner text
            $("#btn-text").addClass('d-none'); // btn text

            $(".form-control").removeClass('is-invalid');
            $(".form-control-md").removeClass('is-invalid');

            $.ajax({
                type: 'POST',
                url: "{{ route('contact.save') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    $('.form-control').each(function() {
                        $(this).removeAttr('disabled');
                    });
                    $('.form-control-md').each(function() {
                        $(this).removeAttr('disabled');
                    });

                    $('#submit-btn').attr('disabled', false); // disable
                    $("#loading-spinner").addClass('d-none'); // spinner
                    $("#loading-text").addClass('d-none'); // spinner text
                    $(".invalid-feedback").addClass('d-none'); // spinner text
                    $("#btn-text").removeClass('d-none'); // btn text

                    e.target.reset();
                    $('#message-success').show();
                    $('#message-success').addClass('show');
                    $('#message-successalert').text(response);
                    $('#message-success').addClass('mb-3 opacity-1');
                    setTimeout(() => {
                        $('#message-success').fadeOut('fast');
                        $('#message-success').removeClass('mb-3 opacity-1');
                        $('#message-success').removeClass('show');
                    }, 5000);
                },
                error: function(response) {
                    $('.form-control').each(function() {
                        $(this).removeAttr('disabled');
                    });
                    $('.form-control-md').each(function() {
                        $(this).removeAttr('disabled');
                    });
                    $('#submit-btn').attr('disabled', false); // disable
                    $("#loading-spinner").addClass('d-none'); // spinner
                    $("#loading-text").addClass('d-none'); // spinner text
                    $("#btn-text").removeClass('d-none'); // btn text
                    $.each(response.responseJSON.errors, function(key, value) {
                        $("#" + key).next().show();
                        $("#" + key).next().html(value[0]);
                        $("#" + key).next().removeClass('d-none');
                        $("#" + key).addClass('is-invalid');
                        // setTimeout(() => {
                        //     $("#" + key).next().fadeOut('fast');
                        //     $("#" + key).next().addClass('d-none');
                        //     $("#" + key).removeClass('is-invalid');
                        // }, 5000);
                    });

                }
            });
        });
    </script>
@endpush
