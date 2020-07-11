<?php session_start();
if (isset($_SESSION['id'])){
include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>لوحة التحكم</title>
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
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
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
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script type="text/javascript" src="js/adsbygoogle.js?v=4.34.1g3"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">



    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LdvmnwUAAAAAJqyD_ag2I14Z-uU3GPyA6eBb_4Y&hl=en-US'></script>
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
                                .admin_nav li{
                                    padding: 23px 0px;
                                    cursor: pointer;
                                    font-size: 23px;
                                }
                                .admin_nav .active{
                                    background-color: #00619d;
                                    color: #fff;
                                }
                                
                                .admin_nav li:hover{
                                background-color: aliceblue;
                                    color: #000000;
                                }
                            </style>
                            
                            <div class="col-lg-1" style="">
                                <div class="box pm-menu" style="padding-top:10px;">
                                    <ul class="row no-gutter list nav-tabs text-center admin_nav" style="list-style:none;">
                                        
                                        <li class="col-xs-12 col-lg-12 active">
                                             <a href="admin_index.php"><i class="fa fa-tachometer-alt"></i></a>
                                        </li>
                                         
                                        <li class="col-xs-12 col-lg-12 " >
                                            <a href="admin_users.php"><i class="fa fa-user"></i></a>
                                        </li>
                                         
                                        <li class="col-xs-12 col-lg-12 " >
                                            <a href="admin_article.php"><i class="fa fa-newspaper"></i></a>
                                        </li>
                                         
                                        <li class="col-xs-12 col-lg-12 " >
                                            <a href=admin_log.php><i class="fa fa-bell"></i></a>
                                        </li>
                                         
                                        <li class="col-xs-12 col-lg-12 " >
                                            <a href="logout.php"><i class="fa fa-power-off"></i></a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-lg-11 tab-content">
                                <div role="tabpanel" id="send" class="box tab-pane  fade in " role="tabpanel">
                                    
                                </div>


                                <div id="inbox" class="box tab-pane fade in active" role="tabpanel">
                                    <div class="box-header">
                                        <h1>الواردة</h1>
                                    </div>
                                    <div class="box-body" style="min-height: 300px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="72"></th>
                                                    <th class="pull-right">الرسائل</th>
                                                    <th width="24">
                                                        <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span>
                                                                <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="">
                                                            </span>

                                                        </label>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                    
                                    $myid=$_SESSION['id'];
                                    $stmt = $conn->prepare("SELECT * FROM msession WHERE mto = ? ");
                                    $stmt->bind_param("s", $myid);
                                    $stmt->execute();
                                    $result=$stmt->get_result();
                                    
                                    $n=0;
                                    
                                    
                                    if($result->num_rows==0){ ?>

                                                <tr class="pm-item">
                                                    <td>

                                                    </td>
                                                    <td>

                                                        لا توجد اي رسائل واردة

                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>


                                                <?php }else{
                                       
                                    
                                    while($sessions1=$result->fetch_assoc()){
                                        
                                    ?>
                                                <?php
                                        $myid=$_SESSION['id'];
                                        
                                        $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom= ? AND mto= ? ) OR ( mto= ? AND mfrom=? ) ORDER BY id DESC  LIMIT 1");
                                        $stmt4->bind_param("ssss", $myid , $sessions1['mfrom'], $myid , $sessions1['mfrom']);
                                        $stmt4->execute();
                                        $result4=$stmt4->get_result();
                                        $message4=$result4->fetch_assoc();
                                        
                                        ?>
                                                <tr class="pm-item">
                                                    <td>
                                                        <?php 
                                            if ($sessions1['mfrom']==$_SESSION['id']){
                                                $dis=$sessions1['mto'];
                                            }else{
                                                $dis=$sessions1['mfrom'];
                                            }
                                            $stmt2 = $conn->prepare("SELECT * FROM users WHERE code=? ");
                                            $stmt2->bind_param("s", $dis);
                                            $stmt2->execute();
                                            $result2=$stmt2->get_result();
                                            $useri=$result2->fetch_assoc();
                                            
                                            ?>
                                                        <a href="profile.php?id=<?php echo $useri['code']; ?>" target="_blank" class="avatar"><img src="process/<?php echo $useri['picture']; ?>"></a>
                                                    </td>
                                                    <td>
                                                        <adata-toggle="tab" href="#messages" aria-controls="messages" role="tab" aria-selected="true" onclick="messageread('<?php echo $useri['code']; ?>')" class=""><span class="subject text-primary"><b><?php echo $sessions1['sub'] ?></b></span></a> <span class="author"><?php echo $useri['username']; ?></span> <span class="text-muted">

                                                                <script type="application/javascript">
                                                                    moment.locale("ar_AL");
                                                                    document.write(moment('<?php echo $message4['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                                </script>
                                                            </span>
                                                    </td>
                                                    <td>
                                                        <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span>
                                                                <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="1228261446689755136">
                                                            </span><span class="el-checkbox__label"></span></label>
                                                    </td>
                                                </tr>
                                                <?php
                                    
                                    }
                                    }
                                    
                                    ?>




                                            </tbody>
                                        </table>
                                        <div class="box-footer">
                                            <button disabled="disabled" type="button" class="el-button pull-right el-button--danger el-button--small is-disabled is-plain">

                                                <span>حدف</span></button>
                                            <div class="el-pagination">
                                                <button type="button" disabled="disabled" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button>
                                                <ul class="el-pager">
                                                    <li class="number active">1</li>



                                                </ul>
                                                <button  type="button" disabled="disabled" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button>
                                            </div>
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

                                <div id="outbox" class="box tab-pane fade in " role="tabpanel">
                                    <div class="box-header">
                                        <h1>الصادرة</h1>
                                    </div>
                                    <div class="box-body" style="min-height: 300px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="72"></th>
                                                    <th class="pull-right">الرسائل</th>
                                                    <th width="24">
                                                        <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span>
                                                                <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="">
                                                            </span>

                                                        </label>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                    
                                    $myid=$_SESSION['id'];
                                    $stmt = $conn->prepare("SELECT * FROM msession WHERE mfrom = ? ");
                                    $stmt->bind_param("s", $myid);
                                    $stmt->execute();
                                    $result=$stmt->get_result();
                                    $n=0;
                                    
                                    
                                    if($result->num_rows==0){ ?>

                                                <tr class="pm-item">
                                                    <td>

                                                    </td>
                                                    <td>

                                                        لا توجد اي رسائل واردة

                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>


                                                <?php }else{
                                       
                                    
                                    while($sessions=$result->fetch_assoc()){
                                        
                                    ?>
                                                <?php
                                        $myid=$_SESSION['id'];
                                       
                                        $stmt3 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom= ? AND mto= ? ) OR ( mto= ? AND mfrom=? ) ORDER BY id DESC  LIMIT 1");
                                        $stmt3->bind_param("ssss", $myid , $sessions['mto'], $myid , $sessions['mto']);
                                        $stmt3->execute();
                                        $result3=$stmt3->get_result();
                                        $message=$result3->fetch_assoc();
                                        
                                        ?>
                                                <tr class="pm-item">
                                                    <td>
                                                        <?php 
                                            if ($sessions['mfrom']==$_SESSION['id']){
                                                $dis=$sessions['mto'];
                                            }else{
                                                $dis=$sessions['mfrom'];
                                            }
                                            $stmt2 = $conn->prepare("SELECT * FROM users WHERE code=? ");
                                            $stmt2->bind_param("s", $dis);
                                            $stmt2->execute();
                                            $result2=$stmt2->get_result();
                                            $user=$result2->fetch_assoc();
                                            ?>
                                                        <a href="profile.php?id=<?php echo $user['code']; ?>" target="_blank" class="avatar"><img src="process/<?php echo $user['picture']; ?>"></a>
                                                    </td>
                                                    <td><a onclick="messageread('<?php echo $user['code']; ?>')" data-toggle="tab" href="#messages" aria-controls="messages" role="tab" aria-selected="true" class=""><span class="subject text-primary"><b><?php echo $sessions['sub'] ?></b></span></a> <span class="author"><?php echo $user['username']; ?></span> <span class="text-muted">

                                                            <script type="application/javascript">
                                                                moment.locale("ar_AL");
                                                                document.write(moment('<?php echo $message['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                                                            </script>
                                                        </span></td>
                                                    <td>
                                                        <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span>
                                                                <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="1228261446689755136">
                                                            </span><span class="el-checkbox__label"></span></label>
                                                    </td>
                                                </tr>
                                                <?php
                                    
                                    }
                                    }
                                    
                                    ?>




                                            </tbody>
                                        </table>
                                        <div class="box-footer">
                                            <button disabled="disabled" type="button" class="el-button pull-right el-button--danger el-button--small is-disabled is-plain">

                                                <span>حدف</span></button>
                                            <div class="el-pagination">
                                                <button type="button" disabled="disabled" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button>
                                                <ul class="el-pager">
                                                    <li class="number active">1</li>



                                                </ul>
                                                <button type="button" disabled="disabled" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="box tab-pane fade in" role="tabpanel" id="messages" style="min-height: 300px;">
                                    <div id="messagediv" class="box-header">
                                        <h1 id="subject"></h1>
                                    </div>
                                    <div class="box-body thread-post-form b-b">
                                        <div class="post-form-body">
                                            <div class="avatar"><img src="process/<?php echo $_SESSION['img']; ?>" class="user-avatar"></div>
                                            <div class="post-form-textarea">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <div class="el-textarea">
                                                            <textarea id="messagetext" placeholder="اكتب رسالة ..." class="el-textarea__inner" style="min-height: 54px; height: 54px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-right form-submit">
                                                            <button onclick="sendm()" id="thisbus" type="button" class="el-button el-button--primary is-plain">
                                                                <!---->
                                                                <!----><span><span>إرسال</span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul id="messagel" class="post-list">


                                            <!---->
                                        </ul>
                                    </div>
                                    <div class="box-footer">
                                        <div class="el-pagination">
                                            <button id="moremN" type="button" onclick="morem('plus')" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button>
                                            <ul class="el-pager">
                                                <li class="number active" id="numpm">1</li>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </ul>
                                            <button id="moremP" type="button" onclick="morem('minus')" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button>
                                        </div>
                                    </div>
                                    <div class="el-loading-mask" style="display: none;">
                                        <div class="el-loading-spinner">
                                            <svg viewBox="25 25 50 50" class="circular">
                                                <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                            </svg>
                                            <!---->
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
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();
    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
