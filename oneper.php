<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>Sign in - MyDramaList</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#015284" />
    <meta name="dailymotion-domain-verification" content="dmg5lpc1ng53ymvet" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css?v=4.34.1d2">
    <link href="css/fontawesome/css/all.min.css?v=4.34.1a" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/app.css?v=4.34.1d2">
    <link rel="stylesheet" href="css/style.css?v=4.34.1d2">
    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <link href="dist/css/feeds.css?v=5.4.6" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/diberp.js?v=5.4.6g47"></script>
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/feeds.js"></script>
    <script type="text/javascript" src="/dist/en/js/vendor.js?v=5.4.6"></script>
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LdvmnwUAAAAAJqyD_ag2I14Z-uU3GPyA6eBb_4Y&hl=en-US'></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />

    <style type="text/css">
        .spnsr-wrapper-1950 {
            text-align: center;
            min-height: 30px;
            margin: 0 auto;
            padding: 30px 0;
        }
        
        .spnsr-wrapper-1950 .spnsr-top-1950 {
            backgroundx-image: url(assets/img/spnsr-text-wide2.png);
            background-repeat: no-repeat;
            background-color: #f3f8fc;
            background-size: 90%;
            background-position: center;
            border: none;
            text-align: center;
            margin: 0 auto;
            min-height: 90px;
            max-height: 250px;
            min-width: 728px;
            padding: 0;
            position: relative;
            visibility: visible;
            display: inline-block;
        }
        
        .spnsr-wrapper-1950 .spnsr-top-1950.is-mobile {
            min-width: 320px;
            text-align: center;
        }
        
        .spnsr-wrapper-1950 .spnsr-top-1950.is-desktop {
            min-height: 90px !important;
            overflow: hidden;
        }
        
        .spnsr-wrapper-1950 .spnsr-top-1950.ads-off {
            display: none;
        }
        
        .app-footer .spnsr-top-1950 {
            padding-top: 25px;
            text-align: center;
        }
        
        .spnsr_right_1950 {
            width: 300px;
            margin: 15px auto;
        }
        
        .spnsr_right_1950 .spnsr,
        .spnsr_right_1950 .spnsr_1950 {
            width: 300px;
            min-height: 250px;
            backgroundx-image: url(assets/img/spnsr-text-box2.png);
            background-size: 90%;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f3f8fc;
        }
        
        .footer-rec-site {
            padding-top: 26px;
            margin-top: 4px;
            position: relative;
        }
        
        .footer-rec-site:after {
            color: #909399;
            content: 'Recommended Site';
            display: block;
            font-size: 12px;
            left: 0;
            position: absolute;
            text-align: left;
            top: 0;
            width: 150px;
        }
    </style>
</head>

<body>
    <div id="app" class="app" style="">
        <div id="menu">
            <form class="form-inline form-search" action="/search" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Find Asian Dramas, Movies, Actors and more...">
                        <span class="input-group-btn">
                <button style="border-bottom-right-radius: 0;border-top-right-radius: 0;margin-top: -1px" type="submit" class="btn white"><i class="fa fa-search"></i>
                </button>
            </span>
                    </div>
                </div>
            </form>
            <ul class="nav">
                <li class="active">
                    <a href="/"><span class="nav-text">الرئيسية</span></a>
                    <ul class="nav-sub">

                        <li><a href="feeds.php"><span class="nav-text">محادثات</span></a></li>
                        <li><a href="articles.php"><span class="nav-text">مقالات</span></a></li>
                        <li><a href="trailers.php"><span class="nav-text">ترايلرز</span></a></li>
                        <li><a href="forum.php"><span class="nav-text">المدونة</span></a></li>
                        <li><a href="contributors.php"><span class="nav-text">المساهمون</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a hef="/"><span class="nav-text">البرامج</span></a>
                    <ul class="nav-sub">
                        <li><a href="topshows.php"><span class="nav-text">الأفضل</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">الاشهر</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">منوعة</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">الاجدد</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">مراجعات</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">ترشيحات</span></a></li>
                        <li><a href="topshows.php" rel="external nofollow"><span class="nav-text">نرشح لك</span></a></li>
                        <li><a href="addnewtitle.php" rel="external nofollow"><span class="nav-text">أضف عنوانا جديدا</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="/"><span class="nav-text">الافلام</span></a>
                    <ul class="nav-sub">
                        <li><a href="topshows.php"><span class="nav-text">الأفضل</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">الاشهر</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">القادم</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">مراجعات</span></a></li>
                        <li><a href="topshows.php"><span class="nav-text">ترشيحات</span></a></li>
                        <li><a href="addnewtitle.php"><span class="nav-text">أضف
