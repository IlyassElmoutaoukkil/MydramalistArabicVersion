<?php session_start();
include("process/conn.php");
include("process/iama.php");
if (isset($_SESSION['id']) && (($_SESSION['type']=='2') || $_SESSION['type']=='1') ){
                
            if($_SESSION['type']=='1'){
                $sa=true;
            }else{
                $sa=false;
            }
    
 if($sa){
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تقييم - لوحة التحكم</title>
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
    <link rel="stylesheet" href="css/styled.css">
    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
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
    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/adsbygoogle.js?v=4.34.1g3"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">



    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
    <script src="js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
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
    <?php include("menu.php");include("process/php_country_array.php"); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2007">
                <div class="spnsr-top-2007 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CI_EsoqK1OcCFYzGUQodQloJbg">

                        <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div>
                    </div>
                </div>
            </div>




            <div id="pm" class="container-fluid">
                <div class="row">

                    <style type="text/css">
                        .admin_nav li {
                            padding: 23px 0px;
                            cursor: pointer;
                            font-size: 23px;
                        }

                        .admin_nav .active {
                            background-color: #00619d;
                            color: #fff;
                        }

                        .admin_nav li:hover {
                            background-color: aliceblue;
                            color: #000000;
                        }

                    </style>

                    <div class="col-lg-1" style="">
                        <div class="box pm-menu" style="padding-top:10px;">
                            <?php admin_menu() ?>
                        </div>
                    </div>



                    <div class="col-lg-11 tab-content">
                        <div role="tabpanel" id="send" class="box tab-pane  fade in " role="tabpanel">

                        </div>


                        <div id="inbox" class="box tab-pane fade in active" role="tabpanel">
                            <div class="box-header">
                                <h1>لوحة التحكم</h1>
                            </div>
                            <div class="box-body" style="min-height: 300px;">

                                <div>
                                    <!-- tabs -->
                                    <div>
                                        <div class="row">
                                            <?php
                                       
                                        $f=[];
                                        $stmte = $conn->prepare("SELECT count(id) as topics FROM pagev WHERE MONTH(wn) = MONTH(CURDATE())");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topics']=$resulte->fetch_assoc()['topics'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as topT FROM pagev WHERE  MONTH(wn) = MONTH(CURDATE()) AND  DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topT']=$resulte->fetch_assoc()['topT'];
    
                                        $stmte = $conn->prepare(" SELECT count(id) as visits FROM users");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comments']=$resulte->fetch_assoc()['visits'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as comT FROM users WHERE DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comT']=$resulte->fetch_assoc()['comT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as forum FROM mission WHERE status='0' ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forum']=$resulte->fetch_assoc()['forum'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as forT FROM mission WHERE status='0' AND DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forT']=$resulte->fetch_assoc()['forT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as gde FROM likes ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gde']=$resulte->fetch_assoc()['gde'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as gdeT FROM likes WHERE DATE(`wn`) = CURDATE()  ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gdeT']=$resulte->fetch_assoc()['gdeT'];
                                        
    
