<?php
ob_start();
session_start();
include("process/conn.php");
include("process/iama.php");


 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id']) && isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('manager',$_SESSION['id'])) || $_SESSION['type']=='1') ){
    
$userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM postedit WHERE id=?");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    $edit=$resultA->fetch_assoc();
    
    
    $stmtA = $conn->prepare("SELECT * FROM title WHERE id=?");
    $stmtA->bind_param("s", $edit['idO']);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:admin_management.php');}else{
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
    <title><?php echo 'قبول تعديلات العمل '.$titleinfos['title']; ?></title>
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
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


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
    <?php include("menu.php"); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid title-container" itemscopex="" itemtypex="http://schema.org/TVSeries">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-right">
                        <div class="box">
                            <div class="box-header box-navbar">
                                <h1 class="film-title"><a href="#" title="<?php echo $titleinfos['title'] ?>">
                                    
                                    <?php echo $titleinfos['title'] ?>
                                    
                                    </a> 
                                    
                                    (<?php echo substr($titleinfos['p_date'],6,9); $titleinfos['year']=substr($titleinfos['p_date'],6,9); ?>)
                                    
                                    
                                    <?php if($titleinfos['title']==$edit['title']){}else{ $et=$edit["title"]; echo " [تعديل: $et]";} ?>
                                </h1>
                                
                            </div>
                           
                            
                          
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
                                    <div class="col-sm-4 film-cover cover"> <a href="#" itempropx="url"></a> <a style="display: block;" href="#" title="<?php echo $titleinfos['title'] ?> (<?php echo $titleinfos['year'] ?>) poster">
                                        
                                        <?php if($edit["image"]==''){$img=$titleinfos['image'];}else{$img=$edit['image']; echo '[تعديل: تم تعديل الصورة]';} ?>
                                        <img class="img-responsive" itempropx="image" src="process/<?php echo $img ?>" alt="<?php echo $titleinfos['title'] ?> poster">
                                        
                                        </a>
                                        
                                    </div>
                                    <div id="show-detailsxx" class="col-sm-8">
                                        

                                        <hr class="m-t-sm m-b-sm">
                                        <div class="show-synopsis">
                                            <b class="inline">الملخص</b>
                                            <p><?php echo $titleinfos['synopsis'] ?><?php if($titleinfos['synopsis']==$edit['synopsis']){}else{ $et=$edit["synopsis"]; echo "<b> [تعديل: $et]</b>";} ?></p>
                                        </div>
                                        
                                        <div class="show-synopsis">
                                            <b class="inline">تاريخ الاصدار</b>
                                            <p><?php if($titleinfos['p_date']==''){ echo 'لم يتم إضافته';}else{ echo $titleinfos['p_date']; } ?>
                                            <?php if($titleinfos['p_date']==$edit['p_date']){}else{ $et=$edit["p_date"]; echo "<b> [تعديل: $et]</b>";} ?></p>
                                        </div>
                                        
                                        <div class="show-synopsis">
                                            <b class="inline">تاريخ الانتهاء</b>
                                            <p><?php if($titleinfos['f_date']==''){ echo 'لم يتم إضافته';}else{ echo $titleinfos['f_date']; } ?><?php if($titleinfos['f_date']==$edit['f_date']){}else{ $et=$edit["f_date"]; echo "<b> [تعديل: $et]</b>";} ?></p>
                                        </div>
                                        
                                        <div class="show-synopsis">
                                            <b class="inline">الاقتراحات من</b>
                                            <p><a href="profile.php?id=<?php echo $edit['auther_id'] ?>" >
                                                <img style="width:30px; height:30px;margin-left: 10px" src="process/<?php echo userinfo($edit['auther_id'])['picture']; ?>">  <?php echo userinfo($edit['auther_id'])['username']; ?>
                                               </a>
                                            </p>
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
                                                        <?php $one=explode(',',$edit['other_names']); ?>
                                                        <?php foreach ($on as $o){ ?>
                                                            <a href="#" title="<?php echo $o; ?>"><?php echo $o; ?></a>
                                                        
                                                             <?php if(in_array($o,$one)){}else{ ?>
                                                                    <b>[ إقتراح حذف:  : <a href="#" title="<?php echo $o; ?>"><?php echo $o; ?></a>]</b>
                                                             <?php } ?>
                                                        
                                                        <?php } ?>
                                                        
                                                        
                                                        
                                                        <?php foreach ($one as $oe){ ?>
                                                            
                                                                <?php if(in_array($oe,$on)){}else{ ?>
                                                                    <?php if($oe==''){}else{ ?>
                                                                        <b>[ إضافة : <a href="#" title="<?php echo $oe; ?>"><?php echo $oe; ?></a>]</b>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                                
                                                        <?php } ?>
                                                        
                                                    </span> </li>

                                                <?php $casi=titleCD($titleinfos['id'],'work','dir'); ?>
                                                <li class="list-item p-a-0">
                                                    <b class="inline">الاخراج:</b>
                                                    <?php if (!$casi){ echo "<p> لم يتم اضافة اي مخرج. </p>";}else{ ?>
                                                    <?php $x=1;foreach($casi as $cas){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>

                                                    <a class="text-primary" href="persone.php?id=<?php echo $cas['idop']; ?>"><?php echo $cas['fname'].' '.$cas['lname']; ?></a>
                                                    <?php }} ?>

                                                    <?php $casi=titleCD($titleinfos['id'],'work','scrdir'); ?>
                                                    
                                                    <?php
                                                    $stmtu = $conn->prepare("
                                                        SELECT 

                                                        editwork.idP,
                                                        editwork.idT,
                                                        editwork.id,
                                                        editwork.type,
                                                        editwork.format,

                                                        persones.fname,
                                                        persones.lname,
                                                        persones.id as idop

                                                        FROM editwork JOIN persones ON editwork.idP=persones.id  WHERE editwork.idT=? AND editwork.type='work' AND editwork.format='scrdir' GROUP BY editwork.idP  ");

                                                        $stmtu->bind_param("s", $edit['id']);
                                                        $stmtu->execute();
                                                        $resultu=$stmtu->get_result();

                                                            $res=[];

                                                        while ($r=$resultu->fetch_assoc()){
                                                            array_push($res,$r);
                                                        }
                                                    ?>
                                                    <br>
                                                    [ إقتراح المستعمل: 
                                                    <?php 
                                                    
                                                      $x=1;foreach($res as $cas){ ?>
                                                    
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>
                                                        
                                                        <a class="text-primary" href="persone.php?id=<?php echo $cas['idop']; ?>"><?php echo $cas['fname'].' '.$cas['lname']; ?></a>
                                                    
                                                    <?php }
                                                    
                                                    ?>
                                                    ]
                                                    <br>
                                                    <?php if (!$casi){}else{ ?>
                                                    <?php $x=1;foreach($casi as $cas){ ?>
                                                    
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>
                                                    
                                                        <a class="text-primary" href="persone.php?id=<?php echo $cas['idop']; ?>"><?php echo $cas['fname'].' '.$cas['lname']; ?></a>
                                                    
                                                    <?php }} ?>
                                                </li>
                                                
                                                <?php $casi=titleCD($titleinfos['id'],'work','scrwr'); ?>

                                                <li class="list-item p-a-0"><b class="inline">سيناريو:</b>
                                                    
                                                    
                                                    <?php
                                                    $stmtu = $conn->prepare("
                                                        SELECT 

                                                        editwork.idP,
                                                        editwork.idT,
                                                        editwork.id,
                                                        editwork.type,
                                                        editwork.format,

                                                        persones.fname,
                                                        persones.lname,
                                                        persones.id as idop

                                                        FROM editwork JOIN persones ON editwork.idP=persones.id  WHERE editwork.idT=? AND editwork.type='work' AND editwork.format='scrwr' GROUP BY editwork.idP  ");

                                                        $stmtu->bind_param("s", $edit['id']);
                                                        $stmtu->execute();
                                                        $resultu=$stmtu->get_result();

                                                            $res=[];

                                                        while ($r=$resultu->fetch_assoc()){
                                                            array_push($res,$r);
                                                        }
                                                    ?>
                                                    <br>
                                                    [ إقتراح المستعمل: 
                                                    <?php 
                                                    
                                                    $x=1;foreach($res as $cas){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>
                                                        
                                                        <a class="text-primary" href="persone.php?id=<?php echo $cas['idop']; ?>"><?php echo $cas['fname'].' '.$cas['lname']; ?></a>
                                                    
                                                    <?php }
                                                    
                                                    ?>
                                                    ]
                                                    <br>
                                                    <?php if (!$casi){ echo "<p> لم يتم اضافة اي سيناريست. </p>";}else{ ?>
                                                    <?php $x=1;foreach($casi as $cas){ ?>
                                                    <?php $x++; if($x=='2'){}else{echo ',';}?>

                                                    <a class="text-primary" href="persone.php?id=<?php echo $cas['idop']; ?>"><?php echo $cas['fname'].' '.$cas['lname']; ?></a>
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
                                                
                                                <li class="list-item p-a-0"><b class="inline">الدولة:</b> <?php  echo datasignif($titleinfos['country'],'countryN'); ?><?php if($titleinfos['country']==$edit['country']){}else{ $et=datasignif($edit['country'],'countryN'); echo "<b> [تعديل: $et]</b>";} ?> <i class="flag flags-c2"></i></li>
                                                
                                                <li class="list-item p-a-0"><b class="inline">النوع:</b> <?php echo datasignif($titleinfos['content_type'],'type'); ?><?php if($titleinfos['content_type']==$edit['content_type']){}else{ $et=datasignif($edit['content_type'],'type'); echo "<b> [تعديل: $et]</b>";} ?></li>

                                                <?php switch ($titleinfos['content_type']){
                                                    case 'serie': ?>
                                                <li class="list-item p-a-0"><b class="inline">الحلقات:</b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات';}else{echo $titleinfos['episodes']; } ?></li>
                                                <?php break;

                                                        case 'tvshow': ?>
                                                <li class="list-item p-a-0"><b class="inline">الحلقات:</b> <?php if($titleinfos['tvshow']=='' || $titleinfos['tvshow']=='0'){echo 'لم يتم نوع البرنامج.';}else{echo  datasignif($titleinfos['tvshow_type'],'tvt'); } ?></li>

                                                <li class="list-item p-a-0"><b class="inline">نوع البرنامج:</b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم عدد الحلقات';}else{echo $titleinfos['episodes']; } ?></li>

                                                <?php break;

                                                        case 'movie': ?>

                                                <?php break;
                                                }?>


                                                <li class="list-item p-a-0"><b class="inline">الشبكات المنتجة:</b><?php $x=1; foreach(json_decode($titleinfos['origin_net']) as $gr){ $x++;?>
                                                    
                                                    <?php foreach(json_decode($edits['origin_net']) as $gre){ ?>
                                                        
                                                        <?php if(in_array(json_decode($edits['origin_net']),$gr)){ ?>
                                                    
                                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                    
                                                        <?php }else{ ?>
                                                            [ إقتراح حذف: 
                                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                            ]
                                                        <?php } ?>

                                                    <?php }}; ?></li>
                                                
                                                    <?php $y=1; foreach(json_decode($edits['origin_net']) as $gre){ $y++; ?>
                                                            <?php if(in_array(json_decode($titleinfos['origin_net']),$gre)){ ?>
                                                    
                                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                                            [ إقتراح إضافة: 
                                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                            ]
                                                    
                                                            <?php } ?>
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


                                                <li class="list-item p-a-0"><b class="inline">تصنيف المحتوى:</b><?php echo  datasignif($titleinfos['content_rate'],'content_rate'); ?></li>



                                                ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    
                                    
                                    
                                    
                                    <?php }elseif ($cas){ ?>
                                    <?php        
                                        $stmtA = $conn->prepare("SELECT work.idP, work.idT, work.id, work.chara, work.type, work.format ,persones.fname, persones.lname, persones.id, persones.picture FROM work JOIN persones ON persones.id=work.idP WHERE idT=? AND type!='related' ");
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
                                    
                                    
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="">
                        <div class="">

                            <div class="">
                                <div class="box-header primary">
                                    <h3>تفاصيل</h3>
                                </div>
                                <div class="box-body light-b">
                                    <ul class="list m-b-0">
                                        <li class="list-item p-a-0"><b class="inline">الدولة:</b> <?php  echo datasignif($titleinfos['country'],'countryN'); ?> <?php if($titleinfos['country']==$edit['country']){}else{ $et=datasignif($edit['country'],'countryN'); echo "<b> [تعديل: $et]</b>";} ?><i class="flag flags-c2"></i></li>
                                        <li class="list-item p-a-0"><b class="inline">النوع:</b> <?php echo datasignif($titleinfos['content_type'],'type'); ?><?php if($titleinfos['content_type']==$edit['content_type']){}else{ $et=datasignif($edit['content_type'],'type'); echo "<b> [تعديل: $et]</b>";} ?></li>

                                        <?php switch ($titleinfos['content_type']){
                                                    case 'serie': ?>
                                                    
                                                    <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات';}else{echo $titleinfos['episodes']; } ?>
                                                    </li>
                                        
                                        
                                        <?php break;

                                        case 'tvshow': ?>
                                        <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات.';}else{echo $titleinfos['episodes']; } ?></li>

                                        <li class="list-item p-a-0"><b class="inline">نوع البرنامج: </b> <?php if($titleinfos['episodes']=='' || $titleinfos['episodes']=='0'){echo 'لم يتم إضافة نوع البرنامج.';}else{echo  datasignif($titleinfos['tvshow_type'],'tvt'); } ?></li>

                                        <?php break;

                                                        case 'movie': ?>

                                        <?php break;
                                                } ?><?php if($titleinfos['content_type']==$edit['content_type']){}else{ ?>
                                                
                                        
                                        
                                            <?php switch ($edit['content_type']){
                                                    case 'serie': ?>
                                                    
                                                    [تعديل : <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($edit['episodes']=='' || $edit['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات';}else{echo $edit['episodes']; } ?>
                                                    </li> ]
                                        
                                        
                                        <?php break;

                                        case 'tvshow': ?>
                                        
                                                [تعديل:  <li class="list-item p-a-0"><b class="inline">الحلقات: </b> <?php if($edit['episodes']=='' || $edit['episodes']=='0'){echo 'لم يتم إضافة عدد الحلقات.';}else{echo $edit['episodes']; } ?></li>]

                                                [تعديل: <li class="list-item p-a-0"><b class="inline">نوع البرنامج: </b> <?php if($edit['episodes']=='' || $edit['episodes']=='0'){echo 'لم يتم إضافة نوع البرنامج.';}else{echo  datasignif($edit['tvshow_type'],'tvt'); } ?></li>]

                                        <?php break;

                                                        case 'movie': ?>

                                        <?php break;
                                                } ?>
                    
                                               <?php } ?>

                                        
                                        <li class="list-item p-a-0"><b class="inline">الشبكات المنتجة: </b>
                                            <?php foreach(json_decode($titleinfos['origin_net']) as $gr){ $x++;?>
                                                    
                                                    
                                                        
                                                        <?php $net=json_decode($edit['origin_net']); if(is_null($net)){$net=[];}; if(in_array($gr,$net)){ ?>
                                                    
                                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                    
                                                        <?php }else{ ?>
                                                            [ إقتراح حذف: 
                                                            <?php if($x=='2'){}else{echo '، ';} ?>
                                                            <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                            ]
                                                        <?php } ?>

                                                    <?php }; ?>
                                                
                                                    <?php $y=1; foreach($net as $gr){ $y++; ?>
                                                            <?php if(in_array($gr,json_decode($titleinfos['origin_net']))){}else{ ?>
                                                    
                                                                <?php if($x=='2'){}else{echo '، ';} ?>
                                                                [ إقتراح إضافة: 
                                                                <span><a class="text-primary" href="#"> <?php echo  $gr; ?></a></span>
                                                                ]

                                                            <?php } ?>
                                                    <?php } ?></li>
                                       


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


                                        <li class="list-item p-a-0"><b class="inline">تصنيف المحتوى: </b>
                                            <?php if($titleinfos['content_rate']==$edit['content_rate']){ ?>
                                            <?php echo  datasignif($titleinfos['content_rate'],'content_rate'); ?>
                                            <?php }else{ ?>
                                            
                                            <?php echo  datasignif($titleinfos['content_rate'],'content_rate'); ?>
                                            [تعديل: <b><?php echo  datasignif($edit['content_rate'],'content_rate'); ?></b>]
                                            <?php } ?>
                                            
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            
                            
                            
                            
                            

                            
                           

                        </div>
                    </div>
                        <div class="box clear" id="castD">
                            <div class="box-header light-b-dk">
                                <h3>الممثلين &amp; طاقم العمل</h3>
                            </div>
                            
                            <?php
        
                                                    $stmtA = $conn->prepare("SELECT work.idP, work.idT, work.id, work.chara, work.type, work.format ,persones.fname, persones.lname, persones.id, persones.picture FROM work JOIN persones ON persones.id=work.idP WHERE work.idT=? AND work.type='act'");
                                                    $stmtA->bind_param("s", $edit['idO']);
                                                    $stmtA->execute();
                                                    $resultA=$stmtA->get_result();                                     
    
                                                ?>

                            <div class="box-divider m-a-0"></div>
                            <div class="p-a-sm">
                                <ul class="list no-border p-b">
                                    <?php while($cast=$resultA->fetch_assoc()){ ?>
                                        
                                            <li class="list-item col-sm-4">
                                                <div class="col-xs-8 col-sm-7 p-a-0" xitempropx="actor" itemscopex=""> <a href="persone.php?id=<?php echo $cast['idP'] ?>" class="text-primary text-ellipsis" itempropx="url" title="<?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?>"><b itempropx="name"><?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?></b></a>
                                                    <div class="text-ellipsis">
                                                        <small>
                                                            <a class="text-primary"><?php echo $cast['chara']; ?></a>
                                                        </small>
                                                    </div>
                                                    
                                                    <small class="text-muted">
                                                        <?php echo datasignif($cast['format'],'role'); ?>
                                                    </small>
                                                </div>

                                                <div class="col-xs-4 col-sm-5 p-r p-l-0"><a href="persone.php?id=<?php echo $cast['idP'] ?>"><img class="img-responsive mdl-rounded" src="process/<?php echo $cast['picture'] ?>" title="" alt=""></a></div>
                                            </li>
                                        
                                    <?php } ?>

                                </ul>
                                <div class="clearfix"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="box clear" id="castD">
                            <div class="box-header light-b-dk">
                                <h3>الممثلين &amp; طاقم العمل [إقتراح المستعمل ]</h3>
                            </div>

                            <?php
        
                                                    $stmtA = $conn->prepare("SELECT editwork.idP, editwork.idT, editwork.id, editwork.chara, editwork.type, editwork.format ,persones.fname, persones.lname, persones.id, persones.picture FROM editwork JOIN persones ON persones.id=editwork.idP WHERE editwork.idT=? AND editwork.type='act'");
                                                    $stmtA->bind_param("s", $edit['id']);
                                                    $stmtA->execute();
                                                    $resultA=$stmtA->get_result();                                     
    
                                                ?>

                            <div class="box-divider m-a-0"></div>
                            <div class="p-a-sm">
                                <ul class="list no-border p-b">
                                    <?php while($cast=$resultA->fetch_assoc()){ ?>
                                        
                                            <li class="list-item col-sm-4">
                                                <div class="col-xs-8 col-sm-7 p-a-0" xitempropx="actor" itemscopex=""> <a href="persone.php?id=<?php echo $cast['idP'] ?>" class="text-primary text-ellipsis" itempropx="url" title="<?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?>"><b itempropx="name"><?php echo $cast['fname'] ?> <?php echo $cast['lname'] ?></b></a>
                                                    <div class="text-ellipsis">
                                                        <small>
                                                            <a class="text-primary"><?php echo $cast['chara']; ?></a>
                                                        </small>
                                                    </div>
                                                    
                                                    <small class="text-muted">
                                                        <?php echo datasignif($cast['format'],'role'); ?>
                                                    </small>
                                                </div>

                                                <div class="col-xs-4 col-sm-5 p-r p-l-0"><a href="persone.php?id=<?php echo $cast['idP'] ?>"><img class="img-responsive mdl-rounded" src="process/<?php echo $cast['picture'] ?>" title="" alt=""></a></div>
                                            </li>
                                        
                                    <?php } ?>

                                </ul>
                                <div class="clearfix"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div id="cmtsapp" pid="232" ptype="actor" title="" class="box comments-box post-comments" style="min-height: 100px;">
                            <div class="box-header b-b">
                                <h3>عن المشاركة <span></span></h3>
                            </div>
                            <div style="padding:20px;">
                            <p><?php echo $edit['note']; ?></p>
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
