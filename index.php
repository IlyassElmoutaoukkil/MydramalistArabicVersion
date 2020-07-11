<?php session_start();

include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تقييم.كوم</title>
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

    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="dist/en/js/select.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>


    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>




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

    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
        <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>

    <link rel="stylesheet" href="css/star-rating-svg.css">



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
    <?php include("menu.php"); addvisite('index');?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid">

                <div class="box light">

                    <div class="carousel-container carousel-articles">


                        <div id="slide-features" class="swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-5270px, 0px, 0px);">

                                <?php 
                                        $stmtA = $conn->prepare("SELECT * FROM article ORDER BY id DESC LIMIT 9");
                                        $stmtA->execute();
                                        $resultA=$stmtA->get_result();
                                    
                                        $x=0; $sf=false; $type='single'; $n=3; while($oth=$resultA->fetch_assoc()){ $x++; if($x==$n){$now=true;$n=$n+3;}else{$now=false;};
                                        $data=$oth['body'];
                                        $com=detailpost($oth['id'],'ar')['postC'];
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
                                                 }else{
                                                    $imex=false;
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
                                <?php if(!$sf){ ?>
                                <div class="swiper-slide carousel-item single" data-swiper-slide-index="<?php echo $x; ?>">
                                    <div class="content-wrapper">
                                        <div class="cover" style="background-image:url(<?php if($imex) { echo $bigone; } else{ echo $bigone; } ?>)"></div>
                                        <div class="content"> <a class="link" href="oneart.php?id=<?php echo $oth['id']; ?>"></a>
                                            <div class="content-inner">
                                                <h2><?php echo $oth['title']; ?></h2>
                                                <div class="meta"><b>
                                                        <script type="application/javascript">
                                                            moment.locale("ar_AL");
                                                            document.write(moment('<?php echo $oth['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                                        </script>
                                                    </b> - <?php echo $com; ?> تعليق</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $sf=true; } ?>

                                <?php if($sf){ ?>
                                <?php if(!$now){ ?>
                                <div id="" class="swiper-slide carousel-item <?php if($resultA->num_rows==$x){ ?> single <?php }else{echo 'double';} ?>" data-swiper-slide-index="<?php echo $x; ?>">
                                    <div class="content-wrapper">

                                        <div class="cover" style="background-image:url(<?php if($imex) { echo $bigone; } else{ echo $bigone; } ?>)"></div>
                                        <div class="content"> <a class="link" href="oneart.php?id=<?php echo $oth['id']; ?>"></a>
                                            <div class="content-inner">
                                                <h2><?php echo $oth['title']; ?></h2>
                                                <div class="meta"><b>
                                                        <script type="application/javascript">
                                                            moment.locale("ar_AL");
                                                            document.write(moment('<?php echo $oth['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                                        </script>
                                                    </b> - <?php echo $com; ?> تعليق</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($resultA->num_rows==$x){?>
                                </div>xxx <?php } ?>
                                <?php }else{ ?>

                                <div class="content-wrapper">
                                    <div class="cover" style="background-image:url(<?php if($imex) { echo $bigone; } else{ echo $bigone; } ?>)"></div>
                                    <div class="content"> <a class="link" href="oneart.php?id=<?php echo $oth['id']; ?>"></a>
                                        <div class="content-inner">
                                            <h2><?php echo $oth['title']; ?></h2>
                                            <div class="meta"><b>
                                                    <script type="application/javascript">
                                                        moment.locale("ar_AL");
                                                        document.write(moment('<?php echo $oth['wn'] ?>', "YYYY-MM-DD hh:mm:ss").format('LL'));

                                                    </script>
                                                </b> - <?php echo $com; ?> تعليق</div>
                                        </div>
                                    </div>
                                </div>

                            </div>yy
                            <?php $sf=false;} ?>

                            <?php }} ?>

                        </div>
                    </div>


                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">

                    </div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">

                    </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="box-body box-grid-section">
                        <div class="front-section">
                            <div class="box-header">
                                <div class="box-tool"><a class="more" href="topshows.php?option=new">المزيد »</a></div>

                                <h2 class="header m-b-0">اخر العناوين</h2>
                            </div>


                            <div class="grid-slider latest-episodes">
                                <div id="slide-episodes" class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                                        <?php
                      
                      $stmtu = $conn->prepare("SELECT id,title,image,wn FROM title  WHERE admin_o='1' ORDER BY wn DESC LIMIT 10");
                      $stmtu->execute();
                      $resultu=$stmtu->get_result(); 
                      
                      while($lasep=$resultu->fetch_assoc()){?>

                                        <div class="swiper-slide grid-item mdl-23696" style="width: 146.75px; margin-right: 24px;"> <a class="film-cover" href="post.php?id=<?php echo $lasep['id']; ?>"> <img class="img-responsive" src="process/<?php echo $lasep['image']; ?>" alt="Fighting Time"></a> <a class="film-episode text-ellipsis" href="post.php?id=<?php echo $lasep['id']; ?>"><span class="film-title text-primary"><?php echo $lasep['title']; ?></span></a> </div>

                                        <?php } ?>

                                    </div>




                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>

                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

<style>
                                                .read_only .jq-star {
                                                    transform: scale(-1, 1);
                                                }

                                            </style>
                    <div class="box-body box-grid-section">
                        <div class="front-section">
                            <div class="box-header">
                                <div class="box-tool"><a class="more" href="/reviews.php">المزيد »</a></div>
                                <h2 class="header m-b-0">آخر مراجعات</h2>
                            </div>
                            <div class="grid-reviews grid-slider">
                                <div id="slide-reviews" class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <?php
                      
                      $stmtu = $conn->prepare("SELECT title.id,title.title,title.image, reviews.id as idR, reviews.idT, reviews.idU as rid,reviews.overall FROM reviews JOIN title ON reviews.idT=title.id WHERE title.admin_o='1' ORDER BY reviews.wn DESC LIMIT 10");
                      $stmtu->execute();
                      $resultu=$stmtu->get_result(); 
                      
                      while($lasep=$resultu->fetch_assoc()){ ?>

                                        <div class="swiper-slide grid-item swiper-slide-active" style="width: 146.75px; margin-right: 24px;">
                                            <a class="film-cover" href="profile.php?id=<?php echo $lasep['rid']; ?>&option=reviews&rid=<?php echo $lasep['idR']; ?>">
                                                <img class="img-responsive" src="process/<?php echo $lasep['image']; ?>" alt="<?php echo $lasep['title']; ?>">
                                                <span class="review-score">
                                                    <?php echo $lasep['overall']; ?>
                                                    <span class="read_only" data-rating="<?php echo $lasep['overall']; ?>"></span>
                                                </span>
                                            </a> <a class="film-title text-primary text-ellipsis" href="profile.php?id=<?php echo $lasep['rid']; ?>&option=reviews&rid=<?php echo $lasep['idR']; ?>"><?php echo $lasep['title']; ?></a>
                                            <div class="author">بواسطة <a class="text-primary" href="profile.php?id=<?php echo $lasep['rid']; ?>"><?php echo userinfo($lasep['rid'])['username']; ?></a></div>
                                        </div>


                                        <?php } ?>

                                    </div>
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="box-body box-grid-section">
                        <div class="front-section">
                            <div class="box-header">
                                <h2 class="header m-b-0">تريندينك الاسبوع</h2>
                            </div>
                            <div class="grid-slider">
                                <div id="slide-trending" class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">




                                        <?php $stmtu = $conn->prepare("SELECT title.id,title.title,title.image, rate.id  as idR, SUM(rate.rate), rate.idT FROM rate JOIN title ON rate.idT=title.id WHERE title.admin_o='1' GROUP BY rate.idT ORDER BY SUM(rate.id) DESC   LIMIT 10");
                                        $stmtu->execute();
                                        $resultu=$stmtu->get_result(); 
                      
                                        while($lasep=$resultu->fetch_assoc()){ ?>

                                        <div class="swiper-slide grid-item mdl-23696" style="width: 146.75px; margin-right: 24px;"> <a class="film-cover" href="post.php?id=<?php echo $lasep['id']; ?>"> <img class="img-responsive" src="process/<?php echo $lasep['image']; ?>" alt="<?php echo $lasep['title']; ?>"></a> <a class="film-episode text-ellipsis" href="post.php?id=<?php echo $lasep['id']; ?>"><span class="film-title text-primary"><?php echo $lasep['title']; ?></span></a> </div>


                                        <?php } ?>



                                    </div>
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="box-body box-grid-section">
                        <div class="front-section">
                            <div class="box-header">
                                <h2 class="header m-b-0">برامج حديثة</h2>
                            </div>
                            <div class="grid-slider latest-episodes">
                                <div id="slide-episodes" class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                                        <?php
                      
                      $stmtu = $conn->prepare("SELECT id,title,image,wn FROM title WHERE content_type='tvshow' AND admin_o='1' ORDER BY wn DESC LIMIT 10");
                      $stmtu->execute();
                      $resultu=$stmtu->get_result(); 
                      
                      while($lasep=$resultu->fetch_assoc()){?>

                                        <div class="swiper-slide grid-item mdl-23696" style="width: 146.75px; margin-right: 24px;"> <a class="film-cover" href="post.php?id=<?php echo $lasep['id']; ?>"> <img class="img-responsive" src="process/<?php echo $lasep['image']; ?>" alt="Fighting Time"></a> <a class="film-episode text-ellipsis" href="post.php?id=<?php echo $lasep['id']; ?>"><span class="film-title text-primary"><?php echo $lasep['title']; ?></span></a> </div>

                                        <?php } ?>

                                    </div>




                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>

                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box-list-section">
                        <div class="box-header">
                            <h2>اخر المحادثات</h2>
                            <div class="box-tool"><a class="more" href="forum.php">المزيد »</a></div>
                        </div>
                        <ul class="list">
                            <?php getlastdes('rec_desc_im')
 ?>




                        </ul>
                    </div>
                    <div class="box-body box-grid-section">
                        <div class="front-section">
                            <div class="box-header">
                                <h2 class="header m-b-0">أعياد ميلاد اليوم</h2>
                            </div>
                            <div class="people-birthday grid-slider">
                                <div id="slide-birthday" class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                                        <?php 
                
                                    $stmtu = $conn->prepare('SELECT count(likes.id),likes.idP,likes.postT,persones.id, persones.fname, persones.lname, persones.country, persones.biography, persones.dayb,persones.picture   FROM persones LEFT JOIN  likes ON likes.idP=persones.id WHERE likes.postT="ac" AND persones.status="1" AND   month(STR_TO_DATE(persones.dayb, "%m/%d/%Y")) = month(curdate()) AND day(STR_TO_DATE(persones.dayb, "%m/%d/%Y")) = day(curdate()) GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 10');
                            
                                    $stmtu->execute();
                                    $resultu=$stmtu->get_result();
                            
                                    $x=0;

                                        while($ac=$resultu->fetch_assoc()){?>
                                            <div class="swiper-slide grid-item swiper-slide-active" style="width: 146.75px; margin-right: 24px;">
                                                <a class="image" href="persone.php?id=<?php echo $ac['id']; ?>">
                                                    <img class="img-responsive" src="process/<?php echo $ac['picture']; ?>" alt="<?php echo $ac['fname']; ?> <?php echo $ac['lname']; ?>">
                                                </a>
                                                
                                                <a class="text-primary text-ellipsis people-name" href="process/<?php echo $ac['picture']; ?>"><?php echo $ac['fname']; ?> <?php echo $ac['lname']; ?></a>
                                                <div class="text-muted"> 
                                                    <?php echo datasignif($ac['country'],'countryN'); ?> , العمر <b><script>
                                                document.write(Math.floor(moment(new Date()).diff(moment("<?php echo $ac['dayb']; ?>", "MM/DD/YYYY"), 'years', true)));

                                                    </script></b>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-xs-12 front-side-wrapper">
                    <div class="row no-gutter">
                        <div class="col-lg-12 col-md-12 col-sm-6">

                            <div class="box m-t">
                                <div class="box-header">
                                    <h2>قوائم التصويت الشعبية</h2>
                                    <div class="box-tool"><a href="lists.php">المزيد</a></div>
                                </div><?php getlastdes('pup_vote_per') ?>
                            </div>

                            <div class="box m-t">
                                <div class="box-header">
                                    <h2>أفضل البرامج</h2>
                                </div>
                                <div class="box-tool"><a href="tvprogram.php">المزيد</a></div>
                                <ul class="list top-list">

                                    <?php
                                      $stmtu = $conn->prepare("SELECT count(likes.id),likes.idP,likes.postT,title.id, title.title, title.synopsis, title.country, title.image, title.episodes, title.p_date, title.content_type, title.tvshow_type   FROM title  JOIN  likes ON likes.idP=title.id WHERE likes.postT='dr' AND title.content_type='tvshow' GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 2");
                                      $stmtu->execute();
                                      $resultu=$stmtu->get_result();

                                    ?>
                                    <?php while($title=$resultu->fetch_assoc()){ $dt=detailpost($title['id'],'dr'); ?>
                                    
                                    <li class="list-item mdl-33538">
                                        <div class="list-left"><img src="process/<?php echo $title['image'] ?>" width="55"></div>
                                        <div class="list-body">
                                            <div class="text-primary _600"><a class="title" href="post.php?id=<?php echo $title['id'] ?>" title="<?php echo $title['title'] ?>"><?php echo $title['title'] ?></a> <?php addT($title['id']); ?></div>
                                            <div class="list-info"> <span style="margin-left:10px;" class="read_only" data-rating="<?php echo $dt['postRa']; ?>"></span><span class="p-l-xs text-sm score"><?php echo $dt['postRa']*2 ?>/10 </span>
                                                <div class="text-sm">برنامج <?php echo datasignif($title['tvshow_type'],'tvt'); ?> <?php if($title['episodes']==''){}else{ echo ', '.$title['episodes'].' حلقة';} ?></div>
                                                <div class="text-sm"><?php echo $dt['watchers']; ?> مشاهدة</div>
                                            </div>
                                        </div>
                                    </li>

                                    <?php } ?>


                                </ul>
                            </div>


                            <div class="box m-t">
                                <div class="box-header">
                                    <h2>افضل البرامج القادمة</h2>
                                </div>


                                <ul class="list top-list">

                                    <?php
                                      $stmtu = $conn->prepare("SELECT count(likes.id),likes.idP,likes.postT,title.id, title.title, title.synopsis, title.country, title.image, title.episodes, title.p_date, title.content_type, title.tvshow_type   FROM title  JOIN  likes ON likes.idP=title.id WHERE likes.postT='dr' AND title.content_type='tvshow'  AND title.status='notpud'  GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 2");
                                      $stmtu->execute();
                                      $resultu=$stmtu->get_result();

                                    ?>
                                    <?php while($title=$resultu->fetch_assoc()){ $dt=detailpost($title['id'],'dr'); ?>
                                    
                                    <li class="list-item mdl-33538">
                                        <div class="list-left"><img src="process/<?php echo $title['image'] ?>" width="55"></div>
                                        <div class="list-body">
                                            <div class="text-primary _600"><a class="title" href="post.php?id=<?php echo $title['id'] ?>" title="<?php echo $title['title'] ?>"><?php echo $title['title'] ?></a> <?php addT($title['id']); ?></div>
                                            <div class="list-info"> <span style="margin-left:10px;" class="read_only" data-rating="<?php echo $dt['postRa']; ?>"></span><span class="p-l-xs text-sm score"><?php echo $dt['postRa']*2 ?>/10 </span>
                                                <div class="text-sm">برنامج <?php echo datasignif($title['tvshow_type'],'tvt'); ?> <?php if($title['episodes']==''){}else{ echo ', '.$title['episodes'].' حلقة';} ?></div>
                                                <div class="text-sm"><?php echo $dt['watchers']; ?> مشاهدة</div>
                                            </div>
                                        </div>
                                    </li>

                                    <?php } ?>


                                </ul>
                            </div>
                        </div>
                        <d </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script type="text/javascript" src="dist/en/js/OLDmain.js"></script>
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

</html>
