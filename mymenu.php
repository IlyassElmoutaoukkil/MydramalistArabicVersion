<!DOCTYPE html>
<?php
session_start();
include("process/conn.php");

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
        
?>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تقييم - قائمة <?php echo $user['username']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#015284" />
    <meta name="dailymotion-domain-verification" content="dmg5lpc1ng53ymvet" />


    <link rel="stylesheet" href="css/bootstrap/bootstrap.css?v=4.34.1d2">
    <link href="css/fontawesome/css/all.min.css?v=4.34.1a" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/app.css?v=4.34.1d2">
    <link rel="stylesheet" href="css/dramalist.css">
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
    <?php include("menu.php"); addvisite('mymenu'); ?>

<?php             
        
                                    $stmtu = $conn->prepare("SELECT 
                                                        
                                                        
                                                        rate.id as ratei,
                                                        rate.idT,
                                                        rate.idU,
                                                        rate.status,
                                                        rate.rate,
                                                        rate.epi_w,
                                                        
                                                        title.id,
                                                        title.title,
                                                        title.content_type,
                                                        title.duration,
                                                        
                                                        title.f_date,
                                                        title.country,
                                                  
                                                        title.episodes
                                                        
                                                        FROM rate JOIN title on rate.idT=title.id
                                                        
                                                        WHERE rate.idU=?  and title.status='1'
                                                        
                                                        ");
                                                      $stmtu->bind_param("s", $user['code']);
                                                      $stmtu->execute();
                                                      $resultu=$stmtu->get_result();
//{"id":17,"title":"sdfsdf","content_type":"tvshow","duration":"34","sumE":34,"episodes":"34","idT":"64","idU":"6KbjFdagD4H7fi2","status":"curw","sumW":5,"epi_w":"5"}                                           
                                                      $cw=[];
                                                      $fn=[];
                                                      $pl=[];
                                                      $ny=[];
                                                      $cl=[];
                                                      $nt=[];
        
                                                      while($rt=$resultu->fetch_assoc()){
                                                          switch ($rt['status']){
                                                                case 'curw': 
                                                                     array_push($cw,$rt); 
                                                                break;
                                                                  
                                                                case 'finish': 
                                                                     array_push($fn,$rt); 
                                                                break;
                                                                  
                                                                case 'planning': 
                                                                     array_push($pl,$rt); 
                                                                break;
                                                                  
                                                                case 'notfiniyet': 
                                                                     array_push($ny,$rt); 
                                                                break;
                                                                  
                                                                case 'canceledw': 
                                                                     array_push($cl,$rt); 
                                                                break;
                                                                  
                                                                case 'nitintr': 
                                                                     array_push($nt,$rt); 
                                                                break;
                                                          }
                                                         
                                                          
                                                          
                                                          
                                                          
                                                          //here we get the num of episodes and the duration
                                                      }
        

                                           
                                               
                                    ?>

<div id="content" class="slideout-panel slideout-panel-right">
    <div class="app-body">
        <div class="spnsr-wrapper-2014">
            <div class="spnsr-top-2014 is-desktop">
                <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CMuulKm0w-gCFQVEGwodDBMLWA">

                    <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/47261215/header_top_0" title="3rd party ad content" name="google_ads_iframe_/47261215/header_top_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="4" width="728" height="90" frameborder="0"></iframe></div>
                </div>
            </div>
        </div>
        <!-- MYDRAMALIST STYLE START -->
        <div class="container-fluid mdl-style-container">
            <!-- HEADER -->
            <?php if (isset($_SESSION['id']) && $user['code']==$_SESSION['id']){ ?>
<h1 class="mdl-style-header text-lg">قائمتي</h1> <!-- CONTENT -->            <?php }else{ ?>
<h1 class="mdl-style-header text-lg">مرحبا بك في قائمة  <a class="text-primary" href="profile.php?id=<?php echo $user['code']; ?>"><?php echo $user['username']; ?></a>.</h1> <!-- CONTENT -->            <?php } ?>
            
            <div class="style-default">
                <!-- NAVIGATION TABS DESKTOP -->
                <div class="mdl-style-nav-desktop clear nav-active-white r-t r-b primary m-b hidden-sm-down">
                    <ul class="mdl-style-tabs nav nav-tabs" id="menuT" style="float:right">
                        
                        <li <?php if (count($nt)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('nt',this)" class="page-item nav-item"><a class="nav-link" >غير مهتم بها</a></li>
                        <li <?php if (count($cl)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('cl',this)" class="page-item nav-item"><a class="nav-link" >ألغيت مشاهدتها</a></li>
                        <li <?php if (count($ny)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('ny',this)" class="page-item nav-item"><a class="nav-link" >لم اكملها بعد </a></li>
                        <li <?php if (count($pl)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('pl',this)" class="page-item nav-item"><a class="nav-link" >أخطط لمشاهدتها</a></li>
                        <li <?php if (count($fn)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('fn',this)" class="page-item nav-item"><a class="nav-link" >أكملتها</a></li>
                        <li <?php if (count($cw)=='0'){ ?> style="display:none" <?php } ?> onclick="thisS('cw',this)" class="page-item nav-item"><a class="nav-link" >أشاهده حاليا</a></li>
                        <li class="page-item nav-item active" onclick="thisS('all',this)" ><a class="nav-link" >دراما &amp; افلام </a></li>
                        
                        
                        
                        
                        
                        
                    </ul>
                </div>
                
                <script>
                    function thisS(t,e){
                        if (t=='all'){
                            
                            $("#menuT li").removeClass('active');
                            $(e).addClass('active');
                            $(".box").not( $(".box[data=true]") ).show();
                            
                        }else{
                            
                            $("#menuT li").removeClass('active');
                            $(e).addClass('active');
                            $(".box").hide();
                            $("#"+t).show();
                            
                        }
                        
                    }
                    function thisSM(e){
                        
                        var t = $("#omop").val();
                        
                        if (t=='all'){
                            
                            $(".box").not( $(".box[data=true]") ).show();
                            
                        }else{
                            
                            $(".box").hide();
                            $("#"+t).show();
                            
                        }
                        
                    }
                </script>
                <!-- NAVIGATION TABS MOBILE -->
                <div class="hidden-md-up mdl-style-nav-mobile"> <select id="omop" onchange="thisSM(this)" class="mdl-style-select dramalist-select form-control m-b-sm">
                        <option  value="all" selected="">دراما &amp; افلام </option>
                        <option <?php if (count($cw)=='0'){ ?> style="display:none" <?php } ?> value="cw">أشاهده حاليا</option>
                        <option <?php if (count($fn)=='0'){ ?> style="display:none" <?php } ?> value="fn">أكملته</option>
                        <option <?php if (count($pl)=='0'){ ?> style="display:none" <?php } ?> value="pl">أخطط لمشاهدته</option>
                        <option <?php if (count($ny)=='0'){ ?> style="display:none" <?php } ?> value="ny">لم اكمله بعد </option>
                        <option <?php if (count($cl)=='0'){ ?> style="display:none" <?php } ?> value="cl">ألغيت مشاهدته</option>
                        <option <?php if (count($nt)=='0'){ ?> style="display:none" <?php } ?> value="nt">غير مهتم بها</option>
                    </select>
                </div>
                
                
                
                
                
                <!-- LIST 1 -->
                <div <?php if (count($cw)=='0'){ ?> style="display:none" data="true" <?php } ?> id="cw" class="mdl-style-list mdl-style-list-1 box">
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">اشاهدها حاليا</h3>
                    </div>
                    <div class="mdl-style-list-body section mylist table-responsive">
                        <!-- LIST TABLE -->
                        <table id="list_1" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                                
                                
                                    
                                <?php $n=0; foreach ($cw as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                                
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'curw'); ?>
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                </div>
                <!-- LIST 2 -->
                <div class="mdl-style-list mdl-style-list-2 box" id="fn" <?php if (count($fn)=='0'){ ?> data="true" style="display:none" <?php } ?>>
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">اكملتها</h3>
                    </div>
                    
                    <div class="mdl-style-list-body section mylist table-responsive">
                        <!-- LIST TABLE -->
                        <table id="list_2" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $n=0; foreach ($fn as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'finish'); ?>
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                </div>
                <!-- LIST 4 -->
                <div class="mdl-style-list mdl-style-list-4 box"  id="pl" <?php if (count($pl)=='0'){ ?> data="true" style="display:none" <?php } ?>>
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">أخطط لمشاهدتها</h3>
                    </div>
                    <div class="mdl-style-list-body section mylist table-responsive">
                        <!-- LIST TABLE -->
                        <table id="list_4" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $n=0; foreach ($pl as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'planning'); ?>
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                </div>
                <!-- LIST 5 -->
                <div class="mdl-style-list mdl-style-list-5 box" id="cl" <?php if (count($cl)=='0'){ ?> data="true" style="display:none" <?php } ?>>
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">ألغيت مشاهدتها</h3>
                    </div>
                    <table id="list_4" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $n=0; foreach ($cl as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'canceledw'); ?>
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                
                
                
                
                <div class="mdl-style-list mdl-style-list-5 box" id="nt" <?php if (count($nt)=='0'){ ?> data="true" style="display:none" <?php } ?>>
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">غير مهتم بها</h3>
                    </div>
                    <table id="list_4" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $n=0; foreach ($nt as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'nitintr'); ?>
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                
                
                
                <div class="mdl-style-list mdl-style-list-5 box" id="ny" <?php if (count($ny)=='0'){ ?> data="true" style="display:none" <?php } ?>>
                    <!-- LIST HEADER -->
                    <div class="mdl-style-table-header box-header">
                        <!-- LIST HEADER LABEL -->
                        <h3 class="mdl-style-list-label">لم يكملها بعد</h3>
                    </div>
                    <table id="list_4" class="mdl-style-table table table-striped m-b-0">
                            <thead class="primary">
                                <tr>
                                    <th style="" class="mdl-style-thead-num text-center hidden-sm-down" width="30">#</th>
                                    <th style="text-align: right" class="mdl-style-thead-title left" width="300"><a href="javascript:sortTable(1,1, 'asc')">العنوان <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-country text-center hidden-sm-down" width="100"><a href="javascript:sortTable(2,1)">الدولة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-year text-center hidden-sm-down" width="85"><a href="javascript:sortTable(3,1)">السنة <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-type text-center hidden-sm-down" width="85"><a href="javascript:sortTable(4,1)">النوع <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-score text-center" width="110"><a href="javascript:sortTable(5,1)">تقييمي <i class="fa fa-caret-down"></i></a></th>
                                    <th  class="mdl-style-thead-progress text-center" width="105"><a href="javascript:sortTable(6,1)">تقدمي <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $n=0; foreach ($ny as $rt) { $n=$n+1; ?>
                                
                                    <tr id="ml51647">
                                        <th class="mdl-style-col-num order hidden-sm-down" style="border-left-width: 1px;" width="30" align="center"><?php echo $n ?></th>
                                        <td class="mdl-style-col-title sort1"> <span class="hidden-lg-up film-info" data-info="title:51647"></span> <a title="2 Days &amp; 1 Night: Season 4" class="title text-primary _600" data-info="title:51647" target="_blank" href="post.php?id=<?php echo $rt['id'] ?>"><span><?php echo $rt['title'] ?></span></a> 
                                            <div class="hidden-md-up text-muted">
                                                <?php
                                                    if($rt['content_type']=='serie'){ 
                                                        echo 'دراما '.datasignif($rt['country'],'countryF');
                                                    }else{
                                                        echo datasignif($rt['content_type'],'type').' '.datasignif($rt['country'],'countryM');
                                                    }
                                                ?>
                                                
                                            </div>
                                        </td>
                                        <td class="mdl-style-col-country sort2 hidden-sm-down" abbr="3" width="90" align="center"><?php echo datasignif($rt['country'],'countryN') ?></td>
                                        <td class="mdl-style-col-year sort3 hidden-sm-down" abbr="2019" width="45" align="center"><?php echo substr($rt['f_date'],6,strlen($rt['f_date'])) ?></td>
                                        <td class="mdl-style-col-type sort4 hidden-sm-down" abbr="86" width="50" align="center"><?php echo datasignif($rt['content_type'],'type') ?></td>
                                        <td class="mdl-style-col-score sort5" abbr="0" align="center"><span class="read_only" data-rating="<?php echo $rt['rate'] ?>"></span> <span class="score"><?php echo $rt['rate'] ?></span></td>
                                        
                                        <td class="mdl-style-col-progress sort6" abbr="1275" width="80" align="center">
                                            
                                            <?php if ($rt['content_type']=='movie'){ ?>
                                                <span class="episode-seen">1</span>/<span class="episode-total">1</span>
                                            <?php }else{ ?>
                                                
                                                <span class="episode-seen">
                                                <?php if (!$rt['epi_w']==''){ echo $rt['epi_w']; }else{ echo '? ';}?>
                                                </span>/
                                            
                                                <span class="episode-total">
                                                <?php if (!$rt['episodes']==''){ echo $rt['episodes']; }else{ echo '? ';}?>
                                                </span>
                                            <?php } ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- LIST FOOTER -->
                        <?php $this_i; $this_i=inforo( $user['code'],'notfiniyet'); ?> 
                        <div class="mdl-style-list-footer box-footer b-t list-statistics">
                            <label class="mdl-style-dramas"><span class="cnt"><?php echo $this_i['serie_n']; ?></span><span class="name">دراما</span></label>
                            <label class="mdl-style-tvshows"><span class="cnt"><?php echo $this_i['show_n']; ?></span><span class="name">برامج</span></label>
                            <label class="mdl-style-episodes"><span class="cnt"><?php echo $this_i['serie_e']+$this_i['show_e']; ?></span><span class="name">حلقات</span></label>
                            <label class="mdl-style-movies"><span class="cnt"><?php echo $this_i['movie_n']; ?></span><span class="name">أفلام</span></label>
                            <label class="mdl-style-days"><span class="cnt"><?php echo $this_i['d_M']+$this_i['d_S']+$this_i['d_D']; ?></span><span class="name">ايام</span></label>
                        </div>
                    </div>
                
                
                
                
                
                
                
                </div>
            </div>
        </div>
        <!-- MYDRAMALIST STYLE END -->
        <script type="text/javascript">
            $(function() {
                $('.dramalist-select').bind('change', function(evt) {
                    window.location.href = $(this).val();
                });
            });
            var aAsc = [];

            function sortTable(nr, list_id, sort_by) {
                var idx = list_id + "" + nr;
                if (typeof aAsc[idx] === 'undefined') {
                    aAsc[idx] = typeof sort_by === 'undefined' ? 'desc' : sort_by;
                }
                aAsc[idx] = (aAsc[idx] == 'desc') ? 'asc' : 'desc';
                var sorts = [false, 'td.sort' + nr + ' .title[title]'];
                if (nr == 1 || nr == 4) {
                    var sortClassName = typeof sorts[nr] !== 'undefined' ? sorts[nr] : 'td.sort' + nr + '[abbr]';
                    var sortFunc = {
                        order: aAsc[idx]
                    };
                } else {
                    var sortClassName = typeof sorts[nr] !== 'undefined' ? sorts[nr] : 'td.sort' + nr;
                    var sortFunc = {
                        sortFunction: function(a, b) {
                            var _order = (aAsc[idx] == 'desc') ? 1 : -1;
                            var i = parseInt(a.e.find('td.sort' + nr).attr('abbr'));
                            var j = parseInt(b.e.find('td.sort' + nr).attr('abbr'));
                            if (i === j) {
                                return 0;
                            } else {
                                return (i > j) ? _order : -1 * _order;
                            }
                        }
                    }
                }
                $('#list_' + list_id + '>tbody>tr').tsort(sortClassName, sortFunc).each(function(i, el) {
                    var order = i + 1;
                    var mosClass = (order % 2) ? 'td2' : 'td1';
                    $(el).removeClass('td2 td1').addClass(mosClass);
                    $(el).find('.order').text(order);
                });
            }

        </script>
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
    
    if (isset($_SESSION['id'])){
        $me=$_SESSION['id'];
        header("location:mymenu.php?id=$me");
    }else{
    header('location:index.php');
}} ?>

