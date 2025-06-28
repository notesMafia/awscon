@section('head_title',$s)

<div>
    <!--Breadcrumb Start-->
    <div class="pq-breadcrumb pq-bg-dark pq-bg-img-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Search for "{{ $s ??'' }}"</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb align-items-center">
                                <li class="breadcrumb-item"><a href="{{ route('frontend::home') }}"><i
                                            class="fa fa-home me-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Search</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb End-->

    <!--Left Sidebar Start-->
    <section class="left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pq-blog pq-blog-col-1">
                        <div class="row">
                            @forelse($data as $item)
                                <div class="col-lg-6">
                                    <div class="pq-blog-post">
                                        <div class="pq-post-media">
                                            <img loading="lazy" src="{{ $item->thumbnailUrl() }}" alt="{{ $item->title ??'' }}">
                                            <div class="pq-post-date">
                                                <a href="#">
                                                    <span>{{ $item->displayPostDate('d') }}</span>{{ $item->displayPostDate('M') }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pq-blog-contain">
                                            <div class="pq-post-meta">
                                                <ul>
                                                    <li class="pq-post-author"><i class="fa fa-user"></i>{{ $item->user?->fullName() ??'Admin' }}</li>
                                                    <li class="pq-post-meta"><a href="#"><i class="fa fa-calendar"></i>{{ $item->displayPostDate('F Y') }}</a></li>
                                                    @if($item->primaryCategory()->exists())
                                                        <li class="pq-post-tag">
                                                            <a href="{{ $item->primaryCategory->slugUrl() }}">
                                                                <i class="fa fa-tag"></i>{{ $item->primaryCategory->name ??'--' }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <h5 class="pq-blog-title"><a href="{{ $item->slugUrl() }}">{{ $item->title ??'' }}</a></h5>
                                            <p>{{ $item->desc ??'' }}</p>
                                            <div class="pq-btn-container">
                                                <a href="{{ $item->slugUrl() }}" class="pq-button">
                                                    <div class="pq-button-block">
                                                        <span class="pq-button-text">Read More</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12">
                                    <p class="text-center my-5">
                                        No posts
                                    </p>
                                </div>
                            @endforelse
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Left Sidebar End-->
</div>
