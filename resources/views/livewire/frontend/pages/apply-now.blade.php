@section('bodyClass','')
<div>
    <!-- Page Header - Start
      ================================================== -->
    <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url('/assets/frontend/assets/images/backgrounds/page_header_bg_1.webp');">
        <div class="container">
            <h1 class="page_title text-white">Apply Now</h1>
            <ul class="breadcrumb_nav unordered_list justify-content-center">
                <li><a href="{{ route('frontend::home') }}">Home</a></li>
                <li class="active"><a href="#!">Apply</a></li>
            </ul>
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

    <section class="contact_section section_space bg-light">
        <div class="container">
            <div class="row justify-items-center">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="comment_form p-lg-5">
                        <div class="heading_block">
                            <h2 class="heading_text">
                               Registration Form
                            </h2>
                            <p class="heading_description mb-0">
                                Give us chance to serve and bring magic to your Finance.
                            </p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_name">Name<sup>*</sup></label>
                                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Carlo Castillo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input_title" for="input_email">Email<sup>*</sup></label>
                                        <input id="input_email" class="form-control" type="email" name="email" placeholder="alma.lawson@example.com" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="input_title" for="input_phone">Phone<sup>*</sup></label>
                                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="+88 (0) 101 0000 000" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="input_title" for="input_message">Cover Letter<sup>*</sup></label>
                                        <textarea id="input_message" class="form-control" name="message" placeholder="Write about your self..." required></textarea>
                                    </div>
                                    <button class="btn text-dark" type="submit">
                                        <span class="btn_label">Apply</span>
                                        <span class="btn_icon ml-10"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#012A2B" />
                          </svg></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