عنوانا
جديدا</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="/"><span class="nav-text">اشخاص</span></a>
                    <ul class="nav-sub">
                        <li><a href="actors.php"><span class="nav-text">افضل الممثلين</span></a></li>
                        <li><a href="addpers.php" rel="external nofollow"><span class="nav-text">اضف شخصا جديدا</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div calss="app-content box-shadow-z0">
            <div id="hdr" class="app-header navbar-xs black box-shadow">
                <div class="app-header-wrapper">
                    <div class="navbar">
                        <a class="btn-slide-menu navbar-item  hidden-lg-up m-a-0 m-l"><i class="fa fa-bars"></i></a>

                        <a href="/" class="navbar-brand pull-right">
                            <img class="hidden-folded hidden-md-down inline" alt="MyDramaList" src="assets/logo_w.png" width="158" height="24">
                            <span class="hidden-folded hidden-lg-up inline">MDL</span><span class="beta4 label label-xs danger">v5.1</span></a>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.btn-slide-menu').on('click', function() {
                                    $('#menu').toggleClass('active');
                                    $('#hdr').toggleClass('active');
                                    $('#app').toggleClass('active');
                                });
                            });
                        </script>

                        <style type="text/css">
                            #menu.active {
                                display: block;
                            }
                            
                            #hdr.active {
                                position: inherit;
                            }
                            
                            #app.active {
                                display: flex;
                            }
                        </style>

                        <div class="collapse navbar-toggleable-sm pull-right" id="top-nav" data-pjax="">

                            <ul class="nav navbar-nav pull-left nav-active-border b-blue">

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">ﺗﺼﻔﺢ</span></a>
                                    <div class="dropdown-menu" style="min-width: 350px;padding:0;">
                                        <div class="row no-gutter" style="display: flex;">
                                            <div class="col-sm-6 col-lg-6" style="padding-top: 10px;padding-bottom: 10px;min-height: 322px;border-right: 1px solid #eee;">
                                                <div class="dropdown-header"><b>ﺑﺮاﻣﺞ ﺗﻠﻔﻴﺰﻳﻮﻧﻴﺔ</b></div>
                                                <a class="dropdown-item" href="topshows.php">اﻷﻓﻀﻞ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻷﺷﻬﺮ</a>
                                                <a class="dropdown-item" href="topshows.php">ﺑﺮاﻣﺞ ﻣﺘﻨﻮﻋﺔ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻷﺟﺪﺩ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻟﻘﺎﺩﻣﺔ</a>
                                                <a class="dropdown-item" href="topshows.php">ﻣﺮاﺟﻌﺎﺕ</a>
                                                <a class="dropdown-item" href="topshows.php">ﺗﺮﺷﻴﺤﺎﺕ</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="/recommendations" rel="external nofollow">ﻣﻮﺻﻰ ﺑﻪ</a>
                                                <a class="dropdown-item" rel="external nofollow" href="addnewtitle.php"> اﺿﺎﻓﺔ ﻋﻨﻮاﻥ جديد</a>
                                            </div>
                                            <div class="col-sm-6 col-lg-6" style="background-color: #f8f8f8;padding-top: 10px;padding-bottom: 10px;min-height: 322px;">
                                                <div class="dropdown-header"><b>ﺃﻓﻼﻡ</b></div>
                                                <a class="dropdown-item" href="topshows.php">اﻷﻓﻀﻞ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻻﺷﻬﺮ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻻﺟﺪﺩ</a>
                                                <a class="dropdown-item" href="topshows.php">اﻟﻘﺎﺩﻡ</a>
                                                <a class="dropdown-item" href="topshows.php">ﻣﺮاﺟﻌﺎﺕ</a>
                                                <a class="dropdown-item" href="topshows.php">ﺗﺮﺷﻴﺤﺎﺕ</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">اﺷﺨﺎﺹ</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="actors.php">الممثلين</a>
                                        <a class="dropdown-item" rel="external nofollow" href="addpers.php">اﺿﻒ ﺷﺨﺼﺎ ﺟﺪﻳﺪا</a> </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="/discussions" data-toggle="dropdown"><span class="nav-text">ﻣﺠﺘﻤﻊ</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="lists.php">ﻻﺣﺔ اﻟﻔﻬﺮﺱ</a> <a class="dropdown-item" href="forum.php">اﻟﻤﺪﻭﻧﺔ</a>
                                        <a class="dropdown-item" href="contributors.php">اﻟﻤﺴﺎﻫﻤﻮﻥ</a> </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">اﻟﺮﺋﻴﺴﻴﺔ</span></a>
                                    <div class="dropdown-menu">
                                        <a href="feeds.php" class="dropdown-item"><span class="nav-text">اﺧﺒﺎﺭ</span></a>
                                        <a href="articles.php" class="dropdown-item"><span class="nav-text">ﻣﻘﺎﻻﺕ</span></a>
                                        <a href="trailers.php" class="dropdown-item"><span class="nav-text">ﺗﺮاﻳﻠﺮﺯ</span></a>
                                         </div>
                                </li>

                            </ul>
                        </div>

                        <ul class="nav navbar-nav pull-left header-user">

                            <form style="margin-left:20px;" class="navbar-form form-inline hidden-md-down pull-right pull-none-sm navbar-item v-m" action="/search" role="search">
                                <div class="form-group l-h m-a-0">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="q" class="form-control p-x b-a rounded" placeholder="اﺑﺤﺚ ﻋﻦ ﻓﻴﻠﻢ, ﻣﺴﻠﺴﻞ, ﺩﺭاﻣﺎ ..."> <span class="input-group-btn"><button type="submit" class="btn b-a rounded no-b-l no-shadow"><i class="fa fa-search"></i></button></span></div>
                                </div>
                            </form>

                            <li class="nav-item dropdown nav-search hidden-lg-up">
                                <a class="nav-link" data-toggle="dropdown"><i class="far fa-search"></i></a>
                                <div class="dropdown-menu w-xxl animated fadeInUp p-a-0">
                                    <form class="navbar-form form-inline" action="/search" role="search">
                                        <div class="form-group l-h m-a-0">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Find Asian Dramas, Movies, Actors and more...">
                                                <span class="input-group-btn"><button type="submit" class="btn b-a no-b-l no-shadow"><i class="fa fa-search"></i></button></span></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <script type="text/template" id="nav-notifications"></script>
                            <li class="nav-item"><a class="nav-link m-l-sm" href="signup.php"><span style="font-size: 20px">ﺗﺴﺠﻴﻞ</span></a></li>
                            <li class="nav-item"><a class="nav-link nav-login m-l-sm" href="signin.php"><span style="font-size: 20px">ﺩﺧﻮﻝ</span></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div id="content" class="slideout-panel slideout-panel-right">
                <div class="app-body">
                    <div class="spnsr-wrapper-2007">
                        <div class="spnsr-top-2007 is-desktop">
                            <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CMrMnLjoz-cCFcM6GwodB3MAbQ">
                                <script type="text/javascript">
                                    mdltag.cmd.push(function() {
                                        mdltag.defineSlot('/47261215/header_top', [
                                            [970, 90],
                                            [728, 90],
                                            [970, 250]
                                        ], 'mdl-gpt-header-0');
                                    })
                                </script>
                                <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div>
                            </div>
                        </div>
                    </div>
                    <script type="application/ld+json">
                        {"@context":"http:\/\/schema.org","@id":"232","@type":"Person","url":"\/people\/232-lee-min-ho","name":"Lee Min Ho","image":{"@type":"ImageObject","url":"https:\/\/i.mydramalist.com\/kEpQwf.jpg"},"description":"Lee Min Ho is a South Korean actor and singer. He is best known for his leading roles in &quot;Boys Over Flowers&quot;, &quot;City Hunter&quot;, &quot;The Heirs&quot; and &quot;The Legend of the Blue Sea&quot;. In his second year of high school, Lee started acting. By his senior year in high school, he had joined &quot;Starhaus Entertainment&quot; with the help of an acquaintance. After going through training, Lee started auditioning and landed small roles in several television dramas. Early in his career, Lee went by the stage name Lee Min because his agency thought his birth name was too ordinary. However, as his stage name was pronounced and written in the same way as the Korean word &quot;immigration&quot;, he later said it was difficult to find himself in internet search results. He eventually went back to using his original name.\n\nIn August 2006, Lee sustained injuries in a serious car accident while riding with fellow actor Jung Il Woo, who was badly injured in the accident. His breakthrough came in 2009 with the lead role of Gu Jun Pyo in Boys Over Flowers. In July 2012, Lee was chosen as the most attractive male celebrity in TV commercials for cosmetics brands. \n(Source: Wikipedia)","birthDate":"1987-06-22"}</script>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="content-side hidden-sm-down">
                                    <div class="box hidden-sm-down">
                                        <div class="box-header p-b-0 text-center">
                                            <h1 class="film-title m-b-0">لي مين هو</h1> </div>
                                        <div class="box-body"> <img class="img-responsive" src="https://i.mydramalist.com/kEpQwc.jpg" alt="Min Ho Lee">
                                            <div class="share-container p-t p-b text-center"> <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-facebook-f"></i><i class="fab fa-facebook-f indigo"></i></a> <a rel="nofollow" href="https://plus.google.com/share?url=Lee Min Ho https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-google-plus-g"></i><i class="fab fa-google-plus-g red"></i></a> <a rel="nofollow" href="http://twitter.com/home?status=Check out Lee Min Ho @My_Drama_List https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a> <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=https://mydramalist.com/people/232-lee-min-ho&amp;media=https://i.mydramalist.com/kEpQw_c.jpg&amp;description=Lee Min Ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-pinterest-p"></i><i class="fab fa-pinterest-p red"></i></a> <a class="jbtn-like btn btn-social btn-icon rounded light" data-stats="people:232" data-id="232" data-type="people"><i class="fal fa-heart"></i><i class="fal fa-heart red"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="box clear hidden-sm-down">
                                        <div class="box-header primary">
                                            <h3>التفاصيل</h3></div>
                                        <div class="box-body light-b">
                                            <ul class="list m-b-0">
                                                <li class="list-item p-a-0"><b class="inline">الاسم الشخصي:</b> مين هو</li>
                                                <li class="list-item p-a-0"><b class="inline">الاسم العائلي:</b> لي</li>
                                                <li class="list-item p-a-0"><b class="inline">الاسم باللغة الاصلية :</b> 이민호</li>
                                                <li class="list-item p-a-0"><b class="inline">معروف ايضا بإسم:</b> لي مين</li>
                                                <li class="list-item p-a-0"><b class="inline">الجنسية:</b> كوريا الشمالية</li>
                                                <li class="list-item p-a-0"><b class="inline">الجنس:</b> ذكر</li>
                                                <li class="list-item p-a-0"><b class="inline">تاريخ الميلاد:</b> 22 يونيو 2020</li>
                                                <li class="list-item p-a-0"><b class="inline">العمر:</b> 32</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="box">
                                        <div class="box-body mdl-support-goal text-center" data-toggle="popover" title="" data-hasqtip="0" aria-describedby="qtip-0">
                                            <h3 class="text-md">ادعمنا على مواقع التواصل الاجتماعي<i class="fa fa-question-circle pull-right"></i></h3>
                                            <div class="progress">
                                                <div class="progress-bar success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                            <div class="row social-icons-items">
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.facebook.com/MyDramaListdotcom/"><i class="fab fa-facebook-f indigo"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">73,319</span> <span class="followers-name">معجب</span> </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://twitter.com/My_Drama_List"><i class="fab fa-twitter light-blue"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">9,720</span> <span class="followers-name">متابع</span> </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.youtube.com/channel/UCfnEmDUWC4m0k-tDDGVM2Uw"><i class="fab fa-youtube red"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">731</span> <span class="followers-name">مشترك</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <script type="text/javascript">
                                        $('.mdl-support-goal').qtip({
                                            content: `<p><b>Did you know that MyDramaList is a startup company with no outside funding?</b></p><p>Your VIP membership will go a long way in helping pay server bills,developer costs, and for coffee to keep us working all day long!<br/><br/>P.S You'll also get to hide pesky ads and get some nifty features too!</p>`,
                                            show: {
                                                event: 'mouseenter',
                                            },
                                            hide: {
                                                fixed: true,
                                                delay: 300
                                            },
                                            position: {
                                                my: "center left",
                                                at: "center right",
                                                adjust: {
                                                    method: "flip flip"
                                                },
                                                viewport: $(window)
                                            },
                                            style: 'qtip-wiki'
                                        });
                                    </script>
                                    <div class="spnsr_right_2007 clear">
                                        <div id="insticator-container">
                                            <div id="div-insticator-ad-1" adonis-marker=""></div>
                                            <div id="insticator-embed" embed-id="f06c82d0-4c77-4977-a4e6-61524d3d872e"></div>
                                            <div id="div-insticator-ad-2" adonis-marker=""></div>
                                            <script data-cfasync="false" type="text/javascript">
                                                /*<![CDATA[*/
                                                Insticator.ad.loadAd("div-insticator-ad-1");
                                                Insticator.ad.loadAd("div-insticator-ad-2");
                                                Insticator.load("em", {
                                                    id: "f06c82d0-4c77-4977-a4e6-61524d3d872e"
                                                }); /*]]>*/
                                            </script>
                                        </div>
                                    </div>
                                    <div class="title-contributors box">
                                        <div class="box-header b-b">
                                            <h2>أبرز المساهمين</h2></div>
                                        <div class="box-body">
                                            <div class="contributor">
                                                <a class="author-avatar" href="profile.php"><img src="https://i.mydramalist.com/B3vE7t.gif" class="avatar w-40" alt=""></a>
                                                <div class="details">
                                                    <div><a class="text-primary" href="profile.php"><b>أحلام</b></a></div>
                                                    <div>7 تعديلات</div>
                                                </div>
                                            </div>
                                            <div class="contributor">
                                                <a class="author-avatar" href="profile.php"><img src="https://i.mydramalist.com/64ARWt.jpg" class="avatar w-40" alt=""></a>
                                                <div class="details">
                                                    <div><a class="text-primary" href="profile.php"><b>أحمد</b></a></div>
                                                    <div>3 تعديلات</div>
                                                </div>
                                            </div>
                                            <div class="contributor">
                                                <a class="author-avatar" href="profile.php"><img src="https://i.mydramalist.com/letter/sangltdn" class="avatar w-40" alt=""></a>
                                                <div class="details">
                                                    <div><a class="text-primary" href="profile.php"><b>محمد</b></a></div>
                                                    <div>2 تعديلات</div>
                                                </div>
                                            </div>
                                            <div class="contributor">
                                                <a class="author-avatar" href="profile.php"><img src="https://i.mydramalist.com/qnXEPt.jpg" class="avatar w-40" alt=""></a>
                                                <div class="details">
                                                    <div><a class="text-primary" href="profile.php"><b>جميلة</b></a></div>
                                                    <div>2 تعديلات</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box clear">
                                        <div class="box-header primary">
                                            <h3>أشهر القوائم</h3> <small>قوائم ذات صلة  بالمستخدمين</small>
                                            <div class="box-tool"><a href="addlist.php">إضافة قائمة</a></div>
                                        </div>
                                        <div class="box-body">
                                            <div class="custom-list-preview">
                                                <div class="content people">
                                                    <a class="collection" href="/list/PL6P7Ax4" title="Favorite Actors"> <span class="list-item people">  <img src="https://i.mydramalist.com/eRpddm.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/LpwRxm.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/44Rv1m.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/jAOovm.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/rVN1pm.jpg" alt="Favorite Actors">  </span> </a>
                                                </div>
                                                <div class="title bottom"> <a href="/list/PL6P7Ax4" title="Favorite Actors">ممثليي المفضلين</a>
                                                    <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 320 شخصا</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 85 إعجابا</span> </div>
                                                </div>
                                            </div>
                                            <div class="custom-list-preview">
                                                <div class="content people">
                                                    <a class="collection" href="/list/l4jqazR3" title="Favorite Actors"> <span class="list-item people">  <img src="https://i.mydramalist.com/EJZm0m.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/WrjwPm.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/X81nOm.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/Bbvn5m.jpg" alt="Favorite Actors">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/p0EpDm.jpg" alt="Favorite Actors">  </span> </a>
                                                </div>
                                                <div class="title bottom"> <a href="/list/l4jqazR3" title="Favorite Actors">أفضل الممثلين</a>
                                                    <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 593 شخصا</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 64 إعجابا</span> </div>
                                                </div>
                                            </div>
                                            <div class="custom-list-preview">
                                                <div class="content people">
                                                    <a class="collection" href="/list/M4PxNMV4" title="Favourite Korean Actor/ess"> <span class="list-item people">  <img src="https://i.mydramalist.com/zNboPm.jpg" alt="Favourite Korean Actor/ess">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/E2zEOm.jpg" alt="Favourite Korean Actor/ess">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/kEpQwm.jpg" alt="Favourite Korean Actor/ess">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/eRpddm.jpg" alt="Favourite Korean Actor/ess">  </span> <span class="list-item people">  <img src="https://i.mydramalist.com/jAOovm.jpg" alt="Favourite Korean Actor/ess">  </span> </a>
                                                </div>
                                                <div class="title bottom"> <a href="/list/M4PxNMV4" title="Favourite Korean Actor/ess">أفضل الممثلات الكوريات</a>
                                                    <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 18 شخصا</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 42 إعجابا</span> <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> 3</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spnsr_right_2007">
                                        <div class="spnsr" id="mdl-gpt-fbox2-1" style="height:250px; width:300px;" data-google-query-id="CMvMnLjoz-cCFcM6GwodB3MAbQ">
                                            <script type="text/javascript">
                                                mdltag.cmd.push(function() {
                                                    mdltag.defineSlot('/47261215/film_box_2_1', [300, 250], 'mdl-gpt-fbox2-1');
                                                })
                                            </script>
                                            <div id="google_ads_iframe_/47261215/film_box_2_1_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                        </div>
                                    </div>
                                    <div class="box">
                                    <div class="box-header">
                                        <h2>أخر الحادثات</h2></div>
                                    <div class="box-divider m-a-0"></div>
                                    <ul class="list">
                                        <li class="list-item" style="width: 100%">

                                            <div class="list-left "><img src="https://i.mydramalist.com/letter/ceigna" class="w-40 avatar"></div>

                                            <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/the-untamed/45091-making-my-own-subtitle-translation">اريد صنع فيلم خاص بي ...</a>
                                                <div><small class="text-muted"><i class="fal fa-clock"></i> قبل 5 دقائق</small></div>
                                            </div>

                                        </li>

                                        <li class="list-item">
                                            <div class="list-left"><img src="https://i.mydramalist.com/rmBEjt.gif" class="w-40 avatar"></div>
                                            <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/forum-games/44371-which-drama-from-the-above-user-s-last-list-updates-would-you-pick-3">لمادا لا يمكننا انشاء كروب خاص بنا ...</a>
                                                <div><small class="text-muted"><i class="fal fa-clock"></i> قبل 20 دقائق</small></div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-left"><img src="https://i.mydramalist.com/2gPAOt.jpg" class="w-40 avatar"></div>
                                            <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/thai-dramas-lakorns-movies/44405-thai-dramas-without-revenge">لمادا لم يقم تاي يونك بال....</a>
                                                <div><small class="text-muted"><i class="fal fa-clock"></i>قبل 33 دقيقة</small></div>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-left"><img src="https://i.mydramalist.com/rmBEjt.gif" class="w-40 avatar"></div>
                                            <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/forum-games/44369-10-dramas-movies-with-2">دراما القائد، كيف ....</a>
                                                <div><small class="text-muted"><i class="fal fa-clock"></i> قبل 44 دقائق</small></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                    <div class="box">
                                        <div class="box-header">
                                            <h3>تريلير مميز</h3></div>
                                        <div class="box-divider m-a-0"></div>
                                        <div class="box-body featured-trailers clear p-l-xs p-r-xs">
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/best-fantasy-titles"> <img src="https://i.mydramalist.com/5m02ym.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i>افضل اعمال الفانتازيا</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/most-popular-action-dramas"> <img src="https://i.mydramalist.com/lBOo4m.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> اكثر افلام الاكشن شهرتا</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/amnesia"> <img src="https://i.mydramalist.com/5Q5RYm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> فيلم امنسيا</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/best-action-films"> <img src="https://i.mydramalist.com/anA4Mm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> أفضل افلام الاكشن</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/hottest-upcoming-dramas"> <img src="https://i.mydramalist.com/10jnQm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> اجداد الافلام القادمة</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/rich_guy_poor_girl"> <img src="https://i.mydramalist.com/qWb15m.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> الرجل الغني و البنت الفقيرة</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/top_manga_adaptations"> <img src="https://i.mydramalist.com/wJYENm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> اكثر المانكات اضافة</span> </a>
                                            </div>
                                            <div class="col-xs-6 col-lg-6 p-b">
                                                <a class="cover" href="/trailers/playlist/E1VK5ak"> <img src="https://i.mydramalist.com/NdRKem.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> مضي و جميل</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 250px;">
                                        <div class="sticky" style="width: 334px;">
                                            <div class="spnsr_right_2007">
                                                <div class="spnsr" id="mdl-gpt-fbox3-0" style="min-height: 250px;" data-google-query-id="CMzMnLjoz-cCFcM6GwodB3MAbQ">
                                                    <script type="text/javascript">
                                                        mdltag.cmd.push(function() {
                                                            mdltag.defineSlot('/47261215/film_box_3', [
                                                                [300, 600],
                                                                [300, 250]
                                                            ], 'mdl-gpt-fbox3-0');
                                                        })
                                                    </script>
                                                    <div id="google_ads_iframe_/47261215/film_box_3_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="box">
                                    <div class="box-header box-navbar">
                                        <div class="box-tool hidden-xs-down"> <span class="jbtn-like m-r" data-stats="people:232" data-id="232" data-type="people"><span class="like-cntb">7,008</span></span> <a href="/edit/people/details?id=232" class="text-sm text-primary" data-toggle="dropdown">إقترح تعديلا</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-header">تعديل المعلومات</div> <a class="dropdown-item" rel="nofollow" href="/edit/people/details?id=232"><span>التفاصيل الاولية</span></a> <a class="dropdown-item" rel="nofollow" href="/edit/people/cover?id=232"><span>الصورة</span></a> <a class="dropdown-item" rel="nofollow" href="/edit/people/cast?id=232"><span>التمثيل</span></a> <a class="dropdown-item" rel="nofollow" href="/edit/people/crew?id=232"><span>طاقم العمل</span></a>
                                                <div class="dropdown-divider"></div> <a class="dropdown-item btn-report m-b-sm" rel="nofollow" data-id="232" type="people">تبليغ</a> </div>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="page-item nav-item active"><a class="nav-link" href="/people/232-lee-min-ho">التفاصيل</a></li>
                                            <li class="page-item nav-item"><a class="nav-link" href="/people/232-lee-min-ho/articles">مقالات ذات صلة</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-sm-4 text-center cover hidden-md-up"> <img class="img-responsive inline" src="https://i.mydramalist.com/kEpQwc.jpg" alt="Min Ho Lee">
                                                <div class="p-t p-b text-center"> <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-facebook-f"></i><i class="fab fa-facebook-f indigo"></i></a> <a rel="nofollow" href="http://twitter.com/home?status=Check out Lee Min Ho @My_Drama_List https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a> <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=https://mydramalist.com/people/232-lee-min-ho&amp;media=https://i.mydramalist.com/kEpQw_c.jpg&amp;description=Lee Min Ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-pinterest-p"></i><i class="fab fa-pinterest-p red"></i></a> <a class="jbtn-like btn btn-social btn-icon rounded light" data-stats="people:232" data-id="232" data-type="people"><i class="fal fa-heart"></i><i class="fal fa-heart red"></i></a> </div>
                                            </div>
                                            <div class="col-sm-8 col-lg-12 col-md-12">
                                                <div class="hidden-md-up">
                                                    <h1 class="film-title hidden-md-up">لي مين هو</h1>
                                                    <ul class="list m-b-0">
                                                        <li class="list-item p-a-0"><b class="inline">الاسم:</b> لي مين هو</li>
                                                        <li class="list-item p-a-0"><b class="inline">الاسم الأصلي:</b> 이민호</li>
                                                        <li class="list-item p-a-0"><b class="inline">معروف أيضا بإسم:</b> Lee Min</li>
                                                        <li class="list-item p-a-0"><b class="inline">الجنسية:</b> كوريا الجنوبية</li>
                                                        <li class="list-item p-a-0"><b class="inline">الجنس:</b> ذكر</li>
                                                        <li class="list-item p-a-0"><b class="inline">تاريخ الميلاد:</b> 22 يوليوز 1987</li>
                                                        <li class="list-item p-a-0"><b class="inline">العمر:</b> 32</li>
                                                    </ul>
                                                </div>
                                                لي مين هو ممثل ومغني كوري جنوبي. يشتهر بأدواره الرائدة في "Boys Over Flowers" و "City Hunter" و "The Heirs" و "The Legend of the Blue Sea". في سنته الثانية من المدرسة الثانوية ، بدأ لي التمثيل. بحلول عامه الأول في المدرسة الثانوية ، انضم إلى "Starhaus Entertainment" بمساعدة أحد معارفه. بعد الانتهاء من التدريب ، بدأ Lee في الاختبار وهبط أدوارًا صغيرة في العديد من الأعمال الدرامية التلفزيونية. في وقت مبكر من حياته المهنية ، ذهب لي إلى مرحلة اسم لي مين لأن وكالته اعتقدت أن اسم ميلاده كان عاديًا جدًا. ومع ذلك ، نظرًا لأن اسم المسرح قد تم نطقه وكتابته بنفس طريقة الكلمة الكورية "الهجرة" ، فقد قال في وقت لاحق أنه من الصعب العثور على نفسه في نتائج البحث على الإنترنت. عاد في النهاية إلى استخدام اسمه الأصلي.

                                                في آب / أغسطس 2006 ، أصيب لي بجروح في حادث سيارة خطير أثناء ركوبه مع زميله الممثل يونغ إيل وو ، الذي أصيب بجروح خطيرة في الحادث. جاء انطلاقة له في عام 2009 مع دور قو جون بيو في "الأولاد على الزهور". في يوليو 2012 ، تم اختيار Lee كأفضل شخصية جذابة للذكور في الإعلانات التلفزيونية لماركات مستحضرات التجميل.
                                                (المصدر: ويكيبيديا)
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <h5 class="header">دراما</h5>
                                        <table class="table film-list">
                                            <thead>
                                                <tr>
                                                    <th class="year hidden-sm-down" width="70">السنة</th>
                                                    <th class="title">العنوان</th>
                                                    <th class="episodes hidden-sm-down">#</th>
                                                    <th class="role hidden-sm-down" width="160">الدور</th>
                                                    <th class="text-center" width="90">التقييم</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="mdl-35039">
                                                    <td class="year hidden-sm-down">2020</td>
                                                    <td class="title">
                                                        <b><a class="text-primary" href="/35039-the-king-the-eternal-monarch" title="The King: The Eternal Monarch">الملك: الملك الأبدي</a></b>
                                                        <button class="btn simple btn-manage-list" data-id="35039" data-stats="mylist:35039"><span>إضافة</span></button>
                                                        <div class="hidden-md-up text-muted">
                                                            <div>دراما كورية, <span>2020</span>, 0 حلقة</div>
                                                            <div class="role">
                                                                <span class="name _600">
