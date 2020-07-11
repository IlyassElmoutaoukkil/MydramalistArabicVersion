function add_topic(e, id) {
    $(e).html('<i class="fa fa-spin fa-spinner"></i>');

    var subject = $("#topic_t").val();
    var detail = $("#topic_d").val();


    if ((detail.length < 10) || (subject.length < 10)) {
        if (detail.length < 10) {
            toastr['info']('الموضوع يجب ن يحتوي على اكثر من 10 حروف. و اقل من 300 حرف.');
        }
        if (subject.length < 10) {
            toastr['info']('نص الموضوع يجب ن يحتوي على اكثر من 10 حروف. و اقل من 100 حرف.');
        }
    } else {
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                'descussion': 'add_top',
                'subject': subject,
                'detail': detail,
                'id': id
            },
            beforeSend: function (resp) {
                $(".el-loading-mask").show();
            },
            success: function (resp) {

                if (resp.code) {
                    toastr['success']('تم إضافة موضوعك بنجاح، شكرا.');
                    $(".el-loading-mask").hide();
                    $("#add_topic_mo").modal('show');
                    setTimeout(function () {
                        window.location.href = 'topic.php?id=' + resp.id;
                    }, 2000)


                } else {
                    switch (resp.mcode) {
                        //                       case '':
                        //                           
                        //                       break;
                    }
                }
            },
            error: function (resp) {
                toastr['error']('حدث خطأ ...');
            },
            complete: function (resp) {

            }
        });
    }
    $(".el-loading-mask").hide();
    $(e).html('إضافة');

}


function add_answ(id) {
    var detail = $("#answ_t").val();


    if ((detail.length < 10) || (detail.length > 200)) {
        if (detail.length < 10) {
            toastr['info']('الموضوع يجب ن يحتوي على اكثر من 10 حروف. و اقل من 300 حرف.');
        }
        if (detail.length > 200) {
            toastr['info']('نص الرد يجب ن يحتوي على اقل على 200 حرف.');
        }
    } else {
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                'descussion': 'add_answ',
                'detail': detail,
                'id': id
            },
            beforeSend: function (resp) {
                $("#answ_b").html('<i class="fa fa-spin fa-spinner"></i>');
            },
            success: function (resp) {

                if (resp.code) {
                    toastr['success']('تم إضافة ردك بنجاح، شكرا.');
                    $("#answ_b").html('رد');
                    setTimeout(function(){window.location.href = 'topic.php?id=' + id;},2300)
                    
                } else {
                    switch (resp.mcode) {

                        //                       case '':
                        //                           
                        //                       break;

                    }

                    toastr['error']('حدث خطأ ...');
                    $("#answ_b").html('رد');
                }
            },
            error: function (resp) {
                toastr['error']('حدث خطأ ...');
                $("#answ_b").html('رد');
                $("#answ_b").html('رد');
            },
            complete: function (resp) {

            }
        });
    }
}


function dec_delete(id){
    Swal.fire({
          title: 'هل أنت متأكد؟',
          text: "لن يكون بإمكانك استرجاع هدا المنشور.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'نعم!',
          cancelButtonText : 'إلغاء'
        }).then((result) => {
          if (result.value) {
              $.ajax({
                url: 'process/process.php',
                type: 'POST',
                data: {'descussion':'delete','id':id},

                beforeSend: function (resp) {
                },

                success: function (resp) {
                    if (resp.code == 'true') {
                        toastr["success"]("تم الحذف ، بنجاح.");
                        $("#desc_"+id).animate({
                            opacity: 0,
                            marginRight: '30px'
                        },500,function(){$("#desc_"+id).remove()});
                    } else {                    
                       toastr["error"]("حدث خطأ، ...");                      
                    }
                },

                error: function (resp) {
                    $(".el-loading-mask").hide();
                    toastr["error"]("حدث خطأ.");

                },

                complete: function (resp) {}
            });

          }
        })
}