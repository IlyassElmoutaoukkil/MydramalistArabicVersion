<?php
ob_start();
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }

if($login){
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تقييم - كل تنبيهاتي</title>
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
    <?php include("menu.php"); addvisite('notifications'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2017">
                <div class="spnsr-top-2017 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="COngya_PhukCFYXjGwodNf8K2w">

                        <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/47261215/header_top_0" title="3rd party ad content" name="google_ads_iframe_/47261215/header_top_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="1" data-load-complete="true" width="728" height="90" frameborder="0"></iframe></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box notifications-list">
                            <div class="box-header"><button onclick="rall()" type="button" class="el-button pull-left text-primary btn-clear el-button--default">
                                    <!---->
                                    <!----><span>تحديد الكل كمقروءة</span></button>
                                <h1 class="text-lg title">جميع التنبيهات</h1>
                            </div>
                            <div class="box-body" style="min-height: 300px;">
                                <ul class="list-group">
                                    <?php
                                    $myid=$_SESSION['id'];
                                    $stmtA = $conn->prepare("SELECT * FROM notification WHERE nto = ? ");
                                    $stmtA->bind_param("s", $myid);
                                    $stmtA->execute();
                                    $resultnA=$stmtA->get_result();
                                    $total=$resultnA->num_rows;
           
                                    $pagemax=ceil($total/20);
           
                                    if(isset($_GET['page'])  && is_numeric($_GET['page'])){
                                        $page=$_GET['page'];
                                        if ($_GET['page']>$pagemax){
                                            $page=$pagemax;
                                        }else{
                                            if($page<=0 ){
                                                $page=1;
                                            }else{
                                                $page=$_GET['page'];
                                            }
                                        }
                                    }else{
                                        $page=1;
                                    }

                                    $offset=($page-1)*20;
           
           
                                    $myid=$_SESSION['id'];
                                    $stmtA = $conn->prepare("SELECT * FROM notification WHERE nto = ? ORDER BY wn DESC LIMIT 20 OFFSET ?");
                                    $stmtA->bind_param("si", $myid,$offset);
                                    $stmtA->execute();
                                    $resultnA=$stmtA->get_result();
                                    $n=0;
           
                                    
                                    while($noti=$resultnA->fetch_assoc()){ $n++;
                                  
                                                    if ($noti['type']=='fd|comment' || $noti['type']=='ls|comment' || $noti['type']=='rv|comment' ||  $noti['type']=='ac|comment' || $noti['type']=='dr|comment' || $noti['type']=='ar|comment' || $noti['type']=='dc|comment' ){
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $noti['post']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;
                                                        }
                                                        $exist=(postexist($noti['post'],'cm') && $cmp);
                                                        
                                                    }elseif ($noti['type']=='replie'){
                                                        
                                                        $stmt = $conn->prepare("SELECT * FROM replies WHERE id=?");
                                                        $stmt->bind_param("s", $noti['post']);
                                                        $stmt->execute();
                                                        $resultn=$stmt->get_result();
                                                        $rp=$resultn->fetch_assoc();
                                                        
                                                        
                                                        $exist=(postexist($noti['post'],'rp') && postexist($rp['idC'],'cm'));
                                                    }elseif($noti['type']=='cm|like'){
                                                        
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $noti['post']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;
                                                        }
                                                        
                                                        $exist=(postexist($noti['post'],'cm') && $cmp);
                   
                                                    }elseif($noti['type']=='rp|like'){
                                                        $stmt = $conn->prepare("SELECT * FROM replies WHERE id=?");
                                                        $stmt->bind_param("s", $noti['post']);
                                                        $stmt->execute();
                                                        $resultn=$stmt->get_result();
                                                        $rp=$resultn->fetch_assoc();
                                                        
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $rp['idC']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;
                                                        }
                                                        
                                                        $exist=(postexist($noti['post'],'rp') && postexist($rp['idC'],'cm') && $cmp);

                                                    }elseif ($noti['type']=='ac|like'){
                                                         $exist=postexist($noti['post'],'ac');
                                                    }elseif($noti['type']=='dr|like'){
                                                         $exist=postexist($noti['post'],'dr');
                                                    }elseif($noti['type']=='ar|like'){
                                                         $exist=postexist($noti['post'],'ar');
                                                    }elseif($noti['type']=='fd|like'){

                                                         $exist=postexist($noti['post'],'fd');
                                                    }elseif($noti['type']=='ls|like'){
                                                         $exist=postexist($noti['ls'],'cm');
                                                    }elseif($noti['type']=='rv|like'){

                                                        $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                                                        $stmt_r->bind_param("s", $noti['post']);
                                                        $stmt_r->execute();
                                                        $result_r=$stmt_r->get_result();
                                                        $fetch_r = $result_r->fetch_assoc();

                                                         $exist=postexist($noti['post'],'rv');
                                                    }elseif($noti['type']=='rc|like'){

                                                        $stmt_r = $conn->prepare("SELECT * FROM recom WHERE id = ? ");
                                                        $stmt_r->bind_param("s", $noti['post']);
                                                        $stmt_r->execute();
                                                        $result_r=$stmt_r->get_result();
                                                        $fetch_r = $result_r->fetch_assoc();

                                                         $exist=postexist($noti['post'],'rc');
                                                    }
                                                                          
                                    ?>
                                    
                                    <?php if($exist){ ?>
                                    <li class="list-group-item n<?php echo $n ?>"><a href="notification.php?id=<?php echo $noti['id']; ?>" data-notif="20272759" class="overlay"></a> <span class="avatar"><img src="process/<?php echo userinfo($noti['nfrom'])['picture']; ?>" class="w-40 img-circle"></span> <span class="message"><a href="profile.php?id=<?php echo $noti['nfrom']; ?>"><?php echo userinfo($noti['nfrom'])['username']; ?></a> <span><?php echo notificationF($noti,'text'); ?></span><br><small class="timeago"><script type="application/javascript">
                                                        moment.locale("ar_AL");
                                                        document.write(moment('<?php echo $noti['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                    </script></small></span></li>
                                    
                                    <?php } ?>
                                    <?php } ?>
                                </ul>
                                
                                
                                <!---->
                                <div class="el-loading-mask" style="display: none;">
                                    <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                            <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                        </svg>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="btn-group">
                                    
                                    <a <?php if($page==$pagemax){  }else{ echo 'href="?page='.($page+1).'"';  } ?>><button id='nx'  type="button" class="el-button btn btn-next white el-button--default <?php if($page==$pagemax){ echo 'is-disabled'; }else{   } ?>" <?php if($page==$pagemax){ echo 'disabled'; }else{   } ?>>
                                        <!---->
                                    <!----><span><i class="fa fa-chevron-right"></i></span></button></a>
                                    
                                    <a <?php if($page=='1'){}else{ ?><?php echo 'href="?page='.($page-1).'"'; } ?>><button id='pr'  type="button" class="el-button btn btn-prev white el-button--default <?php if($page=='1'){ echo 'is-disabled'; }else{   } ?>" <?php if($page=='1'){ echo 'disabled'; }else{   } ?>>
                                        <!---->
                                    <!----><span><i class="fa fa-chevron-left"></i></span></button></a>
                                    
                                    
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/dist/en/js/notifications.js?v=5.5.4"></script>
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


</body>
</body>

</html>

<?php } ?>