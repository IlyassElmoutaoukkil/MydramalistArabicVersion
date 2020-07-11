<?php session_start();
if (isset($_SESSION['id'])){
include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>إعدادات</title>
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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="dist/en/js/select.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>



    <link href="dist/css/select-theme-default.css" rel="stylesheet" type="text/css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />



    <link href="dist/css/select-theme-chosen.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="dist/en/js/summernote.min.js"></script>

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
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/account.js"></script>
    <script type="text/javascript" src="js/editormd.min.js"></script>


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
    <?php include("menu.php");addvisite('settings'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2009">
                <div class="spnsr-top-2009 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CI_oopzP9OcCFZLHUQodeo0I1w">
                        <script>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div id="app_view" style="min-height: 450px;" class="">
                                <div class="box-header box-navbar">
                                    <h1>تعديلات</h1>
                                    <ul class="nav nav-tabs">

                                        <?php
                                        if(isset($_GET['option'])){
                                            if($_GET['option']=='account'){
                                              $op='acc';
                                            }else{
                                              $op='pri';  
                                            }
                                            
                                        }else{
                                            $op='acc';
                                        }
                                        ?>



                                        <li class="page-item nav-item  <?php if($op=='pri') { ?> router-link-exact-active active <?php } ?>"><a href="settings.php?option=privacy" class="nav-link">الأمن &amp; الخصوصية</a></li>

                                        <li class="page-item nav-item <?php if($op=='acc') { ?> router-link-exact-active active <?php } ?>"><a href="settings.php?option=account" class="nav-link">حسابي</a></li>


                                    </ul>
                                </div>
                                <div tid="6vvQ7g" code="MA" class="">
                                    <div class="box-body" style="min-height: 500px;">
                                        <?php if($op=='acc') { ?>
                                        <form id="per_inf" method="post">
                                            <div class="p-t">
                                                <div class="form-group">
                                                    <div class="row"><label style="float:right" for="display_name" class="col-sm-2 control-label"><b>الصورة الشخصية</b></label>
                                                        <div class="col-md-4" style="float:right">
                                                            <div class="row">
                                                                <div class="col-md-4" style="float:right; margin-bottom:15px;"><img id="myimgpic" src="process/<?php echo $_SESSION['img'] ?>" class="w-64"></div>
                                                                <div class="file-field">

                                                                    <div class="file-field">
                                                                        <div class="btn btn-primary btn-sm float-left">
                                                                            <span>رفع صورة</span>
                                                                            <input accept='image/*' name="profp" onchange="uploadmypic(this)" style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;width: 100%;padding: 0;margin: 0;cursor: pointer;filter: alpha(opacity=0);opacity: 0;" type="file">
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php
                                                    $me=$_SESSION['id'];
                                                    $info;
                                                    $info=userinfo($me);
                                                    ?>
                                                        <div class="row">

                                                            <div class="col-sm-2" style="float:right;"><label for="username" class="control-label"><b>اسم المستخدم</b></label>
                                                            </div>

                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-input">
                                                                    <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" autocomplete="off" class="el-input__inner">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-2" style="float:right;"><label for="email" class="control-label"><b>البريد الالكتروني</b></label></div>
                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-input el-input-group el-input-group--append" style="float:right;">
                                                                    <input type="email" name="email" value="<?php echo $info['email'] ?>" autocomplete="off" class="el-input__inner">

                                                                    <div class="el-input-group__append">
                                                                        <?php if($info['emailver']=='0'){ ?>
                                                                        <b id="imv" class="text-error">غير مؤكد</b>
                                                                        <?php }else{ ?>
                                                                        <b id="imv" class="text-success">مؤكد</b>
                                                                        <?php }  ?>


                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-2" style="float:right;"><label for="location" class="control-label"><b>الدولة</b></label></div>
                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-input">
                                                                    <!----><input name="country" value="<?php
    
                                                                           include ("process/php_country_array.php");
                                                                        $client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = array('country'=>'', 'city'=>'');
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}else{
    $ip = $remote;
}
                                                                      
        $access_key = 'b9806350050c3a76ad55fdb733feca0f';
        // Initialize CURL:
        
      
        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $api_result = json_decode($json, true);

        // Output the "capital" object inside "location"
        $code=$api_result['country_code'];
                                                                            
                                                                            echo $countries[$code];
                                                                    
                                                                    ?>" type="text" autocomplete="off" class="el-input__inner">

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
                                                            <div class="col-sm-2" style="float:right;"><label for="location" class="control-label"><b>الجنس</b></label></div>
                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-select dropdown">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix ">
                                                                        <!----><select name="genre" type="text" readonly="readonly" autocomplete="off" placeholder="إختر" class="el-input__inner">
                                                                            <option value="1"> ذكر</option>
                                                                            <option value="0"> أنثى</option>
                                                                        </select>
                                                                        <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                                <!----></span>
                                                                            <!----></span>
                                                                    </div>
                                                                    <!--
                                                           
-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-2" style="float:right;"><label for="location" class="control-label"><b>تاريخ الإزدياد</b></label></div>
                                                            <div class="col-sm-5" style="float:right;">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="el-select">
                                                                            <!---->
                                                                            <div class="el-input el-input--suffix">
                                                                                <!----><input value="<?php echo substr($info['birth'],2,20); ?>" name="birth" id="birth" type="text" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">

                                                                                <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
                                                                                        <!---->
                                                                                        <!---->
                                                                                        <!---->
                                                                                        <!---->
                                                                                        <!----></span>
                                                                                    <!----></span>
                                                                                <!---->
                                                                                <!---->
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                </div> <small class="text-muted">تاريخ ميلادك سيبقى دائما مخفي</small>
                                                            </div>
                                                            <div class="col-sm-2"><label for="dob_privacy" class="p-t-xs">
                                                                    <input type="checkbox" <?php if (substr($info['birth'],0,1)=='1'){echo "checked";}else{} ?> id="birthc" name="dds" value="hide" data-toggle="toggle">

                                                                    <script>
                                                                        $('#birthc').bootstrapToggle({
                                                                            on: 'عام',
                                                                            off: 'مخفي'
                                                                        });

                                                                    </script>

                                                                </label></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-2" style="float:right"><label for="location" class="control-label"><b>حدثنا عنك</b></label></div>

                                                            <div class="col-sm-10" style="border:1px solid #00000040; border-radius:3px;padding:0px;">

                                                                <textarea value="" name="disc" id="summernote1"><?php echo $info['descr'] ?></textarea>



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
                                                                            ['height', ['height']]
                                                                        ]
                                                                    });

                                                                })(jQuery);
                                                                $('#birth').datepicker({
                                                                    format: 'mm-dd-yyyy',
                                                                });

                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="box-footer b-t"><input value="حفظ التغييرات" type="submit" class="el-button el-button--primary">
                                                <!---->
                                                <!---->
                                            </div>

                                        </form>

                                        <?php }else{ ?>
                                        <form id="passchange" method="post">
                                            <div class="p-t" >
                                                <div class="form-group" >
                                                    <div class="form-group">

                                                        <div class="row">

                                                            <div class="col-sm-2" style="float:right;"><label for="pass" class="control-label"><b>كلمة سر الجديدة</b></label>
                                                            </div>

                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-input">
                                                                    <input type="password" name="pass" value="" autocomplete="off" class="el-input__inner">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">

                                                        <div class="row">

                                                            <div class="col-sm-2" style="float:right;"><label for="passval" class="control-label"><b>تأكيد كلمة السر </b></label>
                                                            </div>

                                                            <div class="col-sm-4" style="float:right;">
                                                                <div class="el-input">
                                                                    <input type="password" name="passval" value="" autocomplete="off" class="el-input__inner">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="box-footer b-t"><input value="حفظ التغييرات" type="submit" class="el-button el-button--primary">
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php } ?>
                                        <div class="el-loading-mask" style="display: none;">
                                            <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                                    <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                                </svg>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="el-loading-mask" style="display: none;">
                                        <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                                <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                            </svg>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="account-page"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="dist/en/js/account.js?v=5.4.13a"></script>
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
        var email = "<?php echo $_SESSION['email']; ?>";

    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
