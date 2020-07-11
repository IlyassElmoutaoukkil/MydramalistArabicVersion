<!DOCTYPE html>
<?php
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id']) && $login){
    
$userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM title WHERE id=?  AND admin_o='1'");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:topshows.php');}else{
        $personeinfos=$resultA->fetch_assoc();
    
?>
<html dir="rtl" lang="ar-AR">

<head>
    <title>مراجعة <?php echo $personeinfos['title']; ?></title>
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
    <link rel="stylesheet" href="css/review_form.css">





    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/toastr.min.css"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" href="css/Lobibox.min.css">
    <link rel="stylesheet" href="css/star-rating-svg.css">
    <link rel="stylesheet" href="dist/css/vendor.css?v=4.34.1">
    <link rel="stylesheet" href="dist/css/main.css?v=4.34.1">
    <script type="text/javascript" src="dist/en/js/manifest.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/Lobibox.js"></script>
    <script type="text/javascript" src="dist/en/js/vendor.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="dist/en/js/ui.js?v=4.34.1"></script>
    <link href="dist/css/inbox.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>

    <script type="text/javascript" src="js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
    <script type="text/javascript" src="js/diberp.js?v=4.34.1g42"></script>
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-iphone-retina-display.png" />

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="dist/css/profile.css">

    <style type="text/css">
        .spnsr-wrapper-1950 {
            text-align: center;
            min-height: 30px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .spnsr-wrapper-1950 .spnsr-top-1950 {
            background-image: url(assets/img/spnsr-text-wide2.png);
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
    <?php include("menu.php"); addvisite('addreview'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2014">
                <div class="spnsr-top-2014 ads-off"></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header box-navbar">
                                <h1 class="film-title">مراجعة العمل <a href="post.php?id=<?php echo  $personeinfos['id']; ?>" title="<?php echo  $personeinfos['title']; ?>"><?php echo  $personeinfos['title']; ?></a></h1>
                            </div>

                            <script type="text/javascript">
                                var listStatuses = {
                                    "1": "Currently watching",
                                    "2": "Completed",
                                    "3": "Plan to watch",
                                    "4": "On-hold",
                                    "5": "Dropped",
                                    "6": "Not Interested",
                                    "add": "Add to List"
                                };

                            </script>
                            <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&amp;adInstanceId=4459ad12-31be-46c3-a717-e8a33364ca41"></script>
                            <div id="amzn_assoc_ad_div_adunit_0"></div>
                            <div id="review_form" data-id="33281" style="min-height: 400px;" class="">
                                <div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <div>
                                        <div class="box-body">
                                            <div class="row m-b m-t">
                                                <div class="col-lg-6 col-md-6 guildline b-r">
                                                    <h6 class="header m-b">الخطوة الأولى: اقرأ الإرشادات</h6>
                                                    <ul class="guildline">
                                                        <li class="p-b">اكتب مراجعاتك الخاصة و بأسلوبك الخاص!</li>
                                                        <li class="p-b">لا تقم بتضمين ملخصات القصة لأن المستخدمين قد قرأوا بالفعل ملخص قصة العمل.</li>
                                                        <li class="p-b">اكتب <b>سبب</b> إعجابك أو عدم إعجابك بهدا العمل.</li>
                                                        <li class="p-b"><b> لا </ b> تنشر الافكار الرئيسية لأنك ستفسد العرض للقراء الذين يفكرون في مشاهدة العرض.</li>
                                                        <li class="p-b"><b> لا </ b> تضف أي حرق إلى عنوان المراجعة!</li>
                                                    </ul>
                                                </div>
                                                <!--
                                                <style>
                                                .jq-star{
                                                    transform: scale(-1, 1);
                                                }
                                            </style>
-->

                                                <div class="col-lg-6 col-md-6 your-rating">
                                                    <h6 class="header m-b">الخطوة الثانية: التقييم</h6>
                                                    <ul class="list">
                                                        <li class="list-item p-a-sm content_story_rating">
                                                            <div class="row">

                                                                <div class="col-lg-8">
                                                                    <div class="dstar-wrapper" style="display:inline-flex">
                                                                        <div style="direction:ltr" class="my-rating-1">

                                                                        </div>

                                                                        <div class="dstar-right"><strong id="r1">5.5</strong>/10
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"><b>القصة</b></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item p-a-sm content_acting_rating">
                                                            <div class="row">

                                                                <div class="col-lg-8">
                                                                    <div class="dstar-wrapper" style="display:inline-flex">
                                                                        <div style="direction:ltr" class="my-rating-2">

                                                                        </div>

                                                                        <div class="dstar-right"><strong id="r2">5.5</strong>/10
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"><b>التمثيل و الاداء</b></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item p-a-sm content_music_rating">
                                                            <div class="row">

                                                                <div class="col-lg-8">
                                                                    <div class="dstar-wrapper" style="display:inline-flex">
                                                                        <div style="direction:ltr" class="my-rating-3">

                                                                        </div>

                                                                        <div class="dstar-right"><strong id="r3">5.5</strong>/10
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"><b>الموسيقى</b></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item p-a-sm content_rewatch_rating">
                                                            <div class="row">

                                                                <div class="col-lg-8">
                                                                    <div class="dstar-wrapper" style="display:inline-flex">
                                                                        <div style="direction:ltr" class="my-rating-4">

                                                                        </div>

                                                                        <div class="dstar-right"><strong id="r4">5.5</strong>/10
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"><b>رغبتك بإعادة مشاهدة العمل </b></div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item p-a-sm content_overall_rating">
                                                            <div class="row">

                                                                <div class="col-lg-8">
                                                                    <div class="dstar-wrapper" style="display:inline-flex">
                                                                        <div style="direction:ltr" class="my-rating-5">

                                                                        </div>

                                                                        <div class="dstar-right"><strong id="r5">5.5</strong>/10
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"><b>إجمالي التقييم</b>
                                                                    <div class="text-muted">متوسط التقييمات السابقة: <b id="avr">0</b></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            var r1 = 0;
                                            var r2 = 0;
                                            var r3 = 0;
                                            var r4 = 0;
                                            var r5 = 0;
                                            $(".my-rating-1").starRating({
                                                initialRating: 5,
                                                disableAfterRate: false,
                                                emptyColor: 'gold',
                                                hoverColor: 'lightgray',
                                                activeColor: 'blue',
                                                ratedColor: 'lightgray',
                                                strokeWidth: '2',
                                                starShape: 'rounded',
                                                starSize: 35,
                                                onHover: function(currentIndex, currentRating, $el) {
                                                    var addt_r = 4 - (currentIndex - 1);
                                                    var r = addt_r * 2;
                                                    $('#r1').text(r);
                                                },
                                                onLeave: function(currentIndex, currentRating, $el) {
                                                    if (currentRating != '0') {
                                                        $("#after_R").show();
                                                    }
                                                    $('#r1').text(r1);
                                                },
                                                callback: function(currentRating, $el) {
                                                    var addt_r = 4 - (currentRating - 1);
                                                    var cr1 = addt_r * 2;
                                                    $('#r1').text(cr1);
                                                    r1 = cr1;
                                                    updr()
                                                }
                                            });

                                            $(".my-rating-2").starRating({
                                                initialRating: 5,
                                                disableAfterRate: false,
                                                emptyColor: 'gold',
                                                hoverColor: 'lightgray',
                                                activeColor: 'blue',
                                                ratedColor: 'lightgray',
                                                strokeWidth: '2',
                                                starShape: 'rounded',
                                                starSize: 35,
                                                onHover: function(currentIndex, currentRating, $el) {
                                                    var addt_r = 4 - (currentIndex - 1);
                                                    var r = addt_r * 2;
                                                    $('#r2').text(r);
                                                },
                                                onLeave: function(currentIndex, currentRating, $el) {
                                                    if (currentRating != '0') {
                                                        $("#after_R").show();
                                                    }
                                                    $('#r2').text(r2);
                                                },
                                                callback: function(currentRating, $el) {
                                                    var addt_r = 4 - (currentRating - 1);
                                                    var cr2 = addt_r * 2;
                                                    $('#r2').text(cr2);
                                                    r2 = cr2;
                                                    updr()
                                                }
                                            });

                                            $(".my-rating-3").starRating({
                                                initialRating: 5,
                                                disableAfterRate: false,
                                                emptyColor: 'gold',
                                                hoverColor: 'lightgray',
                                                activeColor: 'blue',
                                                ratedColor: 'lightgray',
                                                strokeWidth: '2',
                                                starShape: 'rounded',
                                                starSize: 35,
                                                onHover: function(currentIndex, currentRating, $el) {
                                                    var addt_r = 4 - (currentIndex - 1);
                                                    var r = addt_r * 2;
                                                    $('#r3').text(r);
                                                },
                                                onLeave: function(currentIndex, currentRating, $el) {
                                                    if (currentRating != '0') {
                                                        $("#after_R").show();
                                                    }
                                                    $('#r3').text(r3);
                                                },
                                                callback: function(currentRating, $el) {
                                                    var addt_r = 4 - (currentRating - 1);
                                                    var cr3 = addt_r * 2;
                                                    $('#r3').text(cr3);
                                                    r3 = cr3;
                                                    updr()
                                                }
                                            });

                                            $(".my-rating-4").starRating({
                                                initialRating: 5,
                                                disableAfterRate: false,
                                                emptyColor: 'gold',
                                                hoverColor: 'lightgray',
                                                activeColor: 'blue',
                                                ratedColor: 'lightgray',
                                                strokeWidth: '2',
                                                starShape: 'rounded',
                                                starSize: 35,
                                                onHover: function(currentIndex, currentRating, $el) {
                                                    var addt_r = 4 - (currentIndex - 1);
                                                    var r = addt_r * 2;
                                                    $('#r4').text(r);
                                                },
                                                onLeave: function(currentIndex, currentRating, $el) {
                                                    if (currentRating != '0') {
                                                        $("#after_R").show();
                                                    }
                                                    $('#r4').text(r4);
                                                },
                                                callback: function(currentRating, $el) {
                                                    var addt_r = 4 - (currentRating - 1);
                                                    var cr4 = addt_r * 2;
                                                    $('#r4').text(cr4);
                                                    r4 = cr4;
                                                    updr()
                                                }
                                            });

                                            $(".my-rating-5").starRating({
                                                initialRating: 5,
                                                disableAfterRate: false,
                                                emptyColor: 'gold',
                                                hoverColor: 'lightgray',
                                                activeColor: 'blue',
                                                ratedColor: 'lightgray',
                                                strokeWidth: '2',
                                                starShape: 'rounded',
                                                starSize: 35,
                                                onHover: function(currentIndex, currentRating, $el) {
                                                    var addt_r = 4 - (currentIndex - 1);
                                                    var r = addt_r * 2;
                                                    $('#r5').text(r);
                                                },
                                                onLeave: function(currentIndex, currentRating, $el) {
                                                    if (currentRating != '0') {
                                                        $("#after_R").show();
                                                    }
                                                    $('#r5').text(r5);
                                                },
                                                callback: function(currentRating, $el) {
                                                    var addt_r = 4 - (currentRating - 1);
                                                    var cr5 = addt_r * 2;
                                                    $('#r5').text(cr5);
                                                    r5 = cr5;
                                                }
                                            });

                                            function updr() {
                                                var average = (r1 + r2 + r3 + r4) / 4;
                                                $("#avr").text(average);
                                                $(".my-rating-5").starRating('setRating', 4 - (average / 2 - 1));
                                                r5 = 4 - (average / 2 - 1);
                                            }

                                        </script>
                                        <div class="box-body">
                                            <h6 class="header m-b">الخطوة 3: اكتب مراجعتك</h6>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 pull-right"><label>هل تحتوي هذه المراجعة على حرق؟</label></div>
                                                    <div class="col-sm-9"><input type="checkbox" id="spoi" name="" data-toggle="toggle">

                                                        <script>
                                                            $('#spoi').bootstrapToggle({
                                                                off: 'لا',
                                                                on: 'نعم',
                                                                onstyle: 'danger',
                                                                size: 'mini'
                                                            });

                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 pull-right"><label>هل انتهيت من مشاهدة هذا العمل؟</label></div>
                                                    <div class="col-sm-9"><input onchange="checke(this)" type="checkbox" id="fwat" name="" data-toggle="toggle">

                                                        <script>
                                                            $('#fwat').bootstrapToggle({
                                                                off: 'لا',
                                                                on: 'نعم',
                                                                onstyle: 'danger',
                                                                size: 'mini'
                                                            });
                                                            $('#fwat').bootstrapToggle('on') 
                                                            
                                                            
                                                            function checke(e){
                                                                if($(e).prop('checked') ){
                                                                    $(".form-group-child").hide();
                                                                }else{
                                                                    $(".form-group-child").show();
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                                
                                                    
                                                
                                                <div style="display:none" class="form-group-child">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 pull-right"><label>هل قمت بالغاء مشاهدتك لهذا العمل؟</label></div>
                                                            <div class="col-sm-9"><input  type="checkbox" id="fdr" name="" data-toggle="toggle"></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <script>
                                                    $('#fdr').bootstrapToggle({
                                                                off: 'لا',
                                                                on: 'نعم',
                                                                onstyle: 'danger',
                                                                size: 'mini'
                                                            });</script>
                                                    <?php if(($personeinfos['episodes']!='' && $personeinfos['episodes']!='0' && is_numeric($personeinfos['episodes'])) && $personeinfos['content_type']!='movie'){ ?>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 pull-right"><label>كم حلقة شاهدت من هذا العمل؟</label></div>
                                                            <div class="col-sm-9">
                                                                <div class="el-input-number is-controls-right"><span role="button" class="el-input-number__decrease"><i class="el-icon-arrow-down"></i></span><span role="button" class="el-input-number__increase is-disabled"><i class="el-icon-arrow-up"></i></span>
                                                                    <div class="el-input">
                                                                        <!----><input type="text" id="ew" autocomplete="off" max="<?php echo $personeinfos['episodes']; ?>" min="1" class="el-input__inner" role="spinbutton" aria-valuemax="<?php echo $personeinfos['episodes']; ?>" aria-valuemin="1" aria-valuenow="6" aria-disabled="undefined">
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                    </div>
                                                                </div> <button onclick="allep()" type="button" class="el-button m-l el-button--text">
                                                                    <!---->
                                                                    <!----><span>كل الحلقات</span></button>
                                                                <script>function allep(){$("#ew").val('<?php echo $personeinfos['episodes']; ?>')}</script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 pull-right"><label>أضف عنوانًا</label></div>
                                                    <div class="col-sm-9">
                                                        <div class="el-input">
                                                            <!----><input type="text" id="headl" autocomplete="off" placeholder="ما هو أهم شيء يجب معرفته حول هدا العنوان؟" class="el-input__inner">
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
                                                    <div class="col-sm-3 pull-right"><label>اكتب مراجعتك</label></div>
                                                    <div class="col-sm-9">
                                                        <div class="el-textarea"><textarea id="revt" autocomplete="off" class="el-textarea__inner" style="min-height: 222px; height: 222px;"></textarea>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <!---->
                                            <!----> <button type="button" class="el-button el-button--primary is-plain " onclick="addrev('<?php echo  $personeinfos['id']; ?>',this)">
                                                <!---->
                                                <!----><span><span>إرسال المراجعة</span> <i class="fa fa-spin fa-spinner" style="display: none;"></i></span></button></div>
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
        </div>
    </div>

    <div id="mdl-modal"></div>



    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>
</body>

</html>
<?php }}else{
        header("location:topshows.php");
    } ?>
