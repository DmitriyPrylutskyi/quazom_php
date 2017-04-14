    <!-- At the Top of Page Area Starts -->
        <div class="top-page"><a href="#top" class="smoothscroll"><span><i class="fa fa-angle-up"></i></span></a></div>
    <!-- At the Top of Page Area Ends -->
    <!-- Hero Area Starts -->
    <div class="hero-area home-1">
        <div class="hero-area-content">
            <div class="speaker"><img src="/img/speaker.png" alt="Speaker"></div>
            <div class="headphone"><img src="/img/headphone.png" alt="Headphone"></div>
            <div class="pencil"><img src="/img/pencil.png" alt="Pencil"></div>
            <div class="frame"><img src="/img/frame.png" alt="Frame"></div>
            <div class="black-tab"><img src="/img/tab.png" alt="Tab"></div>
            <div class="mouse"><img src="/img/mouse.png" alt="Mouse"></div>
            <div class="hero-area-content-inner">
                <div class="container">
                    <div class="row">
                        <div class="accordion-area col-xs-12">
                            <div class="accordion">
                                <ul> 
                                    <li>
                                        <div class="text">
                                            <?=$this->t('app', '<p>Простое начало бизнеса <br> Быстрый недорогой старт <br> Основная информация о Вас</p>')?> 
                                        </div> 
                                        <div class="shadow"></div>
                                    </li> 
                                    <li>
                                        <div class="text">
                                            <?=$this->t('app', '<p>Продающая страница товара <br> Преимущества его покупки <br> Привлечение целевой аудитории</p>')?>
                                        </div>
                                       <div class="shadow"></div>
                                    </li> 
                                    <li>
                                        <div class="text">
                                            <?=$this->t('app', '<p>Вся компания под контролем <br> Работа с партнерами и клиентами <br> Мощный движок сайта</p>')?>
                                        </div> 
                                        <div class="shadow"></div>
                                    </li> 
                                    <li>
                                        <div class="text">
                                            <?=$this->t('app', '<p>Большой охват продаж <br> Каталог с товарами <br> Анализ и управление продажами</p>')?>
                                        </div> 
                                        <div class="shadow"></div>
                                    </li> 
                                    <li>
                                        <div class="text">
                                            <?=$this->t('app', '<p>Подтверждение экспертности <br> Публикации и рассылки <br> Работа с подписчиками </p>')?>
                                        </div> 
                                        <div class="shadow"></div>
                                    </li> 
                                </ul> 
                            </div>
                            <div class="accordion-title">
                                <ul> 
                                    <li>
                                        <a href="<?=$this->toUrl('')?>/business-start.html"><?=$this->t('app', 'Сайт визитка')?></a>
                                    </li> 
                                    <li>
                                        <a href="<?=$this->toUrl('')?>/sales.html"><?=$this->t('app', 'Сайт промо')?></a>
                                    </li> 
                                    <li>
                                        <a href="<?=$this->toUrl('')?>/wordpress-joomla.html"><?=$this->t('app', 'Сайт бизнес')?></a>
                                    </li> 
                                    <li>
                                        <a href="<?=$this->toUrl('')?>/sales.html"><?=$this->t('app', 'Сайт магазин')?></a>
                                    </li> 
                                    <li> 
                                        <a href="<?=$this->toUrl('')?>/wordpress-joomla.html"><?=$this->t('app', 'Cайт блог')?></a>
                                    </li> 
                                </ul> 
                            </div>
                            <h1 class="text-center"><?=$this->t('app', '<span> Создание сайтов </span> для Вашего бизнеса в интернете')?></h1>
							<div class="row">
								<form action="/call.php" method="post" id="contact-form-call" class="col-xs-12 col-md-8 col-md-offset-2">
	                                <input type="text" name="visitor_phone" placeholder="<?=$this->t('app', 'Номер телефона')?>" required class="form-control">
	                                <button type="submit" class="btn btn-default btn-blue-fill-radius"><i class="fa fa-phone"></i><?=$this->t('app', 'Получить консультацию')?></button>
	                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area Ends -->
    <!-- Fun Facts Area -->
    <div class="fun-fact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="fun-item text-center wow fadeIn">
                        <p class="digit">13</p>
                        <p class="title"><?=$this->t('app', 'Лет в<br>бизнесе<br>веб-разработок')?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="fun-item text-center wow fadeIn">
                        <p class="digit">318</p>
                        <p class="title"><?=$this->t('app', 'Завершенных<br>онлайн<br>проектов')?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 last">
                    <div class="fun-item text-center wow fadeIn">
                        <p class="digit">2016</p>
                        <p class="title"><?=$this->t('app', 'Год выхода на<br>международный<br>рынок')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fun Facts Area Ends-->
    <!-- Blank Background Area Starts -->
    <div class="blank-bg-area first"></div>
    <!-- Blank Background Area Ends -->
    <!-- Clients Area -->
    <div class="clients-area">
        <div class="container">
            <h2 class="title text-center wow fadeInUp" data-wow-delay="0.2s"><?=$this->t('app', 'Наши любимые клиенты')?></h2>
            <div id="dg-container" class="dg-container">
                <div class="dg-wrapper">
                    <a href="http://ics-midas.com/" target="_blank">
                        <img src="/img/midas.png" alt="<?=$this->t('app', 'лендинг пейдж midas')?>">
                        <div>http://ics-midas.com/</div>
                    </a>
                    <a href="http://streetworkout.pro/" target="_blank">
                        <img src="/img/workout.png" alt="<?=$this->t('app', 'лендинг пейдж workout')?>">
                        <div>http://streetworkout.pro/</div>
                    </a>
                    <a href="http://bonamor.ru/">
                        <img src="/img/bonamor.png" alt="<?=$this->t('app', 'лендинг пейдж bonamor')?>">
                        <div>http://bonamor.ru/</div>
                    </a>
                    <a href="http://globalpractice.eu/" target="_blank">
                        <img src="/img/global.png" alt="<?=$this->t('app', 'лендинг пейдж global')?>">
                        <div>http://globalpractice.eu/</div>
                    </a>
                    <a href="http://amrita.ua/" target="_blank">
                        <img src="/img/amrita.png" alt="<?=$this->t('app', 'лендинг пейдж amrita')?>">
                        <div>http://amrita.ua/</div>
                    </a>
                    <a href="http://valery-elite.ru/" target="_blank">
                        <img src="/img/valery.png" alt="<?=$this->t('app', 'лендинг пейдж valery')?>">
                        <div>http://valery-elite.ru/</div>
                    </a>
                    <a href="http://altklub.com/" target="_blank">
                        <img src="/img/alt.png" alt="<?=$this->t('app', 'лендинг пейдж alt')?>">
                        <div>http://altklub.com/</div>
                    </a>
                    <a href="http://kapital24.biz/" target="_blank">
                        <img src="/img/kapital.png" alt="<?=$this->t('app', 'лендинг пейдж kapital')?>">
                        <div>http://kapital24.biz/</div>
                    </a>
                </div>
                <nav>   
                    <span class="dg-prev"><i class="fa fa-angle-left"></i></span>
                    <span class="dg-next"><i class="fa fa-angle-right"></i></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Clients Area Ends -->
    <!-- Pricing Plan Area Starts -->
    <div class="pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="section-title-1">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', 'Комплексные решения для интернет бизнеса')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-sm-4 pricing-table wow fadeInUp" data-wow-delay="0.2s">
                        <div class="header">
                            <h2 class="title"><?=$this->t('app', 'Сайт <br> Промо')?></h2>
                        </div>
                        <div class="body">
                            <ul class="pricing">
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Новинка')?></p>
                                    <p><?=$this->t('app', 'Совершит релиз нового продукта или бренда')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Преимущества')?></p>
                                    <p><?=$this->t('app', 'Выгодно подаст основные преимущества')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Дизайн')?></p>
                                    <p><?=$this->t('app', 'Запоминающийся в дизайне, простой в управлении')?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="<?=$this->toUrl('')?>/business-start.html" class="btn btn-default btn-blue-fill-radius"><?=$this->t('app', 'Узнайте больше')?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 pricing-table recommended wow fadeInUp" data-wow-delay="0.4s">
                        <div class="header">
                            <h2 class="title"><?=$this->t('app', 'Сайт <br> Корпоратив')?></h2>
                            <div class="recom-tag"><span><?=$this->t('app', 'Рекомендуем')?></span></div>
                        </div>
                        <div class="body">
                            <ul class="pricing">
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Управление')?></p>
                                    <p><?=$this->t('app', 'Соединит все данные о компании в единый ресурс')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'База данных')?></p>
                                    <p><?=$this->t('app', 'Позволит успешно работать со всей базой клиентов')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Стиль')?></p>
                                    <p><?=$this->t('app', 'Даст узнаваемость фирменному стилю, гибкий в управлении')?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="<?=$this->toUrl('')?>/wordpress-joomla.html" class="btn btn-default btn-blue-fill-radius"><?=$this->t('app', 'Узнайте больше')?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 pricing-table wow fadeInUp" data-wow-delay="0.6s">
                        <div class="header">
                            <h2 class="title"><?=$this->t('app', 'Сайт <br> Магазин')?></h2>
                        </div>
                        <div class="body">
                            <ul class="pricing">
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Каталог')?></p>
                                    <p><?=$this->t('app', 'Запустит онлайн продажи вашего каталога товаров')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Геолокация')?></p>
                                    <p><?=$this->t('app', 'Расширит ГЕО охват и число Ваших клиентов')?></p>
                                </li>
                                <li>
                                    <p class="title"><span><i class="fa fa-check"></i></span><?=$this->t('app', 'Автопродажи')?></p>
                                    <p><?=$this->t('app', 'Стильный дизайн, автоматизация в управлении')?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="<?=$this->toUrl('')?>/sales.html" class="btn btn-default btn-blue-fill-radius"><?=$this->t('app', 'Узнайте больше')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan Area Ends -->
    <!-- Blank Background Area Starts -->
    <div class="blank-bg-area second"></div>
    <!-- Blank Background Area Ends -->
    <!-- Why Choose Area Starts -->
    <div class="why-choose-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="single-img-box wow fadeInLeft">
                        <img src="/img/web_developers.jpg" alt="<?=$this->t('app', 'создание сайтов')?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="section-title-2">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', 'Почему выбирают нас')?></h2>
                        <p class="caption wow fadeIn" data-wow-delay="0.3s"><?=$this->t('app', 'Благодаря высокой квалификации и большому опыту нашей амбициозной команды, мы имеем возможность предоставить Заказчику полный комплекс услуг, включающих:')?></p>
                    </div>
                    <ul class="why-choose wow fadeInUp">
                        <li>
                            <div><img src="/img/svg/why-choose-1.svg" alt="<?=$this->t('app', 'техзадания сайтов')?>"></div>
                            <div class="content">
                                <h4 class="title"><?=$this->t('app', 'разработка техзадания сайтов,')?></h4>
                            </div>
                        </li>
                        <li>
                            <div><img src="/img/svg/why-choose-2.svg" alt="<?=$this->t('app', 'сайты под ключ')?>"></div>
                            <div class="content">
                                <h4 class="title"><?=$this->t('app', 'разработка сайтов под ключ,')?></h4>
                            </div>
                        </li>
                        <li>
                            <div><img src="/img/svg/why-choose-3.svg" alt="<?=$this->t('app', 'настройка сайтов')?>"></div>
                            <div class="content">
                                <h4 class="title"><?=$this->t('app', 'настройка сайтов и размещение в сети,')?></h4>
                            </div>
                        </li>
                        <li>
                            <div><img src="/img/svg/why-choose-5.svg" alt="<?=$this->t('app', 'поддержка сайтов')?>"></div>
                            <div class="content">
                                <h4 class="title"><?=$this->t('app', 'сопровождение и техническая поддержка сайтов.')?></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Area Ends -->
    <div class="algoritm-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="section-title-1">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', 'Как мы работаем с Вами')?></h2>
                    </div>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-1.svg" alt="<?=$this->t('app', 'бриф сайта')?>">
                </div>
                <div class="col-sm-10 col-md-11 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Вы скачиваете и заполняете Анкету для создания Вашего сайта, затем отправляете нам. Мы можем в этом помочь Вам. Нам надо понимать все особенности будущего сайта.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-sm-offset-1 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-2.svg" alt="<?=$this->t('app', 'примеры сайта')?>">
                </div>
                <div class="col-sm-9 col-md-10 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Мы вместе обсуждаем Анкету и задачи Вашего сайта, смотрим примеры, выбираем дизайн, заключаем договор и оформляем предоплату.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-sm-offset-2 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-3.svg" alt="<?=$this->t('app', 'прототип сайта')?>">
                </div>
                <div class="col-sm-8 col-md-9 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Затем мы создаем прототип со структурой Вашего будущего сайта. Вы вносите предложения по корректировке прототипа.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-8 col-md-9 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'После редактирования прототипа, Вы принимаете окончательный вариант. И мы сразу начинаем разрабатывать и настраивать Ваш сайт.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-4.svg" alt="<?=$this->t('app', 'настройка сайта')?>">
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-9 col-md-10 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'После создания мы тестируем готовый сайт, проверяем его работоспособность. Вместе обсуждаем и подбираем свободное имя домена.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-5.svg" alt="<?=$this->t('app', 'создание сайта')?>">
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-10 col-md-11 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Вы делаете оставшуюся оплату нашей работы и мы выкладываем Ваш сайт на выбранный Вами домен и хостинг. Вы получаете решение поставленных задач.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-6.svg" alt="<?=$this->t('app', 'размещение сайта')?>">
                </div>
            </div>
        </div>
    </div>
    <!-- Algoritm Plan Area Ends -->
    <!-- Blank Background Area Starts -->
    <div class="blank-bg-area third"></div>
    <!-- Blank Background Area Ends -->
    <!-- App Download Area -->
    <div class="app-download-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    <div class="app-download-content">
                        <h2 class="subtitle wow fadeInUp"><?=$this->t('app', 'Для создания сайта')?></h2>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.2s"><?=$this->t('app', 'скачайте Анкету')?></h2>
                        <p class="wow fadeIn" data-wow-delay="0.4s"><?=$this->t('app', 'Скачайте бланк Анкеты для создания Вашего сайта, внимательно заполните все ее разделы. <br> Анкета является предварительным опросом для понимания Ваших целей в интернет бизнесе. <br> Если Вы не знаете, как ответить на какой-то вопрос, позвоните и мы с радостью поможем Вам в этом. <br> Также Вы сможете заполнить Анкету вместе с нами, через Skype или в офисе.')?></p>
                    </div>
                    <form action="/download.php" method="post" id="download">
                        <button type="submit" name="<?=$this->getLang()?>" class="btn btn-default btn-blue-fill-radius wow fadeIn"><?=$this->t('app', 'Скачать')?></button>
                    </form>
                </div>
                <div class="hidden-xs col-sm-4 col-sm-offset-1">
                    <div class="app-download-screen">
                        <img src="/img/download.png" alt="<?=$this->t('app', 'веб команда')?>" class="wow fadeInRight">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Download Area Ends -->
