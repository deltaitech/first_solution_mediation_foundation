<!-- START FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        <li><a class="facebook_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-facebook-f"
                                    aria-hidden="true"></i> </a> </li>
                        <li><a class="twitter_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i
                                    class="fab fa-twitter" aria-hidden="true"></i> </a> </li>
                        <li><a class="googleplus_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li>
                        <li><a class="linkdin_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i
                                    class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li>
                        <li><a class="instagram_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="pintrest_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i
                                    class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn">&copy; 2023 MegaOne. Made With Love By <a
                        href="javascript:void(0);">Themesindustry</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!--START SCROLL TOP-->
<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!--END SCROLL TOP-->

<!-- JavaScript -->
<script src="{{ asset('front/vendor/js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('front/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/parallaxie.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('front/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('front/vendor/js/morphext.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('front/js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('front/js/modernizr.custom.97074.js') }}"></script>
<script src="{{ asset('front/js/jquery.hoverdir.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('front/vendor/js/contact_us.js') }}"></script>


<!-- Swiper JS - V10.2.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js"
    integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 850,
        easing: 'ease-in-out',
        once: false,
        mirror: true
    });
</script>
{{-- AOS --}}

{{-- Bootstrap - v5.2.3 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{ asset('front/js/script.js') }}"></script>
@stack('script')

</body>

</html>
