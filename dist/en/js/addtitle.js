$("select, input, textarea").not('#confirmed input').attr('disabled','disabed');
$(".el-select, .el-input, .el-textarea").not('#confirmed').addClass('is-disabled');

var related=[];
var work=[];
var act=[];

var notAE=false;
function chAE(e){
    if(!notAE){
        
          $("#chb").addClass('is-checked'); notAE=true;
          $("select, input, textarea").not('#confirmed input').removeAttr('disabled');
          $(".el-select, .el-input, .el-textarea").not('#confirmed').removeClass('is-disabled');
          $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
          $("#icontitles").css('color', "#6cc788");
          $("#titleslist").hide()
        
      }else{
          $("#chb").removeClass('is-checked'); notAE=false;
          $("select, input, textarea").not('#confirmed input').attr('disabled','disabed');
          $(".el-select, .el-input, .el-textarea").not('#confirmed').addClass('is-disabled');
      }
}

function gettitle(e){
    var key = $(e).val();
    if (key.length<2){}else{
        $("#icontitles").attr('class', "el-input__icon el-icon-loading");
        $("#titleslist").show();
        $("#titlesshow").html('');
    }
    
    $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: {
                "title": "gettitles",
                "titlename": key
            },
            beforeSend: function (resp) {
                $("#icontitles").attr('class', "el-input__icon el-icon-loading");
            },
            success: function (resp) {
                $("#titlelistwait").hide()
                $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");

                if (resp.code == 'true') {
                    
                    $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                    $("#icontitles").css('color', "#6cc788");


                    var titles = resp.titles;

                    $("#titlesshow").html('');
                    
                    titles.forEach(element => {
                        
                        $("#titlesshow").append('<tr  class="type-original"><td><div class="list-left"><img style="height: 53px" src="process/' + element.image + '" class="poster"></div><div><a target="_blank" href="post.php?id=' + element.id + '" class="text-primary"><b>' + element.title + ' ('+ (element.p_date).split('/')[2] +')</b> <i class="m-l-xs text-xs fa fa-external-link"></i></a></div><div class="text-muted">'+element.country+'</div><td><td class="text-right"><a href="edit.php?id=' + element.id + '" class="btn btn-sm white"><i class="fa fa-pencil"></i> تعديل</a></td></tr>');
                    })
                    
                    if (titles.length==0) {
                          $("#chb").addClass('is-checked'); notAE=true;
                          $("select, input, textarea").not('#confirmed input').removeAttr('disabled');
                          $(".el-select, .el-input, .el-textarea").not('#confirmed').removeClass('is-disabled');
                          $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                          $("#icontitles").css('color', "#6cc788");
                          $("#titleslist").hide()
                    }else{
                      $("#chb").removeClass('is-checked'); notAE=false;
                      $("select, input, textarea").not('#confirmed input').attr('disabled','disabed');
                      $(".el-select, .el-input, .el-textarea").not('#confirmed').addClass('is-disabled');
                    }
                    

                } else {
                          $("#chb").addClass('is-checked'); notAE=true;
                          $("select, input, textarea").not('#confirmed input').removeAttr('disabled');
                          $(".el-select, .el-input, .el-textarea").not('#confirmed').removeClass('is-disabled');
                          $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                          $("#icontitles").css('color', "#6cc788");
                          $("#titleslist").hide()
                 

                }


            },
            error: function (resp) {

            },

            complete: function (resp) {

            }
        });
}

function contentT(e){
    var value=$(e).val()
    if (value=='serie'){
        $("#extra_op #tvsT").hide()
        $("#extra_op").show()
        $("#extra_op #epi").show();
    }else if (value=='movie'){
        $("#extra_op").hide()
        $("#extra_op #tvsT").hide()
        $("#extra_op #epi").hide()
    }else if (value=='tvshow'){
        $("#extra_op").show()
        $("#extra_op #tvsT").show()
        $("#extra_op #epi").show()
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
                    $("#addtitle [name=image]").val('');

                } else {

                    $(".no-cover").css("box-shadow", 'none');
                    $(".no-cover").css("border", "none");
                    $("#errorphoto").hide()
                    $('#showcover').html('<div class="edit-cover" style="width: 100%; margin-right: 12px; margin-bottom: 12px; float: left;height:100%"><img src="' + e.target.result + '" style="width: 100%;"></div>');
                }
            };
        }
        reader.readAsDataURL(imgUrl.files[0]);
    }
}

function chekp() {
    if ($("#addtitle [name=image]").files && $("#addtitle [name=image]").files[0]) {

    } else {
        
        $(".no-cover").css("border", "red 1px solid");
        $(".no-cover").css("box-shadow", 'red 0px 0px 11px -3px');

    }

}






//cast and crew and related// 


