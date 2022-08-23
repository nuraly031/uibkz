@extends('index.layout.layout')

@section('meta-tags')

    @if($lang == 'ru')

        <title>Информация о компании «UIB Kazakhstan»</title>
        <meta name="description" content="Информация о компании «UIB Kazakhstan»."/>
        <meta name="keywords" content="информация о компании, телефон, адрес, форма собственности, предоставляемые товары и услуги, UIB Kazakhstan"/>

    @else

        <title>Компания жайлы ақпарат «UIB Kazakhstan»</title>
        <meta name="description" content="«UIB Kazakhstan» брокерлік сақтандыру компаниясы жайлы ақпарат."/>
        <meta name="keywords" content="компания жайлы ақпарат, телефон, мекен-жай, меншік нысаны, ұсынылған тауарлар мен қызметтер, UIB Kazakhstan"/>

    @endif

@endsection

@section('content')

    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(/image/slider_.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title">{!! Lang::get('app.about_us') !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">{!! Lang::get('app.homepage') !!}</a></li>
                            <li>{!! Lang::get('app.about_us') !!}</li>
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
                    <div class="about-content-desc">


                        @if($lang == 'ru')

                            <div class="text-center">
                                <h3 class="column-title small">О компании</h3>
                            </div>

                            <p>ТОО Страховая брокерская компания «UIB Kazakhstan» основана 2003 году в г.Алматы и действует на всей территории Республики Казахстан.</p>
                            <p>«Зеленая карта» и «ОСАГО» ТОО СБК «UIB Kazakhstan» в целях обеспечения прав казахстанских автолюбителей и владельцев транспортных средств ― международных перевозчиков, въезжающих на территорию Российской федерации и в страны участницы Договора «О Зеленой Карте», реализует «Зеленые карты» (Грин карты) и полисы обязательного страхования ОСАГО. Мы обеспечиваем юридическое сопровождение по всему пути следованию Вашего автотранспорта. На сегодня, нашими страхователями являются практически все держатели «CARNET TIR» Казахстана.
                            </p>

                            <div class="about-title">
                                <p>Сведения об участниках:</p>
                            </div>

                            <p> Карсыбаев Рысбек 100%</p>

                            <div class="about-title">
                                <p>Сведения о руководящих работниках:</p>
                            </div>

                            <p>Директор – <b>Карсыбаев Рысбек</b> назначен от 31.03.2006г. <br/>
                                Главный бухгалтер – <b>Утебаева Гульнур Бирлескызы</b> назначена от 01.10.2018г.</p>

                            <div class="about-title">
                                <p>Сведения о государственном регистрационном номере и бизнес-идентификационном номере:</p>
                            </div>
                            <div class="about-desc">
                                <p>Справка о государственной перерегистрации юридического лица</p>
                                <p>Бизнес-идентификационный номер (БИН) 030440001186</p>
                                <p><a href="/doc_register.jpg" target="_blank">Посмотреть справку о государственной перерегистрации юридического лица</a> </p>
                            </div>

                            <div class="about-title">
                                <p>Сведения о номере, дате выдачи лицензии:</p>
                            </div>
                            <div class="about-desc">
                                <p>Лицензия на право осуществления деятельности страхового брокер №2.3.32 выдана 23 января 2019 года</p>
                                <p><a href="/pdf/license_{{$lang}}.pdf" target="_blank">Посмотреть лицензию</a> </p>
                            </div>

                            <div class="about-title">
                                <p>Сведения об осуществляемых видах деятельности:</p>
                            </div>
                            <div class="about-desc">
                                <p>Виды брокерской деятельности: посредническая деятельность по заключению договоров страхования от своего имени и по поручению страхователя.</p>
                            </div>

                            <div class="about-title">
                                <p>Годовая финансовая отчетность, подтвержденная аудиторской организацией, за 3 (три) предыдущих отчетных года:</p>
                            </div>
                            <div class="about-desc">
                          
                               
                                <p><a href="/pdf/report_2018.pdf" target="_blank">Посмотреть отчет за 2018г.</a> </p>
								 <p><a href="/pdf/report_2019.pdf" target="_blank">Посмотреть отчет за 2019г.</a> </p>
								<p><a href="/pdf/report_2020.pdf" target="_blank">Посмотреть отчет за 2020г.</a> </p>
								<p><a href="/pdf/report_2021.pdf" target="_blank">Посмотреть отчет за 2021г.</a> </p>
                            </div>
							
							<div class="about-title">
                                <p>Отчет об итогах деятельности ТОО СБК «UIB Kazakhstan»:</p>
                            </div>
                            <div class="about-desc">
                          
                            
                                <p><a href="/pdf/report__2018.pdf" target="_blank">Посмотреть отчет за 2018г.</a> </p>
								 <p><a href="/pdf/report__2019.pdf" target="_blank">Посмотреть отчет за 2019г.</a> </p>
								<p><a href="/pdf/report__2020.pdf" target="_blank">Посмотреть отчет за 2020г.</a> </p>
								<p><a href="/pdf/report__2021.pdf" target="_blank">Посмотреть отчет за 2021г.</a> </p>
                            </div>
						
                        @else

                            <div class="text-center">
                                <h3 class="column-title small">Компания жайлы</h3>
                            </div>

                            <p>ЖШС «UIB Kazakhstan» сақтандыру брокерлік компаниясы» 2003 жылы Алматы қаласында құрылды және Қазақстан Республикасының бүкіл аумағында жұмыс істейді.</p>
                            <p>«Жасыл карта» және «ОСАГО» ЖШС СБК «UIB Kazakhstan»  Қазақстандық автокөлік иелерінің және көлік құралдары иелерінің - Ресей Федерациясы мен «Жасыл-карта бойынша» шартқа қатысушы елдердің халықаралық тасымалдаушыларының құқықтарын қамтамасыз ету мақсатында «Жасыл карталар» және міндетті сақтандыру полисі. Сіздің көлігіңіздің бүкіл сапары кезінде заңды қолдау көрсетеміз. Бүгінгі таңда Қазақстанда CARNET TIR компаниясының барлық дерлік ұстаушылары біздің сақтанушылар болып табылады.</p>

                            <div class="about-title">
                                <p>Қатысушылар туралы ақпарат:</p>
                            </div>

                            <p>ЖШС “KazBaltTrans”(КазБалтТранс), 100%, заңды тұлғаның орналасқан жері: Алматы қ., Мауленова к-сі, д.92.</p>

                            <div class="about-title">
                                <p>Басшылары туралы ақпарат:</p>
                            </div>

                            <p>Директор – <b>Қарсыбаев Рысбек </b> 31.03.2006 ж. тағайындалды. <br/>
                                Бас бухгалтер – <b>Өтебаева Гүлнұр Бірлесқызы </b> 01.10.2018 ж. тағайындалды.</p>

                            <div class="about-title">
                                <p>Мемлекеттік тіркеу нөмірі және бизнес сәйкестендіру нөмірі туралы мәліметтер:</p>
                            </div>
                            <div class="about-desc">
                                <p>Заңды тұлғаны мемлекеттік қайта тіркеу туралы куәлік</p>
                                <p>Бизнес-сәйкестендіру нөмірі  (БИН) 030440001186</p>
                                <p><a href="/doc_register.jpg" target="_blank">Куәлік көру </a> </p>
                            </div>

                            <div class="about-title">
                                <p>Лицензияның берілген күні мен нөмірі туралы ақпарат:</p>
                            </div>
                            <div class="about-desc">
                                <p>№2.3.32 лицензиясы сақтандыру брокері үшін 2019 жылдың 23 қаңтарында шығарылған</p>
                                <p><a href="/pdf/license_{{$lang}}.pdf" target="_blank">Лицензия көру</a> </p>
                            </div>

                            <div class="about-title">
                                <p>Іс-шаралар туралы ақпарат:</p>
                            </div>
                            <div class="about-desc">
                                <p>Брокерлік қызметтің түрлері: сақтандыру келісімшарттарын өз атынан және сақтандырушының атынан жүзеге асыру.</p>
                            </div>

                            <div class="about-title">
                                <p>Алдыңғы 3 (үш) есептік жыл үшін аудиторлық ұйыммен расталған жылдық қаржылық есептілік:</p>
                            </div>
                            <div class="about-desc">
                                				
								<p><a href="/pdf/report_2018.pdf" target="_blank">2018 жылға арналған есепті қарау</a> </p>					
								<p><a href="/pdf/report_2019.pdf" target="_blank">2019 жылға арналған есепті қарау</a> </p>										<p><a href="/pdf/report_2020.pdf" target="_blank">2020 жылға арналған есепті қарау</a> </p>	
								<p><a href="/pdf/report_2021.pdf" target="_blank">2020 жылға арналған есепті қарау</a> </p>
                            </div>
							
							<div class="about-title">
                                <p>Алдыңғы 3 (үш) қызмет туралы есептілік:</p>
                            </div>
                            <div class="about-desc">
                                				
								<p><a href="/pdf/report__2018.pdf" target="_blank">2018 жылға арналған есепті қарау</a> </p>					
								<p><a href="/pdf/report__2019.pdf" target="_blank">2019 жылға арналған есепті қарау</a> </p>									<p><a href="/pdf/report__2020.pdf" target="_blank">2020 жылға арналған есепті қарау</a> </p>
								<p><a href="/pdf/report__2021.pdf" target="_blank">2021 жылға арналған есепті қарау</a> </p>
                            </div>
						
                        @endif

                    </div>
                </div>
                {{--<div class="col-lg-5 no-padding">
                    <img class="about-img img-fluid" src="/image/director.jpg" alt="">
                    <div class="about-director">
                        <h2>Карсыбаев Рысбек</h2>
                        <p>Директор ТОО Страховой брокерской компании "UIB Kazakhstan" со дня основания Компании.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

@endsection

