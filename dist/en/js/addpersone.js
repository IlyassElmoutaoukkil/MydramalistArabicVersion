
var existw='false';
var equalw='false';

var exista='false';
var equala='false';

var act = [];
var work = [];
var related = [];

$("#addpersone").submit(function (e) {
    e.preventDefault();
    
    
        
    var  data = new FormData(this);
    

    
    
    if (act.length=='0'){}else{var acta=JSON.stringify(act);data.append('act',acta);}
    if (work.length=='0'){}else{var worka=JSON.stringify(work);data.append('work',worka);}
    
        
    $.ajax({
        url: 'process/process_p.php',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم إضافة الشخص، سيتم مراجعته من قبل مدرائنا. شكرا.");
                setTimeout(function () {
                   window.location.href="actors.php";
                }, 2000);

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية الاضافة، المرجوا التأكد من الصورة و المعلومات.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    

})

function chekp() {
    if ($("#addpersone [name=image]").files && $("#addpersone [name=image]").files[0]) {

    } else {
        $(".no-cover").css("border", "red 1px solid");
        $(".no-cover").css("box-shadow", 'red 0px 0px 11px -3px');

    }

}


function gettitle() {
    var Tinput = $("#addpersone [name=title]").val();

    if (Tinput.length > 2) {

        $.ajax({
            url: 'process/process_p.php',
            type: 'POST',
            data: {
                "persone": "getpersones",
                "personename": Tinput
            },
            beforeSend: function (resp) {
                $("#icontitles").attr('class', "el-input__icon el-icon-loading");
            },
            success: function (resp) {
                $("#titlelistwait").hide()
                $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");

                if (resp.code == 'true') {
                    
                    $("#addpersone input, select,.el-input,.el-select,.el-textarea :not(#addpersone [name=title])").addClass("is-disabled");
                    $("#titleslist").show();
                    $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                    $("#icontitles").css('color', "#6cc788");


                    var titles = resp.persones;


                    $("#titleslist").show()

                    $("#confirmed").attr('class', "el-input el-input--suffix _600");

                    $("#titlesshow").html('');
                    
                    titles.forEach(element => {
                        if (equal=='false'){
                            if(element.fname==Tinput){
                               exist='true';
                               equal='true';
                            }
                        }
                        
                        $("#titlesshow").append('<tr class="type-original"><td><div class="list-left"><img src="process/' + element.image + '" class="poster"></div><div><a target="_blank" href="post.php?id=' + element.id + '" class="text-primary"><b>' + element.fname + ' '+ element.lname+' ('+ (element.p_date).split('/')[2] +')</b> <i class="m-l-xs text-xs fa fa-external-link"></i></a></div><div class="text-muted">' + element.content_type + ' '+element.country+'</div><td><td class="text-right"><a href="edit.php?id=' + element.id + '" class="btn btn-sm white"><i class="fa fa-pencil"></i> تعديل</a></td></tr>');
                    })
                    
                    if (exist=='true'){
                        $("#addpersone input, select,textarea,.el-input,.el-select,.el-textarea,.mdl-input-tag-wrapper:not(#confirmed)").addClass("is-disabled");
                        $("#confirmed").removeClass('is-disabled');

                    }else{
                        $("#addpersone input, select,.el-input,.el-select,.el-textarea :not(#addpersone [name=title])").removeClass("is-disabled");

                        
                    }

                } else {
                    
                    $("#titleslist").hide();
                    $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                    $("#confirmed").attr('class', "el-input el-input--suffix _600 new-title-confirmed");
                    $("#icontitles").css('color', "#6cc788");
                    $("#addpersone input, select,.el-input,.el-select,.el-textarea :not(#addpersone [name=title])").removeClass("is-disabled");

                }


            },
            error: function (resp) {

            },

            complete: function (resp) {

            }
        });

    }
}


function getrelated(t){
    var Tinput;
    
    if (t=='a'){
     Tinput = $("#relatedTa").val();  
    }else{
     Tinput = $("#relatedTw").val();  
    }
    

    if (Tinput.length > 2) {

        $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: {
                "title": "gettitles",
                "titlename": Tinput
            },
            beforeSend: function (resp) {
                if (t=='w'){
                    $("#relattw").show();
                    $("#relatedlistw").html('<i class="el-icon-loading"></i>');
                }else{
                    $("#relatta").show();
                    $("#relatedlista").html('<i class="el-icon-loading"></i>');
                } 
            },
            success: function (resp) {
                
                 if (t=='w'){
                    
                    if (resp.code == 'true') {
                    var titles = resp.titles;
                        
                    $("#relatedlistw").html('');
                        
                    titles.forEach(element => {
                        
                        if(work.some(e => e.id == id)) {
                    
                        }else{
                          $("#relatedlistw").append('<li style="margin-bottom:5px;" onclick="addrelated(`w`,`'+ element.title +'`,`'+ element.image +'`,`'+ element.id +'`,`'+ element.country +'`,`'+element.content_type+'`)" id="el-autocomplete-2096-item-0" role="option" class="w'+element.id+'"><div class="list-left"><img src="process/' + element.image + '" style="width:48px; height:63px" class="poster"></div> <div class="list-body"><div class="_600 text-primary">' + element.title + '</div> <small>' + element.country + '<span> - '+ (element.p_date).split('/')[2] +'</span></small></div></li>');
                          
                        }
                        
                        
                        
                        
                    })
                        
                    } else {
                    $("#titleslistw").html('<p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">لا يوجد تطابق</p>');
                    }
                     
                }else{
                    if (resp.code == 'true') {
                        var titles = resp.titles;
                        
                        $("#relatedlista").html('');
                        
                        titles.forEach(element => {
                            
                            if(act.some(e => e.id == id) && element.content_type=='tvshow') {
                    
                            }else{
                            $("#relatedlista").append('<li onclick="addrelated(`a`,`'+ element.title +'`,`'+ element.image +'`,`'+ element.id +'`,`'+ element.country +'`,`'+element.content_type+'`)" id="el-autocomplete-2096-item-0" role="option" class="a'+element.id+'"><div class="list-left"><img style="width:48px; height:63px" src="process/' + element.image + '" class="poster"></div> <div class="list-body"><div class="_600 text-primary">' + element.title + '</div>  <small>' + element.country + '<span> - '+ (element.p_date).split('/')[2] +'</span></small></div></li>');
                            }
                            
                        })
                        
                        
                    } else {
                        $("#titleslista").html('<p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">لا يوجد تطابق</p>');
                    }
                }
                


            },
            error: function (resp) {

            },

            complete: function (resp) {

            }
        });

    }else if(Tinput.length == '0'){
             if (t=='w'){
                    $("#relattw").hide();
                    $("#relatedlistw").html('<i class="el-icon-loading"></i>');
                }else{
                    $("#relatta").hide();
                    $("#relatedlista").html('<i class="el-icon-loading"></i>');
                }
    }
}


