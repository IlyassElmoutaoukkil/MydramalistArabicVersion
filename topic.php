<!DOCTYPE html>
<?php
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id']) && is_numeric($_GET['id'])){
    
$topicid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM topics WHERE id=?");
    $stmtA->bind_param("s", $topicid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:forum.php');}else{
        $topicinfo=$resultA->fetch_assoc();
    
?>
<html dir="rtl" lang="ar-AR">

<head>
    <title><?php echo $topicinfo['title']; ?></title>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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
    <?php include("menu.php");addvisite('topic'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2016">
                <div class="spnsr-top-2016 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CMPhyuvH7OgCFVAQGwodaLcIIw">

                        <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="discussions_trending">
                            <div class="box">
                                <div class="box-header">
                                    <h2>أخر المحادثات</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <?php  getlastdes('rec_desc'); ?>
                                </ul>
                            </div>
                            <div class="spnsr_right_2016">
                                <div class="spnsr" id="mdl-gpt-fbox1-0" style="height:250px; width:300px;" data-google-query-id="CN2FzevH7OgCFVAQGwodaLcIIw">

                                    
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h2>محادثات نشيطة</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                   
                                    <?php  getlastdes('act_desc'); ?>
                                
                                    
                                    
                                    
                                </ul>
                            </div>
                            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 250px;">
                                <div class="sticky" style="width: 334px;">
                                    <div class="spnsr_right_2016">
                                        <div class="spnsr" id="mdl-gpt-fbox3-0" style="width:300px;" data-google-query-id="CN6FzevH7OgCFVAQGwodaLcIIw">

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-8 col-md-8">
                        
                        <div class="discussion-header">
                            <div class="options-menu">
                                <div class="mdl-dropdown">
                                    <?php if(isset($_SESSION['id']) && ($_SESSION['id']==$topicinfo['idU'] || $_SESSION['type']=='1')){ ?>
                                    <a onclick="opertion(`deletetp`,`<?php echo $topicinfo['id'] ?>`)" class="nav-link btn-menu" data-id="45327" data-type="topic"><span><i class="fa fa-times"></i></span></a>
                                    <?php }else{ ?>
                                    <a <?php if(detailpost($topicinfo['id'],'tp')['myRe']=='true'){ ?> style="color:red"<?php }else{  } ?> onclick="opertion(`tp|report`,`<?php echo $topicinfo['id'] ?>`)"  class="nav-link btn-menu" id="dls<?php echo $topicinfo['id'] ?>" data-type="topic"><span><i class="far fa-flag"></i></span></a>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <h1><a><?php echo $topicinfo['title']; ?></a></h1>
                        </div>
                        <?php if(isset($_GET['comm'])){ $co=true; ?>
                                    <script>
                                        $(window).load(function(){
                                            $('html,body').animate({
                                                scrollTop: $('#desc_<?php echo $_GET['comm']; ?> .post-box').offset().top-200
                                            }, 'slow',function(){$('#desc_<?php echo $_GET['comm']; ?> .post-box').css('background-color','rgb(242, 242, 242)')});
                                            setTimeout(function(){$('#desc_<?php echo $_GET['comm']; ?> .post-box').css('background-color','#ffffff')},5500)
                                        });

                                    </script>
                                <?php }else{ $co=false; } ?>
                        
                        <div class="thead-container-top row">
                            <?php if(isset($_SESSION['id'])){ ?>
                            
                            <?php } ?>
                            
                              <?php
        
                        $stmtF = $conn->prepare(" SELECT id FROM comments WHERE idP=? AND postT='dc'");
                        $stmtF->bind_param("s", $topicid);
                        $stmtF->execute();
                        $resultF=$stmtF->get_result();
                        $total=$resultF->num_rows;

                        $pagemax=ceil($total/10);
        
                        
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

                        $offset=($page-1)*10;
                        
                        if($co){
                            $stmtA = $conn->prepare("SELECT * FROM comments  WHERE idP=? AND postT='dc'");
                            $stmtA->bind_param("s", $topicid);
                        }else{
                            $stmtA = $conn->prepare("SELECT * FROM comments  WHERE idP=? AND postT='dc' ORDER BY id DESC LIMIT 10 OFFSET ?");
                            $stmtA->bind_param("si", $topicid, $offset);   
                        }
                        
                        $stmtA->execute();
                        $resultA=$stmtA->get_result();
        
                        ?>
                            
                            <?php if(!$co){ ?>
                            <div class="col-xs-9 col-sm-8 col-md-8 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        
                        
                        <div  id="discuss-45327" data-topic="45327" class="post-container">
                            <div class="post-listing">
                                <div id="post-994731" class="row post ">
                                    <div style="float:right" class="col-sm-1 hidden-xs-down">
                                        <a class="w-48 avatar" href="profile.php?id=<?php echo $topicinfo['idU']; ?>"><img style="border:1px blue dashed" src="process/<?php $usri;$usri=userinfo($topicinfo['idU']); echo $usri['picture'];  ?>"></a>
                                    </div>
                                    <div  class="col-sm-11">
                                        <div style="border:1px blue dashed" class="box post-box">
                                            <a name="p994731"></a>
                                            <div class="box-header">
                                                <div class="post__username">
                                                    <a class="text-primary" href="profile.php?id=<?php echo $topicinfo['idU']; ?>"><?php echo $usri['username']; ?></a>
                                                    <span class="mdl-btag">
                                                    </span>
                                                </div>
                                                <div class="box-tool"><a class="timeago permalink"><script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $topicinfo['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());
                                                                            </script></a></div>
                                            </div>
                                            <div class="box-body post__message html_content_block">
                                                <?php if(detailpost($topicinfo['id'],'tp')['postR']<100){ ?>
                                                <p><?php echo $topicinfo['text']; ?></p>
                                                <?php } ?>
                                            </div>
                                            <div class="box-footer text-right">
                                                <div class="post__actions dropdown">
                                                    
                                                    <a href="profile.php?id=<?php echo $topicinfo['idU']; ?>" title="حسابي"><i class="fa fa-user"></i></a>
                                                    <a href="mymenu.php?id=<?php echo $topicinfo['idU']; ?>" title="قائمتي"><i class="fa fa-book"></i></a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-break"></div>                                                            
                            </div>
                        </div>
                        
                        <?php while($comments=$resultA->fetch_assoc()){ $dtp=detailpost($comments['id'],'cm'); ?>
                        <div id="desc_<?php echo $comments['id'] ?>" data-topic="45327" class="post-container">
                            <div class="post-listing">
                                <div id="post-994731" class="row post ">
                                    <div style="float:right" class="col-sm-1 hidden-xs-down">
                                        <a class="w-48 avatar" href="profile.php?id=<?php echo $comments['idU']; ?>"><img src="process/<?php $usri;$usri=userinfo($comments['idU']); echo $usri['picture'];  ?>"></a>
                                    </div>
                                    <div class="col-sm-11">
                                        <div class="box post-box">
                                            <a name="p994731"></a>
                                            <div class="box-header">
                                                <div class="post__username">
                                                    <a class="text-primary" href="/profile/Baekw_"><?php echo $usri['username']; ?></a>
                                                    <span class="mdl-btag">
                                                    </span>
                                                </div>
                                                <div class="box-tool"><a class="timeago permalink"><script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $comments['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());
                                                                            </script></a></div>
                                            </div>
                                            <?php if($dtp['postrepo']>80) { ?>
                                            <div class="box-body post__message html_content_block">
                                                <p style="color:red">تم حذف التعليق بسبب التبليغ عنه بشدة.</p>
                                            </div>
                                            <?php }else{ ?>
                                            <div class="box-body post__message html_content_block">
                                                <p><?php echo $comments['comment']; ?></p>
                                            </div>
                                            <?php } ?>
                                            <div class="box-footer text-right">
                                                <div class="post__actions dropdown">
                                                    
                                                    <a href="profile.php?id=<?php echo $comments['idU']; ?>" title="ملفي"><i class="fa fa-user"></i></a>
                                                    <a href="mymenu.php?id=<?php echo $comments['idU']; ?>" title="قائمتي"><i class="fa fa-book"></i></a>
                                                    <?php if(isset($_SESSION['id'])){ ?>
                                                        <?php if($_SESSION['id'] == $comments['idU']){ ?>
                                                            <a style="    color: #666;" onclick="dec_delete(`<?php echo $comments['id']; ?>`)" title="حذف"><i class="fa fa-times"></i></a>
                                                        <?php }else{ ?>
                                                            
                                                            <?php
                                                           
                                                            if($dtp['myRe']=='true'){$color='red';}else{$color='#666';}
                                                            ?>
                                                            <a style="color: <?php echo $color; ?>;" id='dcm<?php echo $comments['id']; ?>' onclick="opertion(`cm|report`,`<?php echo $comments['id']; ?>`)" title="إبلاغ"><i class="fa fa-flag"></i></a>
                                                    
                                                    
                                                        <?php } ?>
                                                    <?php }else{ ?>
                                                    <?php } ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                           
                            </div>
                        </div>
                        <?php } ?>
                      
                        
                        <div class="thead-container-bottom row">
                            
                            <?php if(!$co){ ?>
                            <div class="col-xs-9 col-sm-8 col-md-8 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="topic.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="quick-reply-container active">
                            <a name="quick-reply"></a>
                            <div id="qr-container">
                                <div class="row">
                                    <?php if($login){ ?>
                                    <div class="col-md-1" style="float:right"  ><a name="quick-reply" class="w-48 avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="current-avatar"></a></div>
                                    <div class="col-md-11">
                                        <div class="box">
                                            <div class="disucssion-editor">
                                                <textarea  style="min-height:90px" id="answ_t" type="text" autocomplete="off" placeholder="الرد" class="el-input__inner"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group text-right"><button id="answ_b" onclick="add_answ('<?php echo $_GET['id'];  ?>')" type="button" class="el-button btn btn-submit-reply el-button--primary">
                                                <!---->
                                                <!----><span>رد</span></button></div>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="box box-body">
			المرجوا <a href="signin.php" class="text-primary quick-login">تسجيل الدخول</a> او <a href="signup.php" class="text-primary">تسجيل حساب جديد.</a></div>
                                    <?php  } ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <script type="text/javascript" src="/dist/en/js/forum.js?v=5.4.13a"></script>
            <div id="q1">&nbsp;</div>
            <div id="q2">&nbsp;</div>
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
    <script type="text/javascript" src="dist/en/js/descussion.js"></script>
    <script type="application/javascript">
        live();

    </script>

</body>

</html>
<?php }}else{
        header("location:actors.php");
    } ?>
