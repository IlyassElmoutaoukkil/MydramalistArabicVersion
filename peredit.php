<?php session_start();
include("process/conn.php");
include("process/iama.php");


 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if (isset($_GET['id'])  && isset($_SESSION['id'])){
    
    $userid=$_GET['id'];

    $stmtA = $conn->prepare("SELECT * FROM persones WHERE id=? AND status='1'");
    $stmtA->bind_param("s", $userid);
    $stmtA->execute();
    $resultA=$stmtA->get_result();
    if ($resultA->num_rows==0){ header('location:actors.php');}else{
        $personeinfos=$resultA->fetch_assoc();
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar-AR">

<head>
    <title>تعديل معلومات شخص</title>
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
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/mdl.css?v=4.34.1d24">
    <link rel="stylesheet" href="css/selectize/selectize.default.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="dist/en/js/select.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="dist/en/js/title_add.js"></script>


   

    <script type="text/javascript" src="dist/en/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>

    <link rel="stylesheet" href="css/Lobibox.min.css">

    <script type="text/javascript" src="js/Lobibox.js"></script>

    <script type="text/javascript" src="js/moment-timezone-with-data.min.js"></script>




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
    <?php include("menu.php"); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body">
            <div class="spnsr-wrapper-2010">
                <div class="spnsr-top-2010 is-desktop">
                    <div class="mdl-gpt-tag" id="mdl-gpt-header-0" data-google-query-id="CJf89YPH_OcCFQllFQgdC4EORA">

                        <div id="google_ads_iframe_/47261215/header_top_0__container__" style="border: 0pt none;"></div>
                    </div>
                </div>
            </div>
            <div id="add-app" class="container-fluid">
                <div class="box">
                    <div class="box-header box-navbar">
                        <h1>أضف شخصا جديدا</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="box-body">
                                <div class="el-select" style="display: block; margin-bottom: 16px;">
                                    <!---->
                                    
                                     <?php if(!confirmed($_SESSION['id'])){ ?>
                            <div style="display:block" class="alert alert-info ">المرجوا تأكيد البريد الالكتروني الخاص بك، ليكون لك الصلاحية لإضافة او تعديل عنوان او شخص. </div>
                            <script>
                                toastr['warning']('المرجوا تأكيد البريد الالكتروني الخاص بك.')
                                toastr.options = {
                                "timeOut": "20000",
                                }
                                $("body *").attr('disable');
                            </script>
                        <?php } ?>

                                </div>
                                <ul class="sticky mdl-nav">

                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">التفاصيل الاولية</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">صورة الغلاف</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">أعمال مثل فيها</span></a></li>
                                    <li active-class="active"><a><span class="nav-icon"><i class="fa fa-caret-left"></i></span> <span class="nav-text">أعمال عمل فيها</span></a></li>
                                    
                                    <li><a><span class="nav-icon"><i class="fa fa-caret-right"></i></span> <span class="nav-text">نشر</span></a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                            <div class="box-body">
                                <div class="content" style="min-height: 300px;">
                                    <form id="persedit" class="el-form edit-container">
                                        <input type="text" style="display:none" value="persedit" name="persedit">
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
                                                        <div class="has-edited">
                                                            <small class="text-muted">* تعني ان هدا الحقل ضروري.</small>
                                                            <div class="el-form-item">
                                                                <!---->
                                                                <div class="el-form-item__content"><label><b>الاسم (بالأحرف اللاتينية)*</b></label>
                                                                    <div id="confirmed" class="el-input el-input--suffix _600 ">
                                                                        <!---->

                                                                        <input value="<?php echo $personeinfos['fname'].' '.$personeinfos['lname'] ?>" onkeyup="gettitle()" required type="text" name="title" autocomplete="off" placeholder="معروف ياسم" class="el-input__inner">

                                                                        <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i id="icontitles" class="el-input__icon el-icon-circle-check"></i>
                                                                                <!---->
                                                                                <!---->
                                                                                <!---->
                                                                                <!----></span>
                                                                            <!----></span>
                                                                        <!---->
                                                                        <!---->
                                                                    </div> <small class="text-muted">الاسم المترجم للشخص. تذكر أيضًا في البلدان الآسيوية ، يظهر الاسم الأخير أولاً (على سبيل المثال ، Yamashita Tomohisa).</small>
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                            <div id="titleslist" style="display: none;">
                                                                <h5 class="m-b-md m-t-md text-danger">التكرارات المحتملة</h5>
                                                                <p>إليك قائمة الشخصيات التي قد تكون مشابهة للشخص الذي تحاول إنشاؤه. يمكنك تعديله ان وجد من خلال النقر على <label class="label dark"><i class="fa fa-pencil"></i> تعديل </label> بدل ذلك</p>


                                                                <div class="form-group">
                                                                    <table class="table duplicates-table m-t">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align: right;padding-right: 31px;">الاسم</th>
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

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div class="row">
                                                        <div class="el-form-item col-lg-6">
                                                            <!---->
 
                                                            <div class="el-form-item__content"><label><b>الاسم الشخصي</b></label>
                                                                <div class="el-input">
                                                                    <!----><input value="<?php echo $personeinfos['fname']; ?>" required name="fname" type="text" autocomplete="off" placeholder="الاسم الشخصي" class="el-input__inner">
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div> 
                                                                <!---->
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="el-form-item col-lg-6">
                                                            <!---->
 
                                                            <div class="el-form-item__content"><label><b>الاسم العائلي</b></label>
                                                                <div class="el-input">
                                                                    <!----><input value="<?php echo $personeinfos['lname']; ?>" required name="lname" type="text" autocomplete="off" placeholder="الاسم العائلي" class="el-input__inner">
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                            </div>
                                                           
                                                        </div>

                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="el-form-item col-lg-6">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>الاسم الكامل بلغة بلده</b></label>
                                                                <div class="el-input">
                                                                    <!----><input value="<?php echo $personeinfos['orname']; ?>" required name="orname" type="text" autocomplete="off" placeholder="الاسم الكامل بلغة بلده" class="el-input__inner">
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="el-form-item col-lg-3 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>البلد*</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select required type="text" readonly="readonly" autocomplete="off" placeholder="البلد" name="country" class="el-input__inner" style="height: 40px;">
                                                                            <option></option>
                                                                            <option <?php if($personeinfos['country']=='fil'){echo 'selected';} ?> value="fil">الفلبين</option>
                                                                            <option <?php if($personeinfos['country']=='tai'){echo 'selected';} ?> value="tai">تايلاند</option>
                                                                            <option <?php if($personeinfos['country']=='jap'){echo 'selected';} ?> value="jap">اليابان</option>
                                                                            <option <?php if($personeinfos['country']=='kor'){echo 'selected';} ?> value="kor">كوريا الجنوبية</option>
                                                                            <option <?php if($personeinfos['country']=='chi'){echo 'selected';} ?> value="chi">الصين</option>
                                                                            <option <?php if($personeinfos['country']=='honx'){echo 'selected';} ?> value="honx">هونك كونك</option>


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
                                                        
                                                        <div class="el-form-item col-lg-3 ">
                                                            <!---->
                                                            <div class="el-form-item__content"><label><b>الجنس*</b></label>
                                                                <div class="el-select" style="display: block;">
                                                                    <!---->
                                                                    <div class="el-input el-input--suffix">
                                                                        <!----><select required type="text" readonly="readonly" autocomplete="off" placeholder="البلد" name="sex" class="el-input__inner" style="height: 40px;">
                                                                            <option></option>
                                                                            <option <?php if($personeinfos['sex']=='1'){echo 'selected';} ?> value="1">ذكر</option>
                                                                            <option <?php if($personeinfos['sex']=='0'){echo 'selected';} ?> value="0">أنثى</option>
                                                                            


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
                                                    
                                                    <div class="form-group">
                                                        <div><label><b>أسماء أخرى يعرف بها العمل ايضا</b></label>
                                                            <div class="mdl-input-tag-wrapper">



                                                                <input  placeholder="مثال: Gaksital; Bridal Mask; Doll Mask" data-role="tagsinput" name="othname" id="othname" type="text" class="new-tag"></div>
                                                            
                                                            <script>
                                                            
                                                            var json=<?php echo json_encode(explode(',',$personeinfo['othname'])) ?>;
                                                            
                                                                json.forEach(element => {
                                                                    $('#othname').tagsinput('add', element);
                                                                })
                                                            
                                                        </script>
                                                        </div> <small class="text-muted">أسماء أخرى يشتهر بها هدا الممثل .</small>
                                                    </div>
                                                    
                                                    <div class="form-group"><label><b>سيرة</b></label>
                                                        <div class="el-textarea"><textarea name="biography" autocomplete="off" placeholder="ملخص السيرة الداتية" class="el-textarea__inner" style="min-height: 117px; height: 117px;"><?php echo $personeinfos['biography']; ?></textarea>
                                                            <!---->
                                                        </div> <small class="text-muted">إذا كنت تقوم بنسخ ولصق ملخص من موقع آخر ، فيرجى وضع المصدر إليه في الأسفل! مثال:(المصدر: DramaWiki)</small>
                                                    </div>
                                                    
                                                    <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label><b>تاريخ الوفات</b></label>
                                                                    <div class="row release-date">
                                                                        <div class="col-lg-12">
                                                                            <div class="el-select">
                                                                                <!---->
                                                                                <div class="el-input el-input--suffix">
                                                                                    <!----><input value="<?php echo $personeinfos['dayd']; ?>" data-provide="datepicker" name="dayd" type="text" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
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
                                                                                    $('#addpersone [name=dayb], #addpersone [name=dayd]').datepicker({
                                                                                        format: 'dd/mm/yyyy',
                                                                                    });

                                                                                </script>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group"><label><b>تاريخ الازدياد</b></label>
                                                                    <div class="row release-date">
                                                                        <div class="col-lg-12">
                                                                            <div class="el-select">
                                                                                <!---->
                                                                                <div class="el-input el-input--suffix">
                                                                                    <!----><input value="<?php echo $personeinfos['dayb']; ?>" data-provide="datepicker" name="dayb" type="text" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
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
                                                                    <div class="edit-cover" style="width: 266px; margin-right: 12px; margin-bottom: 12px; float: left;"><img src="process/<?php echo $personeinfos['picture'] ?>" style="width: 100%;"></div>
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
                                                                     &#8220;       <span>رفع صورة</span>
                                                                            <input  accept='image/*' onchange="uploadtitlepic(this)" style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;width: 100%;padding: 0;margin: 0;cursor: pointer;filter: alpha(opacity=0);opacity: 0;" name="image" type="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="box cmpt-box">
                                                <div id="related" class="edit-container"><a  id="goto_related"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">أعمال مثل فيها</h5>
                                                    <div class="form-group">
                                                        <table class="table sort-table edit-table m-t">
                                                            <thead>
                                                                <tr>
                                                                    <th  style="text-align: right;padding-right: 80px;">العنوان</th>
                                                                    <th width="145" style="text-align: right;">الدور</th>
                                                                    <th width="200">الشخصية</th>
                                                                    <th width="112"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <tbody id="relatedbodya">
                                                            <?php $stmtA = $conn->prepare("SELECT * FROM work WHERE type='act' AND idP=? ");
                                                                        $stmtA->bind_param('s',$personeinfos['id']);
                                                                        $stmtA->execute();
                                                                        $resultA=$stmtA->get_result(); 
                                                                       
                                                                        
                                                                ?>

                                                                <?php if($resultA->num_rows=='0'){ ?>
                                                                <tr id="norelated">
                                                                    <td colspan="4">لم يتم إضافة اية عناوين</td>
                                                                </tr>
                                                                <?php }else{ ?>

                                                                <?php while($key=$resultA->fetch_assoc()){ ?>
                                                                <tr id="a<?php echo $key['idT']; ?>" class="item type-new" draggable="false">
                                                                    
                                                                    <td>
                                                                        <div class="list-left"><img style="width:40px; height:55px" src="process/<?php $ti=titleinfo($key['idT']); echo $ti['image']  ?>" class="poster" draggable="false"></div>
                                                                        <div><b><a href="persone.php?id=<?php echo $key['idT'] ?>" target="_blank" draggable="false"><?php echo $ti['title'] ?></a></b></div>
                                                                        
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <div class="el-select">
                                                                            <!---->
                                                                            <div class="el-input el-input--suffix">
                                                                                <!----><select id="actf<?php echo $key['idT']; ?>" onchange="changeformat(`a`,`<?php echo $key['idT']; ?>`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
                                                                                    <option></option>
                                                                                    <option  <?php if($key['format']=='mainr'){echo 'selected'; } ?>   value="mainr">دور رئيسي</option>
                                                                                    <option  <?php if($key['format']=='suppr'){echo 'selected'; } ?>   value="suppr">دور ثانوي</option>
                                                                                    <option  <?php if($key['format']=='guest'){echo 'selected'; } ?>   value="guest">ضيف</option>
                                                                                    <option  <?php if($key['format']=='unk'){echo 'selected'; } ?>   value="unk">غير معروف</option>
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
                                                                    </td>
                                                                    <td>
                                                                        <div class="el-input">
                                                                            
                                                                            <!----><input value="<?php echo $key['chara'] ?>" type="text" id="changechar<?php echo $key['idT']; ?>" onchange="changechar(`a`,`<?php echo $key['idT']; ?>`)" autocomplete="off" class="el-input__inner">
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            
                                                                        </div>
                                                                    </td>
                                                                    <td align="right">
                                                                        <!----> <a onclick="deleterelated(`a`,`<?php echo $key['idT']; ?>`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td>
                                                                </tr>

                                                                <?php }} ?>

                                                            </tbody>
                                                            </tbody>
                                                            
                                                            
                                                        </table>
                                                    </div>
                                                    <div class="form-group p-a clearfix">
                                                        <div class="pull-right" style="width: 50%;">
                                                            <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-2884" class="el-autocomplete" style="display: block;">
                                                                <div class="el-input el-input--suffix">
                                                                    <!----><input id="relatedTa" onkeyup="getrelated('a')" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان مرتبط بهدا العمل..." minlength="3" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-2884-item--1">
                                                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!----></span>
                                                                        <!----></span>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <div id="relatta" role="region" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                                    <div class="el-scrollbar">
                                                                        <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                            <ul id="relatedlista" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-2884">

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
                                                <div id="related" class="edit-container"><a  id="goto_related"></a>
                                                    <div class="pull-left text-muted">0 تعديل</div>
                                                    <h5 class="m-b-md">أعمال عمل فيها</h5>
                                                    <div class="form-group">
                                                        <table class="table sort-table edit-table m-t">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="2" style="text-align: right;padding-right: 80px;">العنوان</th>
                                                                    <th width="235" style="text-align: right;">المهمة</th>
                                                                    <th width="112"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <tbody id="relatedbodyw">
                                                                <?php $stmtA = $conn->prepare("SELECT * FROM work WHERE type='work' AND idP=? ");
                                                                        $stmtA->bind_param('s',$personeinfos['id']);
                                                                        $stmtA->execute();
                                                                        $resultA=$stmtA->get_result(); 
                                                                       
                                                                        
                                                                ?>

                                                                <?php if($resultA->num_rows=='0'){ ?>
                                                                <tr id="norelatedw">
                                                                    <td colspan="4">لم يتم إضافة اية عناوين</td>
                                                                </tr>
                                                                <?php }else{ ?>

                                                                <?php while($key=$resultA->fetch_assoc()){ ?>


                                                                <tr id="w<?php echo $key['idT']  ?>" class="item type-new" draggable="false">
                                                                    <td width="12" align="center">#</td>
                                                                    <td>
                                                                        
                                                                        <div class="list-left"><img style="width:40px; height:55px" src="process/<?php $ti=titleinfo($key['idT']); echo $ti['image']  ?>" class="poster" draggable="false"></div>
                                                                        <div><b><a href="persone.php?id=<?php echo $key['idT']  ?>" target="_blank" draggable="false"><?php echo $ti['title'] ; ?></a></b></div>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <div class="el-select">
                                                                            <!---->
                                                                            <div class="el-input el-input--suffix">
                                                                                <!----><select id="workf<?php echo $key['idT']  ?>" onchange="changeformat(`w`,`<?php echo $key['idT']  ?>`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner">
                                                                                    <?php if(!titleinfo($key['idT'])['content_type']=='tvshow'){ ?>
                                                                                
                                                                                        <option></option>
                                                                                        <option <?php if($key['format']=='dir'){echo 'selected'; } ?> value="dir">إخراج</option>
                                                                                        <option <?php if($key['format']=='scrwr'){echo 'selected'; } ?> value="scrwr">كتابة السيناريو</option>
                                                                                        <option <?php if($key['format']=='scrdir'){echo 'selected'; } ?> value="scrdir">إخراجسيانرايو&amp;</option>
                                                                                
                                                                                    <?php }else{ ?>
                                                                                
                                                                                        <option></option>
                                                                                        <option <?php if($key['format']=='hoster'){echo 'selected'; } ?> value="hoster">مقدم البرنامج</option>
                                                                                        <option <?php if($key['format']=='host'){echo 'selected'; } ?> value="host">ضيف</option>
                                                                                
                                                                                    <?php } ?>

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
                                                                    </td>
                                                                    <td align="right">
                                                                        <!----> <a onclick="deleterelated(`w`,`<?php echo $key['idT']  ?>`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td>
                                                                </tr>
                                                                <?php }} ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="form-group p-a clearfix">
                                                        <div class="pull-right" style="width: 50%;">
                                                            <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-2884" class="el-autocomplete" style="display: block;">
                                                                <div class="el-input el-input--suffix">
                                                                    <!----><input id="relatedTw" onkeyup="getrelated('w')" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان مرتبط بهدا العمل..." minlength="3" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-2884-item--1">
                                                                    <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                            <!----></span>
                                                                        <!----></span>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                                <div id="relattw" role="region" class="el-autocomplete-suggestion el-popper" style="display: none;">
                                                                    <div class="el-scrollbar">
                                                                        <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                            <ul id="relatedlistw" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-2884">

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
                                    </form>
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
    <script type="text/javascript" src="dist/en/js/addpersone.js"></script>
    <script type="application/javascript">
        live();
        
        
        <?php $stmtA = $conn->prepare("SELECT * FROM work WHERE type='work' AND idP=? ");
    $stmtA->bind_param('s',$personeinfos['id']);
    $stmtA->execute();
    $resultA=$stmtA->get_result();                            ?>
        <?php while($key=$resultA->fetch_assoc()){ ?>
        var oner = {
            "id": "<?php echo $key['idT']  ?>",
            "format": "<?php echo $key['format']  ?>"
        };
        work.push(oner);
        $("#fwork<?php echo $key['idP']  ?> [value='<?php echo $key['format']  ?>']").attr('selected', 'selected');
        <?php } ?>

        <?php $stmtA = $conn->prepare("SELECT * FROM work WHERE type='act' AND idP=? ");
    $stmtA->bind_param('s',$personeinfos['id']);
    $stmtA->execute();
    $resultA=$stmtA->get_result();                            ?>
        <?php while($key=$resultA->fetch_assoc()){ ?>
        var oner = {
            "id": "<?php echo $key['idT']  ?>",
            "format": "<?php echo $key['format']  ?>",
            "char": "<?php echo $key['chara']  ?>"
        };
        act.push(oner);
        $("#fact<?php echo $key['idP']  ?> [value='<?php echo $key['format']  ?>']").attr('selected', 'selected');
        $("#changechar<?php echo $key['idP']; ?>").val("<?php echo $key['chara']; ?>")
        <?php } ?>


        var id = <?php echo $personeinfos['id']; ?>;
        
    </script>

</body>

</html>

<?php }

}else{ header("location: index.php"); } ?>
