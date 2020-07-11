<?php
session_start();
include("process/conn.php");
 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }

if ($login){
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>منصة التواصل</title>
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
    <link rel="stylesheet" href="dist/css/feeds.css">

    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/default-skin.css">
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>




    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/feeds.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <link rel="stylesheet" href="css/star-rating-svg.css">
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/Lobibox.js"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="dist/css/profile.css">
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>

    <link rel="stylesheet" href="css/star-rating-svg.css">

    <style type="text/css">
        .spnsr-wrapper-1950 {
            text-align: center;
            min-height: 30px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .spnsr-wrapper-1950 .spnsr-top-1950 {
            background-image: url(assets/img/spnsr-text-wide2.png);
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

        .post-list .post-content .active {
            color: #F44455;
        }

    </style>
</head>

<body>
    <?php include("menu.php");addvisite('feeds'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2007">
                <div class="spnsr-top-2007 is-desktop">

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?php
                                                        if (isset($_GET['pr'])){
                                                        if ($_GET['pr']=='friends'){
                                                            $op='fr';
                                                            $sql="
                                                            SELECT 
                                                            
                                                            friend.rfrom,friend.rto,friend.status,
                                                            feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn
                                                            
                                                            FROM feed JOIN friend ON feed.idU=friend.rfrom WHERE friend.rto=? AND friend.status='1'
                                                            
                                                            UNION 
                                                            
                                                            SELECT 
                                                            
                                                            friend.rfrom,friend.rto,friend.status,
                                                            feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn
                                                            
                                                            FROM feed JOIN friend ON feed.idU=friend.rto WHERE friend.rfrom=? AND friend.status='1'
                                                            
                                                            
                                                            ORDER BY wn LIMIT 10
                                                            ";
                                                            
                                                            $sql2="SELECT 
                                                            
                                                            friend.rfrom,friend.rto,friend.status,
                                                            feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn
                                                            
                                                            FROM feed JOIN friend ON feed.idU=friend.rfrom WHERE friend.rto=? AND friend.status='1'
                                                            
                                                            UNION 
                                                            
                                                            SELECT 
                                                            
                                                            friend.rfrom,friend.rto,friend.status,
                                                            feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn
                                                            
                                                            FROM feed JOIN friend ON feed.idU=friend.rto WHERE friend.rfrom=? AND friend.status='1'";
                                                           //-->get if the poster if a friend and show it > 
                                                        }else{
                                                            $op='pb';
                                                            if(isset($_GET['id'])){ 
                                                            
                                                            $sql="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE id=? ORDER BY wn DESC  ";    
                                                                
                                                            }else{
                                                                
                                                            $sql="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?) ORDER BY wn DESC LIMIT 10 ";
                                                                
                                                            }
                                                            
                                                            $sql2="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?) ORDER BY wn DESC  ";
                                                        }
                                                    }else{
                                                            $op='pb';
                                                            $sql="SELECT feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?) ORDER BY wn DESC LIMIT 10 ";
                                                            
                                                             $sql2="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?) ORDER BY wn DESC  ";
                                                    }
                                                    
                                                        $stmte = $conn->prepare($sql);
                                                        if ($op=='fr'){
                                                            $stmte->bind_param('ss', $_SESSION['id'], $_SESSION['id']);
                                                        }else{
                                                            if(isset($_GET['id'])){ 
                                                                $stmte->bind_param('s', $_GET['id']);
                                                            }else{
                                                                $stmte->bind_param('s', $_SESSION['id']);
                                                            }
                                                        }
                                                        $stmte->execute();
                                                        $resulte=$stmte->get_result();
                                                        $numr=$resulte->num_rows;
            
                                                    ?>

                    <div class="col-lg-4 col-md-4" style="margin-top: 20px;">
                        <div class="content-side">

                            <ul class="nav-feeds nav nav-pills nav-stacked" style="width: 100%;padding: 0px">
                                <li class="nav-item <?php if ($op=='pb'){ ?> active <?php } ?>"><a href="?pr=public" class="nav-link"><span><i class="far fa-globe"></i></span> الرئيسية</a></li>
                                <li class="nav-item <?php if ($op=='fr'){ ?> active <?php } ?>"><a href="?pr=friends" class="nav-link"><span><i class="far fa-users"></i></span> الاصدقاء</a></li>
                            </ul>

                            <div class="box">
                                <div class="box-body mdl-support-goal text-center" data-toggle="popover" title="">
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
                                    content: `<p><b>Did you know that MyDramaList is a company with only 2 full time staff that’s taken no outside funding?</b></p><p>Your VIP membership will go a long way in helping pay server bills,developer costs, and for coffee to keep us working all day long!<br/><br/>P.S You'll also get to hide pesky ads and get some nifty features too!</p>`,
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

                            ads

                            <div class="hidden-sm-down">
                                <!-- Adds -->
                                <div>
                                    <div class="box">
                                        <div class="box-header">
                                            <h2>أخر الحادثات</h2>
                                        </div>
                                        <div class="box-divider m-a-0"></div>
                                        <ul class="list">
                                            <?php getlastdes('rec_desc_im') ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h3>تريلير مميز</h3>
                                    </div>
                                    <div class="box-divider m-a-0"></div>
                                    <div class="box-body featured-trailers clear p-l-xs p-r-xs">
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/best-fantasy-titles"> <img src="https://i.mydramalist.com/5m02ym.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i>افضل اعمال الفانتازيا</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/most-popular-action-dramas"> <img src="https://i.mydramalist.com/lBOo4m.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> اكثر افلام الاكشن شهرتا</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/amnesia"> <img src="https://i.mydramalist.com/5Q5RYm.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> فيلم امنسيا</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/best-action-films"> <img src="https://i.mydramalist.com/anA4Mm.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> أفضل افلام الاكشن</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/hottest-upcoming-dramas"> <img src="https://i.mydramalist.com/10jnQm.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> اجداد الافلام القادمة</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/rich_guy_poor_girl"> <img src="https://i.mydramalist.com/qWb15m.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> الرجل الغني و البنت الفقيرة</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/top_manga_adaptations"> <img src="https://i.mydramalist.com/wJYENm.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> اكثر المانكات اضافة</span> </a>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 p-b">
                                            <a class="cover" href="/trailers/playlist/E1VK5ak"> <img src="https://i.mydramalist.com/NdRKem.jpg" alt="" /> <span class="title"><i class="fa fa-play-circle"></i> مضي و جميل</span> </a>
                                        </div>
                                    </div>
                                </div>

                                ads

                            </div>

                        </div>
                    </div>

                    <div id="news_feeds" class="col-lg-8 col-md-8 m-b">
                        <div id="app_view">
                            <div>
                                <div>

                                    <div id="feed-form" class="box">
                                        <div>

                                            <div class="box-body">
                                                <div class="feed-textarea">
                                                    <div class="el-textarea">
                                                        <textarea onclick="showtag()" id="text" placeholder="شاركنا جديدك هنا ..." class="el-textarea__inner" style="min-height: 54px; height: 54px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-attachment upload" id="upload" style="display:none">
                                                <div class="feed-collage" id="feedc" style="padding:16px">

                                                </div>
                                            </div>
                                            <div class="feed-body m-t" id="linksh" style="display:none"></div>
                                            <div style="display:none" class="tag-media">
                                                <div class="tag-media-wrapper">
                                                    <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-9435" class="el-autocomplete" style="display: block;">
                                                        <div class="el-input el-input--suffix">
                                                            <!----><input onkeyup="gettitle(this)" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان..." minlength="3" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-9435-item--1">
                                                            <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i>
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!----></span>
                                                                <!----></span>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <div role="region" id="searchdiv" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                            <div class="el-scrollbar">
                                                                <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                    <ul id="listT" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-9435">
                                                                        <p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;"></p>
                                                                    </ul>
                                                                </div>
                                                                <div class="el-scrollbar__bar is-horizontal">
                                                                    <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                                </div>
                                                                <div class="el-scrollbar__bar is-vertical">
                                                                    <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                                </div>
                                                                <div id="searchdS" class="el-loading-mask" style="display: none;">
                                                                    <div class="el-loading-spinner">
                                                                        <svg viewBox="25 25 50 50" class="circular">
                                                                            <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>

                                            <div  style="margin-top:10px;" class="box-footer">
                                                <div class="box-footer-right">

                                                    <div class="feed-perms">
                                                        <div class="el-dropdown">
                                                            <span onclick="priv('chan')" class="el-dropdown-link el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-9635" role="button" tabindex="0"><i id="shopri" class="fa fa-globe"></i> <span id="shopr" class="hidden-sm-down">عام</span> <i class="el-icon-more el-icon--right"></i>
                                                            </span>

                                                            <ul id="privop" class="el-dropdown-menu el-popper" style="display: none;width:max-content" id="dropdown-menu-9635">
                                                                <li onclick="priv('pub')" id="pr_pub" tabindex="-1" class="el-dropdown-menu__item privacy-item active">
                                                                    <div class="privacy-label"><i class="fa fa-globe"></i> عام</div>

                                                                </li>
                                                                <li onclick="priv('pri')" id="pr_pri" tabindex="-1" class="el-dropdown-menu__item privacy-item">
                                                                    <div class="privacy-label"><i class="fa fa-users"></i> الاصدقاء فقط</div>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <button id="donefeed" onclick="donefeed()" type="button" class="el-button btn btn-submit white el-button--default ">
                                                        <span><span>نشر</span></span>
                                                    </button>
                                                    
                                                    <button id="cancelpub" style="display:none;margin-right: 8px;margin-left: 8px;" onclick="canceledit()" type="button" class="el-button btn btn-submit red el-button--danger ">
                                                        <span><span>ألغاء</span></span>
                                                    </button>
                                                </div>
                                                <div class="box-footer-left">
                                                    <div class="btn btn-share-image">
                                                        <i class="far fa-images"></i>
                                                        <input id="fls" multiple accept='image/*' name="profp" onchange="uploasdmypic(this)" style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;width: 100%;padding: 0;margin: 0;cursor: pointer;filter: alpha(opacity=0);opacity: 0;" type="file">
                                                    </div>

                                                    <div data-toggle="modal" data-target="#add_link" class="btn feed btn-share-link">
                                                        <i class="far fa-link"></i>
                                                    </div>

                                                    <div class="feed-spoiler-opt">
                                                        <label style="margin-bottom: 4px" role="checkbox" class="el-checkbox">
                                                            <input type="checkbox" id="spoi" name="" data-toggle="toggle">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="el-loading-mask" style="display: none;">
                                            <div class="el-loading-spinner">
                                                <svg viewBox="25 25 50 50" class="circular">
                                                    <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hidden-sm-up">
                                        <ul class="nav-feeds nav nav-pills nav-stacked">
                                            <li class="nav-item"><a href="?pr=public" class="nav-link active lactive"><span><i class="fa fa-globe"></i></span> الرئيسية</a></li>
                                            <li class="nav-item"><a href="?pr=friends" class="nav-link"><span><i class="fa fa-users"></i></span> الاصدقاء</a></li>
                                        </ul>
                                    </div>



                                    <?php if(isset($_GET['id'])){ ?>
                                    <div class="feeds-list">
                                        <?php
                                        $feedinfo=$resulte->fetch_assoc();
                                            ?>
                                        <div id="feed_<?php echo $feedinfo['id']; ?>" class="feed_story">
                                            <div id="feedid" data="<?php echo $feedinfo['id']; ?>" class="box">
                                                <div class="feed-wrapper">


                                                    <div id="feedb_<?php echo $feedinfo['id']; ?>" class="box-body feed-body">
                                                        <div class="author-meta" style="display: inline-flex;">
                                                            <?php 
                                                            $useri;
                                                            $useri=userinfo($feedinfo['idU']);
                                                            ?>
                                                            <a target="_blank" href="profile.php?id=<?php echo $feedinfo['idU']; ?>" class="feed_author">
                                                                <img src="process/<?php echo $useri['picture']; ?>" class="w-48 avatar">
                                                            </a>
                                                            <div class="header" style="margin-right: 10px">
                                                                <a target="_blank" href="profile.php?id=<?php  echo $useri['code'] ?>" class="text-primary author-name">
                                                                    <?php  echo $useri['username']; ?>
                                                                </a>
                                                                <div class="feed-status">

                                                                </div>
                                                                <div class="feed-date">
                                                                    <i title="public" class="stream-icon <?php $dett=detailpost($feedinfo['id'],'fd'); if ($feedinfo['privacy']=='pub'){ ?>public<?php }else{?>friends<?php } ?>"></i>
                                                                    <script type="application/javascript">
                                                                        moment.locale("ar_AL");
                                                                        document.write(moment('<?php echo $feedinfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="box-tool" style="right:96%">
                                                                <div class="options dropdown">
                                                                    <a id="menutfd<?php echo $feedinfo['id']; ?>" data-toggle="dropdown" class=" <?php if($dett['myRe']=='false'){ ?>menu<?php }else{} ?>">
                                                                     <?php if($dett['myRe']=='true'){ ?><i style="color:red" class="fa fa-flag"></i><?php } ?>
                                                                    </a>
                                                                    
                                                                    <?php if (isset($_SESSION['id'])){ ?>
                                                                    <?php if($_SESSION['id']==$feedinfo['idU']){ ?>

                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a onclick="fdupdate('<?php echo $feedinfo['id']; ?>')" class="dropdown-item ">تعديل</a>
                                                                        <a onclick="deletefeed('<?php echo $feedinfo['id'] ?>')" class="dropdown-item ">حذف</a>
                                                                    </div>

                                                                    <?php }else{ ?>
                                                                    
                                                                    <?php  if($dett['myRe']=='false'){ ?>
                                                                    
                                                                    <div onclick="opertion(`fd|report`,`<?php echo $feedinfo['id'] ?>`)" class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a id="menutdivfd<?php echo $feedinfo['id']; ?>"  class="dropdown-item ">إبلاغ</a>
                                                                    </div>
                                                                    
                                                                    <?php }else{ ?>
                                                                    
                                                                    <div onclick="opertion(`fd|report`,`<?php echo $feedinfo['id'] ?>`)" class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a id="menutdivfd<?php echo $feedinfo['id']; ?>" class="dropdown-item "> إلغاء الإبلاغ</a>
                                                                    </div>
                                                                    <?php } ?>
                                                                    
                                                                    <?php } ?>

                                                                    <?php } ?>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if($feedinfo['spoiler']=='true'){ $sp=true;?>
                                                        <div id="feedsp<?php echo $feedinfo['id']; ?>" onclick="fdspoiler('<?php echo $feedinfo['id']; ?>',this)" class="feed-spoiler">هذا المنشور يحتوي على حرق.</div>

                                                        <?php }else{
                                                                $sp=false;
                                                            } ?>


                                                        <?php if($feedinfo['text']==''){}else{ ?>
                                                        <p id="fd_desc<?php echo $feedinfo['id']; ?>" class="feed-desc"><?php echo $feedinfo['text']; ?></p>
                                                        <?php } ?>

                                                        <?php
                                            
                                                            $stmteI = $conn->prepare('SELECT * FROM feedimages WHERE idF=?');
                                                            $stmteI->bind_param("s", $feedinfo['id']);
                                                            $stmteI->execute();
                                                            $resulteI=$stmteI->get_result();
                                                            $numrI=$resulteI->num_rows;
                                                            $imgs;
                                            
                                                        ?>

                                                        <?php if ($numrI=='0' || $numrI>4){}else{ ?>

                                                        <div id="fd_atta<?php echo $feedinfo['id']; ?>" class="feed-attachment posts">
                                                            <div class="feed-collage collage-<?php echo $numrI;  ?>">

                                                                <?php $coll=true; $fp=true;?>

                                                                <div class="collage-photo">
                                                                    <?php $onlf=true;$others=[]; while($imgs=$resulteI->fetch_assoc()){ ?>
                                                                    <?php  if($onlf){ ?>
                                                                    <img onclick="feedims('<?php echo 'imsgr'.$feedinfo['id'];  ?>',this)" style="height:460px" src="process/<?php echo $imgs['name']; ?>" data-vue-img-src="<?php echo $imgs['name'] ?>" data-vue-img-group="<?php echo 'imsgr'.$feedinfo['id'];  ?>" style="cursor: pointer;">
                                                                    <?php $onlf=false;}else{array_push($others,$imgs['name']); } ?>
                                                                    <?php } ?>
                                                                </div>

                                                                <div class="collage-photo collage-photo-by-2">

                                                                    <?php foreach($others as $othr){ ?>

                                                                    <img onclick="feedims('<?php echo 'imsgr'.$feedinfo['id'];  ?>',this)" style="height:<?php echo ceil(100/($numrI-1));  ?>%" src="process/<?php echo $othr; ?>" data-vue-img-src="<?php $othr; ?>" data-vue-img-group="<?php echo 'imsgr'.$feedinfo['id'];  ?>" style="cursor: pointer;">

                                                                    <?php } ?>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        
                                                       

                                                        <?php } ?>
                                                         <?php if($feedinfo['link']=='' || !filter_var($feedinfo['link'], FILTER_VALIDATE_URL) ){
                                                        }else{ ?>
                                                            
                                                           <div class="feed-attachment link">
                                                               <?php
                                                              
                                                                $getfeedlink=urlfetch($feedinfo['link']);
                                                                if ($getfeedlink){
                                                                $getfeedlink['link']=$feedinfo['link'];
                                                                $host=parse_url($feedinfo['link']);
                                                              ?>
                                                               <div class="attachment-thumbnail" style="background-image: url(&quot;<?php echo $getfeedlink['image_src']; ?>&quot;);"><a rel="nofollow" target="_blank" href="<?php echo $feedinfo['link']; ?>"></a></div> <div class="attachment-body"><div><a rel="nofollow" target="_blank" href="<?php echo $feedinfo['link']; ?>" class="text-primary"><b><?php echo $getfeedlink['title']; ?></b></a></div> <p><?php echo $getfeedlink['body']; ?></p> <div><small class="text-muted"><?php echo $host['host']; ?></small></div></div>
                                                               <?php } ?>
                                                           </div>
                                                        
                                                        <?php } ?>
                                                        <?php if($sp){ ?>
                                                        <script>
                                                            $("#fd_desc<?php echo $feedinfo['id']; ?>, #fd_atta<?php echo $feedinfo['id']; ?>").hide()

                                                        </script>
                                                        <div style="display:none" onclick="fdspoiler('<?php echo $feedinfo['id']; ?>',this)" id="fd_hde<?php echo $feedinfo['id']; ?>"><button class="btn m-t-xs btn-block btn-link">إخفاء المنشور</button></div>

                                                        <?php }else{} ?>
                                                        <?php if ($feedinfo['post']==''){}else{ ?>
                                                        <?php  $ti; $ti=titleinfo($feedinfo['post']); ?>

                                                        <div class="media-tag-item">
                                                            <a target="_blank" class="media-tag-cover" href="post?id=<?php echo $ti['id']; ?>" style="margin-left:15px;">
                                                                <img src="process/<?php echo $ti['image']; ?>" class="img-responsive">
                                                            </a>
                                                            <div class="media-tag-body">
                                                                <a target="_blank" class="media-tag-title" href="post?id=<?php echo $ti['id']; ?>">

                                                                    <?php echo $ti['title']; ?></a>

                                                                <div class="media-tag-text"><?php echo substr($ti['synopsis'],0,100); ?></div>
                                                            </div>
                                                        </div>

                                                        <?php } ?>


                                                        <div class="box-social-footer pull-right">

                                                            <?php
                                                            
                                                            $stmtmL = $conn->prepare("SELECT postT,idP,idL FROM likes WHERE postT='fd' AND idP=? AND idL!=''");
                                                            $stmtmL->bind_param('s', $feedinfo['id']);
                                                            $stmtmL->execute();
                                                            $resultmL=$stmtmL->get_result();
                                                            
                                                            if (isset($_SESSION['id'])){
                                                            $stmtmM = $conn->prepare("SELECT postT,idP,idL FROM likes WHERE postT='fd' AND idP=? AND idL=?");
                                                            $stmtmM->bind_param('ss', $feedinfo['id'],$_SESSION['id']);
                                                            $stmtmM->execute();
                                                            $resultmM=$stmtmM->get_result();
                                                            if ($resultmM->num_rows=='0'){$il=false;}else{$il=true;}
                                                            }
                                                            ?>

                                                            <span onclick="opertion('fd|like','<?php echo $feedinfo['id']; ?>')" class="feed-social">


                                                                <span class="likes-cnt" id="likenumfd<?php echo $feedinfo['id']; ?>"><?php echo $resultmL->num_rows; ?></span>

                                                                <button id="likedivfd<?php echo $feedinfo['id']; ?>" class="story-like <?php if($il){?> active <?php }else{} ?>"></button>


                                                                <!--
                                                               
-->
                                                            </span>

                                                            <?php
                                                            $stmtmC = $conn->prepare("SELECT * FROM comments WHERE postT='fd' AND idP=?");
                                                            $stmtmC->bind_param('s', $feedinfo['id']);
                                                            $stmtmC->execute();
                                                            $resultmC=$stmtmC->get_result();
                                                            ?>
                                                            <span class="feed-social hmr_10">
                                                                <span class="cmts-cnt"><?php echo $resultmC->num_rows; ?></span>
                                                                <a id="liked" class="btn-cmts"></a>
                                                            </span>

                                                        </div>


                                                        <div class="feed-users-likes">



                                                            <?php while($likers=$resultmL->fetch_assoc()){ ?>

                                                            <a target="_blank" href="profile.php?id=<?php $datal;$datal=userinfo($likers['idL']);echo $likers['idL']; ?>" data-meta="<?php echo $datal['username']; ?>" title="<?php echo $datal['username']; ?>" class="w-24 avatar">
                                                                <img src="process/<?php echo $datal['picture']; ?>" width="24">
                                                            </a>

                                                            <?php } ?>


                                                        </div>
                                                    </div>



                                                    <div class="feed-comments box-body">

                                                        <div class="thread-post-form">
                                                            <div class="post-form-body">
                                                                <div class="avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="user-avatar"></div>
                                                                <div class="post-form-textarea">
                                                                    <div class="form-group">
                                                                        <div class="el-textarea">
                                                                            <textarea id="addco<?php echo $feedinfo['id']; ?>" autocomplete="off" placeholder="أضف تعليقا..." class="el-textarea__inner" style="min-height: 33px; height: 33px;"></textarea>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-left post-form-footer">
                                                                        <input type="checkbox" id="spoi<?php echo $feedinfo['id']; ?>" aria-hidden="false" class="el-checkbox__original commspoi" value="">

                                                                        <button id="sendc<?php echo $feedinfo['id']; ?>" onclick="opertion('fd|comment','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini">
                                                                            <!---->
                                                                            <!----><span>نشر</span></button>
                                                                        <button style="display:none" id="cancel_e<?php echo $feedinfo['id']; ?>" onclick="cancel_e('fd|comment','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right">
                                                                            <!---->
                                                                            <!----> <span>إلغاء</span></button>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul id="comment-top<?php echo $feedinfo['id']; ?>" class="post-list">

                                <?php if(isset($_GET['comm'])){ $co=true; ?>
                                    <script>
                                        $(window).load(function(){
                                            $('html,body').animate({
                                                scrollTop: $('#commentid<?php echo $_GET['comm']; ?>').offset().top-200
                                            }, 'slow',function(){$('#commentid<?php echo $_GET['comm']; ?>').css('background-color','#e2eef9')});
                                            setTimeout(function(){$('#commentid<?php echo $_GET['comm']; ?>').css('background-color','#ffffff')},5500)
                                        });

                                    </script>
                                <?php }else{ $co=false; } ?>

                                                            <?php
                                    if(isset($_GET['comm'])){
                                    $stmtn = $conn->prepare("SELECT 
                                    comments.id ,
                                    comments.comment ,
                                    comments.idU ,
                                    comments.spoiler,
                                    comments.idP,
                                    comments.postT as postTc,
                                    comments.wn ,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    reports.idR,
                                    count(reports.idP) as reported,
                                    reports.idT,
                                    
                                    count(replies.id) as repn,
                                    replies.idU,
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.postT,
                                    count(likes.idP)
                                    
                                    FROM comments  
                                    
                                    JOIN users ON users.code=comments.idU 
                                    
                                    JOIN likes ON likes.idP=comments.id 
                                    
                                    JOIN replies ON replies.idC=comments.id 
                                    
                                    JOIN reports ON reports.idP=comments.id  
                                    
                                    WHERE comments.idP=? AND comments.postT='fd' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    ");
                                    }else{
                                    $stmtn = $conn->prepare("SELECT 
                                    comments.id ,
                                    comments.comment ,
                                    comments.idU ,
                                    comments.spoiler,
                                    comments.idP,
                                    comments.postT as postTc,
                                    comments.wn ,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    reports.idR,
                                    count(reports.idP) as reported,
                                    reports.idT,
                                    
                                    count(replies.id) as repn,
                                    replies.idU,
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.postT,
                                    count(likes.idP)
                                    
                                    FROM comments  
                                    
                                    JOIN users ON users.code=comments.idU 
                                    
                                    JOIN likes ON likes.idP=comments.id 
                                    
                                    JOIN replies ON replies.idC=comments.id 
                                    
                                    JOIN reports ON reports.idP=comments.id  
                                    
                                    WHERE comments.idP=? AND comments.postT='fd' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 0,6
                                    ");
                                    }
                                            
                                    
                                    $stmtn->bind_param("s", $feedinfo['id']);
                                    $stmtn->execute();
                                    $comm=$stmtn->get_result();
                                        
                                    while($comminfo=$comm->fetch_assoc()){

                                    ?>

                                                            <li id="commentid<?php echo $comminfo['id']; ?>" class="post comment">
                                                                <!---->
                                                                <div class="post-content">
                                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                                        <li>

                                                                            <span id="likedivcm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>">

                                                                                <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b> <i class="like-heart"></i></span></li>




                                                                        <?php if ($comminfo['reported']<100){ ?>

                                                                        <?php
                                                    if (isset($_SESSION['id'])){
                                                            $stmtn = $conn->prepare("SELECT idP,idR,idT FROM reports WHERE idP=? AND idR=? AND idT='cm' ");
                                                            $stmtn->bind_param("ss", $comminfo['id'], $_SESSION['id']);
                                                            $stmtn->execute();
                                                            $resu=$stmtn->get_result();
                                                            if ($resu->num_rows!=0){
                                                                $comminfo['idR']='true';
                                                            }else{
                                                                $comminfo['idR']='false';
                                                            }
                                                        $stmtn->close();
                                                    }else{
                                                        $comminfo['idR']='false';
                                                    }
                                                ?>


                                                                        <li class="dropdown">
                                                                            <?php if($comminfo['idR']=='true'){ ?>
                                                                            <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                            <?php }else{ ?>
                                                                            <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                                            <?php }   ?>
                                                                            <?php if(isset($_SESSION['id'])){ ?>
                                                                            <?php if($comminfo['code']==$myid){ ?>

                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                                                <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                                            </div>

                                                                            <?php }else{ ?>

                                                                            <?php if($comminfo['idR']=='true'){ ?>

                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                <a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdivr<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                            <?php }else{ ?>
                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                <a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdivr<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                            </div>
                                                                            <?php } ?>
                                                                            <?php }} ?>
                                                                        </li>
                                                                        <?php } ?>

                                                                        <li><a data="<?php echo $feedinfo['id']; ?>" onclick="addrepfd('<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id']; ?>')" class="reply">رد</a></li>
                                                                    </ul>
                                                                    <div class="avatar"><span class="user in-link"><img style="height:100%" src="process/<?php echo $comminfo['picture']; ?>" class="user-avatar"></span></div>
                                                                    <div class="post-body">
                                                                        <div class="post-header p-b-xs"><a href="profile.php?id=<?php echo $comminfo['code']; ?>" target="_blank" class="user-display text-primary in-link"><b><?php echo $comminfo['username']; ?></b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                                    <!---->
                                                                                    <!----></span>
                                                                                <!---->
                                                                                <!----></span> <span class="date">
                                                                                <script type="application/javascript">
                                                                                    moment.locale("ar_AL");
                                                                                    document.write(moment('<?php echo $comminfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                                </script>
                                                                            </span></div>
                                                                        <?php if ($comminfo['reported']<100){ ?>
                                                                        <?php if($comminfo['spoiler']=='true'){ ?>
                                                                        <div class="post-message" id="post_message<?php echo $comminfo['id'] ?>">
                                                                            <div>
                                                                                <a onclick="spoilerP('cm','<?php echo $comminfo['id']; ?>')" id="spdcm<?php echo $comminfo['id'] ?>" class="btn btn-xs btn-spoiler">إظهار التعليق</a>
                                                                                <div id="spcm<?php echo $comminfo['id'] ?>" style="display:none" class="spoiler p-a">
                                                                                    <p id="message<?php echo $comminfo['id'] ?>"><?php echo $comminfo['comment']; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php }else{?>
                                                                        <div id="post_message<?php echo $comminfo['id'] ?>" class="post-message">
                                                                            <p id="message<?php echo $comminfo['id'] ?>"><?php echo $comminfo['comment']; ?></p>
                                                                        </div>
                                                                        <?php } ?>

                                                                        <?php }else{ ?>
                                                                        <div id="post_message<?php echo $comminfo['id'] ?>" class="post-message">
                                                                            <span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>
                                                                        </div>
                                                                        <?php } ?>



                                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                                            <!-- Comments  -->


                                                                            <li class="dropdown">
                                                                                <?php if($comminfo['idR']=='true'){ ?>
                                                                                <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                                <?php }else{ ?>
                                                                                <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                                                <?php }   ?>
                                                                                <?php if(isset($_SESSION['id'])){ ?>
                                                                                <?php if($comminfo['code']==$myid){ ?>

                                                                                <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                    <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                                                    <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                                                </div>

                                                                                <?php }else{ ?>
                                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                                                <?php }} ?>
                                                                            </li>


                                                                            <li><span id="likedivminicm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b> <i class="like-heart"></i></span></li>


                                                                            <li><a data="<?php echo $feedinfo['id']; ?>" onclick="addrepfd('<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id']; ?>')" class="reply">رد</a></li>


                                                                        </ul>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                                <?php if ($comminfo['repn']==0){}else{ ?>
                                                                <ul class="children" id="children<?php echo $comminfo['id']; ?>">
                                                                    <?php 
                                    $stmtn = $conn->prepare("SELECT 
                                    
                                    replies.id ,
                                    replies.replie ,
                                    replies.idU ,
                                    replies.spoiler,
                                    replies.idC,
                                    replies.wn ,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    reports.idR,
                                    count(reports.idP) as reported,
                                    reports.idT,
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.postT,
                                    count(likes.idP)
                                    
                                    FROM replies  
                                    
                                    JOIN users ON users.code=replies.idU 
                                    
                                    JOIN likes ON likes.idP=replies.id 
                                                                        
                                    JOIN reports ON reports.idP=replies.id  
                                    
                                    WHERE replies.idC=? AND reports.idT='rp' AND replies.idU!='' AND likes.postT='rp' GROUP BY replies.id ORDER BY replies.wn DESC 
                                    
                                    ");
                                    $stmtn->bind_param("s", $comminfo['id']);
                                    $stmtn->execute();
                                    $rep=$stmtn->get_result();
                                        
                                    while($repinfo=$rep->fetch_assoc()){ ?>

                                                                    <?php $repD; $repD=detailpost($repinfo['id'],'rp'); ?>
                                                                    <li id="repid<?php echo $repinfo['id']; ?>" class="post comment">
                                                                        <!---->
                                                                        <div class="post-content">
                                                                            <ul class="post-tooltip post-menu hidden-xs-down">

                                                                                <li>
                                                                                    <span id="likedivrp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')" class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>">

                                                                                        <b id="likenumrp<?php echo $repinfo['id']; ?>">
                                                                                            <?php echo detailpost($repinfo['id'],'rp')['postL']; ?>
                                                                                        </b>

                                                                                        <i class="like-heart"></i>
                                                                                    </span>
                                                                                </li>




                                                                                <?php if ($repinfo['reported']<100){ ?>

                                                                                <?php
                                                    if (isset($_SESSION['id'])){
                                                            $stmtn = $conn->prepare("SELECT idP,idR,idT FROM reports WHERE idP=? AND idR=? AND idT='rp' ");
                                                            $stmtn->bind_param("ss", $repinfo['id'], $_SESSION['id']);
                                                            $stmtn->execute();
                                                            $resu=$stmtn->get_result();
                                                            if ($resu->num_rows!=0){
                                                                $repinfo['idR']='true';
                                                            }else{
                                                                $repinfo['idR']='false';
                                                            }
                                                    }else{
                                                        $repinfo['idR']='false';
                                                    }
                                                ?>


                                                                                <li class="dropdown">
                                                                                    <?php if($repinfo['idR']=='true'){ ?>
                                                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menutr<?php echo $repinfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                                    <?php }else{ ?>
                                                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menutr<?php echo $repinfo['id']; ?>" class="menu-toggle"></a>
                                                                                    <?php } ?>

                                                                                    <?php if( isset($_SESSION['id']) && $repinfo['idU']==$_SESSION['id']){ ?>

                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                        <a class="dropdown-item story-share" onclick="upd_r('<?php echo $repinfo['id'] ?>','<?php echo $repinfo['spoiler'] ?>')">تعديل</a>

                                                                                        <a class="dropdown-item story-share" onclick="opertion('deletec_r','<?php echo $repinfo['id'] ?>')">حذف</a>

                                                                                    </div>

                                                                                    <?php }else{ ?>
                                                                                    <?php if($repinfo['idR']=='true'){ ?>

                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                        <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivr<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                                    <?php }else{ ?>
                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                        <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivr<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                    <?php } ?>
                                                                                </li>
                                                                                <?php } ?>


                                                                            </ul>
                                                                            <div class="avatar"><span class="user in-link"><img style="height:100%" src="process/<?php echo $repinfo['picture']; ?>" class="user-avatar"></span></div>
                                                                            <div class="post-body">
                                                                                <div class="post-header p-b-xs"><a href="profile.php?id=<?php echo $repinfo['code']; ?>" target="_blank" class="user-display text-primary in-link"><b><?php echo $repinfo['username']; ?></b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                                            <!---->
                                                                                            <!----></span>
                                                                                        <!---->
                                                                                        <!----></span> <span class="date">
                                                                                        <script type="application/javascript">
                                                                                            moment.locale("ar_AL");
                                                                                            document.write(moment('<?php echo $repinfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                                        </script>
                                                                                    </span></div>
                                                                                <?php if ($repinfo['reported']<100){ ?>
                                                                                <?php if($repinfo['spoiler']=='true'){ ?>
                                                                                <div class="post-message" id="post_messageR<?php echo $repinfo['id'] ?>">
                                                                                    <div>
                                                                                        <a onclick="spoilerP('rp','<?php echo $repinfo['id']; ?>')" id="spdrp<?php echo $repinfo['id'] ?>" class="btn btn-xs btn-spoiler">إظهار التعليق</a>
                                                                                        <div id="sprp<?php echo $repinfo['id'] ?>" style="display:none" class="spoiler p-a">
                                                                                            <p id="Rmessage<?php echo $repinfo['id'] ?>"><?php echo $repinfo['replie']; ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php }else{?>
                                                                                <div id="post_messageR<?php echo $repinfo['id'] ?>" class="post-message">
                                                                                    <p id="Rmessage<?php echo $repinfo['id'] ?>"><?php echo $repinfo['replie']; ?></p>
                                                                                </div>
                                                                                <?php } ?>

                                                                                <?php }else{ ?>
                                                                                <div id="post_messageR<?php echo $repinfo['id'] ?>" class="post-message">
                                                                                    <span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>
                                                                                </div>
                                                                                <?php } ?>



                                                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">


                                                                                    <li class="dropdown">

                                                                                        <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>


                                                                                        <?php if( isset($_SESSION['id']) && $repinfo['idU']==$_SESSION['id']){ ?>

                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                            <a class="dropdown-item story-share" onclick="upd_r('<?php echo $repinfo['id'] ?>','<?php echo $repinfo['spoiler'] ?>')">تعديل</a>

                                                                                            <a class="dropdown-item story-share" onclick="opertion('deletec_r','<?php echo $repinfo['id'] ?>')">حذف</a>

                                                                                        </div>

                                                                                        <?php }else{ ?>
                                                                                        <?php if($repinfo['idR']=='true'){ ?>

                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                            <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivrmini<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                                        <?php }else{ ?>
                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                            <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivrmini<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                                        </div>
                                                                                        <?php } ?>
                                                                                        <?php } ?>


                                                                                    </li>


                                                                                    <li><span id="likedivminirp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')" class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumminirp<?php echo $repinfo['id']; ?>"> <?php echo detailpost($repinfo['id'],'rp')['postL']; ?> </b><i class="like-heart"></i></span></li>


                                                                                </ul>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <?php } ?>

                                                            </li>
                                                            <?php } ?>


                                                        </ul>


                                                        <?php if ($comm->num_rows<6 || $co){}else{ ?>
                                                        <div class="box-footer"><button id="more_cB" onclick="opertion('fd|more_c','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn btn-block btn-default el-button--default"><span><strong id="more_cS">المزيد من التعليقات</strong></span></button></div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  if (detailpost($feedinfo['id'],'fd')['postrepo']>50){ ?> <script>$("#feed_<?php echo $feedinfo['id']; ?>").remove();</script> <?php } ?>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="feeds-list">
                                        <?php
                                        while($feedinfo=$resulte->fetch_assoc()){
                                            ?>
                                        <div id="feed_<?php echo $feedinfo['id']; ?>" class="feed_story">
                                            <div id="feedid" data="<?php echo $feedinfo['id']; ?>" class="box">
                                                <div class="feed-wrapper">


                                                    <div id="feedb_<?php echo $feedinfo['id']; ?>" class="box-body feed-body">
                                                        <div class="author-meta" style="display: inline-flex;">
                                                            <?php 
                                                            $useri;
                                                            $useri=userinfo($feedinfo['idU']);
                                                            ?>
                                                            <a target="_blank" href="profile.php?id=<?php echo $feedinfo['idU']; ?>" class="feed_author">
                                                                <img src="process/<?php echo $useri['picture']; ?>" class="w-48 avatar">
                                                            </a>
                                                            <div class="header" style="margin-right: 10px">
                                                                <a target="_blank" href="profile.php?id=<?php  echo $useri['code'] ?>" class="text-primary author-name">
                                                                    <?php  echo $useri['username']; ?>
                                                                </a>
                                                                <div class="feed-status">

                                                                </div>
                                                                <div class="feed-date">
                                                                    <i title="public" class="stream-icon <?php $dett=detailpost($feedinfo['id'],'fd'); if ($feedinfo['privacy']=='pub'){ ?>public<?php }else{?>friends<?php } ?>"></i>
                                                                    <script type="application/javascript">
                                                                        moment.locale("ar_AL");
                                                                        document.write(moment('<?php echo $feedinfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="box-tool" style="right:96%">
                                                                <div class="options dropdown">
                                                                    <a id="menutfd<?php echo $feedinfo['id']; ?>" data-toggle="dropdown" class=" <?php if($dett['myRe']=='false'){ ?>menu<?php }else{} ?>">
                                                                     <?php if($dett['myRe']=='true'){ ?><i style="color:red" class="fa fa-flag"></i><?php } ?>
                                                                    </a>
                                                                    
                                                                    <?php if (isset($_SESSION['id'])){ ?>
                                                                    <?php if($_SESSION['id']==$feedinfo['idU']){ ?>

                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a onclick="fdupdate('<?php echo $feedinfo['id']; ?>')" class="dropdown-item ">تعديل</a>
                                                                        <a onclick="deletefeed('<?php echo $feedinfo['id'] ?>')" class="dropdown-item ">حذف</a>
                                                                    </div>

                                                                    <?php }else{ ?>
                                                                    
                                                                    <?php  if($dett['myRe']=='false'){ ?>
                                                                    
                                                                    <div onclick="opertion(`fd|report`,`<?php echo $feedinfo['id'] ?>`)" class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a id="menutdivfd<?php echo $feedinfo['id']; ?>"  class="dropdown-item ">إبلاغ</a>
                                                                    </div>
                                                                    
                                                                    <?php }else{ ?>
                                                                    
                                                                    <div onclick="opertion(`fd|report`,`<?php echo $feedinfo['id'] ?>`)" class="dropdown-menu dropdown-menu-scale pull-right">
                                                                        <a id="menutdivfd<?php echo $feedinfo['id']; ?>" class="dropdown-item "> إلغاء الإبلاغ</a>
                                                                    </div>
                                                                    <?php } ?>
                                                                    
                                                                    <?php } ?>

                                                                    <?php } ?>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if($feedinfo['spoiler']=='true'){ $sp=true;?>
                                                        <div id="feedsp<?php echo $feedinfo['id']; ?>" onclick="fdspoiler('<?php echo $feedinfo['id']; ?>',this)" class="feed-spoiler">هذا المنشور يحتوي على حرق.</div>

                                                        <?php }else{
                                                                $sp=false;
                                                            } ?>


                                                        <?php if($feedinfo['text']==''){}else{ ?>
                                                        <p id="fd_desc<?php echo $feedinfo['id']; ?>" class="feed-desc"><?php echo $feedinfo['text']; ?></p>
                                                        <?php } ?>

                                                        <?php
                                            
                                                            $stmteI = $conn->prepare('SELECT * FROM feedimages WHERE idF=?');
                                                            $stmteI->bind_param("s", $feedinfo['id']);
                                                            $stmteI->execute();
                                                            $resulteI=$stmteI->get_result();
                                                            $numrI=$resulteI->num_rows;
                                                            $imgs;
                                            
                                                        ?>

                                                        <?php if ($numrI=='0' || $numrI>4){}else{ ?>

                                                        <div id="fd_atta<?php echo $feedinfo['id']; ?>" class="feed-attachment posts">
                                                            <div class="feed-collage collage-<?php echo $numrI;  ?>">

                                                                <?php $coll=true; $fp=true;?>

                                                                <div class="collage-photo">
                                                                    <?php $onlf=true;$others=[]; while($imgs=$resulteI->fetch_assoc()){ ?>
                                                                    <?php  if($onlf){ ?>
                                                                    <img onclick="feedims('<?php echo 'imsgr'.$feedinfo['id'];  ?>',this)" style="height:460px" src="process/<?php echo $imgs['name']; ?>" data-vue-img-src="<?php echo $imgs['name'] ?>" data-vue-img-group="<?php echo 'imsgr'.$feedinfo['id'];  ?>" style="cursor: pointer;">
                                                                    <?php $onlf=false;}else{array_push($others,$imgs['name']); } ?>
                                                                    <?php } ?>
                                                                </div>

                                                                <div class="collage-photo collage-photo-by-2">

                                                                    <?php foreach($others as $othr){ ?>

                                                                    <img onclick="feedims('<?php echo 'imsgr'.$feedinfo['id'];  ?>',this)" style="height:<?php echo ceil(100/($numrI-1));  ?>%" src="process/<?php echo $othr; ?>" data-vue-img-src="<?php $othr; ?>" data-vue-img-group="<?php echo 'imsgr'.$feedinfo['id'];  ?>" style="cursor: pointer;">

                                                                    <?php } ?>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        
                                                       

                                                        <?php } ?>
                                                         <?php if($feedinfo['link']=='' || !filter_var($feedinfo['link'], FILTER_VALIDATE_URL) ){
                                                        }else{ ?>
                                                            
                                                           <div class="feed-attachment link">
                                                               <?php
                                                              
                                                                $getfeedlink=urlfetch($feedinfo['link']);
                                                                if ($getfeedlink){
                                                                $getfeedlink['link']=$feedinfo['link'];
                                                                $host=parse_url($feedinfo['link']);
                                                              ?>
                                                               <div class="attachment-thumbnail" style="background-image: url(&quot;<?php echo $getfeedlink['image_src']; ?>&quot;);"><a rel="nofollow" target="_blank" href="<?php echo $feedinfo['link']; ?>"></a></div> <div class="attachment-body"><div><a rel="nofollow" target="_blank" href="<?php echo $feedinfo['link']; ?>" class="text-primary"><b><?php echo $getfeedlink['title']; ?></b></a></div> <p><?php echo $getfeedlink['body']; ?></p> <div><small class="text-muted"><?php echo $host['host']; ?></small></div></div>
                                                               <?php } ?>
                                                           </div>
                                                        
                                                        <?php } ?>
                                                        <?php if($sp){ ?>
                                                        <script>
                                                            $("#fd_desc<?php echo $feedinfo['id']; ?>, #fd_atta<?php echo $feedinfo['id']; ?>").hide()

                                                        </script>
                                                        <div style="display:none" onclick="fdspoiler('<?php echo $feedinfo['id']; ?>',this)" id="fd_hde<?php echo $feedinfo['id']; ?>"><button class="btn m-t-xs btn-block btn-link">إخفاء المنشور</button></div>

                                                        <?php }else{} ?>
                                                        <?php if ($feedinfo['post']==''){}else{ ?>
                                                        <?php  $ti; $ti=titleinfo($feedinfo['post']); ?>

                                                        <div class="media-tag-item">
                                                            <a target="_blank" class="media-tag-cover" href="post?id=<?php echo $ti['id']; ?>" style="margin-left:15px;">
                                                                <img src="process/<?php echo $ti['image']; ?>" class="img-responsive">
                                                            </a>
                                                            <div class="media-tag-body">
                                                                <a target="_blank" class="media-tag-title" href="post?id=<?php echo $ti['id']; ?>">

                                                                    <?php echo $ti['title']; ?></a>

                                                                <div class="media-tag-text"><?php echo substr($ti['synopsis'],0,100); ?></div>
                                                            </div>
                                                        </div>

                                                        <?php } ?>


                                                        <div class="box-social-footer pull-right">

                                                            <?php
                                                            
                                                            $stmtmL = $conn->prepare("SELECT postT,idP,idL FROM likes WHERE postT='fd' AND idP=? AND idL!=''");
                                                            $stmtmL->bind_param('s', $feedinfo['id']);
                                                            $stmtmL->execute();
                                                            $resultmL=$stmtmL->get_result();
                                                            
                                                            if (isset($_SESSION['id'])){
                                                            $stmtmM = $conn->prepare("SELECT postT,idP,idL FROM likes WHERE postT='fd' AND idP=? AND idL=?");
                                                            $stmtmM->bind_param('ss', $feedinfo['id'],$_SESSION['id']);
                                                            $stmtmM->execute();
                                                            $resultmM=$stmtmM->get_result();
                                                            if ($resultmM->num_rows=='0'){$il=false;}else{$il=true;}
                                                            }
                                                            ?>

                                                            <span onclick="opertion('fd|like','<?php echo $feedinfo['id']; ?>')" class="feed-social">


                                                                <span class="likes-cnt" id="likenumfd<?php echo $feedinfo['id']; ?>"><?php echo $resultmL->num_rows; ?></span>

                                                                <button id="likedivfd<?php echo $feedinfo['id']; ?>" class="story-like <?php if($il){?> active <?php }else{} ?>"></button>


                                                                <!--
                                                               
-->
                                                            </span>

                                                            <?php
                                                            $stmtmC = $conn->prepare("SELECT * FROM comments WHERE postT='fd' AND idP=?");
                                                            $stmtmC->bind_param('s', $feedinfo['id']);
                                                            $stmtmC->execute();
                                                            $resultmC=$stmtmC->get_result();
                                                            ?>
                                                            <span class="feed-social hmr_10">
                                                                <span class="cmts-cnt"><?php echo $resultmC->num_rows; ?></span>
                                                                <a id="liked" class="btn-cmts"></a>
                                                            </span>

                                                        </div>


                                                        <div class="feed-users-likes">



                                                            <?php while($likers=$resultmL->fetch_assoc()){ ?>

                                                            <a target="_blank" href="profile.php?id=<?php $datal;$datal=userinfo($likers['idL']);echo $likers['idL']; ?>" data-meta="<?php echo $datal['username']; ?>" title="<?php echo $datal['username']; ?>" class="w-24 avatar">
                                                                <img src="process/<?php echo $datal['picture']; ?>" width="24">
                                                            </a>

                                                            <?php } ?>


                                                        </div>
                                                    </div>



                                                    <div class="feed-comments box-body">

                                                        <div class="thread-post-form">
                                                            <div class="post-form-body">
                                                                <div class="avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="user-avatar"></div>
                                                                <div class="post-form-textarea">
                                                                    <div class="form-group">
                                                                        <div class="el-textarea">
                                                                            <textarea id="addco<?php echo $feedinfo['id']; ?>" autocomplete="off" placeholder="أضف تعليقا..." class="el-textarea__inner" style="min-height: 33px; height: 33px;"></textarea>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-left post-form-footer">
                                                                        <input type="checkbox" id="spoi<?php echo $feedinfo['id']; ?>" aria-hidden="false" class="el-checkbox__original commspoi" value="">

                                                                        <button id="sendc<?php echo $feedinfo['id']; ?>" onclick="opertion('fd|comment','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini">
                                                                            <!---->
                                                                            <!----><span>نشر</span></button>
                                                                        <button style="display:none" id="cancel_e<?php echo $feedinfo['id']; ?>" onclick="cancel_e('fd|comment','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right">
                                                                            <!---->
                                                                            <!----> <span>إلغاء</span></button>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul id="comment-top<?php echo $feedinfo['id']; ?>" class="post-list">



                                                            <?php
                                    $stmtn = $conn->prepare("SELECT 
                                    comments.id ,
                                    comments.comment ,
                                    comments.idU ,
                                    comments.spoiler,
                                    comments.idP,
                                    comments.postT as postTc,
                                    comments.wn ,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    reports.idR,
                                    count(reports.idP) as reported,
                                    reports.idT,
                                    
                                    count(replies.id) as repn,
                                    replies.idU,
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.postT,
                                    count(likes.idP)
                                    
                                    FROM comments  
                                    
                                    JOIN users ON users.code=comments.idU 
                                    
                                    JOIN likes ON likes.idP=comments.id 
                                    
                                    JOIN replies ON replies.idC=comments.id 
                                    
                                    JOIN reports ON reports.idP=comments.id  
                                    
                                    WHERE comments.idP=? AND comments.postT='fd' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 0,6
                                    ");
                                            
                                    
                                    $stmtn->bind_param("s", $feedinfo['id']);
                                    $stmtn->execute();
                                    $comm=$stmtn->get_result();
                                        
                                    while($comminfo=$comm->fetch_assoc()){

                                    ?>

                                                            <li id="commentid<?php echo $comminfo['id']; ?>" class="post comment">
                                                                <!---->
                                                                <div class="post-content">
                                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                                        <li>

                                                                            <span id="likedivcm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>">

                                                                                <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b> <i class="like-heart"></i></span></li>




                                                                        <?php if ($comminfo['reported']<100){ ?>

                                                                        <?php
                                                    if (isset($_SESSION['id'])){
                                                            $stmtn = $conn->prepare("SELECT idP,idR,idT FROM reports WHERE idP=? AND idR=? AND idT='cm' ");
                                                            $stmtn->bind_param("ss", $comminfo['id'], $_SESSION['id']);
                                                            $stmtn->execute();
                                                            $resu=$stmtn->get_result();
                                                            if ($resu->num_rows!=0){
                                                                $comminfo['idR']='true';
                                                            }else{
                                                                $comminfo['idR']='false';
                                                            }
                                                        $stmtn->close();
                                                    }else{
                                                        $comminfo['idR']='false';
                                                    }
                                                ?>


                                                                        <li class="dropdown">
                                                                            <?php if($comminfo['idR']=='true'){ ?>
                                                                            <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                            <?php }else{ ?>
                                                                            <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                                            <?php }   ?>
                                                                            <?php if(isset($_SESSION['id'])){ ?>
                                                                            <?php if($comminfo['code']==$myid){ ?>

                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                                                <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                                            </div>

                                                                            <?php }else{ ?>

                                                                            <?php if($comminfo['idR']=='true'){ ?>

                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                <a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdivr<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                            <?php }else{ ?>
                                                                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                <a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdivr<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                            </div>
                                                                            <?php } ?>
                                                                            <?php }} ?>
                                                                        </li>
                                                                        <?php } ?>

                                                                        <li><a data="<?php echo $feedinfo['id']; ?>" onclick="addrepfd('<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id']; ?>')" class="reply">رد</a></li>
                                                                    </ul>
                                                                    <div class="avatar"><span class="user in-link"><img style="height:100%" src="process/<?php echo $comminfo['picture']; ?>" class="user-avatar"></span></div>
                                                                    <div class="post-body">
                                                                        <div class="post-header p-b-xs"><a href="profile.php?id=<?php echo $comminfo['code']; ?>" target="_blank" class="user-display text-primary in-link"><b><?php echo $comminfo['username']; ?></b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                                    <!---->
                                                                                    <!----></span>
                                                                                <!---->
                                                                                <!----></span> <span class="date">
                                                                                <script type="application/javascript">
                                                                                    moment.locale("ar_AL");
                                                                                    document.write(moment('<?php echo $comminfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                                </script>
                                                                            </span></div>
                                                                        <?php if ($comminfo['reported']<100){ ?>
                                                                        <?php if($comminfo['spoiler']=='true'){ ?>
                                                                        <div class="post-message" id="post_message<?php echo $comminfo['id'] ?>">
                                                                            <div>
                                                                                <a onclick="spoilerP('cm','<?php echo $comminfo['id']; ?>')" id="spdcm<?php echo $comminfo['id'] ?>" class="btn btn-xs btn-spoiler">إظهار التعليق</a>
                                                                                <div id="spcm<?php echo $comminfo['id'] ?>" style="display:none" class="spoiler p-a">
                                                                                    <p id="message<?php echo $comminfo['id'] ?>"><?php echo $comminfo['comment']; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php }else{?>
                                                                        <div id="post_message<?php echo $comminfo['id'] ?>" class="post-message">
                                                                            <p id="message<?php echo $comminfo['id'] ?>"><?php echo $comminfo['comment']; ?></p>
                                                                        </div>
                                                                        <?php } ?>

                                                                        <?php }else{ ?>
                                                                        <div id="post_message<?php echo $comminfo['id'] ?>" class="post-message">
                                                                            <span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>
                                                                        </div>
                                                                        <?php } ?>



                                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                                            <!-- Comments  -->


                                                                            <li class="dropdown">
                                                                                <?php if($comminfo['idR']=='true'){ ?>
                                                                                <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                                <?php }else{ ?>
                                                                                <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                                                <?php }   ?>
                                                                                <?php if(isset($_SESSION['id'])){ ?>
                                                                                <?php if($comminfo['code']==$myid){ ?>

                                                                                <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                    <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                                                    <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                                                </div>

                                                                                <?php }else{ ?>
                                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                                                <?php }} ?>
                                                                            </li>


                                                                            <li><span id="likedivminicm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b> <i class="like-heart"></i></span></li>


                                                                            <li><a data="<?php echo $feedinfo['id']; ?>" onclick="addrepfd('<?php echo $comminfo['id'] ?>','<?php echo $feedinfo['id']; ?>')" class="reply">رد</a></li>


                                                                        </ul>
                                                                        <!---->
                                                                    </div>
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                                <?php if ($comminfo['repn']==0){}else{ ?>
                                                                <ul class="children" id="children<?php echo $comminfo['id']; ?>">
                                                                    <?php 
                                    $stmtn = $conn->prepare("SELECT 
                                    
                                    replies.id ,
                                    replies.replie ,
                                    replies.idU ,
                                    replies.spoiler,
                                    replies.idC,
                                    replies.wn ,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    reports.idR,
                                    count(reports.idP) as reported,
                                    reports.idT,
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.postT,
                                    count(likes.idP)
                                    
                                    FROM replies  
                                    
                                    JOIN users ON users.code=replies.idU 
                                    
                                    JOIN likes ON likes.idP=replies.id 
                                                                        
                                    JOIN reports ON reports.idP=replies.id  
                                    
                                    WHERE replies.idC=? AND reports.idT='rp' AND replies.idU!='' AND likes.postT='rp' GROUP BY replies.id ORDER BY replies.wn DESC 
                                    
                                    ");
                                    $stmtn->bind_param("s", $comminfo['id']);
                                    $stmtn->execute();
                                    $rep=$stmtn->get_result();
                                        
                                    while($repinfo=$rep->fetch_assoc()){ ?>

                                                                    <?php $repD; $repD=detailpost($repinfo['id'],'rp'); ?>
                                                                    <li id="repid<?php echo $repinfo['id']; ?>" class="post comment">
                                                                        <!---->
                                                                        <div class="post-content">
                                                                            <ul class="post-tooltip post-menu hidden-xs-down">

                                                                                <li>
                                                                                    <span id="likedivrp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')" class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>">

                                                                                        <b id="likenumrp<?php echo $repinfo['id']; ?>">
                                                                                            <?php echo detailpost($repinfo['id'],'rp')['postL']; ?>
                                                                                        </b>

                                                                                        <i class="like-heart"></i>
                                                                                    </span>
                                                                                </li>




                                                                                <?php if ($repinfo['reported']<100){ ?>

                                                                                <?php
                                                    if (isset($_SESSION['id'])){
                                                            $stmtn = $conn->prepare("SELECT idP,idR,idT FROM reports WHERE idP=? AND idR=? AND idT='rp' ");
                                                            $stmtn->bind_param("ss", $repinfo['id'], $_SESSION['id']);
                                                            $stmtn->execute();
                                                            $resu=$stmtn->get_result();
                                                            if ($resu->num_rows!=0){
                                                                $repinfo['idR']='true';
                                                            }else{
                                                                $repinfo['idR']='false';
                                                            }
                                                    }else{
                                                        $repinfo['idR']='false';
                                                    }
                                                ?>


                                                                                <li class="dropdown">
                                                                                    <?php if($repinfo['idR']=='true'){ ?>
                                                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menutr<?php echo $repinfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                                                    <?php }else{ ?>
                                                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menutr<?php echo $repinfo['id']; ?>" class="menu-toggle"></a>
                                                                                    <?php } ?>

                                                                                    <?php if( isset($_SESSION['id']) && $repinfo['idU']==$_SESSION['id']){ ?>

                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                        <a class="dropdown-item story-share" onclick="upd_r('<?php echo $repinfo['id'] ?>','<?php echo $repinfo['spoiler'] ?>')">تعديل</a>

                                                                                        <a class="dropdown-item story-share" onclick="opertion('deletec_r','<?php echo $repinfo['id'] ?>')">حذف</a>

                                                                                    </div>

                                                                                    <?php }else{ ?>
                                                                                    <?php if($repinfo['idR']=='true'){ ?>

                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                        <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivr<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                                    <?php }else{ ?>
                                                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                        <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivr<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                    <?php } ?>
                                                                                </li>
                                                                                <?php } ?>


                                                                            </ul>
                                                                            <div class="avatar"><span class="user in-link"><img style="height:100%" src="process/<?php echo $repinfo['picture']; ?>" class="user-avatar"></span></div>
                                                                            <div class="post-body">
                                                                                <div class="post-header p-b-xs"><a href="profile.php?id=<?php echo $repinfo['code']; ?>" target="_blank" class="user-display text-primary in-link"><b><?php echo $repinfo['username']; ?></b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                                            <!---->
                                                                                            <!----></span>
                                                                                        <!---->
                                                                                        <!----></span> <span class="date">
                                                                                        <script type="application/javascript">
                                                                                            moment.locale("ar_AL");
                                                                                            document.write(moment('<?php echo $repinfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                                        </script>
                                                                                    </span></div>
                                                                                <?php if ($repinfo['reported']<100){ ?>
                                                                                <?php if($repinfo['spoiler']=='true'){ ?>
                                                                                <div class="post-message" id="post_messageR<?php echo $repinfo['id'] ?>">
                                                                                    <div>
                                                                                        <a onclick="spoilerP('rp','<?php echo $repinfo['id']; ?>')" id="spdrp<?php echo $repinfo['id'] ?>" class="btn btn-xs btn-spoiler">إظهار التعليق</a>
                                                                                        <div id="sprp<?php echo $repinfo['id'] ?>" style="display:none" class="spoiler p-a">
                                                                                            <p id="Rmessage<?php echo $repinfo['id'] ?>"><?php echo $repinfo['replie']; ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php }else{?>
                                                                                <div id="post_messageR<?php echo $repinfo['id'] ?>" class="post-message">
                                                                                    <p id="Rmessage<?php echo $repinfo['id'] ?>"><?php echo $repinfo['replie']; ?></p>
                                                                                </div>
                                                                                <?php } ?>

                                                                                <?php }else{ ?>
                                                                                <div id="post_messageR<?php echo $repinfo['id'] ?>" class="post-message">
                                                                                    <span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>
                                                                                </div>
                                                                                <?php } ?>



                                                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">


                                                                                    <li class="dropdown">

                                                                                        <a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>


                                                                                        <?php if( isset($_SESSION['id']) && $repinfo['idU']==$_SESSION['id']){ ?>

                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                                                            <a class="dropdown-item story-share" onclick="upd_r('<?php echo $repinfo['id'] ?>','<?php echo $repinfo['spoiler'] ?>')">تعديل</a>

                                                                                            <a class="dropdown-item story-share" onclick="opertion('deletec_r','<?php echo $repinfo['id'] ?>')">حذف</a>

                                                                                        </div>

                                                                                        <?php }else{ ?>
                                                                                        <?php if($repinfo['idR']=='true'){ ?>

                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                            <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivrmini<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a></div>
                                                                                        <?php }else{ ?>
                                                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                                                            <a onclick="opertion(`rp|report`,`<?php echo $repinfo['id'] ?>`)" id="menutdivrmini<?php echo $repinfo['id']; ?>" class="dropdown-item story-share">تبليغ</a>
                                                                                        </div>
                                                                                        <?php } ?>
                                                                                        <?php } ?>


                                                                                    </li>


                                                                                    <li><span id="likedivminirp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')" class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumminirp<?php echo $repinfo['id']; ?>"> <?php echo detailpost($repinfo['id'],'rp')['postL']; ?> </b><i class="like-heart"></i></span></li>


                                                                                </ul>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <?php } ?>

                                                            </li>
                                                            <?php } ?>


                                                        </ul>


                                                        <?php if ($comm->num_rows<6){}else{ ?>
                                                        <div class="box-footer"><button id="more_cB" onclick="opertion('fd|more_c','<?php echo $feedinfo['id']; ?>')" type="button" class="el-button btn btn-block btn-default el-button--default"><span><strong id="more_cS">المزيد من التعليقات</strong></span></button></div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  if (detailpost($feedinfo['id'],'fd')['postrepo']>50){ ?> <script>$("#feed_<?php echo $feedinfo['id']; ?>").remove();</script> <?php }} ?>
                                    </div>
                                    <?php } ?>
                                    

                                                        


                                    <ul class="pagination" id="pageAd" style="padding-right:0px;">
                                        <li class="page-item first">
                                            <a class="page-link"></a>
                                        </li>


                                        <li class="page-item nb active" id="l1"><a data="1" onclick="pageA(this)" class="page-link">1</a></li>
                                        <li class="page-item" id="l2"><a data="2" onclick="pageA(this)" class="page-link">2</a></li>
                                        <li class="page-item" id="l3"><a data="3" onclick="pageA(this)" class="page-link">3</a></li>
                                        <li class="page-item" id="l4"><a data="4" onclick="pageA(this)" class="page-link">4</a></li>
                                        <li class="page-item" id="l5"><a data="5" onclick="pageA(this)" class="page-link">5</a></li>
                                        <li class="page-item" id="l6"><a data="6" onclick="pageA(this)" class="page-link">6</a></li>

                                        <li data="next" id="p_next" onclick="pageA(this)" class="page-item page next">
                                            <a class="page-link"></a>
                                        </li>
                                        <li class="page-item last">
                                            <a class="page-link"></a>
                                        </li>

                                    </ul>
                                    <?php $stmte2 = $conn->prepare($sql2);
                                                        if ($op=='fr'){
                                                            $stmte2->bind_param('ss', $_SESSION['id'], $_SESSION['id']);
                                                        }else{
                                                            $stmte2->bind_param('s', $_SESSION['id']);
                                                        }
                                                        $stmte2->execute();
                                                        $resulte2=$stmte2->get_result();
                                                        $numr2=$resulte2->num_rows;
                                                        ?>
                                    <script>
                                        var p = 1;
                                        var intr = 6;
                                        var max = <?php echo ceil($numr2/10); ?>;

                                        function pageA(e) {
                                            var pagec = $(e).attr('data');

                                            if (pagec == 'next') {
                                                p = +p + 1;
                                                nextp()
                                                $(".page-item").removeClass('active');
                                                $("#l" + p).addClass('active');
                                            } else if (pagec == 'prev') {
                                                p = p - 1;
                                                prevp()
                                                $(".page-item").removeClass('active');
                                                $("#l" + p).addClass('active');
                                            } else {
                                                p = pagec;
                                                nextp()
                                                $(".page-item").removeClass('active');
                                                $("#l" + p).addClass('active');
                                            }

                                            function nextp() {
                                                if (p > intr) {
                                                    var nin = intr + 6;

                                                    $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>');

                                                    while (intr < nin) {
                                                        intr++;
                                                        if (!(intr > max + 1)) {
                                                            $("#pageAd").append('<li class="page-item" id="l' + intr + '" ><a data="' + intr + '" onclick="pageA(this)" class="page-link">' + intr + '</a></li>')
                                                        } else {

                                                        }
                                                    }

                                                    if (!(p > max)) {
                                                        $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>')
                                                    } else {

                                                    }

                                                    intr = nin;
                                                }
                                            }

                                            function prevp() {
                                                if (p <= intr - 6) {
                                                    var intr_pre = intr - 12;
                                                    var intr_ini = intr - 6;
                                                    $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>')

                                                    while (intr_pre < intr_ini) {
                                                        intr_pre++;
                                                        $("#pageAd").append('<li class="page-item" id="l' + intr_pre + '" ><a data="' + intr_pre + '" onclick="pageA(this)" class="page-link">' + intr_pre + '</a></li>')
                                                    }

                                                    $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>')

                                                    intr = intr_pre;
                                                }
                                            }
                                            console.log(p)
                                            if (p == '1') {
                                                $("#pre_p").hide()
                                            } else {
                                                $("#pre_p").show()
                                            }

                                            if (p == max) {
                                                $("#p_next").hide()
                                            } else {
                                                $("#p_next").show()
                                            }
                                            var pop = p + '<?php echo '|'.$op; ?>'

                                            datapaginate('feed', pop);
                                        }

                                    </script>


                                    <div data-v-fb2c869e="" class="infinite-loading-container">
                                        <div data-v-fb2c869e="" style=""><i data-v-6e1fd88f="" data-v-fb2c869e="" class="loading-spiral"></i></div>
                                        <div data-v-fb2c869e="" class="infinite-status-prompt" style="display: none;">No results :(</div>
                                        <div data-v-fb2c869e="" class="infinite-status-prompt" style="display: none;">No more data :)</div>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
        </div>
    </div>

    <?php include('footer.php'); footer(); ?>
    </div>
    </div>
    <div id="mdl-manage-modal"></div>
    <div id="add_link" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t">إضافة رابط</h4>
                </div>
                <div class="modal-body">
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>أضف رابطا هنا</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input style="direction:ltr" type="text" onkeyup="checklink(this)" autocomplete="off" placeholder="أضف الرابط هنا " class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                            <div class="el-message-box__errormsg" style="display: none;">رابط غير صالح</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="donecommB" data="" onclick="addlink(this)">إضافة</button>
                </div>
            </div>

        </div>
    </div>

    <div id="feedsims" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <img src="" id="fdims" style="max-height: 720px; max-width: 1080px">

        </div>
    </div>
    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div role="dialog" aria-modal="true" aria-label="" class="el-dialog" style=" width: 898px;">
            <div class="el-dialog__header"><span class="el-dialog__title" id="addtitle"></span><button type="button" aria-label="Close" class="el-dialog__headerbtn" data-dismiss="modal"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
            <div class="el-dialog__body">
                <div style="min-height: 408px;">
                    <div class="row-col">
                        <div class="col-sm-3 light">
                            <div class="padding hidden-xs-down p-b-0"><img style="height:250px" id="addimage" src="https://i.mydramalist.com/g0q2oc.jpg" class="img-responsive"></div>
                            <div class="left-menu padding pos-rlt">
                                <div class="nav-active-primary">
                                    <div class="nav nav-pills nav-sm"><a onclick="add_pub(this)" class="nav-link active">عام</a><a onclick="add_adv(this)" class="nav-link">التفاصيل</a></div>
                                </div>
                                <script>
                                    function add_pub(e) {
                                        $('#add_pub').show();
                                        $('#add_adv').hide();
                                        $(".nav-active-primary .nav-pills  a").removeClass('active');
                                        $(e).addClass('active');
                                    };

                                    function add_adv(e) {
                                        $('#add_adv').show();
                                        $('#add_pub').hide();
                                        $(".nav-active-primary .nav-pills  a").removeClass('active');
                                        $(e).addClass('active');
                                    };

                                </script>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div id="add_pub" class="padding">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="username" class="control-label"><b>الحالة</b></label></div>
                                        <div class="col-sm-5 pull-right"><select onchange="eps(this)" id="rat_si" class="form-control select-watch-status custom">
                                                <option value="curw">أشاهده حاليا</option>
                                                <option value="finish">أكملته</option>
                                                <option value="planning">اخطط لمشاهدته</option>
                                                <option value="notfiniyet">لم اكمله بعد</option>
                                                <option value="canceledw">ألغيت مشاهدته</option>
                                                <option value="nitintr">غير مهتم</option>
                                            </select>
                                            <!---->
                                        </div>
                                    </div>
                                    <script>
                                        function eps(e) {
                                            if ($(e).val() == 'finish' || $(e).val() == 'planning' || $(e).val() == 'nitintr') {
                                                $(".episode-seen").addClass('disabled');
                                                $(".episode-seen input").attr('disabled', 'disabled');
                                            } else {
                                                $(".episode-seen").removeClass('disabled');
                                                $(".episode-seen input").removeAttr("disabled");
                                            }
                                        }

                                    </script>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="shares" class="control-label"><b>نشر</b></label></div>
                                        <div class="col-sm-5 pull-right">
                                            <div class="share-container"><a rel="nofollow" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a><a rel="nofollow" class="btn btn-icon btn-social rounded light"><i class="fab fa-mdl"></i><i class="fab fa-mdl primary"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <hr>
                                <style>
                                    .disabled {
                                        filter: alpha(opacity=40);
                                        opacity: .4;
                                    }

                                </style>
                                <div class="form-group episode-seen">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="username" class="control-label"><b>الحلقات التي شاهدتها</b></label></div>
                                        <div class="col-sm-9 pull-right">
                                            <div class="row no-gutter">
                                                <div class="col-xs-6 col-sm-6 pull-right">
                                                    <div class="col-sm-4 col-xs-4 episode-input">
                                                        <div class="input-episode-seen el-input">
                                                            <!----><input id="epi_w" type="number" autocomplete="off" min="0" max="10" class="el-input__inner">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-5 episode-control m-l-sm"><a>+</a> / <b id="epi_e"></b></div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <style>
                                        .selected {
                                            color: #1675b6;
                                            border-color: #409eff;
                                            background-color: #ecf5ff;
                                        }

                                    </style>
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="username" class="control-label"><b>تقييمي</b></label></div>
                                        <div class="col-sm-9 pull-right">
                                            <div class="row">
                                                <div class="col-sm-9 col-xs-9">
                                                    <div style="direction:ltr" class="m-t-xs dstar-wrapper">

                                                        <span class="my-rating-9"></span>

                                                        <script>

                                                        </script>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none" id='after_R' class="m-t watch-points  ">
                                                <div class="p-b-sm"><label class="m-b-0"><b>مادا أعجبك أكثر في هدا العمل؟</b></label> </div>
                                                <div class="m-y-sm text-center">

                                                    <button id="prod" onclick="addtL('prod')" type="button" class="el-button el-button--default el-button--small m-l-0 m-r-sm m-b-sm">
                                                        <!---->
                                                        <!----><span>الانتاج</span></button>

                                                    <button id="storL" onclick="addtL('storL')" type="button" class="el-button el-button--default el-button--small m-l-0 m-r-sm m-b-sm">
                                                        <!---->
                                                        <!----><span>القصة</span></button>

                                                    <button id="actiL" onclick="addtL('actiL')" type="button" class="el-button el-button--default el-button--small m-l-0 m-r-sm m-b-sm ">
                                                        <!---->
                                                        <!----><span>التمثيل</span></button>

                                                    <button id="vfxL" onclick="addtL('vfxL')" type="button" class="el-button el-button--default el-button--small m-l-0 m-r-sm m-b-sm">
                                                        <!---->
                                                        <!----><span>التأثيرات البصرية</span></button></div>
                                            </div>



                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="note" class="control-label"><b>ملحوظة</b></label></div>
                                        <div class="col-sm-9 pull-right">
                                            <div class="el-textarea"><textarea id="note_r" autocomplete="off" class="el-textarea__inner" style="min-height: 75px; height: 75px;"></textarea>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <!---->
                            </div>

                            <div style="display:none" id="add_adv" class="padding">
                                <!---->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="note" class="control-label"><b>الاولوية</b></label></div>
                                        <div class="col-sm-3 pull-right"><select id="preo" style="background-color:#eceeef" class="form-control custom">
                                                <option value="0"></option>
                                                <option value="1">منخفضة</option>
                                                <option value="2">متوسطة</option>
                                                <option value="3">مرتفعة</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="note" class="control-label"><b>عدد مرات إعادة مشاهدة العمل</b></label></div>
                                        <div class="col-sm-2 pull-right">
                                            <div class="el-input">
                                                <!----><input style="background-color:#eceeef" id="numrew" type="number" autocomplete="off" class="el-input__inner">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label for="note" class="control-label"><b>رغبة مشاهدة المسلسل مرة اخرى</b></label></div>
                                        <div class="col-sm-5 pull-right"><select id="watchag" style="background-color:#eceeef" class="form-control custom">
                                                <option value="0"></option>
                                                <option value="1">منخفضة جدا</option>
                                                <option value="2">منخفضة</option>
                                                <option value="3">متوسطة</option>
                                                <option value="4">مرتفعة</option>
                                                <option value="5">جد مرتفعة</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 pull-right"><label><b>تاريخ بداية مشاهدة العمل</b></label>

                                        </div>
                                        <div class="col-sm-9 pull-right">
                                            <div class="row start-finish-date">
                                                <div class="col-lg-12 col-xs-12"><input id="dstart" readonly placeholder="Month" class="form-control custom">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3  pull-right"><label><b>تاريخ إنهائه</b></label>

                                        </div>
                                        <div class="col-sm-9  pull-right">
                                            <div class="row start-finish-date">
                                                <div class="col-lg-12 col-xs-12"><input id="dfinish" readonly placeholder="Month" class="form-control custom">
                                                </div>

                                                <script>
                                                    $('#add_adv #dstart,#dfinish').datepicker({
                                                        format: 'dd/mm/yyyy',
                                                    });

                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="el-dialog__footer">
                <div class="dialog-footer">
                    <!---->

                    <button aria-label="Close" data-dismiss="modal" style="margin-left:4px;" type="button" class="el-button btn btn-default el-button--default">
                        <!---->
                        <!----><span>إلغاء </span></button><button id="save_add" type="button" class="el-button btn btn-success el-button--primary">
                        <!---->
                        <!----><span>حفظ </span></button></div>
            </div>

        </div>
    </div>

    <div id="mdl-modal"></div>



    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
<script>
                                                            $('#spoi, .commspoi').bootstrapToggle({
                                                                off: 'عام',
                                                                on: 'حرق',
                                                                onstyle: 'danger',
                                                                size: 'mini'
                                                            });

                                                        </script>   
    <script>
        $(".read_only").starRating({
            readOnly: true,
            totalStars: 5,
            starShape: 'rounded',
            starSize: 17,
            emptyColor: 'white',
            strokeWidth: '12',
            hoverColor: 'salmon',
            activeColor: '#ffd600',
            useGradient: false
        });


        $(".my-rating-9").starRating({
            initialRating: 5,
            disableAfterRate: false,
            emptyColor: 'gold',
            hoverColor: 'lightgray',
            activeColor: 'blue',
            ratedColor: 'lightgray',
            strokeWidth: '2',
            starShape: 'rounded',
            onHover: function(currentIndex, currentRating, $el) {
                $('.live-rating').text(currentIndex);
            },
            onLeave: function(currentIndex, currentRating, $el) {
                if (currentRating != '0') {
                    $("#after_R").show();
                }
            },
            callback: function(currentRating, $el) {
                addt_r = 4 - (currentRating - 1)
            }
        });

    </script>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>


</body>
</body>

</html>
<?php }else{
        header("location:index.php");
    } ?>
