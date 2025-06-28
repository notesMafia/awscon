<header class="site_header header_layout_1">
    <div class="xb-header stricky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-5">
                    <div class="site_logo">
                        <a class="site_link" href="{{ route('frontend::home') }}">
                            <img src="{{ asset(config('settings.site_logo')) }}" alt="Site Logo White">
                            <img src="{{ asset(config('settings.site_logo_2')) }}" alt="Site Logo Black">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse justify-content-lg-center" id="main_menu_dropdown">
                            <ul class="main_menu_list unordered_list justify-content-center">
                                <li><a href="{{ route('frontend::faq') }}">FAQ's</a></li>
                                <li><a href="{{ route('frontend::about-us') }}">ABOUT US</a></li>
                                <li><a href="{{ route('frontend::contact-us') }}">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-5">
                    <ul class="btns_group ob-header-btn p-0 unordered_list justify-content-end">
                        <li>
                            <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-bars"></i>
                            </button>
                        </li>
                        <li>
                            <a class="btn btn-outline-light" href="{{ route('frontend::apply-now')}}">
                                <span class="btn_icon">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <span class="btn_label "> Request a Call</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
