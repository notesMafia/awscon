<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Title  -->
    <title>@yield('head_title', config('settings.site_title'))</title>

    <meta name="title" content="@yield('head_title', config('settings.meta_title'))" />
    <meta name="description" content="@yield('head_description', config('settings.meta_description'))" />
    <meta name="author" content="@yield('head_author','')">
    <meta name="keywords" content="@yield('head_keywords', config('settings.meta_tags'))" />
    <link rel="canonical" href="@yield('head_conical_url', request()->url())">

    <meta property="og:type" content="@yield('head_type','article')" />
    <meta property="og:title" content="@yield('head_title',  config('settings.meta_title'))" />
    <meta property="og:description" content="@yield('head_description', config('settings.meta_description'))" />
    <meta property="og:image" content="@yield('head_image',asset(config('settings.meta_os_image')))" />
    <meta property="og:url" content="@yield('head_url', request()->url())" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="1024" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@yield('head_image',asset(config('settings.meta_os_image')))">
    <link rel="image_src" href="@yield('head_image',asset(config('settings.meta_os_image')))">

    <link rel="icon" href="{{asset(config('settings.site_favicon'))}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset(config('settings.site_favicon'))}}"/>
    <link rel="shortcut icon" href="{{asset(config('settings.site_favicon'))}}" type="image/x-icon"/>

{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/bootstrap.min.css">

    <!-- Icon - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/fontawesome.css">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/animate.min.css">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/swiper-bundle.min.css">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/magnific-popup.min.css">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/assets/css/odometer.min.css">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/assets/css/style.css') }}">


    <!-- FilePond -->
    <link href="{{asset('assets/filepond/dist/filepond.css')}}" rel="stylesheet" />
    <!-- FilePond Ends -->


    @stack('head')

    <style>
        .btn-op:hover{
            color: black!important;
        }
    </style>

</head>

<body class="@yield('bodyClass','online_banking')">

<!-- Body Wrap - Start -->
<div class="page_wrapper">

    <!-- Back To Top - Start -->
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
    <!-- Back To Top - End -->

    @include('_particles.navbar')

    <!-- Main Body - Start
    ================================================== -->
    <main class="page_content">
        @yield('content',$slot ??'')
    </main>
    <!-- Main Body - End
    ================================================== -->

    @include('_particles.footer')

</div>
<!-- Body Wrap - End -->

<!-- Fraimwork - Jquery Include -->
<script src="/assets/frontend/assets/js/jquery.min.js"></script>
<script src="/assets/frontend/assets/js/popper.min.js"></script>
<script src="/assets/frontend/assets/js/bootstrap.min.js"></script>
<script src="/assets/frontend/assets/js/bootstrap-dropdown-ml-hack.min.js"></script>

<!-- Carousel - Jquery Include -->
<script src="/assets/frontend/assets/js/swiper-bundle.min.js"></script>

<!-- Animations - jquery include -->
<script src="/assets/frontend/assets/js/parallaxie.js"></script>
<script src="/assets/frontend/assets/js/parallax-scroll.js"></script>
<script src="/assets/frontend/assets/js/wow.min.js"></script>

<!-- Video & Image Popup - Jquery Include -->
<script src="/assets/frontend/assets/js/magnific-popup.min.js"></script>

<!-- Counter - Jquery Include -->
<script src="/assets/frontend/assets/js/appear.min.js"></script>
<script src="/assets/frontend/assets/js/odometer.min.js"></script>

<!-- Content Auto Sliding - jquery include -->
<script src="/assets/frontend/assets/js/ticker.min.js"></script>

<!-- Custom - Jquery Include -->
<script src="/assets/frontend/assets/js/main.js"></script>

<!--For Filepond -->
<script src="{{asset('assets/filepond/dist/filepond.js')}}"></script>
<script src="{{asset('assets/filepond/dist/filepond-plugin-file-validate-type.js')}}"></script>
<!--For Filepond Ends-->


@stack('scripts')

@if(config('settings.prevent_clicks'))
    <script>
        /* For Prevention of clicks */
        document.addEventListener("contextmenu", (event) => {
            event.preventDefault();
        });
    </script>
@endif

</body>

</html>
