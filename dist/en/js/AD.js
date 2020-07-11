var inf=[];
var optinc;
var roles;
function Uoption(opt,id){
    
    switch (opt){
            case 'delete':
            
                $(".modal-title").html("حذف مستعمل");
                $("#modal_confirm").html("حذف");
            
                $(".modal-body").html("<div class='col-lg-6' id='info1'></div><div class='col-lg-6' id='info2'></div>")
                
                
                $("#info2").html('<table class="table"><tbody><tr>      <th scope="row">رقم التعريف</th><td id="code"></td></tr><tr><th scope="row">إسم المستخدم</th><td  id="username" ></td></tr><tr><th scope="row">البريد الالكتروني</th><td  id="email" ></td></tr><tr>      <th scope="row">تاريخ التسجيل</th><td  id="wn" ></td></tr><tr>      <th scope="row">العضوية</th><td  id="type" ></td></tr></tbody></table>')
                
                $("#info1").html('<table class="table"><tbody><tr>      <th scope="row">المشاركات</th><td id="add"></td></tr><tr>      <th scope="row">الدولة</th><td id="location"></td></tr><tr>      <th scope="row">العمر</th><td id="birth"></td></tr><tr>      <th scope="row">الجنس</th><td id="sex"></td></tr><tr>      <th scope="row">رقم الهاتف</th><td id="tel"></td></tr></tbody></table>')
                optinc='delete';
                Aconfirm('getinfo',id);
            
                $("#modal_confirm").attr("onclick",'Aconfirm(`'+opt+'`,`'+id+'`)');
            break;
            
            case 'text':
            
                $(".modal-title").html("إرسال رسالة");
                $(".modal-body").html('<form><div class="form-group"><label for="recipient-name" class="col-form-label">الموضوع:</label><input id="sub" type="text" class="form-control" id="recipient-name"></div><div class="form-group"><label for="message-text"  class="col-form-label">نص الرسالة:</label><textarea id="message" class="form-control" id="message-text"></textarea></div></form>');
                
                $("#modal_confirm").html("إرسال");
                $("#modal_confirm").attr("onclick",'sendM(`'+id+'`)');
            
            break;
            
            case 'role':
            
                $(".modal-title").html("ترقية مستعمل");
                $("#modal_confirm").html("ترقية");
                
                $(".modal-body").html("<div class='text-center '><h3 id='name'></h3> <br> <img id='img' src='' style='width:70px;height:70px;border-radius: 50%;'><br><div class='dflex col-lg-12 rls' style='margin-bottom: 21px;margin-top: 13px;'><h1><i class='' id='icon'></i> <b id='type'></b> </h1></div></div></div><hr><div class='dflex text-center '><div class=''><h4>الادوار</h4></div><div class='col-lg-4'><b>كتابة المقالات</b><div>                <input type='checkbox' id='arti'>  </div></div> <div class='col-lg-4'><b>تنظيم المشاركات</b><div><input type='checkbox' id='share'> </div> </div> <div class='col-lg-4'><b>التواصل</b><div><input type='checkbox' id='conta'> </div></div><br><br>")

                optinc='role';
            
                Aconfirm('getinfo',id);
                $("#modal_confirm").attr("onclick",'Aconfirm(`'+optinc+'`,`'+id+'`)');

            break;
    }
}

