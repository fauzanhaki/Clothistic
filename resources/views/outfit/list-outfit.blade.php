@extends('layouts.app')

@section('title', 'List Outfit')

@section('content')
    <!-- Swiper variant 2-->
    <section class="swiper-default swiper-var-2 swiper-custom-nav text-left">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-custom" data-autoplay="false" data-simulate-touch="false"
            data-loop="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-overlay-dark slide-position-var-1"
                    data-slide-bg="{{ asset('storage/' . $category->image) }}" data-slide-title="Title text">
                    <div class="swiper-slide-caption">
                        <div class="shell-fluid shell-fluid-var-2">
                            <div class="range range-center range-sm-right">
                                <div class="cell-sm-6 cell-xs-11" data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <div class="box-content">
                                        <h1 class="text-secondary-dark"><span class="letter-big">P</span><span
                                                class="letter-small">opular</span></h1>
                                        <h3 class="text-secondary-dark title-decor decor-left decor-secondary-dark">
                                            Outfit {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper pagination-->
            <div class="swiper-button swiper-button-prev">
                <div class="preview">
                    <h3 class="title">Text</h3>
                </div>
            </div>
            <div class="swiper-button swiper-button-next">
                <div class="preview">
                    <h3 class="title">Text</h3>

                </div>
            </div>
        </div>
    </section>
    </section>
    <div class="line">
    </div>
    <section class="section-md bg-color text-center">
        <div class="shell shell-fluid-var-4">
            <div class="range range-50 range-xlg-0 range-lg-justify">
                <div class="cell-lg-9 cell-xs-12 cell-lg-container isotope-wrap">
                    <div class="row isotope-wrap">

                        <div class="col-lg-12">
                            <div class="row isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                @forelse ($products as $product)
                                    <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="Type 2">
                                        <div class="post post-var-1 post-custom-1">
                                            <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                                <div class="unit__left"><a href="#">
                                                        <img src="{{ asset('storage/' . $product->image) }}" /></a></div>
                                                <div class="unit__body">
                                                    <div class="post-content">
                                                        <div class="post-content-wrap">
                                                            <div class="post-panel-between"><span
                                                                    class="post-panel"><span>TRENDS</span>
                                                                    <time datetime="2017-01-15">Juni 15,
                                                                        2023</time></span><span class="post-panel"><span
                                                                        class="basket mdi-heart"></span></span></div>
                                                            <h5><a href="#">{{ $product->name }}</a></h5>
                                                            <p>Some makeup techniques may seem easy to follow, but they show
                                                                great results...</p>
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

                </div>
            </div>
    </section>
@endsection
