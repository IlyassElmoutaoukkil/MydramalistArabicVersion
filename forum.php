<?php
session_start();
include("process/conn.php");
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>المحادثات</title>
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
    <link href="dist/css/feeds.css?v=5.4.6" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/diberp.js?v=5.4.6g47"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/feeds.js"></script>
    <script type="text/javascript" src="/dist/en/js/vendor.js?v=5.4.6"></script>
    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link href="dist/css/clist.css?v=5.4.6" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
        <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>


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
    <?php include("menu.php");addvisite('forum'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="discussions_trending">
                            <div class="box">
                                <div class="box-header">
                                    <h2>أخر المحادثات</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <?php ?>
                                    
                                        <?php  getlastdes('rec_desc'); ?>
                            

                                </ul>
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h2>محادثات نشيطة</h2>
                                </div>
                                <div class="box-divider m-a-0"></div>
                                <ul class="list">
                                    <?php  ?>
                              
                                        <?php  getlastdes('act_desc'); ?>
                               
                                    <?php  ?>
                                </ul>
                            </div>
                            <div id="sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 280px;">
                                <div class="sticky" style="width: 334px; position: fixed; top: 78px; z-index: auto;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_GET['id']) && is_numeric($_GET['id'])){ ?>
                        <?php
                            
//Pagimation ------------------------
    $stmtF = $conn->prepare(" SELECT id FROM topics");
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
    
    
    
//paginameto
                            
                            $stmtF = $conn->prepare(" SELECT id,name,descr FROM forum WHERE id=?");
                            $stmtF->bind_param("s", $_GET['id']);
                            $stmtF->execute();
                            $resultF=$stmtF->get_result();
                            if($resultF->num_rows=='1'){
                            $forum=$resultF->fetch_assoc();                                                
                            
                            $stmtT = $conn->prepare(" SELECT * FROM topics WHERE idF=? ORDER BY wn DESC LIMIT 10 OFFSET ?");
                            $stmtT->bind_param("si", $_GET['id'],$offset);
                            $stmtT->execute();
                            $resultT=$stmtT->get_result();
                            
                            
                    ?>
                    <div class="col-lg-8 col-md-8">
                        <div class="discussion-header">
                            <a>
                                <h1><?php echo $forum['name'] ?></h1>
                            </a>
                            <p class="description"><?php echo $forum['descr']; ?></p>
                        </div>
                        <div class="row thead-container-top">
                            <?php if(isset($_SESSION['id'])){ ?>
                            <div class="col-lg-3">
                                <button data-id="" data-toggle="modal" data-target="#add_topic_mo" class="btn btn-new-topic white addtoc"><span>موضوع جديد</span></button>
                            </div>
                            <?php } ?>
                            <div class="col-lg-9 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box thread-container">
                            <div class="table-responsive">
                                <table class="table thread-listing">
                                    <thead>
                                        <tr>
                                            <th style="text-align: right" class="thread-listing--title" colspan="2">المواضيع</th>
                                            <th style="text-align: right" class="thread-listing--replies">المشاركات</th>
                                            <th style="text-align: right" class="thread-listing--lastpost" width="215">أخر المشاركين</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($topics=$resultT->fetch_assoc()){
                                        
                                            $stmtF = $conn->prepare(" SELECT * FROM comments WHERE postT='dc' AND idP=? ORDER BY wn DESC");
                                            $stmtF->bind_param("s", $topics['id']);
                                            $stmtF->execute();
                                            $resultF=$stmtF->get_result();
                                        ?>
                                        <tr class="thread">
                                            <td class="thread--avatar"><span><img <?php $usi=userinfo($topics['idU']); ?> src="process/<?php echo $usi['picture']; ?>" width="30"></span></td>
                                            <td class="thread--discussion">
                                                <b><a class="text-primary" href="topic.php?id=<?php echo $topics['id']; ?>"><?php echo $topics['title']; ?></a></b>
                                                <span class="thread--byUser">بواسطة <a href="profile.php?id=<?php  echo $usi['picture']; ?>"><?php echo $usi['username'] ?> </a></span>
                                            </td>
                                            <td class="thread--replies"><?php echo $resultF->num_rows; ?></td>
                                            <td class="thread-last-post">
                                                
                                                <div class="media">
                                                    <?php if($resultF->num_rows=='0'){echo 'لا توجد اي مشاركات لحد الان';}else{ ?>
                                                       <?php $frst=true; while($last=$resultF->fetch_assoc()){ ?>
                                                        <?php if($frst){ $usi; $usi=userinfo($last['idU']); ?>
                                                        
                                                        <div class="poster--avatar"><a href="profile.php?id=<?php echo $last['idU']; ?>" class="poster-image"><img src="process/<?php echo $usi['picture']; ?>"></a></div>
                                                        <div class="media-body">
                                                            <div class="poster-name"><a href="profile.php?id=<?php echo $last['idU']; ?>"><?php echo $usi['username']; ?></a><br><small class="date text-muted"><script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $last['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());
                                                                            </script></small></div>
                                                        </div>
                                                        <?php $frst=false; }else{} ?>
                                                    <?php }} ?>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="thead-container-bottom row">
                            <?php if(isset($_SESSION['id'])){ ?>
                            <div class="col-lg-3">
                                <button data-id="" data-toggle="modal" data-target="#add_topic_mo" class="btn btn-new-topic white addtoc"><span>موضوع جديد</span></button>
                            </div>
                            <?php } ?>
                            <div class="col-lg-9 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="forum.php?id=<?php echo $_GET['id'];  ?>&page=<?php echo $pagemax;  ?>"></a></li>
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php }else{
                                ?> <script>window.location.href='forum.php'</script><?php
                    ?>
                        
                    
                    <?php } ?>
                    <?php }elseif(isset($_GET['search'])){ ?>
                                <?php
        
//Pagimation ------------------------
    if($_GET['search']=='mineonly' && isset($_SESSION['id'])){
        
    $stmtF = $conn->prepare(" SELECT * FROM topics WHERE idU=?");
    $stmtF->bind_param("s", $_SESSION['id']);
        
    }elseif(filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING)=='lasts'){
        
        $stmtF = $conn->prepare(" SELECT * FROM topics ");
        
    }else{
        
        $word=filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);
        $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
        $stmtF = $conn->prepare(" SELECT * FROM topics WHERE title LIKE CONCAT('%',?,'%') OR text LIKE CONCAT('%',?,'%') ");
        $stmtF->bind_param("ss", $word,$word);   
        
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
    
    
    
//paginameto
                                                                            
                            
                           
                            
                                                          
                                 if(filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING)=='onlymine' && isset($_SESSION['id'])){
        
                                    $stmtF = $conn->prepare(" SELECT * FROM topics WHERE idU=? ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                    $stmtF->bind_param("si", $_SESSION['id'],$offset);
                                    $stmtF->execute();
                                    $resultT=$stmtF->get_result();
                                     
                                }elseif(filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING)=='lasts'){

                                    $stmtF = $conn->prepare(" SELECT * FROM topics ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                    $stmtF->bind_param("i",$offset);
                                    $stmtF->execute();
                                    $resultT=$stmtF->get_result();
                                     
                                }else{

                                    $word=filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);
                                    $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
                                    $stmtF = $conn->prepare(" SELECT * FROM topics WHERE title LIKE CONCAT('%',?,'%') OR text LIKE CONCAT('%',?,'%')  ORDER BY wn DESC LIMIT 10 OFFSET ?");
                                    $stmtF->bind_param("ssi", $word,$word,$offset);   
                                     $stmtF->execute();
                                     $resultT=$stmtF->get_result();
                                }
                            
                    ?>
                    <div class="col-lg-8 col-md-8">
                        
                        <div class="row thead-container-top">
                            <?php if(isset($_SESSION['id'])){ ?>
                            <div class="col-lg-3">
                                <button data-id="" data-toggle="modal" data-target="#add_topic_mo" class="btn btn-new-topic white addtoc"><span>موضوع جديد</span></button>
                            </div>
                            <?php } ?>
                            <div class="col-lg-9 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="forum.php?search=<?php echo filter_var(htmlentities($_GET['search']),FILTER_SANITIZE_STRING);  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box thread-container">
                            <div class="table-responsive">
                                <table class="table thread-listing">
                                    <thead>
                                        <tr>
                                            <th style="text-align: right" class="thread-listing--title" colspan="2">المواضيع</th>
                                            <th style="text-align: right" class="thread-listing--replies">المشاركات</th>
                                            <th style="text-align: right" class="thread-listing--lastpost" width="215">أخر المشاركين</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($topics=$resultT->fetch_assoc()){
                                        
                                            $stmtF = $conn->prepare(" SELECT * FROM comments WHERE postT='dc' AND idP=? ORDER BY wn DESC");
                                            $stmtF->bind_param("s", $topics['id']);
                                            $stmtF->execute();
                                            $resultF=$stmtF->get_result();
                                        ?>
                                        <tr class="thread">
                                            <td class="thread--avatar"><span><img <?php $usi=userinfo($topics['idU']); ?> src="process/<?php echo $usi['picture']; ?>" width="30"></span></td>
                                            <td class="thread--discussion">
                                                <b><a class="text-primary" href="topic.php?id=<?php echo $topics['id']; ?>"><?php echo $topics['title']; ?></a></b>
                                                <span class="thread--byUser">بواسطة <a href="profile.php?id=<?php  echo $usi['picture']; ?>"><?php echo $usi['username'] ?> </a></span>
                                            </td>
                                            <td class="thread--replies"><?php echo $resultF->num_rows; ?></td>
                                            <td class="thread-last-post">
                                                
                                                <div class="media">
                                                    <?php if($resultF->num_rows=='0'){echo 'لا توجد اي مشاركات لحد الان';}else{ ?>
                                                       <?php $frst=true; while($last=$resultF->fetch_assoc()){ ?>
                                                        <?php if($frst){ $usi; $usi=userinfo($last['idU']); ?>
                                                        
                                                        <div class="poster--avatar"><a href="profile.php?id=<?php echo $last['idU']; ?>" class="poster-image"><img src="process/<?php echo $usi['picture']; ?>"></a></div>
                                                        <div class="media-body">
                                                            <div class="poster-name"><a href="profile.php?id=<?php echo $last['idU']; ?>"><?php echo $usi['username']; ?></a><br><small class="date text-muted"><script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $last['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());
                                                                            </script></small></div>
                                                        </div>
                                                        <?php $frst=false; }else{} ?>
                                                    <?php }} ?>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="thead-container-bottom row">
                            <?php if(isset($_SESSION['id'])){ ?>
                            <div class="col-lg-3">
                                <button data-id="" data-toggle="modal" data-target="#add_topic_mo" class="btn btn-new-topic white addtoc"><span>موضوع جديد</span></button>
                            </div>
                            <?php } ?>
                            <div class="col-lg-9 text-right">
                                <?php if($pagemax=='0'){}else{ ?>
                                <ul class="pagination">
                                    <?php if ($page-1<=0){}else{ ?>
                                    <li class="page-item prev"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $page-1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    <?php //before
                                     $x=$page;
                                     while($x>($page-3)){
                                         $x--;
                                         if($x<=0){
                                            
                                         }else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    <li class="page-item active"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                                    
                                    <?php //before
                                     $y=$page;
                                     while($y<$pagemax){
                                         $y++;
                                         if($y>($page+3)){}else{
                                     ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $y; ?>"><?php echo $y; ?></a></li>
                                     <?php 
                                     }}
                                    ?>
                                    
                                    
                                    
                                    
                                    <?php //after ?>
                                    <?php if ($page+1>$pagemax){}else{ ?>
                                    <li class="page-item next"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $page+1; ?>"></a></li>
                                    <?php } ?>
                                    
                                    
                                    <li class="page-item last"><a class="page-link" href="forum.php?search=<?php echo $_GET['search'];  ?>&page=<?php echo $pagemax; ?>"></a></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php }else{ ?>
                    <div class="col-lg-8 col-md-8">
                        <div class="content-full">
                            <div class="discussion-header">
                                <h1 class="text-2x">المحادثات</h1>
                                <div class="discussion-header_links m-b">

                                    <a href="?search=lasts">أخر المحادثات</a>
                                    |
                                    <a href="?search=onlymine">محادثاتي</a>

                                </div>
                                <div class="form-group">
                                    <form action="forum.php?" class="discussion-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button style="border-bottom-right-radius: 0;border-top-right-radius: 0;border-bottom-left-radius: .25rem;border-top-left-radius: .25rem;" class="btn white"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php 
                                        $stmte = $conn->prepare(" SELECT id,name FROM gdescussion");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        while ($gds=$resulte->fetch_assoc()){
                                            $stmtF = $conn->prepare(" SELECT * FROM forum WHERE idG=?");
                                            $stmtF->bind_param("s", $gds['id']);
                                            $stmtF->execute();
                                            $resultF=$stmtF->get_result();

                                            if($resultF->num_rows=='0'){}
                                            else{
                                    ?>
                            <div class="box clear discussion-container">
                                <div class="box-header b-b">
                                    <h3><?php echo $gds['name']; ?></h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table discussion-listing">
                                        <tbody>
                                            <?php while($forum=$resultF->fetch_assoc()){ ?>
                                            <tr>
                                                <td class="icon" width="25"><i class="fa fa-circle-thin text-lg text-muted"></i></td>
                                                <td class="discussion-listing--discussion">
                                                    <div class="row">
                                                        
                                                        <?php
                                                                    $stmtT = $conn->prepare(" SELECT * FROM topics WHERE idF=? ORDER BY wn DESC LIMIT 1");
                                                                    $stmtT->bind_param("s", $forum['id']);
                                                                    $stmtT->execute();
                                                                    $resultT=$stmtT->get_result();
                                                                    $topic=$resultT->fetch_assoc();
                                                                    if($resultT->num_rows=='0'){echo '<div class="col-lg-5 discuss-poster">لا توجد أي مشاركات بهدا المنتدى.</div>';}else{                  
                                                                ?>
                                                        <div class="col-lg-5 discuss-poster">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    <a href="profile.php?id=<?php $uinfo=userinfo($topic['idU']);echo $topic['idU']; ?>" class="poster-image w-32 avatar"><img class="img-responsive" src="process/<?php echo $uinfo['picture']; ?>"></a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="last-thread text-primary"><a href="topic.php?id=<?php echo $topic['id'] ?>" title="<?php echo $topic['title'] ?>"><?php echo $topic['title'] ?></a></div>
                                                                    <div class="poster-name"><a href="profile.php?id=<?php echo $topic['idU']; ?>"><?php echo $uinfo['username']; ?></a>
                                                                        <div class="date text-muted">
                                                                            <script type="application/javascript">
                                                                            moment.locale("ar_AL");
                                                                            document.write(moment('<?php echo $topic['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());
                                                                            </script></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="col-lg-7">
                                                            <div><b><a class="text-primary" href="?id=<?php echo $forum['id']; ?>"><?php echo $forum['name']; ?></a></b></div>
                                                            <div>
                                                                <p><?php echo $forum['descr']; ?></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <?php } ?>
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
<?php if(isset($_GET['id'])){ ?>
    <div id="add_topic_mo" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="comm_h_t">إضافة موضوع جديد</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>الموضوع</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><input type="text" id="topic_t" autocomplete="off" placeholder="العنوان " class="el-input__inner">
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                    
                    <div class="el-message-box__content">
                        <div class="el-message-box__container">
                            <!---->
                            <div class="el-message-box__message">
                                <p>نص الموضوع</p>
                            </div>
                        </div>
                        <div class="el-message-box__input" style="">
                            <div class="el-input">
                                <!----><textarea style="min-height:90px" id="topic_d" type="text" autocomplete="off" placeholder="وصف قصير للمنتدى" class="el-input__inner"></textarea>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-success" id="add_forum_b" data="" onclick="add_topic(this,'<?php echo $_GET['id']; ?>')">إضافة</button>
                </div>
                
                <div class="el-loading-mask" style="display: none;">
            <div class="el-loading-spinner">
                <svg viewBox="25 25 50 50" class="circular">
                    <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                </svg>

            </div>
        </div>
            </div>
        </div>
    </div>
<?php } ?>


    <div id="mdl-modal"></div>



    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/descussion.js"></script>
    <script type="application/javascript">
        live();

    </script>


</body>

</html>
