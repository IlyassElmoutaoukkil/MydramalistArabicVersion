var data;
function add_gdesc_f(e){
    var title=$("#GFT").val();
    
    if(title.length>3){
        data={'descussion':'add_GF','title':title};
        $(e).html('ارسال ...');
        ajax(); 
    }else{
        toastr['info']('العنوان يجب ان يحتوي على 3 حروف على الاقل');
    }
    
}

function add_gdesc_l(e){
    var title=$("#forum_t").val();
    var gdes=$("#forum_gd").val();
    var descr=$("#forum_ds").val();
    
    if(title.length>3 && descr.length>20 && descr.length<90){
        data={'descussion':'add_FR','title':title,'gdes':gdes,'descr':descr};
        $(e).html('ارسال ...');
        ajax();
    }else{
        if(title.length<3){
            toastr['info']('العنوان يجب ان يحتوي على 3 حروف على الاقل،');
        }
        if(descr.length<20 && descr.length<90){
            toastr['info']('الوصف يجب ان يحتوي على 20 حرف على الاقل، وأقل من 90 حرف');
        }
    }
}

function add_forum_f(){
    
    var respon=[];
    $.ajax({
            url: 'process/process_a.php',
            type: 'POST',
            data: {'descussion':'get_gdesc'},
            beforeSend: function (resp) {
                $(".el-loading-mask").show();
            },
            success: function (resp) {
                
                if (resp.data.length=='0'){
                    toastr['info']('يجب إضافة قائمة عامة اولا');
                    $(".el-loading-mask").hide();
                }else{
                    $("#add_forum_mo").modal('show');
                    $("#forum_gd").html('');
                        
                    resp.data.forEach(element => {
                        $("#forum_gd").append('<option value="'+element.id+'">'+element.name+'</option>')
                    })
                }
            },
            error: function (resp) {
                toastr['error']('حدث خطأ ...');    
            },
            complete: function (resp) {
            }
        });
    
    
    
}

function ajax(){
    $.ajax({
            url: 'process/process_a.php',
            type: 'POST',
            data: data,
            beforeSend: function (resp) {
                $(".el-loading-mask").show();
            },
            success: function (resp) {
                $(".el-loading-mask").hide();  
                if (resp.code){
                    switch (data.descussion){
                        case 'add_GF':
                            $(".el-loading-mask").hide();
                             toastr['success']('تمت الاضافة بنجاح.');
                             $("#add_gdesc_b").html("إرسال");
                             $("#add_gdesc").modal('hide');
                        break;
                        case 'add_FR':
                            $(".el-loading-mask").hide();
                             toastr['success']('تمت الاضافة بنجاح.');
                             $("#add_forum_b").html("إرسال");
                             $("#add_forum_mo").modal('hide');
                        break;
                        
                        case 'get_gdesc':
                            return resp.data;
                        break;
                    }
                }else{
                    switch (data.descussion){
                        case 'add_GF':
                            $(".el-loading-mask").hide();
                             if(data.mcode=='alreExistc'){
                                 toastr['info']('هذا العنوان موجود مسبقا'); 
                             }else if(data.mcode=='smallinput'){
                                 toastr['info']('العنوان يجب ان يحتوي على 3 حروف على الاقل');
                                 
                             }
                                 $("#add_gdesc_b").html("إرسال");
                        break;
                    }
                }
                //alreExistc smallinput
            },
            error: function (resp) {
                
                toastr['error']('حدث خطأ ...');    
                $("#add_gdesc_b").html("إرسال");
                $(".el-loading-mask").hide();
                
            },
            complete: function (resp) {
            }
        });
}


$('#add_topic ,#add_forum_mo ,#add_gdesc ').on('hidden.bs.modal', function (e) {
   $(".el-loading-mask").hide(); 
})