function Aconfirm(opt,id){
    var data;
    if(opt=='role'){
        
        var arti=$("#arti").prop('checked');
        var share=$("#share").prop('checked');
        var conta=$("#conta").prop('checked');
        
        data={"opt":'role','id':id,'arti':arti,'share':share,'conta':conta};
    }else{
        data={"opt":'getinfo','id':id};
    }
    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: data,
        beforeSent: function (){
            if(opt=='getinfo'){
                    $("#info1 td").text('تحميل ...')
                    $("#info2 td").text('تحميل ...')

                }else if(opt=='delete'){
                    $("#modal_confirm").html("حذف ... ");

                }
        },
        success: function (resp) {
            if (resp.code == "true") {
                
                if(opt=='getinfo'){
                    if (optinc=='role'){
                        $("#name").text(resp.data.username);
                        $("#img").attr('src','process/'+resp.data.picture) 
                            if(resp.data.type=='1'){
                                $("#type").text('أدمن');
                                $("#icon").attr('class','fa fa-chess-king')
                            }else if(resp.data.type=='2'){
                                $("#modal_confirm").html("إزالة الترقية");
                                $("#type").text('موظف');
                                $("#icon").attr('class','fa fas fa-crown')
                            }else{
                                $("#modal_confirm").html("ترقية");
                                $("#type").text('عضو');
                                $("#icon").attr('class','fa fas fa-user');
                            }
                        
                        if(resp.roles.writer=='1'){
                            $("#arti").prop('checked',true);
                        }else{
                            $("#arti").prop('checked',false);
                        }
                        if(resp.roles.manager=='1'){
                            $("#share").prop('checked',true);
                        }else{
                            $("#share").prop('checked',false);
                        }
                        if(resp.roles.contact=='1'){
                            $("#conta").prop('checked',true);
                        }else{
                            $("#conta").prop('checked',false);
                        }
                        
                        }else{
                         $("#code").text(resp.data.code)
                         $("#username").text(resp.data.username)
                         $("#email").text(resp.data.email)
                         $("#wn").text(resp.data.wn)
                         $("#type").text(resp.data.type)   
                           
                        }
                    
                }
                
                if(opt=='delete'){
                    
                    $("#modal_confirm").html("تم الحذف.");
                    setTimeout(function(){$('#option').modal('hide')},3000);
                    setTimeout(function(){  $('#user'+id).css('background-color','#d9534f'); $('#user'+id).animate({opacity:'0'},1500) },2000);
                    setTimeout(function(){$('#user'+id).hide()},3000);

                }
                
                if(opt=='role'){
                    
                    $("#modal_confirm").html("تغيير العضوية.");
                    setTimeout(function(){$('#option').modal('hide')},3000);
                    setTimeout(function(){  $('#user'+id).css('background-color','#f0ad4e'); },2000);
                    setTimeout(function(){  $('#user'+id).css('background-color','#ffffff'); },2000);

                }
                
                
                
                
            } else {
               
            }


        },
        error: function (resp) {
            console.log('error: ' + resp.code)
        },

        complete: function (resp) {}
    });
    
}


function sendM(id){
    var text = $("#message").val();
    var sub = $("#sub").val();
    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: {"opt":'message','id':id , 'sub':sub, 'text':text},
        beforeSent: function (){
                    $("#modal_confirm").html("إرسال ... ");
        },
        success: function (resp) {
            if (resp.code == "true") {
                toastr["success"]("تم إرسال رسالتك بنجاح.");
                
                setTimeout(function(){$('#option').modal('hide')},3000);
                
                setTimeout(function(){  $('#user'+id).css('background-color','#5bc0de'); },2000);
                
                setTimeout(function(){ $('#user'+id).css('background-color','#ffffff') },2000);
            } else {
                if (resp.mcode == 'emptyF') {
                    toastr["error"]("المرجوا ملأ الحقول المطلوبة.");
                } else if (resp.mcode == 'invalidUser') {
                    toastr["error"]("اسم المستخدم الدي اضفته غير متواجد، او غير صحيح");
                } else if (resp.mcode == 'notLogin') {
                    toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
                }
            }


        },
        error: function (resp) {
            console.log('error: '+resp)
        },

        complete: function (resp) {}
    });
    
}
var page=1;
var currentp=0;
function pageu(p){
    if (p=='n'){
       
       var n=currentp+1;
       $("#page"+n).addClass('active');
       $("#page"+currentp).removeClass('active');
       ajax('paginate',currentp+1); 
       currentp=currentp+1;
        
    }else if(p=='p'){
        
       var n=currentp-1;
       $("#page"+n).addClass('active');
       $("#page"+currentp).removeClass('active');
       ajax('paginate',n);
       currentp=n;
        
    }else{
        
       $("#page"+p).addClass('active');
       $("#page"+currentp).removeClass('active');
       ajax('paginate',p);
       currentp=p;
        
    }   
}

