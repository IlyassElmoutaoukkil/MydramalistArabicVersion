<!DOCTYPE html>
<?php
session_start();
include("process/conn.php");

 if (isset($_SESSION['id'])){
     $login=true;
 }else{
     $login=false;
 }
if ($login){
?>
<html dir="rtl" lang="ar-AR">

<head>
    <title>إنشاء لائحة جديدة</title>
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
    <link rel="stylesheet" href="dist/css/clist.css">



    <link href="//fonts.googleapis.com/css?family=Lato:300,350,300i,400,400i,700" rel="stylesheet">


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="js/toastr.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
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
    <script type="text/javascript" src="js/clist.js"></script>
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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    <script type="text/javascript" src="dist/en/js/summernote.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="dist/css/profile.css">
    <script type="text/javascript" src="dist/en/js/jquery.star-rating-svg.js"></script>

    <link rel="stylesheet" href="css/star-rating-svg.css">

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
    <?php include("menu.php"); addvisite('addlist'); ?>

    <div id="content" class="slideout-panel slideout-panel-right">
        <div class="app-body" id="fa">
            <div id="edit-collection" class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-6">
                        <div class="box p-a">
                            <div class="box-header">
                                <h1 class="text-lg">أضف قائمة جديدة</h1>
                                <div class="box-tool">

                                </div>
                            </div>
                            <div class="box-body">

                                <div class="list-input-label">
                                    ما هو محتوى قائمتك ؟
                                </div>

                                <div class="list-input-item row row-xs">
                                    <div class="col-lg-6 col-md-6">
                                        <div onclick="fs_list('content','title',this)" class="list-option lg content">
                                            <i class="fad fa-tv">
                                            </i>
                                            <div class="option-label">
                                                عناوين
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div onclick="fs_list('content','persone',this)" class="list-option lg content">
                                            <i class="fad fa-user"></i>
                                            <div class="option-label">
                                                أشخاص
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-input-label">
                                    عنوان قائمتك
                                </div>

                                <div class="list-input-item">
                                    <div class="el-input">
                                        <input onkeyup="fs_list('titleo','title',this)" type="text" autocomplete="off" class="el-input__inner">
                                    </div>
                                </div>

                                <div class="list-input-label">
                                    ما نوع قائمتك؟
                                </div>

                                <div class="list-input-item row row-xs">
                                    <div class="col-lg-4 col-md-4">
                                        <div onclick="fs_list('type','vote',this)" class="type list-option">
                                            <i class="fad fa-vote-yea"></i>
                                            <div class="option-label">
                                                قائمة تصويت
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div onclick="fs_list('type','public',this)" class="type list-option">
                                            <i class="fad fa-eye"></i>
                                            <div class="option-label">
                                                قائمة عامة
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div onclick="fs_list('type','private',this)" class="type list-option">
                                            <i class="fad fa-lock"></i>
                                            <div class="option-label">
                                                قائمة خاصة
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer text-center">
                                <button onclick="nextS()" id="fs_done" disabled="disabled" type="button" class="el-button el-button--primary is-disabled">
                                    <span>
                                        <span>إضافة</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="dist/en/js/clist.js?v=5.4.6"></script>
            <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
        </div>

        <div class="app-body" id="la" style="display:none">
            <div id="edit-collection" class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-tool" style="right:81%"><i title="Privacy" class="eye fal m-r fa-eye-slash"></i> <button type="button" class="el-button el-button--default">
                                        <!---->
                                        <!----><span><span>إلغاء</span></span></button> <button onclick="listcreate(this)" type="button" class="el-button el-button--primary">
                                        <!---->
                                        <!----><span><span>حفظ</span></span></button></div>
                                <h1 class="text-lg" id="spageT"></h1>
                            </div>
                            <div class="box-body">
                                <div>
                                    <div class="form-group"><label><b>العنوان*</b></label>
                                        <div class="el-input">
                                            <!----><input id="spageTI" onchange="titlechange(this)" type="text" autocomplete="off" placeholder="Title for custom list" class="el-input__inner">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group"><label><b>الوصف</b></label>

                                        <textarea class="sum" value="" name="disc"  id="summernote1"></textarea>
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
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6"><label><b>نوع اللائحة*</b></label>
                                                <div class="el-select" style="display: block;">
                                                    <!---->
                                                    <div class="el-input el-input--suffix">
                                                        <!----><select onchange="typech(this)" type="text" readonly="readonly" autocomplete="off" placeholder="Select" class="el-input__inner">
                                                            <option id="listT_vo" value="vote">لائحة تصويت</option>
                                                            <option id="listT_pub" value="public">لائحة عامة</option>
                                                            <option id="listT_pra" value="private">لائحة خاصة</option>
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
                                            <div class="col-lg-6 col-md-6"><label><b>محتوى اللائحة*</b></label>
                                                <div class="el-select" style="display: block;">
                                                    <!---->
                                                    <div class="el-input is-disabled el-input--suffix">
                                                        <!----><input id="contentL" type="text" disabled="disabled" readonly="readonly" autocomplete="off" placeholder="Select" class="el-input__inner">
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
                                                    <div class="el-select-dropdown el-popper" style="display: none; min-width: 322.65px;">
                                                        <div class="el-scrollbar" style="">
                                                            <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                                <ul class="el-scrollbar__view el-select-dropdown__list">
                                                                    <!---->
                                                                    <li id="contentLT" class="el-select-dropdown__item"><span>عناوين</span></li>
                                                                    <li id="contentLP" class="el-select-dropdown__item selected"><span>أشخاص</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-horizontal">
                                                                <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-vertical">
                                                                <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <div>
                                <div class="box-body">
                                    <div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-5697" class="el-autocomplete" style="display: block; position: relative;">
                                        <div class="el-input el-input--suffix">
                                            <!----><input type="text" id="search" onkeyup="gettorp(this)" autocomplete="off" valuekey="value" placeholder="Search to add a new title" minlength="1" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-5697-item--1">
                                            <!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!----></span>
                                                <!----></span>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div role="region" id="searchdiv" class="el-autocomplete-suggestion el-popper" style="display: none;max-height: 295px;overflow-x: auto;">
                                            <div class="el-scrollbar">
                                                <div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                    <ul class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-5697">
                                                        <p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">No match found</p>
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
                                <ul id="finalCli" class="list-group custom-list" style="padding-right:0px;"></ul>
                                <div class="box-body b-t p-t p-b">
                                    <!---->
                                </div>
                                <!---->
                            </div>
                            <div class="box-footer">
                                <div class="pull-right"> <button type="button" class="el-button el-button--default">
                                        <!---->
                                        <!----><span><span>الغاء</span></span></button> <button onclick="listcreate(this)" type="button" class="el-button el-button--primary">
                                        <!---->
                                        <!----><span>حفظ</span></button> <i title="Privacy" class="eye fal m-r fa-eye-slash"></i></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/dist/en/js/clist.js?v=5.4.13"></script>
            <div id="btn-bug-report hide"><a href="/discussions/support"><i></i></a></div>
        </div>
    </div>

    <?php include('footer.php'); footer(); ?>
    </div>
    </div>
    <div id="mdl-manage-modal"></div>
    <div id="add_comD" class="modal fade" role="dialog" >
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="comm_h_t"></h4>
      </div>
      <div class="modal-body">
        <textarea value="" name="disc" id="summernote2"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
        <button type="button" class="btn btn-success" id="donecommB" data="" onclick="donecomment(this)">حفظ</button>
      </div>
    </div>

    </div>
    </div>

<script>
                                            (function($) {
                                                "use strict";
                                                $('#summernote2').summernote({
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

        </div>
    </div>

    <div id="mdl-modal"></div>



    <script type="text/javascript" src="dist/en/js/main.js?v=5.4.6"></script>
    <script type="text/javascript" src="dist/en/js/mymain.js"></script>
    <script type="application/javascript">
        live();

    </script>

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
</body>

</html>
<?php }else{
        header("location:index.php");
    } ?>
