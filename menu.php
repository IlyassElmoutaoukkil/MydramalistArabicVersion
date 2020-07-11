<?php include("process/conn.php"); ?>
<?php include("process/functions.php"); ?>
<div id="app" class="app">
        <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <script type="text/javascript" src="js/Lobibox.js"></script>
    <style type="text/css">
        
                            #menu.active {
                                display: block;
                            }

                            #hdr.active {
                                position: inherit;
                            }

                            #app.active {
                                display: flex;
                            }

                        </style>
                        
                        
        <div id="menu">
            <form class="form-inline form-search" action="search.php" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Find Asian Dramas, Movies, Actors and more...">
                        <span class="input-group-btn">
                            <button style="border-bottom-right-radius: 0;border-top-right-radius: 0;margin-top: -1px" type="submit" class="btn white"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
            <ul class="nav">
                <li class="active">
                    <a href="index.php"><span class="nav-text">الرئيسية</span></a>
                    <ul class="nav-sub">

                        <li><a href="feeds.php"><span class="nav-text">المنصة الاجتماعية</span></a></li>
                        <li><a href="articles.php"><span class="nav-text">مقالات</span></a></li>
                        <li><a href="forum.php"><span class="nav-text">المدونة</span></a></li>
                        <li><a href="contributors.php"><span class="nav-text">المساهمون</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a hef="/"><span class="nav-text">البرامج</span></a>
                    <ul class="nav-sub">
                        <li><a href="tvprogram.php"><span class="nav-text">الأفضل</span></a></li>
                        <li><a href="tvprogram.php?option=famous"><span class="nav-text">الاشهر</span></a></li>
                        <li><a href="tvprogram.php?option=new"><span class="nav-text">الاجدد</span></a></li>
                        <li><a href="tvprogram.php?option=coming"><span class="nav-text">مراجعات</span></a></li>
                        <li><a href="reviews.php"><span class="nav-text">ترشيحات</span></a></li>
                        <li><a href="tvprogram.php" rel="external nofollow"><span class="nav-text">نرشح لك</span></a></li>
                        <li><a href="addnewtitle.php" rel="external nofollow"><span class="nav-text">أضف عنوانا جديدا</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="/"><span class="nav-text">الافلام</span></a>
                    <ul class="nav-sub">
                        <li><a href="topshows.php"><span class="nav-text">الأفضل</span></a></li>
                        <li><a href="topshows.php?option=famous"><span class="nav-text">الاشهر</span></a></li>
                        <li><a href="topshows.php?option=new"><span class="nav-text">الاجدد</span></a></li>
                        <li><a href="topshows.php?option=coming"><span class="nav-text">القادم</span></a></li>
                        <li><a href="reviews.php&option=tvshow"><span class="nav-text">مراجعات</span></a></li>
                        <li><a href="recomen.php"><span class="nav-text">ترشيحات</span></a></li>
                        <li><a href="addnewtitle.php"><span class="nav-text">أضف
                                    عنوانا
                                    جديدا</span></a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="/"><span class="nav-text">اشخاص</span></a>
                    <ul class="nav-sub">
                        <li><a href="actors.php"><span class="nav-text">افضل الممثلين</span></a></li>
                        <li><a href="addpersone.php" rel="external nofollow"><span class="nav-text">اضف شخصا جديدا</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div calss="app-content box-shadow-z0">
            <div id="hdr" class="app-header navbar-xs black box-shadow">
                <div class="app-header-wrapper">
                    <div class="navbar">
                        <a class="btn-slide-menu navbar-item  hidden-lg-up m-a-0 m-l"><i class="fa fa-bars"></i></a>

                        <a href="index.php" class="navbar-brand pull-right">
                            <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='main_logo'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    
                                       <img class="hidden-folded hidden-md-down inline" alt="تقييم.كوم" src="process/<?php echo $resultnm->fetch_assoc()['info']; ?>" width="158" height="24">
                                    <?php }else{ ?>
                                    <img alt="تقييم.كوم" src="" width="158" height="24">
                                    <?php } ?>
                         
                            
                            
                            </a>

                        

                        

                        <div class="collapse navbar-toggleable-sm pull-right" id="top-nav" data-pjax="">

                            <ul class="nav navbar-nav pull-left nav-active-border b-blue">

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">ﺗﺼﻔﺢ</span></a>
                                    <div class="dropdown-menu" style="min-width: 350px;padding:0;">
                                        <div class="row no-gutter" style="display: flex;">
                                            <div class="col-sm-6 col-lg-6" style="padding-top: 10px;padding-bottom: 10px;min-height: 322px;border-right: 1px solid #eee;">
                                                <div class="dropdown-header"><b>ﺑﺮاﻣﺞ ﺗﻠﻔﻴﺰﻳﻮﻧﻴﺔ</b></div>
                                                <a class="dropdown-item" href="tvprogram.php">اﻷﻓﻀﻞ</a>
                                                <a class="dropdown-item" href="tvprogram.php?option=famous">اﻷﺷﻬﺮ</a>
                                                <a class="dropdown-item" href="tvprogram.php?option=new">اﻷﺟﺪﺩ</a>
                                                <a class="dropdown-item" href="tvprogram.php?option=coming">اﻟﻘﺎﺩﻣﺔ</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" rel="external nofollow" href="addnewtitle.php"> اﺿﺎﻓﺔ ﻋﻨﻮاﻥ جديد</a>
                                            </div>
                                            <div class="col-sm-6 col-lg-6" style="background-color: #f8f8f8;padding-top: 10px;padding-bottom: 10px;min-height: 322px;">
                                                <div class="dropdown-header"><b>ﺃﻓﻼﻡ</b></div>
                                                <a class="dropdown-item" href="topshows.php">اﻷﻓﻀﻞ</a>
                                                <a class="dropdown-item" href="topshows.php?option=famous">اﻻﺷﻬﺮ</a>
                                                <a class="dropdown-item" href="topshows.php?option=new">اﻻﺟﺪﺩ</a>
                                                <a class="dropdown-item" href="topshows.php?option=coming">اﻟﻘﺎﺩﻡ</a>
                                                <a class="dropdown-item" href="reviews.php">ﻣﺮاﺟﻌﺎﺕ</a>
                                                <a class="dropdown-item" href="recomen.php">ﺗﺮﺷﻴﺤﺎﺕ</a>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">اﺷﺨﺎﺹ</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="actors.php">الممثلين</a>
                                        <a class="dropdown-item" rel="external nofollow" href="addpersone.php">اﺿﻒ ﺷﺨﺼﺎ ﺟﺪﻳﺪا</a> </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="/discussions" data-toggle="dropdown"><span class="nav-text">ﻣﺠﺘﻤﻊ</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="lists.php">اللوائح</a> <a class="dropdown-item" href="forum.php">اﻟﻤﺪﻭﻧﺔ</a>
                                        <a class="dropdown-item" href="contributors.php">اﻟﻤﺴﺎﻫﻤﻮﻥ</a> </div>
                                </li>

                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><span class="nav-text">اﻟﺮﺋﻴﺴﻴﺔ</span></a>
                                    <div class="dropdown-menu">
                                        <a href="feeds.php" class="dropdown-item"><span class="nav-text">اﺧﺒﺎﺭ</span></a>
                                        <a href="articles.php" class="dropdown-item"><span class="nav-text">ﻣﻘﺎﻻﺕ</span></a>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <ul class="nav navbar-nav pull-left header-user">

                            <form style="margin-left:20px;" class="navbar-form form-inline hidden-md-down pull-right pull-none-sm navbar-item v-m" action="search.php" role="search">
                                <div class="form-group l-h m-a-0">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="q" class="form-control p-x b-a rounded" placeholder="اﺑﺤﺚ ﻋﻦ ﻓﻴﻠﻢ, ﻣﺴﻠﺴﻞ, ﺩﺭاﻣﺎ ..."> <span  class="input-group-btn"><button   style="border-bottom-right-radius: 0;border-top-right-radius: 0;margin-top: -1px" type="submit" class="btn b-a rounded no-b-l no-shadow"><i class="fa fa-search"></i></button></span></div>
                                </div>
                            </form>

                            <li class="nav-item dropdown nav-search hidden-lg-up">
                                <a class="nav-link" data-toggle="dropdown"><i class="far fa-search"></i></a>
                                <div class="dropdown-menu w-xxl animated fadeInUp p-a-0">
                                    <form class="navbar-form form-inline" action="search.php" role="search">
                                        <div class="form-group l-h m-a-0">
                                            <div class="input-group">
                                                <input  type="text" name="q" class="form-control" placeholder="اﺑﺤﺚ ﻋﻦ ﻓﻴﻠﻢ, ﻣﺴﻠﺴﻞ, ﺩﺭاﻣﺎ ...">
                                                <span  style="border-bottom-right-radius: 0;border-top-right-radius: 0;margin-top: 0px" class="input-group-btn"><button type="submit" class="btn b-a no-b-l no-shadow"><i class="fa fa-search"></i></button></span></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <?php 
                            if (isset($_SESSION['id'])){ ?>
                            <ul class="nav navbar-nav pull-right header-user">
                                <li class="nav-item header-dropdown dropdown">
                                    <a href="#" class="nav-link dropdown-toggle clear" data-toggle="dropdown"><span class="avatar w-32" style="margin-left:3px;"><img class="header-user-avatar" src="process/<?php echo $_SESSION['img']; ?>"></span></a>
                                    <div class="dropdown-menu  dropdown-menu-scale">
                                        <?php if ($_SESSION['type']=='1' || $_SESSION['type']=='2' ){ ?>
                                        <a class="dropdown-item" href="admin_index.php"><i class="fal fa-cogs"></i><span>لوحة التحكم</span></a>
                                        <?php } ?>
                                        
                                        <a class="dropdown-item" href="message.php"><i class="fal fa-envelope"></i> <span>رسائل</span></a>
                                        <a class="dropdown-item" href="friends.php"><i class="fal fa-user-friends"></i> <span>ألاصدقاء</span></a>
                                        <a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id'] ; ?>"><i class="fal fa-user-circle"></i> حسابي</a>
                                        <a class="dropdown-item" href="mymenu.php?id=<?php echo $_SESSION['id'] ?>"><i class="fal fa-list-alt"></i>قائمة مشاهدتي</a>
                                        <a class="dropdown-item" href="lists.php"><i class="fal fa-list-ol"></i>قوائم مخصصة</a>
                                        <a class="dropdown-item" href="feeds.php"><i class="fal fa-comments-alt"></i> منصتنا</a>
                                        <a class="dropdown-item" href="recomen.php"><i class="fal fa-puzzle-piece"></i>توصيات شخصية</a>
                                        <a class="dropdown-item sl1" href="settings.php"><i class="fal fa-sliders-h"></i> تعديلات</a>


                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php"><i class="fal fa-sign-out"></i> خروج</a>
                                        <a class="dropdown-item" href="faq.php"><i class="fal fa-question-circle"></i> تحتاج مساعدة؟</a>
                                    </div>
                                </li>
                               
                                <li class="nav-item dropdown nav-notifications">
                                    <?php
                        $myid=$_SESSION['id'];
                        //connect first
                        $stmt = $conn->prepare("SELECT * FROM notification WHERE nto = ? AND status= '0' ORDER BY id DESC LIMIT 10");
                        $stmt->bind_param("s", $myid);
                        $stmt->execute();
                        $resultn=$stmt->get_result();
                                                        
                        $stmtA = $conn->prepare("SELECT * FROM notification WHERE nto = ? ");
                        $stmtA->bind_param("s", $myid);
                        $stmtA->execute();
                        $resultnA=$stmtA->get_result();  
                    ?>
                                    <a class="nav-link" data-toggle="dropdown" aria-expanded="true"><i class="far fa-bell"></i> <span class="notif-count label label-sm up danger" id="not_un"><?php echo $resultn->num_rows; ?></span></a>
                                    <div class="dropdown-menu w-xxl animated fadeInUp p-a-0">
                                        <div class="scrollable" style="max-height: 600px">
                                            <div>

                                                <a href="notifications.php" class="menu-header-link">
                                                    <strong>عرض كل التنبيهات</strong>
                                                    <span class="unread-count">(<?php echo $resultnA->num_rows; ?>)</span>
                                                </a>

                                                <button onclick="rall(this)" type="button" class="el-button btn btn-default btn-clear el-button--default">
                                                    <i class="fa fa-check"></i>
                                                    <span>تحديد الكل كمقروء </span>
                                                </button>
                                                
                                                <script>
                                                function rall(s){
                                                    $.ajax({
                                                    url: 'notification.php',
                                                    type: 'POST',
                                                    data: {'rall':'all'},
                                                    beforeSend: function (resp) {
                                                        $(s).attr('class', "el-input__icon el-icon-loading");
                                                    },
                                                    success: function (resp) {

                                                        $(s).attr('class', '<i class="fa fa-check"></i><span>تحديد الكل كمقروء </span>');
                                                        $("#not_un").html('0')
                                                        $('#notl').html('<p class="text-center">لا توجد اي تنبيهات جديدة</p>')
                                                    },
                                                    error: function (resp) {
                                                    },

                                                    complete: function (resp) {

                                                    }
                                                });
                                                }
                                                </script>

                                                <ul class="list-group" id="notl" style="padding-right: 0px;">
                                                    <?php
                        
                        while($noti=$resultn->fetch_assoc()){
                            
                        ?>
                                                    
                                                    <?php
                                                    if ($noti['type']=='fd|comment' || $noti['type']=='ls|comment' || $noti['type']=='rv|comment' ||  $noti['type']=='ac|comment' || $noti['type']=='dr|comment' || $noti['type']=='ar|comment' || $noti['type']=='dc|comment' ){
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $noti['post']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;

                                                            case 'dc':
                                                                $cmp=postexist($fetch_s['idP'],'dc');
                                                            break;
                                                        }
                                                        $exist=(postexist($noti['post'],'cm') && $cmp);
                                                        
                                                    }elseif ($noti['type']=='replie'){
                                                        
                                                        $stmt = $conn->prepare("SELECT * FROM replies WHERE id=?");
                                                        $stmt->bind_param("s", $noti['post']);
                                                        $stmt->execute();
                                                        $resultn=$stmt->get_result();
                                                        $rp=$resultn->fetch_assoc();
                                                        
                                                        
                                                        $exist=(postexist($noti['post'],'rp') && postexist($rp['idC'],'cm'));
                                                    }elseif($noti['type']=='cm|like'){
                                                        
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $noti['post']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;

                                                            case 'dc':
                                                                $cmp=postexist($fetch_s['idP'],'dc');
                                                            break;
                                                        }
                                                        
                                                        $exist=(postexist($noti['post'],'cm') && $cmp);
                   
                                                    }elseif($noti['type']=='rp|like'){
                                                        $stmt = $conn->prepare("SELECT * FROM replies WHERE id=?");
                                                        $stmt->bind_param("s", $noti['post']);
                                                        $stmt->execute();
                                                        $resultn=$stmt->get_result();
                                                        $rp=$resultn->fetch_assoc();
                                                        
                                                        $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                                                        $stmt_s->bind_param("s", $rp['idC']);
                                                        $stmt_s->execute();
                                                        $result_s=$stmt_s->get_result();
                                                        $fetch_s = $result_s->fetch_assoc();

                                                        switch($fetch_s['postT']){

                                                            case 'ac':
                                                                $cmp=postexist($fetch_s['idP'],'ac');
                                                            break;
                                                            case 'dr':
                                                                $cmp=postexist($fetch_s['idP'],'dr');
                                                            break;
                                                            case 'fd':
                                                                $cmp=postexist($fetch_s['idP'],'fd');
                                                            break;
                                                            case 'rv':
                                                                $cmp=postexist($fetch_s['idP'],'rv');
                                                            break;

                                                            case 'ls':
                                                                $cmp=postexist($fetch_s['idP'],'ls');
                                                            break;

                                                            case 'ar':
                                                                $cmp=postexist($fetch_s['idP'],'ar');
                                                            break;

                                                            case 'dc':
                                                                $cmp=postexist($fetch_s['idP'],'dc');
                                                            break;
                                                        }
                                                        
                                                        $exist=(postexist($noti['post'],'rp') && postexist($rp['idC'],'cm') && $cmp);

                                                    }elseif ($noti['type']=='ac|like'){
                                                         $exist=postexist($noti['post'],'ac');
                                                    }elseif($noti['type']=='dr|like'){
                                                         $exist=postexist($noti['post'],'dr');
                                                    }elseif($noti['type']=='ar|like'){
                                                         $exist=postexist($noti['post'],'ar');
                                                    }elseif($noti['type']=='fd|like'){

                                                         $exist=postexist($noti['post'],'fd');
                                                    }elseif($noti['type']=='ls|like'){
                                                         $exist=postexist($noti['ls'],'cm');
                                                    }elseif($noti['type']=='rv|like'){

                                                        $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                                                        $stmt_r->bind_param("s", $noti['post']);
                                                        $stmt_r->execute();
                                                        $result_r=$stmt_r->get_result();
                                                        $fetch_r = $result_r->fetch_assoc();

                                                         $exist=postexist($noti['post'],'rv');
                                                    }elseif($noti['type']=='rc|like'){

                                                        $stmt_r = $conn->prepare("SELECT * FROM recom WHERE id = ? ");
                                                        $stmt_r->bind_param("s", $noti['post']);
                                                        $stmt_r->execute();
                                                        $result_r=$stmt_r->get_result();
                                                        $fetch_r = $result_r->fetch_assoc();

                                                         $exist=postexist($noti['post'],'rc');
                                                    }else{
                                                         $exist=true;
                                                    }
                            
                                                    if($exist){ ?>
                                                            
                                                    <li id="<?php echo $noti['id']; ?>" class="list-group-item unseen">
                                                        <a href="notification.php?id=<?php echo $noti['id']; ?>" class="overlay">
                                                        </a>
                                                        <span class="avatar">
                                                            <img src="process/<?php echo notificationF($noti,"picture"); ?>" class="w-40 img-circle">
                                                        </span>

                                                        <span class="message">
                                                            <a href="profile.php?id=<?php echo notificationF($noti,"code"); ?>"><?php echo notificationF($noti,"user"); ?></a>
                                                            
                                                            <?php echo notificationF($noti,"text"); ?>
                                                            
                                                            <br>
                                                            <small class="timeago">
                                                                <script type="application/javascript">
                                                                    moment.locale("ar_AL");
                                                                    document.write(moment('<?php echo $noti['wn'] ?>', "YYYY-MM-DD hh:mm:ss").fromNow());

                                                                </script>
                                                            </small>
                                                        </span>
                                                    </li>
                                                    <?php }else{ ?>
                                                            
                                                    <?php } ?>
                                                    
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <script type="text/javascript">
                                </script>
                            </ul>
                            <?php 
                            }else{
                            ?>
                            <script type="text/template" id="nav-notifications"></script>
                            <li class="nav-item"><a class="nav-link m-l-sm" href="signup.php"><span style="font-size: 20px">ﺗﺴﺠﻴﻞ</span></a></li>
                            <li class="nav-item"><a class="nav-link nav-login m-l-sm" href="signin.php"><span style="font-size: 20px">ﺩﺧﻮﻝ</span></a></li>
                            <?php } ?>
                        </ul>
<script type="text/javascript">
                          
                                $('.btn-slide-menu').on('click', function() {
                                    $('#menu').toggleClass('active');
                                    $('#hdr').toggleClass('active');
                                    $('#app').toggleClass('active');
                                });
                           

                        </script>
                        
                        
                    </div>
                </div>
            </div>