function CWR(type,e){  //type: -work: [persones] -act[persones] -related[titles]
    
    var key = $(e).val();

    if (key.length<2){$("#"+type+"M").hide();}else{
        
        switch (type){
        case 'work':
          var data={'get':'work','key':key};
        break;
            
        case 'act':
          var data={'get':'act','key':key};
        break;
            
        case 'related':
          var data={'get':'related','key':key};
        break;
        }
    
        $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: data,
            beforeSend: function (resp) {
                $("#icon"+data.get).attr('class', "el-input__icon el-icon-loading");
                $("#"+data.get+"M").show()
            },
            success: function (resp) {
                
                $("#icon"+data.get).attr('class', "el-icon-search el-input__icon");
                
                if (type=='act' || type=='work'){

                    var titles = resp.titles;
                    
                    $("#"+data.get+"M ul").html('');
                    
                    titles.forEach(element => {
                    $("#"+data.get+"M ul").append('<li id="'+type+element.id+'" onclick="addtolists(`'+element.id+'`,`'+type+'`,`'+element.picture+'`,`'+element.fname+' '+element.lname+'`,`'+element.country+'`)" id="el-autocomplete-2388-item-1" role="option" class=""><div class="list-left"><img style="height:48px;width:48px;" src="process/'+element.picture+'" class="w-40 circle"></div> <div class="list-body"><div class="_600 text-primary">'+element.fname+' '+element.lname+'</div> <small>'+element.country+', '+element.dayb+'</small></div></li>');
                    })
                    
                }else{
                    var titles = resp.titles;
                    
                    $("#"+data.get+"M ul").html('');
                    
                    titles.forEach(element => {
                    $("#"+data.get+"M ul").append('<li id="'+type+element.id+'" onclick="addtolists(`'+element.id+'`,`'+type+'`,`'+element.image+'`,`'+element.title+'`,`'+element.country+'`)" id="el-autocomplete-9844-item-0" role="option" class=""><div class="list-left"><img style="height:61px;width:48px;" src="process/'+element.image+'" class="poster"></div> <div class="list-body"><div class="_600 text-primary">'+element.title+'</div> <small>'+element.country+'<span> - '+element.p_date+'</span></small></div></li>');
                    })
                    
                }
            },
            error: function (resp) {
                $("#"+data.get+"M").hide()
            },

            complete: function (resp) {

            }
        });
    }
}


