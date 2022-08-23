@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>"UIB Kazakhstan" - контакты, товары, услуги, цены</title>
        <meta name="description" content="Контактная информация, товары и услуги компании «UIB Kazakhstan»"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы, страховка для грузовых машин, страховка зеленая карта казахстан, green card kazakhstan"/>

    @else

        <title>"UIB Kazakhstan" - байланыстар, өнімдер, қызметтер, бағалары</title>
        <meta name="description" content=" «UIB Kazakhstan» компаниясының байланыс ақпараты, өнімдері мен қызметтері"/>
        <meta name="keywords" content="жасыл карта, алматыда жасыл карта сатып алу, green card almaty, осаго, шетелге сақтандыру алматы, жүк көліктеріне сақтандыру, қазақстан жасыл карта сақтандыруы, green card kazakhstan"/>

    @endif

@endsection

@section('content')


    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            @include('index.index.slider_'.$lang)
        </div>

        <a class="left carousel-control carousel-item-left" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control carousel-item-right" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>

    <section class="ts-features-round no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ts-feature-box-round bg" style="background-image: url(/images/features/feature1.jpg);">
                    <a href="/p10826675-strany-uchastnits-dogovora.html">
                        <div class="feature-info">
                            <i class="icon icon-community"></i>
                            <h3 class="feature-title">{!! Lang::get('app.service2') !!}</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 ts-feature-box-round highlight bg" style="background-image: url(/images/features/feature2.jpg);">
                    <a href="/p10826648-strahovka-zelenaya-karta.html">
                        <div class="feature-info">
                            <i class="icon icon-community"></i>
                            <h3 class="feature-title">{!! Lang::get('app.service1') !!}</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 ts-feature-box-round bg" style="background-image: url(/image/osago.jpg);">
                    <a href="/p45259524-strahovka-osago.html">
                        <div class="feature-info">
                            <i class="icon icon-community"></i>
                            <h3 class="feature-title">{!! Lang::get('app.service3') !!}</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ts-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h2>{!! Lang::get('app.service4') !!}</h2>
                    <p class="lead">
                        {!! Lang::get('app.short_desc') !!}
                    </p>
                    <p>
                        <a class="btn btn-primary" href="/a22313-chto-takoe-zelenaya.html">{!! Lang::get('app.read_more') !!}</a>
                    </p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="intro-details">
                        <div class="border-left-long">
                            <span class="border-long"></span>
                        </div>
                        <h2>{!! Lang::get('app.about_company') !!}</h2>

                        @if($lang == 'ru')

                            <p class="lead">
                                Справка о государственной перерегистрации юридического лица от 25 октября 2019 г.
                            </p>
                            <p class="lead">
                                Лицензия на право осуществления деятельности страхового брокера №2.3.32 от 23.01.2019 г., выданная Национальным Банком Республики Казахстан.
                            </p>
                            <p>
                                <a class="btn btn-primary" href="/about_us">Подробнее</a>
                            </p>

                        @else

                            <p class="lead">
                                2019 жылғы 25 қазандағы заңды тұлғаны мемлекеттік қайта тіркеу туралы куәлік
                            </p>
                            <p class="lead">
                                Сақтандыру брокерінің қызметін жүзеге асыру құқығына Қазақстан Республикасының Ұлттық Банкімен 2019 жылғы 23 қаңтарда берілген № 2.3.32 лицензия.
                            </p>
                            <p>
                                <a class="btn btn-primary" href="/about_us">Толығырақ</a>
                            </p>

                        @endif

                    </div>

                </div>
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature end -->

    <section id="ts-services" class="ts-services solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 data-title="Услуги" class="section-title-dash">{!! Lang::get('app.our_service') !!}<span>&nbsp;</span>
                    </h2>
                </div><!-- Col end -->
            </div><!--/ Title row end -->


            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <a href="/p10826648-strahovka-zelenaya-karta.html">
                        <div class="ts-service-overlay">
                            <div class="ts-image-wrapper">
                                <img class="img-fluid" src="/image/green_card.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title"><i class="icon icon-bus2"></i>{!! Lang::get('app.service1') !!}</h3>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div><!-- Col 1 end -->

                <div class="col-lg-4 col-md-12">
                    <a href="/p10826675-strany-uchastnits-dogovora.html">
                        <div class="ts-service-overlay">
                            <div class="ts-image-wrapper">
                                <img class="img-fluid" src="/image/green_card.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title"><i class="icon icon-bus2"></i>{!! Lang::get('app.service2') !!}</h3>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div><!-- Servic2 end -->
                    </a>
                </div><!-- Col 2 end -->

                <div class="col-lg-4 col-md-12">
                    <a href="/p45259524-strahovka-osago.html">
                        <div class="ts-service-overlay">
                            <div class="ts-image-wrapper">
                                <img class="img-fluid" src="/image/osago.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title"><i class="icon icon-family"></i>{!! Lang::get('app.service3') !!}</h3>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="ts-cta-area" class="ts-cta-area ts-cta-bg bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cta-img-box-left">
                        <div class="cta-img-content">
                            <img class="pull-left" src="/images/icon-image/cta-1.png" alt="">
                        </div>
                        <div class="cta-content text-white">
                            <h3 class="text-white">{!! Lang::get('app.service4') !!}</h3>
                            <p>{!! Lang::get('app.short_desc') !!}</p>
                            <p>
                                <a class="btn btn-dark" href="/a22313-chto-takoe-zelenaya.html">{!! Lang::get('app.read_more') !!}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 ml-lg-auto">
                    <div class="cta-img-box-right text-white">
                        <div class="cta-img-content">
                            <img class="pull-left" src="/images/icon-image/cta-2.png" alt="">
                        </div>
                        <div class="cta-content last">
                            <h3>{!! Lang::get('app.contact') !!}</h3>
                            <div class="toll-free-cta">
                                <h3>+7(727)273-92-63</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('index.index.advantage_'.$lang)


@endsection

