<!--Blog Start-->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-section pq-style-1 text-center">
                    <span class="pq-section-sub-title"># our blog</span>
                    <h5 class="pq-section-title" id="update" data-high_text="Update" data-title_text="Latest Blog Update" data-rough_color="#fd4a18" data-rough_type="underline">Latest Blog Update</h5>
                    <p class="pq-section-description">
                        Stay up-to-date with our latest blog posts, featuring fresh insights, trends, and expert advice.
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                    @foreach(Theme::getRecentPostsByLimit() as $post)
                        <div class="item">
                            <div class="pq-blog-post">
                                <div class="pq-post-media">
                                    <img src="{{ $post->thumbnailUrl() }}" alt="blog-img">
                                    <div class="pq-post-date">
                                        <a href="{{ $post->slugUrl() }}"><span>{{ $post->displayPostDate('d') }}</span>{{ $post->displayPostDate('m') }}</a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author"><i class="fa fa-user"></i>{{ $post->user?->fullName() ??'Admin' }}</li>
                                            <li class="pq-post-meta"><a href="{{ $post->slugUrl() }}"><i class="fa fa-calendar"></i>{{ $post->displayPostDate('F Y') }}</a></li>
                                            @if($post->primaryCategory()->exists())
                                                <li class="pq-post-tag">
                                                    <a href="{{ $post->primaryCategory->slugUrl() }}">
                                                        <i class="fa fa-tag"></i>{{ $post->primaryCategory->name ??'--' }}
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title"><a href="{{ $post->slugUrl() }}">{{ $post->title ??'' }}</a></h5>
                                    <p>{{ Str::limit($post->desc ??'' ,50) }}</p>

                                    <a href="{{ $post->slugUrl() }}" class="pq-button pq-btn-outline">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">Read More</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog End-->
