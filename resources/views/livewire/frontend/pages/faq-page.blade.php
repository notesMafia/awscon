@section('head_title',"FAQ's")
<div>
    <!-- Page Header - Start
      ================================================== -->
    <section class="page_header text-center section_decoration overflow-hidden border-bottom border-dark"
             style="background-image: url('/assets/frontend/assets/images/backgrounds/page_header_bg_1.webp');"
    >
        <div class="container">
            <h1 class="page_title text-white">FAQ's</h1>
{{--            <ul class="breadcrumb_nav unordered_list justify-content-center">--}}
{{--                <li><a href="{{ route('frontend::home') }}">Home</a></li>--}}
{{--                <li class="active"><a href="#!">FAQ's</a></li>--}}
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
    @include('_particles.frontend.home.faq-section')
{{--    <section class="faq_section section_decoration overflow-hidden bg-light section_space">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="accordion pb-5" id="faq_accordion">--}}
{{--                        <div class="accordion-item">--}}
{{--                            <div class="accordion-header">--}}
{{--                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true" aria-controls="collapse_one">--}}
{{--                                    What is a Merchant Cash Advance MCA?--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p class="m-0">--}}
{{--                                        A MERCHANT CASH ADVANCE (MCA) is a fast, flexible funding solution where your business gets upfront cash in exchange for a percentage of future sales. Think of it as turning tomorrow’s revenue into today’s opportunity—no loans, no hassle, just growth on your terms.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="accordion-item">--}}
{{--                            <div class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">--}}
{{--                                    Are you a bank?--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p class="m-0">--}}
{{--                                        No, we are not a bank.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="accordion-item">--}}
{{--                            <div class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false" aria-controls="collapse_three">--}}
{{--                                    Whats the rate?--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p class="m-0">--}}
{{--                                        Great questions!  We don’t have a traditional rate, but we are purchasing your business’ future sales at a discount.  That purchase price is customized to each individual business; we look at your industry, time in business, location and monthly revenue.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="accordion-item">--}}
{{--                            <div class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false" aria-controls="collapse_four">--}}
{{--                                    Can I payout anytime?--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    <p class="m-0">--}}
{{--                                        Yes, you can payout anytime without penalties.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

</div>


@push('head')
    <style>
        .accordion-item{
            border-bottom: 0.025em dotted var(--bs-secondary);
        }
        .accordion-item .accordion-button{
            color:var(--bs-primary);
            font-size: 24px;
            font-family: var(--bs-heading-font-family), sans-serif;
        }
        .accordion-item{
            color: white;
        }
    </style>
@endpush
