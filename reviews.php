<?php session_start();

include("process/conn.php");


?>

<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">
<?php $serie=false;
    
$movie=false;
    
$tvshow=false;
    
$new=false;
    
    if (!isset($_GET['option'])){
                                
                                 $title='احدث المراجعات ';
                                $new=true;
                                }else{
                                    if($_GET['option']=='tvshow'){
                                        $serie=true;
                                        $title='مراجعات البرامج';
                                    }elseif ($_GET['option']=='movie'){
                                        $movie=true;
                                        $title='مراجعات الافلام';
                                        
                                    }elseif ($_GET['option']=='serie'){
                                         $tvshow=true;
                                         $title='مراجعات المسلسلات ';
                                         
                                    }
                                }
?>

<head>
    <title>تقييم - مراجعة <?php echo $title;  ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="ah4Ms39gXDkmvj6o" />
    <meta name='webgains-site-verification' content='1yuelvqb' />
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
    <script src="dist/en/js/search.js?v=4.34.2"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>

    <link rel="stylesheet" href="css/star-rating-svg.css">    <link rel="stylesheet" href="css/Lobibox.min.css">

    <script type="text/javascript" src="js/Lobibox.js"></script>



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
    <?php include("menu.php");addvisite('reviews'); ?>


    <div id="content">
        <div class="app-body">


            <script type="text/javascript" src="dist/en/js/reviews.js?v=5.2.4a"></script>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="content-side">
                            <div class="box">
                                <div class="box-header">
                                    <h2>أخر المحادثات</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                            <?php getlastdes('rec_desc_im') ?>
                                        </ul>
                            </div>
                            <div class="box clear">
                                <div class="box-header primary">
                                    <h3>اعلى اللوائح تصويتا</h3><small></small>
                                    <div class="box-tool" style="right:80%"><a href="addlist.php">انشئ لائحة</a></div>
                                </div>
                                <?php getlastdes('pup_vote_per'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="box">
                            <div class="box-header box-navbar">
                                <h1><?php echo $title ?></h1>
                                <ul class="nav nav-tabs">
                                    
                                    
                                    <li class="page-item nav-item <?php if($serie){echo 'active';} ?>"><a class="nav-link" href="reviews.php?option=tvshow">مراجعة البرامج</a></li>
                                    <li class="page-item nav-item <?php if($movie){echo 'active';} ?>"><a class="nav-link" href="reviews.php?option=movie">مراجعة الافلام</a></li>
                                    <li class="page-item nav-item <?php if($tvshow){echo 'active';} ?>"><a class="nav-link" href="reviews.php?option=serie">مراجعة المسلسلات</a></li>
                                    <li class="page-item nav-item <?php if($new){echo 'active';} ?>"><a class="nav-link" href="reviews.php">الاحدث </a></li>
                                    
                                </ul>
                            </div>
                            
                            <?php 
                            
                            if ($serie){
                                   $stmtF = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='serie' AND title.admin_o='1' ORDER BY helpf DESC");
                            }elseif($movie){
                                   $stmtF = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='movie' AND title.admin_o='1' ORDER BY helpf DESC");  
                            }elseif($tvshow){
                                   $stmtF = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='tvshow' AND title.admin_o='1' ORDER BY helpf DESC");
                            }else{
                                $stmtF =$conn->prepare("SELECT * FROM reviews  ORDER BY wn DESC");
                            }
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
                                
                            
                            
                            if ($serie){
                                   $stmtA = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='serie' AND title.admin_o='1' ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                   $stmtA->bind_param('i', $offset);
                            }elseif($movie){
                                   $stmtA = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='movie' AND title.admin_o='1' ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                   $stmtA->bind_param('i', $offset);
                            }elseif($tvshow){
                                   $stmtA = $conn->prepare("SELECT reviews.id,reviews.idU,reviews.idT,reviews.story,reviews.act,reviews.music,reviews.rewatch,reviews.overall,reviews.rewa,reviews.cancelw,reviews.episw,reviews.spoiler,reviews.headline,reviews.text,reviews.helpf,reviews.wn,title.id,title.content_type FROM reviews JOIN title ON title.id=reviews.idT WHERE title.content_type='tvshow' AND title.admin_o='1' ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                   $stmtA->bind_param('i', $offset);
                            }else{
                                    $stmtA = $conn->prepare("SELECT * FROM reviews  ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                   $stmtA->bind_param('i', $offset);
                            }

                            $stmtA->execute();
                            $resultA=$stmtA->get_result();
                            
                            ?>

                            <?php while($review=$resultA->fetch_assoc()){ ?>
                            <div style="margin-top:15px;border-top:1px solid #666" id="review-50935" class="review" data-stats="reviews:50935">
                                <div class="box-body light b-t b-b p-t-sm p-b-sm">
                                    <div class="row no-gutter">
                                        <div class="col-sm-9">
                                            <div class="pull-left m-r"> <span class="avatar w-56"> <img src="process/<?php $useri=userinfo($review['idU']); echo $useri['picture']; $titleinfos=titleinfo($review['idT']) ?>"> </span> </div>
                                            <div>
                                                <div class="pull-right hidden-sm-up"> <?php if($review['rewa']=='true'){echo '<span class="review-tag completed">أكمله</span>';}else{echo '<span class="review-tag">لم يكمل العمل بعد</span>';} ?> </div> <b><a class="text-primary" href="profile.php?<?php $useri['id']; ?>"><?php $useri['username']; ?></a></b>
                                                <div class="user-stats review_stats_50935"><small><?php if($review['helpf']=='0' || $review['helpf']<0 || $review['helpf']==''){}else{?><b><?php echo $review['helpf'] ?></b> وجدوا هذه المراجعة مفيدة.<?php } ?></small> <i class="review-voted-check review-voted-check-50935"></i></div>
                                                <div class="more-reviews"> <small><a class="text-primary" href="profile.php?id=<?php echo $useri['code']; ?>&option=reviews">مراجعات اخرى لهدا المستعمل</a></small>
                                                    <div class="hidden-sm-up pull-right"> <small><a href="profile.php?id=<?php echo $useri['id']; ?>&option=reviews"></a></small>
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
                            <?php } ?>




                            <div class="box-footer b-t">
                                <?php if($pagemax=='0'){}else{ ?>
                                <?php if(isset($_GET['option'])){ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="reviews.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                            <?php  } else{?>
                            <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="reviews.php?page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="reviews.php?page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="reviews.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="reviews.php?page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="reviews.php?page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="reviews.php?page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php }} ?>
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
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
