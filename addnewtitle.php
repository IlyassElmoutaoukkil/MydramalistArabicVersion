<?php session_start();
if (isset($_SESSION['id'])){
include("process/conn.php");


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>إضافة عنوان جديد</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#015284" />
    <meta name="dailymotion-domain-verification" content="dmg5lpc1ng53ymvet" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css?v=4.34.1d2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

    <link href="css/fontawesome/css/all.min.css?v=4.34.1a" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/app.css?v=4.34.1d2">
    <link rel="stylesheet" href="css/style.css?v=4.34.1d2">

    <link rel="stylesheet" href="dist/css/title_add.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="js/standalone/selectize.min.js" ></script>
    
    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="dist/en/js/select.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="dist/en/js/title_add.js"></script>


    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="css/selectize.default.css">

    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>

    <link rel="stylesheet" href="css/Lobibox.min.css">

    <script type="text/javascript" src="js/Lobibox.js"></script>

    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>

    <script type="text/javascript" src="js/selectize.min.js"></script>
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/selectize.bootstrap3.css">



    <link href="dist/css/select-theme-chosen.css" rel="stylesheet" type="text/css">
    <link href="dist/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/css/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.qtip.min.js?v=4.34.1"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="dist/en/js/bloodhound.min.js"></script>
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
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

    <script src="https://unpkg.com/element-ui/lib/index.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />

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
    <?php include("menu.php"); addvisite('addnewtitle'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2010">
                <div class="spnsr-top-2010 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CJf89YPH_OcCFQllFQgdC4EORA">

                    </div>
                </div>
            </div>
            <div id="add-app" class="container-fluid">
                <div class="box">
                    <div class="box-header box-navbar">
                        <h1>أضف عنوانا جديدا</h1>
                

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="box-body">
                                <div class="el-select" style="display: block; margin-bottom: 16px;">
                                    <!---->

                                </div>
                                <ul class="sticky mdl-nav">

                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">التفاصيل الاولية</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">صورة الغلاف</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">عناوين ذات صلة</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">الممثلين</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">الطاقم</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">معلومات عامة</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">معلومات عامة عن الانتاج</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">النوع &amp; كلمات مفتاحية</span></a></li>
                                    <li><a><span class="nav-icon"><i class="fa fa-caret-right"></i></span> <span class="nav-text">نشر</span></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                            <div class="box-body">
                                <div class="content" style="min-height: 300px;">
                                    <form id="addtitle" class="el-form edit-container">
                                        <input type="text" style="display:none" value="addtitle" name="addtitle">
                                        <script>
                                            $(document).keypress(
                                                function(event) {
                                                    if (event.which == '13') {
                                                        event.preventDefault();
                                                    }
                                                });

                                        </script>
                                        <div>
                                            <div class="box cmpt-box">
                                                <div id="details" class="edit-container">
                                                    <div class="pull-left text-muted">0 تعديلات</div>
                                                    <h5 class="m-b-md">التفاصيل الاولية</h5>
                                                    <div class="official-title-form">
                                                        <div class="">
                                                            <small class="text-muted">* تعني ان هدا الحقل ضروري.</small>
                                                            <div class="el-form-item">
                                                                <!---->
                                                                <div class="el-form-item__content"><label><b>العنوان*</b></label>
                                                                    <div id="confirmed" class="el-input el-input--suffix _600 ">
                                                                        <!---->

                                                                        <input onkeyup="gettitle(this)" required type="text" name="title" autocomplete="off" placeholder="معروف ياسم" class="el-input__inner">

                                                                        <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i id="icontitles" class="el-input__icon el-icon-circle-check"></i>
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                                <!----></span>
                                                                            <!----></span>
                                                                        <!---->
                                                                        <!---->
                                                                    </div> <small class="text-muted">سيظهر كعنوان رئيسي</small>
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                            <div id="titleslist" style="display: none;">
                                                                <h5 class="m-b-md m-t-md text-danger">التكرارات المحتملة</h5>
                                                                <p>إليك قائمة بالعناوين التي قد تكون مشابهة للعنوان الذي تحاول إنشاؤه. يمكنك تعديله ان وجد من خلال النقر على <label class="label dark"><i class="fa fa-pencil"></i> تعديل </label> بدل ذلك</p>


                                                                <div class="form-group">
                                                                    <table class="table duplicates-table m-t">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align: right;padding-right: 31px;">العنوان</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="titlesshow">

                                                                        </tbody>
                                                                    </table>
                                                                    <div id="titlelistwait" class="el-loading-mask" style="display: none;">
                                                                        <div class="el-loading-spinner"><svg viewBox="25 25 50 50" class="circular">
                                                                                <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
                                                                            </svg>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="m-b-lg">
                                                                    <div class="form-group">
                                                                        <div class="el-form-item">
                                                                            <!---->
                                                                            <div class="el-form-item__content" ><label class="el-checkbox"><span class="el-checkbox__input" id="chb"><span onclick="chAE(this)" class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="false" class="el-checkbox__original" value=""></span><span class="el-checkbox__label"><b style="margin-right:5px;"> هدا العمل غير موجود مسبقا.</b>
                                                                                        <!----></span></label>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div class="el-form-item">
                                                                            <!---->
                                                                            <div class="el-form-item__content">
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div class="row">
                                                        <div class="el-form-item col-lg-8 ">
                                                            <!---->

                                                            <div class="el-form-item__content"><label><b>العنوان باللغة الاصلية للعمل*</b></label>
                                                                <div class="el-input">
                                                                    <!----><input required name="title_origine" type="text" autocomplete="off" placeholder="مثال: 각시탈" class="el-input__inner">
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div> <small class="text-muted">يجب ان يتم كتابة عنوان العمل بلغته الاصلية هنا.</small>
                                                                <!---->
                                                            </div>

                                                        </div>

                                                        <div class="el-form-item col-lg-4 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>البلد*</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select required type="text" readonly="readonly" autocomplete="off" placeholder="البلد" name="country" class="el-input__inner" style="height: 40px;">
                                                                            <option></option>
                                                                            <option value="fil">الفلبين</option>
                                                                            <option value="tai">تايلاند</option>
                                                                            <option value="jap">اليابان</option>
                                                                            <option value="kor">كوريا الجنوبية</option>
                                                                            <option value="chi">الصين</option>
                                                                            <option value="honx">هونك كونك</option>


                                                                        </select>
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
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div><label><b>أسماء أخرى يعرف بها العمل ايضا</b></label>
                                                            <div class="mdl-input-tag-wrapper">



                                                                <input placeholder="مثال: Gaksital; Bridal Mask; Doll Mask" data-role="tagsinput" name="other_names" type="text" class="new-tag"></div>
                                                        </div> <small class="text-muted">أسماء أخرى يشتهر بها العمل .</small>
                                                    </div>
                                                    <div class="form-group "><label><b>ملخص حول العمل</b></label>
                                                        <div class="el-textarea"><textarea name='synopsis' autocomplete="off" placeholder="ملخص حول العمل" class="el-textarea__inner" style="min-height: 117px; height: 117px;"></textarea>
                                                            <!---->
                                                        </div> <small class="text-muted">إذا كنت تقوم بنسخ ولصق ملخص من موقع آخر ، فيرجى وضع المصدر إليه في الأسفل! مثال:(المصدر: DramaWiki)</small>
                                                    </div>
                                                    <div class="row">
                                                        <div class="el-form-item col-lg-6 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>نوع المحتوى*</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select onchange="contentT(this)" name="content_type" required type="text" readonly="readonly" autocomplete="off" placeholder="نوع العمل" class="el-input__inner" style="height: 40px;">

                                                                            <option></option>
                                                                            <option value="serie">مسلسل درامي</option>
                                                                            <option value="movie">فيلم</option>
                                                                            <option value="tvshow">برنامج تلفزي</option>


                                                                        </select>
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
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="el-form-item col-lg-6 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>تصنيف المحتوى</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select name="content_rate" readonly="readonly" autocomplete="off" placeholder="تصنيف المحتوى" class="el-input__inner" style="height: 40px;">

                                                                            <option></option>
                                                                            <option value="norate">لا يوجد اي تصنيف لحد الان</option>
                                                                            <option value="all"> جميع الأعمار المسموح بها</option>
                                                                            <option value="13">13 سنة و أكثر</option>
                                                                            <option value="15">15 سنة و أكثر</option>
                                                                            <option value="18">18 سنة و أكثر (عنف &amp; شتائم)</option>
                                                                            <option value="18s">خاص بالبالغين فقط (عنف &amp; عري)</option>


                                                                        </select>
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
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="el-form-item col-lg-6 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>حالة العمل*</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select name="status" required readonly="readonly" autocomplete="off" placeholder="حالة العمل" class="el-input__inner" style="height: 40px;">

                                                                            <option></option>
                                                                            <option value="notpub">لم ينشر بعد</option>
                                                                            <option value="pub">تم نشره</option>
                                                                            <option value="canceled">ملغي</option>



                                                                        </select>
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
                                                                <!---->
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 " style="margin-bottom: 22px;">
                                                            <div class="el-form-item" style="margin-bottom: 0px;">
                                                                <!---->

                                                                <div class="el-form-item__content"><label><b>المدة (# بالدقائق)</b></label>
                                                                    <div class="el-input-number is-controls-right" style="display: block; width: 100%;">
                                                                        <div class="el-input">
                                                                            <!----><input name="duration" type="text" autocomplete="off" placeholder="مثال: 30" max="Infinity" min="0" class="el-input__inner" role="spinbutton" aria-valuemax="Infinity" aria-valuemin="0" aria-valuenow="12" aria-disabled="true">
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                            </div> <small class="text-muted" style="line-height: 1.5;">متوسط مدة الحلقة الواحدة. ان كنت غير متؤكد يمكنك تركها فارغة.</small>
                                                        </div>

                                                    </div>
                                                    <div class="row" id="extra_op" style="display:none">
                                                        <div class="col-lg-6" id="tvsT">
                                                            <div id="tvshow_op" class="el-form-item ">
                                                                <!---->
                                                                <div class="el-form-item__content"><label><b>نوع البرنامج</b></label>
                                                                    <div class="el-select" style="display: block;">
                                                                        <!---->
                                                                        <div class="el-input el-input--suffix">
                                                                            <!----><select name="tvshow_type" readonly="readonly" autocomplete="off" placeholder="حالة العمل" class="el-input__inner" style="height: 40px;">

                                                                                <option></option>
                                                                                <option value="dialog">برنامج حواري</option>
                                                                                <option value="other">نوع أخر</option>



                                                                            </select>
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
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="el-form-item col-lg-6" id="epi">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>الحلقات</b></label>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="el-input-number is-controls-right" style="display: block; width: 100%;"><span role="button" class="el-input-number__decrease is-disabled"><i class="el-icon-arrow-down"></i></span><span role="button" class="el-input-number__increase"><i class="el-icon-arrow-up"></i></span>
                                                                            <div class="el-input">
                                                                                <!----><input name="episodes" type="text" autocomplete="off" placeholder="e.g. 12" max="Infinity" min="0" class="el-input__inner" role="spinbutton" aria-valuemax="Infinity" aria-valuemin="0" aria-valuenow="0" aria-disabled="false">
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div> <small class="text-muted">ان كنت غير متؤكد من عدد الحلقات، يمكنك تركها فارغة.</small>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="box cmpt-box">
                                                <div id="cover" class="edit-container">
                                                    <div class="pull-left text-muted">0 تغييرات</div>
                                                    <h5 class="m-b-md">صورة الغلاف</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="clear form-group">
                                                                <div id="showcover">

                                                                    <div class="edit-cover" style="height:400px"><span class="no-cover"></span></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p class="alert alert-warning m-b"> هناك صورة واحدة فقط ستظهر في الملف الشخصي ، لذلك لا ترسل صورة إذا كان هناك بالفعل صورة أفضل.
                                                                <br><br>الحد الأدنى المقبول للأبعاد هو 300 × 300 بكسل.</p>

                                                            <p class="alert alert-danger m-b" id="errorphoto" style="display:none">

                                                                <div class="upload-demo">

                                                                    <div class="file-field">
                                                                        <div class="btn btn-primary btn-sm float-left">
                                                                            <span>رفع صورة</span>
                                                                            <input required accept='image/*' onchange="uploadtitlepic(this)" style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;width: 100%;padding: 0;margin: 0;cursor: pointer;filter: alpha(opacity=0);opacity: 0;" name="image" type="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="cast" class="edit-container"><a name="cast" id="goto_cast"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">الممثلون</h5>
                                                    <div class="form-group">
                                                        <table class="table sort-table edit-table m-t">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="2" style="text-align: right;padding-right: 80px;">الممثلين</th>
                                                                    <th width="145" style="text-align: right;">الدور</th>
                                                                    <th width="200" style="text-align: right;">الشخصية</th>
                                                                    <th width="112"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <style>
                                                                #listact tr td {
                                                                    padding-right:0px;
                                                                }
                                                            </style>
                                                            <tbody id="listact">
                                                                <tr>
                                                                    <td colspan="4">لم تتم إضافة سجلات.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                    <div class="form-group p-a clearfix">
                                                        <div class="pull-right" style="width: 50%;">
                                                            <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-3461" class="el-autocomplete" style="display: block;">
                                                                <div class="el-input el-input--suffix">
                                                                    <!----><input onkeyup="CWR('act',this)" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن ممثل" minlength="3" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-3461-item--1">
                                                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon" id="iconact"></i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!----></span>
                                                                        <!----></span>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <div role="region" id="actM" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                                    <div class="el-scrollbar">
                                                                        <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                            <ul class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-3461">
                                                                                <p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">لا يوجد اي ممثلين شاركوا في الفيلم</p>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-horizontal">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-vertical">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="crew" class="edit-container"><a id="goto_crew"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">طاقم العمل</h5>
                                                    <div class="form-group">
                                                        <table class="table sort-table edit-table m-t">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="2" style="text-align: right;padding-right: 80px;">الاسم</th>
                                                                    <th width="235" style="text-align: right;">المهمة</th>
                                                                    <th width="112"></th>
                                                                </tr>
                                                            </thead> <style>
                                                                #listwork tr td {
                                                                    padding-right:0px;
                                                                }
                                                            </style>
                                                            <tbody></tbody>
                                                            <tbody id="listwork">
                                                                <tr>
                                                                    <td colspan="4">لا يوجد اي فرد من الطاقم.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>



                                                    </div>
                                                    <div class="form-group p-a clearfix">
                                                        <div class="pull-right" style="width: 50%;">
                                                            <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-1426" class="el-autocomplete" style="display: block;">
                                                                <div class="el-input el-input--suffix">
                                                                    <!----><input   onkeyup="CWR('work',this)" type="text" autocomplete="off" valuekey="value" placeholder="ابحث عن شخص عمل مع طاقم الفيلم..." minlength="3" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" triggeronfocus="true" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-1426-item--1">
                                                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon" id="iconwork"></i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!----></span>
                                                                        <!----></span>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <div id="workM" role="region" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                                    <div class="el-scrollbar">
                                                                        <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                            <ul class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-1426">
                                                                                <p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">لا توجد اي اسماء مشابهة.</p>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-horizontal">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-vertical">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="related" class="edit-container"><a id="goto_related"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">عناوين ذات صلة</h5>
                                                    <div class="form-group">
                                                        <table class="table sort-table edit-table m-t">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="2" style="text-align: right;padding-right: 80px;">العنوان</th>
                                                                    <th width="235" style="text-align: right;">تنسيق القصة</th>
                                                                    <th width="112"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <tbody id="listrelated">
                                                                <tr id="norelated">
                                                                    <td colspan="4">لم يتم إضافة اية عناوين</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="form-group p-a clearfix">
                                                        <div class="pull-right" style="width: 50%;">
                                                            <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-2884" class="el-autocomplete" style="display: block;">
                                                                <div class="el-input el-input--suffix">
                                                                    <!----><input id="relatedT"  onkeyup="CWR('related',this)" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان مرتبط بهدا العمل..." minlength="3" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-2884-item--1">
                                                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon" id="icont" ></i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!----></span>
                                                                        <!----></span>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <div id="relatedM" role="region" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                                    <div class="el-scrollbar">
                                                                        <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                            <ul id="relatedlist" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-2884">

                                                                            </ul>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-horizontal">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                                        </div>
                                                                        <div class="el-scrollbar__bar is-vertical">
                                                                            <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="release" class="edit-container"><a name="release" id="goto_release"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">معلومات عامة</h5>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label><b>تاريخ الإصدار</b></label>
                                                                    <div class="row release-date">
                                                                        <div class="col-lg-12">
                                                                            <div class="el-select">
                                                                                <!---->
                                                                                <div class="el-input el-input--suffix">
                                                                                    <!----><input data-provide="datepicker" name="p_date" type="text" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
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
                                                                                <script>
                                                                                    $('#addtitle [name=p_date], #addtitle [name=f_date]').datepicker({
                                                                                        format: 'dd/mm/yyyy',
                                                                                    });

                                                                                </script>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label><b>تاريخ الانتهاء</b></label>
                                                                    <div class="row release-date">
                                                                        <div class="col-lg-12">
                                                                            <div class="el-select">
                                                                                <!---->
                                                                                <div class="el-input el-input--suffix">
                                                                                    <!----><input data-provide="datepicker" name="f_date" type="text" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
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


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="production" class="edit-container"><a name="release" id="goto_release"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">معلومات عن الانتاج</h5>
                                                    <div class="form-group"><label><b>اللغة الاصلية للعمل</b></label>
                                                        <div class="el-select" style="display: block;">
                                                            <!---->
                                                            <div class="el-input el-input--suffix">
                                                                <!---->

                                                                <select name="origin_lang" readonly="readonly" autocomplete="off" placeholder="حالة العمل" class="el-input__inner" style="height: 40px;">

                                                                    <option></option>
                                                                    <option value="Cantonese">الكانتونية</option>
                                                                    <option value="English">الإنجليزية</option>
                                                                    <option value="Filipino">الفلبينية</option>
                                                                    <option value="Japanese">اليابانية</option>
                                                                    <option value="Korean">الكورية</option>
                                                                    <option value="Mandarin">الماندرين</option>
                                                                    <option value="Thai">التايلاندية</option>
                                                                    <option value="Vietnamese">الفيتنامية</option>
                                                                    <option value="Other">أخرى</option>

                                                                </select>

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

                                                    <div class="form-group">
                                                        <div class="el-input"><label><b>الدول المشاركة في الانتاج.</b></label>
                                                                 <select   placeholder="الدول المشاركة في العمل." id="production_count"></select>
<script>
    $('#production_count').selectize({
    maxItems: null,
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
    options: [
        {id: 1, title: 'الصين'},
        {id: 2, title: 'هونغ كونغ'},
        {id: 3, title: 'اليابان'},
        {id: 4, title: 'ماكاو'},
        {id: 5, title: 'كوريا الجنوبية'},
        {id: 6, title: 'إندونيسيا'},
        {id: 7, title: 'ماليزيا'},
        {id: 8, title: 'سنغافورة'},
        {id: 9, title: 'تايلند'},
        {id: 10, title: 'فيتنام'},
    ],
    create: true
});
</script>
                                                                
<!--
                                                                <select id="select-c" style="text-align:right" placeholder="الدول المشاركة في العمل."  name="production_count" id="production_count" type="text" >
                                                                   
                                                                </select>
                                                                <script>
                                                                    $('#select-c').selectize({
                                                                        maxItems: 3,
                                                                        options: [
						                                                  
                                                                          {email: 'الصين'},
                                                                          {email: 'هونغ كونغ'},
						                                                  {email: 'اليابان'},
                                                                          {email: 'ماكاو'},
						                                                  {email: 'كوريا الجنوبية'},
                                                                          {email: 'إندونيسيا'},
						                                                  {email: 'ماليزيا'},
                                                                          {email: 'سنغافورة'},
						                                                  {email: 'تايلند'},
						                                                  {email: 'فيتنام'}
					                                                    ],
                                                                    });
                                                                </script>
-->





                                                        </div> <small class="text-muted">أسماء أخرى يشتهر بها العمل .</small>
                                                    </div>
                                                    <style type="text/css">
                                                        .selection {
                                                            border: 1px solid rgb(220, 223, 230);
                                                        }

                                                        .select2-selection__choice {
                                                            background-color: rgb(0, 171, 255);
                                                        }

                                                    </style>

                                                    <div class="form-group p-b"><label><b> الشبكة المنتجة للعمل</b></label>
                                                        <div class="el-select" style="display: block;">
                                                            <div style="">
<!--                                                                <select name="original_net" id="original_net" class=" select2" multiple="multiple" style="width: 100%;"></select>-->
                                                                
                                                                <select  class="demo-default" multiple placeholder="الشبكة المنتجة للعمل" id="original_net">
                                                                    <optgroup label="الصين">
                                                                        <option value="Anhui TV" >Anhui TV</option>
                                                                        <option value="BTV" >BTV</option>
                                                                        <option value="CCTV" >CCTV</option>
                                                                        <option value="CDITV" >CDITV</option>
                                                                        <option value="Chongqing TV" >Chongqing TV</option>
                                                                        <option value="CQTV" >CQTV</option>
                                                                        <option value="Dragon TV" >Dragon TV</option>
                                                                        <option value="GDTV" >GDTV</option>
                                                                        <option value="GRT" >GRT</option>
                                                                        <option value="GZTV" >GZTV</option>
                                                                        <option value="HBTV" >HBTV</option>
                                                                        <option value="Hubei TV" >Hubei TV</option>
                                                                        <option value="Hunan TV" >Hunan TV</option>
                                                                        <option value="iQiyi" >iQiyi</option>
                                                                        <option value="JSTV" >JSTV</option>
                                                                        <option value="JXTV" >JXTV</option>
                                                                        <option value="Mango TV" >Mango TV</option>
                                                                        <option value="Ningbo TV" >Ningbo TV</option>
                                                                        <option value="NNTV" >NNTV</option>
                                                                        <option value="Shanghai Television" >Shanghai Television</option>
                                                                        <option value="Shenzhen TV" >Shenzhen TV</option>
                                                                        <option value="Sohu TV" >Sohu TV</option> 
                                                                        <option value="Tencent Video" >Tencent Video</option>
                                                                        <option value="Wuhan TV" >Wuhan TV</option>
                                                                        <option value="Youku" >Youku</option>
                                                                        <option value="ZJTV" >ZJTV</option>
                                                                    </optgroup>
                                                                    
                                                                    
                                                                    <optgroup label="هون كونك">
                                                                        <option value="ATV" >ATV</option>
                                                                        <option value="HKTV" >HKTV</option>
                                                                        <option value="myTV SUPER" >myTV SUPER</option>
                                                                        <option value="RTHK" >RTHK</option>
                                                                        <option value="TVB Jade" >TVB Jade</option>
                                                                        <option value="ViuTV" >ViuTV</option>
                                                                    </optgroup>

                                                                    <optgroup label="اليابان">
                                                                        <option value="AbemaTV" >AbemaTV</option>
                                                                        <option value="Amazon Prime" >Amazon Prime</option>
                                                                        <option value="BeeTV" >BeeTV</option>
                                                                        <option value="BS Fuji" >BS Fuji</option>
                                                                        <option value="BS Japan" >BS Japan</option>
                                                                        <option value="BS4" >BS4</option>
                                                                        <option value="Chukyo TV" >Chukyo TV</option>
                                                                        <option value="CS TV Asahi Channel 1" >CS TV Asahi Channel 1</option>
                                                                        <option value="DATV" >DATV</option>
                                                                        <option value="dTV" >dTV</option>
                                                                        <option value="Fuji TV" >Fuji TV</option>
                                                                        <option value="GYAO!" >GYAO!</option>
                                                                        <option value="Kansai TV" >Kansai TV</option>
                                                                        <option value="KTV" >KTV</option>
                                                                        <option value="LaLa TV" >LaLa TV</option>
                                                                        <option value="MBS" >MBS</option>
                                                                        <option value="Nagoya TV" >Nagoya TV</option>
                                                                        <option value="NBN" >NBN</option>
                                                                        <option value="NHK" >NHK</option>
                                                                        <option value="NHK Etele" >NHK Etele</option>
                                                                        <option value="NTV" >NTV</option>
                                                                        <option value="Osaka Channel" >Osaka Channel</option>
                                                                        <option value="Paravi" >Paravi</option>
                                                                        <option value="SKY PerfecTV" >SKY PerfecTV</option>
                                                                        <option value="TBS" >TBS</option>
                                                                        <option value="Tokai TV" >Tokai TV</option>
                                                                        <option value="Tokyo MX" >Tokyo MX</option>
                                                                        <option value="TV Asahi" >TV Asahi</option>
                                                                        <option value="TV Tokyo" >TV Tokyo</option>
                                                                        <option value="TVA" >TVA</option>
                                                                        <option value="TXN" >TXN</option>
                                                                        <option value="WOWOW" >WOWOW</option>
                                                                        <option value="WOWOW Live" >WOWOW Live</option>
                                                                        <option value="YTV" >YTV</option>
                                                                    </optgroup>
                                                                    
                                                                    <optgroup label="الفلبين">
                                                                        <option value="ABS-CBN" >ABS-CBN</option>
                                                                        <option value="GMA" >GMA</option>
                                                                        <option value="TV5" >TV5</option>
                                                                    </optgroup>


                                                                    <optgroup label="كوريا الجنوبية">
                                                                        
                                                                        <option value="CGV">CGV</option>
                                                                        <option value="Channel A">Channel A</option>
                                                                        <option value="Comedy TV">Comedy TV</option>
                                                                        <option value="Daum Kakao TV">Daum Kakao TV</option>
                                                                        <option value="DRAMAcube">DRAMAcube</option>
                                                                        <option value="DramaX">DramaX</option>
                                                                        <option value="E-Channel">E-Channel</option>
                                                                        <option value="EBS">EBS</option>
                                                                        <option value="jTBC">jTBC</option>
                                                                        <option value="K-STAR">K-STAR</option>
                                                                        <option value="KBS1">KBS1</option>
                                                                        <option value="KBS2">KBS2</option>
                                                                        <option value="MBC">MBC</option>
                                                                        <option value="MBC Dramanet">MBC Dramanet</option>
                                                                        <option value="MBC every1">MBC every1</option>
                                                                        <option value="MBC QueeN">MBC QueeN</option>
                                                                        <option value="MBN">MBN</option>
                                                                        <option value="Mnet">Mnet</option>
                                                                        <option value="Naver TV Cast">Naver TV Cast</option>
                                                                        <option value="O'live">O'live</option>
                                                                        <option value="OBS">OBS</option>
                                                                        <option value="OCN">OCN</option>
                                                                        <option value="Oksusu">Oksusu</option>
                                                                        <option value="Olleh TV">Olleh TV</option>
                                                                        <option value="On Style">On Style</option>
                                                                        <option value="QTV">QTV</option>
                                                                        <option value="SBS">SBS</option>
                                                                        <option value="SBS Plus">SBS Plus</option>
                                                                        <option value="SUPER ACTION">SUPER ACTION</option>
                                                                        <option value="Tooniverse">Tooniverse</option>
                                                                        <option value="TV Chosun">TV Chosun</option>
                                                                        <option value="tvN">tvN</option>
                                                                        <option value="vLive">vLive</option>
                                                                        <option value="XTM">XTM</option>
                                                                        <option value="XtvN">XtvN</option>
                                                                    </optgroup>



                                                                    <optgroup label="تايوان">
                                                                        <option value="Anhui">Anhui</option>
                                                                        <option value="BOBA">BOBA</option>
                                                                        <option value="CHOCO TV">CHOCO TV</option>
                                                                        <option value="CTS">CTS</option>
                                                                        <option value="CTV">CTV</option>
                                                                        <option value="EBC">EBC</option>
                                                                        <option value="FTV">FTV</option>
                                                                        <option value="GTV">GTV</option>
                                                                        <option value="Hakka TV">Hakka TV</option>
                                                                        <option value="KKTV">KKTV</option>
                                                                        <option value="LeTV">LeTV</option>
                                                                        <option value="LINE TV">LINE TV</option>
                                                                        <option value="MTV Taiwan">MTV Taiwan</option>
                                                                        <option value="PTS">PTS</option>
                                                                        <option value="SET TV">SET TV</option>
                                                                        <option value="StarTV">StarTV</option>
                                                                        <option value="TTV">TTV</option>
                                                                        <option value="TVBS">TVBS</option>
                                                                        <option value="Vidol">Vidol</option>
                                                                    </optgroup>



                                                                    <optgroup label="تايلاند">
                                                                    
                                                                        <option value="Channel 3">Channel 3</option>
                                                                        <option value="Channel 5">Channel 5</option>
                                                                        <option value="Channel 7">Channel 7</option>
                                                                        <option value="Channel 8">Channel 8</option>
                                                                        <option value="Channel 9">Channel 9</option>
                                                                        <option value="GMM 25">GMM 25</option>
                                                                        <option value="GMM One">GMM One</option>
                                                                        <option value="Mono 29">Mono 29</option>
                                                                        <option value="PPTV">PPTV</option>
                                                                        <option value="TITV">TITV</option>
                                                                        <option value="True4U">True4U</option>
                                                                        <option value="Workpoint TV">Workpoint TV</option>
                                                                    </optgroup>
                                                                    <optgroup label="شركات اخرى">
                                                                        <option value="Hulu">Hulu</option>
                                                                        <option value="Kocowa">Kocowa</option>
                                                                        <option value="Netflix">Netflix</option>
                                                                        <option value="Viki">Viki</option>
                                                                    </optgroup>

                                                                </select>


                                                                
                                                            </div> <small class="text-muted">أضف فقط الشبكة الأصلية التي قامت ببث العمل </small>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div class="box cmpt-box">
                                                    <div id="genres" class="edit-container"><a name="release" id="goto_release"></a>
                                                        <div class="pull-left text-muted">0 تعديل</div>
                                                        <h5 class="m-b-md">النوع &amp; كلمات مفتاحية</h5>
                                                        <div class="form-group p-b"><label><b>النوع</b></label>
                                                            <!---->
                                                            <select class="demo-default" multiple id="genre">          
                                                                        
                                                                        <option value="movm">حركة</option>
                                                                        <option value="adven">مغامرات</option>
                                                                        <option value="reman">رومانسية</option>
                                                                        <option value="zomb">زومبي</option>
                                                                        <option value="come">كوميديا</option>
                                                                        <option value="gang">جريمة/عصابات</option>
                                                                        <option value="emot">عاطفية</option>
                                                                        <option value="hero">بطولية</option>
                                                                        <option value="horro">رعب</option>
                                                                        <option value="musi">راقصة/موسيقية</option>
                                                                        <option value="scie">علمية</option>
                                                                        <option value="war">حروب</option>
                                                                        <option value="whes">غربية</option>
                                                                        <option value="self">ذاتية</option>
                                                                        <option value="girl">فتيات</option>
                                                                        <option value="police">بوليسية/سرية</option>
                                                                        <option value="catas">كوارث</option>
                                                                        <option value="fant">فانتازيا</option>
                                                                        <option value="black">سوداء</option>
                                                                        <option value="boys">فتيان</option>
                                                                        <option value="milod">ميلودراما</option>
                                                                        <option value="road">طرقات</option>
                                                                        <option value="sport">رياضية</option>
                                                                        <option value="supern">خارقة</option>
                                                                        <option value="exci">إثارة</option>
                                                                        <option value="cartoo">متحركة</option>
                                                                        <option value="english">إنجليزية</option>
                                                                        <option value="famil">للطفال والأسرة</option>
                                                                        <option value="class">كلاسيكية</option>
                                                                        <option value="reco">تسجيلية</option>
                                                                        <option value="seri">مسلسلة</option>
                                                                        <option value="sexu">جنسية</option>
                                                                        <option value="sile">صامتة</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group p-b"><label><b>كلمات مفتاحية</b>
                                                            </label>
                                                            <!---->
                                                            
                                                                   <select  class="demo-default" multiple id="keywords">          
                                                                        
                                                                       <?php $stmtA = $conn->prepare("SELECT * FROM keywords ");
                                                                        $stmtA->execute();
                                                                        $resultA=$stmtA->get_result(); 
                                                                       while($key=$resultA->fetch_assoc()){
                                                                       ?>
                                                                        <option ><?php echo $key['keyword'] ?></option>
                                                                       <?php } ?>
                                                            </select>                                                                
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                                <div id="submit" class="box cmpt-box">
                                                    <div class="b-t p-t">
                                                        <div class="form-group">
                                                            <h5>ملاحظات إضافية</h5> <small>انشر أي شيء تعتقد أنه سيساعد الموظفين في الموافقة على تغييراتك (مصدر المعلومات ، إلخ) <br>
                                                                لن يتم نشر هذه الملاحظات وهي فقط لمساعدة الموظفين على الموافقة على الأعمال الدرامية / التغييرات الجديدة.
                                                            </small>
                                                            <div class="el-textarea"><textarea name="note" autocomplete="off" class="el-textarea__inner" style="min-height: 75px; height: 75px;"></textarea>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div onclick="chekp()" class="form-group text-left"><button type="submit" class="el-button btn btn-success el-button--success">
                                                                <!----><i class="el-icon-edit-outline"></i><span><span>نشر</span></span></button> <button type="button" class="el-button el-button--default">
                                                                <!----><i class="el-icon-delete"></i><span><span>إلغاء</span></span></button>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form><script>
    $('#original_net').selectize({
    sortField: 'text'
    });
    
    $('#genre').selectize({
    sortField: 'text'
    });
    
    $('#keywords').selectize({
    sortField: 'text',
        create: true
    });
</script>
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
            <script type="text/javascript" src="/dist/en/js/title_add.js?v=5.4.13a4"></script>
            <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
        </div>
    </div>


    </div>

    <div id="mdl-manage-modal"></div>
    <div id="mdl-modal"></div>
    <script type="text/javascript" src="dist/en/js/main.js?v=4.34.1"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="text/javascript" src="dist/en/js/addtitle.js"></script>
    <script type="application/javascript">
        live();

    </script>

</body>

</html>

<?php }else{ header("location: index.php"); } ?>
