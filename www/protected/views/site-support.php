    <!-- At the Top of Page Area Starts -->
        <div class="top-page"><a href="#top" class="smoothscroll"><span><i class="fa fa-angle-up"></i></span></a></div>
    <!-- At the Top of Page Area Ends -->
    <!-- Hero Area Starts -->
    <div id="home" class="hero-area home-1">
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
                        <img src="/img/assistance.png" alt="<?=$this->t('app', 'поддержка сайта')?>">
                        <h1 class="text-center"><?=$this->t('app', 'Обслуживание и тех.поддержка Вашего сайта')?></h1>
                        <h3 class="text-center"><?=$this->t('app', 'Наши специалисты позаботятся о Вашем сайте профессионально!')?></h3>
						<div class="row">
							<form action="/call.php" method="post" id="contact-form-call" class="col-xs-12 col-md-8 col-md-offset-2" >
                                <input type="text" name="visitor_phone" placeholder="<?=$this->t('app', 'Номер телефона')?>" required class="form-control">
                                <button type="submit" class="btn btn-default btn-blue-fill-radius"><i class="fa fa-phone"></i><?=$this->t('app', 'Доверьте Ваш сайт нам')?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area Ends -->
    <!-- Begin Area Starts -->
    <div class="begin-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="section-title-1">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', 'Для чего это надо?')?></h2>
                    </div>
                </div>
            </div>
            <div class="row block">
                <div class="col-xs-12 col-sm-2 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/assistance-reason-1.svg" alt="<?=$this->t('app', 'сопровождение сайта')?>">
                </div>
                <div class="col-xs-12 col-sm-10 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'После создания Ваш сайт необходимо регулярно наполнять свежими уникальными материалами, следить за работоспособностью и резервированием. Это нужно для успешного ранжирования вверх и узнаваемости поисковыми системами Вашего сайта. Обновление сайта нужно для безопасности.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-xs-12 col-sm-10 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Наша команда выполнит необходимые работы по обновлениям системы Вашего сайта, тестированию его работоспособности, исправлениям ошибок. На основе Вашей информации мы сгенерируем уникальные текстовые материалы, грамотно разместим на сайте графический контент.')?></p>
                </div>
                <div class="col-xs-12 col-sm-2 text-right img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/assistance-reason-2.svg" alt="<?=$this->t('app', 'техподдержка сайта')?>">
                </div>
            </div>
            <div class="row block">
                <div class="col-xs-12 col-sm-2 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/assistance-reason-3.svg" alt="<?=$this->t('app', 'администрирование сайта')?>">
                </div>
                <div class="col-xs-12 col-sm-10 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'При расширении Вашей деятельности мы сможем вовремя отредактировать материалы и гибко перенастроить рабочие функции для Вашего сайта. Также Вы сможете заказать полную переделку, редизайн, мультиязычность или другую систему управления сайтом у нашей опытной команды.')?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Plan Area Ends -->
    <!-- Blank Background Area Starts -->
    <div class="blank-bg-area second"></div>
    <!-- Blank Background Area Ends -->
    <!-- Algoritm Area Starts -->
    <div class="algoritm-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="section-title-1">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', 'Алгоритм нашей работы с Вами')?></h2>
                    </div>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-1.svg" alt="<?=$this->t('app', 'бриф сайта')?>">
                </div>
                <div class="col-sm-10 col-md-11 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Вы скачиваете и заполняете План для обслуживания Вашего сайта, затем отправляете нам.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-sm-offset-1 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-2.svg" alt="<?=$this->t('app', 'примеры сайта')?>">
                </div>
                <div class="col-sm-9 col-md-10 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Мы вместе обсуждаем задачи и План обслуживания Вашего сайта, заключаем договор и оформляем абонплату.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-2 col-sm-offset-2 col-md-1 img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="/img/svg/number-3.svg" alt="<?=$this->t('app', 'прототип сайта')?>">
                </div>
                <div class="col-sm-8 col-md-9 body wow fadeInRight" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Вы регулярно делитесь свежей информацией для размещения на Вашем сайте, которую мы публикуем.')?></p>
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-8 col-md-9 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Вы вносите предложения для необходимого изменения на Вашем сайте, мы корректно их проводим.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-4.svg" alt="<?=$this->t('app', 'настройка сайта')?>">
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-9 col-md-10 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Согласно Плана мы регулярно мониторим работоспособность Вашего сайта, делаем резервное копирование изменений.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-5.svg" alt="<?=$this->t('app', 'создание сайта')?>">
                </div>
            </div>
            <div class="row block">
                <div class="col-sm-10 col-md-11 body wow fadeInLeft" data-wow-delay="0.2s">
                    <p><?=$this->t('app', 'Мы ведем учет сроков своевременных оплат у провайдера хостинга и регистратора домена. Вы свободны от всех технических работ по Вашему сайту.')?></p>
                </div>
                <div class="col-sm-2 col-md-1 img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="/img/svg/number-6.svg" alt="<?=$this->t('app', 'размещение сайта')?>">
                </div>
            </div>
        </div>
    </div>
    <!-- Algoritm Plan Area Ends -->
    <!-- App Download Area -->
    <div id="download" class="app-download-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="app-download-content-2">
                        <h2 class="col-xs-12 col-sm-10 title wow fadeInleft" data-wow-delay="0.2s"><?=$this->t('app', 'Получите План по обслуживанию сайта')?></h2>
                        <div class="col-xs-12 col-sm-2 icon wow fadeInRight" data-wow-delay="0.7s">
                            <form action="/download_support.php" method="post" id="download">
                                <button type="submit" name="<?=$this->getLang()?>" class="btn btn-default btn-blue-fill-radius wow fadeIn"><?=$this->t('app', 'Скачать')?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Download Area Ends -->