$("#searchu").keydown(function (e){
    var p=$("#searchu").val();
    if (p==''){}else{ajax('searchu',p);}
    
});

function ajax(p1,p2r){
  $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: {"opt":p1,'pr2':p2r},
        beforeSent: function (){
               $("#ubody").html('تحميل ...')
        },
        success: function (resp) {
            if (resp.code=='true'){
                switch(p1){
                    case 'paginate':
                      if (resp.data.length=='0'){
                          $("#ubody").html('<h1 class="text-center">لا يوجد مزيد</h1>')
                      }else{
                          var users=resp.data;
                          $("#ubody").html('')
                          users.forEach(element => {
                              var role;
                              
                              if (element.type=='1'){role="أدمن";}else if(element.type=='2'){role="موظف";}else{role="عضو";}
                              p2r++;
                              $("#ubody").append('<tr id="user'+element.code+'"><th scope="row">'+p2r+'</th><td><img src="process/'+element.picture+'" style="border-radius:50%;height:30px;width: 30px;margin-left:10px">'+element.username+'</td><td>'+element.email+'</td><td>'+element.wn.split(" ")[0]+'</td><td></td><td>'+role+'</td><td><button type="button" onclick="Uoption(`delete`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button><button type="button" onclick="Uoption(`text`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-info btn-circle btn-xl"><i class="fa fa-envelope"></i></button><button type="button" onclick="Uoption(`role`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-warning btn-circle btn-xl"><i class="fa fa-handshake"></i></button></td></tr>')
                          });
                      }
                    break;
                    
                    case 'searchu':
                      if (resp.data.length=='0'){
                          $("#ubody").html('<h1 class="text-center">لا يوجد مزيد</h1>')
                      }else{
                          var users=resp.data;
                          $("#ubody").html('');
                          var y=0;
                          users.forEach(element => {
                              var role;
                              y++
                              if (element.type=='1'){role="أدمن";}else if(element.type=='2'){role="موظف";}else{role="عضو";}
                              p2r++;
                              $("#ubody").append('<tr id="user'+element.code+'"><th scope="row">'+y+'</th><td><img src="process/'+element.picture+'" style="border-radius:50%;height:30px;width: 30px;margin-left:10px">'+element.username+'</td><td>'+element.email+'</td><td>'+element.wn.split(" ")[0]+'</td><td></td><td>'+role+'</td><td><button type="button" onclick="Uoption(`delete`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button><button type="button" onclick="Uoption(`text`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-info btn-circle btn-xl"><i class="fa fa-envelope"></i></button><button type="button" onclick="Uoption(`role`,`'+element.code+'`)" data-toggle="modal" data-target="#option"  class="btn btn-warning btn-circle btn-xl"><i class="fa fa-handshake"></i></button></td></tr>')
                          });
                      }
                    break;
                }
            }
        },
        error: function (resp) {
            console.log('error: '+resp)
        },

        complete: function (resp) {}
    });  
}

var managdata;

function acceptTitle(id,e,tp){
    
        if(tp=='new'){ 
            $(".modal-title").html('قبول العمل');
            var name=$(e).attr('data-name');
            var img=$(e).attr('data-im');
            var user=$(e).attr('data-user');

            $("#addedN").html(name);
            $("#addedI").attr('src','process/'+img);
            $("#add_link").modal('show');
            $("#donecommB").attr('onclick','managdec(`'+id+'`,`accept`)');
            $("#donecommB").html('قبول');


            var sub = $("#subject").val('تم قبول تعديلك.');
            var message = $("#message").val('شكرا لك '+user+' على مشاركتك. '+'\n'+'...');
        }else{
            $(".modal-title").html('قبول تعديلات')
            var name=$(e).attr('data-name');
            var img=$(e).attr('data-im');
            var user=$(e).attr('data-user');

            $("#addedN").html(name);
            $("#addedI").attr('src','process/'+img);
            $("#add_link").modal('show');
            $("#donecommB").attr('onclick','managdec(`'+id+'`,`accept`)');
            $("#donecommB").html('قبول');


            var sub = $("#subject").val('تم قبول مشاركتك.')
            var message = $("#message").val('شكرا لك '+user+' على مشاركتك. '+'\n'+'...')
        }
    
}

