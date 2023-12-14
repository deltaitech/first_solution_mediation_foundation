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
                    <p class="text-blue font-weight-200 font-20">How to reach us</p>
                    <h1 class="main-font font-weight-600 text-black">Let’s Get in Touch</h1>
                </div>
            </div>

            <!-- Contact-us -->
            <div class="row">
                <div class="col-12 col-lg-6 contact-details text-md-left">
                    <div class="font-15 alt-font light-grey text-center text-lg-left">
                        West is not just about graphic design; it's more than that. We offer integral communication
                        services, and we're responsible for our process and results. We thank each client and their
                        projects.
                    </div>
                    <div class="row mt-5 wow fadeIn" data-wow-delay="200ms">
                        <!-- Address-Box -->
                        <div class="col-12 col-md-6 text-center text-lg-left">
                            <h4 class="main-font text-blue font-16 font-weight-600">Our Address</h4>
                            <p class="alt-font font-14 light-grey mt-3">123 Stree New York City , United States Of America.
                            </p>
                        </div>
                        <!-- Phone-Box -->
                        <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left"
                            data-wow-delay="400ms">
                            <h4 class="main-font text-blue font-16 font-weight-600">Our Phone</h4>
                            <p class="alt-font font-14 light-grey mt-3">Office Telephone : 001 01085379709 Mobile : 001
                                63165370895 </p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <!-- Email-Box -->
                        <div class="col-12 col-md-6 wow fadeIn text-center text-lg-left" data-wow-delay="600ms">
                            <h4 class="main-font text-blue font-16 font-weight-600">Our Email</h4>
                            <p class="alt-font font-14 light-grey mt-3">Main Email : admin@website.com Inquiries :
                                email@website.com </p>
                        </div>
                        <!-- Support-Box -->
                        <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left"
                            data-wow-delay="800ms">
                            <h4 class="main-font text-blue font-16 font-weight-600">Our Support</h4>
                            <p class="alt-font font-14 light-grey mt-3">Main Support : info@website.com Sales :
                                support@website</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 contact-form-box">
                    <form class="contact-form" id="contact-form-data">
                        <div class="row">
                            <!-- Submission Popup -->
                            <div class="col-12">
                                <div class="col-sm-12 px-0" id="result"></div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="First Name:" required=""
                                        id="first_name" name="firstName">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Last Name:" required=""
                                        id="last_name" name="lastName">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email:" required=""
                                        id="email" name="userEmail">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="Phone:" id="phone"
                                        name="userPhone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" id="message" name="userMessage"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button"
                                    class="btn btn-large green-long-btn rounded-pill w-100 btn-hvr-up btn-hvr-blue mt-4 contact_btn"
                                    id="submit_btn">SUBMIT REQUEST</button>
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
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.9674103770367!2d-111.89998968532109!3d33.31966746342612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDE5JzEwLjgiTiAxMTHCsDUzJzUyLjEiVw!5e0!3m2!1sen!2s!4v1573716071790!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GOOGLE-MAP -->
@endsection
