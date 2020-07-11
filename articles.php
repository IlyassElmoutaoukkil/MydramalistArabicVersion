<?php session_start();

include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>المقالات</title>
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

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
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
    <?php include("menu.php"); addvisite('articles'); ?>

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
                                    $stmtF = $conn->prepare("SELECT * FROM article");
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

                            ?>
                    <div class="col-lg-8 col-md-8">
                        <p class="m-b-sm pull-left">
                            <?php echo $total;?> نتيجة</p>
                        <h1 class="text-lg">أحدث المقالات</h1>
                        <div class="m-t nav-active-border b-primary" id="actorsa">

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


                            <div class="box light">
                                <div class="box-body">
                                    <div class=""><a href="oneart.php?id=<?php echo $oth['id']; ?>"><img class="img-responsive cover" src="<?php echo $bigone; ?>" alt="<?php echo $oth['title']; ?>" title="<?php echo $oth['title']; ?>"></a></div>
                                    <div class="m-t">
                                        <div class="text-muted"></div>
                                        <h5 class="text-primary title"><a href="oneart.php?id=<?php echo $oth['id']; ?>"><?php echo $oth['title']; ?></a></h5>
                                        <div class="text-muted">
                                            <span class="spacer"><script type="application/javascript">
                                                            moment.locale("ar_AL");
                                                            document.write(moment('<?php echo $oth['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                        </script></span>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <?php } ?>




                        </div>
                       
                        <?php if($pagemax=='0'){}else{ ?>
                                <?php if(isset($_GET['option'])){ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="topshows.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                            <?php  } else{?>
                            <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="topshows.php?page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topshows.php?page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="topshows.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="topshows.php?page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="topshows.php?page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="topshows.php?page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php }} ?>

                        <script>
                            var p = 1;
                            var intr = 6;
                            var max = <?php echo ceil($resultnm->num_rows/10); ?>;

                            function pageA(e) {
                                var pagec = $(e).attr('data');

                                if (pagec == 'next') {
                                    p = +p + 1;
                                    nextp()
                                    $(".page-item").removeClass('active');
                                    $("#l" + p).addClass('active');
                                } else if (pagec == 'prev') {
                                    p = p - 1;
                                    prevp()
                                    $(".page-item").removeClass('active');
                                    $("#l" + p).addClass('active');
                                } else {
                                    p = pagec;
                                    nextp()
                                    $(".page-item").removeClass('active');
                                    $("#l" + p).addClass('active');
                                }

                                function nextp() {
                                    if (p > intr) {
                                        var nin = intr + 6;

                                        $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>');

                                        while (intr < nin) {
                                            intr++;
                                            if (!(intr > max + 1)) {
                                                $("#pageAd").append('<li class="page-item" id="l' + intr + '" ><a data="' + intr + '" onclick="pageA(this)" class="page-link">' + intr + '</a></li>')
                                            } else {

                                            }
                                        }

                                        if (!(p > max)) {
                                            $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>')
                                        } else {

                                        }

                                        intr = nin;
                                    }
                                }

                                function prevp() {
                                    if (p <= intr - 6) {
                                        var intr_pre = intr - 12;
                                        var intr_ini = intr - 6;
                                        $("#pageAd").html('<li data="prev"  id="pre_p" onclick="pageA(this)" class="page-item prev"><a class="page-link"></a></li>')

                                        while (intr_pre < intr_ini) {
                                            intr_pre++;
                                            $("#pageAd").append('<li class="page-item" id="l' + intr_pre + '" ><a data="' + intr_pre + '" onclick="pageA(this)" class="page-link">' + intr_pre + '</a></li>')
                                        }

                                        $("#pageAd").append('<li data="next" onclick="pageA(this)" class="page-item next"><a class="page-link"></a></li>')

                                        intr = intr_pre;
                                    }
                                }
                                console.log(p)
                                if (p == '1') {
                                    $("#pre_p").hide()
                                } else {
                                    $("#pre_p").show()
                                }

                                if (p == max) {
                                    $("#p_next").hide()
                                } else {
                                    $("#p_next").show()
                                }

                                datapaginate('actors', p);
                            }

                        </script>
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
