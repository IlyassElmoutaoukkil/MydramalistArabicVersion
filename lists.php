<?php
session_start();
include("process/conn.php");

?><!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>قائمتي - اللوائح</title>
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

<body> <?php include("menu.php"); addvisite('lists'); ?>
    
    <?php 
    if(isset($_SESSION['id'])){
        $login=true;
    }else{
        $login=false;
    }
    ?>
            <div id="content" class="slideout-panel slideout-panel-right">
                <div class="app-body">
                    <div class="spnsr-wrapper-2007">
                        <div class="spnsr-top-2007 is-desktop">
                            <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CPr-vbTszOcCFUg-Gwodf4ILCg">
                                <script>
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
                    <div class="container-fluid">

                        <div class="featured-list row no-gutter">
                            <?php
                            $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, COUNT(likes.id) as ls,likes.idP FROM list  JOIN likes ON list.id=likes.idP WHERE list.type!='private' AND likes.postT='ls' GROUP BY list.id ORDER BY ls DESC LIMIT 1");
                                        
                                        $stmtA->execute();
                                        
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                            while($array2=$resultA->fetch_assoc()){ ?>
                                                <a href="list.php?id=<?php echo $array2['id']; ?>" class="overlay"></a>
                                             <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 3");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        
                                                        while ($items=$result2->fetch_assoc()){ 
                                                        ?>
                                                        <?php if($array2['content']=='persone'){$tinf; $tinf=personeinfo($items['idT']); ?>
                                                            <div class="col-lg-4 col-xs-4">
                                                                <img src="process/<?php echo $tinf['picture'];  ?>" class="img-responsive">
                                                            </div>
                                                        <?php }else{ $tinf; $tinf=titleinfo($items['idT']);?>
                                                              <div class="col-lg-4 col-xs-4">
                                                                <img src="process/<?php echo $tinf['image'];  ?>" class="img-responsive">
                                                            </div>  
                                                        <?php } ?>
                                                            
                                                        <?php } ?>

                                                <div class="list-info">
                                                    <div class="list-title"><?php echo $array2['title']; ?></div>
                                                    <div class="list-desc"><?php echo $array2['descr']; ?></div>
                                                </div>
                                            <?php }
                                        }
                            ?>
                            
                        </div>




                        <div class="row m-t">
                            <div class="col-lg-8 col-md-8">
                                <div class="box">
                                    <div class="box-header m-t-sm">
                                        <h2>ﻗﻮاﺋﻢ اﻟﺘﺼﻮﻳﺖ اﻟﺸﻌﺒﻴﺔ</h2>

                                        
                                    </div>

                                    <div class="box-body">
                                        <?php
                                        $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, SUM(listt.score) as ls,listt.idL FROM list JOIN listt ON list.id=listt.idL WHERE list.type='vote' GROUP BY listt.idL ORDER BY ls DESC LIMIT 4");
                                        
                                        $stmtA->execute();
                                        
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                          $x=0;  while($array2=$resultA->fetch_assoc()){ $x++;
                                                
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
                                                
                                            
                                            if( $array2['type']=='public' || $array2['type']=='vote'   ){
                                                
                                                ?>
                                        <?php if($x==2 || $x==4){ ?>
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
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                                    </div>
                                                
                                            <?php if($x==2 || $x==4){ ?>
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

                                    <div class="box-header m-t-sm">
                                        <h2>ﻗﻮاﺋﻢ ﻧﺸﻴﻄﺔ ﻣﻮﺧﺮا</h2>
                                        
                                    </div>

                                    <div class="box-body">
                                        <?php
                                        $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, COUNT(comments.id) as ls,comments.idP,comments.postT FROM list JOIN comments ON list.id=comments.idP WHERE list.type!='private' AND comments.postT='ls' GROUP BY comments.idP ORDER BY ls DESC LIMIT 4");
                                        
                                        $stmtA->execute();
                                        echo $conn->error;
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                          $x=0;  while($array2=$resultA->fetch_assoc()){ $x++;
                                                
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
                                                
                                            
                                            if( $array2['type']=='public' || $array2['type']=='vote'   ){
                                                
                                                ?>
                                        <?php if($x==2 || $x==4){ ?>
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
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                                    </div>
                                                
                                            <?php if($x==2 || $x==4){ ?>
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
                                    
                                    
                                    <?php if(isset($_SESSION['id'])){ ?>
                                    <div class="box-header m-t-sm">
                                        <h2>ﻗﻮاﺋﻢ ﻗﺎﻡ اﺻﺪﻗﺎﺋﻲ ﺑﺎﻟﺘﺼﻮﻳﺖ ﻋﻠﻴﻬﺎ</h2>
                                        
                                    </div>

                                    <div class="box-body">
                                        <?php
                                        $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, COUNT(votel.id) as ls,votel.idU, friend.rto, friend.rfrom FROM list JOIN votel ON list.id=votel.idL JOIN friend ON friend.rto=votel.idU WHERE list.type!='private' AND friend.rfrom=? AND friend.status='1'  UNION SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, COUNT(votel.id) as ls,votel.idU, friend.rto, friend.rfrom FROM list JOIN votel ON list.id=votel.idL JOIN friend ON friend.rfrom=votel.idU WHERE list.type!='private' AND friend.rto=? AND friend.status='1' GROUP BY list.id ORDER BY ls DESC LIMIT 4 ");
                                        $stmtA->bind_param("ss", $_SESSION['id'], $_SESSION['id']);
                                        $stmtA->execute();
                                        echo $conn->error;
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                          $x=0;  while($array2=$resultA->fetch_assoc()){ $x++;
                                                
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
                                                
                                        if( ($array2['type']=='public' || $array2['type']=='vote') && !($array2['id']==null) && detailpost($array2['id'],'ls')['postrepo']<100 ){
                                                
                                                ?>
                                        <?php if($x==2 || $x==4){ ?>
                                            <div class="row">
                                        <?php } ?>
                                                <div class="col-lg-6 col-md-6 custom-list-preview large">
                                                    <div class="p-b-sm">
                                                    <a href="profile.php?id=<?php if($array2['rto']==$_SESSION['id']){echo $array2['rfrom'];$r=$array2['rfrom'];}else{echo $array2['rto'];$r=$array2['rto'];} ?>">
                                                        <img class="w-24 avatar m-r-xs" src="process/<?php $usr=userinfo($r);echo $usr['picture']; ?>">
                                                        <span class="text-muted">
                                                           <?php echo $usr['username']; ?> ﺻﻮﺕ ﻝ :
                                                        </span>
                                                    </a>
                                                    </div>
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
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                                    </div>
                                                
                                            <?php if($x==2 || $x==4){ ?>
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
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    <div class="box-header">
                                        <h2>اﻟﻘﻮاﺋﻢ اﻟﺸﺎﺋﻌﺔ </h2>
                                    </div>
                                    <div class="box-body">
                                        <?php
                                        $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, SUM(listt.score) as ls,listt.idL FROM list JOIN listt ON list.id=listt.idL WHERE list.type='vote' GROUP BY listt.idL ORDER BY ls DESC LIMIT 4");
                                        
                                        $stmtA->execute();
                                        
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                          $x=0;  while($array2=$resultA->fetch_assoc()){ $x++;
                                                
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
                                                
                                            
                                            if( $array2['type']=='public' || $array2['type']=='vote'   ){
                                                
                                                ?>
                                        
                                            <div class="row m-b custom-list-preview large">
                                        
                                                <div class="col-sm-7 col-lg-6 col-md-6">
                                                    <div class="content titles m-b">
                                                        <ul class="collection">
                                                        <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 5");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        
                                                        while ($items=$result2->fetch_assoc()){ $tinf; $tinf=titleinfo($items['idT']);
                                                        ?>
                                                        
                                                        <?php if($array2['content']=='title'){ $typea="عنوان"; ?><?php $tinf; $tinf=titleinfo($items['idT']); ?>
                                                        <li class="list-item people">
                                                            <a href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $tinf['title']; ?>">
                                                                <img style="height:100%;width:100%" src="process/<?php echo $tinf['image']; ?>" alt="<?php echo $tinf['title']; ?>">
                                                            </a>
                                                            
                                                        </li>
                                                        <?php }else{ $typea='شخص' ?><?php $tinf; $tinf=personeinfo($items['idT']); ?>
                                                        <li class="list-item people">
                                                            <a  href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $tinf['fname']; ?>">
                                                                <img style="height:100%;width:100%" src="process/<?php echo $tinf['picture']; ?>" alt="<?php echo $tinf['fname'].' '.$tinf['lname']; ?>">
                                                            </a>
                                                           
                                                        </li>
                                                        
                                                        <?php  } ?>
                                                        <?php
                                                        }
                                                
                                                        
                                                        ?>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-lg-6 col-md-6">

                                                    <a class="text-primary title-primary" href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['title']; ?>"><?php echo $array2['title']; ?></a>
                                                    <div class="list-bars text-black-lt">
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                                    </div>
                                                
                                            
                                            
                                           
                                <?php

                                            }else{
                                                $list=false;
                                            }
                                            
                                        }
                                        }
          
          ?>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="content-side">
                                    <?php if($login){ ?>
                                    <div class="box">
                                        <div class="box-header m-t-sm">
                                            <h2>ﻗﺎﺋﻤﺘﻲ</h2>
                                        </div>
                                        <div class="box-body">
                                            <p class="text-muted">ﺇﻋﺪاﺩ اﻟﻘﻮاﺋﻢ ﻫﻲ ﺃﻓﻀﻞ اﻟﻄﺮﻕ ﻟﺘﻨﻈﻴﻢ ﻋﺮﻭﺿﻚ ﻭﻣﻤﺜﻠﻴﻚ اﻟﻤﻔﻀﻠﻴﻦ..</p>
                                            <a href="addlist.php" class="btn btn-create-new-list btn-block btn-default text-upper">ﻓﺎﺋﻤﺔ ﺟﺪﻳﺪﺓ</a>
                                            <div class="m-t p-t-sm">
                                            </div>
                                        </div>
                                        <?php 
                                         $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, SUM(listt.score) as ls,listt.idL FROM list LEFT JOIN listt ON list.id=listt.idL WHERE list.type!='private' GROUP BY listt.idL ORDER BY ls ");
                                        
                                        $stmtA->execute();
                                        
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                            while($array2=$resultA->fetch_assoc()){
                                                
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
                                                
                                            
                                            if( $array2['type']=='public' || $array2['type']=='vote'   ){
                                                
                                                ?>
                                
                                            <div class="box-body">
                                                <div class="custom-list-preview">
                                                    <div class="content people">
                                                        <a class="collection" href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['id'] ?>">
                                                        <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 5");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        if($array2['content']=='title'){ $typea="عنوان";}else{$typea="شخص";}
                                                        while ($items=$result2->fetch_assoc()){
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
                                                </div>
                                                <div class="title bottom">

                                                    <a href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['title']; ?>"><?php echo $array2['title']; ?></a>
                                                    <div class="list-bars text-black-lt">
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                            </div>
                                <?php

                                            }else{
                                                $list=false;
                                            }
                                            
                                        }
                                        }
          
          
                                            ?>
                                    </div>
                                    

                                    <div class="box">
                                        <div class="box-header m-t-sm">
                                            <h2>ﻗﻮاﺋم اﺻﺪﻗﺎﺋﻲ</h2>
                                            <div class="box-tool">
                                            </div>
                                        </div>
                                        <?php 
                                         $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn,friend.rto,friend.rfrom FROM list JOIN friend ON list.idU=friend.rto WHERE list.type!='private' AND friend.rto=? GROUP BY list.id

                                        UNION 
                                        SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn,friend.rto,friend.rto FROM list JOIN friend ON list.idU=friend.rto WHERE list.type!='private' AND friend.rfrom=? GROUP BY list.id

                                        LIMIT 4");
                                         $stmtA->bind_param("ss",$_SESSION['id'],$_SESSION['id']);
                                         $stmtA->execute();
                                        
                                         $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                            while($array2=$resultA->fetch_assoc()){
                                                
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
                                                
                                            
                                            if( ($array2['type']=='public' || $array2['type']=='vote')  && !($array2['idU']=$_SESSION['id']) ){
                                                
                                                ?>
                                
                                            <div class="box-body">
                                                <div class="custom-list-preview">
                                                    <div class="content people">
                                                        <a class="collection" href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['id'] ?>">
                                                        <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 5");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        
                                                        while ($items=$result2->fetch_assoc()){
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
                                                </div>
                                                <div class="title bottom">

                                                    <a href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['title']; ?>"><?php echo $array2['title']; ?></a>
                                                    <div class="list-bars text-black-lt">
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                            </div>
                                <?php

                                            }else{
                                                $list=false;
                                            }
                                            
                                        }
                                        }
          
          
                                            ?>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="btn-bug-report hide">
                        <a href="/discussions/support"><i></i></a>
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
    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>

</body>

</html>