<a href="/character/lee-gon" class="text-primary" title="Lee Gon - The King: The Eternal Monarch">لي ون</a>
</span>
                                                                <span class="text-muted roleid">ممثل رئيسي</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="episodes hidden-sm-down">0</td>
                                                    <td class="role hidden-sm-down">
                                                        <div class="name">
                                                            <a href="/character/lee-gon" class="text-primary" title="Lee Gon - The King: The Eternal Monarch">لي يان </a>
                                                        </div>
                                                        <div class="text-muted roleid">ممثل رئيسي</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="rating"><span class="fill" style="width:0%"></span></span>
                                                        <div class="text-sm">0.0</div>
                                                    </td>
                                                </tr>
                                                <tr class="mdl-21423">
                                                    <td class="year hidden-sm-down">2016</td>
                                                    <td class="title">
                                                        <b><a class="text-primary" href="/21423-7-first-kisses" title="7 First Kisses">7 القبلات الأولى</a></b>
                                                        <button class="btn simple btn-manage-list" data-id="21423" data-stats="mylist:21423"><span>add</span></button>
                                                        <div class="hidden-md-up text-muted">
                                                            <div>دراما كورية, <span>2016</span>, 8 حلقة</div>
                                                            <div class="role">
                                                                <span class="name _600">
