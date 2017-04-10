<!DOCTYPE html>
<html lang="<?=$this->getLang()?>">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title><?=$this->t('app', $this->route['title'])?></title>
    <link rel="alternate" hreflang="x-default" href="http://quazom.com/" />
    <link rel="alternate" hreflang="en" href="http://quazom.com/" />
    <link rel="alternate" hreflang="ru" href="http://quazom.com/ru" />
    <link rel="alternate" hreflang="uk" href="http://quazom.com/ua" />
    <meta name="google-site-verification" content="4ouCwBjnmBYD9efKoNFp5WExjo_zAJehXHVH5fM3LPE" />
    <meta name="yandex-verification" content="3ae78f33e905c538" />
    <meta name="description" content="<?=$this->t('app', $this->route['description'])?>" />
    <meta name="author" content="quazom.com">
    <meta name="keywords" content="<?=$this->t('app', $this->route['keywords'])?>" />
    <meta property="og:title" content="<?=$this->t('app', 'Веб студия Quazom | Создание успешных сайтов под ключ')?>" />
    <meta property="og:description" content="<?=$this->t('app', 'Решите Ваши задачи с нашими технологиями!')?>" />
    <meta property="og:image" content="http://quazom.com/img/logo_soc.png" />
    <meta property="og:url" content="http://quazom.com/<?=$this->getLangUrl()?>"/>
    <meta property="fb:app_id" content="670079289820175" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?=$this->t('app', 'Веб студия Quazom | Создание успешных сайтов под ключ')?>" />
    <meta name="twitter:description" content="<?=$this->t('app', 'Решите Ваши задачи с нашими технологиями!')?>" />
    <meta name="twitter:image:src" content="http://quazom.com/img/logo_soc.png" />
    <meta name="twitter:url" content="http://quazom.com/<?=$this->getLangUrl()?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <!-- build:css /css/style.css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/typography.css">
    <link rel="stylesheet" href="/css/galery.css">
    <link rel="stylesheet" href="/css/accordion.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- endbuild -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">
    <? if ($this->getUrls() == '/') : ?>
    <!-- Preloader Starts -->
    <div class="preloader-area">
        <div class="preloader-inner">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Preloader Ends -->
    <? endif; ?>
    <!-- Header Area Starts -->
    <header>
        <div class="header-area menu-style-1" id="top">
            <nav class="navbar navbar-default navbar-fixed-top" id="scroll-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-9 col-md-10 col-lg-10">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?=$this->toUrl('')?>/"><img src="/img/logo-blue.png" alt="<?=$this->t('app', 'веб студия Quazom')?>"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
									<? foreach($this->getMap() as $node) : ?>
                                        <? if ($node['is_visible'] == true) : ?>
                                            <? if ($this->toUrl($node['url']) != $this->getUrls()): ?>
                                                <li><a href="<?=$this->toUrl($node['url'])?>"><?=$this->t('app', $node['label'])?></a></li>
                                                <? else: ?>
                                                    <li class="active"><a href="<?=$this->toUrl($node['url'])?>"><?=$this->t('app', $node['label'])?></a></li>
                                            <? endif; ?>
                                        <? endif; ?>
									<? endforeach; ?>
                                    <li><a href="#contact" class="smoothscroll"><?=$this->t('app', 'Контакты')?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 right-menu">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?=strtoupper($this->getLang())?>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/ru<?=$this->getUrls()?>">Русский</a></li>
                                    <li><a href="/ua<?=$this->getUrls()?>">Українська</a></li>
                                    <li><a href="<?=$this->getUrls()?>">English</a></li>
                                </ul>
                            </div>
                            <ul class="contact-social">
                                <li><a href="http://www.facebook.com/sharer.php?u=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-odnoklassniki-square"></i></a></li>
                                <li><a href="http://vk.com/share.php?url=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Area Ends -->
    <!-- Modal-call window start -->
    <div id="modal-call" class="modalDialog">
        <div>
            <p><?=$this->t('app', 'Спасибо! Мы Вам обязательно перезвоним.')?></p>
            <p><?=$this->t('app', 'Команда Quazom.')?></p>
            <button type="submit" onclick="location.href='#close';" class="btn btn-default btn-blue-fill-radius"> ОК </button>
        </div>
    </div>
    <!-- Modal-call window close -->
    <!-- Modal-mail window start -->
    <div id="modal-mail" class="modalDialog">
        <div>
            <p><?=$this->t('app', 'Спасибо! Мы Вам обязательно ответим.')?></p>
            <p><?=$this->t('app', 'Команда Quazom.')?></p>
            <button type="submit" onclick="location.href='#close';" class="btn btn-default btn-blue-fill-radius"> ОК </button>
        </div>
    </div>
    <!-- Modal-mail window close -->
	<?=$content?>
    <!-- Contact Area Starts -->
    <div id="contact" class="contact-area">
        <div class="hidden-xs hidden-sm contact-left-bg-img"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title-1">
                        <h2 class="title wow fadeInDown"><?=$this->t('app', ($this->getUrls() == '/') ? 'Наши контакты' : 'Остались вопросы?')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-7 col-md-offset-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="icon-box-left wow fadeIn" data-wow-delay="0.2s">
                                <i class="fa fa-phone-square"></i>
                                <h4 class="title"><?=$this->t('app', 'Телефон')?></h4>
                                <p><img src="/img/viber.png" alt="<?=$this->t('app', 'веб студия Quazom')?>"> +38 063 561 05 46</p>
                                <p><i class="fa fa-skype" aria-hidden="true"></i> live:mail_51176</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="icon-box-left wow fadeIn" data-wow-delay="0.4s">
                                <i class="fa fa-paper-plane"></i>
                                <h4 class="title"><?=$this->t('app', 'Адрес')?></h4>
                                <p><?=$this->t('app', 'г.Николаев, Никольская, 52')?></p>
                                <p><?=$this->t('app', 'Работаем с 9:00 до 17:00')?></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="icon-box-left wow fadeIn" data-wow-delay="0.6s">
                                <i class="fa fa-envelope"></i>
                                <h4 class="title">EMAIL</h4>
                                <p>mail@quazom.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-form-area wow fadeInUp">
                            <div class="col-xs-12">
                                <h3 class="title"><?=$this->t('app', 'свяжитесь с нами')?></h3>
                            </div>
                            <form action="/mail.php" method="post" id="contact-form-mail">
                                <div class="col-xs-12 col-sm-4">
                                    <input type="text" name="visitor_name" class="form-control" required placeholder="<?=$this->t('app', 'Введите ваше имя')?>">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="email" name="visitor_email" class="form-control" required placeholder="Email">
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="text" name="visitor_phone" class="form-control" placeholder="<?=$this->t('app', 'Телефон')?>">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="visitor_message" class="form-control" rows="10" required placeholder="<?=$this->t('app', 'Оставьте Ваше сообщение')?>"></textarea>
                                </div>
                                <div class="col-xs-12 button">
                                    <button class="btn btn-default btn-blue-fill-radius"><?=$this->t('app', 'Отправить')?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area Ends -->
    <!-- Page Location Starts -->
    <div class="page-content-area">
        <div id="map" class="google-map wow fadeIn">
        </div>
    </div>
    <!-- Page Location Ends -->
    <!-- Footer Area Starts -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-social wow fadeIn">
                            <ul>
                                <li><a href="http://www.facebook.com/sharer.php?u=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="https://www.linkedin.com/cws/share?url=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="http://www.twitter.com/intent/tweet?url=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-odnoklassniki-square"></i></a></li>
                                <li><a href="http://vk.com/share.php?url=http://quazom.com/<?=$this->getLangUrl()?>" target="_blank"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-logo wow fadeIn">
                            <a href="<?=$this->toUrl('')?>/""><img src="/img/logo-white.png" alt="<?=$this->t('app', 'веб студия Quazom')?>"></a>
                        </div>
                        <div class="block-content wow fadeIn">
                            <?=$this->t('app', '<p>Создание сайтов &middot; &nbsp;Веб-разработка &middot; &nbsp;Обслуживание сайтов</p>')?>
                            <?=$this->t('app', '<p>Разработка сайтов &middot; &nbsp;Сайты под ключ &middot; &nbsp;Поддержка сайтов</p>')?>
                            <?=$this->t('app', '<p>Строительство сайтов &middot; &nbsp;Техзадание сайтов &middot; &nbsp;Переделка сайтов</p>')?>
                        </div>
                        <div class="row block-form">
                                <form action="/call.php" method="post" id="footer-contact-form-call" class="col-xs-12 col-md-6 col-md-offset-3">
                                    <input type="text" name="visitor_phone" placeholder="<?=$this->t('app', 'Номер телефона')?>" required class="form-control">
                                    <button type="submit" class="btn btn-default btn-blue-fill-radius"><i class="fa fa-phone"></i><?=$this->t('app', 'Перезвонить мне')?></button>
                                </form>
                            </div>
                        <div class="inline-content wow fadeIn">
                            <p><span>&copy; 2016-2017</span></p>
                            <p><span><a href="<?=$this->toUrl('')?>/""><?=$this->t('app', 'Веб-студия Quazom')?></a></span></p>
                            <p><span><?=$this->t('app', 'Карта сайта')?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area Ends -->
    <!-- Scripts -->
    <!-- build:js /js/script.js -->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/modernizr.custom.53451.js"></script>
    <script src="/js/jquery.gallery.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/js/google_counter.js"></script>
    <script src="/js/yandex_counter.js"></script>
    <!-- endbuild -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=myMap&key=AIzaSyDOD7Mhnj7rdb8jZQEDOTrdsbpTzqih3BU"></script>
    <noscript><div><img src="https://mc.yandex.ru/watch/43504104" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<? if ($this->params['isEnableJivoSite']) : ?>
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = '<?=$this->t('app', 'rn7cXC9EBC')?>';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->
	<? endif; ?>
</body>

</html>
