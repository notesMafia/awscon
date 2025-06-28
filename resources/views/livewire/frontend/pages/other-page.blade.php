@section('head_title',$metaData['title'] ??'')
@section('head_description',$metaData['description'] ??'')
@section('head_image',$metaData['os_image'] ??'')
@section('head_keywords',$metaData['keywords'] ??'')

<div>
    <!-- Page Header - Start
         ================================================== -->
    <section class="page_header text-center  section_decoration overflow-hidden border-bottom border-dark"
             style="background-image: url('/assets/frontend/assets/images/backgrounds/page_header_bg_1.webp');"
             wire:ignore
    >
        <div class="container">
            <h1 class="page_title text-white">{{ $themePage->name ??'' }}</h1>
{{--            <ul class="breadcrumb_nav unordered_list justify-content-center">--}}
{{--                <li><a href="{{ route('frontend::home') }}">Home</a></li>--}}
{{--                <li class="active"><a href="#!">{{ $themePage->name ??'' }}</a></li>--}}
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

    <!-- Career Section - Start
 ================================================== -->
    <section class="career_section section_space bg-light">
        <div class="container text-dark">
            {!! $themePage->content ??'' !!}
        </div>
    </section>

</div>
