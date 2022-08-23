@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Страховка ОСАГО: продажа, цена в Алматы.  от "UIB Kazakhstan" - 45259524</title>
        <meta name="description" content="Страховка ОСАГО. Подробная информация о товаре/услуге и поставщике. Цена и условия поставки"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы, страховка для грузовых машин, страховка зеленая карта казахстан, green card kazakhstan"/>

    @else

        <title> ОСАГО сақтандыру: Алматыда сату бағасы. «UIB Kazakhstan» компаниясынан" - 45259524</title>
        <meta name="description" content="ОСАГО сақтандыру. Өнім / қызмет және өнім туралы толық ақпарат. Баға мен жеткізу шарттары "/>
        <meta name="keywords" content=" жасыл карта, Алматы қаласында жасыл карта сатып алу, green card almaty, осаго, жасыл карта, Алматы қаласында жасыл карта сатып алу, green card kazakhstan"/>

    @endif

@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(images/banner/banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.service3') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li><a href="/product_list">{!! Lang::get('app.our_service') !!}</a></li>
                            <li>{!! Lang::get('app.service3') !!}</li>
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
                        <h3 class="column-title small">{!! Lang::get('app.service3') !!}</h3>

                        <div class="b-content__body b-user-content">

                            @if($lang == 'ru')
                                <span><span style="color:rgb(255, 255, 255);font-size:0px"><span style="color:#fff;font-size:0px">&nbsp;</span><span style="color:#fff;font-size:0px">&nbsp;</span><span style="color:#fff;font-size:0px">↵</span></span></span>
                                <h4 style="text-align:center"><strong>ТОО Страховая брокерская компании “UIB Kazakhstan” эксклюзивный представитель в Казахстане без агентов посредников готово предложить полисы&nbsp;«ОСАГО» лицам , выезжающим в Россию на автотранспортных средствах зарегистрированных в Республике Казахстан.</strong></h4>
                                <h4>&nbsp;</h4>
                            @else
                                <span><span style="color:rgb(255, 255, 255);font-size:0px"><span style="color:#fff;font-size:0px">&nbsp;</span><span style="color:#fff;font-size:0px">&nbsp;</span><span style="color:#fff;font-size:0px">↵</span></span></span>
                                <h4 style="text-align:center"><strong>«UIB Қазақстан» Сақтандыру брокерлік компаниясы ЖШС Қазақстандағы делдалдардың агенттерінсіз эксклюзивті өкілі болып табылады. Қазақстан Республикасында тіркелген көлік құралдарында «Жасыл картасына келісім келген» тараптардың елдеріне баратын адамдарға Green Card полисін ұсынуға дайын.</strong></h4>
                                <h4>&nbsp;</h4>
                            @endif
						
							<object data="/pdf/osago.pdf?v=10" type="application/pdf" style="width: 100%; height: 700px">
                                <embed style="width: 100%; height: 700px" src="/pdf/osago.pdf?v=10" type="application/pdf" />
                            </object>
							
<!-- 
                            <table border="0">

                                <tbody><tr>
                                    <td colspan="12" rowspan="2">
                                        <h4 style="text-align:center"><u><em><strong>Тарифы по обязательному страхованию гражданской ответственности владельцев транспортных средств, зарегистрированных в Республике Казахстан&nbsp;и временно используемых на территории Российской Федерации, собственниками которых являются ФИЗИЧЕСКИЕ ЛИЦА.</strong></em></u></h4>
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="width:127px">&nbsp;</td>
                                    <td colspan="11" style="text-align:center">Срок страхования</td>
                                </tr>
                                <tr>
                                    <td style="width:115px;text-align:center">до 15 дней</td>
                                    <td style="width:149px">
                                        <p style="text-align:center">от 16 дней до 1 месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>2</p>
                                        <p>месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>3</p>
                                        <p>месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>4</p>
                                        <p>месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>5</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>6</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>7</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>8</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>9</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">10 месяцев и более</td>
                                </tr>
                                <tr>
                                    <td style="width:127px">Тип и назначение ТС</td>
                                    <td colspan="11" style="text-align:center">Размер страховой премии, руб.</td>
                                </tr>
                                <tr>
                                    <td style="width:127px">Грузовые автомобили</td>
                                    <td style="width:115px">3 054,15</td>
                                    <td style="width:149px">4 581,23</td>
                                    <td>6 108,30</td>
                                    <td>7 635,38</td>
                                    <td>9 162,46</td>
                                    <td>9 925,99</td>
                                    <td>10689,53</td>
                                    <td>12216,61</td>
                                    <td>13743,68</td>
                                    <td>14507,22</td>
                                    <td>15270,76</td>
                                </tr>
                                <tr>
                                    <td style="width:127px">Полуприцепам, прицепам-роспускам&nbsp; (К=1,25)</td>
                                    <td style="width:115px">3 817,69</td>
                                    <td style="width:149px">5 726,54</td>
                                    <td>7 635,38</td>
                                    <td>9 544,23</td>
                                    <td>11453,07</td>
                                    <td>12407,49</td>
                                    <td>13361,92</td>
                                    <td>15270,76</td>
                                    <td>17179,61</td>
                                    <td>18134,03</td>
                                    <td>19088,45</td>
                                </tr>

                                </tbody></table>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <table border="0">

                                <tbody><tr>
                                    <td colspan="12">
                                        <h4 style="text-align:center"><u><em><strong>Тарифы по обязательному страхованию гражданской ответственности владельцев транспортных средств, зарегистрированных в Республике Казахстан&nbsp;и временно используемых на территории Российской Федерации, собственниками которых являются ЮРИДИЧЕСКИЕ ЛИЦА.</strong></em></u></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="width:126px">&nbsp;</td>
                                    <td colspan="11" style="text-align:center">Срок страхования</td>
                                </tr>
                                <tr>
                                    <td style="width:183px;text-align:center">до 15 дней</td>
                                    <td style="text-align:center">от 16 дней до 1 месяца</td>
                                    <td style="width:70px">
                                        <p style="text-align:center">2</p>
                                        <p style="text-align:center">месяца</p>
                                    </td>
                                    <td style="width:86px">
                                        <p style="text-align:center">3</p>
                                        <p style="text-align:center">месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>4</p>
                                        <p>месяца</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>5</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>6</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>7</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>8</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">
                                        <p>9</p>
                                        <p>месяцев</p>
                                    </td>
                                    <td style="text-align:center">10 месяцев и более</td>
                                </tr>
                                <tr>
                                    <td style="width:126px">Тип и назначение ТС</td>
                                    <td colspan="11" style="text-align:center">Размер страховой премии, руб.</td>
                                </tr>
                                <tr>
                                    <td style="width:126px">Грузовые автомобили</td>
                                    <td style="width:183px">3 233,81</td>
                                    <td>4 850,71</td>
                                    <td style="width:70px">6 467,62</td>
                                    <td style="width:86px">8 084,52</td>
                                    <td>9 701,42</td>
                                    <td>10509,88</td>
                                    <td>11318,33</td>
                                    <td>12935,23</td>
                                    <td>14552,14</td>
                                    <td>15360,59</td>
                                    <td>16169,04</td>
                                </tr>
                                <tr>
                                    <td style="width:126px">Полуприцепам, прицепам-роспускам&nbsp; (К=1,25)</td>
                                    <td style="width:183px">4 042,26</td>
                                    <td>6 063,39</td>
                                    <td style="width:70px">8 084,52</td>
                                    <td style="width:86px">10105,65</td>
                                    <td>12126,78</td>
                                    <td>13137,35</td>
                                    <td>14147,91</td>
                                    <td>16169,04</td>
                                    <td>18190,17</td>
                                    <td>19200,74</td>
                                    <td>20211,30</td>
                                </tr>

                                </tbody></table> -->

                        </div>
                    </div> <!-- Content End -->
                </div> <!-- Col End -->
            </div> <!-- Row End -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection

