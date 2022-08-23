@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Услуги компании "UIB Kazakhstan"</title>
        <meta name="description" content="Купить Товары и услуги в Алматы - цены, товары и услуги компании «UIB Kazakhstan»: +7 (777) 328-22-86 Директор"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы"/>


    @else

        <title>"UIB Kazakhstan" компаниясының қызметтері</title>
        <meta name="description" content="Алматыда қызметтер мен өнімдерді сатып алу- цены, «UIB Kazakhstan» компаниясының өнімдері мен қызметтері: +7 (777) 328-22-86 Директор"/>
        <meta name="keywords" content="жасыл карта, алматыда жасыл карта сақтандыру сатып алу, green card almaty, осаго, алматы шетелге сақтандыру"/>

    @endif


@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(/image/slider_.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.our_service') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li>{!! Lang::get('app.our_service') !!}</li>
                        </ol>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner area end -->


    <section id="main-container" class="main-container padt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/p10826648-strahovka-zelenaya-karta.html">
                        <div class="ts-case-box">
                            <div class="ts-case-image-wrapper">
                                <img class="img-fluid" src="/image/green_card.jpg" alt="">
                                <div class="ts-case-content">
                                    <div class="border-left-long">
                                        <span class="border-long"></span>
                                    </div>
                                    <h3 class="case-title">
                                        {!! Lang::get('app.service1') !!}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/p10826675-strany-uchastnits-dogovora.html">
                        <div class="ts-case-box">
                            <div class="ts-case-image-wrapper">
                                <img class="img-fluid" src="/image/green_card.jpg" alt="">
                                <div class="ts-case-content">
                                    <div class="border-left-long">
                                        <span class="border-long"></span>
                                    </div>
                                    <h3 class="case-title">
                                        {!! Lang::get('app.service2') !!}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/p45259524-strahovka-osago.html">
                        <div class="ts-case-box">
                            <div class="ts-case-image-wrapper">
                                <img class="img-fluid" src="/image/osago.jpg" alt="">
                                <div class="ts-case-content">
                                    <div class="border-left-long">
                                        <span class="border-long"></span>
                                    </div>
                                    <h3 class="case-title">
                                        {!! Lang::get('app.service3') !!}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gap-50"></div>
        </div>
    </section>

@endsection

