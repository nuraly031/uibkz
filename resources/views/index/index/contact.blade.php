@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Адрес, телефон, факс компании — «UIB Kazakhstan»</title>
        <meta name="description" content="Контактная информация компании «UIB Kazakhstan»."/>
        <meta name="keywords" content="адрес, телефон, факс, сайт, UIB Kazakhstan"/>

    @else

        <title>Мекен-жай, телефон, компанияның факсы — «UIB Kazakhstan»</title>
        <meta name="description" content="«UIB Kazakhstan» компаниясымен байланыс ."/>
        <meta name="keywords" content="мекен-жай, телефон, факс, сайт, UIB Kazakhstan"/>


    @endif


@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(/image/slider_.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.our_contact') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li>{!! Lang::get('app.our_contact') !!}</li>
                        </ol>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container padt-90">
        <div id="ts-contact-us" class="ts-contact-us">
            <div class="container">
                <div class="gap-70"></div>
                <div class="row">

                    @if($lang == 'ru')

                        <div class="col-lg-4">
                            <div class="contact-address">
                                <h3 class="address-title">Наши контакты</h3>
                                <div id="accordion">
                                    <div class="card">
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li class="main-label">ТОО Страховая брокерская компания «UIB Kazakhstan» </li>
                                                    <li class="main-label">Телефон:</li>
                                                    <li>+7 (777) 328-22-86, Директор</li>
                                                    <li>+7 (777) 801-02-06</li>
                                                    <li>+7 (727) 273-92-63</li>
                                                    <li>+7 (707) 559-19-55</li>
                                                    <li class="main-label">Контактное лицо:</li>
                                                    <li>Карсыбаев Рысбек</li>
                                                    <li class="main-label">Адрес:</li>
                                                    <li>г.Алматы, ул.Жибек Жолы 50,Бизнес Центр «Форум», 3 этаж, офис 17, Алматы, 050000, Казахстан</li>
                                                    <li class="main-label">Email:</li>
                                                    <li>uib_kz@mail.ru</li>
                                                    <li class="main-label">График работы:</li>
                                                    <li>Пн. - пт. 10:00-17:00 <br/>
                                                        суб., воскр. – выходной <br/>
                                                        Обед - 12:30-13:30
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h3 class="address-title">Мы на карте</h3>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.509279995691!2d76.95573961910392!3d43.26170537531047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e8f712d23d5%3A0xc92d6e198d024fd6!2z0JHQuNC30L3QtdGBLdGG0LXQvdGC0YAgItCk0L7RgNGD0Lwi!5e0!3m2!1sru!2skz!4v1562048716140!5m2!1sru!2skz" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>

                            </div><!-- Map End -->
                        </div>

                    @else

                        <div class="col-lg-4">
                            <div class="contact-address">
                                <h3 class="address-title">Байланыстар</h3>
                                <div id="accordion">
                                    <div class="card">
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li class="main-label">ЖШС «UIB Kazakhstan» сақтандыру брокерлік компаниясы »</li>
                                                    <li class="main-label">Телефон:</li>
                                                    <li>+7 (777) 328-22-86, Директор</li>
                                                    <li>+7 (777) 801-02-06</li>
                                                    <li>+7 (727) 273-92-63</li>
                                                    <li>+7 (707) 559-19-55</li>
                                                    <li class="main-label">Байланыс тұлғасы:</li>
                                                    <li>Қарсыбаев Рысбек</li>
                                                    <li class="main-label">Мекен-жайы:</li>
                                                    <li>Алматы қаласы, Жібек Жолы көшесі, 50, Форум Бизнес-Орталығы, 3 қабат, 17-офис, Алматы, 050000, Қазақстан</li>
                                                    <li class="main-label">Электрондық пошта:</li>
                                                    <li>uib_kz@mail.ru</li>
                                                    <li class="main-label">Жұмыс кестесі:</li>
                                                    <li>Дс - Жұма 10:00-17:00 <br/>
                                                        Сенбі, жексенбі - демалыс </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h3 class="address-title">Мекен-жай</h3>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD_yhBZJU9aBDqkr0VQ7gPhdKlU-56Z2dQ&q=43.2631538418,76.955655705&language=ru" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>

                            </div><!-- Map End -->
                        </div>

                    @endif

                </div>
            </div> <!-- Container End -->
        </div> <!-- Pricing End -->
    </section><!-- Main container end -->

@endsection

