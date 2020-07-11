<?php session_start();

include("process/conn.php");


?>

<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">
<?php 
    if (!isset($_GET['option'])){
                                
                                $title='أعلى البرامج إعجابا ';
                                }else{
                                    if($_GET['option']=='famous'){
                                        
                                        $title='أعلى البرامج شهرة ';
                                    }elseif ($_GET['option']=='new'){
                                        
                                        $title=' البرامج المضافة حديثا ';
                                        
                                    }elseif ($_GET['option']=='coming'){
                                         
                                         $title=' البرامج القادمة حديثا ';
                                         
                                    }
                                }
?>
<head>
    <title><?php echo $title;  ?></title>
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

    <link rel="stylesheet" href="css/star-rating-svg.css">


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
    <?php include("menu.php"); addvisite('tvprogram'); ?>


    <div id="content" style="margin-top: 20px;">
        <div class="app-body">
            <div class="spnsr-wrapper-1951">
                <div class="spnsr-top-1951 is-mobile">
                    <div class="spnsr-top-wrapper-1951">
                        <div class="mdl-gpt-tag" id='mdl-gpt-header-mobile-0'>

                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success m-l hide m-r _600" style="background-color: #F96B1E;color:#ffffff;text-align: center;font-size: 16px;"><a href="/article/giveaway-win-delicious-japanese-candy-and-snacks-0424182474">Win a Japanese Snack box today!</a></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="content-side">
                          
                            

                            

                            
                            <div class="hidden-sm-down">
                                <!-- Adds -->
                                <div>
                                    <div class="box">
                                        <div class="box-header">
                                            <h2>أخر المحادثات</h2>
                                        </div>
                                        <div class="box-divider m-a-0"></div>
                                        <ul class="list">
                                            <?php getlastdes('rec_desc_im') ?>
                                        </ul>
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

                                

                            </div>
                            
                        </div>
                    </div>
                    <style>
                    .read_only .jq-star {
                                                    transform: scale(-1, 1);
                                                }</style>
                    <div class="col-lg-8 col-md-8">
                        <?php
                            $stmtF = $conn->prepare("SELECT * FROM title");
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
                                
                        
                        
                                if (!isset($_GET['option'])){
                                $stmtu = $conn->prepare("SELECT count(likes.id),likes.idP,likes.postT,title.id, title.title, title.synopsis, title.country, title.image, title.episodes, title.p_date   FROM title  JOIN  likes ON likes.idP=title.id WHERE likes.postT='dr' AND content_type='tvshow' AND title.admin_o='1' GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 10 OFFSET ?"); //WHERE RATE>7 LIMIT 10 STATUS 1
                                $stmtu->bind_param('i',$offset);
                                $title='أعلى الدرامات إعجابا ';
                                }else{
                                    if($_GET['option']=='famous'){
                                        $stmtu = $conn->prepare("SELECT count(comments.id),comments.idP,comments.postT,title.id, title.title, title.synopsis, title.country, title.image, title.episodes, title.p_date   FROM title LEFT JOIN  comments ON comments.idP=title.id WHERE comments.postT='dr' and content_type='tvshow' AND title.admin_o='1'  GROUP BY comments.idP ORDER BY count(comments.id) DESC LIMIT 10 OFFSET ?"); //WHERE RATE>7 LIMIT 10 STATUS 1
                                        $stmtu->bind_param('i',$offset);
                                        $title='أعلى الدرامات شهرة ';
                                    }elseif ($_GET['option']=='new'){
                                         $stmtu = $conn->prepare("SELECT *  FROM title WHERE content_type='tvshow' AND title.admin_o='1' ORDER BY wn DESC LIMIT 10 OFFSET ?"); //WHERE RATE>7 LIMIT 10 STATUS 1
                                        $stmtu->bind_param('i',$offset);
                                        $title=' الدرامات المضافة حديثا ';
                                        
                                    }elseif ($_GET['option']=='coming'){
                                         
                                         $title=' الدرامات القادمة حديثا ';
                                         $stmtu = $conn->prepare("SELECT * FROM title WHERE content_type='tvshow' AND status='notpub' AND admin_o='1' ORDER BY wn DESC LIMIT 10 OFFSET ?"); //WHERE RATE>7 LIMIT 10 STATUS 1
                                         $stmtu->bind_param('i',$offset);
                                    }
                                }
                                $stmtu->execute();
                                $resultu=$stmtu->get_result();
                                $x=0;
                                ?>
                        
                        
                        <p class="m-b-sm pull-left">
                            <?php echo $total; ?> نتيجة</p>
                        <h1 class="text-lg"><?php echo $title; ?></h1>
                        <div class="m-t nav-active-border b-primary">
                            <?php while($title=$resultu->fetch_assoc()){ $x++; ?><?php $titledetail; $titledetail=detailpost($title['id'],'dr'); ?>
                            <div id="mdl-28723" class="box">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-9 row-cell content">
                                            <span id="likedivdr<?php echo $title['id']; ?>" class="pull-left jbtn-like <?php if($titledetail['myL']=='true'){ ?>active<?php }else{ ?><?php } ?>" data-stats="people:232" data-id="232" data-type="people"><span class="like-cntb" onclick="opertion('dr|like','<?php echo $title['id']; ?>')"><i></i><?php echo '<b id="likenumdr'.$title['id'].'">'.$titledetail['postL'].'</b>'; ?></span></span>
                                            
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
                            <?php } ?>


                            <?php if($pagemax=='0'){}else{ ?>
                                <?php if(isset($_GET['option'])){ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="tvprogram.php?option=<?php echo filter_var(htmlentities($_GET['option']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                            <?php  } else{?>
                            <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="tvprogram.php?page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="tvprogram.php?page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="tvprogram.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="tvprogram.php?page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="tvprogram.php?page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="tvprogram.php?page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php }} ?>
                        </div>
                        <div class="spnsr_right_1951">
                            <div class="spnsr" id='mdl-gpt-fbox1-3' style='height:250px; width:300px;'>
                                <script>
                                    mdltag.cmd.push(function() {
                                        mdltag.defineSlot('/47261215/film_box_1_3', [300, 250], 'mdl-gpt-fbox1-3');
                                    })

                                </script>
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


</html>