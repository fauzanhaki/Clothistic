@extends('layouts.app')

@section('title', 'Outfit')

@section('content')
    <!-- Breadcrumbs & Page title-->
    <section class="page-title breadcrumbs-beauty">
    </section>

    <section class="section-md bg-white text-center">
        <div class="shell shell-fluid-var-4">
            <div class="range range-50 range-xlg-0 range-lg-justify">
                <div class="cell-lg-9 cell-xs-12 cell-lg-container isotope-wrap">
                    <div class="row isotope-wrap">
                        <!-- Isotope Filters-->
                        <div class="col-lg-12">
                            <div class="panel-top-switch-filters">
                                <div
                                    class="isotope-filters isotope-filters-horizontal tabs-custom tabs-horizontal tabs-corporate">
                                    <ul class="nav nav-custom nav-tabs">
                                        <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery"
                                                href="#">All</a></li>
                                        @foreach ($categories as $category)
                                            <li><a data-isotope-filter="{{ $category->name }}" data-isotope-group="gallery"
                                                    href="#">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                @forelse ($products as $product)
                                    <div class="col-md-4 col-sm-12 col-xs-12 isotope-item" data-filter="{{ $product->category->name }}">
                                        <div class="post post-var-1 post-custom-1">
                                            <div class="unit unit-spacing-0 unit-sm-horizontal unit-md-vertical">
                                                <div class="unit__left"><a href="#"><img
                                                            src="{{ asset('storage/' . $product->image) }}" /></a></div>
                                                <div class="unit__body">
                                                    <div class="post-content">
                                                        <div class="post-content-wrap">
                                                            <div class="post-panel-between"><span
                                                                    class="post-panel"><span>TRENDS</span>
                                                                    <time datetime="2017-01-15">Juni 15,
                                                                        2023</time></span><span class="post-panel"><span
                                                                        class="basket mdi-heart"
                                                                        id="lo"></span></span></div>
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
                    <div class="col-lg-12 offset-top-30">
                        <div class="post-video post-video-var-1 context-dark">
                            <div class="post-video__image"><img src="{{ asset('image/trend-2f.jpg') }}" alt=""
                                    width="1119" height="593" />
                            </div>
                            <div class="post-video__body"><a class="link-control post-video__control" data-lightbox="iframe"
                                    href="https://vimeo.com/72427602"><span class="link-control__inner"></span></a>
                                <div class="post-video__caption">
                                    <h3>Ashley Graham’s Guide To Choosing the Proper Lipstick</h3>
                                    <h6>Let our makeup experts show you how it's done.</h6>
                                </div>
                            </div>
                        </div><a class="button button-lg button-width-220 btn-anis button-gray-1" href="#">More</a>
                    </div>
                </div>
            </div>
    </section>
@endsection
