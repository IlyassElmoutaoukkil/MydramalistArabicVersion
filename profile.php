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
    
    
    $stmto = $conn->prepare("SELECT * FROM online WHERE user = ?");
    $stmto->bind_param("s", $userid);
    $stmto->execute();
    $resulto=$stmto->get_result();
    $online=$resulto->fetch_assoc();
        
        $rev=false;
        $lis=false;
        $fee=false;
        $rec=false;
        $pro=false;
        
        if(isset($_GET['option'])){
            switch ($_GET['option']){
                
                case 'lists':
                    $lis=true;
                break;
                    
                case 'recom':
                    $rec=true;
                break;
                    
                case 'reviews':
                    $rev=true;
                break;
                    
                case 'feeds':
                    $fee=true;
                break;
                    
                default:
                    $pro=true;
                break;
                    
            }
        }else{
             $pro=true;
        }
?>
<!DOCTYPE html>

<html dir="rtl" lang="ar-AR">

<head>
    <title><?php echo $user['username']; ?></title>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
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
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">




    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LdvmnwUAAAAAJqyD_ag2I14Z-uU3GPyA6eBb_4Y&hl=en-US'></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" href="css/star-rating-svg.css">
    <link rel="stylesheet" href="dist/css/profile.css">


    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />

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
    <?php include("menu.php"); addvisite('profile'); ?>



    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid profile-container">
                <div class="row">

                    <div class="col-lg-8 col-md-8">
                        <div class="box">
                            <div class="box-header box-navbar">
                                <div class="profile-header">
                                    <div class="row no-gutter hidden-md-up">
                                        <div class="col-xs-2 col-sm-1 m-l-md">
                                            <div class="avatar w-64 m-t-sm">
                                                <img src="process/<?php echo $user['picture']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-8" style="float: right;">
                                            <h1><?php echo $user['username']; ?> <span class="mdl-btag"> </span> </h1>
                                            <small><?php echo $user['location']; ?></small>
                                        </div>
                                    </div>
                                    <div class="hidden-sm-down">
                                        <h1><?php echo $user['username']; ?> <span class="mdl-btag"> </span> </h1>
                                        <small><?php echo $user['location']; ?></small>
                                    </div>
                                </div>

                                <?php if (isset($_SESSION['id'])){ ?>
                                <?php if ($_SESSION['id']==$user['code']){}else{ ?>


                                <?php
                                                            $stmto = $conn->prepare("SELECT * FROM friend WHERE (rto = ? AND rfrom = ?) OR (rto = ? AND rfrom = ?)");
                                                            $stmto->bind_param("ssss", $user['code'], $_SESSION['id'], $_SESSION['id'], $user['code']);
                                                            $stmto->execute();
                                                            $resulto=$stmto->get_result();
                                                            $rfriend=$resulto->fetch_assoc();   
                                                            
                                                            if ($resulto->num_rows>0){                              
                                                            if ($rfriend['status']==1){
                                                ?>
                                <div class="box-tool dropdown" id="allenv" style="right:76%">
                                    <div data-username="" class="friend-edge with-compose" style="display: inline-flex;">

                                        <div class="el-dropdown" id="env<?php echo $user['code']; ?>">
                                            <button onclick="friendreq('<?php echo $user['code']; ?>','friendreq','')" type="button" class="el-button el-button--default el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-9247" role="button" tabindex="0">

                                                <span>
                                                    <i class="fa fa-caret-down"></i>صديق
                                                </span>
                                                <i class="fal fa-check"></i>

                                            </button>

                                            <ul class="el-dropdown-menu el-popper" style="display: none;" id="dropdown-menu-9247">
                                                <li tabindex="-1" class="el-dropdown-menu__item"><span>حظر</span></li>
                                            </ul>

                                        </div>


                                        <button type="button" class="el-button el-button--default">
                                            <i class="fal fa-envelope"></i>
                                        </button>

                                    </div>
                                </div>
                                <?php }else{ 
                                        if ($rfriend['rfrom']==$_SESSION['id'] && $rfriend['rto']==$user['code']){ 
                                        ?>

                                <div class="box-tool dropdown" id="allenv" style="right:70%">
                                    <div data-username="ssdf" class="friend-edge with-compose">

                                        <div class="el-dropdown" id="env<?php echo $user['code']; ?>">
                                            <button onclick="friendreq('<?php echo $user['code']; ?>','friendreq','')" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0">
                                                <i class="fal fa-user-clock"></i>
                                                <span> طلب مرسل <i class="fa fa-caret-down"></i></span>
                                            </button>
                                        </div>


                                        <button type="button" class="el-button el-button--default">
                                            <i class="fal fa-envelope"></i>
                                        </button>

                                    </div>

                                </div>

                                <?php
                                        }elseif($rfriend['rto']==$_SESSION['id'] && $rfriend['rfrom']==$user['code']){
                                        ?>
                                <div class="box-tool dropdown" id="allenv" style="right:63%">
                                    <div data-username="" class="friend-edge with-compose" style="display: inline-flex;">

                                        <div class="el-dropdown" id="env<?php echo $user['code']; ?>">
                                            <button onclick="friendreq('<?php echo $user['code']; ?>','friendreq','acc')" type="button" class="el-button el-button--default el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-9247" role="button" tabindex="0">
                                                <span><i class="fa fa-caret-down"></i>قبول طلب الصداقة</span> <i class="fal fa-check"></i>
                                            </button>

                                            <ul class="el-dropdown-menu el-popper" style="display: none;" id="dropdown-menu-9247">

                                                <li tabindex="-1" class="el-dropdown-menu__item"><span>حظر</span></li>
                                            </ul>
                                        </div>

                                        <button id="invref<?php echo $user['code']; ?>" type="button" onclick="friendreq('<?php echo $user['code']; ?>','friendreq','ref')" class="el-button el-button--default">
                                            <i class="fa fa-times"></i>
                                        </button>

                                        <button type="button" class="el-button el-button--default">
                                            <i class="fal fa-envelope"></i>
                                        </button>

                                    </div>
                                </div>
                                <?php }}}else{ ?>

                                <div class="box-tool dropdown" id="allenv" style="right:76%">
                                    <div data-username="" class="friend-edge with-compose" style="display: inline-flex;">

                                        <div class="el-dropdown" id="env<?php echo $user['code']; ?>">

                                            <button onclick="friendreq('<?php echo $user['code']; ?>','friendreq','')" type="button" class="el-button el-button--default el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-9247" role="button" tabindex="0">
                                                <span><i class="fa fa-caret-down"></i>إضافة</span> <i class="fal fa-user"></i>
                                            </button>

                                            <ul class="el-dropdown-menu el-popper" style="display: none;" id="dropdown-menu-9247">

                                                <li tabindex="-1" class="el-dropdown-menu__item"><span>حظر</span></li>
                                            </ul>

                                        </div>

                                        <button type="button" class="el-button el-button--default">
                                            <i class="fal fa-envelope"></i>
                                        </button>

                                    </div>
                                </div>

                                <?php } ?>

                                <?php }} ?>
                                <ul class="nav nav-tabs">
                                   
                                    <li class="page-item nav-item <?php if($lis){echo 'active';} ?>"><a class="nav-link" href="profile.php?id=<?php echo $user['code']?>&option=lists">لائحتي</a></li>
                                    <li class="page-item nav-item <?php if($rec){echo 'active';} ?>"><a class="nav-link" href="profile.php?id=<?php echo $user['code']?>&option=recom">توصياتي</a></li>
                                    <li class="page-item nav-item <?php if($rev){echo 'active';} ?>"><a class="nav-link" href="profile.php?id=<?php echo $user['code']?>&option=reviews">مراجعاتي</a></li>
                                    <li class="page-item nav-item <?php if($pro){echo 'active';} ?>"><a class="nav-link" href="profile.php?id=<?php echo $user['code']?>">ملفي</a></li>







                                </ul>
                                <script type="text/javascript" src="dist/en/js/profile.js?v=5.4.6b"></script>
                            </div>
                            <br><br>
                            <div class="box-body html_content_block" style="-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);overflow: hidden;">
                                <?php if($pro){ ?>
                                <?php echo $user['descr']; ?>
                                <?php }else{ ?>
                                    
                                    <!--  REVIEWS  -->
                                
                                    <?php if($rev){ ?>
                                        <?php 
                                
                                if(isset($_GET['rid'])){
                                    if(postexist($_GET['rid'],'rv')){
                                        $rid=true;
                                        $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idU=? AND id=? ORDER BY helpf DESC");
                                        $stmtA->bind_param("ss", $user['code'],$_GET['rid']);
                                    }else{
                                        $rid=false;
                                        $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idU=? ORDER BY helpf DESC");
                                        $stmtA->bind_param("s", $user['code']);
                                    }
                                }else{
                                    $rid=false;
                                    $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idU=? ORDER BY helpf DESC");
                                    $stmtA->bind_param("s", $user['code']);
                                }
                            
                            
                            
                            $stmtA->execute();
                            $resultA=$stmtA->get_result();
                            
                            if(!$rid){
                            if ($resultA->num_rows==0){echo "<div style='text-align:center'><h3>لم يتم إضافة اي مراجعات.</h3></div>";}else{
                                 ?>
                            <?php while($review=$resultA->fetch_assoc()){ ?>
                            <div id="review-50935" class="review" data-stats="reviews:50935">
                                <div class="box-body light b-t b-b p-t-sm p-b-sm">
                                    <div class="row no-gutter">
                                        <div class="col-sm-9">
                                            <div class="pull-left m-r"> <span class="avatar w-56"> <img src="process/<?php $useri=userinfo($review['idU']); echo $useri['picture']; $titleinfos=titleinfo($review['idT']) ?>"> </span> </div>
                                            <div>
                                                <div class="pull-right hidden-sm-up"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> </div> <b><a class="text-primary" href="profile.php?<?php $useri['id']; ?>"><?php $useri['username']; ?></a></b>
                                                <div class="user-stats review_stats_50935"><small><?php if($review['helpf']=='0' || $review['helpf']<0 || $review['helpf']==''){}else{?><b><?php echo $review['helpf'] ?></b> وجدوا هذه المراجعة مفيدة.<?php } ?></small> <i class="review-voted-check review-voted-check-50935"></i></div>
                                                <div class="more-reviews"> <small><a class="text-primary" href="profile.php?id=<?php echo $useri['id']; ?>&option=reviews">مراجعات اخرى لهدا المستعمل</a></small>
                                                    <div class="hidden-sm-up pull-right"> <small><a href="profile.php?id=<?php echo $useri['id']; ?>&option=reviews"></a></small>
                                                        <div class="mdl-dropdown"> <a class="nav-link btn-menu" data-id="50935" data-type="review"><span><i class="far fa-chevron-down"></i></span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 text-sm text-right hidden-xs-down">
                                            <div class="meta"> <small class="datetime">
                                                    <script type="application/javascript">
                                                        moment.locale("ar_AL");
                                                        document.write(moment('<?php echo $review['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                                    </script>
                                                </small>
                                                <?php if($titleinfos['content_type']=='serie' || $titleinfos['content_type']=='tvshow'){ ?>
                                                <?php if( $titleinfos['episodes']!='0' || $titleinfos['episodes']!='' ){ ?>
                                                <?php if($review['rewa']=='true'){ ?>
                                                <div class="episodes-seen text-muted"> شاهد <b><?php $titleinfos['episodes'] ?></b> / <b><?php $titleinfos['episodes'] ?></b> حلقة </div>
                                                <?php }else{ ?>
                                                <?php if($review['rewa']=='false'){ ?>
                                                <div class="episodes-seen text-muted"> شاهد <b><?php $review['episw']; ?></b> / <b><?php $titleinfos['episodes'] ?></b> حلقة </div>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php }else{?>
                                                <?php if($review['rewa']=='true'){ ?>
                                                <div class="episodes-seen text-muted">شاهد العمل كاملا</div>
                                                <?php }else{ ?>
                                                <div class="episodes-seen text-muted">لم يشاهد العمل كاملا</div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <div class="actions"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> <small><a href="profile.php?id=<?php echo $review['idU']; ?>&option=reviews&rid=<?php echo $review['id']; ?>"><i class="fal fa-comments-alt"></i><?php echo detailpost($review['id'],'rv')['postC']; ?></a></small>
                                                <div class="mdl-dropdown"> <a class="nav-link btn-menu" data-id="50935" data-type="review"><span><i class="far fa-chevron-down"></i></span></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-12 review-body" id="review_b_<?php echo $review['id']; ?>">
                                            <div class="box pull-right text-sm m-a-sm">
                                                <div class="box-header p-t-sm p-b-sm rating-overall"> <b>المتوسط <span class="score pull-left"><?php echo $review['overall']; ?></span></b> </div>
                                                <div class="box-body p-t-sm p-b-sm">
                                                    <div class="list-group review-rating">
                                                        <div>القصة <span class="p-r-md pull-left"><?php echo $review['story']; ?></span></div>
                                                        <div>الاداء <span class="p-r-md pull-left"><?php echo $review['act']; ?></span></div>
                                                        <div>الموسيقى <span class="p-r-md pull-left"><?php echo $review['music']; ?></span></div>
                                                        <div>إعادة المشاهدة <span class="p-r-md pull-left"><?php echo $review['rewatch']; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p><strong><?php echo $review['headline']; ?></strong></p> <?php echo substr($review['text'],0,200); ?> <p class="read-more" onclick="readmore_r('<?php echo $review['id']; ?>',this)"><a class="button">قراءة المزيد</a></p>
                                            <div class="review-helpful m-t p-t xb-t">
                                                <?php if(isset($_SESSION['id'])){ ?>
                                                <div class="review-vote review-helpful-50935"><span class="text-muted">هل كانت هذه المراجعة مفيدة بالنسبة لك؟</span>
                                                    <?php
                                                            $myid=$_SESSION['id'];
                                                            $id=$review['id'];
                                                            $stmtA1 = $conn->prepare("SELECT * FROM helpfr WHERE idU=? AND idR=? ");
                                                            $stmtA1->bind_param("ss", $myid,$id);
                                                            $stmtA1->execute();
                                                            $resultA1=$stmtA1->get_result();
                                                            $empd=$resultA1->num_rows==0;
                                                        ?>

                                                    <?php if ($empd){ ?>
                                                    <button id="ry<?php echo $review['id']; ?>" onclick="helpreview('1','<?php echo $review['id']; ?>')" class="btn btn-xs white helpful review-cast-helpful" data-id="50935" data-label="Yes"><span>نعم</span></button>

                                                    <button id="rn<?php echo $review['id']; ?>" onclick="helpreview('0','<?php echo $review['id']; ?>')" class="btn btn-xs white unhelpful review-cast-helpful" data-id="50935" data-label="No"><span>لا</span></button>
                                                    <?php }else{ ?>
                                                    <?php $des=$resultA1->fetch_assoc()['op']; ?>

                                                    <button id="ry<?php echo $review['id']; ?>" onclick="helpreview('1','<?php echo $review['id']; ?>')" class="btn btn-xs <?php if($des=='1'){ echo 'voted'; }else{echo 'white';} ?> helpful review-cast-helpful" data-id="50935" data-label="Yes"><span>نعم</span></button>

                                                    <button id="rn<?php echo $review['id']; ?>" onclick="helpreview('0','<?php echo $review['id']; ?>')" class="btn btn-xs <?php if($des=='0'){ echo 'voted'; }else{echo 'white';} ?> unhelpful review-cast-helpful" data-id="50935" data-label="No"><span>لا</span></button>

                                                    <?php } ?>

                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                            
                            <?php }else{ $review=$resultA->fetch_assoc(); ?>
                                
                                <!-- reid exist -->
                                
                                
                                <div id="review-50935" class="review" data-stats="reviews:50935">
                                <div class="box-body light b-t b-b p-t-sm p-b-sm">
                                    <div class="row no-gutter">
                                        <div class="col-sm-9">
                                            <div class="pull-left m-r"> <span class="avatar w-56"> <img src="process/<?php $useri=userinfo($review['idU']); echo $useri['picture']; $titleinfos=titleinfo($review['idT']) ?>"> </span> </div>
                                            <div>
                                                <div class="pull-right hidden-sm-up"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> </div> <b><a class="text-primary" href="profile.php?<?php $useri['id']; ?>"><?php $useri['username']; ?></a></b>
                                                <div class="user-stats review_stats_50935"><small><?php if($review['helpf']=='0' || $review['helpf']<0 || $review['helpf']==''){}else{?><b><?php echo $review['helpf'] ?></b> وجدوا هذه المراجعة مفيدة.<?php } ?></small> <i class="review-voted-check review-voted-check-50935"></i></div>
                                                <div class="more-reviews"> <small><a class="text-primary" href="profile.php?id=<?php echo $useri['id']; ?>&option=reviews">مراجعات اخرى لهدا المستعمل</a></small>
                                                    <div class="hidden-sm-up pull-right"> <small><a href="profile.php?id=<?php echo $useri['id']; ?>&option=reviews"></a></small>
                                                        <div class="mdl-dropdown"> <a class="nav-link btn-menu" data-id="50935" data-type="review"><span><i class="far fa-chevron-down"></i></span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 text-sm text-right hidden-xs-down">
                                            <div class="meta"> <small class="datetime">
                                                    <script type="application/javascript">
                                                        moment.locale("ar_AL");
                                                        document.write(moment('<?php echo $review['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                                    </script>
                                                </small>
                                                <?php if($titleinfos['content_type']=='serie' || $titleinfos['content_type']=='tvshow'){ ?>
                                                <?php if( $titleinfos['episodes']!='0' || $titleinfos['episodes']!='' ){ ?>
                                                <?php if($review['rewa']=='true'){ ?>
                                                <div class="episodes-seen text-muted"> شاهد <b><?php $titleinfos['episodes'] ?></b> / <b><?php $titleinfos['episodes'] ?></b> حلقة </div>
                                                <?php }else{ ?>
                                                <?php if($review['rewa']=='false'){ ?>
                                                <div class="episodes-seen text-muted"> شاهد <b><?php $review['episw']; ?></b> / <b><?php $titleinfos['episodes'] ?></b> حلقة </div>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php }else{?>
                                                <?php if($review['rewa']=='true'){ ?>
                                                <div class="episodes-seen text-muted">شاهد العمل كاملا</div>
                                                <?php }else{ ?>
                                                <div class="episodes-seen text-muted">لم يشاهد العمل كاملا</div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <div class="actions"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> <small><a href="profile.php?id=<?php echo $review['idU']; ?>&option=reviews&rid=<?php echo $review['id']; ?>"><i class="fal fa-comments-alt"></i><?php echo detailpost($review['id'],'rv')['postC']; ?></a></small>
                                                <div class="mdl-dropdown"> <a class="nav-link btn-menu" data-id="50935" data-type="review"><span><i class="far fa-chevron-down"></i></span></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-12 review-body" id="review_b_<?php echo $review['id']; ?>">
                                            <div class="box pull-right text-sm m-a-sm">
                                                <div class="box-header p-t-sm p-b-sm rating-overall"> <b>المتوسط <span class="score pull-left"><?php echo $review['overall']; ?></span></b> </div>
                                                <div class="box-body p-t-sm p-b-sm">
                                                    <div class="list-group review-rating">
                                                        <div>القصة <span class="p-r-md pull-left"><?php echo $review['story']; ?></span></div>
                                                        <div>الاداء <span class="p-r-md pull-left"><?php echo $review['act']; ?></span></div>
                                                        <div>الموسيقى <span class="p-r-md pull-left"><?php echo $review['music']; ?></span></div>
                                                        <div>إعادة المشاهدة <span class="p-r-md pull-left"><?php echo $review['rewatch']; ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p><strong><?php echo $review['headline']; ?></strong></p> <?php echo substr($review['text'],0,200); ?> <p class="read-more" onclick="readmore_r('<?php echo $review['id']; ?>',this)"><a class="button">قراءة المزيد</a></p>
                                            <div class="review-helpful m-t p-t xb-t">
                                                <?php if(isset($_SESSION['id'])){ ?>
                                                <div class="review-vote review-helpful-50935"><span class="text-muted">هل كانت هذه المراجعة مفيدة بالنسبة لك؟</span>
                                                    <?php
                                                            $myid=$_SESSION['id'];
                                                            $id=$review['id'];
                                                            $stmtA1 = $conn->prepare("SELECT * FROM helpfr WHERE idU=? AND idR=? ");
                                                            $stmtA1->bind_param("ss", $myid,$id);
                                                            $stmtA1->execute();
                                                            $resultA1=$stmtA1->get_result();
                                                            $empd=$resultA1->num_rows==0;
                                                        ?>

                                                    <?php if ($empd){ ?>
                                                    <button id="ry<?php echo $review['id']; ?>" onclick="helpreview('1','<?php echo $review['id']; ?>')" class="btn btn-xs white helpful review-cast-helpful" data-id="50935" data-label="Yes"><span>نعم</span></button>

                                                    <button id="rn<?php echo $review['id']; ?>" onclick="helpreview('0','<?php echo $review['id']; ?>')" class="btn btn-xs white unhelpful review-cast-helpful" data-id="50935" data-label="No"><span>لا</span></button>
                                                    <?php }else{ ?>
                                                    <?php $des=$resultA1->fetch_assoc()['op']; ?>

                                                    <button id="ry<?php echo $review['id']; ?>" onclick="helpreview('1','<?php echo $review['id']; ?>')" class="btn btn-xs <?php if($des=='1'){ echo 'voted'; }else{echo 'white';} ?> helpful review-cast-helpful" data-id="50935" data-label="Yes"><span>نعم</span></button>

                                                    <button id="rn<?php echo $review['id']; ?>" onclick="helpreview('0','<?php echo $review['id']; ?>')" class="btn btn-xs <?php if($des=='0'){ echo 'voted'; }else{echo 'white';} ?> unhelpful review-cast-helpful" data-id="50935" data-label="No"><span>لا</span></button>

                                                    <?php } ?>

                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <?php } ?>
                                
                                
                                <?php }elseif($lis){?>
                                
                                
                                <div class="box-body">
                                        <?php
                                        $stmtA = $conn->prepare("SELECT * FROM list  ORDER BY wn DESC ");
                                        
                                        $stmtA->execute();
                                        echo $conn->error;
                                        $resultA=$stmtA->get_result();
                                       ;
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                          
                                        }else{
                                          $x=0;$n=2;  while($array2=$resultA->fetch_assoc()){ $x++; 
                                                
                                        $stmtC = $conn->prepare("SELECT * FROM comments WHERE idP=? AND postT='ls'");
                                        $stmtC->bind_param("s",$array2['id']);
                                        $stmtC->execute();
                                        $resultC=$stmtC->get_result();
                                        $array2['comments']=$resultC->num_rows;
                                            
                                        $stmtL = $conn->prepare("SELECT * FROM likes WHERE idP=? AND postT='ls' and idL!=''");
                                        $stmtL->bind_param("s",$array2['id']);
                                        $stmtL->execute();
                                        $resultL=$stmtL->get_result();
                                        $array2['liken']=$resultL->num_rows   ;
                                            
                                        $stmtP = $conn->prepare("SELECT * FROM listt WHERE idL=?");
                                        $stmtP->bind_param("s",$array2['id']);
                                        $stmtP->execute();
                                        $resultP=$stmtP->get_result();
                                        $array2['s']=$resultP->num_rows ;
                                        
                                        if($array2['type']=='vote'){
                                        $stmtV = $conn->prepare("SELECT SUM(score) as total,idL FROM listt WHERE idL=?");
                                        $stmtV->bind_param("s",$array2['id']);
                                        $stmtV->execute();
                                        $resultV=$stmtV->get_result();
                                        $array2['totalS']=$resultV->fetch_assoc()['total'];
                                        }
                                                
                                            if(!$login){
                                                $mine=false;
                                            }else{
                                                if($_SESSION['id']==$array2['idU']){
                                                    $mine=true;
                                                }else{
                                                    $mine=false;
                                                }
                                            }
                                             if($array2['content']=='title'){ $typea="عنوان" ;$tp="fa-user";}else{$typea='شخص';$tp="fa-tv";};
                                            if( $array2['type']=='public' || $array2['type']=='vote' || ($array2['type']=='private' && $mine)   ){
                                                
                                                ?>
                                        <?php if($x==$n){ ?>
                                            <div class="row">
                                        <?php } ?>
                                                <div class="col-lg-6 col-md-6 custom-list-preview large">
                                                    <div class="content people">
                                                        <a class="collection" href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['id'] ?>">
                                                        <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 5");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        
                                                        while ($items=$result2->fetch_assoc()){ $tinf; $tinf=titleinfo($items['idT']);
                                                        ?>
                                                        
                                                        <?php if($array2['content']=='title'){ $typea="عنوان"; ?><?php $tinf; $tinf=titleinfo($items['idT']); ?>
                                                        <span class="list-item people">
                                                                <img style="height:100%;width:100%" src="process/<?php echo $tinf['image']; ?>" alt="<?php echo $tinf['title']; ?>">
                                                            
                                                        </span>
                                                        <?php }else{ $typea='شخص' ?><?php $tinf; $tinf=personeinfo($items['idT']); ?>
                                                        <span class="list-item people">
                                                                <img style="height:100%;width:100%" src="process/<?php echo $tinf['picture']; ?>" alt="<?php echo $tinf['fname'].' '.$tinf['lname']; ?>">
                                                           
                                                        </span>
                                                        
                                                        <?php  } ?>
                                                        <?php
                                                        }
                                                
                                                        
                                                        ?>

                                                        </a>
                                                    </div>
                                                
                                                <div class="title bottom">

                                                    <a href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['title']; ?>"><?php echo $array2['title']; ?></a>
                                                    <div class="list-bars text-black-lt">
                                                        <span class="m-r"><i class="fal <?php echo $tp;  ?>  m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                                    </div>
                                                
                                            <?php if($x==$n){ $n=$n+2; ?>
                                            </div>
                                            <?php } ?>
                                <?php

                                            }else{
                                                $list=false;
                                            }
                                            
                                        }
                                        }
          
          ?>
                                    </div>
                                
                                <?php }elseif($rec){ 
                                   
                                        $stmtu = $conn->prepare('SELECT * FROM recom WHERE idU=? ORDER BY wn DESC ');
                                        $stmtu->bind_param('s',$_GET['id']);
                                        $stmtu->execute();
                                        $resultu=$stmtu->get_result();
                                            
                                    while($reco=$resultu->fetch_assoc()){ $dtp=detailpost($reco['id'],'rc'); if($dtp['postrepo']>100){}else{
                                    $il=titleinfo($reco['idRT'],'dr');
                                    $so=titleinfo($reco['idT'],'dr');
                                    ?>
                                    <div id="rec_<?php echo $reco['id']; ?>" class="box-body recs-box">
                                        <div class="row">
                                            
                                            <div class="col-xs-6 col-sm-6 col-lg-6">
                                                <div class="row mdl-15483">
                                                    <div class="col-sm-9">
                                                        <div>...إذن سيعجبك هذا</div>
                                                        <div class="rec-title"><b><a class="text-primary" href="post.php?id=<?php echo $so['id'];  ?>"><?php echo $so['title'];  ?></a></b></div>
                                                        <?php addT($reco['idT']) ?>
                                                    </div>
                                                    <div class="col-sm-3"> <img src="process/<?php echo $so['image'];  ?>" class="img-responsive"> </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 col-lg-6">
                                                <div class="row mdl-1074">
                                                    <div class=" col-sm-9">
                                                        <div>ان اعجبك هذا العمل</div>
                                                        <div class="rec-title"><b><a class="text-primary" href="post.php?id=<?php echo $reco['idRT'] ?>"><?php echo $il['title'];  ?></a></b></div>
                                                       <?php addT($reco['idRT']) ?>
                                                    </div><div class="col-sm-3"> <img src="process/<?php echo $il['image'];  ?>" class="img-responsive"> </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="recs-body m-t">
                                                    <div><?php echo $reco['review'];  ?></div>
                                                    <div class="recs-by">
                                                        <span class="jbtn-like <?php if($dtp['myL']=='true'){ ?>active<?php }else{  } ?>" data-id="43885" data-type="rec" id="likedivrc<?php echo $reco['id']; ?>" onclick="opertion('rc|like','<?php echo $reco['id']; ?>')"><span id="likenumrc<?php echo $reco['id']; ?>"  class="like-cnt"><?php echo $dtp['postL']; ?></span></span><div class="mdl-dropdown">
                                                        
                                                        <?php if($login && $_SESSION['id']==$reco['idU']){ ?>
                                                            <a onclick="deletereco('<?php echo $reco['id']; ?>')" class="nav-link btn-menu" rel="nofollow" data-id="43885" data-type="rec"><span><i class="far fa-times"></i></span>
                                                            </a>
                                                        <?php }else{ ?>
                                                            
                                                            <a onclick="opertion('rc|report','<?php echo $reco['id']; ?>')" class="nav-link btn-menu" rel="nofollow" data-id="43885" data-type="rec"><span><i id="dls<?php echo $reco['id'] ?>" <?php if($dtp['myRe']=='true'){ ?>style="color:red"<?php } ?> class="far fa-flag"></i></span>
                                                            </a>
                                                            
                                                        <?php } ?>
                                                        </div>  <span>إقتراح من  <a class="text-primary" href="profile.php?id=<?php echo $reco['idU'] ?>"><?php echo userinfo($reco['idU'])['username']; ?></a></span> <span class="text-muted date">- <script>
                                                            moment.locale("ar_AL");
                                                            document.write(moment('<?php echo $reco['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                        </script></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                
                                <?php } ?>
                                
                                <?php } ?>
                            </div>
                        </div>
                        
                        <?php if($rev && ($rid)){ ?>
                        
                        
                            <?php 
                                if($rid){
                                    $what=$review;
                                    $tp='rv';
                                }
                            ?>
                            <div id="cmtsapp" pid="232" ptype="actor" title="" class="box comments-box post-comments" style="min-height: 100px;">
                            <div class="box-header b-b">
                                <h3>التعليقات <span></span></h3>
                            </div>

                            <?php if (isset($_SESSION['id'])){ ?>
                            <div class="box-body thread-post-form b-b">
                                <div class="post-form-body">
                                    <div class="avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="user-avatar"></div>
                                    <div class="post-form-textarea">
                                        <div class="form-group">
                                            <div class="el-textarea"><textarea id="addco" autocomplete="off" placeholder="اترك تعليقا..." class="el-textarea__inner" style="min-height: 54px; height: 54px;"></textarea>
                                                <!---->
                                            </div>

                                        </div>

                                        <div class="text-left post-form-footer">
                                            <label class="el-checkbox">
                                                <input type="checkbox" id="spoi" name="" data-toggle="toggle">

                                                <script>
                                                    $('#spoi').bootstrapToggle({
                                                        off: 'لا يوجد حرق',
                                                        on: 'حرق',
                                                        onstyle: 'danger',
                                                        size: 'mini'
                                                    });

                                                </script>

                                            </label>
                                            <button id="sendc" onclick="opertion('<?php echo $tp."|" ?>comment','<?php echo $what['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini">
                                                <!---->
                                                <!----><span>نشر</span></button>

                                            <button style="display:none" id="cancel_e" onclick="cancel_e('<?php echo $tp."|" ?>comment','<?php echo $what['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right">
                                                <!---->
                                                <!----><span>إلغاء</span></button>
                                            <!---->
                                        </div>

                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <?php $myid=$_SESSION['id']; }else{ ?>
                            <div class="box-body b-b clear light">
                                <div>يجب ان تقوم <a href="signin.php" class="text-primary quick-login">تسجيل الدخول </a> او <a href="signup.php" class="text-primary">التسجيل كمستعمل جديد </a> للقيام بنشر تعليق.</div>
                            </div>
                            <?php } ?> 
                            <div class="box-body thread-post-form">
                                <ul id="comment-top" class="post-list">
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
                                    if($co){
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
                                    
                                    WHERE comments.idP=? AND comments.postT='rv' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
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
                                    
                                    WHERE comments.idP=? AND comments.postT='rv' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 0,6
                                    ");
                                    }
                                    $stmtn->bind_param("s", $what['id']);
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
                                                            $stmtn = $conn->prepare("SELECT idP,idR FROM reports WHERE idP=? AND idR=? AND idR='cm' ");
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

                                                        <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $what['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                        <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                    </div>

                                                    <?php }else{ ?>
                                                    <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                    <?php }} ?>
                                                </li>
                                                <?php } ?>

                                                <li><a onclick="addrep('<?php echo $comminfo['id'] ?>')" class="reply">رد</a></li>
                                            </ul>
                                            <div class="avatar"><span class="user in-link"><img style="height:100%" src="process/<?php echo $comminfo['picture']; ?>" class="user-avatar"></span></div>
                                            <div class="post-body">
                                                <div class="post-header p-b-xs"><a href="profile.php?id=<?php echo $comminfo['code']; ?>" target="_blank" class="user-display text-primary in-link"><b><?php echo $comminfo['username']; ?></b></a> <span class="mdl-utag"><span class="mdl-btag">
                                                            <!---->
                                                            <!----></span>
                                                        <!---->
                                                        <!----></span> <span class="date">
                                                        <script>
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



                                                <ul class="post-tooltip post-menu-footer hidden-sm-up"> <!-- Comments  -->
                                                    
                                                    
                                                    <li class="dropdown">
                                                        <?php if($comminfo['idR']=='true'){ ?>
                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                    <?php }else{ ?>
                                                    <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                    <?php }   ?>
                                                    <?php if(isset($_SESSION['id'])){ ?>
                                                    <?php if($comminfo['code']==$myid){ ?>

                                                    <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                        <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $what['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                        <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                    </div>

                                                    <?php }else{ ?>
                                                    <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                    <?php }} ?>
                                                    </li>
                                                    
                                                    
                                                    <li><span id="likedivminicm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b>  <i class="like-heart"></i></span></li>
                                                    
                                                    
                                                    <li><a onclick="addrep('<?php echo $comminfo['id'] ?>')" class="reply">رد</a></li>
                                                    
                                                    
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
                                                            
                                                            
                                                            <li><span id="likedivminirp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')"  class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumminirp<?php echo $repinfo['id']; ?>" >  <?php echo detailpost($repinfo['id'],'rp')['postL']; ?> </b><i class="like-heart"></i></span></li>
                                                                
                                                            
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
                            </div>

                            <?php if ($comm->num_rows<6 || $co){}else{ ?>
                            <div class="box-footer"><button id="more_cB" onclick="opertion('<?php echo $tp."|" ?>more_c','<?php echo $what['id']; ?>')" type="button" class="el-button btn btn-block btn-default el-button--default"><span><strong id="more_cS">المزيد من التعليقات</strong></span></button></div>
                            <?php } ?>


                            <div class="el-loading-mask" style="display: none;">
                                <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                        <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                    </svg>
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php if(!(isset($_GET['option'])) || !( $_GET['option']=='lists' || $_GET['option']=='recom' || $_GET['option']=='reviews' || $_GET['option']=='feeds' )){ ?>
                        <div class="row stats-section">
                            <div class="col-sm-6">
                                <div class="box statsBlock titleStats left">
                                    <div class="box-header b-b">
                                        <h3>إحصائيات</h3>
                                    </div>
                                    <?php             
        
                                    $stmtu = $conn->prepare("SELECT 
                                                        
                                                        
                                                        rate.id as ratei,
                                                        rate.idT,
                                                        rate.idU,
                                                        rate.status,
                                                  
                                                        rate.epi_w,
                                                        
                                                        title.id,
                                                        title.title,
                                                        title.content_type,
                                                        title.duration,
                                                  
                                                        title.episodes
                                                        
                                                        FROM rate JOIN title on rate.idT=title.id
                                                        
                                                        WHERE rate.idU=?  AND title.status='1'
                                                        
                                                        ");
                                                      $stmtu->bind_param("s", $user['code']);
                                                      $stmtu->execute();
                                                      $resultu=$stmtu->get_result();
//{"id":17,"title":"sdfsdf","content_type":"tvshow","duration":"34","sumE":34,"episodes":"34","idT":"64","idU":"6KbjFdagD4H7fi2","status":"curw","sumW":5,"epi_w":"5"}                                           
                                                    
                                                      $movie_t=0;
                                                      $movie_n=0;
                                                      
                                                      $show_t=0;
                                                      $show_e=0;
                                                      $show_n=0;
            
         
                                                      while($rt=$resultu->fetch_assoc()){
                                                     
                                                          if ($rt['epi_w']=='' || $rt['epi_w']=='0' || !is_numeric($rt['epi_w'])){$rt['epi_w']=0;}
                                                          
                                                          if ($rt['episodes']=='' || $rt['episodes']=='0' || !is_numeric($rt['episodes'])){$rt['episodes']=0;}
                                                          
                                                          if ($rt['duration']=='' || $rt['duration']=='0' || !is_numeric($rt['duration'])){$rt['duration']=0;}
                                                          
                                                          
                                                          if ($rt['content_type']=='movie'){
                                                              if ($rt['status']=='curw' || $rt['status']=='notfiniyet' || $rt['status']=='canceledw'){
                                                                  
                                                                  $movie_n=$movie_n+1;
                                                                  $movie_t=$movie_t+$rt['duration']; 
                                                                  
                                                              }else if($rt['status']=='finish'){
                                                                  
                                                                  $movie_n=$movie_n+1;
                                                                  $movie_t=$movie_t+$rt['duration'];
                                                                  
                                                              }
                                                          }
                                                          
                                                          if ($rt['content_type']=='tvshow' || $rt['content_type']=='serie'){
                                                              if ($rt['status']=='curw' || $rt['status']=='notfiniyet' || $rt['status']=='canceledw'){
                                                                  
                                                                  $show_n=$show_n+1;
                                                                  $show_t=$show_t+($rt['epi_w']*$rt['duration']); 
                                                                  $show_e=$show_e+$rt['epi_w'];
                                                                  
                                                              }else if($rt['status']=='finish'){
                                                                  
                                                                  $show_n=$show_n+1;
                                                                  $show_t=$show_t+($rt['episodes']*$rt['duration']);
                                                                  $show_e=$show_e+$rt['episodes'];
                                                                  
                                                              }else{
                                                                  
                                                              }
                                                          }
                                                          
                                                          //here we get the num of episodes and the duration
                                                      }
        

                                                 $minutesM=$movie_t;
                                                $d_M = floor ($minutesM / 1440);
                                                $h_M = floor (($minutesM - $d_M * 1440) / 60);
                                                $m_M = $minutesM - ($d_M * 1440) - ($h_M * 60);
        
                                                $minutesS=$show_t;
                                                $d_S = floor ($minutesS / 1440);
                                                $h_S = floor (($minutesS - $d_S * 1440) / 60);
                                                $m_S = $minutesS - ($d_S * 1440) - ($h_S * 60);
                                    ?>








                                    <div class="b-b light text-center">
                                        <div class="clear">
                                            <div class="col-sm-6xb-r" style="padding: 15px 0;">
                                                <div>
                                                    <h6 id="shd" style="font-size: 1.1rem;font-weight: normal;margin: 0 0 2px;">


                                                        <b> <?php echo $d_S ?> </b>يوم <b> <?php echo $h_S ?> </b> ساعة <b> <?php echo $m_S ?> </b> دقيقة

                                                    </h6>
                                                </div>
                                                <div class="text-xs"><b>متواصلة </b></div>
                                                <div class="text-muted"><?php echo $show_e; ?> حلقة , <?php echo $show_n; ?> برنامج</div>
                                            </div>
                                            <div class="col-sm-6x b-t" style="padding: 15px 0;">
                                                <div>
                                                    <h6 id="mvd" style="font-size: 1.1rem;font-weight: normal;margin: 0 0 2px;">

                                                        <b> <?php echo $d_M ?> </b>يوم <b> <?php echo $h_M ?> </b> ساعة <b> <?php echo $m_M ?></b> دقيقة

                                                    </h6>
                                                </div>
                                                <div class="text-xs"><b>متواصلة</b></div>
                                                <div class="text-muted"> <?php echo $movie_n; ?> فيلم</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="chart-legend">
                                        <ul class="radar-legend">
                                            <li> <span style="background-color:rgba(108, 199, 136, 0.2);border-color:#6cc788;"></span> برامج </li>
                                            <li> <span style="background-color:rgba(2, 117, 216, 0.2);border-color:#0275D8;"></span> أفلام </li>
                                        </ul>
                                    </div>
                                    <?php 
                                    $stmtu = $conn->prepare("SELECT * FROM rate WHERE idU=?");
                                                      $stmtu->bind_param("s", $user['code']);
                                                      $stmtu->execute();
                                                      $resultu=$stmtu->get_result();
        
                                                      $notint_M=0;
                                                      $curw_M=0;
                                                      $finish_M=0;
                                                      $planning_M=0;
                                                      $notfiniyet_M=0;
                                                      $canceledw_M=0;
        
                                                      $notint_S=0;
                                                      $curw_S=0;
                                                      $finish_S=0;
                                                      $planning_S=0;
                                                      $notfiniyet_S=0;
                                                      $canceledw_S=0;
        
                                                      while($works=$resultu->fetch_assoc()){
                                                          #movies
                                                          if ($works['status']=='nitintr' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $notint_M=$notint_M+1;
                                                          }
                                                          if ($works['status']=='curw' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $curw_M=$curw_M+1;
                                                          }
                                                          if ($works['status']=='finish' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $finish_M=$finish_M+1;
                                                          }
                                                          if ($works['status']=='planning' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $planning_M=$planning_M+1;
                                                          }
                                                          if ($works['status']=='notfiniyet' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $notfiniyet_M=$notfiniyet_M+1;
                                                          }
                                                          if ($works['status']=='canceledw' && titleinfo($works['idT'])['content_type']=='movie'){
                                                                $canceledw_M=$canceledw_M+1;
                                                          }
                                                          
                                                          #shows
                                                          if ($works['status']=='nitintr'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $notint_S=$notint_S+1;
                                                          }
                                                          if ($works['status']=='curw'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $curw_S=$curw_S+1;
                                                          }
                                                          if ($works['status']=='finish'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $finish_S=$finish_S+1;
                                                          }
                                                          if ($works['status']=='planning'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $planning_S=$planning_S+1;
                                                          }
                                                          if ($works['status']=='notfiniyet'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $notfiniyet_S=$notfiniyet_S+1;
                                                          }
                                                          if ($works['status']=='canceledw'  && (titleinfo($works['idT'])['content_type']=='tvshow' || titleinfo($works['idT'])['content_type']=='serie')){
                                                            $canceledw_S=$canceledw_S+1;
                                                          }
                                                          
                                                      }
                                    

                                    ?>

                                    <canvas class="m-t p-a-xs" id="radar-drama" width="332" style="width: 332px; height: 279px;" height="279"></canvas>


                                    <canvas class="p-r m-t-0" id="drama-chart-bar" width="332" style="width: 332px; height: 254px;" height="254"></canvas>
                                    <script>
                                        var ctx = document.getElementById('radar-drama');
                                        var myChart = new Chart(ctx, {
                                            type: 'radar',
                                            data: {
                                                labels: [


                                                    'غير مهتم', 'ألغيت مشاهدته', 'لم اكمله بعد', 'اخطط لمشاهدته', 'أكملته', 'أشاهده حاليا', 'أشاهده حاليا'

                                                ],
                                                datasets: [{
                                                        data: [<?php echo $notint_S; ?>, <?php echo $canceledw_S; ?>, <?php echo $notfiniyet_S; ?>, <?php echo $planning_S; ?>, <?php echo $finish_S; ?>, <?php echo $curw_S; ?>],

                                                        borderColor: [
                                                            '#6cc788',
                                                            '#6cc788',
                                                            '#6cc788',
                                                            '#6cc788',
                                                            '#6cc788',
                                                            '#6cc788'
                                                        ],
                                                        borderWidth: 3,


                                                    },
                                                    {
                                                        data: [<?php echo $notint_M; ?>, <?php echo $canceledw_M; ?>, <?php echo $notfiniyet_M; ?>, <?php echo $planning_M; ?>, <?php echo $finish_M; ?>, <?php echo $curw_M; ?>],

                                                        borderColor: [
                                                            '#0275d8',
                                                            '#0275d8',
                                                            '#0275d8',
                                                            '#0275d8',
                                                            '#0275d8',
                                                            '#0275d8'
                                                        ],
                                                        borderWidth: 2,

                                                    }
                                                ]
                                            },
                                            options: {

                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        display: false
                                                    }]
                                                },
                                            }
                                        });


                                        var ctx = document.getElementById("drama-chart-bar").getContext("2d");

                                        var data = {
                                            labels: [


                                                'غير مهتم', 'ألغيت مشاهدته', 'لم اكمله بعد', 'اخطط لمشاهدته', 'أكملته', 'أشاهده حاليا', 'أشاهده حاليا'

                                            ],
                                            datasets: [{
                                                label: "أفلام",
                                                borderWidth: 2,
                                                borderColor: "#0275d8",
                                                data: [<?php echo $notint_M; ?>, <?php echo $canceledw_M; ?>, <?php echo $notfiniyet_M; ?>, <?php echo $planning_M; ?>, <?php echo $finish_M; ?>, <?php echo $curw_M; ?>],
                                            }, {
                                                label: "برامج",
                                                borderWidth: 2,
                                                borderColor: "#6cc788",
                                                data: [<?php echo $notint_S; ?>, <?php echo $canceledw_S; ?>, <?php echo $notfiniyet_S; ?>, <?php echo $planning_S; ?>, <?php echo $finish_S; ?>, <?php echo $curw_S; ?>],
                                            }]
                                        };

                                        var myBarChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: data,
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                barValueSpacing: 20,
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            min: 0,
                                                        }
                                                    }]
                                                }
                                            }
                                        });

                                    </script>

                                    <div id="chart-data-drama" data-chart="[9,58,33,31,0,0]"></div>
                                    <div id="chart-data-movie" data-chart="[0,100,106,0,0,0]"></div>
                                    <div id="chart-bar-drama" data-chart="[108,660,371,355,0,0]"></div>
                                    <div id="chart-bar-movie" data-chart="[0,82,87,0,0,0]"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box statsBlock listUpdatesBlock">
                                    <div class="box-header b-b">
                                        <h3>قائمة التحديثات</h3>
                                    </div>
                                    <ul class="list">

                                        <?php
                                                      $stmtu->close();
                                                       $stmtu = $conn->prepare("SELECT * FROM rate WHERE idU=?");
                                                      $stmtu->bind_param("s", $user['code']);
                                                      $stmtu->execute();
                                                      $resultu=$stmtu->get_result();
                                                        $notint=0;
                                                      while($work=$resultu->fetch_assoc()){
                                                          if ($work['status']=='nitintr'){
                                                            $notint=$notint+1;
                                                          }
                                                          
                                                          $titleI;
                                                          $titleI=titleinfo($work['idT']);
                                                ?>
                                        <li id="mdl-20452" class="list-item">
                                            <div class="list-left"><img src="process/<?php echo $titleI['image']; ?>" width="40" style="height:63px;"></div>
                                            <div class="list-body">
                                                <div class="text-primary _600"><a class="title" href="post.php?id=<?php echo $titleI['id']; ?>" title="<?php echo $titleI['title']; ?>"><?php echo $titleI['title']; ?></a>
                                                    <?php $login=isset($_SESSION['id']); ?>
                                                    <?php if ($login){ ?>
                                                    <button id='addTb<?php echo $titleI['id'] ?>' onclick="addT('<?php echo $titleI['id'] ?>','<?php echo $titleI['image'] ?>','<?php echo $titleI['title'] ?>','<?php echo substr($titleI['f_date'],6,9); ?>','<?php echo $titleI['content_type'] ?>','<?php echo $titleI['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span><?php  if(detailpost($titleI['id'],'dr')['myR']=='true'){?><i class="fa fa-edit"></i><?php }else{ ?>إضافة<?php }    ?></span></button>
                                                    <?php } ?></div>
                                                <div class="activity">
                                                    <?php echo  datasignif($work['status'],'mv_ir_s'); ?>

                                                    <?php if ($work['status']=='finish' || $work['status']=='planning' || $work['status']=='nitintr' || $titleI['episodes']=='0' || $titleI['episodes']=='') { ?>

                                                    <?php }else{ ?>

                                                    <strong><?php echo $work['epi_w']; ?></strong>
                                                    /<?php echo $titleI['episodes']; ?>

                                                    <?php } ?>
                                                    <div class="text-muted">
                                                        <script type="application/javascript">
                                                            moment.locale("ar_AL");
                                                            document.write(moment('<?php echo $work['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>




                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="content-side hidden-sm-down">
                            <div class="box box-user-profile">
                                <div class="box-body text-center">
                                    <div class="m-b"><img class="img-responsive" src="process/<?php echo $user['picture'] ?>" alt="<?php echo $user['username'] ?>"></div>

                                    <?php if (isset($_SESSION['id']) && $user['code']==$_SESSION['id']){ ?>
                                    <a class="btn btn-default btn-block" href="mymenu.php?id=<?php echo $user['code']; ?>"> <i class="fa fa-list-ul"></i> قائمتي </a>
                                    <?php }else{  ?>
                                    <a class="btn btn-default btn-block" href="mymenu.php?id=<?php echo $user['code']; ?>"> <i class="fa fa-list-ul"></i> قائمة <?php echo $user['username'] ?> </a>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="box clear">
                                <div class="box-header primary">
                                    <h3>تفاصيل</h3>
                                </div>

                                <div class="box-body light-b">
                                    <ul class="list m-b-0">
                                        <li class="list-item p-a-0"><b class="inline">أخر تواجد:</b>
                                            <script type="application/javascript">
                                                moment.locale("ar_AL");
                                                document.write(moment('<?php echo $online['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                            </script>
                                        </li>
                                        <li class="list-item p-a-0"><b class="inline">الجنس:</b>
                                            <?php 
                                                    if($user['genre']==''){
                                                        echo "غير محدد";
                                                    }else{
                                                        
                                                        if ($user['genre']=='1'){
                                                            echo 'ذكر';
                                                        }else{
                                                            echo 'أنثى';
                                                        }
                                                    }
                                                    
                                                    
                                                    ?>
                                        </li>
                                        <li class="list-item p-a-0"><b class="inline">الدولة:</b> <?php echo $user['location']; ?></li>
                                        <li class="list-item p-a-0"><b class="inline">إجمالي التعديلات:</b> 4,046 <span class="text-success m-lsm"><small class="text-mutedx" style="font-size: 8px;">LV</small>12</span></li>
                                        <?php if($user['birth']=='' || substr($user['birth'],0,1)=='0'){}else{ ?>
                                        <li class="list-item p-a-0"><b class="inline">تاريخ الازدياد:</b>
                                            <script>
                                                moment.locale("ar_AL");
                                                document.write(moment('<?php echo substr($user['birth'],2,20); ?>', "YYYY-MM-DD").format('LL'));

                                            </script>
                                        </li>
                                        <?php } ?>
                                        <li class="list-item p-a-0"><b class="inline">الدور:</b> <label class="role" style="border-color:#99AAB5;color:#99AAB5;background-color:rgba(153,170,181,0.1)">عضو</label>
                                        </li>
                                        <li class="list-item p-a-0"><b class="inline">تاريخ الانضمام:</b>
                                            <script type="application/javascript">
                                                moment.locale("ar_AL");
                                                document.write(moment('<?php echo $user['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                            </script>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box custom-list-preview clear">
                                <div class="box-header primary">
                                    <h3>أخر القوائم</h3>
                                </div>
                                <div class="box-tool">
                                </div>
                                <div class="box-body">

                                    <?php  getlastdes('pup_vote_per') ?>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h3>الاصدقاء</h3>
                                </div>
                                <div class="box-tool" style="right:83%"><a class="show-more" <?php if(isset($_SESSION['id']) && $_SESSION['id']==$userid){ echo 'href="friends.php"'; }else{ echo 'href="allfriends.php?id='.$userid.'"'; } ?> >شاهد الكل</a></div>
                                <div class="box-divider m-a-0"></div>
                                <div class="box-body text-center">
                                    <?php
                                            $stmto = $conn->prepare("SELECT * FROM friend WHERE (rfrom = ? OR rto = ?) AND status='1'");
                                            $stmto->bind_param("ss", $userid , $userid);
                                            $stmto->execute();
                                            $resulto=$stmto->get_result(); ?>

                                    <?php
                                            while($friends=$resulto->fetch_assoc()){
                                            ?>
                                    <?php if($friends['rfrom'] == $userid){ ?>

                                    <a rel="tooltip" class="w-38 avatar" title="<?php echo userinfo($friends['rto'])['username']; ?>" href="profile.php?id=<?php echo userinfo($friends['rto'])['code']; ?>"> <img class="img-responsive" src="process/<?php echo userinfo($friends['rto'])['picture']; ?>"> </a>

                                    <?php }else{ ?>

                                    <a rel="tooltip" class="w-38 avatar" title="<?php echo userinfo($friends['rto'])['username']; ?>" href="profile.php?id=<?php echo userinfo($friends['rto'])['code']; ?>"> <img class="img-responsive" src="process/<?php echo userinfo($friends['rfrom'])['picture']; ?>"> </a>

                                    <?php } ?>

                                    <?php } ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
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
                                <script>
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
    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
<?php }}else{
    
    if (isset($_SESSION['id'])){
        $me=$_SESSION['id'];
        header("location:profile.php?id=$me");
    }else{
    header('location:index.php');
}} ?>
