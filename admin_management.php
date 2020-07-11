<?php session_start();
include("process/conn.php");
include("process/iama.php");
if (isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('manager',$_SESSION['id'])) || $_SESSION['type']=='1') ){



?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>لوحة التحكم - المشاركات</title>
    <link rel="stylesheet" href="css/styled.css">
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
    <script src="js/standalone/selectize.min.js"></script>

    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    <script type="text/javascript" src="dist/en/js/summernote.min.js"></script>
    <script type="text/javascript" src="js/summernote-ar-AR.js"></script>
    <script type="text/javascript" src="js/selectize.min.js"></script>
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/selectize.bootstrap3.css">



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

                    <style>
                        .note-popover {
                            z-index: 99999;
                        }

                    </style>

                    <div class="col-lg-11 tab-content">
                        <div role="tabpanel" id="send" class="box tab-pane  fade in " role="tabpanel">
                        </div>
                        <div id="inbox" class="box tab-pane fade in active" role="tabpanel">
                            <div class="box-header">
                                <h1>تنظيم المشاركات</h1>
                            </div>
                            <div class="box-body" style="min-height: 300px;">

                                <div>
                                    <!-- tabs -->
                                    <div>
                                        <div class="row">
                                            <?php 
                                        $f=[];
                                        $stmte = $conn->prepare("SELECT count(id) as topics FROM title WHERE content_type='serie' ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topics']=$resulte->fetch_assoc()['topics'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as topT FROM title WHERE content_type='serie' AND DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topT']=$resulte->fetch_assoc()['topT'];
    
                                        $stmte = $conn->prepare(" SELECT count(id) as visits FROM title WHERE content_type='movie'");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comments']=$resulte->fetch_assoc()['visits'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as comT FROM title WHERE content_type='movie' AND DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comT']=$resulte->fetch_assoc()['comT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as forum FROM title WHERE content_type='tvshow'");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forum']=$resulte->fetch_assoc()['forum'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as forT FROM title WHERE content_type='tvshow' AND DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forT']=$resulte->fetch_assoc()['forT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as gde FROM mission WHERE status='0' AND idA=?");
                                        $stmte->bind_param('s',$_SESSION['id']);
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gde']=$resulte->fetch_assoc()['gde'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as gdeT FROM mission WHERE status='0' AND DATE(`wn`) = CURDATE() AND idA=? ");
                                        $stmte->bind_param('s',$_SESSION['id']);
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
                                                            <h2>الافلام</h2>
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
                                                            <h2>البرامج التلفزية</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['forum']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
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
                                                            <h2>الدراما</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">

                                                                <h3><span></span><span class="counter"><?php echo $f['topics']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
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
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30" <?php if($f['gde']=='0'){}else{ echo 'style="border:2px solid #f99224"';} ?>>
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>المهام</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['gde']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">

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

                                            <div class="col-lg-12">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title" style="background-color:#f99224">
                                                        <div class="main-income-head">
                                                            <h2>قائمة المهام</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="static-table-list">
                                                            <table class="table hover-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="text-align:center">المهمة</th>
                                                                        <th style="text-align:center">اسم المستعمل</th>
                                                                        <th style="text-align:center">المهمة</th>
                                                                        <th style="text-align:center">تاريخ الاضافة</th>
                                                                        <th style="text-align:center">خيارات</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody style="text-align:center">
                                                                    <?php $myid=$_SESSION['id'];
                                                $stmw = $conn->prepare("SELECT * FROM mission WHERE idA=? AND status='0' ORDER BY wn ASC");
                                                $stmw->bind_param('s',$myid);                                                                 
                                                $stmw->execute();
                                                $r=$stmw->get_result();
                                                ?>

                                                                    <?php $x=0; while($ms=$r->fetch_assoc()){ $x++ ;
                                                switch ($ms['type']){
                                                    case 'addTitle':
                                                        $m='مصادقة على <b>عنوان</b>';
                                                        $link="postcheck.php";
                                                    break;
                                                        
                                                    case 'addPers':
                                                        $m='مصادقة على <b>فنان</b>';
                                                        $link="personecheck.php";
                                                    break;
                                                        
                                                    case 'edititle':
                                                        $m='مصادقة على <b> تعديل على عنوان</b>';
                                                        $link="editTcheck.php";
                                                    break;
                                                        
                                                    case 'edipersone':
                                                        $m='مصادقة على <b> تعديل على فنان</b>';
                                                        $link="editPcheck.php";
                                                    break;
                                                }
                                                
                                                ?>
                                                                    <tr id="mana<?php echo $ms['id']; ?>">
                                                                        <td><?php echo $x; ?></td>
                                                                        <td><?php echo userinfo($ms['idU'])['username']; ?></td>
                                                                        <td><?php echo $m; ?></td>
                                                                        <td>
                                                                            <script type="application/javascript">
                                                                                moment.locale("ar_AL");
                                                                                document.write(moment('<?php echo $ms['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                            </script>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                        if($ms['type']=='edititle'){
                                                            $stmwi = $conn->prepare("SELECT * FROM postedit WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                        ?>

                                                                            <button data-im="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['image'] ;} ?>" data-name="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['title'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="acceptTitle('<?php echo $ms['id'] ?>',this,'edit')" class="btn btn-success">قبول <i class="fa fa-check"></i>
                                                                            </button>

                                                                            <?php
                                                        }elseif ($ms['type']=='edipersone'){
                                                            $stmwi = $conn->prepare("SELECT * FROM editpers WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                        ?>

                                                                            <button data-im="<?php if($ms['type']=='edipersone'){echo personeinfo($si['idO'])['picture'] ;}else{echo personeinfo($si['idO'])['picture'] ;} ?>" data-name="<?php if($ms['type']=='edipersone'){echo personeinfo($si['idO'])['fname'].' '.personeinfo($si['idO'])['lname'] ;}else{echo personeinfo($si['idO'])['fname'].' '.personeinfo($si['idO'])['lname'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="acceptTitle('<?php echo $ms['id'] ?>',this,'edit')" class="btn btn-success">قبول <i class="fa fa-check"></i>
                                                                            </button>

                                                <?php }elseif ($ms['type']=='addTitle'){
                                                            $stmwi = $conn->prepare("SELECT * FROM title WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                        ?>

                                                                            <button data-im="<?php if($ms['type']=='addTitle'){echo $si['image'] ;}else{echo personeinfo($ms['idT'])['picture'] ;} ?>" data-name="<?php if($ms['type']=='addTitle'){echo $si['title'] ;}else{echo personeinfo($ms['idT'])['fname'].' '.personeinfo($ms['idT'])['lname'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="acceptTitle('<?php echo $ms['id'] ?>',this,'new')" class="btn btn-success">قبول <i class="fa fa-check"></i>
                                                                            </button>

                                               <?php }elseif ($ms['type']=='addPers'){
                                                            $stmwi = $conn->prepare("SELECT * FROM persones WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                        ?>

                                                                            <button data-im="<?php if($ms['type']=='addTitle'){echo $si['image'] ;}else{echo $si['picture'] ;} ?>" data-name="<?php if($ms['type']=='addTitle'){echo $si['title'] ;}else{echo $si['fname'].' '.$si['lname'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="acceptTitle('<?php echo $ms['id'] ?>',this,'new')" class="btn btn-success">قبول <i class="fa fa-check"></i>
                                                                            </button>

                                               <?php }  ?>


                                                                            <button class="btn btn-info"><a target="_blank" href="<?php echo $link; ?>?id=<?php echo $ms['idT']; ?>">تفقد <i class="fa fa-eye"></i></a></button>




                                                                            <?php  if($ms['type']=='edititle'){
                                                            
                                                            $stmwi = $conn->prepare("SELECT * FROM postedit WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                            
                                                         ?>

                                                                            <button data-im="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['image'] ;} ?>" data-name="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['title'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>"   onclick="refuseTitle('<?php echo $ms['id'] ?>',this,'edit')" class="btn btn-danger">رفض <i class="fa fa-times"></i>

                                                                            </button>

                                                                            <?php }elseif($ms['type']=='addTitle'){
                                                            
                                                            $stmwi = $conn->prepare("SELECT * FROM title WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                            
                                                         ?>

                                                                            <button  data-im="<?php if($ms['type']=='addTitle'){echo $si['image'] ;}else{echo personeinfo($ms['idT'])['picture'] ;} ?>" data-name="<?php if($ms['type']=='addTitle'){echo $si['title'] ;}else{echo personeinfo($ms['idT'])['fname'].' '.personeinfo($ms['idT'])['lname'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="refuseTitle('<?php echo $ms['id'] ?>',this,'edit')" class="btn btn-danger">رفض <i class="fa fa-times"></i>

                                                                            </button>

                                                                            <?php }elseif($ms['type']=='addPers'){
                                                            
                                                            $stmwi = $conn->prepare("SELECT * FROM persones WHERE id=?");
                                                            $stmwi->bind_param('s',$ms['idT']);
                                                            $stmwi->execute();
                                                            $ri=$stmwi->get_result();
                                                            $si=$ri->fetch_assoc();
                                                            
                                                         ?>

                                                                            <button data-im="<?php if($ms['type']=='addTitle'){echo $si['image'] ;}else{echo $si['picture'] ;} ?>" data-name="<?php if($ms['type']=='addTitle'){echo $si['title'] ;}else{echo $si['fname'].' '.$si['lname'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>"  onclick="refuseTitle('<?php echo $ms['id'] ?>',this,'edit')" class="btn btn-danger">رفض <i class="fa fa-times"></i>

                                                                            </button>

                                                                            <?php }elseif($ms['type']=='edipersone'){ ?>

                                                                            <button data-im="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['image'] ;} ?>" data-name="<?php if($ms['type']=='edititle'){echo titleinfo($si['idO'])['title'] ;} ?>" data-user="<?php echo userinfo($ms['idU'])['username'] ; ?>" onclick="refuseTitle('<?php echo $ms['id'] ?>',this,'new')" class="btn btn-danger">رفض <i class="fa fa-times"></i>

                                                                            </button>



                                                                            <?php } ?>



                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        
                                                                <?php $stmwi = $conn->prepare("SELECT title.title,title.image,title.content_type,count(likes.id) as lk,likes.postT,likes.idP FROM title JOIN likes ON likes.idP = title.id WHERE admin_o='1' AND content_type='serie' AND likes.postT='dr' GROUP BY title.id ORDER BY lk DESC LIMIT 1 ");
                                                                $stmwi->execute();
                                                                $ri=$stmwi->get_result();
                                                                $inf=$ri->fetch_assoc();
                                                                ?>
                                                        <div class="main-income-head" style="display: block ruby;">
                                                            <h2>أعلى فنان إعجابا</h2>
                                                            <h1  class="pull-left"><?php echo $inf['lk'] ?> <i style="color: red" class="fa fa-heart"></i></h1>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <div class="">
                                                            <div class="" style="padding: 27px;">

                                                                <img src="process/<?php echo $inf['image']; ?>" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h3><?php echo $inf['title']; ?></h3>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                         <?php $stmwi = $conn->prepare("SELECT persones.fname,persones.picture,persones.lname,count(likes.id) as lk,likes.postT,likes.idP FROM persones JOIN likes ON likes.idP = persones.id WHERE status='1' AND likes.postT='ac' GROUP BY persones.id ORDER BY lk DESC LIMIT 1 ");
                                                                $stmwi->execute();
                                                                $ri=$stmwi->get_result();
                                                                $inf=$ri->fetch_assoc();
                                                                ?>
                                                        <div class="main-income-head" style="display: block ruby;">
                                                            <h2>أعلى فيلم إعجابا</h2>
                                                            <h1  class="pull-left"><?php echo $inf['lk'] ?> <i style="color: red" class="fa fa-heart"></i></h1>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <div class="">
                                                            <div class="" style="padding: 27px;">

                                                               
                                                                <img src="process/<?php echo $inf['picture']; ?>" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h3><?php echo $inf['fname'].' '.$inf['lname']; ?></h3>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">

                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <?php $stmwi = $conn->prepare("SELECT title.title,title.image,title.content_type,title.content_type,count(likes.id) as lk,likes.postT,likes.idP FROM title JOIN likes ON likes.idP = title.id WHERE admin_o='1' AND content_type='serie' AND likes.postT='dr' GROUP BY title.id ORDER BY lk DESC LIMIT 1 ");
                                                                $stmwi->execute();
                                                                $ri=$stmwi->get_result();
                                                                $inf=$ri->fetch_assoc();
                                                                ?>
                                                        <div class="main-income-head" style="display: block ruby;">
                                                            <h2>أعلى دراما إعجابا</h2>
                                                            <h1  class="pull-left"><?php echo $inf['lk'] ?> <i style="color: red" class="fa fa-heart"></i></h1>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <div class="">
                                                            <div class="" style="padding: 27px;">

                                                                
                                                                <img src="process/<?php echo $inf['image']; ?>" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h3><?php echo $inf['title']; ?></h3>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- row -->


                                    </div>
                                </div>

                                <div>
                                    <!-- chart -->

                                </div>

                                <div>
                                    <!-- otherdata -->
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
    <div id="add_link" class="modal fade bd-example-modal-lg" role="dialog">
        <div class="modal-dialog  modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t"></h4>
                </div>
                <div class="modal-body">
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="text-center">
                                <label><b id="addedN"></b></label><br>
                                <img id="addedI" style="width:100px;height:50%" src="">
                            </div>
                        </div>

                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <label><b>الموضوع</b></label>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input id="subject" type="text" autocomplete="off" placeholder="أضف الموضوع هنا " class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label><b>الرسالة</b></label>
                        <textarea style="min-height:101px;" class="el-input__inner" value="" id="message"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="donecommB" data="">إضافة</button>
                </div>

            </div>
            <div class="el-loading-mask" id="loading" style="display: none;">
                <div class="el-loading-spinner">
                    <svg viewBox="25 25 50 50" class="circular">
                        <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                    </svg>

                </div>
            </div>
        </div>
    </div>




    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/feeds.js"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/AD.js"></script>
    <script type="application/javascript">
        live();

    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