Himself [Adventure writer](Ep.8)</span>
                                                                <span class="text-muted roleid">ممثل رئيسي</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="episodes hidden-sm-down">8</td>
                                                    <td class="role hidden-sm-down">
                                                        <div class="name">
                                                           ممثل رئيسي</div>
                                                        <div class="text-muted roleid">ممثل رئيسي</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="rating"><span class="fill" style="width:69%"></span></span>
                                                        <div class="text-sm">6.9</div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <h5 class="header">أفلام</h5>
                                        <table class="table film-list">
                                            <thead>
                                                <tr>
                                                    <th class="year hidden-sm-down" width="70">السنة</th>
                                                    <th class="title">العنوان</th>
                                                    <th class="role hidden-sm-down" width="160">الدور</th>
                                                    <th class="text-center" width="90">التقييم</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="mdl-51667">
                                                    <td class="year hidden-sm-down">2018</td>
                                                    <td class="title">
                                                        <b><a class="text-primary" href="/51667-believer-extended-cut" title="Believer: Extended Cut">مؤمن: الموسعة قص</a></b>
                                                        <button class="btn simple btn-manage-list" data-id="51667" data-stats="mylist:51667"><span>إضافة</span></button>
                                                        <div class="hidden-md-up text-muted">
                                                            <div>دراما كورية, <span>2018</span>, </div>
                                                            <div class="role">
                                                                <span class="name _600">
