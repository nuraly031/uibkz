@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Страны участниц «Договора «о Зеленой карте » : продажа, цена в Алматы.  от "UIB Kazakhstan" - 10826675</title>
        <meta name="description" content="Страны участниц «Договора «о Зеленой карте » . Подробная информация о товаре/услуге и поставщике. Цена и условия поставки"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы, страховка для грузовых машин, страховка зеленая карта казахстан, green card kazakhstan"/>

    @else

        <title> «Жасыл карта туралы келісімге» қатысушы елдер: сату, Алматыдағы баға. «UIB Kazakhstan» компаниясынан" - 10826675</title>
        <meta name="description" content=" «Жасыл карта туралы келісімге» қатысушы елдер. Өнім / қызмет және өнім туралы толық ақпарат. Баға мен жеткізу шарттары "/>
        <meta name="keywords" content=" жасыл карта, Алматы қаласында жасыл карта сатып алу, green card almaty, осаго, шетелге сақтандыру Алматы, жүк көліктерін сақтандыру, Қазақстан жасыл картасын сақтандыру, green card kazakhstan"/>

    @endif

@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(images/banner/banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.service2') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li><a href="/product_list">{!! Lang::get('app.our_service') !!}</a></li>
                            <li>{!! Lang::get('app.service2') !!}</li>
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
                    <div class="service-content-desc">
                        <h3 class="column-title small">{!! Lang::get('app.service2') !!}</h3>

                        <div class="b-content__body b-user-content" >

                            @if($lang == 'ru')
                                <p>Сертификат "Зеленая карта" действительно на все страны приведенные ниже.</p>
                            @else
                                <p>Green Card сертификаты төменде көрсетілген барлық елдер үшін жарамды.</p>
                            @endif

                            <table border="0">

                                <tbody><tr>
                                    <td>Австрия</td>
                                </tr>
                                <tr>
                                    <td>Албания</td>
                                </tr>
                                <tr>
                                    <td>Андорра</td>
                                </tr>
                                <tr>
                                    <td>Азербайджан</td>
                                </tr>
                                <tr>
                                    <td>Белоруссия</td>
                                </tr>
                                <tr>
                                    <td>Бельгия</td>
                                </tr>
                                <tr>
                                    <td>Болгария</td>
                                </tr>
                                <tr>
                                    <td>Босния и Герцеговина</td>
                                </tr>
                                <tr>
                                    <td>Великобритания</td>
                                </tr>
                                <tr>
                                    <td>Венгрия</td>
                                </tr>
                                <tr>
                                    <td>Германия</td>
                                </tr>
                                <tr>
                                    <td>Греция</td>
                                </tr>
                                <tr>
                                    <td>Дания</td>
                                </tr>
                                <tr>
                                    <td>Израиль</td>
                                </tr>
                                <tr>
                                    <td>Иран</td>
                                </tr>
                                <tr>
                                    <td>Ирландия</td>
                                </tr>
                                <tr>
                                    <td>Исландия</td>
                                </tr>
                                <tr>
                                    <td>Испания</td>
                                </tr>
                                <tr>
                                    <td>Италия</td>
                                </tr>
                                <tr>
                                    <td>Кипр</td>
                                </tr>
                                <tr>
                                    <td>Латвия</td>
                                </tr>
                                <tr>
                                    <td>Литва</td>
                                </tr>
                                <tr>
                                    <td>Люксембург</td>
                                </tr>
                                <tr>
                                    <td>Мальта</td>
                                </tr>
                                <tr>
                                    <td>Марокко</td>
                                </tr>
                                <tr>
                                    <td>Македония</td>
                                </tr>
                                <tr>
                                    <td>Молдавия</td>
                                </tr>
                                <tr>
                                    <td>Нидерланды</td>
                                </tr>
                                <tr>
                                    <td>Норвегия</td>
                                </tr>
                                <tr>
                                    <td>Польша</td>
                                </tr>
                                <tr>
                                    <td>Португалия</td>
                                </tr>
                                <tr>
                                    <td>Румыния</td>
                                </tr>
                                <tr>
                                    <td>Сербия</td>
                                </tr>
                                <tr>
                                    <td>Словакия</td>
                                </tr>
                                <tr>
                                    <td>Словения</td>
                                </tr>
                                <tr>
                                    <td>Тунис</td>
                                </tr>
                                <tr>
                                    <td>Турция</td>
                                </tr>
                                <tr>
                                    <td>Украина</td>
                                </tr>
                                <tr>
                                    <td>Финляндия</td>
                                </tr>
                                <tr>
                                    <td>Франция</td>
                                </tr>
                                <tr>
                                    <td>Хорватия</td>
                                </tr>
                                <tr>
                                    <td>Чехия</td>
                                </tr>
                                <tr>
                                    <td>Швейцария</td>
                                </tr>
                                <tr>
                                    <td>Швеция</td>
                                </tr>
                                <tr>
                                    <td>Эстония</td>
                                </tr>
                                <tr>
                                    <td>Черногория</td>
                                </tr>

                                </tbody></table>
                            <p><span style="font-size:12.0pt"></span></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                        </div>

                    </div> <!-- Content End -->
                </div> <!-- Col End -->
            </div> <!-- Row End -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection

