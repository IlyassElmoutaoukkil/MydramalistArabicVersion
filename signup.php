<?php 
session_start();
if (isset($_SESSION['id'])){
    header("location:index.php");
}else{
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تسجيل الدخول</title>
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
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    
    <link rel="stylesheet" href="js/toastr.min.css">
    <script type="text/javascript" src="js/tether.min.js"></script>
    
    
    <script type="text/javascript" src="js/toastr.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>

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
    <?php include("menu.php"); ?>
            <div id="content">
                <div class="app-body">
                    <div class="spnsr-wrapper-1950">
                        <div class="spnsr-top-1950 ads-off"></div>
                    </div>
                   
                    <div class="padding">
                        <div class="box">
                            <div class="box-body padding">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-offset-1 col-lg-10">
                                                <h5 class="m-b">هل تملك حسابا؟</h5>
                                                <p><b>سجل الان على  موقعنا.مجانا ويستغرق اقل من 30 ثانية!</b></p>
                                                <p>بدون التسجيل على موقعنا، لا يزال بامكانك قرائة المقالات و تصفح الافلام، لكن بالتسجيل ستحصل على الكثيرمن المميزات .</p>
                                                <ul class="features">
                                                    <li>القيام ببناء قائمة خاصة بك.</li>
                                                    <li>انضم الى مجتمعنا.</li>
                                                    <li>المساهمة في تطوير المحتوى</li>
                                                    <li>الكثير الكثير من الخصائص ~</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-6 col-md-6 b-l">
                                        <div class="row">
                                            <div class="col-lg-offset-1 col-lg-10">
                                                <h5 class="m-b-md">تسجيل حساب جديد</h5>
                                                <form role="form" method="post" id="register" class="ng-pristine ng-valid">
                                                    <div class="alert alert-danger" id="error" style="display:none"><b><a href="/cdn-cgi/l/email-protection#40333530302f3234002d392432212d212c2933346e232f2d7f3335222a2523347d1b133530302f32341d60152e21222c2560342f600c2f27292e"><span class="__cf_email__" data-cfemail="cebdbbbebea1bcba8ea3b7aabcafa3afa2a7bdbae0ada1a3"></span></a></b></div>
                                                    <div class="form-group">
                                                        <label>اسم المستخدم</label>
                                                        <input type="text" required name="username" class="form-control" placeholder="اسم المستخدم"> </div>
                                                    
                                                    <input style="display:none;" type="text" required name="register" class="form-control" value="register">
                                                    <div class="form-group">
                                                        <label>البريد الالكتروني</label>
                                                        <input type="email" required name="email" class="form-control" placeholder="البريد الالكتروني"> </div>
                                                    <div class="form-group">
                                                        <label>كلمة السر</label>
                                                        <input type="password" required name="password" class="form-control" placeholder="كلمة السر"> </div>
                                                    
                                                    <div class="checkbox">
                                                        <label class="md-check">
                                                            <input type="checkbox" ><i></i>تذكرني</label>
                                                    </div>
                                                    <div class="p-t m-b-xs">
                                                        <div class="row">

                                                           

                                                            <div class="col-md-12">
                                                                <input type="hidden" name="g-recaptcha-response" />
                                                                <button type="submit" class="btn btn-block btn-lg primary text-u-c">دخول</button>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </form>
<!--
                                                <p class="m-t text-center">لست عضوا بعد؟ <a href="signup.php" class="text-primary">سجل الان </a> — الموقع سهل و ممتع !</p>
                                                <div class="line line-dashed b-b signin-via"><span class="btn btn-icon btn-social white rounded">أو</span></div>
                                                <div class="m-b-sm"><a href="/auth/login?provider=facebook" class="btn btn-block primary"><i class="fab fa-facebook-f pull-left"></i>سجل عبر فايسبوك</a></div>
                                                <div class="m-b-sm"><a href="/auth/login?provider=google" class="btn btn-block btn-danger"><i class="fab fa-google-plus-g pull-left"></i>سجل  عبر كوكل </a></div>
                                                <div class="m-b-sm"><a href="/auth/login?provider=twitter" class="btn btn-block btn-info"><i class="fab fa-twitter pull-left"></i> سجل عبر تويتر</a></div>
-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            <div id="footer" class="app-footer black dk pos-rlt">
                <div class="spnsr-top-1950"></div>
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
                                    <li class="m-t-sm"><a href="/discussions/community-tasks/29624-mdl-writers-article-ideas-discussion"><span>تدوين</span></a></li>
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
    <script type="text/javascript" src="dist/en/js/mymain.js?v=4.34.1"></script>

</body>

</html>
<?php 
}
?>