Lee Min Ho</span>
                                                                <span class="text-muted roleid">(Guest Role)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="role hidden-sm-down">
                                                        <div class="name">
                                                            Lee Min Ho</div>
                                                        <div class="text-muted roleid">Guest Role</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="rating"><span class="fill" style="width:100%"></span></span>
                                                        <div class="text-sm">10.0</div>
                                                    </td>
                                                </tr>
                                                <tr class="mdl-24222">
                                                    <td class="year hidden-sm-down">2018</td>
                                                    <td class="title">
                                                        <b><a class="text-primary" href="/24222-drug-war" title="Believer">Believer</a></b>
                                                        <button class="btn simple btn-manage-list" data-id="24222" data-stats="mylist:24222"><span>add</span></button>
                                                        <div class="hidden-md-up text-muted">
                                                            <div>Korean Movie, <span>2018</span>, </div>
                                                            <div class="role">
                                                                <span class="name _600">
Lee Min Ho</span>
                                                                <span class="text-muted roleid">(Guest Role)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="role hidden-sm-down">
                                                        <div class="name">
                                                            Lee Min Ho</div>
                                                        <div class="text-muted roleid">Guest Role</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="rating"><span class="fill" style="width:82%"></span></span>
                                                        <div class="text-sm">8.2</div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                       
                            
                                        
                                    </div>
                                    <div class="row spnsr-row no-gutter">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="spnsr_right_2007">
                                                <div class="spnsr" id="mdl-gpt-fbox1-0" style="height:250px; width:300px;" data-google-query-id="CM3MnLjoz-cCFcM6GwodB3MAbQ">
                                                    <script type="text/javascript">
                                                        mdltag.cmd.push(function() {
                                                            mdltag.defineSlot('/47261215/film_box_1', [300, 250], 'mdl-gpt-fbox1-0');
                                                        })
                                                    </script>
                                                    <div id="google_ads_iframe_/47261215/film_box_1_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="spnsr_right_2007">
                                                <div class="spnsr" id="mdl-gpt-fbox1-1" style="height:250px; width:300px;" data-google-query-id="CM7MnLjoz-cCFcM6GwodB3MAbQ">
                                                    <script type="text/javascript">
                                                        mdltag.cmd.push(function() {
                                                            mdltag.defineSlot('/47261215/film_box_1_1', [300, 250], 'mdl-gpt-fbox1-1');
                                                        })
                                                    </script>
                                                    <div id="google_ads_iframe_/47261215/film_box_1_1_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="pull-left"><a class="text-primary" href="/people/232-lee-min-ho/articles">View All</a></div>
                                        <h5 class="header">Articles</h5>
                                    </div>
                                    <div class="m-a-0 articles-listing">
                                        <div class="box-body" data-id="4057">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-4 row-cell cover">
                                                    <a href="/article/help-i-ve-fallen-down-a-show-hole-and-can-t-get-out-011014057"> <img class="img-responsive cover" src="https://i.mydramalist.com/dvZVec.jpg"> </a>
                                                </div>
                                                <div class="col-xs-9 col-sm-8 row-cell content">
                                                    <div class="text-muted"></div>
                                                    <h6 class="text-primary title"><a href="/article/help-i-ve-fallen-down-a-show-hole-and-can-t-get-out-011014057">Help! I’ve Fallen Down a Show Hole and Can’t Get Out!</a></h6>
                                                    <div class="text-muted"> <span class="spacer"><span class="label success">Drama Recaps</span> - Dec 13, 2019</span>
                                                    </div>
                                                    <p>To quote the Urban Dictionary, a Show Hole is “that empty feeling that wraps around your soul because you don’t know now what do with your life” after binge-watching a series to the bitter end. Yep… That’s me… RIGHT NOW!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body" data-id="3355">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-4 row-cell cover">
                                                    <a href="/article/boys-over-flowers-10-years-on-011013355"> <img class="img-responsive cover" src="https://i.mydramalist.com/x2jNjc.jpg"> </a>
                                                </div>
                                                <div class="col-xs-9 col-sm-8 row-cell content">
                                                    <div class="text-muted"></div>
                                                    <h6 class="text-primary title"><a href="/article/boys-over-flowers-10-years-on-011013355">Boys Over Flowers: 10 Years On</a></h6>
                                                    <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - Jun 3, 2019</span>
                                                    </div>
                                                    <p>Check out what the main cast of BOF has been up to over the past 10 years</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div id="cmtsapp" pid="232" ptype="actor" title="Lee Min Ho" class="box comments-box post-comments" style="min-height: 100px;">
                                    <div class="box-header b-b">
                                        <h3>Comments <span>(802)</span></h3>
                                        <div class="lang-switcher"><span class="active">English <i>802</i></span></div>
                                    </div>
                                    <div class="box-body thread-post-form b-b">
                                        <div class="post-form-body">
                                            <div class="avatar"><img src="https://i.mydramalist.com/letter/ilyasselmoutaoukkil" class="user-avatar"></div>
                                            <div class="post-form-textarea">
                                                <div class="form-group">
                                                    <div class="el-textarea">
                                                        <textarea placeholder="Post a comment..." class="el-textarea__inner" style="min-height: 54px; height: 54px;"></textarea>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body thread-post-form">
                                        <ul id="comment-top" class="post-list">
                                            <li id="post-2916039" class="post comment">
                                                <!---->
                                                <div class="post-content">
                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                        <li><span class="btn-like">1 <i class="like-heart"></i></span></li>
                                                        <li class="dropdown">
                                                            <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                        </li>
                                                        <li><a href="#" class="reply">Reply</a></li>
                                                    </ul>
                                                    <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/EPlzzt.gif" class="user-avatar"></span></div>
                                                    <div class="post-body">
                                                        <div class="post-header p-b-xs"><a href="profile.php" target="_blank" class="user-display text-primary in-link"><b>jayxyz</b></a> <span class="mdl-utag"><span class="mdl-btag"><span title="Verified Account" class="mdl-verified"></span>
                                                            <!---->
                                                            </span>
                                                            <!---->
                                                            <!---->
                                                            </span> <span class="date">a month ago</span></div>
                                                        <div class="post-message">
                                                            <p>running man episode please</p>
                                                        </div>
                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                            <li class="dropdown">
                                                                <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                            </li>
                                                            <li><span class="btn-like">1 <i class="like-heart"></i></span></li>
                                                            <li><a href="#" class="reply">Reply</a></li>
                                                        </ul>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </li>
                                            <li id="post-2854229" class="post comment">
                                                <!---->
                                                <div class="post-content">
                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                        <li><span class="btn-like">1 <i class="like-heart"></i></span></li>
                                                        <li class="dropdown">
                                                            <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                        </li>
                                                        <li><a href="#" class="reply">Reply</a></li>
                                                    </ul>
                                                    <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/letter/CLKD" class="user-avatar"></span></div>
                                                    <div class="post-body">
                                                        <div class="post-header p-b-xs"><a href="profile.php" target="_blank" class="user-display text-primary in-link"><b>CLKD</b></a> <span class="mdl-utag"><span class="mdl-btag"><!----> <!----></span> <span class="vip-tag">VIP</span>
                                                            <!---->
                                                            </span> <span class="date">2 months ago</span></div>
                                                        <div class="post-message">
                                                            <p>Who's seen the new photo shoot in Dazed!? He's back!!!</p>
                                                        </div>
                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                            <li class="dropdown">
                                                                <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                            </li>
                                                            <li><span class="btn-like">1 <i class="like-heart"></i></span></li>
                                                            <li><a href="#" class="reply">Reply</a></li>
                                                        </ul>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </li>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="box-footer">
                                        <button type="button" class="el-button btn btn-block btn-default el-button--default">
                                            <!---->
                                            <!----><span><strong>Load more comments</strong></span></button>
                                    </div>
                                    <!---->
                                    <div class="el-loading-mask" style="display: none;">
                                        <div class="el-loading-spinner">
                                            <svg viewBox="25 25 50 50" class="circular">
                                                <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                            </svg>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <script src="/dist/en/js/comments.js?v=5.4.6" type="text/javascript"></script>
                            </div>
                        </div>
                    </div>
                    <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
                </div>
            </div>
            <div id="footer" class="app-footer black dk pos-rlt">

                <div class="footer p-x-lg">
                    <div class="row">

                        <div class="col-sm-2">
                            <div class="m-y">
                                <h3 class="text-md">ﺗﺎﺑﻌﻨﺎ ﻋﻠﻰ ﻣﻮاﻓﻊ اﻟﺘﻮاﺻﻞ</h3>
                                <div class="m-t inline m-y">
                                    <a href="https://www.facebook.com/MyDramaListdotcom/" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-facebook-f"></i> <i class="fab fa-facebook-f indigo"></i></a>
                                    <a href="https://twitter.com/My_Drama_List" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-twitter"></i> <i class="fab fa-twitter light-blue"></i></a>
                                    <a href="https://www.instagram.com/my.drama.list/" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-instagram"></i> <i class="fab fa-instagram red"></i></a>
                                    <a href="https://www.youtube.com/channel/UCfnEmDUWC4m0k-tDDGVM2Uw" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-youtube"></i> <i class="fab fa-youtube red"></i></a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="m-y">
                                <h3 class="text-md">اﻋﻤﻞ ﻣﻌﻨﺎ</h3>
                                <ul class="nav m-t">
                                    <li class="m-t-sm"><a href="/discussions/community-tasks/29624-mdl-writers-article-ideas-discussion"><span>ﻣﺘﺎﺏ</span></a></li>
                                    <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>ﺇﺷﻬﺎﺭ</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="m-y">
                                <h3 class="text-md">ﻣﻌﻠﻮﻣﺎﺕ ﻋﻨﺎ</h3>
                                <ul class="nav m-t">
                                    <li class="m-t-sm"><a href="/faq" rel="external nofollow"><span>اﻷﺳﺌﻠﺔ اﻟﻤﺘﻜﺮﺭﺓ</span></a></li>
                                    <li class="m-t-sm"><a href="/about" rel="external nofollow"><span>ﻣﻦ ﻧﺤﻦ</span></a></li>
                                    <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>ﺗﻮاﺻﻞ ﻣﻌﻨﺎ</span></a></li>
                                    <li class="m-t-sm"><a href="/terms" rel="external nofollow"><span>ﻗﻮاﻧﻴﻦ اﻟﺨﺪﻣﺔ</span></a></li>
                                    <li class="m-t-sm"><a href="/privacy" rel="external nofollow"><span>ﺳﻴﺎﺳﺔ اﻟﺨﺼﻮﺻﻴﺔ</span></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="m-t">
                                <a href="/"><img alt="MyDramaList" src="assets/logo_w.png" width="158" height="24"></a>
                            </div>
                            <div><small class="text-muted">© ﺟﻤﻴﻊ اﻟﺤﻘﻮﻕ ﻣﺤﻔﻮﻇﺔ.</small></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mdl-manage-modal"></div>
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>

</body>

</html>