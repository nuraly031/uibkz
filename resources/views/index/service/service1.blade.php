@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Страховка Зеленая карта: продажа, цена в Алматы.  от "UIB Kazakhstan" - 10826648</title>
        <meta name="description" content="Страховка Зеленая карта. Подробная информация о товаре/услуге и поставщике. Цена и условия поставки"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы, страховка для грузовых машин, страховка зеленая карта казахстан, green card kazakhstan"/>

    @else


        <title>Жасыл карталарды сақтандыру: сату, Алматыдағы баға.  "UIB Kazakhstan"-нан- 10826648</title>
        <meta name="description" content="Жасыл карталарды сақтандыру. Өнім / қызмет және өнім туралы толық ақпарат. Баға мен жеткізу шарттары "/>
        <meta name="keywords" content=" жасыл карта, Алматы қаласынан жасыл карта сатып алу, green card almaty, осаго, шетелге сақтандыру Алматы, жүк көліктерін сақтандыру, Қазақстан жасыл картасы сақтандыру, green card kazakhstan"/>

    @endif

@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(images/banner/banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.service1') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li><a href="/product_list">{!! Lang::get('app.our_service') !!}</a></li>
                            <li>{!! Lang::get('app.service1') !!}</li>
                        </ol>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 no-padding">
                    @if($lang == 'ru')
                        <div class="service-content-desc">
                            <h3 class="column-title small">
                                Страховка Зеленая карта
                            </h3>
                            <p>
                                <strong><span style="color:#363535;font-size:18px;">ТОО Страховая брокерская компании “UIB Kazakhstan” эксклюзивный представитель в Казахстане без агентов посредников готово предложить полисы&nbsp;«Зеленая карта» лицам , выезжающим в страны участниц «Договора «о Зеленой карте »&nbsp;на автотранспортных средствах зарегистрированных в Республике Казахстан<br />. </span></strong>
                            </p>
                            <object data="/pdf/tariff.pdf?v=13" type="application/pdf" style="width: 100%; height: 700px">
                                <embed style="width: 100%; height: 700px" src="/pdf/tariff.pdf?v=13" type="application/pdf" />
                            </object>
                        </div>
                    @else
                        <div class="service-content-desc">
                            <h3 class="column-title small">
                                Green Card сақтандыру
                            </h3>
                            <p>
                                <strong><span style="color:#363535;font-size:18px;">«UIB Қазақстан» Сақтандыру брокерлік компаниясы ЖШС Қазақстандағы делдалдардың агенттерінсіз эксклюзивті өкілі болып табылады. Қазақстан Республикасында тіркелген көлік құралдарында «Жасыл картасына келісім келген» тараптардың елдеріне баратын адамдарға Green Card полисін ұсынуға дайын.<br />. </span></strong>
                            </p>
                            <object data="/pdf/tariff.pdf?v=10" type="application/pdf" style="width: 100%; height: 700px">
                                <embed style="width: 100%; height: 700px" src="/pdf/tariff.pdf?v=10" type="application/pdf" />
                            </object>
                        </div>
                    @endif

                </div> <!-- Col End -->
            </div> <!-- Row End -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection

