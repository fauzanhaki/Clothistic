<div class="rd-navbar-wrap">
    <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
        data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
        data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="80px" data-lg-stick-up-offset="46px"
        data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
        <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
        </div>
        <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="brand"><a class="brand-name" href="/">
                        <h3>CLOTHISTIC</h3>
                    </a></div>

            </div>
            <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                        <li><a href="{{ route('product.allTrend') }}">trends</a>
                            <ul class="rd-navbar-dropdown">
                                <?php $listtrends = App\Models\Category::where('is_trend', true)->get(); ?>
                                @forelse ($listtrends as $item)
                                    <li>
                                        <a href="{{ route('product.listTrend', $item->id) }}">{{ $item->name }}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        <li><a href="{{ route('product.allOutfit') }}">Outfit</a>
                            <ul class="rd-navbar-dropdown">
                                <?php $listtrends = App\Models\Category::where('is_trend', false)->get(); ?>
                                @forelse ($listtrends as $item)
                                    <li>
                                        <a href="{{ route('product.listOutfit', $item->id) }}">{{ $item->name }}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        <li><a href="{{ route('about-today') }}">About today</a>
                            <!-- <li><a href="#">Pages</a> -->
                            <!-- RD Navbar Megamenu-->
                            <!-- <ul class="rd-navbar-megamenu"> -->
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li><a href="love.html"></a>
                        </li>
                        <li>


                            <div class="rd-navbar-aside-social">
                                <!--RD Navbar Search-->
                                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle"
                                        data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                                    <form class="rd-search" action="search-results.html"
                                        data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label form-label"
                                                for="rd-navbar-search-form-input">Search...</label>
                                            <input class="rd-navbar-search-form-input form-input"
                                                id="rd-navbar-search-form-input" type="text" name="s"
                                                autocomplete="off" />
                                            <div class="rd-search-results-live" id="rd-search-results-live">
                                            </div>
                                        </div>
                                        <button class="rd-search-form-submit fl-budicons-launch-search81"></button>
                                    </form>
                                </div><a class="basket mdi-heart" href="{{ route('favorit') }}"></a>
                                @auth
                                    <a class="basket mdi-account-outline" href="{{ route('profile.edit') }}"
                                        id="form-open"></a>
                                @else
                                    <a class="basket mdi-account-outline" href="{{ route('login') }}" id="form-open"></a>
                                @endauth
                                <i class=""></i>
                            </div>
                </div>
            </div>
    </nav>
</div>
