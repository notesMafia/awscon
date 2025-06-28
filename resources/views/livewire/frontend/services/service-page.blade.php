@section('bodyClass','')

<div>
    <!-- Page Header - Start
 ================================================== -->
    <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url('/assets/frontend/assets/images/backgrounds/page_header_bg_1.webp');">
        <div class="container">
            <h1 class="page_title text-white">Industries</h1>
            <ul class="breadcrumb_nav unordered_list justify-content-center">
                <li><a href="{{ route('frontend::home') }}">Home</a></li>
                <li class="active"><a href="#!">Industries</a></li>
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

    <!-- Feature Section - Start
    ================================================== -->
    <section class="feature_section section_space">
        <div class="container">
            <div class="heading_block">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-5">
                        <h3 class="heading_text mb-0">
                            why our services are better than others?
                        </h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="heading_description mb-0">
                            Our services stand out because we prioritize quality and value above all  else. With a relentless customer satisfaction, innovative  solution.,
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="features_block bg-dark">
                        <div class="features_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_dollar_bag.svg" alt="Icon Dollar Bag">
                        </div>
                        <div class="features_content">
                            <h3 class="features_title text-white">
                                Funding & Investment
                            </h3>
                            <p class="mb-0">
                                At Synox we excel funding & investing, guiding strategic decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features_block bg-dark">
                        <div class="features_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_overlap.svg" alt="Icon Overlap">
                        </div>
                        <div class="features_content">
                            <h3 class="features_title text-white">
                                Capital Transparency
                            </h3>
                            <p class="mb-0">
                                We prioritize capital transparency Our commitment ensures clarity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features_block bg-dark">
                        <div class="features_icon">
                            <img src="/assets/frontend/assets/images/icons/icon_chart_bar.svg" alt="Icon Chart Bar">
                        </div>
                        <div class="features_content">
                            <h3 class="features_title text-white">
                                Secure Investment Plan
                            </h3>
                            <p class="mb-0">
                                Our Secure Investment Plan at Synox ensures stability and growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section - End
    ================================================== -->

    <!-- Service Section - Start
    ================================================== -->
    <section class="service_section bg-secondary section_decoration overflow-hidden">
        <div class="section_space pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="heading_block text-center text-white">
                            <h2 class="heading_text">
                                What we can help you with
                            </h2>
                            <p class="heading_description mb-0 text-muted">
                                We're here to assist with your financial goals. From investments to retirement planning, count on us for expert guidance
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_home.svg" alt="Icon Home">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Real Estate Investment Advisory
                                    </a>
                                </h3>
                                <p>
                                    Real Estate Investment Advisory cater to individuals and organizations.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_search.svg" alt="Icon Search">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Investment Research and Analysis
                                    </a>
                                </h3>
                                <p>
                                    Our Investment Research and Analysis team uncovers valuable insights.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_chart_bar_2.svg" alt="Icon Chart Bar">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Risk Management Solutions
                                    </a>
                                </h3>
                                <p>
                                    Our Risk Management Solutions ensure your investments are safeguarded.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_dollar_2.svg" alt="Icon Dollar">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Financial Planning and Consultation
                                    </a>
                                </h3>
                                <p>
                                    We offers personalized guidance to secure your financial future.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_man.svg" alt="Icon Man">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Retirement Planning Services
                                    </a>
                                </h3>
                                <p>
                                    Secure Your Future with Retirement Planning Services at Finto.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_block bg-dark">
                            <div class="service_icon" style="background-image: url('assets/images/icons/icon_rectangle.svg');">
                                <img src="/assets/frontend/assets/images/icons/icon_discount.svg" alt="Icon Man">
                            </div>
                            <div class="service_content">
                                <h3 class="service_title">
                                    <a href="service_details.html">
                                        Tax-Efficient Investing Solutions
                                    </a>
                                </h3>
                                <p>
                                    These solutions recognize the impact of taxes on investment performance.
                                </p>
                                <a class="btn-link" href="service_details.html">
                                    <span class="btn_label">Read More</span>
                                    <span class="btn_icon"><i class="fa-regular fa-arrow-up-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section_space pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-last">
                        <div class="heading_block text-white">
                            <h2 class="heading_text">
                                have a question look here
                            </h2>
                            <p class="heading_description mb-0 text-muted">
                                For quick answers, visit our FAQ section. Can't find what you need? Contact our support team.
                            </p>
                        </div>
                        <div class="accordion pb-5" id="faq_accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                                        What investment services do you offer?
                                    </button>
                                </div>
                                <div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="m-0 text-muted">
                                            We recommend a diversified portfolio tailored to your individual needs,  This may include stocks, bonds, mutual funds, ETFs, real estate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                                        What types of investments do you recommend?
                                    </button>
                                </div>
                                <div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="m-0 text-muted">
                                            We recommend a diversified portfolio tailored to your individual needs,  This may include stocks, bonds, mutual funds, ETFs, real estate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                                        How do I get started with investing?
                                    </button>
                                </div>
                                <div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="m-0 text-muted">
                                            We recommend a diversified portfolio tailored to your individual needs,  This may include stocks, bonds, mutual funds, ETFs, real estate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                                        What is your approach to risk management?
                                    </button>
                                </div>
                                <div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="m-0 text-muted">
                                            We recommend a diversified portfolio tailored to your individual needs,  This may include stocks, bonds, mutual funds, ETFs, real estate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq_man_image pe-lg-5 position-relative">
                            <div class="image_block">
                                <img src="/assets/frontend/assets/images/about/faq_about_image.webp" alt="Man Image">
                            </div>
                            <div class="decoration_item shape_dollar_1" data-parallax='{"y" : -80, "smoothness": 10}'>
                                <img src="/assets/frontend/assets/images/shapes/shape_dollar_1.webp" alt="Shape Dollar">
                            </div>
                            <div class="chart_image" data-parallax='{"y" : 80, "smoothness": 10}'>
                                <img src="/assets/frontend/assets/images/about/chart_image_1.webp" alt="Chart Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="decoration_item shape_lines_flow_2">
            <img src="/assets/frontend/assets/images/shapes/shape_nate_8.svg" alt="Shape Line Flow">
        </div>
        <div class="decoration_item shape_lines_flow_3">
            <img src="/assets/frontend/assets/images/shapes/shape_nate_10.svg" alt="Shape Line Flow">
        </div>
        <div class="decoration_item shape_lines_flow_4">
            <img src="/assets/frontend/assets/images/shapes/shape_nate_7.svg" alt="Shape Line Flow">
        </div>
        <div class="decoration_item shape_lines_flow_5">
            <img src="/assets/frontend/assets/images/shapes/shape_nate_11.svg" alt="Shape Line Flow">
        </div>
        <div class="decoration_item shape_dollar_4" data-parallax='{"y" : -100, "smoothness": 10}'>
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_2.webp" alt="Shape Dollar">
        </div>
        <div class="decoration_item shape_dollar_5" data-parallax='{"y" : 100, "smoothness": 10}'>
            <img src="/assets/frontend/assets/images/shapes/shape_dollar_3.webp" alt="Shape Dollar">
        </div>
    </section>
    <!-- Service Section - End
    ================================================== -->
</div>
