@extends('layouts.app')

@section('title', 'Favorit')

@section('content-header')
@endsection

@section('content')
    <!-- Breadcrumbs & Page title-->
    <section class="page-title breadcrumbs-wishlist">
        <h3 class="text-shirt">MY FAVORITE LIST</h3>
    </section>




    <section class="section-md bg-white text-center">
        <div class="shell shell-fluid-var-4">
            <div class="range range-50 range-xlg-0 range-lg-justify">
                <div class="cell-lg-9 cell-xs-12 cell-lg-container isotope-wrap">
                    <div class="row isotope-wrap">
                        <div class="col-lg-12">
                            <div class="row isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="Type 2">
                                    <div class="post post-var-1 post-custom-1">
                                        <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                            <div class="unit__left"><a href="#"><img
                                                        src="{{ asset('image/wishlist-01.jpeg') }}" /></a></div>
                                            <div class="unit__body">
                                                <div class="post-content">
                                                    <div class="post-content-wrap">
                                                        <div class="post-panel-between"><span
                                                                class="post-panel"><span>TRENDS</span>
                                                                <time datetime="2017-01-15">Juni 15, 2023</time></span><span
                                                                class="post-panel"><span
                                                                    class="basket mdi-heart"></span></span></div>
                                                        <h5><a href="#">Choosing
                                                                style trend: The
                                                                Downtown Appeal</a></h5>
                                                        <p>Some makeup techniques may seem easy to follow, but they show
                                                            great results...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="Type 1">
                                    <div class="post post-var-1 post-custom-1">
                                        <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                            <div class="unit__left"><a href="#"><img src="{{ asset('image/trend-2b.jpg') }}"
                                                        alt="" width="347" height="241" /></a></div>
                                            <div class="unit__body">
                                                <div class="post-content">
                                                    <div class="post-content-wrap">
                                                        <div class="post-panel-between"><span
                                                                class="post-panel"><span>TRENDS</span>
                                                                <time datetime="2017-01-15">Juni 15, 2023</time></span><span
                                                                class="post-panel"><span
                                                                    class="basket mdi-heart"></span></span></div>
                                                        <h5><a href="#">Choosing
                                                                style trend: The
                                                                vacation state of mind</a></h5>
                                                        <p>Some makeup techniques may seem easy to follow, but they show
                                                            great results...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="Type 4">
                                    <div class="post post-var-1 post-custom-1">
                                        <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                            <div class="unit__left"><a href="#"><img src="{{ asset('image/trend-2c.jpg') }}"
                                                        alt="" width="347" height="241" /></a></div>
                                            <div class="unit__body">
                                                <div class="post-content">
                                                    <div class="post-content-wrap">
                                                        <div class="post-panel-between"><span
                                                                class="post-panel"><span>TRENDS</span>
                                                                <time datetime="2017-01-15">Juni 15, 2023</time></span><span
                                                                class="post-panel"><span
                                                                    class="basket mdi-heart"></span></span></div>
                                                        <h5><a href="#">Choosing
                                                                style trend: The
                                                                Ultimate Guide</a></h5>
                                                        <p>Whether you're easing yourself into makeup or would simply like
                                                            to try...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
