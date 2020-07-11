<?php session_start();
include("process/conn.php");
include("process/iama.php");

if (isset($_SESSION['id']) && ($_SESSION['type']=='1') ){



?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>لوحة التحكم - المستعملون</title>
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
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">
    <link href="css/styled.css" rel="stylesheet" type="text/css">
    
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
    



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
        .rls{
            margin-bottom: 21px;
            margin-top: 13px;
            border: 2px solid #00304e;
            padding: 10px 0px 4px;
        }

    </style>
</head>

<body>
    <?php include("menu.php"); ?>

            <div style="" id="content" class="slideout-panel slideout-panel-right">
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
                                    <?php admin_menu() ?>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-lg-11 tab-content">
                                <div role="tabpanel" id="send" class="box tab-pane  fade in " role="tabpanel">
                                    
                                </div>


                                <?php           
    
    
                                                $me=$_SESSION['id'];
                                                $stmtuA = $conn->prepare("SELECT * FROM users WHERE code!=? ");
                                                $stmtuA->bind_param("s", $me);
                                                $stmtuA->execute();
                                                $resultuA=$stmtuA->get_result();
    
    
                                                
                                                $stmtu = $conn->prepare("SELECT * FROM users WHERE code!=? ORDER BY type DESC LIMIT 10    ");
                                                $stmtu->bind_param("s", $me);
                                                $stmtu->execute();
                                                $resultu=$stmtu->get_result();
                                                $x=0;
                                            ?>

                                <div id="outbox" class="box  ">
                                    
                                    <div style="margin-top:20px;padding-bottom: 20px">
                                    <?php 
                                        $f=[];
                                        $stmte = $conn->prepare("SELECT count(id) as topics FROM messages");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topics']=$resulte->fetch_assoc()['topics'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as topT FROM messages WHERE  DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['topT']=$resulte->fetch_assoc()['topT'];
    
                                        $stmte = $conn->prepare(" SELECT count(id) as visits FROM users WHERE type='2'");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comments']=$resulte->fetch_assoc()['visits'];
    
                                        $stmte = $conn->prepare("SELECT count(id) as comT FROM users WHERE type='2' AND DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['comT']=$resulte->fetch_assoc()['comT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as forum FROM users ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forum']=$resulte->fetch_assoc()['forum'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as forT FROM users WHERE DATE(`wn`) = CURDATE()");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['forT']=$resulte->fetch_assoc()['forT'];

    
                                        $stmte = $conn->prepare(" SELECT count(id) as gde FROM friend WHERE status='0' ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gde']=$resulte->fetch_assoc()['gde'];

    
                                        $stmte = $conn->prepare("SELECT count(id) as gdeT FROM friend WHERE status='0' AND DATE(`wn`) = CURDATE()  ");
                                        $stmte->execute();
                                        $resulte=$stmte->get_result();
                                        $numr=$resulte->num_rows;
                                        $f['gdeT']=$resulte->fetch_assoc()['gdeT'];

    
//                                        $stmte = $conn->prepare(" SELECT count(id) as visits FROM visits WHERE page='forum' OR page='descu' OR page='topics' UNION SELECT count(id) as visT FROM visits WHERE DATE(`wn`) = CURDATE()");
//                                        $stmte->execute();
//                                        $resulte=$stmte->get_result();
//                                        $numr=$resulte->num_rows;
//                                        $f['visits']=$resulte->fetch_assoc()['visits'];
//                                        $f['visT']=$resulte->fetch_assoc()['visT'];

                                    ?>



                                            
                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>الرسائل</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">

                                                                <h3><span></span><span class="counter"><?php echo $f['topics']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                            </div>
                                                        </div>
                                                        <div class="income-range">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['topT']; ?> </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30" >
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>ط.الصداقة</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['gde']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">

                                                            </div>
                                                        </div>
                                                        <div class="income-range low-value-cl">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['gdeT']; ?></span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>الموظفون</h2>
                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['comments']; ?></span></h3>
                                                            </div>


                                                        </div>
                                                        <div class="income-range order-cl">
                                                            <p>اليوم</p>
                                                            <span class="income-percentange"><?php echo $f['comT']; ?> </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                                    <div class="income-title">
                                                        <div class="main-income-head">
                                                            <h2>المستعملون</h2>

                                                        </div>
                                                    </div>
                                                    <div class="income-dashone-pro">
                                                        <div class="income-rate-total">
                                                            <div class="price-adminpro-rate">
                                                                <h3><span class="counter"><?php echo $f['forum']; ?></span></h3>
                                                            </div>
                                                            <div class="price-graph">
                                                            </div>
                                                        </div>
                                                        <div class="income-range visitor-cl">

                                                            <span class="income-percentange pull-right"><?php echo $f['forT']; ?></span>
                                                            <p>اليوم</p>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                    </div>
                                    <div class="box-header" style="display: block ruby;margin-top:20px">
                                        
                                        
                                        <h1>المستخدمون &amp; المسيرون. <b>(<?php echo $resultuA->num_rows; ?>)</b></h1>
                                        <div id="confirmed" style="width:auto;float: left;" class="el-input el-input--suffix _600 ">
                                            <!---->

                                            <input type="text" id="searchu" autocomplete="off" placeholder="بحث عن مستعمل..." class="el-input__inner">

                                            <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i id="" class="el-input__icon el-icon-search"></i>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!----></span>
                                                <!----></span>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="box-body" style="min-height: 500px;">
                                       <table id="original_t" class="table" style="text-align:right;">
                                          <thead>
                                            <tr>
                                              <th scope="col" style="text-align:right">#</th>
                                              <th scope="col" style="text-align:right">الاسم</th>
                                              <th scope="col" style="text-align:right">البريد الالكتروني</th>
                                              <th scope="col" style="text-align:right">تاريخ التسجيل</th>   
                                              <th scope="col" style="text-align:right">المشاركات</th>
                                              <th scope="col" style="text-align:right">الوصف</th>
                                              <th scope="col" style="text-align:right">خيارات</th>
                                            </tr>
                                          </thead>
                                          <tbody id="ubody">
                                            
                                            <?php while($user=$resultu->fetch_assoc()){ $x++; ?>
                                              
                                            <tr id="user<?php echo $user['code']; ?>">
                                              <th scope="row"><?php echo $x; ?></th>
                                                  <td><?php echo '<img src="process/'. $user['picture'].'" style="border-radius:50%;height:30px;width: 30px;margin-left:10px">'; echo $user['username']; ?></td>
                                              <td><?php echo $user['email']; ?></td>
                                              <td><?php echo substr($user['wn'],0,10); ?></td>
                                              <td><?php #notyet ?></td>
                                              <td><?php if($user['type']=='1'){echo "أدمن";}elseif($user['type']=='2'){echo "موظف";}else{echo "عضو";} ?></td>
                                              <td>
                                                <button type="button" onclick="Uoption('delete','<?php echo $user['code']; ?>')" data-toggle="modal" data-target="#option"  class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                                <button type="button" onclick="Uoption('text','<?php echo $user['code']; ?>')" data-toggle="modal" data-target="#option"  class="btn btn-info btn-circle btn-xl"><i class="fa fa-envelope"></i></button>
                                                <button type="button" onclick="Uoption('role','<?php echo $user['code']; ?>')" data-toggle="modal" data-target="#option"  class="btn btn-warning btn-circle btn-xl"><i class="fa fa-handshake"></i></button>
                                              </td>
                                            </tr>
                                            <?php } ?>
                                            
                                          </tbody>
                                        </table>
                                        
                                        <nav aria-label="...">
                                          <ul class="pagination">
                                              <?php 
                                                $all=$resultuA->num_rows;
                                                $pages=ceil($all/10); #3
                                                
                                                $start=0;
                        
                                              ?>
                                              
                                            
                                            <li class="page-item ">
                                              <a class="page-link"  onclick="pageu('n')" tabindex="-1">التالي</a>
                                            </li>
                                            <?php while ($pages>0) { #3<0 ?>
                                            <li id="page<?php echo $pages-1; ?>" class="page-item <?php if($pages=='1'){echo 'active';}else{} ?>">
                                              <a class="page-link"  onclick="pageu('<?php echo $pages-1; ?>')" ><?php echo $pages; ?></a>
                                            </li>
                                             <?php  $pages--; } ?>
                                            <li class="page-item ">
                                              <a class="page-link"  onclick="pageu('p')" >السابق</a>
                                            </li>
                                           
                                          </ul>
                                        </nav>
                                        
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
<div class="modal fade" id="option" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Modal title</h5>
        <button style="position: absolute;top: 21px;right: 95%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-primary" id="modal_confirm">optB</button>
      </div>
    </div>
  </div>
</div>
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/AD.js"></script>
    <script type="application/javascript">
        live();
    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
