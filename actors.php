<?php session_start();

include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>الفنانون</title>
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
    <?php include("menu.php"); addvisite('actors'); ?>

            <div id="content" class="slideout-panel slideout-panel-right">
                <div class="app-body">
                    <div class="spnsr-wrapper-2007">
                        <div class="spnsr-top-2007 is-desktop">
                            <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CMPZr7K5zecCFcVIGwodpToNfw">

                                <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none;">
                                    <iframe id="google_ads_iframe_/47261215/header_top_0" title="3rd party ad content" name="google_ads_iframe_/47261215/header_top_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="1" data-load-complete="true" width="728" height="90" frameborder="0"></iframe>
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
                                        <div class="box">
                                            <div class="box-header">
                                                <h3>اشهر اللوائح</h3>
                                            </div>
                                            <div class="box-divider m-a-0"></div>
                                            <?php  getlastdes('pup_vote_per') ?>

                                        </div>

                                        ads

                                    </div>
                                    
                                </div>
                            </div>
                            <?php 
                                    $stmtnm = $conn->prepare("SELECT * FROM persones WHERE status='1' ");
                                    $stmtnm->execute();
                                    $resultnm=$stmtnm->get_result();
                            
                                    $stmtu = $conn->prepare('SELECT count(likes.id),likes.idP,likes.postT,persones.id, persones.fname, persones.lname, persones.country, persones.biography,persones.picture   FROM persones LEFT JOIN  likes ON likes.idP=persones.id WHERE likes.postT="ac" AND persones.status="1" GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 10');
                                    $stmtu->execute();
                                    $resultu=$stmtu->get_result();
                            
                                    $x=0;
                            ?>
                            <div class="col-lg-8 col-md-8">
                                <p class="m-b-sm pull-left">
                                    <?php echo $resultnm->num_rows;?> نتيجة</p>
                                <h1 class="text-lg">أفضل الفنانين</h1>
                                <div class="m-t nav-active-border b-primary" id="actorsa">
                                    
                                    
                                    <?php while ($pers=$resultu->fetch_assoc()){ ?>
                                        <?php 
                                            $detailpost;
                                            $detailpost=detailpost($pers['id'],'ac');
                                        ?>
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="row">

                                                <div class="col-xs-9 row-cell content">
                                                    <span id="likedivac<?php echo $pers['id']; ?>" class="pull-left jbtn-like <?php if($detailpost['myL']=='true'){ ?>active<?php }else{ ?><?php } ?>" data-stats="people:232" data-id="232" data-type="people"><span class="like-cntb" onclick="opertion('ac|like','<?php echo $pers['id']; ?>')"><i></i><?php echo '<b id="likenumac'.$pers['id'].'">'.$detailpost['postL'].'</b>'; ?></span></span>
                                                    <h6 class="text-primary title"><a href="persone.php?id=<?php echo $pers['id']; ?>"><?php echo $pers['fname'].' '.$pers['lname']; ?></a></h6>
                                                    <div class="text-muted">
                                                        <span class="spacer"><?php echo datasignif($pers['country'],'countryN'); ?></span>
                                                    </div>
                                                    <p><?php if (strlen($pers['biography'])>200) {echo $pers['biography'].'...';} else {echo $pers['biography'];}?></p>
                                                </div>
                                                <div class="col-xs-3 row-cell cover">
                                                    <a href="persone.php?id=<?php echo $pers['id']; ?>"><img class="img-responsive cover" src="process/<?php echo $pers['picture']; ?>" alt="<?php echo $pers['fname'].' '.$pers['lname']; ?>"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    
                                    
                                </div>
                                <ul class="pagination" id="pageAd" style="padding-right:0px;">
                                        <li class="page-item first">
                                            <a class="page-link" ></a>
                                        </li>
                                        
                                        
                                        <li class="page-item nb active" id="l1"><a data="1" onclick="pageA(this)" class="page-link" >1</a></li>
                                        <li class="page-item" id="l2" ><a data="2" onclick="pageA(this)" class="page-link">2</a></li>
                                        <li class="page-item" id="l3" ><a data="3" onclick="pageA(this)" class="page-link">3</a></li>
                                        <li class="page-item" id="l4" ><a data="4" onclick="pageA(this)" class="page-link">4</a></li>
                                        <li class="page-item" id="l5" ><a data="5" onclick="pageA(this)" class="page-link">5</a></li>
                                        <li class="page-item" id="l6" ><a data="6" onclick="pageA(this)" class="page-link">6</a></li>
                                       
                                        <li data="next" id="p_next" onclick="pageA(this)" class="page-item page next">
                                            <a  class="page-link"></a>
                                        </li>
                                        <li class="page-item last">
                                            <a class="page-link" ></a>
                                        </li>
                                        
                                    </ul>
                                    
                                    <script>
                                        var p=1;
                                        var intr=6;
                                        var max=<?php echo ceil($resultnm->num_rows/10); ?>;
                                        
                                        function pageA(e){
                                            var pagec=$(e).attr('data');

                                             if(pagec=='next'){
                                             p=+p+1;
                                             nextp()
                                             $(".page-item").removeClass('active');
                                             $("#l"+p).addClass('active');  
                                             }else if(pagec=='prev'){
                                             p=p-1;
                                             prevp()
                                             $(".page-item").removeClass('active');
                                             $("#l"+p).addClass('active');   
                                             }else{
                                             p=pagec;
                                             nextp()
                                             $(".page-item").removeClass('active');
                                             $("#l"+p).addClass('active');       
                                             } 
                                            
                                            function nextp(){
                                                if (p>intr){
                                                var nin=intr+6;
                                                    
                                                  $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>');
                                                    
                                                while (intr<nin){
                                                    intr++;
                                                    if (!(intr>max+1)){
                                                      $("#pageAd").append('<li class="page-item" id="l'+intr+'" ><a data="'+intr+'" onclick="pageA(this)" class="page-link">'+intr+'</a></li>')   
                                                    }else{
                                                        
                                                    }
                                                }
                                                    
                                                if (!(p>max)){
                                                    $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>')  
                                                }else{

                                                }
                                                     
                                                intr=nin;
                                                }
                                            }
                                            function prevp(){
                                                if (p<=intr-6){
                                                     var intr_pre=intr-12;
                                                     var intr_ini=intr-6;
                                                     $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>') 
                                                     
                                                     while (intr_pre<intr_ini){
                                                        intr_pre++;
                                                        $("#pageAd").append('<li class="page-item" id="l'+intr_pre+'" ><a data="'+intr_pre+'" onclick="pageA(this)" class="page-link">'+intr_pre+'</a></li>')   
                                                     }
                                                     
                                                     $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>') 
                                                    
                                                     intr=intr_pre;
                                                }
                                            }
                                            console.log(p)
                                            if (p=='1'){
                                                 $("#pre_p").hide()
                                             }else{
                                                 $("#pre_p").show()
                                             }
                                            
                                            if (p==max){
                                                 $("#p_next").hide()
                                             }else{
                                                 $("#p_next").show()
                                             }
                                            
                                            datapaginate('actors',p);
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    <script src="/dist/en/js/search.js?v=5.4.6"></script>
                    <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
                </div>
            </div>
            <?php include('footer.php'); footer(); ?>
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
