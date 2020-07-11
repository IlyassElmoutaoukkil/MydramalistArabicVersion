<?php session_start();
include("process/conn.php");
include("process/iama.php");
if (isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('contact',$_SESSION['id'])) || $_SESSION['type']=='1') ){

$page=false;
$elemnt=false;
$index=false;
                                                                                                                        
if(isset($_GET['op']) && !empty($_GET['op']) && ($_GET['op']=='page' || $_GET['op']=='elemnt' || $_GET['op']=='index') ){
    
    switch($_GET['op']){
        
        case 'page':
            $page=true;
        break;
            
        case 'elemnt':
            $elemnt=true;
        break;
            
        case 'index':
            $index=true;
        break;
    }
    
}else{
    $index=true;
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>لوحة التحكم - الواجهة</title>
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
    <link rel="stylesheet" href="css/styled.css">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>

    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>

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

    	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    <script type="text/javascript" src="dist/en/js/summernote.min.js"></script>
    <script type="text/javascript" src="js/summernote-ar-AR.js"></script>


    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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

                        <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div>
                    </div>
                </div>
            </div>




            <div id="pm" class="container-fluid">
                <div class="row">

                    <style type="text/css">
                        .admin_nav li {
                            padding: 23px 0px;
                            cursor: pointer;
                            font-size: 23px;
                        }

                        .admin_nav .active {
                            background-color: #00619d;
                            color: #fff;
                        }

                        .admin_nav li:hover {
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
                        <div id="send">

                        </div>


                        <div id="inbox" class="box fade in active">
                            <div class="box-header">
                                <h1>الواجهات و الصفحات</h1>
                            </div>
                            <div class="box-body" style="min-height: 300px;">

                                <nav class="justify-content-end">

                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link <?php if($index){?> active <?php } ?>" id="nav-home-tab" href="admin_front.php?op=index">الرئيسية</a>

                                        <a class="nav-item nav-link <?php if($page){?> active <?php } ?> " id="nav-profile-tab" href="admin_front.php?op=page">الصفحات</a>

                                        <a class="nav-item nav-link <?php if($elemnt){?> active <?php } ?>" id="nav-contact-tab" href="admin_front.php?op=elemnt">العناصر الأخرى</a>
                                    </div>
                                </nav>
                                <div class="" id="nav-tabContent">


                                    <?php if($index){ ?>
                                    <div class="" id="nav-home">
                                        <div>

                                        </div>
                                    </div>
                                    <?php } ?>


                                    <?php if($page){ ?>
                                    <div class="" id="nav-profile">

                                        <?php 
                                            
                                            #pages 
                                            /* 
                                            
                                            
                                            page->name          last 10 
                                            page->type          filter1, filter2
                                            page->content       text...
                                            page->wn            wn ...
                                            
                                            
                                            */
                                                        
                                                        
                                            
                                            ?>



                                        <div class="" style="margin-top:10px; border:dashed 1px #f00; padding :20px" id="nav-contact">
                                            <div class="col-lg-12">
                                                <h3 style="margin-top:20px">الصفحات</h3>
                                                <button onclick="addPage()" data-toggle="#add_modal" class="btn btn-primary" style="position: relative; float:left">أضف صفحة <i class="fa fa-plus"></i></button>



                                            </div>

                                            <div style="text-align:center; margin-top: 50px"><button class="btn btn-primary"> حفظ </button></div>
                                        </div>


                                    </div>
                                    <?php } ?>

                                    <?php if($elemnt){ ?>
                                    <form id="formlogo">

                                        <div class="" style="margin-top:10px; border:dashed 1px #f00; padding :20px" id="nav-contact">
                                            <div>
                                                <h3 style="margin-top:20px">أيقونة الموقع</h3>
                                                <div class="row" id="logo">
                                                    <div class="col-lg-4 text-center" style="padding:6px;border-right: 1px solid #000;">
                                                        <h1>الأيقونة الرئيسية</h1>
                                                        <div>
                                                            <input onchange="imageShow(this,'main')" type="file" id="main">
                                                            <div class="alert alert-error" id="error_main"></div>
                                                        </div>

                                                        <div style="margin-top: 13px;border: 1px solid #ffffff" id="disp_main">
                                                            <?php
                                                             $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='main_logo'");
                                                             $stmtnm->execute();
                                                             $resultnm=$stmtnm->get_result();
                                                            ?>

                                                            <?php if($resultnm->num_rows=='0'){}else{ 
                                                            $info=$resultnm->fetch_assoc();
                                                            ?>


                                                            <img src="process/<?php echo $info['info'] ?>">

                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 text-center" style="padding:6px;border-right: 1px solid #000;">
                                                        <h1>أيقونة الهاتف</h1>
                                                        <div>
                                                            <input onchange="imageShow(this,'mobile')" type="file" id="mobile">
                                                            <div class="alert alert-error" id="error_mobile"></div>
                                                        </div>

                                                        <div style="margin-top: 13px;border: 1px solid #ffffff" id="disp_mobile">
                                                            <?php
                                                             $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='mobile_logo'");
                                                             $stmtnm->execute();
                                                             $resultnm=$stmtnm->get_result();
                                                            ?>

                                                            <?php if($resultnm->num_rows=='0'){}else{ 
                                                            $info=$resultnm->fetch_assoc();
                                                            ?>


                                                            <img src="process/<?php echo $info['info'] ?>">

                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 text-center" style="padding:6px;">
                                                        <h1>ايقونة اسفل الصفحة</h1>
                                                        <div>
                                                            <input onchange="imageShow(this,'footer')" type="file" id="footer">
                                                            <div class="alert alert-error" id="error_footer"></div>
                                                        </div>

                                                        <div style="margin-top: 13px;border: 1px solid #ffffff" id="disp_footer">
                                                            <?php
                                                             $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='footer_logo'");
                                                             $stmtnm->execute();
                                                             $resultnm=$stmtnm->get_result();
                                                            ?>

                                                            <?php if($resultnm->num_rows=='0'){}else{ 
                                                            $info=$resultnm->fetch_assoc();
                                                            ?>


                                                            <img src="process/<?php echo $info['info'] ?>">

                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="text-align:center; margin-top: 50px"><button class="btn btn-primary"> حفظ </button></div>
                                        </div>
                                    </form>




                                    <div class="" style="margin-top:10px; border:dashed 1px #f00; padding :20px" id="nav-contact">
                                        <div>
                                            <form id="formSocial">
                                                <h3 style="margin-top:20px">مواقع التواصل الاجتماعي</h3>
                                                <div class="row" id="logo">

                                                    <div class="col-lg-12">
                                                        <label>رابط صفحة الفايسبوك</label>
                                                        <div class="input-group">
                                                            <input name="facebook" style="direction:ltr" type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <label>رابط تويتر</label>
                                                        <div class="input-group">
                                                            <input name="twitter" style="direction:ltr" type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <label>رابط قنات اليوتوب</label>
                                                        <div class="input-group">
                                                            <input name="youtube" style="direction:ltr" type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <label>رابط صفحة الانستكرام</label>
                                                        <div class="input-group">
                                                            <input name="instagram" style="direction:ltr" type="text" class="form-control">
                                                            <input style="display:none" name="social" value="social" style="direction:ltr" type="text" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="text-align:center; margin-top: 50px"><input type="submit" class="btn btn-primary" value="حفظ"> </div>
                                            </form>
                                        </div>


                                    </div>
                                    <?php } ?>
                                </div>

                                <div>
                                    <!-- chart -->

                                </div>

                                <div>
                                    <!-- otherdata -->
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
                </div>
            </div>
            <script type="text/javascript" src="/dist/en/js/inbox.js?v=5.4.6a"></script>
            <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
        </div>
    </div>

    <?php include('footer.php'); footer(); ?>
    </div>
    </div>

    <div id="mdl-manage-modal"></div>
    <div id="mdl-modal"></div>

    <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div role="dialog" aria-modal="true" aria-label="" class="el-dialog" style=" width: 898px;">
             <form id="pageCr"><div class="el-dialog__header"><span class="el-dialog__title" id="addtitle"></span><button type="button" aria-label="Close" class="el-dialog__headerbtn" data-dismiss="modal"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
            <div class="el-dialog__body">
                <div style="min-height: 408px;">
                    <div class="col-lg-12">
                       
                            <input name="pages" value="creation" style="display:none">
                            <div class="col-lg-12">
                                <label>عنوان الصفحة: </label>
                                <div class="input-group">
                                    <input name="title" style="" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label>نوع الصفحة: </label>
                                <div class="input-group">

                                    <select name="type" style="" type="text" class="form-control">
                                        <option value=""></option>
                                        <option value="filter">صفحة أعمال/أشخاص</option>
                                        <option value="text">نص</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-lg-12">
                                <label>محتوى الصفحة: </label>
                                <div class="input-group">
                                    <textarea name="content" style="" id="summernote1" type="text" class="form-control">
                                    </textarea>
                                </div>
                            </div>
                      
                        <script>
                                            (function($) {
                                                "use strict";
                                                $('#summernote1').summernote({
                                                    height: 200,
                                                    toolbar: [
                                                        // [groupName, [list of button]]
                                                        ['style', ['bold', 'italic', 'underline', 'clear', 'fontsize', 'fontsizeunit', 'forecolor', 'backcolor']],
                                                        ['font', ['strikethrough']],

                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['height', ['height']],
													
														  
                                                    ],
													link: [
														['link', ['linkDialogShow', 'unlink']]
													],
													
													lang: "ar-AR",
													callbacks: {
													
													}
                                                });

                                            })(jQuery);
											

                                        </script>
                    </div>
                </div>
            </div>
            <div class="el-dialog__footer">
                <div class="dialog-footer">
                    <!---->

                    <button aria-label="Close" data-dismiss="modal" style="margin-left:4px;" type="button" class="el-button btn btn-default el-button--default">
                        <!---->
                        <!----><span>إلغاء </span></button><input value="حفظ" id="save_add" type="submit" class="el-button btn btn-success el-button--primary">
                        <!---->
                        <!----> </div>
                
                  
            </div>
                 </form>
        </div>
    </div>

    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/add_gdesc.js"></script>
    <script type="text/javascript" src="dist/en/js/AD.js"></script>
    <script type="application/javascript">
        live();

    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