function addrelated(t,text,image,id,country,ct){
    
    var exist;
    if (t=='w'){
        $("#relatedbodyw #norelatedw").hide()                          
                if(work.some(e => e.id == id)) {
                    
                    $("#w"+id).animate({
                    opacity:'0.5',
                    },2000,function (){$("#w"+id).css('background-color','#e36969b5');$("#w"+id).css('color','#ffffff')})
                    
                    $("#w"+id).animate({
                        opacity:'1',
                    },1000,function (){$("#w"+id).css('background-color','white');$("#w"+id).css('color','#7fc05c')}) 
                    
                }else{
                    
                    work.push({id:id,format:""});
                    
                    if (ct=='tvshow'){
                        $("#relatedbodyw").append('<tr id="w'+id+'" class="item type-new" draggable="false">  <td>#</td>   <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td>     <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="workf'+id+'" onchange="changeformat(`w`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="hoster">مقدم البرنامج</option><option value="host">ضيف</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td>     <td align="right"><!----> <a onclick="deleterelated(`w`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');  
                    }else{
                        $("#relatedbodyw").append('<tr id="w'+id+'" class="item type-new" draggable="false">  <td>#</td>   <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td>     <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="workf'+id+'" onchange="changeformat(`w`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="dir">إخراج</option><option value="scrwr">كتابة السيناريو</option><option value="scrdir" >إخراج&سيانرايو</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td>     <td align="right"><!----> <a onclick="deleterelated(`w`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
                    }
                    
                    
                    $(".w"+id).hide();
                }
 
            
        
    }else{
        $("#relatedbodya #norelateda").hide()
    
            if(act.some(e => e.id == id)) {
                  $("#a"+id).animate({
                    opacity:'0.5',
                    },1000)

                    $("#a"+id).animate({
                        opacity:'1',
                    },1000) 
                
             }else{
                 act.push({id:id,format:"",char:""});
                
                  $("#relatedbodya").append('<tr id="a'+id+'" class="item type-new" draggable="false"> <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td> <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="actf'+id+'" onchange="changeformat(`a`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="mainr">دور رئيسي</option><option value="suppr">دور ثانوي</option><option value="guest" >ضيف</option><option value="unk" >غير معروف</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td><td><div class="el-input"><!----><input type="text" id="changechar'+id+'" onchange="changechar(`a`,`'+id+'`)" autocomplete="off" class="el-input__inner"><!----><!----><!----><!----></div></td><td align="right"><!----> <a onclick="deleterelated(`a`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
                 
                 
                    $(".a"+id).hide();
             }  
            
    }
    
}
    
function changeformat(t,id){
    
    
    if (t=='w'){
        
        var thisval=$("#workf"+id).val();
    
        work.forEach(element => {
            if(element.id==id){
                    element.format=thisval;
                    return; 
            }
        });
        
    }else{
        
        var thisval=$("#actf"+id).val();

        act.forEach(element => {
            if(element.id==id){
                element.format=thisval;
                return; 
            }
        });
    }
    
    
}

function changechar(t,id){
    
    
    if (t=='w'){
       
        
        
    }else{
        
        var thisval=$("#changechar"+id).val();

        act.forEach(element => {
            if(element.id==id){
                element.char=thisval;
                return; 
            }
        });
    }
    
    
}


function deleterelated(t,id){
    
    if (t=='w'){
        var k=-1;
        var index;
        work.forEach(element => {
            k++;
            if(element.id==id){
                index=k; 
            }
        });
        
        
        
        work.splice(index,1);
        $("#w"+id).remove();
        
    }else{
        var k=-1;
        var index;
        act.forEach(element => {
            k++;
            if(element.id==id){
                index=k; 
            }
        });
        

        act.splice(index,1);
        $("#a"+id).remove();
        
    }
    
}

function uploadtitlepic(imgUrl) {
    if (imgUrl.files && imgUrl.files[0]) {
        var image = new Image();
        var reader = new FileReader();


        reader.onload = function (e) {


            image.src = e.target.result;

            image.onload = function () {
                var height = this.height;
                var width = this.width;

                if (height < 300 || width < 300) {
                    $("#errorphoto").show()
                    $("#errorphoto").text("الصورة التي قمت بوضعها لا تحترم المقياس المطلوب، المرجوا اختيار صورة أخرى.")
                    $("#addpersone [name=image]").val('');

                } else {

                    $(".no-cover").css("box-shadow", 'none');
                    $(".no-cover").css("border", "none");
                    $("#errorphoto").hide()
                    $('#showcover').html('<div class="edit-cover" style="width: 266px; margin-right: 12px; margin-bottom: 12px; float: left;"><img src="' + e.target.result + '" style="width: 100%;"></div>');
                }
            };
        }

        reader.readAsDataURL(imgUrl.files[0]);
    }
}





$("#persedit").submit(function (e) {
    e.preventDefault();
    var  data = new FormData(this);
    if (act.length=='0'){}else{var acta=JSON.stringify(act);data.append('act',acta);}
    if (work.length=='0'){}else{var worka=JSON.stringify(work);data.append('work',worka);}
    
    data.append('id',id)
        
    $.ajax({
        url: 'process/process_e.php',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم إرسال التعديل، سيتم مراجعته من قبل مدرائنا. شكرا.");
                setTimeout(function () {
                   window.location.href="actors.php";
                }, 2000);

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية التعديل، المرجوا التأكد من الصورة و المعلومات.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    

})

        
