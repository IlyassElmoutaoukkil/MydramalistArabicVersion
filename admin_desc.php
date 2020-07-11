<?php session_start();
include("process/conn.php");
include("process/iama.php");
if (isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('contact',$_SESSION['id'])) || $_SESSION['type']=='1') ){



?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>لوحة التحكم - المحادثات</title>
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
    <link rel="stylesheet" href="css/styled.css">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>

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
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">



    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
    <script type="text/javascript" src="js/toastr.js"></script>
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
    <?php include("menu.php"); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2007">
                <div class="spnsr-top-2007 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CI_EsoqK1OcCFYzGUQodQloJbg">
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
                                <h1>المحادثات</h1>
                            </div>
                            <div class="box-body" style="min-height: 300px;">

                                <div>
                                    <!-- tabs -->
                                    <div>
                                        <div class="row">
                                            <?php 
                                        $f=[];
                                        $stmte = $conn->prepare("SELECT count(id) as topics FROM topics ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topics']=$resulte->fetch_assoc()['topics'];
    
                                        $stmte = $conn->prepare("SELECT count(idU) as topT FROM topics WHERE DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topT']=$resulte->fetch_assoc()['topT'];
    
                                        $stmte = $conn->prepare(" SELECT count(id) as comments FROM comments WHERE postT='dc'");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comments']=$resulte->fetch_assoc()['comments'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as comT FROM comments WHERE DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comT']=$resulte->fetch_assoc()['comT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as forum FROM forum ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forum']=$resulte->fetch_assoc()['forum'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as forT FROM forum WHERE DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forT']=$resulte->fetch_assoc()['forT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as gde FROM gdescussion");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gde']=$resulte->fetch_assoc()['gde'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as gdeT FROM gdescussion WHERE DATE(`wn`) = CURDATE()");
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
                                                            <h2>الاجوبة</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['comments']; ?></span></h3>
                                                            </div>


                                                        </div>
                                                        <div class="income-range order-cl">
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
                                                            <h2>المواضيع</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">

                                                                <h3><span></span><span class="counter"><?php echo $f['topics']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                                <button onclick="add_topic()" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="income-range">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['topT']; ?> </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>المنتديات</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['forum']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                                <button onclick="add_forum_f()" class="btn btn-primary"><i class="fa fa-plus"></i></button>
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
                                                            <h2>المنتديات العامة</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['gde']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                                <button data-toggle="modal" data-target="#add_gdesc" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="income-range low-value-cl">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['gdeT']; ?></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="dashtwo-order-list shadow-reset">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="flot-chart flot-chart-dashtwo">
                                                                    <div class="flot-chart-content" id="flot-dashboard-chart">
                                                                        <canvas style="width: 1016px; height: 250px;" id="chart"></canvas></div>

                                                                    <script>
                                                                        var ctx = document.getElementById('chart').getContext('2d');

                                                                        var myChart = new Chart(ctx, {
                                                                            type: 'line',
                                                                            data: {
                                                                                labels: [

                                                                                    <?php 
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM comments WHERE MONTH(wn) = MONTH(CURDATE()) AND postT='dc' GROUP BY DAY(wn)");
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
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM pagev WHERE MONTH(wn) = MONTH(CURDATE()) AND page='topic' GROUP BY  DAY(wn)");
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
                                                                                    label: 'التعليقات',
                                                                                    data: [
                                                                                        <?php
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM comments WHERE MONTH(wn) = MONTH(CURDATE()) GROUP BY  DAY(wn)");
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
                                                                                }, {
                                                                                    label: 'المواضيع',
                                                                                    data: [
                                                                                        <?php
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM topics WHERE MONTH(wn) = MONTH(CURDATE()) GROUP BY  DAY(wn)");
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
                                                                                        '#f9944450'
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


                                <div class="el-loading-mask" style="display: none;">
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
    <div id="add_topic" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t">إضافة موضوع جديد</h4>
                </div>
                <div class="modal-body">
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>عنوان الموضوع</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input style="direction:ltr" type="text" autocomplete="off" placeholder="العنوان " class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="donecommB" data="" onclick="addtopic(this)">إضافة</button>
                </div>
            </div>

        </div>
    </div>
    <div id="add_forum_mo" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t">إضافة منتدى جديد</h4>
                </div>
                <div class="modal-body">

                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>عنوان المنتدى</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input type="text" id="forum_t" autocomplete="off" placeholder="العنوان " class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>

                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>المنتدى العام</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><select type="text" id="forum_gd" autocomplete="off" placeholder="المنتدى العام" class="el-input__inner">
                                </select>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>

                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>وصف المنتدى</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><textarea style="min-height:90px" id="forum_ds" type="text" autocomplete="off" placeholder="وصف قصير للمنتدى" class="el-input__inner"></textarea>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="add_forum_b" data="" onclick="add_gdesc_l(this)">إضافة</button>
                </div>
            </div>

        </div>
    </div>

    <div id="add_gdesc" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t">إضافة منتدى عام جديد</h4>
                </div>
                <div class="modal-body">
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>عنوان المنتدى العام</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input id="GFT" style="direction:ltr" type="text" autocomplete="off" placeholder="العنوان" class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="donecommB" data="" id='add_gdesc_b' onclick="add_gdesc_f(this)">إضافة</button>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/add_gdesc.js"></script>
    <script type="application/javascript">
        live();

    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
