<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 text-lg-left text-md-center">
                <ul class="top-menu unstyled ">
                    <li><a>{!! Lang::get('app.address') !!}</a></li>
                </ul>
            </div><!--/ Top info end -->

            <div class="col-lg-5 col-md-12 text-lg-right text-md-center">
                <ul class="top-social">
                    <li>
                        <a href="tel:+77773282286">
                            +7 (777) 328-22-86
                        </a>
                        <a href="tel:+77778010206">
                            +7 (777) 801-02-06
                        </a>
                        <a class="lang-change @if($lang == 'ru') lang-active @endif" href="{{\App\Http\Helpers::setSessionLang('ru',$request)}}">
                            РУС
                        </a>
                        <a class="lang-change @if($lang == 'kz') lang-active @endif" href="{{\App\Http\Helpers::setSessionLang('kk',$request)}}">
                            ҚАЗ
                        </a>
                    </li>
                </ul>
            </div><!--/ Top social end -->
        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</div><!--/ Topbar end -->

<!-- Header start -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="logo-area clearfix">
                <div class="col-lg-2 col-md-12 logo">
                    <a href="/">
                        <img src="/image/logo.png" alt="">
                    </a>
                </div><!-- logo end -->

                <div class="col-lg-9 col-md-12 pull-right ml-lg-auto">
                    <ul class="top-info unstyled">
                        <li>
                            <span class="info-icon"><i class="icon icon-phone3"></i></span>
                            <div class="info-wrapper">
                                <p class="info-title">Алматы</p>
                                <a class="info-subtitle" href="tel:+77272739263">+7(727)273-92-63</a>
                            </div>
                        </li>
                        <li>
                            <span class="info-icon"><i class="icon icon-phone3"></i></span>
                            <div class="info-wrapper">
                                <p class="info-title">Алматы</p>
                                <a class="info-subtitle" href="tel:+77075591955">+7(707)559-19-55</a>
                            </div>
                        </li>
                        <li class="last">
                            <span class="info-icon"><i class="icon icon-phone3"></i></span>
                            <div class="info-wrapper">
                                <p class="info-title">Почта</p>
                                <a style="color: #565656;" class="info-subtitle" href="mailto:uib_kz@mail.ru">uib_kz@mail.ru</a>
                            </div>
                        </li>
                        <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="mailto:uib_kz@mail.ru">uib_kz@mail.ru</a>
                        </li>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
            </div><!-- logo area end -->

        </div><!-- Row end -->
    </div><!-- Container end -->

    <nav class="site-navigation navigation navdown navbar navbar-expand-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-nav-inner pull-left">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="/image/logo.png" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">МЕНЮ</span>
                        </button>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li @if($menu == 'main') class="active" @endif>
                                    <a href="/">{!! Lang::get('app.homepage') !!}</a>
                                </li>
                                <li @if($menu == 'product') class="active" @endif>
                                    <a href="/product_list">{!! Lang::get('app.our_service') !!}</a>
                                </li>
                                <li @if($menu == 'about') class="active" @endif>
                                    <a href="/about_us">{!! Lang::get('app.about_company') !!}</a>
                                </li>
                                <li @if($menu == 'contact') class="active" @endif>
                                    <a href="/contacts">{!! Lang::get('app.contact') !!}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search-block" style="display: none;">
                <input type="text" class="form-control" placeholder="Type what you want and enter">
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div><!--/ Container end -->

    </nav><!--/ Navigation end -->
</header><!--/ Header end -->



