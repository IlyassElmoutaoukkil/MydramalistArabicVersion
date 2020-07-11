<?php session_start();

include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تقييم - مساهمونا </title>
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
    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
    <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <script type="text/javascript" src="js/Lobibox.js"></script>



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
    <?php include("menu.php"); addvisite('contributors'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box" id="top-contributors">
                            <div class="box-header">
                                <h1>أعلى المساهمين</h1>
                            </div>
                            <div class="box-body">
                                <canvas style="width: 1016px; height: 200px;" id="chart" height="200" width="1016"></canvas>

                                <script>
                                    
                                    var ctx = document.getElementById('chart').getContext('2d');
                                    
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                                
                                                <?php 
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM mission WHERE MONTH(wn) = MONTH(CURDATE()) AND status='Accepted' GROUP BY  DAY(wn)");
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
                                                ?>],
                                            datasets: [{
                                               
                                                data: [
                                                    <?php
                                                    
                                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn FROM mission WHERE MONTH(wn) = MONTH(CURDATE()) AND status='Accepted' GROUP BY  DAY(wn)");
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
                                                    
                                                ],
                                                borderColor: [
                                                    
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                    display: false
                                                },
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
                                <div class="contributors-list">
                                    <ul>
                                        <li class="c-head">
                                            <div class="c-head-rank text-center">المرتبة</div>
                                            <div class="c-head-contributor text-center">المساهم</div>
                                            <div class="c-head-edits">المساهمات</div>
                                        </li>
                                        
                                        <?php
                                        $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn,idU FROM mission WHERE status='Accepted' GROUP BY idU ORDER BY wr DESC");
                                        $stmto->execute();
                                        $resultob=$stmto->get_result();
                                       
                                        $n=0;
                                        
                                        while($ofN=$resultob->fetch_assoc()){ $n++;
                                        ?>
                                        <li class="contributor">
                                            <div class="author">
                                                <div class="rank"><?php echo $n; ?></div>
                                                <a class="text-primary" href="profile.php?id=<?php $inf=userinfo($ofN['idU']); echo $inf['code']; ?>">
                                                    <img src="process/<?php echo $inf['picture']  ?>" class="avatar w-48" alt="">
                                                    <p class="name"><?php echo $inf['username']  ?><span class="m-l-sm mdl-btag"> <span title="Verified Account" class="mdl-verified mdl-med"></span> <span title="<?php echo $inf['username']  ?>" class="mdl-star mdl-med"></span> </span>
                                                    </p>
                                                </a>
                                                <p class="joined">عضو منذ: <?php echo substr($inf['wn'],0,4); ?></p>
                                            </div>
                                            <div class="stats">
                                                <div class="details">
                                                    <div>
                                                        <span>المجموع</span>
                                                        <p><?php echo $ofN['wr'] ?></p>
                                                    </div>
                                                    
                                                    <div>
                                                        <span>عناوين</span>
                                                        
                                                        <?php 
                                            
                                                        $stmto = $conn->prepare("SELECT id FROM mission WHERE status='Accepted' AND (type='edititle' OR type='addTitle') AND idU=? ");
                                                        $stmto->bind_param('s',$ofN['idU']);
                                                        $stmto->execute();
                                                        $resulto=$stmto->get_result();
                                                                           
                                                        ?>
                                                        <p><?php echo $resulto->num_rows ?></p>
                                                    </div>
                                                    <div>
                                                        <span>أشخاص</span>
                                                        <?php 
                                            
                                                        $stmto = $conn->prepare("SELECT id FROM mission WHERE status='Accepted' AND (type='addPers' OR type='edipersone') AND idU=? ");
                                                        $stmto->bind_param('s',$ofN['idU']);
                                                        $stmto->execute();
                                                        $resulto=$stmto->get_result();
                                                                           
                                                        ?>
                                                        <p><?php echo $resulto->num_rows ?></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        
                                        
                                        


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
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
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
