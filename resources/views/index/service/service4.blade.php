@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Что такое «зеленая карта»?</title>
        <meta name="description" content="«Зеленая карта» ― это международный полис автогражданской ответственности, полный аналог Казахстанского обязательного страхования"/>
        <meta name="keywords" content="зеленая карта, купить страховка зеленая карта алматы, green card almaty, осаго, страховка за рубеж алматы, страховка для грузовых машин, страховка зеленая карта казахстан, green card kazakhstan"/>

    @else

        <title>«Жасыл карта» дегеніміз не?</title>
        <meta name="description" content="«Жасыл карта»- автокөлік иесінің Қазақстандағы міндетті сақтандыру полисі сияқты, халықаралық автокөлік жауапкершілігіне қатысты"/>
        <meta name="keywords" content=" жасыл карта, Алматы қаласында жасыл карта сатып алу, green card almaty, осаго, жасыл карта, Алматы қаласында жасыл карта сатып алу, green card kazakhstan"/>

    @endif

@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(images/banner/banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.service4') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li>{!! Lang::get('app.service4') !!}</li>
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
                        <h3 class="column-title small">{!! Lang::get('app.service4') !!}</h3>

                        <div class="b-content__body b-article-view">

                            @if($lang == 'ru')

                                <strong class="b-article-view__info"><p>Если вы запланировали путешествие на автомобиле за рубеж, вам понадобится оформить так называемую «Зеленую карту». Без нее въезд  на территорию Европы и некоторых других стран будет невозможен.</p></strong>

                                <div class="b-user-content">
                                    <p style="text-align:justify">&nbsp;«Зеленая карта» ― это международный полис автогражданской ответственности, полный аналог Казахстанского обязательного страхования ГПО автовладельца. Действует полис на территории стран, участниц соглашения, которое существует с 1953 года. В настоящий момент таких стран 45. Это страны Европы, в том числе и Россия, а также Израиль, Турция, Марокко, Иран и Тунис. Функции российского бюро соглашения «Зеленая карта» с 1 января 2009 года выполняет Российский союз автостраховщиков.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Отметим, что данный вид страхования не вызвал у отечественных страховых компаний большого интереса. Возможно, это объясняется сравнительно высоким вступительным взносом, а также высокой ответственностью. Изначально лишь 12 страховых компаний выразили желание выдавать «Зеленые карты», а со временем их количество даже уменьшилось.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Предусмотрено два варианта полисов. Один для Молдовы, Украины и Белоруссии, а второй для всех остальных европейских стран. В течение первых десяти лет, с момента присоединения к соглашению, международные полисы выдаются только на транспорт, зарегистрированный в Казахстане. При выезде из Казахстана наличие полиса «Зеленая карта» контролируется Таможенной службой.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Полис «Зеленая карта» избавит вас от всех хлопот в случае ДТП за рубежом, естественно, в рамках страховых сумм и по законодательству страны, в которой произошло ДТП. Однако все равно необходимо знать, как следует себя в этом случае вести.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Если вы попали в аварию на территории одной из стран, участниц соглашения, вы должны остановиться, включить сигнальные огни и выставить предупредительные знаки. Если вы находитесь на территории ЕС – известите полицию о случившемся по телефону 112. Если, не дай бог, есть пострадавшие, окажите им посильную помощь и вызовите скорую.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Установите контакт с другим участником ДТП. Постарайтесь взять у него так называемую Accident statement ― форму извещения о ДТП и заполните ее.</p>
                                    <p style="text-align:justify">&nbsp;Продемонстрируйте участникам ДТП свою «Зеленую карту» и зафиксируйте себе параметры их страхового полиса. Все документы желательно сфотографировать. Также как и место происшествия.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;После всего этого, проинформируйте об аварии иностранное бюро «Зеленой карты» и свою страховую компанию.</p>
                                    <p style="text-align:justify">&nbsp;Четкое следование этим инструкциям сделает ваше автомобильное путешествие легким и приятным.&nbsp; Счастливого пути!</p>
                                </div>

                            @else

                                <strong class="b-article-view__info"><p>Егер сіз автокөлікпен шетелге сапар жоспарласаңыз, онда сізге «Жасыл-карта» қажет болады. Ол картасыз Еуропа және кейбір басқа елдер аумағына кіру мүмкін емес.</p></strong>

                                <div class="b-user-content">
                                    <p style="text-align:justify">&nbsp;«Жасыл карта»- автокөлік иесінің Қазақстандағы міндетті сақтандыру полисі сияқты, халықаралық автокөлік жауапкершілігіне қатысты халықаралық полис. Бұл полис 1953 жылдан бері келісімге қолданылып келген қатысушы елдердің аумағында жарамды. Қазіргі таңда 45 ел, соның ішінде Ресей, сондай-ақ Израиль, Түркия, Марокко, Иран және Тунис сияқты Еуропа елдері бар. 2009 жылғы 1 қаңтардан бастап «Жасыл карта» ресейлік бюросының функцияларын Ресейлік автокөлік сақтандырушылар одағы жүзеге асырды. </p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Бұл сақтандыру түрі отандық сақтандыру компаниялары арасында қызығушылық тудырмағанын атап өткен жөн. Мүмкін, бұл жоғары төлемге байланысты, сондай-ақ жоғары жауапкершілік. Бастапқыда тек 12 сақтандыру компаниясы «Жасыл карталар» шығаруға ниет білдірді және уақыт өте келе олардың саны азайды.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Полистің екі нұсқасы бар. Бірі Молдова, Украина және Белоруссия, екіншісі және еуропалық басқа елдер үшін. Алғашқы он жыл ішінде келісімге қосылғаннан кейін халықаралық полис тек Қазақстанда тіркелген көлік құралдарына ғана беріледі. «Жасыл-карта» полисінің болуы кеден қызметі тарапынан бақыланады.      </p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;«Жасыл карта» полисі сіздің көлігіңіздің шетелде апат болған жағдайда, әрине, сақтандыру қаржылары мен апат орын алған ел заңнамасына сәйкес, сізді барлық қиыншылықтардан босатады. Алайда, сіз бұл жағдайда қалай әрекет ету керектігін білуіңіз керек.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Егер сіз келісімге қатысушы елдердің бірінде жол апатына ұшыраған болсаңыз, тоқтап, ескерту шамдарын қосып, ескерту белгілерін орнатыңыз. ЕО-да болсаңыз, оқиға туралы полицияға 112 телефоны арқылы хабарласыңыз. Егер жарақат алғандар болса, оларға барынша көмек көрсетіп, жедел жәрдем шақырыңыз.</p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Апаттың басқа мүшесімен байланыс жасаңыз. Оны Accident statement деп аталатын авария туралы хабарландыруларды алып, оны толтырыңыз.</p>
                                    <p style="text-align:justify">&nbsp;Жазатайым оқиғаға қатысушыларға «Жасыл карта» көрсетіңіз және сақтандыру полисінің параметрлерін белгілеңіз. Барлық құжаттар және оқиға орны суретке түсірілуі керек. </p>
                                    <p style="text-align:justify">&nbsp;</p>
                                    <p style="text-align:justify">&nbsp;Осыдан кейін «Жасыл карта» шетелдік бюросы мен сақтандыру компаниясына жолапаты туралы хабарлаңыз.</p>
                                    <p style="text-align:justify">&nbsp;Осы нұсқаулықты қатаң сақтау сіздің автомобильіңізді оңай және жағымды етеді. Жақсы сапарыңыз бар!.&nbsp; Сапарыңыз сәтті болсын!!</p>
                                </div>

                            @endif

                        </div>
                    </div> <!-- Content End -->
                </div> <!-- Col End -->
            </div> <!-- Row End -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection

