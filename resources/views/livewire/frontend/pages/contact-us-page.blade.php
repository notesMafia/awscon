@section('head_title','Contact us')
@section('bodyClass','')
<div>
    <!-- Page Header - Start
          ================================================== -->
    <section class="page_header text-center bg-black section_decoration overflow-hidden border-bottom border-dark"
             style="background-image: url('/assets/frontend/assets/images/backgrounds/page_header_bg_1.webp');"
             wire:ignore
    >
        <div class="container">
            <h1 class="page_title text-white">Contact Us</h1>
{{--            <ul class="breadcrumb_nav unordered_list justify-content-center">--}}
{{--                <li><a href="{{ route('frontend::home') }}">Home</a></li>--}}
{{--                <li class="active"><a href="#!">Contact Us</a></li>--}}
{{--            </ul>--}}
        </div>
        <div class="decoration_item shape_nate">
            <img src="/assets/frontend/assets/images/shapes/shape_nate.svg" alt="Shape Nate">
        </div>
        <div class="decoration_item shape_dollar_1 wow fadeInUp" data-wow-delay=".2s">
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_1.webp"  data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
        </div>
        <div class="decoration_item shape_dollar_2 wow fadeInUp" data-wow-delay=".2s">
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_2.webp" data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
        </div>
        <div class="decoration_item shape_dollar_3 wow fadeInUp" data-wow-delay=".3s">
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_3.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
        </div>
        <div class="decoration_item shape_dollar_4 wow fadeInUp" data-wow-delay=".3s">
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_4.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
        </div>
        <div class="decoration_item shape_pattern_1">
            <img src="/assets/frontend/assets/images/shapes/breadcrumb_shape_pattern_1.svg" alt="Shape Pattern">
        </div>
        <div class="decoration_item shape_pattern_2">
            <img src="/assets/frontend/assets/images/shapes/breadcrumb_shape_pattern_2.svg" alt="Shape Pattern">
        </div>
    </section>
    <!-- Page Header - End
    ================================================== -->

    <!-- Contact Section - Start
    ================================================== -->
    <section class="contact_section section_space bg-light" wire:ignore.self>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="comment_form p-lg-5">
                        <div class="heading_block">
                            <h2 class="heading_text">
                                Send us a Message
                            </h2>
                            <p class="heading_description mb-0">
                                Contact us today to keep your business thriving and Call Capital!
                            </p>
                        </div>
                        <form wire:submit.prevent="contactSubmit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_name">Name<sup>*</sup></label>
                                        <input id="input_name"
                                               class="form-control @error('request.first_name') is-invalid @enderror"
                                               type="text"
                                               name="name"
                                               placeholder="John Smith"
                                               required
                                               wire:model="request.first_name"
                                        >
                                        @error('request.first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_email">Email<sup>*</sup></label>
                                        <input id="input_email"
                                               class="form-control @error('request.email') is-invalid @enderror"
                                               type="email"
                                               name="email"
                                               placeholder="john.smith@example.com"
                                               required
                                               wire:model="request.email"
                                        >
                                        @error('request.email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="input_title" for="input_phone">Phone<sup>*</sup></label>
                                        <input id="input_phone"
                                               class="form-control @error('request.phone') is-invalid @enderror"
                                               type="tel"
                                               name="phone"
                                               placeholder="+1(000) 000 - 0000"
                                               wire:model="request.phone"
                                        >
                                        @error('request.phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="input_title" for="input_message">Message<sup>*</sup></label>
                                        <textarea id="input_message" class="form-control @error('request.message') is-invalid @enderror" name="message" placeholder="Tell us how can we help you" wire:model="request.message"></textarea>
                                        @error('request.message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <button class="btn text-dark"
                                            type="submit"
                                    >
                                        <span wire:loading wire:target="contactSubmit">
                                            <span class="btn_label">Sending</span>
                                            <span class="btn_icon ml-10" >
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </span>
                                        </span>
                                        <span wire:loading.remove wire:target="contactSubmit">
                                            <span class="btn_label">Send Message</span>
                                             <span class="btn_icon ml-10">
                                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#012A2B" /></svg>
                                        </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4" wire:ignore>
                    <div class="contact_info_box p-5">
                        <h3 class="heading_text">Contact Info</h3>
                        <ul class="iconlist_block unordered_list_block">
                            <li>
                                <a href="tel:{{ Str::replace('-','',config('settings.company_phone')) }}">
                        <span class="iconlist_icon">
                          <img src="/assets/frontend/assets/images/icons/icon_calling_3.svg" alt="Icon Calling">
                        </span>
                                    <span class="iconlist_text">{{ config('settings.company_phone') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{ config('settings.company_email') }}">
                                    <span class="iconlist_icon">
                                      <img src="/assets/frontend/assets/images/icons/icon_email_3.svg" alt="Icon Email">
                                    </span>
                                    <span class="iconlist_text">{{ config('settings.company_email') }}</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="social_icons_block unordered_list mb-0">
                            @if(checkData(config('settings.twitter_link')))
                                <li>
                                    <a aria-label="Twitter X" href="{{ config('settings.twitter_link') }}">
                                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.92704 6.35148L14.5111 0H13.1879L8.33921 5.5149L4.4666 0H0L5.85615 8.3395L0 15H1.32333L6.44364 9.17608L10.5334 15H15L8.92671 6.35148H8.92704ZM7.11456 8.41297L6.52121 7.58255L1.80014 0.974755H3.83269L7.64265 6.30746L8.236 7.13788L13.1885 14.0696H11.156L7.11456 8.41329V8.41297Z"/>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if(checkData(config('settings.fb_link')))
                                <li><a aria-label="Facebook" href="{{ config('settings.fb_link') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            @endif
                            @if(checkData(config('settings.linked_in_link')))
                                <li><a aria-label="Linkedin" href="{{ config('settings.linked_in_link') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            @endif
                        </ul>
                        <hr>
                        <ul class="office_location iconlist_block unordered_list_block mb-0">
                            <li>
                              <span class="iconlist_text">
                                <strong class="text-dark d-block">Office:</strong> {{ config('settings.company_address') }}
                              </span>
                            </li>
                        </ul>
                        <hr>
                        <ul class="iconlist_block unordered_list_block mb-0">
                            <li>
                              <span class="iconlist_text">
                                <strong class="text-dark d-block">Office Hours:</strong> Mon - Thurs : 8:00am - 6:00pm <br>Friday : 8:00am - 3:30pm <mark class="d-block text-danger">Sat - Sun : Closed</mark>
                              </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section - End
    ================================================== -->

    <!-- Google Map - Start
    ================================================== -->
    <div class="gmap_canvas bg-light" wire:ignore>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.442932559952!2d-75.6929601!3d45.42057189999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05aa5cebffff%3A0x7d9843ac9152a2e6!2s150%20Elgin%20St%2010th%20Floor%2C%20Ottawa%2C%20ON%20K2P%202P8%2C%20Canada!5e0!3m2!1sen!2sin!4v1739813389796!5m2!1sen!2sin" ></iframe>
    </div>
    <!-- Google Map - End
    ================================================== -->


</div>