function addtolists(id,type,image,text,country){
    switch (type){
        case 'work':
            var ct=$("#addtitle [name=content_type]").val();
            if(work.some(e => e.id == id)) {
                    
                    $("#w"+id).animate({
                    opacity:'0.5',
                    },2000,function (){$("#w"+id).css('background-color','#e36969b5');$("#w"+id).css('color','#ffffff')})
                    
                    $("#w"+id).animate({
                        opacity:'1',
                    },1000,function (){$("#w"+id).css('background-color','white');$("#w"+id).css('color','#7fc05c')}) 
                    
                }else{
                    if (work.length=='0'){$("#list"+type).html('');}
                    work.push({id:id,format:""});
                    
                    //////////////////////////////////////
                    ////////////           //////////////
                    ///////////           //////////////
                    //////////  this add //////////////
                    /////////  to list  //////////////
                    ////////           //////////////
                    ////////////////////////////////              ///////////
                    ///////////////////////////////              ////////////
                    if (ct=='tvshow'){
                        $("#list"+type).append('<tr id="w'+id+'" class="item type-new" draggable="false">  <td>#</td>   <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td>     <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="fwork'+id+'" onchange="changeformat(`work`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="hoster">مقدم البرنامج</option><option value="host">ضيف</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td>     <td align="right"><!----> <a onclick="deleterelated(`work`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');  
                    }else{
                        $("#list"+type).append('<tr id="w'+id+'" class="item type-new" draggable="false">  <td>#</td>   <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td>     <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="fwork'+id+'" onchange="changeformat(`work`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="dir">إخراج</option><option value="scrwr">كتابة السيناريو</option><option value="scrdir" >إخراج&سيانرايو</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td>     <td align="right"><!----> <a onclick="deleterelated(`work`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
                    }
                    
                    
                    $("#"+type+id).hide();
                }
        break;
        
        case 'act':
            if(act.some(e => e.id == id)) {
                    
                    $("#a"+id).animate({
                    opacity:'0.5',
                    },2000,function (){$("#a"+id).css('background-color','#e36969b5');$("#a"+id).css('color','#ffffff')})
                    
                    $("#a"+id).animate({
                        opacity:'1',
                    },1000,function (){$("#a"+id).css('background-color','white');$("#a"+id).css('color','#7fc05c')}) 
                    
                }else{
                    if (act.length=='0'){$("#list"+type).html('');}
                    act.push({id:id,format:"",char:""});
                    
                      
                        $("#list"+type).append('<tr id="a'+id+'" class="item type-new" draggable="false"><td>#</td> <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td> <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="fact'+id+'" onchange="changeformat(`act`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="mainr">دور رئيسي</option><option value="suppr">دور ثانوي</option><option value="guest" >ضيف</option><option value="unk" >غير معروف</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td><td><div class="el-input"><!----><input type="text" id="changechar'+id+'" onchange="changechar(`act`,`'+id+'`)" autocomplete="off" class="el-input__inner"><!----><!----><!----><!----></div></td><td align="right"><!----> <a onclick="deleterelated(`act`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
                    
                    
                    $("#"+type+id).hide();
                }
        break;
        
        case 'related':
            if(related.some(e => e.id == id)) {
                    
                    $("#r"+id).animate({
                    opacity:'0.5',
                    },2000,function (){$("#r"+id).css('background-color','#e36969b5');$("#r"+id).css('color','#ffffff')})
                    
                    $("#a"+id).animate({
                        opacity:'1',
                    },1000,function (){$("#r"+id).css('background-color','white');$("#r"+id).css('color','#7fc05c')}) 
                    
                }else{
                    if (related.length=='0'){$("#list"+type).html('');}
                    related.push({id:id,format:""});
                    
                      
                        $("#list"+type).append('<tr id="r'+id+'" class="item type-new" draggable="false"><td width="12" align="center">#</td> <td><div class="list-left"><img style="width:40px; height:55px" src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">'+country+'</div></td> <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="frelated'+id+'" onchange="changeformat(`related`,`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="ormake">السيناريو الاصلي</option><option value="mstory">القصة الام</option><option value="compl" >تتمة</option><option value="remake">إعادة انتاج</option><option value="smmake">إنتاج مصغر</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td> <td align="right"><!----> <a onclick="deleterelated(`related`,`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
                    
                    
                    $("#"+type+id).hide();
                }
        break;
    }
}


function deleterelated(type,id){
    switch (type){
        
        case 'related':
                var k=-1;
                var index='';
                related.forEach(element => {
                    k=k+1;
                    if(element.id==id){
                        index=k;
                    }
                });

                related.splice(index,1);
                $("#r"+id).remove();
        break;
        case 'act':
                var k=-1;
                var index='';
                act.forEach(element => {
                    k=k+1;
                    if(element.id==id){
                        index=k;
                    }
                });

                act.splice(index,1);
                $("#a"+id).remove();
        break;
        case 'work':
                var k=-1;
                var index='';
                work.forEach(element => {
                    k=k+1;
                    if(element.id==id){
                        index=k;
                    }
                });

                work.splice(index,1);
                $("#w"+id).remove();
        break;
    }
}

function changeformat(type,id){
    switch (type){
        
        case 'related':
               
            var format=$("#f"+type+id).val();
               related.forEach(element => {
                    if(element.id==id){
                        element.format=format;
                        return; 
                    }
               });
            
        break;
            
        case 'act':
                
            var format=$("#f"+type+id).val();
                act.forEach(element => {
                    if(element.id==id){
                        element.format=format;
                        return; 
                    }
               });
            
        break;
            
        case 'work':
                
            var format=$("#f"+type+id).val();
                work.forEach(element => {
                    if(element.id==id){
                        element.format=format;
                        return; 
                    }
               });
            
        break;
    }
}

function changechar(type,id){
    thisval=$("#changechar"+id).val();
    
    act.forEach(element => {
        if(element.id==id){
            element.char=thisval;
            return; 
        }
    });
}

$("#addtitle").submit(function (e) {

    e.preventDefault();
        
    var  data = new FormData(this);
    
    var relatedi=JSON.stringify(related);
    
    var production_count=JSON.stringify($("#production_count").val());
    var original_net=JSON.stringify($("#original_net").val());
    var genre=JSON.stringify($("#genre").val());
    var keywords=JSON.stringify($("#keywords").val());
    
    var worki=JSON.stringify(work);
    var acti=JSON.stringify(act);
    
    data.append('related',relatedi);
    data.append('act',acti);
    data.append('work',worki);
    data.append('production_count',production_count);
    data.append('original_net',original_net);
    data.append('genre',genre);
    data.append('keywords',keywords);
        
    $.ajax({
        url: 'process/process_t.php',
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
                toastr["success"]("تم إضافة عنوانك، لسيتم مراجعته من قبل مدرائنا. شكرا.");
                setTimeout(function () {window.location.href = "index.php";}, 2000);

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية الاضافة، المرجوا التأكد من الصورة و المعلومات.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    

})

$("#edittitle").submit(function (e) {

    e.preventDefault();
        
    var  data = new FormData(this);
    
    var relatedi=JSON.stringify(related);
    
    var production_count=JSON.stringify($("#production_count").val());
    var original_net=JSON.stringify($("#original_net").val());
    var genre=JSON.stringify($("#genre").val());
    var keywords=JSON.stringify($("#keywords").val());
    
    var worki=JSON.stringify(work);
    var acti=JSON.stringify(act);
    
    data.append('related',relatedi);
    data.append('id',id);
    data.append('act',acti);
    data.append('work',worki);
    data.append('production_count',production_count);
    data.append('original_net',original_net);
    data.append('genre',genre);
    data.append('keywords',keywords);
        
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
                toastr["success"]("تم إضافة عنوانك، لسيتم مراجعته من قبل مدرائنا. شكرا.");
                setTimeout(function () {window.location.href = "index.php";}, 2000);

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية الاضافة، المرجوا التأكد من الصورة و المعلومات.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    

})