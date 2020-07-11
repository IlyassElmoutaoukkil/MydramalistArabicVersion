<?php
session_start();
include("process/conn.php");
if(isset($_SESSION['id'])){
    $login=true;
}else{
    $login=false;
}
 
if (isset($_GET['id'])){
    
$userid=$_GET['id'];

    $stmtu = $conn->prepare("SELECT * FROM users WHERE code=?");
    $stmtu->bind_param("s", $userid);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    if ($resultu->num_rows==0){ header('location:index.php');}else{

    $user=$resultu->fetch_assoc();
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>أصدقاء <?php echo $user['username']; ?></title>
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
    <?php include('menu.php') ; addvisite('allfriends');?>
            <div id="content" class="slideout-panel slideout-panel-right">
                <div class="app-body">
                    <div class="spnsr-wrapper-2007">
                        <div class="spnsr-top-2007 is-desktop">

                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="box">
                                    <div id="app_view" style="min-height: 450px;" class="">
                                        <div class="box-header box-navbar">
                                            <h1>أصدقاء <?php echo $user['username']; ?></h1>
                                            <ul class="nav nav-tabs">
                                                <li class="page-item nav-item active router-link-active">
                                                    <?php
                                                        $stmto = $conn->prepare("SELECT * FROM friend WHERE (rfrom = ? OR rto = ?) AND status='1'");
                                                        $stmto->bind_param("ss", $userid , $userid);
                                                        $stmto->execute();
                                                        $resulto=$stmto->get_result();
                                                        
                                                        $allfr=$resulto->num_rows;
                                                    ?>
                                                    
                                                    <a href="#" class="nav-link">كل الاصدقاء (<?php echo  $allfr; ?>)</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <br>
                                            <br>
                                            
                                            <div class="box-body">
                                                <?php if($allfr=='0'){?> <h3 class="text-center">لا يوجد أصدقاء ل <?php echo $user['username']; ?></h3> <?php } ?>
                                                <ul class="list no-border p-b clear">

                                                  <?php while($friend=$resulto->fetch_assoc()){  ?>
                                                    
                                                    <?php 
        
                                                    $myid=$user['id'];
                                                    if($friend['rfrom']==$myid){
                                                        $friendinfo; $friendinfo=userinfo($friend['rto']);
                                                    }else{
                                                        $friendinfo; $friendinfo=userinfo($friend['rfrom']);
                                                    }
                                                    ?>
                                                    <li class="list-item col-sm-12 col-lg-6 m-b"><span class="pull-right m-r"><a href="profile.php?id=<?php echo $friendinfo['code']; ?>"><img style="heigt:64px; height:64px" src="process/<?php echo $friendinfo['picture'] ?>" class="img-responsive rounded"></a></span>
                                                        <div class="p-a-0">
                                                         <a href="profile.php?id=<?php echo $friendinfo['code'] ?>" class="text-primary"><b><?php echo $friendinfo['username'] ?></b></a>
                                                            <!---->
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                                </ul>
                                                <div class="el-loading-mask" style="display: none;">
                                                    <div class="el-loading-spinner">
                                                        <svg viewBox="25 25 50 50" class="circular">
                                                            <circle cx="50" cy="50" r="20" fill="none" class="path">

                                                            </circle>
                                                        </svg>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="dist/en/js/friends.js?v=5.4.6a"></script>
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
    
  
    header('location:index.php');
} ?>
