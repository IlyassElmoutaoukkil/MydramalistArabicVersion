<?php
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id'])){
    
$userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM persones WHERE id=?");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:actors.php');}else{
        $personeinfos=$resultA->fetch_assoc();
    
?>
<!DOCTYPE html>
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
    <?php include("menu.php");addvisite('persone'); ?>



    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4"><?php 
                
     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    
                ?>
                        <div class="content-side hidden-sm-down">
                            <div class="box hidden-sm-down">
                                <div class="box-header p-b-0 text-center">
                                    <h1 class="film-title m-b-0"><?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?></h1>
                                </div>
                                <div class="box-body"> <img class="img-responsive" src="process/<?php echo $personeinfos['picture']; ?>" alt="<?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?>">
                                    <div class="share-container p-t p-b text-center">
                                        <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-facebook-f">
                                            </i><i class="fab fa-facebook-f indigo"></i>\
                                        </a>

                                        <a rel="nofollow" href="https://plus.google.com/share?url=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-google-plus-g"></i>
                                            <i class="fab fa-google-plus-g red"></i>
                                        </a>

                                        <a rel="nofollow" href="http://twitter.com/home?status=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter light-blue"></i>
                                        </a>

                                        <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light">
                                            <i class="fab fa-pinterest-p"></i>
                                            <i class="fab fa-pinterest-p red"></i>
                                        </a>

                                        <a class="jbtn-like btn btn-social btn-icon rounded light <?php if(detailpost($personeinfos['id'],'ac')['myL']=='true'){ ?>active<?php }else{ ?><?php } ?>" data-stats="people:232" data-id="232" data-type="people">
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
                                                        <?php 
        
                                                        $date1 = strtotime($personeinfos['dayb']); 
                                                        $date2 = strtotime($personeinfos['dayd']);
        
                                                        if(!$personeinfos['dayd']=='' && ($date2>$date1) && (floor(abs($date2-$date1) / (365*60*60*24)))>4){
                                                        $diff = abs($date2 - $date1); 
                                                        $years = floor($diff / (365*60*60*24));
                                                        ?>
                                                        
                                                            document.write('<?php echo $years; ?>');
                                                        
                                                        <?php }else{ ?>
                                                        
                                                            document.write(Math.floor(moment(new Date()).diff(moment("<?php echo $personeinfos['dayb']; ?>", "MM/DD/YYYY"), 'years', true)));
                                                        
                                                        <?php } ?>
                                                    </script>
                                        </li>
                                    </ul>
                                </div>     
                            </div>
                            
                            
                            <div class="box clear">
                                <div class="box-header primary">
                                    <h3>أشهر اللوائح</h3> <small>القوائم الاكثر شهرة بين الاعضاء</small>
                                    <div class="box-tool"><a href="addlist.php">انشئ قائمة</a></div>
                                </div>
                                <?php getlastdes('pup_vote_per'); ?>

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
                            <div class="article-trending box">
                                <div class="box-header">
                                    <h2>اجدد المقالات</h2>
                                </div>
                                <div class="box-body">
                                    <div class="box-body">
                                    <?php 
                                        $stmtA = $conn->prepare("SELECT * FROM article ORDER BY id DESC LIMIT 5");
                                        $stmtA->execute();
                                        $resultA=$stmtA->get_result();
                                    
                                        while($oth=$resultA->fetch_assoc()){
                                        $data=$oth['body'];
                                            
                                        $dom = new DOMDocument();
                                        @$dom->loadHTML($data);
                                            $images = $dom->getElementsByTagName('img');
                                            $im=[];
                                            $imr=[];
                                            $imex=false;
                                         for ($i = 0; $i < $images->length; $i ++) {

                                             $image = $images->item($i);
                                             $src = $image->getAttribute('src');

                                             if(filter_var($src, FILTER_VALIDATE_URL)) {
                                                 if(getimagesize($src)){
                                                    $size=getimagesize($src);
                                                    $surface=$size[0]*$size[1];
                                                    array_push($im,$surface);
                                                    array_push($imr,$src);
                                                    $image_src= $src;
                                                    $imex=true;
                                                 }
                                             }
                                         }

                                        if ($imex){
                                            $index=array_search(max($im), $im);
                                            $bigone=$imr[$index];
                                        }else{
                                            $bigone='https://www.cicar.com/html/thumbnails/noimage.png';
                                        }
        
                                    
        
                                    ?>
                                    
                                    
                                        <article class="m-b-sm">
                                            <a href="oneart.php?id=<?php echo $oth['id'] ?>">
                                                <img style="max-height:210px; width:100%" src="<?php echo $bigone; ?>">
                                                <span class="box-title"><?php echo $oth['title'] ?></span>
                                            </a>
                                        </article>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h2>أخر المحادثات</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <?php getlastdes('rec_desc_im') ?>
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
                                <div class="box-tool hidden-xs-down" style="right:82%;">
                                    
                                    
                                    <a style="margin-left:10px;" href="peredit.php?id=<?php echo  $personeinfos['id']; ?>" class="text-sm text-primary">إقترح تعديلا</a>
                                    
                                    
                                    <span id="likedivac<?php echo $personeinfos['id']; ?>" onclick="opertion('ac|like','<?php echo $personeinfos['id']; ?>')" class="jbtn-like m-r <?php if(detailpost($personeinfos['id'],'ac')['myL']=='true'){ ?>active<?php }else{ ?><?php } ?>" data-id="232" data-type="people">
                                        <span class="like-cntb" id="likenumac<?php echo $personeinfos['id']; ?>"><?php echo detailpost($personeinfos['id'],'ac')['postL']; ?>
                                        </span>
                                    </span>


                                </div>
                                <ul class="nav nav-tabs">



                                    <li class="page-item nav-item active"><a class="nav-link" href="#">تفاصيل</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center cover hidden-md-up"> <img class="img-responsive inline" src="process/<?php echo $personeinfos['picture']; ?>" alt="<?php echo $personeinfos['fname'].' '.$personeinfos['lname']; ?>">
                                        <div class="p-t p-b text-center">
     

                                            <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?<?php echo $url; ?>" class="btn btn-icon btn-social rounded light"><i class="fab fa-facebook-f"></i><i class="fab fa-facebook-f indigo"></i></a>

                                            <a rel="nofollow" href="http://twitter.com/home?status=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a>

                                            <a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>media=http://www.ta9yem.com/process/<?php echo $personeinfos['pictue']; ?>" class="btn btn-icon btn-social rounded light">
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
                                                
                                                <?php $date1 = strtotime($personeinfos['dayb']);$date2 = strtotime($personeinfos['dayd']); 
                                                
                                                if($personeinfos['dayd']=='' || $date2<$date1 || (floor(abs($date2-$date1) / (365*60*60*24)))<4){}else{ ?>
                                                
                                                <li class="list-item p-a-0"><b class="inline">تاريخ الوفات:</b> <?php echo $personeinfos['dayd']; ?></li>
                                                
                                                <?php } ?>
                                                
                                                
                                                <li class="list-item p-a-0"><b class="inline">العمر:</b>

                                                    <script>
                                                        <?php 
        
                                                        $date1 = strtotime($personeinfos['dayb']); 
                                                        $date2 = strtotime($personeinfos['dayd']);
        
                                                        if(!$personeinfos['dayd']=='' && ($date2>$date1) && (floor(abs($date2-$date1) / (365*60*60*24)))>4){
                                                        $diff = abs($date2 - $date1); 
                                                        $years = floor($diff / (365*60*60*24));
                                                        ?>
                                                        
                                                            document.write('<?php echo $years; ?>');
                                                        
                                                        <?php }else{ ?>
                                                        
                                                            document.write(Math.floor(moment(new Date()).diff(moment("<?php echo $personeinfos['dayb']; ?>", "MM/DD/YYYY"), 'years', true)));
                                                        
                                                        <?php } ?>
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
    $stmtw = $conn->prepare("SELECT  work.chara, title.image, title.content_type, title.country, title.episodes, title.f_date, work.format, title.genre, title.id, work.idP, work.idT, title.p_date, title.status, title.title, title.tvshow_type, work.type FROM work JOIN title ON work.idT=title.id WHERE idP=? AND work.type!='related'");
    $stmtw->bind_param("s", $userid);
    $stmtw->execute();
    $resultw=$stmtw->get_result();
    $array=array();
        
    $serie=false;
    $movie=false;
    $tvsh=false;
        
    $w_scr=false;
    $w_dir=false;
    $w_ds=false;
        
    while($rowa=$resultw->fetch_assoc()){array_push($array,$rowa);};
    
?>
                                
                                <style>
                                    th {
                                        text-align: right
                                    }

                                </style>

                                <?php foreach($array as $one){
                                 if ($one['content_type']='serie'){
                                    $serie=true;
                                 }
        
                                 if ($one['content_type']='movie'){
                                    $movie=true;
                                 }
        
                                 if ($one['content_type']='tvshow'){
                                    $tvsh=true;
                                 }
        
                                 if ($one['format']='dir'){
                                    $w_scr=true;
                                 }
        
                                 if ($one['format']='scrwr'){
                                    $w_dir=true;
                                 }
        
                                 if ($one['format']='scrdir'){
                                    $w_ds=true;
                                 }
        
                                } ?>

                                <?php if(!$serie){}else{ ?>
                                <h5 id="drah" class="header">دراما</h5>
                                <table id="dra" class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">السنة</th>
                                            <th class="title">العنوان</th>
                                            <th class="episodes hidden-sm-down">#</th>
                                            <th class="role hidden-sm-down" width="148">الدور</th>
                                            <th class="text-center" width="120">التقييم</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $d=0; foreach($array as $drama){  ?>
                                                
                                        <?php $rate_inf;$rate_inf=detailpost($drama['id'],'dr'); ?>
                                        <?php  if ($drama['content_type']=='serie' && $drama['type']!='work' && $drama['type']!='related'){ $d++; ?>
                                        <tr class="mdl-35039">
                                            <td class="year hidden-sm-down"><?php echo substr($drama['f_date'],6,9); ?></td>
                                            <td class="title">
                                                <b><a class="text-primary" href="?post=<?php echo $drama['id'] ?>" title="<?php echo $drama['title']; ?>"><?php echo $drama['title'] ; ?></a></b>
                                                <?php if ($login){ ?>
                                                <button id='addTb<?php echo $drama['id'] ?>' onclick="addT('<?php echo $drama['id'] ?>','<?php echo $drama['image'] ?>','<?php echo $drama['title'] ?>','<?php echo substr($drama['f_date'],6,9); ?>','<?php echo $drama['content_type'] ?>','<?php echo $drama['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span>
                                                        <?php  if($rate_inf['myR']=='true'){?><i class="fa fa-check"></i><?php }else{ ?>إضافة<?php }    ?>
                                                    </span></button>
                                                <?php } ?>

                                                <div class="hidden-md-up text-muted">
                                                    <div><?php echo datasignif($drama['country'],'countryF'); ?>, <?php echo $drama['episodes'] ; ?> حلقة</div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <a href="" class="text-primary" title=""><?php echo $drama['chara']; ?></a>
                                                        </span>
                                                        
                                                        <span class="text-muted roleid">(<?php echo datasignif($drama['format'],'role'); ?>)</span>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down"><?php echo $drama['episodes'] ; ?></td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <a href="" class="text-primary" title=""><?php echo $drama['chara']; ?></a>
                                                </div>
                                                <div class="text-muted roleid"><?php echo datasignif($drama['format'],'role'); ?></div>
                                            </td>
                                            <td class="text-center" style="direction:ltr">
                                                <span class="read_only" data-rating="<?php echo $rate_inf['postRa']; ?>"></span>
                                                <div class="text-sm"><?php echo substr($rate_inf['postRa'],0,3); ?></div>    
                                            </td>
                                        </tr>
                                        <?php 
                                                }
                                            } ?>
                                        
                                        <?php if($d=='0'){ ?>
                                            <script>$("#dra ,#drah").remove();</script>
                                        <?php
    }
                                        }
                                            
                                        ?>

                                    </tbody>
                                </table>
                                <?php $dir=0; if(!$w_dir){}else{ ?>
                                <h5 id="dirh"class="header">إخراج</h5>
                                <table id="dir"class="table film-list">
                                    <thead>
                                        <tr>
                                            <th style="text-align:right" class="year hidden-sm-down" width="70">السنة</th>
                                            <th style="text-align:right" class="title">العنوان</th>
                                            <th style="text-align:right" class="role hidden-sm-down" width="148">النوع</th>
                                            <th style="text-align:right" class="text-center" width="120">التقييم</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($array as $drama){ ?>
                                        <?php $rate_inf;$rate_inf=detailpost($drama['id'],'dr'); ?>

                                        <?php  if ($drama['type']=='work' && $drama['format']=='dir'){ $dir++; ?>

                                        <tr class="mdl-7986">
                                            <td class="year hidden-sm-down"><?php echo substr($drama['f_date'],6,9); ?></td>
                                            <td class="title">
                                                <b><a class="text-primary" href="post.php?id=<?php echo $drama['id']; ?>"><?php echo $drama['title']; ?></a></b>

                                                <?php if ($login){ ?>
                                                <button id='addTb<?php echo $drama['id'] ?>' onclick="addT('<?php echo $drama['id'] ?>','<?php echo $drama['image'] ?>','<?php echo $drama['title'] ?>','<?php echo substr($drama['f_date'],6,9); ?>','<?php echo $drama['content_type'] ?>','<?php echo $drama['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span><?php  if($rate_inf['myR']=='true'){?><i class="fa fa-check"></i><?php }else{ ?>إضافة<?php }    ?></span></button>
                                                <?php } ?>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid"><?php echo datasignif($drama['content_type'],'type'); ?></div>
                                            </td>
                                            <td class="text-center" style="direction:ltr">
                                                <span class="read_only" data-rating="<?php echo $rate_inf['postRa']; ?>"></span>
                                                <div class="text-sm"><?php echo substr($rate_inf['postRa'],0,3); ?></div>
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                                <?php if($dir=='0'){ ?>
                                              <script>$("#dir ,#dirh").remove();</script>
                                <?php } } ?>

                                <?php $mo=0; if(!$movie){}else{ ?>
                                <h5 id="moh" class="header">أفلام</h5>
                                <table id="mo" class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">السنة</th>
                                            <th class="title">العنوان</th>
                                            <th class="role hidden-sm-down" width="140">الدور</th>
                                            <th class="text-center" width="120">التقييم</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach($array as $drama){ ?>
                                        <?php $rate_inf;$rate_inf=detailpost($drama['id'],'dr'); ?>

                                        <?php  if ($drama['content_type']=='movie' && $drama['type']!='work' && $drama['type']!='related'){ $mo++; ?>
                                        <tr class="mdl-2402">
                                            <td class="year hidden-sm-down"><?php echo substr($drama['f_date'],6,9); ?></td>
                                            <td class="title">
                                                <b><a class="text-primary" href="post.php?id=<?php echo $drama['id'] ; ?>" title="<?php echo $drama['id'] ; ?>"><?php echo $drama['title'] ; ?></a></b>
                                                <?php if ($login){ ?>
                                                <button id='addTb<?php echo $drama['id'] ?>' onclick="addT('<?php echo $drama['id'] ?>','<?php echo $drama['image'] ?>','<?php echo $drama['title'] ?>','<?php echo substr($drama['f_date'],6,9); ?>','<?php echo $drama['content_type'] ?>','<?php echo $drama['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span><?php  if($rate_inf['myR']=='true'){?><i class="fa fa-check"></i><?php }else{ ?>إضافة<?php }    ?></span></button>
                                                <?php } ?>
                                                <div class="hidden-md-up text-muted">
                                                    <?php 
                                                    if($drama['content_type']=='serie'){
                                                        $stat=datasignif($drama['country'],'countryF');
                                                    }else{
                                                        $stat=datasignif($drama['country'],'countryM'); 
                                                    }

                                                    $type=datasignif($drama['content_type'],'type');
                                                    ?>
                                                    <div><?php echo $type.' '.$stat; ?>, </div>
                                                    <div class="role">
                                                        <span class="name _600">
                                                            <?php echo $drama['chara']; ?></span>
                                                        <span class="text-muted roleid">(<?php echo datasignif($drama['format'],'role'); ?>)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="role hidden-sm-down">
                                                <div class="name">
                                                    <?php echo $drama['chara']; ?></div>
                                                <div class="text-muted roleid"><?php echo datasignif($drama['format'],'role'); ?></div>
                                            </td>
                                            <td class="text-center" style="direction:ltr">
                                                <span class="read_only" data-rating="<?php echo $rate_inf['postRa']; ?>"></span>
                                                <div class="text-sm"><?php echo substr($rate_inf['postRa'],0,3); ?></div>
                                            </td>
                                        </tr>
                                        <?php }} if($mo=='0'){ ?>
                                                  <script>$("#mo ,#moh").remove();</script>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                <?php } ?>


                                <?php $tv=0; if(!$tvsh){}else{ ?>
                                <h5   id="tvh"    class="header">برامج تلفزية</h5>
                                <table id="tv" class="table film-list">
                                    <thead>
                                        <tr>
                                            <th class="year hidden-sm-down" width="70">السنة</th>
                                            <th class="title">العنوان</th>
                                            <th class="episodes hidden-sm-down">#</th>
                                            <th class="role hidden-sm-down" width="140">الدور</th>
                                            <th class="text-center" width="120">التقييم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($array as $drama){ ?>
                                        <?php $rate_inf;$rate_inf=detailpost($drama['id'],'dr'); ?>

                                        <?php  if ($drama['content_type']=='tvshow' && $drama['type']=='work'){ $tv++; ?>
                                        <tr class="mdl-28748">
                                            <td class="year hidden-sm-down"><?php echo substr($drama['f_date'],6,9); ?></td>
                                            <td class="title">
                                                <b><a class="text-primary" href="post.php?id=<?php echo $drama['id'] ; ?>" title="<?php echo $drama['title'] ; ?>"><?php echo $drama['title'] ; ?></a></b>
                                                <?php if ($login){ ?>
                                                <button id='addTb<?php echo $drama['id'] ?>' onclick="addT('<?php echo $drama['id'] ?>','<?php echo $drama['image'] ?>','<?php echo $drama['title'] ?>','<?php echo substr($drama['f_date'],6,9); ?>','<?php echo $drama['content_type'] ?>','<?php echo $drama['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span><?php  if($rate_inf['myR']=='true'){?><i class="fa fa-check"></i><?php }else{ ?>إضافة<?php }    ?></span></button>
                                                <?php } ?>
                                                <div class="hidden-md-up text-muted">
                                                    <?php 
                                                    if($drama['content_type']=='serie'){
                                                        $stat=datasignif($drama['country'],'countryF');
                                                    }else{
                                                        $stat=datasignif($drama['country'],'countryM'); 
                                                    }

                                                    $type=datasignif($drama['content_type'],'type');
                                                    ?>

                                                    <div><?php echo $type.' '.$stat; ?>, <?php echo $drama['episodes'] ; ?> حلقات</div>
                                                    <div class="role">
                                                        <span class="text-muted roleid">(<?php echo datasignif($drama['format'],'role'); ?>)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="episodes hidden-sm-down"><?php echo $drama['episodes'] ; ?></td>
                                            <td class="role hidden-sm-down">
                                                <div class="text-muted roleid"><?php echo datasignif($drama['format'],'role'); ?></div>
                                            </td>
                                            <td class="text-center" style="direction:ltr">
                                                <span class="read_only" data-rating="<?php echo $rate_inf['postRa']; ?>"></span>
                                                <div class="text-sm"><?php echo substr($rate_inf['postRa'],0,3); ?></div>
                                            </td>
                                        </tr>
                                        <?php }} if($tv=='0'){ ?>
                                          <script>$("#tv ,#tvh").remove();</script>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php } ?>
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
                            <div id="arth" class="box-body">
                                <div class="pull-left"><a class="text-primary" href="articles.php">عرض الكل</a></div>
                                <h5 class="header">مقالات</h5>
                            </div>
                            <div id="art" class="m-a-0 articles-listing">
                                <?php 
                                        $stmtA = $conn->prepare("SELECT * FROM article WHERE keywords  LIKE CONCAT('%',?,'%') OR keywords  LIKE CONCAT('%',?,'%') ORDER BY id DESC LIMIT 5");
                                        
                                        $stmtA->bind_param('ss',$personeinfos['fname'],$personeinfos['lname']);
                                        $stmtA->execute();
                                        $resultA=$stmtA->get_result();
                                        
                                        while($oth=$resultA->fetch_assoc()){
                                        $data=$oth['body'];
                                            
                                        $dom = new DOMDocument();
                                        @$dom->loadHTML($data);
                                            $images = $dom->getElementsByTagName('img');
                                            $im=[];
                                            $imr=[];
                                            $imex=false;
                                         for ($i = 0; $i < $images->length; $i ++) {

                                             $image = $images->item($i);
                                             $src = $image->getAttribute('src');

                                             if(filter_var($src, FILTER_VALIDATE_URL)) {
                                                 if(getimagesize($src)){
                                                    $size=getimagesize($src);
                                                    $surface=$size[0]*$size[1];
                                                    array_push($im,$surface);
                                                    array_push($imr,$src);
                                                    $image_src= $src;
                                                    $imex=true;
                                                 }
                                             }
                                         }

                                        if ($imex){
                                            $index=array_search(max($im), $im);
                                            $bigone=$imr[$index];
                                        }else{
                                            $bigone='https://www.cicar.com/html/thumbnails/noimage.png';
                                        }
        
                                    
        
                                    ?>
                                
                                <div class="box-body" data-id="4057">
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4 row-cell cover"><a href="oneart.php?id=<?php echo $oth['id'] ?>"> <img class="img-responsive cover" src="<?php echo $bigone ?>"> </a></div>
                                        <div class="col-xs-9 col-sm-8 row-cell content">
                                            <div class="text-muted"></div>
                                            <h6 class="text-primary title"><a href="oneart.php?id=<?php echo $oth['id'] ?>"><?php echo $oth['title'] ?></a></h6>
                                            <div class="text-muted"> <span class="spacer"><script type="application/javascript">
                                            moment.locale("ar_AL");
                                            document.write(moment('<?php echo $oth['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                        </script></span> </div>
                                            <p><?php echo substr($oth['body'],0,20) ?>...</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php } ?>
                                
                            </div>
                        </div>
                        <?php if($resultA->num_rows=='0'){?><script>$("#art ,#arth").remove();</script> <?php } ?>
                        <style>
                            .post-menu .active {
                                color: #EF005B;
                            }

                        </style>
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
                                            <button id="sendc" onclick="opertion('ac|comment','<?php echo $personeinfos['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini">
                                                <!---->
                                                <!----><span>نشر</span></button>

                                            <button style="display:none" id="cancel_e" onclick="cancel_e('ac|comment','<?php echo $personeinfos['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right">
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
                                    
                                    WHERE comments.idP=? AND comments.postT='ac' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
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
                                    
                                    WHERE comments.idP=? AND comments.postT='ac' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 0,6
                                    ");
                                    }
                                    $stmtn->bind_param("s", $personeinfos['id']);
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

                                                        <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $personeinfos['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

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

                                                        <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $personeinfos['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

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
                            <div class="box-footer"><button id="more_cB" onclick="opertion('ac|more_c','<?php echo $personeinfos['id']; ?>')" type="button" class="el-button btn btn-block btn-default el-button--default"><span><strong id="more_cS">المزيد من التعليقات</strong></span></button></div>
                            <?php } ?>


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
                                function add_pub(e){$('#add_pub').show();$('#add_adv').hide();$(".nav-active-primary .nav-pills  a").removeClass('active');$(e).addClass('active');};
                                function add_adv(e){$('#add_adv').show();$('#add_pub').hide();$(".nav-active-primary .nav-pills  a").removeClass('active');$(e).addClass('active');};
                                    
                                </script>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div  id="add_pub" class="padding">
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
                                    </div><script>
                                            function eps(e){ if($(e).val()=='finish' || $(e).val()=='planning' || $(e).val()=='nitintr'){$(".episode-seen").addClass('disabled');$(".episode-seen input").attr('disabled','disabled');}else{$(".episode-seen").removeClass('disabled');$(".episode-seen input").removeAttr("disabled");}}
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
                                    .disabled{
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
                                        <div class="col-sm-5 pull-right"><select  id="watchag" style="background-color:#eceeef"class="form-control custom">
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
                                                <div class="col-lg-12 col-xs-12"><input id="dstart" readonly  placeholder="Month" class="form-control custom">
                                                    
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
                                                <div class="col-lg-12 col-xs-12"><input id="dfinish" readonly  placeholder="Month" class="form-control custom">
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

                    <button  aria-label="Close" data-dismiss="modal" style="margin-left:4px;" type="button" class="el-button btn btn-default el-button--default">
                        <!---->
                        <!----><span >إلغاء </span></button><button id="save_add" type="button" class="el-button btn btn-success el-button--primary">
                        <!---->
                        <!----><span>حفظ </span></button></div>
            </div><script>
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
        </div>
    </div>

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
