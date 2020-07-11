<?php
ob_start();
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id'])){
    
$userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM title WHERE id=?  AND admin_o='1' ");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:topshows.php');}else{
        $titleinfos=$resultA->fetch_assoc();
        
        $rev=false;
        $cas=false;
        $rec=false;
        $man=false;
        
        if(isset($_GET['option'])){
            switch ($_GET['option']){
                
                case 'cast':
                    $cas=true;
                break;
                    
                case 'recom':
                    $rec=true;
                break;
                    
                case 'reviews':
                    $rev=true;
                break;
                    
                default:
                    $man=true;
                break;
                    
            }
        }else{
             $man=true;
        }
    
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title><?php echo $titleinfos['title']; ?></title>
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
    <?php include("menu.php");addvisite('post'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid title-container" itemscopex="" itemtypex="http://schema.org/TVSeries">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-right">
                        <div class="box">
                            <div class="box-header box-navbar">
                                <h1 class="film-title"><a href="#" title="<?php echo $titleinfos['title'] ?>"><?php echo $titleinfos['title'] ?> </a> (<?php echo substr($titleinfos['p_date'],6,9); $titleinfos['year']=substr($titleinfos['p_date'],6,9); ?>)</h1>
                                <ul class="nav nav-tabs">
                                    
                                    <li class="page-item nav-item"><a class="nav-link" href="#"><i class="far fa-chart-bar"></i></a></li>
                                    <li class="page-item nav-item <?php if($rec){echo 'active';} ?>"><a class="nav-link" href="post.php?id=<?php echo $titleinfos['id'] ?>&option=recom">توصيات</a></li>
                                    <li class="page-item nav-item <?php if($rev){echo 'active';} ?>"><a class="nav-link" href="post.php?id=<?php echo $titleinfos['id'] ?>&option=reviews">مراجعات</a></li>
                                    <li class="page-item nav-item <?php if($cas){echo 'active';} ?>"><a class="nav-link" href="post.php?id=<?php echo $titleinfos['id'] ?>&option=cast">الممثلون</a></li>
                                    <li class="page-item nav-item <?php if($man){echo 'active';} ?>"><a class="nav-link" href="post.php?id=<?php echo $titleinfos['id'] ?>">التفاصيل</a></li>
                                </ul>
                            </div>
                            <div class="box-tool m-t-sm dropdown" style="right:85%"> <a href="#" class="hidden-xs-down text-sm text-primary" data-toggle="dropdown">تعديل هدا العنوان</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" rel="nofollow" href="edit.php?id=<?php echo $titleinfos['id'] ?>"><span>تعديل</span></a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item report-link m-b-sm" rel="nofollow" data-id="28723" data-type="title">إبلاغ</a>
                                </div>
                            </div>
                            
                            
                            
                            <script type="text/javascript">
                                var listStatuses = {
                                    "1": "Currently watching",
                                    "2": "Completed",
                                    "3": "Plan to watch",
                                    "4": "On-hold",
                                    "5": "Dropped",
                                    "6": "Not Interested",
                                    "add": "Add to List"
                                };

                            </script>
                            <?php 
                
     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    
                ?>

                            <div class="box-body">
                                <div class="row"><?php $titledetail; $titledetail=detailpost($titleinfos['id'],'dr'); ?>
                                    <?php  if($man){ ?>
                                    <div class="col-sm-4 film-cover cover"> <a href="#" itempropx="url"></a> <a style="display: block;" href="#" title="<?php echo $titleinfos['title'] ?> (<?php echo $titleinfos['year'] ?>) poster"> <img class="img-responsive" itempropx="image" src="process/<?php echo $titleinfos['image'] ?>" alt="<?php echo $titleinfos['title'] ?> poster"> </a>
                                        <div class="share-container p-t p-b text-center"> <a rel="external nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light"><i class="fab fa-facebook-f"></i><i class="fab fa-facebook-f indigo"></i></a> <a rel="external nofollow" href="http://twitter.com/home?status=<?php echo $url; ?>" class="btn btn-icon btn-social rounded light"><i class="fab fa-twitter"></i><i class="fab fa-twitter light-blue"></i></a> <a rel="external nofollow" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;description=<?php echo $titleinfos['title'] ?>" class="btn btn-icon btn-social rounded light"><i class="fab fa-pinterest-p"></i><i class="fab fa-pinterest-p red"></i></a> <a rel="external nofollow" href="#comments" class="btn btn-icon btn-social rounded light"><i class="fa fa-comments"></i><i class="fa fa-comments green"></i></a> </div>

                                        <?php if (isset($_SESSION['id'])){ ?>
                                        <div id="mdl-28723" class="btn-group group-manage-list dropdown m-b-sm btn-block"> <button onclick="addT('<?php echo $titleinfos['id'] ?>','<?php echo $titleinfos['image'] ?>','<?php echo $titleinfos['title'] ?>','<?php echo substr($titleinfos['f_date'],6,9); ?>','<?php echo $titleinfos['content_type'] ?>','<?php echo $titleinfos['episodes'] ?>')" class="btn m-b-sm white btn-manage-list main col-xs-10 col-sm-9" data-id="28723" data-stats="mylist:28723"><i class="far fa-plus"></i> أضافة الى قائمتي </button> <button class="btn m-b-sm white btn-clist col-xs-2 col-sm-3" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-list"></i></button>
                                            <div data-rid="28723" class="dropdown-menu dropdown-menu-right manage-clist">
                                                <div>
                                                    <h6 class="dropdown-header">قائمة مخصصة</h6>
                                                    <div class="list-wrapper">
                                                    <?php 
                                                    
                                                      $stmtA = $conn->prepare("SELECT * FROM list WHERE idU=? AND content='title'");
                                                      $stmtA->bind_param("s", $_SESSION['id']);
                                                      $stmtA->execute();
                                                      $resultA=$stmtA->get_result();
                                                      if ($resultA->num_rows==0){echo 'لم تقم بانشاء اي لائحة خاصة بالعناوين سابقا.';}else{
                                                            while($listinfos=$resultA->fetch_assoc()){
                                                        ?>
                                                                <div class="list-item" onclick="itemtolist('<?php echo $titleinfos['id'] ?>','<?php echo $listinfos['id']; ?>','dr')"><div class="text-primary"><?php echo $listinfos['title']; ?></div> <small>
                                                                    <?php switch ($listinfos['type']){
                                                                                case 'public':
                                                                                    echo 'عامة';
                                                                                break;
                                                                                
                                                                                case 'private':
                                                                                    echo 'خاصة';
                                                                                break;
                                                                                
                                                                                case 'vote':
                                                                                    echo 'تصويت';
                                                                                break;
                                                                    } ?>
                                                                    
                                                                    <?php 
                                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE  idL=?");
                                                                        $stmtA->bind_param("s", $listinfos['id']);
                                                                        $stmtA->execute();
                                                                        $resultAb=$stmtA->get_result(); ?>
                                                                    </small> <span class="total-cnt">المجموع: <?php echo $resultAb->num_rows; ?></span></div>
                                                        <?php } ?>
                                                    <?php } ?></div>
                                                    <div class="page-spinner p-a" style="display: none;">
                                                        <div class="vue-simple-spinner" style="margin: 0px auto; border-radius: 100%; border-color: rgb(33, 150, 243) rgb(238, 238, 238) rgb(238, 238, 238); border-style: solid; border-width: 3px; border-image: none 100% / 1 / 0 stretch; width: 32px; height: 32px; animation: 0.8s linear 0s infinite normal none running vue-simple-spinner-spin;"></div>
                                                        <!---->
                                                    </div>
                                                    
                                                    
                                                    <div class="dropdown-footer"><a href="addlist.php" rel="nofollow" class="dropdown-item btn-create-list"><i class="fa fa-plus"></i> أنشئ لائحة جديدة</a></div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                       
                                    </div>
                                    <div id="show-detailsxx" class="col-sm-8">
                                        <div class="row no-gutter">
                                            <div class="col-film-rating" data-id="28723">
                                                <div><span>
                                                        <div class="el-popover__reference" aria-describedby="el-popover-1443" tabindex="0">
                                                            <div class="box deep-orange" style="background-color:#f96125"><?php echo $titledetail['postRa']*2; ?></div>
                                                        </div>
                                                    </span></div>
                                            </div>
                                            <style>
                                                .read_only .jq-star {
                                                    transform: scale(-1, 1);
                                                }

                                            </style>
                                            <div class="col-xs-8 col-sm-9 col-lg-9">
                                                <?php if(isset($_SESSION['id'])){?>
                                                <div id="your-rating-28723" class="your-rating">
                                                    <div class="txt"><b class="text-muted">تقييمك:</b> <span class="ratingPanel btn-manage-list" data-id="28723" style="width: 119px; height: 17px;"> <span onclick="addT('<?php echo $titleinfos['id'] ?>','<?php echo $titleinfos['image'] ?>','<?php echo $titleinfos['title'] ?>','<?php echo substr($titleinfos['f_date'],6,9); ?>','<?php echo $titleinfos['content_type'] ?>','<?php echo $titleinfos['episodes'] ?>')" class="read_only" data-rating="<?php echo $titledetail['myRN']; ?>"></span> <span class="p-l-sm score"><b><?php echo $titledetail['myRN']*2; ?></b>/10</span> </span> </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <?php } ?>
                                                <script type="text/javascript"> </script>
                                                <div class="hfs" itempropx="aggregateRating" itemscopex="" itemtypex="">التقييم: <b style="font-weight:bold;" itempropx="ratingValue"><?php echo $titledetail['postRa']*2; ?></b>/10 من أصل <?php echo $titledetail['raters']; ?> مستعمل <a href="#" class="text-primary m-l-sm"><i class="fal fa-chart-bar"></i></a> </div>
                                                <div class="hfs">عدد المشاهدين: <b><?php echo $titledetail['watchers']; ?></b></div>

                                                <div class="hfs">مراجعات: <a class="text-primary" href="#reviews">,<?php
                                                    $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idT=? GROUP BY idU");
                                                    $stmtA->bind_param("s", $userid);
                                                    $stmtA->execute();
                                                    $resultA=$stmtA->get_result();
                                                    echo $resultA->num_rows;
                                                    ?> مستعمل</a></div>
                                            </div>
                                        </div>

                                        <hr class="m-t-sm m-b-sm">
                                        <div class="show-synopsis">
                                            <p><?php echo $titleinfos['synopsis'] ?></p>
                                        </div>
                                        <div class="show-detailsxss">
                                            <ul class="list m-a-0">
                                                <?php 
                                                    $qr="SELECT work.idP, work.idT, work.id, work.type, work.format ,title.country, title.id as idt, title.title FROM work JOIN title ON work.idP=title.id WHERE work.idT=? AND work.type='related'";
                                                    $stmtA = $conn->prepare($qr);
        
                                                    $stmtA->bind_param("s", $titleinfos['id']);
       
                                                    $stmtA->execute();
                                                    $resultA=$stmtA->get_result();                                     
                                                   
                                                ?>
                                                <li class="list-item p-a-0 m-b-sm related-content">
                                                    <b class="inline">عناوين ذات صلة</b>
                                                    <?php if ($resultA->num_rows=='0'){ ?>
                                                    <div class="title"> <strong style="font-weight:300">لا توجد اي عناوين لها علاقة بهدا العنوان .</strong></div>
                                                    <?php }else{ ?>

                                                    <?php while ($rl=$resultA->fetch_assoc()){ ?>
                                                    
                                                    <?php if(!($rl['format'])==''){ ?>
                                                    <div class="title"> <?php echo datasignif($rl['format'],'related').' للعمل ال'. datasignif($rl['country'],'countryM'); ?> <a class="text-primary" href="post?id=<?php echo $rl['idt']; ?>" title="The Living Dead"><?php echo $rl['title']; ?></a></div>
                                                    <?php }else{ ?>
                                                    <div class="title">  <a class="text-primary" href="post?id=<?php echo $rl['idt']; ?>" title="<?php echo $rl['title']; ?>"><?php echo $rl['title']; ?></a></div>
                                                    <?php } ?>
                                                    <?php } ?>

                                                    <?php } ;?>

                                                </li>


                                                <li class="list-item p-a-0"><b class="inline">العنوان بالغة الاصلية للعمل:</b> <a href="#" title="<?php echo $titleinfos['title'] ?>"><?php echo $titleinfos['title_origine'] ?></a></li>

                                                <li class="list-item p-a-0">
                                                    <b class="inline">معروف ايضا بالاسماء:</b>
                                                    <?php $on=explode(',',$titleinfos['other_names']); ?>
                                                    <span class="mdl-aka-titles">
                                                        <?php foreach ($on as $o){ ?>
                                                        <a href="#" title="<?php echo $o; ?>"><?php echo $o; ?></a>
                                                        <?php } ?>
                                                    </span> </li>

                                                <?php $casi=titleCD($titleinfos['id'],'work','dir'); ?>
                                                <li class="list-item p-a-0">
                                                    <b class="inline">الاخراج:</b>
                                                    <?php if (!$casi){ echo "<p> لم يتم اضافة اي مخرج. </p>";}else{ ?>
                                                    <?php $x=1;foreach($casi as $caso){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>

                                                    <a class="text-primary" href="persone.php?id=<?php echo $caso['idop']; ?>"><?php echo $caso['fname'].' '.$caso['lname']; ?></a>
                                                    <?php }} ?>

                                                    <?php $casi=titleCD($titleinfos['id'],'work','scrdir'); ?>
                                                    <?php if (!$casi){}else{ ?>
                                                    <?php $x=1;foreach($casi as $caso){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>

                                                    <a class="text-primary" href="persone.php?id=<?php echo $caso['idop']; ?>"><?php echo $caso['fname'].' '.$caso['lname']; ?></a>
                                                    <?php }} ?>
                                                </li>

                                                <?php $casi=titleCD($titleinfos['id'],'work','scrwr'); ?>

                                                <li class="list-item p-a-0"><b class="inline">سيناريو:</b>
                                                    <?php if (!$casi){ echo "<p> لم يتم اضافة اي سيناريست. </p>";}else{ ?>
                                                    <?php $x=1;foreach($casi as $caso){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>

                                                    <a class="text-primary" href="persone.php?id=<?php echo $caso['idop']; ?>"><?php echo $caso['fname'].' '.$caso['lname']; ?></a>
                                                    <?php }} ?>
                                                </li>


                                                <li class="list-item p-a-0 show-genres"><b class="inline">نوع العمل:</b>

                                                    <?php $x=1;if(!is_array(json_decode($titleinfos['genre']))){}else{foreach(json_decode($titleinfos['genre']) as $gr){ $x++;?>
                                                    <?php if($x=='2'){}else{echo '، ';} ?>
                                                    <a class="text-primary" href="#"><?php echo datasignif($gr,'genre'); ?></a>

                                                    <?php }}; ?>
                                                </li>


                                                <li class="list-item p-a-0 show-tags"><b class="inline">كلمات مفتاحية:</b>
                                                    <?php $x=1;if(!is_array(json_decode($titleinfos['tag']))){}else{ foreach(json_decode($titleinfos['tag']) as $gr){ $x++;?>
                                                    <?php if($x=='2'){}else{echo '، ';} ?>
                                                    <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                    <?php }}; ?>
                                                </li>


                                            </ul>
                                            <ul class="list m-a-0 hidden-md-up">
                                                <li class="list-item p-a-0"><b class="inline">الدولة:</b> <?php  echo datasignif($titleinfos['country'],'countryN'); ?> <i class="flag flags-c2"></i></li>
                                                <li class="list-item p-a-0"><b class="inline">النوع:</b> <?php echo datasignif($titleinfos['content_type'],'type'); ?></li>

                                                <?php switch ($titleinfos['content_type']){
                                                    case 'serie': ?>
                                                <li class="list-item p-a-0"><b class="inline">الحلقات:</b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات';}else{echo $titleinfos['episodes']; } ?></li>
                                                <?php break;

                                                        case 'tvshow': ?>
                                                <li class="list-item p-a-0"><b class="inline">الحلقات:</b> <?php if($titleinfos['tvshow_type']=='' || $titleinfos['tvshow_type']=='0'){echo 'لم يتم إضافة نوع البرنامج.';}else{echo  datasignif($titleinfos['tvshow_type'],'tvt'); } ?></li>

                                                <li class="list-item p-a-0"><b class="inline">نوع البرنامج:</b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم عدد الحلقات';}else{echo $titleinfos['episodes']; } ?></li>

                                                <?php break;

                                                        case 'movie': ?>

                                                <?php break;
                                                }?>


                                                <li class="list-item p-a-0"><b class="inline">الشبكات المنتجة:</b><?php $x=1; foreach(json_decode($titleinfos['origin_net']) as $gr){ $x++;?>
                                                    <?php if($x=='2'){}else{echo '، ';} ?>
                                                    <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                    <?php }; ?></li>


                                                <?php switch ($titleinfos['content_type']){
                                                    case 'serie' || 'tvshow': ?>

                                                <?php
                                                        
                                                        if ($titleinfos['episodes']!='0' && $titleinfos['episodes']!='' && is_numeric($titleinfos['episodes'])){
                                                            $epc=true;
                                                        }else{$epc=false;}
                                                        
                                                        if ($titleinfos['duration']!='0' && $titleinfos['duration']!='' && is_numeric($titleinfos['duration'])){
                                                            $dur=true;
                                                        }else{$dur=false;}
                                                        
                                                        if ($epc && $dur){
                                                            $fd=$titleinfos['duration']*$titleinfos['episodes'];
                                                            ?> <li class="list-item p-a-0"><b class="inline">المدة:</b> <?php echo $fd ?> دقيقة.</li>

                                                <?php
                                                        }else{
                                                            
                                                        }
                                                    ?>


                                                <?php break;

                                                       
                                                
                                                  

                                                        case 'movie': ?>

                                                <?php
                                                        
                                                        
                                                        
                                                        if ($titleinfos['duration']!='0' || $titleinfos['duration']!=''){
                                                            $dur=true;
                                                        }else{$dur=false;}
                                                        
                                                        if ($epc && $dur){
                                                            $fd=$titleinfos['duration'];
                                                            ?> <li class="list-item p-a-0"><b class="inline">المدة:</b> <?php echo $fd ?> دقيقة.</li>

                                                <?php
                                                        }else{
                                                            
                                                        }
                                                    ?>

                                                <?php break;
                                                }?>


                                                <li class="list-item p-a-0"><b class="inline">التقييم:</b> <?php echo $titledetail['postRa']; ?> <span class="hft">(من قبل <a href=""><?php echo $titledetail['raters']; ?> مستعمل</a>)</span></li>
                                                <li class="list-item p-a-0"><b class="inline">تصنيف المحتوى:</b><?php echo  datasignif($titleinfos['content_rate'],'content_rate'); ?></li>



                                                <li class="list-item p-a-0" style="display:none;"><b class="inline">المشاهدون:</b><?php echo $titledetail['watchers']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
                                    <?php }elseif ($cas){ ?>
                                    <?php        
                                        $stmtA = $conn->prepare("SELECT work.idP, work.idT, work.id, work.chara, work.type, work.format ,persones.fname, persones.lname, persones.id, persones.picture FROM work JOIN persones ON persones.id=work.idP WHERE idT=? AND persones.status='1' AND type!='related' ");
                                        $stmtA->bind_param("s", $titleinfos['id']);
                                        $stmtA->execute();
                                        $resultA=$stmtA->get_result();                                     
                                    ?>
                                    <ul class="list no-border p-b">
                                    <?php while($cast=$resultA->fetch_assoc()){ ?>
                                    <li class="list-item col-sm-4">

                                        <div class="col-xs-8 col-sm-7 p-a-0" xitempropx="actor" itemscopex=""> <a href="persone.php?id=<?php echo $cast['idP'] ?>" class="text-primary text-ellipsis" itempropx="url" title="<?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?>"><b itempropx="name"><?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?></b></a>
                                            <div class="text-ellipsis"> <small><a class="text-primary"><?php echo $cast['chara']; ?></a></small> </div> <small class="text-muted"><?php echo datasignif($cast['format'],'role'); ?></small>
                                        </div>

                                        <div class="col-xs-4 col-sm-5 p-r p-l-0"><a href="persone.php?id=<?php echo $cast['idP'] ?>"><img class="img-responsive mdl-rounded" src="process/<?php echo $cast['picture'] ?>" title="" alt=""></a></div>

                                    </li>
                                    <?php } ?>

                                </ul>
                                    
                                    
                                    <?php }elseif($rev){ 
                                        $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idT=? ORDER BY helpf DESC");
                                        $stmtA->bind_param("s", $titleinfos['id']);
                                        $stmtA->execute();
                                        $resultA=$stmtA->get_result();
                            if ($resultA->num_rows==0){echo "<div style='text-align:center'><h3>لم يتم إضافة اي مراجعات.</h3></div>";}else{
                                 ?>
                            <?php while($review=$resultA->fetch_assoc()){ ?>
                            <div id="review-50935" class="review" data-stats="reviews:50935">
                                <div class="box-body light b-t b-b p-t-sm p-b-sm">
                                    <div class="row no-gutter">
                                        <div class="col-sm-9">
                                            <div class="pull-left m-r"> <span class="avatar w-56"> <img src="process/<?php $useri=userinfo($review['idU']); echo $useri['picture']; $titleinfos=titleinfo($review['idT']) ?>"> </span> </div>
                                            <div>
                                                <div class="pull-right hidden-sm-up"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> </div> <b><a class="text-primary" href="profile.php?id=<?php $useri['code']; ?>"><?php $useri['username']; ?></a></b>
                                                <div class="user-stats review_stats_50935"><small><?php if($review['helpf']=='0' || $review['helpf']<0 || $review['helpf']==''){}else{?><b><?php echo $review['helpf'] ?></b> وجدوا هذه المراجعة مفيدة.<?php } ?></small> <i class="review-voted-check review-voted-check-50935"></i></div>
                                                <div class="more-reviews"> <small><a class="text-primary" href="profile.php?id=<?php echo $useri['code']; ?>&option=reviews">مراجعات اخرى لهدا المستعمل</a></small>
                                                    <div class="hidden-sm-up pull-right"> <small><a href="profile.php?id=<?php echo $useri['code']; ?>&option=reviews"></a></small>
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
                            
                                    <?php }elseif($rec){ ?>
                                     <?php 
                                    $stmtA1 = $conn->prepare("SELECT * FROM recom WHERE idT=? GROUP BY idRT");
                                    $stmtA1->bind_param("s",$titleinfos['id']);
                                    $stmtA1->execute();
                                    $resultA1=$stmtA1->get_result();
                                    if ($resultA1->num_rows=='0'){
                                        echo '<div><h5 class="text-center"> لا توجد اي توصيات من الاعضاء.</h5></div>';
                                    }else{
                                    ?>
                                    <?php while($reco=$resultA1->fetch_assoc()){ if (!postexist($reco['idRT'],'dr')){}else{ $ti=titleinfo($reco['idRT']);?>
                                        <div class="swiper-slide grid-item mdl-23696" style="width: 146.75px; margin-right: 24px;"> <a class="film-cover" href="post.php?id=<?php echo $ti['id']; ?>"> <img class="img-responsive" src="process/<?php echo $ti['image']; ?>" alt="<?php echo $ti['title']; ?>"></a> <a class="film-episode text-ellipsis" href="post.php?id=<?php echo $ti['id']; ?>"><span class="film-title text-primary"><?php echo $ti['title']; ?></span></a> </div>
                                    <?php }} ?>
                                    <?php } ?>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="box clear" id="castD">
                            <div class="box-header light-b-dk">
                                <h3>الممثلين &amp; طاقم العمل</h3>
                            </div>

                            <?php
        
                                                    $stmtA = $conn->prepare("SELECT work.idP, work.idT, work.id, work.chara, work.type, work.format ,persones.fname, persones.lname, persones.id, persones.picture FROM work JOIN persones ON persones.id=work.idP WHERE idT=? AND type='act' AND persones.status='1' LIMIT 6");
                                                    $stmtA->bind_param("s", $titleinfos['id']);
                                                    $stmtA->execute();
                                                    $resultA=$stmtA->get_result();                                     
    
                                                ?>

                            <div class="box-tool" style="right:91%"><a rel="external nofollow" href="edit.php?id=<?php echo $titleinfos['id'] ?>" class="text-info">أضف ممثل</a></div>
                            <div class="box-divider m-a-0"></div>
                            <div class="p-a-sm">
                                <ul class="list no-border p-b">
                                    <?php while($cast=$resultA->fetch_assoc()){ ?>
                                    <li class="list-item col-sm-4">

                                        <div class="col-xs-8 col-sm-7 p-a-0" xitempropx="actor" itemscopex=""> <a href="persone.php?id=<?php echo $cast['idP'] ?>" class="text-primary text-ellipsis" itempropx="url" title="<?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?>"><b itempropx="name"><?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?></b></a>
                                            <div class="text-ellipsis"> <small><a class="text-primary"><?php echo $cast['chara']; ?></a></small> </div> <small class="text-muted"><?php echo datasignif($cast['format'],'role'); ?></small>
                                        </div>

                                        <div class="col-xs-4 col-sm-5 p-r p-l-0"><a href="persone.php?id=<?php echo $cast['idP'] ?>"><img class="img-responsive mdl-rounded" src="process/<?php echo $cast['picture'] ?>" title="" alt=""></a></div>

                                    </li>
                                    <?php } ?>

                                </ul>
                                <div class="clearfix"></div>
                                <div class="clear"></div>
                            </div>
                            <?php if($resultA->num_rows<6){}else{ ?>
                            <div class="box-divider m-a-0"></div>
                            <div class="box-footer text-center"> <a href="post.php?id=<?php echo $titleinfos['id'] ?>&option=cast" class="text-primary">عرض الكل (<?php echo $resultA->num_rows; ?>)</a> </div>
                            <?php } ?>
                        </div>
                        <div class="box clear" id="revD">
                            <div class="box-header light-b-dk">
                                <h3>مراجعات</h3>
                                <style>
                                    .voted {
                                        color: #848484;
                                        border: 1px solid #92d07a;
                                        color: #71c151;
                                        background-color: rgba(223, 240, 216, .13);
                                    }

                                </style>
                            </div>
                            <div class="box-tool"><a rel="external nofollow" href="addreview.php?id=<?php echo $titleinfos['id']; ?>" class="text-info">أضف مراجعة</a></div>
                            <div class="box-divider m-a-0"></div>
                            <?php 
                            $stmtA = $conn->prepare("SELECT * FROM reviews WHERE idT=? ORDER BY helpf DESC LIMIT 3");
                            $stmtA->bind_param("s", $userid);
                            $stmtA->execute();
                            $resultA=$stmtA->get_result();
                            if ($resultA->num_rows==0){echo "<div style='text-align:center'><h3>لم يتم إضافة اي مراجعات لهدا العمل.</h3></div>";}else{
                                 ?>
                            <?php while($review=$resultA->fetch_assoc()){ ?>
                            <div id="review-50935" class="review" data-stats="reviews:50935">
                                <div class="box-body light b-t b-b p-t-sm p-b-sm">
                                    <div class="row no-gutter">
                                        <div class="col-sm-9">
                                            <div class="pull-left m-r"> <span class="avatar w-56"> <img src="process/<?php $useri=userinfo($review['idU']); echo $useri['picture']; ?>"> </span> </div>
                                            <div>
                                                <div class="pull-right hidden-sm-up"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> </div> <b><a class="text-primary" href="profile.php?<?php $useri['id']; ?>"><?php $useri['username']; ?></a></b>
                                                <div class="user-stats review_stats_50935"><small><?php if($review['helpf']=='0' || $review['helpf']<0 || $review['helpf']==''){}else{?><b><?php echo $review['helpf'] ?></b> وجدوا هذه المراجعة مفيدة.<?php } ?></small> <i class="review-voted-check review-voted-check-50935"></i></div>
                                                <div class="more-reviews"> <small><a class="text-primary" href="profile.php?id=<?php echo $useri['code']; ?>&option=reviews">مراجعات اخرى لهدا المستعمل</a></small>
                                                    <div class="hidden-sm-up pull-right"> <small><a href="profile.php?id=<?php echo $useri['code']; ?>&option=reviews"></a></small>
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
                                            <div class="actions"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> <small><a href="profile.php?id=<?php echo $review['idU'] ?>"><i class="fal fa-comments-alt"></i> <?php echo detailpost($review['id'],'rv')['postC']; ?></a></small>
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

                            <div class="box-divider m-a-0"></div>
                            <div class="box-footer text-center"> <a href="post.php?id=<?php echo $titleinfos['id']; ?>&option=reviews" class="text-primary">شاهد كل المراجعات</a> </div>
                        </div><?php if ($resultA->num_rows=='0'){ ?> <script>$("#revD").remove()</script> <?php } ?>
                        <div id="recD" class="box clear">
                            <div class="box-header light-b-dk b-b">
                                <h3>ترشيحات المشاهدين(توصيات)</h3>
                            </div>
                            <div class="box-tool"><a rel="external nofollow" href="addreco.php?id=<?php echo $titleinfos['id']; ?>" class="text-info">أضف توصيتا</a></div>
                            <div class="box-body details-recommendations">
                                <div class="row p-l-sm p-r-sm">
                                    <?php 
                                    $stmtA1 = $conn->prepare("SELECT * FROM recom WHERE idT=? GROUP BY idRT");
                                    $stmtA1->bind_param("s",$titleinfos['id']);
                                    $stmtA1->execute();
                                    $resultA1=$stmtA1->get_result();
                                    if ($resultA1->num_rows=='0'){
                                        echo '<div><h5 class="text-center"> لا توجد اي توصيات من الاعضاء.</h5></div>';
                                    }else{
                                    ?>
                                    <?php while($reco=$resultA1->fetch_assoc()){ if (!postexist($reco['idRT'],'dr')){}else{ $ti=titleinfo($reco['idRT']);?>
                                    <div class="rec-item col-xs-4 col-md-2 p-a-xs"> <a href="post.php?id=<?php echo $rec['idRT'];  ?>" data-info="title:26035" title="<?php echo $ti['title']; ?>"><img style="height:145px" class="img-responsive" src="process/<?php echo $ti['image']; ?>" alt="<?php echo $ti['title']; ?>"></a> </div>
                                    <?php }} ?>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div id="desD" class="box clear">
                            <div class="box-header light-b-dk b-b">
                                <h3>أخر المحادثات</h3>
                            </div>
                            <?php if(isset($_SESSION['id'])){ ?>
                            <div class="box-tool"><a rel="external nofollow" href="forum.php" class="text-info btn-new-topic" data-id="35422">موضوع جديد</a></div>
                            <?php } ?>
                            <div class="m-a-0">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th style="text-align:right" class="thread-listing--title" colspan="2">العنوان</th>
                                            <th style="text-align:right" class="thread-listing--replies">المشاركات</th>
                                            <th style="text-align:right" class="thread-listing--lastpost" width="215">أخر المشاركات</th>
                                        </tr>
                                    </thead>
                                    
                                        <?php
        
                                            $stmtT = $conn->prepare(" SELECT * FROM topics ORDER BY wn DESC LIMIT 3");
                                            $stmtT->execute();
                                            $resultT=$stmtT->get_result();
        
                                        ?>
                                    <tbody>
                                        <?php while($topics=$resultT->fetch_assoc()){
                                        
                                            $stmtF = $conn->prepare(" SELECT * FROM comments WHERE postT='dc' AND idP=? ORDER BY wn DESC");
                                            $stmtF->bind_param("s", $topics['id']);
                                            $stmtF->execute();
                                            $resultF=$stmtF->get_result();
                                        ?>
                                        <tr class="thread">
                                            <td class="thread--avatar"><span><img <?php $usi=userinfo($topics['idU']); ?> src="process/<?php echo $usi['picture']; ?>" width="30"></span></td>
                                            <td class="thread--discussion">
                                                <b><a class="text-primary" href="topic.php?id=<?php echo $topics['id']; ?>"><?php echo $topics['title']; ?></a></b>
                                                <span class="thread--byUser">بواسطة <a href="profile.php?id=<?php  echo $usi['picture']; ?>"><?php echo $usi['username'] ?> </a></span>
                                            </td>
                                            <td class="thread--replies"><?php echo $resultF->num_rows; ?></td>
                                            <td class="thread-last-post">
                                                
                                                <div class="media">
                                                    <?php if($resultF->num_rows=='0'){echo 'لا توجد اي مشاركات لحد الان';}else{ ?>
                                                       <?php $frst=true; while($last=$resultF->fetch_assoc()){ ?>
                                                        <?php if($frst){ $usi; $usi=userinfo($last['idU']); ?>
                                                        
                                                        <div class="poster--avatar"><a href="profile.php?id=<?php echo $last['idU']; ?>" class="poster-image"><img src="process/<?php echo $usi['picture']; ?>"></a></div>
                                                        <div class="media-body">
                                                            <div class="poster-name"><a href="profile.php?id=<?php echo $last['idU']; ?>"><?php echo $usi['username']; ?></a><br><small class="date text-muted"><script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $last['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());
                                                                            </script></small></div>
                                                        </div>
                                                        <?php $frst=false; }else{} ?>
                                                    <?php }} ?>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-divider m-a-0"></div>
                            <div class="box-footer text-center"> <a href="forum.php" class="text-primary">عرض الكل</a> </div>
                        </div>
                        
<?php echo $rec.' '.$rev.' '.$cas; if($rec || $rev || $cas ){?>  <script>$("#castD, #revD, #recD, #desD").remove()</script><?php } ?>
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
                                            <button id="sendc" onclick="opertion('dr|comment','<?php echo $titleinfos['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini">
                                                <!---->
                                                <!----><span>نشر</span></button>

                                            <button style="display:none" id="cancel_e" onclick="cancel_e('dr|comment','<?php echo $titleinfos['id']; ?>')" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right">
                                                <!---->
                                                <!----><span>إلغاء</span></button>
                                            <!---->
                                        </div>

                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="box-body b-b clear light">
                                <div>يجب ان تقوم <a href="signin.php" class="text-primary quick-login">تسجيل الدخول </a> او <a href="signup.php" class="text-primary">التسجيل كمستعمل جديد </a> للقيام بنشر تعليق.</div>
                            </div>
                            <?php } if(isset($_SESSION['id'])){$myid=$_SESSION['id'];}?>
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
                                    
                                    WHERE comments.idP=? AND comments.postT='dr' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
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
                                    
                                    WHERE comments.idP=? AND comments.postT='dr' AND reports.idT='cm'  AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 0,6
                                    ");
                                    }
                                    $stmtn->bind_param("s", $titleinfos['id']);
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
                                                            $stmtn = $conn->prepare("SELECT idP,idR,idT FROM reports WHERE idP=? AND idR=? AND idT='cm' ");
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

                                                        <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $titleinfos['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                        <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                    </div>

                                                    <?php }else{ ?>
                                                        <?php if($comminfo['idR']=='true'){ ?>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">إلغاء التبليغ</a> </div>
                                                        <?php }else{ ?>
                                                            <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                        <?php } ?>
                                                    
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
                                                        <script type="application/javascript">
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



                                                <ul class="post-tooltip post-menu-footer hidden-sm-up">
                                                    <!-- Comments  -->


                                                    <li class="dropdown">
                                                        <?php if($comminfo['idR']=='true'){ ?>
                                                        <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class=""><i style="color:red" class="fa fa-flag"></i></a>
                                                        <?php }else{ ?>
                                                        <a href="#" data-toggle="dropdown" rel="nofollow" id="menut<?php echo $comminfo['id']; ?>" class="menu-toggle"></a>
                                                        <?php }   ?>
                                                        <?php if(isset($_SESSION['id'])){ ?>
                                                        <?php if($comminfo['code']==$myid){ ?>

                                                        <div class="dropdown-menu dropdown-menu-scale pull-right">

                                                            <a class="dropdown-item story-share" onclick="upd_c('<?php echo $comminfo['postTc'] ?>','<?php echo $comminfo['id'] ?>','<?php echo $titleinfos['id'] ?>','<?php echo $comminfo['spoiler'] ?>')">تعديل</a>

                                                            <a class="dropdown-item story-share" onclick="opertion('deletec_c','<?php echo $comminfo['id'] ?>')">حذف</a>

                                                        </div>

                                                        <?php }else{ ?>
                                                            <?php if($comminfo['idR']=='true'){ ?>

                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">إلغاء الابلاغ</a> </div>
                                                        
                                                            <?php }else{ ?>
                                                                <div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`cm|report`,`<?php echo $comminfo['id'] ?>`)" id="menutdiv<?php echo $comminfo['id']; ?>" class="dropdown-item story-share">تبليغ</a> </div>
                                                        
                                                            <?php } ?>
                                                        <?php }} ?>
                                                    </li>


                                                    <li><span id="likedivminicm<?php echo $comminfo['id']; ?>" onclick="opertion('cm|like','<?php echo $comminfo['id']; ?>')" class="btn-like <?php if(detailpost($comminfo['id'],'cm')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumcm<?php echo $comminfo['id']; ?>"><?php echo detailpost($comminfo['id'],'cm')['postL']; ?></b> <i class="like-heart"></i></span></li>


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


                                                            <li><span id="likedivminirp<?php echo $repinfo['id']; ?>" onclick="opertion('rp|like','<?php echo $repinfo['id']; ?>')" class="btn-like <?php if(detailpost($repinfo['id'],'rp')['myL']=='true'){ ?>active<?php }else{  } ?>"> <b id="likenumminirp<?php echo $repinfo['id']; ?>"> <?php echo detailpost($repinfo['id'],'rp')['postL']; ?> </b><i class="like-heart"></i></span></li>


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
                            <div class="box-footer"><button id="more_cB" onclick="opertion('dr|more_c','<?php echo $titleinfos['id']; ?>')" type="button" class="el-button btn btn-block btn-default el-button--default"><span><strong id="more_cS">المزيد من التعليقات</strong></span></button></div>
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
                    <div class="col-lg-4 col-md-4">
                        <div class="content-side hidden-sm-down">

                            <div class="box clear hidden-sm-down">
                                <div class="box-header primary">
                                    <h3>تفاصيل</h3>
                                </div>
                                <div class="box-body light-b">
                                    <ul class="list m-b-0">
                                        <li class="list-item p-a-0"><b class="inline">الدولة:</b> <?php  echo datasignif($titleinfos['country'],'countryN'); ?> <i class="flag flags-c2"></i></li>
                                        <li class="list-item p-a-0"><b class="inline">النوع:</b> <?php echo datasignif($titleinfos['content_type'],'type'); ?></li>

                                        <?php switch ($titleinfos['content_type']){
                                                    case 'serie': ?>
                                        <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات';}else{echo $titleinfos['episodes']; } ?></li>
                                        <?php break;

                                                        case 'tvshow': ?>
                                        <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات.';}else{echo $titleinfos['episodes']; } ?></li>

                                        <li class="list-item p-a-0"><b class="inline">نوع البرنامج: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة نوع البرنامج.';}else{echo  datasignif($titleinfos['tvshow_type'],'tvt'); } ?></li>

                                        <?php break;

                                                        case 'movie': ?>

                                        <?php break;
                                                }?>


                                        <?php $x=1; 
                                                    if(is_array(json_decode($titleinfos['origin_net']))){ ?>
                                        <li class="list-item p-a-0"><b class="inline">الشبكات المنتجة: </b>
                                            <?php
                                                    foreach(json_decode($titleinfos['origin_net']) as $gr){ $x++;?>
                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                            <?php }; ?></li>
                                        <?php } ?>


                                        <?php switch ($titleinfos['content_type']){
                                                    case 'serie' || 'tvshow': ?>

                                        <?php
                                                        
                                                        if ($titleinfos['episodes']!='0' && $titleinfos['episodes']!='' && is_numeric($titleinfos['episodes'])){
                                                            $epc=true;
                                                        }else{$epc=false;}
                                                        
                                                        if ($titleinfos['duration']!='0' && $titleinfos['duration']!='' && is_numeric($titleinfos['duration'])){
                                                            $dur=true;
                                                        }else{$dur=false;}
                                                        
                                                        if ($epc && $dur){
                                                            $fd=$titleinfos['duration']*$titleinfos['episodes'];
                                                            ?> <li class="list-item p-a-0"><b class="inline">المدة: </b> <?php echo $fd ?> دقيقة.</li>

                                        <?php
                                                        }else{
                                                            
                                                        }
                                                    ?>


                                        <?php break;

                                                       
                                                
                                                  

                                                        case 'movie': ?>

                                        <?php
                                                        
                                                        
                                                        
                                                        if ($titleinfos['duration']!='0' || $titleinfos['duration']!=''){
                                                            $dur=true;
                                                        }else{$dur=false;}
                                                        
                                                        if ($epc && $dur){
                                                            $fd=$titleinfos['duration'];
                                                            ?> <li class="list-item p-a-0"><b class="inline">المدة: </b> <?php echo $fd ?> دقيقة.</li>

                                        <?php
                                                        }else{
                                                            
                                                        }
                                                    ?>

                                        <?php break;
                                                }?>


                                        <li class="list-item p-a-0"><b class="inline">التقييم: </b> <?php echo $titledetail['postRa']; ?> <span class="hft">(من قبل <a href=""><?php echo $titledetail['raters']; ?> مستعمل</a>)</span></li>
                                        <li class="list-item p-a-0"><b class="inline">تصنيف المحتوى: </b><?php echo  datasignif($titleinfos['content_rate'],'content_rate'); ?></li>

                                        <li class="list-item p-a-0" style="display:block;"><b class="inline">المشاهدون: </b><?php echo $titledetail['watchers']; ?></li>
                                    </ul>
                                </div>
                            </div>

                         
                           
                            <div class="title-contributors box">
                                <div class="box-header b-b">
                                    <h2>أعلى المساهمين</h2>
                                </div>
                                <div class="box-body">
                                    <?php 
                                    
                                    $stmto = $conn->prepare("SELECT COUNT(id) as wr,wn,idU FROM mission WHERE status='Accepted' GROUP BY idU ORDER BY wr DESC LIMIT 4");
                                    $stmto->execute();
                                    $resulto=$stmto->get_result();
                                    $n=0;
                                    while($of=$resulto->fetch_assoc()){ $n++;
                                                                       
                                                                       
                                    ?>
                                    <div class="contributor"> <a class="author-avatar" href="profile?id=<?php echo $of['idU'] ?>"><img src="process/<?php $usr=userinfo($of['idU']); echo $usr['picture'] ?>" class="avatar w-40" alt=""></a>
                                        <div class="details">
                                            <div><a class="text-primary" href="profile.php?id=<?php echo $of['idU'] ?>"><b><?php echo $usr['username'] ?></b></a></div>
                                            
                                            <div><?php echo $of['wr']; ?> تعديلا</div>
                                        </div>
                                    </div>
                                    
                                    <?php } ?>
                                   
                                </div>
                            </div>
                            
                            <div class="box clear">
                                <div class="box-header primary">
                                    <h3>اعلى اللوائح تصويتا</h3><small></small>
                                    <div class="box-tool"  style="right:80%" ><a href="addlist.php">انشئ لائحة</a></div>
                                </div>
                                <?php getlastdes('pup_vote_per'); ?>

                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h3>شاهدته مؤخرا</h3>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <div class="box-body text-center box-watched-by">
                                    <?php
                                        $id=$titleinfos['id'];
                                        $stmtA1 = $conn->prepare("SELECT * FROM rate WHERE (status='finish' OR status='curw') AND idT=? ");
                                        $stmtA1->bind_param("s",$id);
                                        $stmtA1->execute();
                                        $resultA1=$stmtA1->get_result();
                                        $empd=$resultA1->num_rows==0;
                                     ?>

                                    <?php if($empd){echo '<div style="text-align:center"><p>لم يشاهد اي احد العمل بعد</p></div>';}else{while($p=$resultA1->fetch_assoc()){ ?>
                                    <span rel="tooltip" class="w-38 avatar in-link" title="<?php echo userinfo($p['idU'])['username']; ?>" data-href="profile?id=<?php echo $p['idU']; ?>"> <img class="img-responsive" src="process/<?php echo userinfo($p['idU'])['picture']; ?>"> </span>
                                    <?php }} ?>


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
<?php }}else{
        header("location:actors.php");
    } ?>
