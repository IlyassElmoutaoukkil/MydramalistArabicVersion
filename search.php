<?php session_start();

include("process/conn.php");

if(isset($_GET['q'])){
    $word=filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);
    $word=preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
    
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>بحث</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#015284" />
    <meta name="dailymotion-domain-verification" content="dmg5lpc1ng53ymvet" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css?v=4.34.1d2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

    <link href="css/fontawesome/css/all.min.css?v=4.34.1a" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/app.css?v=4.34.1d2">
    <link rel="stylesheet" href="css/style.css?v=4.34.1d2">

    <link rel="stylesheet" href="dist/css/title_add.css">
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="dist/en/js/select.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>



    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>

    <link rel="stylesheet" href="css/Lobibox.min.css">

    <script type="text/javascript" src="js/Lobibox.js"></script>

    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>


    <link rel="stylesheet" href="js/toastr.min.css">

    <script type="text/javascript" src="js/toastr.js"></script>


    <link href="dist/css/select-theme-chosen.css" rel="stylesheet" type="text/css">
    <link href="dist/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/css/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="dist/en/js/bloodhound.min.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/Lobibox.js"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/account.js"></script>
    <script type="text/javascript" src="js/editormd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

    <script src="https://unpkg.com/element-ui/lib/index.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />

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
            background-image: url(assets/img/spnsr-text-box2.png);
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
    <?php include("menu.php"); addvisite('search'); ?>

            <div id="content" class="slideout-panel slideout-panel-right">
                <div class="app-body">
                    <div class="spnsr-wrapper-2007">
                        <div class="spnsr-top-2007 is-desktop">
                            <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CMPZr7K5zecCFcVIGwodpToNfw">

                                <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="content-side">
                                    <div class="box">
                                        <div class="box-body mdl-support-goal text-center" data-toggle="popover" title="">
                                            <h3 class="text-md">ادعمنا على مواقع التواصل الاجتماعي<i class="fa fa-question-circle pull-right"></i></h3>
                                            <div class="progress">
                                                <div class="progress-bar success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                            <div class="row social-icons-items">
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.facebook.com/MyDramaListdotcom/"><i class="fab fa-facebook-f indigo"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">73,319</span> <span class="followers-name">معجب</span> </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://twitter.com/My_Drama_List"><i class="fab fa-twitter light-blue"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">9,720</span> <span class="followers-name">متابع</span> </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-4 social-icons-item"> <a class="btn btn-icon rounded" target="_blank" href="https://www.youtube.com/channel/UCfnEmDUWC4m0k-tDDGVM2Uw"><i class="fab fa-youtube red"></i></a>
                                                    <div class="social-followers"> <span class="followers-num">731</span> <span class="followers-name">مشترك</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $('.mdl-support-goal').qtip({
                                            content: `<p><b>Did you know that MyDramaList is a company with only 2 full time staff that’s taken no outside funding?</b></p><p>Your VIP membership will go a long way in helping pay server bills,developer costs, and for coffee to keep us working all day long!<br/><br/>P.S You'll also get to hide pesky ads and get some nifty features too!</p>`,
                                            show: {
                                                event: 'mouseenter',
                                            },
                                            hide: {
                                                fixed: true,
                                                delay: 300
                                            },
                                            position: {
                                                my: "center left",
                                                at: "center right",
                                                adjust: {
                                                    method: "flip flip"
                                                },
                                                viewport: $(window)
                                            },
                                            style: 'qtip-wiki'
                                        });

                                    </script>

                                    ads

                                    

                                   
                                    <div class="hidden-sm-down">
                                        <!-- Adds -->
                                        <div>
                                            <div class="box">
                                                <div class="box-header">
                                                    <h2>أخر الحادثات</h2>
                                                </div>
                                                <div class="box-divider m-a-0"></div>
                                                <ul class="list">
                                                    <?php getlastdes('rec_desc_im') ?>

                                                </ul>
                                            </div>
                                        </div>
                                        

                                        ads

                                    </div>
                                    
                                </div>
                            </div>
                            <?php 
                                    $stmtu = $conn->prepare("(SELECT id,fname, lname, othname,orname,'ac' as type FROM persones WHERE fname LIKE CONCAT('%',?,'%') OR lname LIKE CONCAT('%',?,'%') OR othname LIKE CONCAT('%',?,'%') OR orname LIKE CONCAT('%',?,'%') AND status='1') 
                                       UNION
                                       (SELECT id,title, synopsis, country,note,'dr' as type FROM title WHERE title LIKE CONCAT('%',?,'%') OR synopsis LIKE CONCAT('%',?,'%') AND title.admin_o='1')");
    
                                    $stmtu->bind_param('ssssss',$word,$word,$word,$word,$word,$word);
                                    $stmtu->execute();
                                    $resultnm=$stmtu->get_result();
    
                                    $pagemax=ceil($resultnm->num_rows/10);
    
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
    
//                                       $stmtu = "(SELECT fname, lname, othname,orname 'ac' as type FROM persones WHERE fname LIKE '%?%' OR lname LIKE '%?%' OR othname LIKE '%?%' OR orname LIKE '%?%') 
//                                       UNION
//                                       (SELECT title, synopsys, 'dr' as type FROM title WHERE title LIKE '%?%' OR synopsys LIKE '%?%') LIMIT 10 OFFSET ?";

                                   
//                                    $stmtu = $conn->prepare("SELECT count(likes.id),likes.idP,likes.postT,persones.id, persones.fname, persones.lname, persones.country, persones.biography,persones.picture   FROM persones LEFT JOIN  likes ON likes.idP=persones.id WHERE likes.postT='ac' AND (persones.fname LIKE CONCAT('%',?,'%') OR persones.lname LIKE CONCAT('%',?,'%') OR persones.othname LIKE CONCAT('%',?,'%')) GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 10 OFFSET ?");

                                   
                                    $stmtu = $conn->prepare("(SELECT id,fname, lname, othname,orname,'ac' as type FROM persones WHERE fname LIKE CONCAT('%',?,'%') OR lname LIKE CONCAT('%',?,'%') OR othname LIKE CONCAT('%',?,'%') OR orname LIKE CONCAT('%',?,'%') AND status='1' ) 
                                       UNION
                                       (SELECT id,title, synopsis, country,note,'dr' as type FROM title WHERE title LIKE CONCAT('%',?,'%') OR synopsis LIKE CONCAT('%',?,'%') AND admin_o='1') LIMIT 10 OFFSET ?");
    
                                    $stmtu->bind_param('ssssssi',$word,$word,$word,$word,$word,$word,$offset);
                                    $stmtu->execute();
                                    $resultu=$stmtu->get_result();
                                    $x=0;
                            ?>
                            <div class="col-lg-8 col-md-8">
                                <p class="m-b-sm pull-left">
                                    <?php echo $resultnm->num_rows;?> نتيجة</p>
                                <h1 class="text-lg">بحث: <b><?php  ?></b></h1>
                                <div class="m-t nav-active-border b-primary" id="actorsa">
                                    
                                    <?php if($resultnm->num_rows=='0'){echo '<div class="text-center"><h3>لا توجد اي نتائج مشابهة .</h3></div>';}else{ ?>
                                    
                                    
                                    <?php while ($pers=$resultu->fetch_assoc()){ ?>
                                    
                                    <?php if($pers['type']=='ac'){ ?>
                                        <?php
                                            $pers=personeinfo($pers['id']);
                                            $detailpost;
                                            $detailpost=detailpost($pers['id'],'ac');
                                        ?>
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="row">

                                                <div class="col-xs-9 row-cell content">
                                                    
                                                    <h6 class="text-primary title"><a href="persone?id=<?php echo $pers['id']; ?>"><?php echo $pers['fname'].' '.$pers['lname']; ?></a></h6>
                                                    <div class="text-muted">
                                                        <span class="spacer"><?php echo datasignif($pers['country'],'countryN'); ?></span>
                                                    </div>
                                                    <p><?php if (strlen($pers['biography'])>200) {echo $pers['biography'].'...';} else {echo $pers['biography'];}?></p>
                                                </div>
                                                <div class="col-xs-3 row-cell cover">
                                                    <a href="persone?id=<?php echo $pers['id']; ?>"><img class="img-responsive cover" src="process/<?php echo $pers['picture']; ?>" alt="<?php echo $pers['fname'].' '.$pers['lname']; ?>"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                    <?php $title=$pers; $titledetail; $titledetail=detailpost($title['id'],'dr'); ?>
                                        <div id="mdl-28723" class="box">
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-xs-9 row-cell content">
                                                        

                                                        <h6 class="text-primary title"><a href="post.php?id=<?php echo $title['id']; ?>"><?php echo $title['title']; ?></a>

                                                            <?php addT($title['id']) ?>

                                                        </h6>
                                                        <span class="text-muted"><?php substr($title['episodes'],6,9); ?><?php if($title['episodes']!='0' && is_numeric($title['episodes'])){ ?> , <?php echo $title['episodes']; ?> حلقة <?php } ?></span>
                                                        <p>
                                                            <span class="read_only" data-rating="<?php echo $titledetail['postR']; ?>"></span>
                                                            <span class="p-l-xs score"><?php echo substr($titledetail['postR']*2,0,3); ?></span>
                                                        </p>
                                                        <p><?php echo   substr($title['synopsis'], 0,390); ?>...</p>

                                                    </div>
                                                    <div class="col-xs-3 row-cell film-cover cover">
                                                        <div class="item">
                                                            <a class="block" href="post.php?id=<?php echo $title['id']; ?>">
                                                                <img class="img-responsive cover" src="process/<?php echo $title['image']; ?>" alt="<?php echo $title['title']; ?>" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <?php }} ?>
                                    <?php } ?>
                                    
                                    
                                    
                                </div>
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="search.php?q=<?php echo filter_var(htmlentities($_GET['q']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    <script src="/dist/en/js/search.js?v=5.4.6"></script>
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
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
<?php }else{header('location:index.php');} ?>