//                                        $stmte = $conn->prepare(" SELECT count(id) as visits FROM visits WHERE page='forum' OR page='descu' OR page='topics' UNION SELECT count(id) as visT FROM visits WHERE DATE(`wn`) = CURDATE()");
//                                        $stmte->execute();
//                                        $resulte=$stmte->get_result();
//                                        $numr=$resulte->num_rows;
//                                        $f['visits']=$resulte->fetch_assoc()['visits'];
//                                        $f['visT']=$resulte->fetch_assoc()['visT'];

                                                                                     
                                    ?>



                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>مجموع الإعجابات</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['gde']; ?></span></h3>
                                                            </div>


                                                        </div>
                                                        <div class="income-range order-cl">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['gdeT']; ?> </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>المهام</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['forum']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                            </div>
                                                        </div>
                                                        <div class="income-range visitor-cl">

                                                            <span class="income-percentange pull-right"><?php echo $f['forT']; ?></span>
                                                            <p>اليوم</p>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>المسجلين</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">

                                                                <h3><span></span><span class="counter"><?php echo $f['comments']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                            </div>
                                                        </div>
                                                        <div class="income-range">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['comT']; ?> </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>الزيارات الشهرية</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['topics']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">

                                                            </div>
                                                        </div>
                                                        <div class="income-range low-value-cl">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['topT']; ?></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title" style="background-color:#f99224">
                                                        <div class="main-income-head">
                                                            <h2>منحنى الزيارات</h2>

                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="dashtwo-order-list shadow-reset">
                                                                <div class="row">
                                                                    <div class="col-lg-9">
                                                                        <div class="flot-chart flot-chart-dashtwo">
                                                                            <div class="flot-chart-content" id="flot-dashboard-chart">
                                                                                <canvas style="width: 1016px; height: 400px;" id="chart"></canvas></div>

                                                                            <script>
                                                                                var ctx = document.getElementById('chart').getContext('2d');

                                                                                var myChart = new Chart(ctx, {
                                                                                    type: 'line',
                                                                                    data: {
                                                                                        labels: [

                                                                                            <?php 
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM pagev WHERE MONTH(wn) = MONTH(CURDATE()) GROUP BY DAY(wn)");
                                                    $stmto->execute();
                                                    $resulto=$stmto->get_result();
                                                
                                                    
                                                ?>

                                                                                            <?php
                                                $x=0;
                                                while($of=$resulto->fetch_assoc()){
                                                    $x++;
                                                    
                                                    echo '"'.substr($of['wn'],0,10).'",';
                                                    if($x==$resulto->num_rows){
                                                        echo '"'.substr($of['wn'],0,10).'"';
                                                    }
                                                }
                                                ?>
                                                                                        ],
                                                                                        datasets: [{
                                                                                            label: 'الزيارات',
                                                                                            data: [
                                                                                                <?php
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM pagev WHERE MONTH(wn) = MONTH(CURDATE()) GROUP BY  DAY(wn)");
                                                    $stmto->execute();
                                                    $resulto=$stmto->get_result();
                                                    
                                                     $y=0;
                                                     while($ofd=$resulto->fetch_assoc()){
                                                        $y++;

                                                        echo $ofd['wr'].',';
                                                        if($y==$resulto->num_rows){
                                                            echo $ofd['wr'];
                                                        }
                                                     }
                                                    ?>
                                                                                            ],
                                                                                            backgroundColor: [
                                                                                                '#f9922420'
                                                                                            ],
                                                                                            borderColor: [
                                                                                                '#f99224'
                                                                                            ],
                                                                                            borderWidth: 1
                                                                                        }, {
                                                                                            label: 'المستعملين الجدد',
                                                                                            data: [
                                                                                                <?php
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM users WHERE MONTH(wn) = MONTH(CURDATE()) GROUP BY  DAY(wn)");
                                                    $stmto->execute();
                                                    $resulto=$stmto->get_result();
                                                    
                                                     $y=0;
                                                     while($ofd=$resulto->fetch_assoc()){
                                                        $y++;

                                                        echo $ofd['wr'].',';
                                                        if($y==$resulto->num_rows){
                                                            echo $ofd['wr'];
                                                        }
                                                     }
                                                    ?>
                                                                                            ],
                                                                                            backgroundColor: [
                                                                                                '#f9929020'
                                                                                            ],
                                                                                            borderColor: [
                                                                                                '#f99290'
                                                                                            ],
                                                                                            borderWidth: 1
                                                                                        }]
                                                                                    },
                                                                                    options: {

                                                                                        scales: {
                                                                                            yAxes: [{
                                                                                                ticks: {
                                                                                                    beginAtZero: true
                                                                                                }
                                                                                            }]
                                                                                        }
                                                                                    }
                                                                                });

                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="skill">

                                                                            <div class="" style="border:1px solid #00000040;display:inline-flex;width:100%">
                                                                                <div>
                                                                                    <p>الإعجابات</p>
                                                                                    <h3>
                                                                                        <?php $stmte = $conn->prepare(" SELECT count(id) as visits FROM likes");
                                                                                                $stmte->execute();
                                                                                                $resulte=$stmte->get_result();
                                                                                                $numr=$resulte->num_rows;
                                                                                                echo $resulte->fetch_assoc()['visits']; ?></h3>
                                                                                </div>

                                                                                <div style="float:left">
                                                                                    <h1><i style="color:#ff6334" class="fa fa-heart"></i></h1>
                                                                                </div>
                                                                            </div>


                                                                            <div class="" style="border:1px solid #00000040;display:inline-flex;width:100%">
                                                                                <div>
                                                                                    <p>التعليقات</p>
                                                                                    <h3><?php $stmte = $conn->prepare(" SELECT count(id) as visits FROM comments");
                                                                                                $stmte->execute();
                                                                                                $resulte=$stmte->get_result();
                                                                                                $numr=$resulte->num_rows;
                                                                                                echo $resulte->fetch_assoc()['visits']; ?></h3>
                                                                                </div>

                                                                                <div style="float:left">
                                                                                    <h1><i style="color:#0000ff70" class="fa fa-comments"></i></h1>
                                                                                </div>
                                                                            </div>


                                                                            <div class="" style="border:1px solid #00000040;display:inline-flex;width:100%">
                                                                                <div>
                                                                                    <p>الإبلاغات</p>
                                                                                    <h3><?php $stmte = $conn->prepare(" SELECT count(id) as visits FROM reports");
                                                                                                $stmte->execute();
                                                                                                $resulte=$stmte->get_result();
                                                                                                $numr=$resulte->num_rows;
                                                                                                echo $resulte->fetch_assoc()['visits']; ?></h3>
                                                                                </div>

                                                                                <div style="float:left">
                                                                                    <h1><i style="color:red" class="fa fa-flag"></i></h1>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>

                                <div>
                                    <!-- chart -->

                                </div>

                                <div>
                                    <!-- otherdata -->
                                </div>



                            </div>

                            <div class="feed-mesage-project-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                                <div class="sparkline11-hd">
                                                    <div class="main-sparkline11-hd">
                                                        <h1>أكثر المستعملين إعجابا</h1>

                                                    </div>
                                                </div>
                                                <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                                    <?php $stmte = $conn->prepare(" SELECT count(id) as usr,idL FROM likes WHERE idL!='' GROUP BY idL ORDER BY usr DESC LIMIT 3 ");
                                  $stmte->execute();
                                  $resulte=$stmte->get_result();
                                  $numr=$resulte->num_rows;
                                   ?>

                                                    <?php while($pers=$resulte->fetch_assoc()){ ?>
                                                    <div class="daily-feed-list" style="padding-bottom: 10px;">
                                                        <div class="daily-feed-img">
                                                            <a href="#"><img src="process/<?php $perso=userinfo($pers['idL']); echo $perso['picture']; ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="daily-feed-content">
                                                            <h4><span class="feed-author"><?php  echo $perso['username'];  ?></span></h4>

                                                            <span class="feed-ago"><?php  echo $pers['usr'];  ?></span>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                                <div class="sparkline11-hd">
                                                    <div class="main-sparkline11-hd">
                                                        <h1>أكثر المستعملين تعليقا</h1>

                                                    </div>
                                                </div>
                                                <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                                    <?php $stmte = $conn->prepare(" SELECT count(id) as usr,idU FROM  comments WHERE idU!='' GROUP BY idU ORDER BY usr DESC LIMIT 3 ");
                                  $stmte->execute();
                                  $resulte=$stmte->get_result();
                                  $numr=$resulte->num_rows;
                                   ?>

                                                    <?php while($pers=$resulte->fetch_assoc()){ ?>
                                                    <div class="daily-feed-list" style="padding-bottom: 10px;">
                                                        <div class="daily-feed-img">
                                                            <a href="#"><img src="process/<?php $perso=userinfo($pers['idU']); echo $perso['picture']; ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="daily-feed-content">
                                                            <h4><span class="feed-author"><?php  echo $perso['username'];  ?></span></h4>

                                                            <span class="feed-ago"><?php  echo $pers['usr'];  ?></span>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                                <div class="sparkline11-hd">
                                                    <div class="main-sparkline11-hd">
                                                        <h1>أكثر المستعملين إبلاغا</h1>

                                                    </div>
                                                </div>
                                                <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                                    <?php $stmte = $conn->prepare(" SELECT count(id) as usr,idR FROM  reports WHERE idR!='' GROUP BY idR ORDER BY usr DESC LIMIT 3 ");
                                  $stmte->execute();
                                  $resulte=$stmte->get_result();
                                  $numr=$resulte->num_rows;
                                   ?>

                                                    <?php while($pers=$resulte->fetch_assoc()){ ?>
                                                    <div class="daily-feed-list" style="padding-bottom: 10px;">
                                                        <div class="daily-feed-img">
                                                            <a href="#"><img src="process/<?php $perso=userinfo($pers['idR']); echo $perso['picture']; ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="daily-feed-content">
                                                            <h4><span class="feed-author"><?php  echo $perso['username'];  ?></span></h4>

                                                            <span class="feed-ago"><?php  echo $pers['usr'];  ?></span>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                        <div class="income-title" style="background-color:#f99224">
                                            <div class="main-income-head">
                                                <h2>خريطة الزوار</h2>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="col-lg-9">
                                                <div class="vectorjsmarp" id="world-map"></div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>
                                                    <div class="skill">

                                                        <?php 
    
    
                                                        $stmtef = $conn->prepare(" SELECT country FROM pagev WHERE country!=''");
                                                        $stmtef->execute();
                                                        $resultef=$stmtef->get_result();
                                                        $nm=$resultef->num_rows;
    
        
                                                        $stmte = $conn->prepare(" SELECT count(id) as visits,country FROM pagev WHERE country!='' GROUP BY country ORDER BY visits DESC LIMIT 6");
                                                        $stmte->execute();
                                                        $resulte=$stmte->get_result();
                                                        $numr=$resulte->num_rows;
                                                                             ?>

                                                        <?php while($inf=$resulte->fetch_assoc()){ ?>
                                                        <div class="" style="border:1px solid #00000040;display:inline-flex;width:100%">
                                                            <div>
                                                                <p style="margin: 0 0 0px"><?php echo ceil(($inf['visits']/$nm)*100) ?>%</p>
                                                                <h3>
                                                                    <?php echo $countries[$inf['country']]; ?>
                                                                </h3>
                                                            </div>

                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script>
                            (function($) {
                                "use strict";
                                var mapData = {

                                    <?php 
                                        $stmte = $conn->prepare("SELECT count(id) as hm ,country  FROM pagev WHERE country!='' GROUP BY country ORDER BY hm");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                    ?>

                                    <?php 
                                        $x=0;
                                        while($c=$resulte->fetch_assoc()){ $x++; ?> "<?php echo $c['country']; ?>": <?php echo $c['hm']; if($resulte->num_rows==$x){ echo ' '; }else{ echo ' ,' ;} ?> <?php }
    
                                    ?>

                                };

                                $('#world-map').vectorMap({
                                    map: 'world_mill_en',
                                    backgroundColor: "transparent",
                                    regionStyle: {
                                        initial: {
                                            fill: '#03a9f4',
                                            "fill-opacity": 0.9,
                                            stroke: 'none',
                                            "stroke-width": 0,
                                            "stroke-opacity": 0
                                        }
                                    },

                                    series: {
                                        regions: [{
                                            values: mapData,
                                            scale: ["#ccc", "#03a9f4"],
                                            normalizeFunction: 'polynomial'
                                        }]
                                    },
                                });

                            })(jQuery);

                        </script>




                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/dist/en/js/inbox.js?v=5.4.6a"></script>
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
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>


    <script type="application/javascript">
        live();

    </script>

</body>

</html>

<?php 
        
}else{
     if(iama('contact',$_SESSION['id'])){
         header('location:admin_desc.php');
     }elseif(iama('writer',$_SESSION['id'])){
         header('location:admin_article.php');
     }elseif(iama('manager',$_SESSION['id'])){
         header('location:admin_management.php');
     }
 }
}else{ header("location: index.php"); } ?>