function refuseTitle(id,e,tp){
    
    if(tp=='new'){
        $(".modal-title").html('رفض العمل')
    }else{
        $(".modal-title").html('رفض التعديلات')
    }
    
    var name=$(e).attr('data-name');
    var img=$(e).attr('data-im');
    var user=$(e).attr('data-user');
    
    $("#addedN").html(name);
    $("#addedI").attr('src','process/'+img);
    $("#add_link").modal('show');
    $("#donecommB").attr('onclick','managdec(`'+id+'`,`refuse`)');
    $("#donecommB").html('رفض');
    
    
    var sub = $("#subject").val('تم عدم قبول مشاركتك.');
    var message = $("#message").val('نعتدر منك  '+user+' على عدم قبول مشاركتك. '+'\n'+'...');
    
    
}


function managdec(id,d){
    var sub = $("#subject").val()
    var message = $("#message").val()
    managdata={'management':d,'subject':sub,'message':message,'id':id};
    sendData();
}


function sendData(){
    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: managdata,
        beforeSent: function (){
                    $("#donecommB").html("إرسال ... ");
        },
        success: function (resp) {
            if (resp.code == "true") {
                 if(managdata.management=='accept'){
                     $("#add_link").modal('hide');
                     $("#mana"+managdata.id).css('background',"green");
                     $("#mana"+managdata.id).animate({
                         marginRight: '20px',
                         opacity: '0'
                     },1200,function (){$("#mana"+managdata.id).remove()})
                 }
                
                if(managdata.management=='refuse'){
                     $("#add_link").modal('hide');
                     $("#mana"+managdata.id).css('background',"red");
                     $("#mana"+managdata.id).animate({
                         marginLight: '20px',
                         opacity: '0'
                     },1200,function (){$("#mana"+managdata.id).remove()})
                 }
                 
            } else {
                
            }
        },
        error: function (resp) {
            console.log('error: '+resp)
        },

        complete: function (resp) {}
    });
}

function imageShow(imgUrl,type){
    if (imgUrl.files && imgUrl.files[0]) {
        var image = new Image();
        var reader = new FileReader();


        reader.onload = function (e) {


            image.src = e.target.result;

            image.onload = function () {
                var height = this.height;
                var width = this.width;

                if (height < 150 || width < 150) {
                    $("#error_"+type).show()
                    $("#error_"+type).text("الصورة التي قمت بوضعها لا تحترم المقياس المطلوب، المرجوا اختيار صورة أخرى.")
                    $(imgUrl).val('');

                } else {

                    $("#"+type+" img").css("box-shadow", 'none');
                    $("#"+type+" img").css("border", "none");
                    $("#error_"+type).hide()
                    $("#disp_"+type+" ").html('<img src="' + e.target.result + '" style="width: 100%;">');
                    
                }
            };
        }

        reader.readAsDataURL(imgUrl.files[0]);
    }
}

$("#formlogo").submit(function (e) {
    e.preventDefault();
    var dataL = new FormData(this);  
    
    var main = $("#main")[0].files[0]
    var footer = $("#footer")[0].files[0]
    var mobile = $("#mobile")[0].files[0]
    
    
    
    dataL.append('logo','logo');
    dataL.append('footer',footer);
    dataL.append('mobil',mobile);
    dataL.append('main',main);
    
    

    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: dataL,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم التعديل.");
                

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية التعديل!.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
})


$("#formSocial").submit(function (e) {
    e.preventDefault();
    var dataL =  $(this).serialize();


    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: dataL,

        
        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم التعديل.");
                

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية التعديل!.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
})

function addPage(){
    $("#addpage").modal('show');
}

$("#pageCr").submit(function (e){
    e.preventDefault();
    var dataL =  $(this).serialize();

    $.ajax({
        url: 'process/process_a.php',
        type: 'POST',
        data: dataL,

        
        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم التعديل.");
                

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية التعديل!.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    
})