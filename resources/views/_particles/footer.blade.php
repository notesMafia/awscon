<footer class="site_footer footer_layout_2 bg-secondary section_decoration section_space" style="background-image: url('/assets/frontend/assets/images/backgrounds/hero_bg_noise.webp');">
    <div class="overlay" style="background-image: url('/assets/frontend/assets/images/hero/hero_pattern.svg');"></div>
    <div class="container">
        <div class="content_wrap pb-0">
            <div class="contact_info row">
                <div class="col-lg-4">
                    <div class="iconbox_block icon_left">
                        <div class="iconbox_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_email.svg" alt="Icon Email">
                        </div>
                       <div class="iconbox_content text-break">
                            <h3 class="iconbox_title">Write to us</h3>
                            <p class="mb-0">
                                <a href="mailto:info@callcapital.loans" class="text-break">info@callcapital.loans</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iconbox_block icon_left">
                        <div class="iconbox_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_calling_5.svg" alt="Icon Calling">
                        </div>
                        <div class="iconbox_content">
                            <h3 class="iconbox_title"> Call Us</h3>
                            <p class="mb-0">
                                <a href="tel:+(1)8008825905">1-800-882-5905</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iconbox_block icon_left">
                        <div class="iconbox_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_map_mark.svg" alt="Icon Map Mark">
                        </div>
                        <div class="iconbox_content">
                            <h3 class="iconbox_title">Our Office</h3>
                            <p class="mb-0">
                                150 Elgin Street, Ottawa, ON K2P 1L4
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row justify-content-lg-between">
                {{-- <div class="col-lg-4">
                    <div class="footer_widget pe-md-3">
                        <h2 class="footer_info_title">Newsletter</h2>
                        <p class="pe-lg-5">
                            Sign up to Call Capital weekly newsletter to get the latest updates.
                        </p>
                        <form class="footer_newslatter_2" action="#">
                            <label for="footer_mail_input">
                                <img src="/assets/frontend/assets/images/icons/icon_email.svg" alt="Mail SVG Icon">
                            </label>
                            <input id="footer_mail_input" type="email" name="email" placeholder="Enter your email">
                            <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                        <ul class="social_links_block unordered_list">
                            <li class="facebook"><a href="#!">Facebook</a></li>
                            <li class="twitter"><a href="#!">Twitter</a></li>
                            <li class="linkdin"><a href="#!">Linkdin</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 class="footer_info_title">Quick Links</h3>
                    <ul class="iconlist_block unordered_list_block mb-0">
                          <li>
                            <a href="/about-us">
                                <span class="iconlist_text">About Us</span>
                            </a>
                        </li>

                         <li>
                            <a href="{{ route('frontend::apply-now')}}">
                                <span class="iconlist_text">Request a Call</span>
                            </a>
                        </li>

                        <li>
                            <a href="/contact-us">
                                <span class="iconlist_text">Contact</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 class="footer_info_title">Information</h3>
                    <ul class="iconlist_block unordered_list_block mb-0">
                        <li>
                            <a href="#!">
                                <span class="iconlist_text">Privacy Policy</span>
                            </a>
                        </li>
                        <li>
                            <a href="/faq">
                                <span class="iconlist_text">FAQ's</span>
                            </a>
                        </li>
                       
                        
                    </ul>
                </div>
            </div> 

            <hr class="mb-0">

            <div class="footer_bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="copyright_text mb-0">
                            Copyright © {{ date('Y') }} {{ config('settings.company_name') }}, All rights reserved.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="iconlist_block mb-0 unordered_list justify-content-lg-end">
                            <li>
                                <a href="#!">
                                    <span class="iconlist_text">Terms & Conditions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <span class="iconlist_text">Privacy Policy</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="decoration_item shape_shadow_1">
        <img src="/assets/frontend/assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 1">
    </div>
    <div class="decoration_item shape_shadow_2">
        <img src="/assets/frontend/assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 2">
    </div>
    <div class="decoration_item shape_shadow_3">
        <img src="/assets/frontend/assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 3">
    </div>
    <div class="decoration_item shape_shadow_4">
        <img src="/assets/frontend/assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 4">
    </div>
    <div class="decoration_item shape_shadow_5">
        <img src="/assets/frontend/assets/images/shapes/shape_circle_2.svg" alt="Shape Shadow 5">
    </div>
</footer>

