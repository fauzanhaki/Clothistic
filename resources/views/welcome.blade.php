@extends('layouts.app')

@section('title', 'Home')

@section('content-header')
    <div class="content">
        <h2>Stay Ahead For Fashion Trends</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipa quasi nobis molestias ipsa. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Qui pariatur deleniti doloremque ab debitis libero. Repellendus
            incidunt cum atque odio deserunt molestiae illo ea, iste nobis, facere sed asperiores error.</p>
    </div>
@endsection

@section('content')
    <!-- Swiper variant 2-->
    <section class="swiper-default swiper-var-2 swiper-custom-nav text-left">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-custom" data-autoplay="false" data-simulate-touch="false"
            data-loop="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-overlay-dark slide-position-var-1"
                    data-slide-bg="{{ asset('image/2orang.jpg') }}" data-slide-title="Title text"></div>
                <div class="swiper-slide-caption">
                    <div class="shell-fluid shell-fluid-var-2">
                        <div class="range range-center range-sm-right">
                            <div class="cell-sm-6 cell-xs-11" data-caption-animate="fadeInUp" data-caption-delay="100">
                                <div class="box-content">
                                    <h1 class="text-secondary-dark"><span class="letter-big">P</span><span
                                            class="letter-small">opular</span></h1>
                                    <h3 class="text-secondary-dark title-decor decor-left decor-secondary-dark">
                                        Lifestyle Tips</h3>
                                    <h5>A selection of health and beauty articles</h5><a
                                        class="button button-lg button-white-2 button-effect-ujarak"
                                        href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col offset-30">
            <div class="post-video post-video-var-1 context-dark">
                <div class="post-video__image"><img src="image/trend-2f.jpg" alt="" width="1119" height="593" />
                </div>
                <div class="post-video__body"><a data-lightbox="iframe"></a>
                    <div class="post-video__caption">
                        <h2 class="konten-home">STAY AHEAD FROM FASHION</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-md bg-white text-center">
        <div class="range range-home ">
            <div class="cell-lg-9 cell-xs-12 cell-lg-container isotope-wrap">
                <div class="row isotope-wrap">
                    @forelse ($products as $product)
                        <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="Type 1">
                            <div class="post post-var-1 post-custom-1">
                                <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                    <div class="unit__left"><a href="#"><img src="{{ 'storage/' . $product->image }}"
                                                alt="" width="347" height="241" /></a></div>
                                    <div class="unit__body">
                                        <div class="post-content">
                                            <div class="post-content-wrap">
                                                <div class="post-tags-wrap"><a class="post-tags"
                                                        href="#">Beauty</a><span>,</span> <a class="post-tags"
                                                        href="#">Hair</a>
                                                </div>
                                                <div class="post-panel-between"><span class="post-panel"><span>TRENDS</span>
                                                        <time datetime="2017-01-15">Juni 15, 2023</time></span><span
                                                        class="post-panel"><span class="basket mdi-heart"></span></span>
                                                </div>
                                                <h5><a href="#">{{ $product->name }}</a></h5>
                                                <p>Some makeup techniques may seem easy to follow, but they show great
                                                    results...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
