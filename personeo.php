<!DOCTYPE html>
<?php
session_start();
include("process/conn.php");

 
if (isset($_GET['id'])){
    
$userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM persones WHERE id=?");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:actors.php');}else{
        $personeinfos=$resultA->fetch_assoc();
    
?>
<html dir="rtl" lang="ar-AR">

<head>
    <title><?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?></title>
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


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/toastr.min.css"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/Lobibox.js"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script type="text/javascript" src="js/adsbygoogle.js?v=4.34.1g3"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">




    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LdvmnwUAAAAAJqyD_ag2I14Z-uU3GPyA6eBb_4Y&hl=en-US'></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />


    <link rel="stylesheet" href="dist/css/profile.css">

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

    </style>
</head>

<body>
    <?php include("menu.php"); ?>



    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="content-side hidden-sm-down">
                            <div class="box hidden-sm-down">
                                <div class="box-header p-b-0 text-center">
                                    <h1 class="film-title m-b-0"><?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?></h1>
                                </div>
                                <div class="box-body"> <img class="img-responsive" src="process/<?php echo $personeinfos['picture']; ?>" alt="<?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?>">
                                    <div class="share-container p-t p-b text-center">
                                        <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-facebook-f">
                                            </i><i class="fab fa-facebook-f indigo"></i>\
                                        </a>

                                        <a rel="nofollow" href="https://plus.google.com/share?url=Lee Min Ho https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-google-plus-g"></i>
                                            <i class="fab fa-google-plus-g red"></i>
                                        </a>

                                        <a rel="nofollow" href="http://twitter.com/home?status=Check out Lee Min Ho @My_Drama_List https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter light-blue"></i>
                                        </a>

                                        <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=https://mydramalist.com/people/232-lee-min-ho&amp;media=https://i.mydramalist.com/kEpQw_c.jpg&amp;description=Lee Min Ho" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-pinterest-p"></i>
                                            <i class="fab fa-pinterest-p red"></i>
                                        </a>

                                        <a class="jbtn-like btn btn-social btn-icon rounded light active" data-stats="people:232" data-id="232" data-type="people">
                                            <i class="fal fa-heart"></i>
                                            <i class="fal fa-heart red"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box clear hidden-sm-down">
                                <div class="box-header primary">
                                    <h3>التفاصيل</h3>
                                </div>
                                <div class="box-body light-b">
                                    <ul class="list m-b-0">
                                        <li class="list-item p-a-0"><b class="inline">الاسم العائلي: </b><?php echo $personeinfos['fname']; ?></li>
                                        <li class="list-item p-a-0"><b class="inline">الاسم الشخصي: </b> <?php echo $personeinfos['lname']; ?></li>
                                        <li class="list-item p-a-0"><b class="inline">الاسم باللغة الاصلية: </b> <?php echo $personeinfos['orname']; ?></li>
                                        <li class="list-item p-a-0"><b class="inline">اسماء الشهرة: </b> <?php echo $personeinfos['othname']; ?></li>

                                        <li class="list-item p-a-0"><b class="inline">الجنسية: </b> <?php echo datasignif($personeinfos['country'],'countryN'); ?></li>
                                        <li class="list-item p-a-0"><b class="inline">الجنس: </b> <?php 
                                        if ($personeinfos['sex']=='1'){
                                                            echo 'ذكر';
                                                        }else{
                                                            echo 'أنثى';
                                                        }    
                                        ?></li>
                                        <li class="list-item p-a-0"><b class="inline">تاريخ الميلاد: </b> <?php echo $personeinfos['dayb']; ?></li>
                                        <li class="list-item p-a-0"><b class="inline">العمر: </b>

                                            <script>
                                                document.write(Math.floor(moment(new Date()).diff(moment("<?php echo $personeinfos['dayb']; ?>", "MM/DD/YYYY"), 'years', true)));

                                            </script>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body mdl-support-goal text-center" data-toggle="popover" title="" data-hasqtip="0" aria-describedby="qtip-0">
                                    <h3 class="text-md">Weekly MyDramaList Support Goal<i class="fa fa-question-circle pull-right"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar success" role="progressbar" style="width: 7%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">7%</div>
                                    </div>
                                    <a href="/vip" rel="nofollow external" class="btn btn-sm white">Help Support MyDramaList</a>
                                    <div class="row social-icons-items">
                                        <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.facebook.com/MyDramaListdotcom/"><i class="fab fa-facebook-f indigo"></i></a>
                                            <div class="social-followers"> <span class="followers-num">73,319</span> <span class="followers-name">Fans</span> </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://twitter.com/My_Drama_List"><i class="fab fa-twitter light-blue"></i></a>
                                            <div class="social-followers"> <span class="followers-num">11,080</span> <span class="followers-name">Followers</span> </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.youtube.com/channel/UCfnEmDUWC4m0k-tDDGVM2Uw?sub_confirmation=1"><i class="fab fa-youtube red"></i></a>
                                            <div class="social-followers"> <span class="followers-num">3,410</span> <span class="followers-name">Subscribers</span> </div>
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

                            <div class="title-contributors box">
                                <div class="box-header b-b">
                                    <h2>Top Contributors</h2>
                                </div>
                                <div class="box-body">
                                    <div class="contributor"> <a class="author-avatar" href="/profile/Hessa"><img src="https://i.mydramalist.com/B3vE7t.gif" class="avatar w-40" alt=""></a>
                                        <div class="details">
                                            <div><a class="text-primary" href="/profile/Hessa"><b>Hessa</b></a></div>
                                            <div>7 edits</div>
                                        </div>
                                    </div>
                                    <div class="contributor"> <a class="author-avatar" href="/profile/abzzski"><img src="https://i.mydramalist.com/64ARWt.jpg" class="avatar w-40" alt=""></a>
                                        <div class="details">
                                            <div><a class="text-primary" href="/profile/abzzski"><b>Abzzski</b></a></div>
                                            <div>3 edits</div>
                                        </div>
                                    </div>
                                    <div class="contributor"> <a class="author-avatar" href="/profile/sangltdn"><img src="https://i.mydramalist.com/letter/sangltdn" class="avatar w-40" alt=""></a>
                                        <div class="details">
                                            <div><a class="text-primary" href="/profile/sangltdn"><b>sang le</b></a></div>
                                            <div>2 edits</div>
                                        </div>
                                    </div>
                                    <div class="contributor"> <a class="author-avatar" href="/profile/leemin622"><img src="https://i.mydramalist.com/qnXEPt.jpg" class="avatar w-40" alt=""></a>
                                        <div class="details">
                                            <div><a class="text-primary" href="/profile/leemin622"><b>Anna</b></a></div>
                                            <div>2 edits</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box clear">
                                <div class="box-header primary">
                                    <h3>Popular Lists</h3> <small>Related lists from users</small>
                                    <div class="box-tool"><a href="/list/create">Create a list</a></div>
                                </div>
                                <div class="box-body">
                                    <div class="custom-list-preview">
                                        <div class="content people"> <a class="collection" href="/list/PL6P7Ax4" title="Favorite Actors"> <span class="list-item people"> <img src="https://i.mydramalist.com/eRpddm.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/LpwRxm.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/44Rv1m.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/jAOovm.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/rVN1pm.jpg" alt="Favorite Actors"> </span> </a>
                                        </div>
                                        <div class="title bottom"> <a href="/list/PL6P7Ax4" title="Favorite Actors">Favorite Actors</a>
                                            <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 320 people</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 87 loves</span> </div>
                                        </div>
                                    </div>
                                    <div class="custom-list-preview">
                                        <div class="content people"> <a class="collection" href="/list/l4jqazR3" title="Favorite Actors"> <span class="list-item people"> <img src="https://i.mydramalist.com/EJZm0m.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/WrjwPm.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/X81nOm.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/Bbvn5m.jpg" alt="Favorite Actors"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/p0EpDm.jpg" alt="Favorite Actors"> </span> </a>
                                        </div>
                                        <div class="title bottom"> <a href="/list/l4jqazR3" title="Favorite Actors">Favorite Actors</a>
                                            <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 593 people</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 70 loves</span> <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> 2</span> </div>
                                        </div>
                                    </div>
                                    <div class="custom-list-preview">
                                        <div class="content people"> <a class="collection" href="/list/M4PxNMV4" title="Favourite Korean Actor/ess"> <span class="list-item people"> <img src="https://i.mydramalist.com/zNboPm.jpg" alt="Favourite Korean Actor/ess"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/E2zEOm.jpg" alt="Favourite Korean Actor/ess"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/kEpQwm.jpg" alt="Favourite Korean Actor/ess"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/eRpddm.jpg" alt="Favourite Korean Actor/ess"> </span> <span class="list-item people"> <img src="https://i.mydramalist.com/jAOovm.jpg" alt="Favourite Korean Actor/ess"> </span> </a>
                                        </div>
                                        <div class="title bottom"> <a href="/list/M4PxNMV4" title="Favourite Korean Actor/ess">Favourite Korean Actor/ess</a>
                                            <div class="list-bars text-black-lt"> <span class="m-r"><i class="fal fa-user m-r-xs"></i> 18 people</span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> 42 loves</span> <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> 3</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spnsr_right_2012">
                                <div class="spnsr" id="mdl-gpt-fbox2-1" style="height:250px; width:300px;" data-google-query-id="CPTbzcaIp-gCFTWrcQodF3QDVQ">
                                    <script>
                                        mdltag.cmd.push(function() {
                                            mdltag.defineSlot('/47261215/film_box_2_1', [300, 250], 'mdl-gpt-fbox2-1');
                                        })

                                    </script>
                                    <div id="google_ads_iframe_/47261215/film_box_2_1_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3>Featured Trailers</h3>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <div class="box-body featured-trailers clear p-l-xs p-r-xs">
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/top-cross-dressing"> <img src="https://i.mydramalist.com/736znm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Top Cross-Dressing</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/interspecies_romance"> <img src="https://i.mydramalist.com/d0dQAm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Interspecies Romance</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/rich_guy_poor_girl"> <img src="https://i.mydramalist.com/qWb15m.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Rich Guy/ Poor Girl</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/best-of-japan "> <img src="https://i.mydramalist.com/9rxx2m.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Best of Japan</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/best-of-2018"> <img src="https://i.mydramalist.com/4053wm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Best of 2018</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/E1VK5ak"> <img src="https://i.mydramalist.com/NdRKem.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Light and Fluffy</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/best_high_school_dramas"> <img src="https://i.mydramalist.com/rNzZmm.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Best High School Dramas</span> </a> </div>
                                    <div class="col-xs-6 col-lg-6 p-b"> <a class="cover" href="/trailers/playlist/most-popular-bromances"> <img src="https://i.mydramalist.com/LwBY3m.jpg" alt=""> <span class="title"><i class="fa fa-play-circle"></i> Most Popular Bromances</span> </a> </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h2>Recent Discussions</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <li class="list-item">
                                        <div class="list-left"><img src="https://i.mydramalist.com/EPBAzt.jpg" class="w-40 avatar"></div>
                                        <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/forum-games/44379-asian-drama-title-game-2">Asian Drama Title Game #2</a>
                                            <div><small class="text-muted"><i class="fal fa-clock"></i> 12 minutes ago</small></div>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-left"><img src="https://i.mydramalist.com/BbgJ1t.jpg" class="w-40 avatar"></div>
                                        <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/forum-games/35743-a-word-game">A Word Game</a>
                                            <div><small class="text-muted"><i class="fal fa-clock"></i> 13 minutes ago</small></div>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-left"><img src="https://i.mydramalist.com/rmBEjt.gif" class="w-40 avatar"></div>
                                        <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/forum-games/44369-10-dramas-movies-with-2">10 dramas/movies with ____? #2</a>
                                            <div><small class="text-muted"><i class="fal fa-clock"></i> 16 minutes ago</small></div>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-left"><img src="https://i.mydramalist.com/Elk27t.jpg" class="w-40 avatar"></div>
                                        <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/support/47085-wrong-average-rating">Wrong average rating</a>
                                            <div><small class="text-muted"><i class="fal fa-clock"></i> 19 minutes ago</small></div>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-left"><img src="https://i.mydramalist.com/rmBEjt.gif" class="w-40 avatar"></div>
                                        <div class="list-body"><a class="text-ellipsis text-primary" href="/discussions/general-asia-forum/44385-which-was-the-last-drama-episode-you-watched-part-3">Which Was the Last Drama Episode You Watched? Part 3</a>
                                            <div><small class="text-muted"><i class="fal fa-clock"></i> 21 minutes ago</small></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 250px;">
                                <div class="sticky" style="width: 334px;">
                                    <div class="spnsr_right_2012">
                                        <div class="spnsr" id="mdl-gpt-fbox3-0" style="min-height: 250px;" data-google-query-id="CPXbzcaIp-gCFTWrcQodF3QDVQ">
                                            <script>
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
                                <div class="box-tool hidden-xs-down" style="right:82%;"> <span id="likediv<?php echo $personeinfos['id']; ?>" onclick="opertion('ac|like','<?php echo $personeinfos['id']; ?>')" class="jbtn-like m-r <?php if(detailpost($personeinfos['id'],'ac')['myL']=='true'){ ?>active<?php }else{ ?><?php } ?>" data-id="232" data-type="people"><span class="like-cntb"><?php echo getLikes($personeinfos['id']); ?></span></span> <a href="/edit/people/details?id=232" class="text-sm text-primary" data-toggle="dropdown">إقترح تعديلا</a>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <div class="dropdown-divider"></div> <a class="dropdown-item btn-report m-b-sm" rel="nofollow" type="people">تبليغ</a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">



                                    <li class="page-item nav-item active"><a class="nav-link" href="/people/232-lee-min-ho">تفاصيل</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center cover hidden-md-up"> <img class="img-responsive inline" src="process/<?php echo $personeinfos['picture']; ?>" alt="<?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?>">
                                        <div class="p-t p-b text-center">

                                            <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-facebook-f"></i><i class="fab fa-facebook-f indigo"></i></a>

                                            <a rel="nofollow" href="http://twitter.com/home?status=Check out Lee Min Ho @My_Drama_List https://mydramalist.com/people/232-lee-min-ho" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a>

                                            <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=https://mydramalist.com/people/232-lee-min-ho&amp;media=https://i.mydramalist.com/kEpQw_c.jpg&amp;description=Lee Min Ho" class="btn btn-icon btn-social rounded light">
                                                <i class="fab fa-pinterest-p"></i><i class="fab fa-pinterest-p red"></i></a> <a class="jbtn-like btn btn-social btn-icon rounded light active" data-stats="people:232" data-id="232" data-type="people"><i class="fal fa-heart"></i><i class="fal fa-heart red"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-lg-12 col-md-12">
                                        <div class="hidden-md-up">
                                            <h1 class="film-title hidden-md-up"><?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?></h1>
                                            <ul class="list m-b-0">
                                                <li class="list-item p-a-0"><b class="inline">الاسم العائلي:</b><?php echo $personeinfos['fname']; ?></li>
                                                <li class="list-item p-a-0"><b class="inline">الاسم الشخصي:</b> <?php echo $personeinfos['lname']; ?></li>
                                                <li class="list-item p-a-0"><b class="inline">الاسم باللغة الاصلية:</b> <?php echo $personeinfos['orname']; ?></li>
                                                <li class="list-item p-a-0"><b class="inline">اسماء الشهرة:</b> <?php echo $personeinfos['othname']; ?></li>

                                                <li class="list-item p-a-0"><b class="inline">الجنسية:</b> <?php echo datasignif($personeinfos['country'],'countryN'); ?></li>
                                                <li class="list-item p-a-0"><b class="inline">الجنس:</b> <?php 
                                        if ($personeinfos['sex']=='1'){
                                                            echo 'ذكر';
                                                        }else{
                                                            echo 'أنثى';
                                                        }    
                                        ?></li>
                                                <li class="list-item p-a-0"><b class="inline">تاريخ الميلاد:</b> <?php echo $personeinfos['dayb']; ?></li>
                                                <li class="list-item p-a-0"><b class="inline">العمر:</b>

                                                    <script>
                                                        document.write(Math.floor(moment(new Date()).diff(moment("<?php echo $personeinfos['dayb']; ?>", "MM/DD/YYYY"), 'years', true)));

                                                    </script>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php echo $personeinfos['biography']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <?php 
    $stmtw = $conn->prepare("SELECT * FROM work WHERE idP=?");
    $stmtw->bind_param("s", $userid);
    $stmtw->execute();
    $resultw=$stmtw->get_result();
?>

                                <style>th{text-align: right}</style>
                                
                                
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

                                        <?php 
                                        $stmtg = $conn->prepare("SELECT * FROM work WHERE idP=? and type='act'");
                                        $stmtg->bind_param("s", $userid);
                                        $stmtg->execute();
                                        $resultg=$stmtg->get_result();
                                        
                                        while($w=$resultg->fetch_assoc()){
                                            
                                            $stmto = $conn->prepare("SELECT * FROM title WHERE id=? AND content_type='serie' ");
                                            $stmto->bind_param("s", $w['idT']);
                                            $stmto->execute();
                                            $resulto=$stmto->get_result();
                                            $drama=$resulto->fetch_assoc();
                                            
                                        ?>
                                        
                                       <?php  if ($drama['content_type']=='serie'){ ?>
                                        <tr class="mdl-35039">
                                            <td class="year hidden-sm-down"><?php echo substr($drama['f_date'],6,9); ?></td>
                                            <td class="title">
                                                <b><a class="text-primary" href="?post=<?php echo $drama['id'] ?>" title="<?php echo $drama['title']; ?>"><?php echo $drama['title'] ; ?></a></b>
                                                <button class="btn simple btn-manage-list" data-id="35039" data-stats="mylist:35039"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div><?php echo datasignif($drama['country'],'countryF'); ?>, <?php echo $drama['episodes'] ; ?> حلقة</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <a href="" class="text-primary" title="Emperor Yi Gon - The King: Eternal Monarch"><?php echo $w['chara']; ?></a>
                                                        </span>
                                                        <span class="text-muted roleid">(<?php echo datasignif($w['format'],'role'); ?>)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down"><?php echo $drama['episodes'] ; ?></td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <a href="" class="text-primary" title=""><?php echo $w['chara']; ?></a>
                                                </div>
                                                <div class="text-muted roleid"><?php echo datasignif($w['format'],'role'); ?></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:0%"></span></span>
                                                <div class="text-sm">0.0</div>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                                } 
                                        ?>

                                    </tbody>
                                </table>
                                <h5 class="header">إخراج</h5>
                                <table class="table film-list">
                                    <thead>
                                        <tr>
                                            <th style="text-align:right" class="year hidden-sm-down" width="70">السنة</th>
                                            <th style="text-align:right" class="title">العنوان</th>
                                            <th style="text-align:right" class="role hidden-sm-down" width="160">النوع</th>
                                            <th style="text-align:right" class="text-center" width="90">التقييم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mdl-7986">
                                            <td class="year hidden-sm-down">2014</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/7986-sea-fog">Sea Fog</a></b>
                                                <button class="btn simple btn-manage-list" data-id="7986" data-stats="mylist:7986"><span>add</span></button>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid">Movie</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:76%"></span></span>
                                                <span class="text-sm">7.6</span>
                                            </td>
                                        </tr>
                                        <tr class="mdl-997">
                                            <td class="year hidden-sm-down">2005</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/997-antarctic-journal">Antarctic Journal</a></b>
                                                <button class="btn simple btn-manage-list" data-id="997" data-stats="mylist:997"><span>add</span></button>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid">Movie</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:66%"></span></span>
                                                <span class="text-sm">6.6</span>
                                            </td>
                                        </tr>
                                        <tr class="mdl-13430">
                                            <td class="year hidden-sm-down">1999</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/13430-phantom-the-submarine">Phantom, The Submarine</a></b>
                                                <button class="btn simple btn-manage-list" data-id="13430" data-stats="mylist:13430"><span>add</span></button>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid">Movie</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:73%"></span></span>
                                                <span class="text-sm">7.3</span>
                                            </td>
                                        </tr>
                                        <tr class="mdl-13874">
                                            <td class="year hidden-sm-down">1997</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/13874-motel-cactus">Motel Cactus</a></b>
                                                <button class="btn simple btn-manage-list" data-id="13874" data-stats="mylist:13874"><span>add</span></button>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid">Movie</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:74%"></span></span>
                                                <span class="text-sm">7.4</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h5 class="header">Movie</h5>
                                <table class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">Year</th>
                                            <th class="title">Title</th>
                                            <th class="role hidden-sm-down" width="160">Role</th>
                                            <th class="text-center" width="90">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mdl-51667">
                                            <td class="year hidden-sm-down">2018</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/51667-believer-extended-cut" title="Believer: Extended Cut">Believer: Extended Cut</a></b>
                                                <button class="btn simple btn-manage-list" data-id="51667" data-stats="mylist:51667"><span>add</span></button>
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
                                                <span class="rating"><span class="fill" style="width:90%"></span></span>
                                                <div class="text-sm">9.0</div>
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
                                        <tr class="mdl-14717">
                                            <td class="year hidden-sm-down">2016</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/14717-bounty-hunters" title="Bounty Hunters">Bounty Hunters</a></b>
                                                <button class="btn simple btn-manage-list" data-id="14717" data-stats="mylist:14717"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Chinese Movie, <span>2016</span>, </div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <a href="/character/lee-san" class="text-primary" title="Lee San  - Bounty Hunters">Lee San </a>
                                                        </span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <a href="/character/lee-san" class="text-primary" title="Lee San  - Bounty Hunters">Lee San </a>
                                                </div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:75%"></span></span>
                                                <div class="text-sm">7.5</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-8151">
                                            <td class="year hidden-sm-down">2015</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/8151-gangnam-1970" title="Gangnam 1970">Gangnam 1970</a></b>
                                                <button class="btn simple btn-manage-list" data-id="8151" data-stats="mylist:8151"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Movie, <span>2015</span>, </div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <a href="/character/kim-jong-dae" class="text-primary" title="Kim Jong Dae - Gangnam 1970">Kim Jong Dae</a>
                                                        </span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <a href="/character/kim-jong-dae" class="text-primary" title="Kim Jong Dae - Gangnam 1970">Kim Jong Dae</a>
                                                </div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:72%"></span></span>
                                                <div class="text-sm">7.2</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-2712">
                                            <td class="year hidden-sm-down">2008</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/2712-our-school-e.t" title="Our School's E.T">Our School's E.T</a></b>
                                                <button class="btn simple btn-manage-list" data-id="2712" data-stats="mylist:2712"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Movie, <span>2008</span>, </div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Oh Sang Hoon</span>
                                                        <span class="text-muted roleid">(Support Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Oh Sang Hoon</div>
                                                <div class="text-muted roleid">Support Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:71%"></span></span>
                                                <div class="text-sm">7.1</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-2402">
                                            <td class="year hidden-sm-down">2008</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/2402-public-enemy-returns" title="Public Enemy Returns">Public Enemy Returns</a></b>
                                                <button class="btn simple btn-manage-list" data-id="2402" data-stats="mylist:2402"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Movie, <span>2008</span>, </div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Jung Ha Yeon</span>
                                                        <span class="text-muted roleid">(Support Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Jung Ha Yeon</div>
                                                <div class="text-muted roleid">Support Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:73%"></span></span>
                                                <div class="text-sm">7.3</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h5 class="header">Special</h5>
                                <table class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">Year</th>
                                            <th class="title">Title</th>
                                            <th class="episodes hidden-sm-down">#</th>
                                            <th class="role hidden-sm-down" width="160">Role</th>
                                            <th class="text-center" width="90">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mdl-22044">
                                            <td class="year hidden-sm-down">2016</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/22044-the-legend-of-the-blue-sea-the-legend-continues" title="The Legend of the Blue Sea - The Legend Continues">The Legend of the Blue Sea - The Legend Continues</a></b>
                                                <button class="btn simple btn-manage-list" data-id="22044" data-stats="mylist:22044"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2016</span>, 1 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Heo Joon Jae / Kim Dam Ryung [Past]</span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">1</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Heo Joon Jae / Kim Dam Ryung [Past]</div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:84%"></span></span>
                                                <div class="text-sm">8.4</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-10221">
                                            <td class="year hidden-sm-down">2014</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/10221-line-romance" title="Line Romance">Line Romance</a></b>
                                                <button class="btn simple btn-manage-list" data-id="10221" data-stats="mylist:10221"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Chinese Special, <span>2014</span>, 3 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Min Ho</span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">3</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Min Ho</div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:71%"></span></span>
                                                <div class="text-sm">7.1</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-8769">
                                            <td class="year hidden-sm-down">2013</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/8769-the-heirs-christmas-edition" title="The Heirs Christmas Edition">The Heirs Christmas Edition</a></b>
                                                <button class="btn simple btn-manage-list" data-id="8769" data-stats="mylist:8769"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2013</span>, 1 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Kim Tan</span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">1</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Kim Tan</div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:72%"></span></span>
                                                <div class="text-sm">7.2</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-11412">
                                            <td class="year hidden-sm-down">2012</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/11412-the-one-and-only-epilogue" title="The One and Only Epilogue">The One and Only Epilogue</a></b>
                                                <button class="btn simple btn-manage-list" data-id="11412" data-stats="mylist:11412"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2012</span>, 4 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <a href="/character/lee-joon-lee-kwon" class="text-primary" title="Lee Joon / Lee Kwon - The One and Only Epilogue">Lee Joon / Lee Kwon</a>
                                                        </span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">4</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <a href="/character/lee-joon-lee-kwon" class="text-primary" title="Lee Joon / Lee Kwon - The One and Only Epilogue">Lee Joon / Lee Kwon</a>
                                                </div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:71%"></span></span>
                                                <div class="text-sm">7.1</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-10312">
                                            <td class="year hidden-sm-down">2011</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/10312-the-one-and-only" title="The One and Only">The One and Only</a></b>
                                                <button class="btn simple btn-manage-list" data-id="10312" data-stats="mylist:10312"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2011</span>, 4 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Lee Joon / Lee Kwon</span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">4</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Lee Joon / Lee Kwon</div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:72%"></span></span>
                                                <div class="text-sm">7.2</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-33256">
                                            <td class="year hidden-sm-down">2009</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/33256-anycall-haptic-mission-2" title="Anycall Haptic Mission 2">Anycall Haptic Mission 2</a></b>
                                                <button class="btn simple btn-manage-list" data-id="33256" data-stats="mylist:33256"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2009</span>, 3 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                        </span>
                                                        <span class="text-muted roleid">(Unknown)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">3</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                </div>
                                                <div class="text-muted roleid">Unknown</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:78%"></span></span>
                                                <div class="text-sm">7.8</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-9271">
                                            <td class="year hidden-sm-down">2009</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/9271-boys-before-flowers-f4-after-story" title="Boys Before Flowers: F4 After Story">Boys Before Flowers: F4 After Story</a></b>
                                                <button class="btn simple btn-manage-list" data-id="9271" data-stats="mylist:9271"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean Special, <span>2009</span>, 4 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Goo Joon Pyo</span>
                                                        <span class="text-muted roleid">(Main Role)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">4</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Goo Joon Pyo</div>
                                                <div class="text-muted roleid">Main Role</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:76%"></span></span>
                                                <div class="text-sm">7.6</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h5 class="header">TV Show</h5>
                                <table class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">Year</th>
                                            <th class="title">Title</th>
                                            <th class="episodes hidden-sm-down">#</th>
                                            <th class="role hidden-sm-down" width="160">Role</th>
                                            <th class="text-center" width="90">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="mdl-28748">
                                            <td class="year hidden-sm-down">2017</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/28748-dmz-the-wild" title="DMZ, The Wild">DMZ, The Wild</a></b>
                                                <button class="btn simple btn-manage-list" data-id="28748" data-stats="mylist:28748"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean TV Show, <span>2017</span>, 4 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            Himself</span>
                                                        <span class="text-muted roleid">(Main Host)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">4</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    Himself</div>
                                                <div class="text-muted roleid">Main Host</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:93%"></span></span>
                                                <div class="text-sm">9.3</div>
                                            </td>
                                        </tr>
                                        <tr class="mdl-9276">
                                            <td class="year hidden-sm-down">2009</td>
                                            <td class="title">
                                                <b><a class="text-primary" href="/9276-boys-before-flowers-f4-talk-show-special" title="Boys Before Flowers: F4 Talk Show Special">Boys Before Flowers: F4 Talk Show Special</a></b>
                                                <button class="btn simple btn-manage-list" data-id="9276" data-stats="mylist:9276"><span>add</span></button>
                                                <div class="hidden-md-up text-muted">
                                                    <div>Korean TV Show, <span>2009</span>, 1 eps</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                        </span>
                                                        <span class="text-muted roleid">(Main Host)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down">1</td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                </div>
                                                <div class="text-muted roleid">Main Host</div>
                                            </td>
                                            <td class="text-center">
                                                <span class="rating"><span class="fill" style="width:77%"></span></span>
                                                <div class="text-sm">7.7</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row spnsr-row no-gutter">
                                <div class="col-lg-6 col-md-6">
                                    <div class="spnsr_right_2012">
                                        <div class="spnsr" id="mdl-gpt-fbox1-0" style="height:250px; width:300px;" data-google-query-id="CPbbzcaIp-gCFTWrcQodF3QDVQ">
                                            <script>
                                                mdltag.cmd.push(function() {
                                                    mdltag.defineSlot('/47261215/film_box_1', [300, 250], 'mdl-gpt-fbox1-0');
                                                })

                                            </script>
                                            <div id="google_ads_iframe_/47261215/film_box_1_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="spnsr_right_2012">
                                        <div class="spnsr" id="mdl-gpt-fbox1-1" style="height:250px; width:300px;" data-google-query-id="CPfbzcaIp-gCFTWrcQodF3QDVQ">
                                            <script>
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
                                <div class="pull-right"><a class="text-primary" href="/people/232-lee-min-ho/articles">View All</a></div>
                                <h5 class="header">Articles</h5>
                            </div>
                            <div class="m-a-0 articles-listing">
                                <div class="box-body" data-id="4057">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/help-i-ve-fallen-down-a-show-hole-and-can-t-get-out-011014057"> <img class="img-responsive cover" src="https://i.mydramalist.com/dvZVec.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/help-i-ve-fallen-down-a-show-hole-and-can-t-get-out-011014057">Help! I’ve Fallen Down a Show Hole and Can’t Get Out!</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Drama Recaps</span> - Dec 13, 2019</span> </div>
                                            <p>To quote the Urban Dictionary, a Show Hole is “that empty feeling that wraps around your soul because you don’t know now what do with your life” after binge-watching a series to the bitter end. Yep… That’s me… RIGHT NOW!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body" data-id="3355">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/boys-over-flowers-10-years-on-011013355"> <img class="img-responsive cover" src="https://i.mydramalist.com/x2jNjc.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/boys-over-flowers-10-years-on-011013355">Boys Over Flowers: 10 Years On</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - Jun 3, 2019</span> </div>
                                            <p>Check out what the main cast of BOF has been up to over the past 10 years</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body" data-id="3230">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/important-figures-in-korean-history-and-their-on-screen-portrayals-part-2-011013230"> <img class="img-responsive cover" src="https://i.mydramalist.com/Xeo6pc.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/important-figures-in-korean-history-and-their-on-screen-portrayals-part-2-011013230">Important Figures in Korean History and Their On-Screen Portrayals (Part 2)</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - May 18, 2019</span> </div>
                                            <p>From the pages of history books to the pages of drama scripts, a second look into the people who placed Korea on the map.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body" data-id="3166">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/a-very-tardy-2018-k-drama-rundown-011013166"> <img class="img-responsive cover" src="https://i.mydramalist.com/d4KVAc.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/a-very-tardy-2018-k-drama-rundown-011013166">A Very Tardy 2018 K-drama Rundown</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - Mar 15, 2019</span> </div>
                                            <p>A review of the best K-dramas from last year!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body" data-id="3131">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/a-stalker-s-guide-to-kim-ji-won-ultimate-fangirl-edition-011013131"> <img class="img-responsive cover" src="https://i.mydramalist.com/kJVXrc.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/a-stalker-s-guide-to-kim-ji-won-ultimate-fangirl-edition-011013131">A Stalker's Guide to Kim Ji Won (Ultimate Fangirl Edition)</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - Feb 21, 2019</span> </div>
                                            <p>Ralph Waldo Emerson’s Ode to Beauty may be bittersweet but this crazy fangirl’s ode to her favorite actress/girl crush is anything but. Check it out!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body" data-id="3076">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="/article/story-of-my-first-love-011013076"> <img class="img-responsive cover" src="https://i.mydramalist.com/10zB7c.jpg"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="/article/story-of-my-first-love-011013076">Story of My First Love</a></h6>
                                            <div class="text-muted"> <span class="spacer"><span class="label success">Editorials</span> - Jan 23, 2019</span> </div>
                                            <p>Who is your first love? Because mine's a bit special....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cmtsapp" pid="232" ptype="actor" title="Lee Min Ho" class="box comments-box post-comments" style="min-height: 100px;">
                            <div class="box-header b-b">
                                <h3>التعليقات <span>(803)</span></h3>
                            </div>

                            <?php if (isset($_SESSION['id'])){ ?>
                            <div class="box-body thread-post-form b-b">
                                <div class="post-form-body">
                                    <div class="avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="user-avatar"></div>
                                    <div class="post-form-textarea">
                                        <div class="form-group">
                                            <div class="el-textarea"><textarea autocomplete="off" placeholder="اترك تعليقا..." class="el-textarea__inner" style="min-height: 54px; height: 54px;"></textarea>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="box-body b-b clear light">
                                <div>يجب ان تقوم <a href="signin.php" class="text-primary quick-login">تسجيل الدخول </a> او <a href="signup.php" class="text-primary">التسجيل كمستعمل جديد </a> للقيام بنشر تعليق.</div>
                            </div>
                            <?php } ?>
                            <div class="box-body thread-post-form">
                                <ul id="comment-top" class="post-list">

                                    <li id="post-1903885" class="post comment">
                                        <!---->
                                        <div class="post-content">
                                            <ul class="post-tooltip post-menu hidden-xs-down">
                                                <li><span class="btn-like">14 <i class="like-heart"></i></span></li>
                                                <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                    <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                </li>
                                                <li><a href="#" class="reply">Reply</a></li>
                                            </ul>
                                            <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/pdLJnt.jpg" class="user-avatar"></span></div>
                                            <div class="post-body">
                                                <div class="post-header p-b-xs"><a href="/profile/Sweety-Face" target="_blank" class="user-display text-primary in-link"><b>Sweety-Face</b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                            <!---->
                                                            <!----></span>
                                                        <!---->
                                                        <!----></span> <span class="date">2 years ago</span></div>
                                                <div class="post-message">
                                                    <p>he can not act for shit</p>
                                                </div>
                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                    <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                        <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                    </li>
                                                    <li><span class="btn-like">14 <i class="like-heart"></i></span></li>
                                                    <li><a href="#" class="reply">Reply</a></li>
                                                </ul>
                                                <!---->
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li id="post-1980837" class="post comment">
                                                <div class="tl-container">
                                                    <div class="tl-inner"><i class="threadline"></i></div>
                                                </div>
                                                <div class="post-content">
                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                        <li><span class="btn-like">0 <i class="like-heart"></i></span></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                        </li>
                                                        <li><a href="#" class="reply">Reply</a></li>
                                                    </ul>
                                                    <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/Xw6VXt.jpg" class="user-avatar"></span></div>
                                                    <div class="post-body">
                                                        <div class="post-header p-b-xs"><a href="/profile/Junai" target="_blank" class="user-display text-primary in-link"><b>Irusu</b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                    <!---->
                                                                    <!----></span>
                                                                <!---->
                                                                <!----></span> <span class="date">2 years ago</span></div>
                                                        <div class="post-message">
                                                            <p>ikr</p>
                                                        </div>
                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                            <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                            </li>
                                                            <li><span class="btn-like">0 <i class="like-heart"></i></span></li>
                                                            <li><a href="#" class="reply">Reply</a></li>
                                                        </ul>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </li>
                                            <li id="post-2024198" class="post comment">
                                                <div class="tl-container">
                                                    <div class="tl-inner"><i class="threadline"></i></div>
                                                </div>
                                                <div class="post-content">
                                                    <ul class="post-tooltip post-menu hidden-xs-down">
                                                        <li><span class="btn-like">4 <i class="like-heart"></i></span></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                        </li>
                                                        <li><a href="#" class="reply">Reply</a></li>
                                                    </ul>
                                                    <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/VbgyQt.gif" class="user-avatar"></span></div>
                                                    <div class="post-body">
                                                        <div class="post-header p-b-xs"><a href="/profile/Malihajeny" target="_blank" class="user-display text-primary in-link"><b>Han Ay Jung</b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                                    <!---->
                                                                    <!----></span>
                                                                <!---->
                                                                <!----></span> <span class="date">2 years ago</span></div>
                                                        <div class="post-message">
                                                            <p>Ohh! i see! Did ya get oscar for acting!</p>
                                                        </div>
                                                        <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                            <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                            </li>
                                                            <li><span class="btn-like">4 <i class="like-heart"></i></span></li>
                                                            <li><a href="#" class="reply">Reply</a></li>
                                                        </ul>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </li>
                                        </ul>
                                        <!---->
                                    </li>
                                    <li id="post-1889491" class="post comment">
                                        <!---->
                                        <div class="post-content">
                                            <ul class="post-tooltip post-menu hidden-xs-down">
                                                <li><span class="btn-like">3 <i class="like-heart"></i></span></li>
                                                <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                    <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                </li>
                                                <li><a href="#" class="reply">Reply</a></li>
                                            </ul>
                                            <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/gZBBot.jpg" class="user-avatar"></span></div>
                                            <div class="post-body">
                                                <div class="post-header p-b-xs"><a href="/profile/Omaimahadi" target="_blank" class="user-display text-primary in-link"><b>OHVIP</b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                            <!---->
                                                            <!----></span>
                                                        <!---->
                                                        <!----></span> <span class="date">2 years ago</span></div>
                                                <div class="post-message">
                                                    <p>I can't wait till he finishes his service ... <br>I miss him so much ❤❤❤❤❤❤❤❤❤❤????????????</p>
                                                </div>
                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                    <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                        <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                    </li>
                                                    <li><span class="btn-like">3 <i class="like-heart"></i></span></li>
                                                    <li><a href="#" class="reply">Reply</a></li>
                                                </ul>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                    </li>
                                    <li id="post-1885985" class="post comment">
                                        <!---->
                                        <div class="post-content">
                                            <ul class="post-tooltip post-menu hidden-xs-down">
                                                <li><span class="btn-like">3 <i class="like-heart"></i></span></li>
                                                <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                    <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                </li>
                                                <li><a href="#" class="reply">Reply</a></li>
                                            </ul>
                                            <div class="avatar"><span class="user in-link"><img src="https://i.mydramalist.com/7ndWyt.jpg" class="user-avatar"></span></div>
                                            <div class="post-body">
                                                <div class="post-header p-b-xs"><a href="/profile/Kdramalover_1" target="_blank" class="user-display text-primary in-link"><b>Jasmin2344557</b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                            <!---->
                                                            <!----></span>
                                                        <!---->
                                                        <!----></span> <span class="date">2 years ago</span></div>
                                                <div class="post-message">
                                                    <p>I want to see him in more dramas.... well before this year ends at least</p>
                                                </div>
                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                    <li class="dropdown"><a href="#" data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a>
                                                        <div class="dropdown-menu dropdown-menu-scale pull-right"><a href="#" class="dropdown-item story-share">Share</a> </div>
                                                    </li>
                                                    <li><span class="btn-like">3 <i class="like-heart"></i></span></li>
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
                            <div class="box-footer"><button type="button" class="el-button btn btn-block btn-default el-button--default">
                                    <!---->
                                    <!----><span><strong>المزيد من التعاليق</strong></span></button></div>
                            <!---->
                            <div class="el-loading-mask" style="display: none;">
                                <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                        <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                    </svg>
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <script src="/dist/en/js/comments.js?v=5.4.13"></script>
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
                        <h3 class="text-md">تابعنا على موافع التواصل</h3>
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
                        <h3 class="text-md">اعمل معنا</h3>
                        <ul class="nav m-t">
                            <li class="m-t-sm"><a href="/discussions/community-tasks/29624-mdl-writers-article-ideas-discussion"><span>متاب</span></a></li>
                            <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>إشهار</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="m-y">
                        <h3 class="text-md">معلومات عنا</h3>
                        <ul class="nav m-t">
                            <li class="m-t-sm"><a href="/faq" rel="external nofollow"><span>الأسئلة المتكررة</span></a></li>
                            <li class="m-t-sm"><a href="/about" rel="external nofollow"><span>من نحن</span></a></li>
                            <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>تواصل معنا</span></a></li>
                            <li class="m-t-sm"><a href="/terms" rel="external nofollow"><span>قوانين الخدمة</span></a></li>
                            <li class="m-t-sm"><a href="/privacy" rel="external nofollow"><span>سياسة الخصوصية</span></a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="m-t">
                        <a href="/"><img alt="MyDramaList" src="assets/logo_w.png" width="158" height="24"></a>
                    </div>
                    <div><small class="text-muted">© جميع الحقوق محفوظة.</small></div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    <div id="mdl-manage-modal"></div>
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
<?php }}else{
        header("location:actors.php");
    } ?>
