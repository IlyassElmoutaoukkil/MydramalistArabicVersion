function contentT() {
    var contentT = $("form [name=content_type]").val();

    switch (contentT) {

        case 'serie':

            $("#tvshow_op").hide()
            $("#extra_op").show();

            break;

        case 'movie':
            $("#extra_op").hide();
            break;

        case 'tvshow':
            $("#extra_op").show();
            $("#tvshow_op").show()
            break;

    }
}
var exist='false';
var equal='false';


$("#addtitle").submit(function (e) {

    e.preventDefault();
    if (exist=='true'){
       toastr["error"]("العنوان الدي تحاول اضافته موجود مسبقا، ");
    }
    
    
    else{
        
    var  data = new FormData(this);
    
    var relatedi=JSON.stringify(related);
    var worki=JSON.stringify(work);
    var acti=JSON.stringify(act);
    
    data.append('related',relatedi);
    data.append('act',acti);
    data.append('work',worki);
        
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
                setTimeout(function () {
                    window.location.href("index.php");
                }, 2000);

            } else {
                $(".el-loading-mask").hide()
                toastr["error"]("حدث خطأ في عملية الاضافة، المرجوا التأكد من الصورة و المعلومات.");
            }
        },

        error: function (resp) {},

        complete: function (resp) {}
    });
    }

})

function chekp() {
    if ($("#addtitle [name=image]").files && $("#addtitle [name=image]").files[0]) {

    } else {
        
        $(".no-cover").css("border", "red 1px solid");
        $(".no-cover").css("box-shadow", 'red 0px 0px 11px -3px');

    }

}


function gettitle() {
    var Tinput = $("#addtitle [name=title]").val();

    if (Tinput.length > 2) {

        $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: {
                "title": "gettitles",
                "titlename": Tinput
            },
            beforeSend: function (resp) {
                $("#icontitles").attr('class', "el-input__icon el-icon-loading");
            },
            success: function (resp) {
                $("#titlelistwait").hide()
                $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");

                if (resp.code == 'true') {
                    
                    $("#addtitle input, select,.el-input,.el-select,.el-textarea :not(#addtitle [name=title])").addClass("is-disabled");
                    $("#titleslist").show();
                    $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                    $("#icontitles").css('color', "#6cc788");


                    var titles = resp.titles;


                    $("#titleslist").show()

                    $("#confirmed").attr('class', "el-input el-input--suffix _600");

                    $("#titlesshow").html('');
                    
                    titles.forEach(element => {
                        if (equal=='false'){
                            if(element.title==Tinput){
                               exist='true';
                               equal='true';
                            }
                        }
                        
                        $("#titlesshow").append('<tr class="type-original"><td><div class="list-left"><img src="process/' + element.image + '" class="poster"></div><div><a target="_blank" href="post.php?id=' + element.id + '" class="text-primary"><b>' + element.title + ' ('+ (element.p_date).split('/')[2] +')</b> <i class="m-l-xs text-xs fa fa-external-link"></i></a></div><div class="text-muted">'+element.country+'</div><td><td class="text-right"><a href="edit.php?id=' + element.id + '" class="btn btn-sm white"><i class="fa fa-pencil"></i> تعديل</a></td></tr>');
                    })
                    
                    if (exist=='true'){
                        $("#addtitle input, select,textarea,.el-input,.el-select,.el-textarea,.mdl-input-tag-wrapper:not(#confirmed)").addClass("is-disabled");
                        $("#confirmed").removeClass('is-disabled');

                    }else{
                        $("#addtitle input, select,.el-input,.el-select,.el-textarea :not(#addtitle [name=title])").removeClass("is-disabled");

                        
                    }

                } else {
                    
                    $("#titleslist").hide();
                    $("#icontitles").attr('class', "el-input__icon el-icon-circle-check");
                    $("#confirmed").attr('class', "el-input el-input--suffix _600 new-title-confirmed");
                    $("#icontitles").css('color', "#6cc788");
                    $("#addtitle input, select,.el-input,.el-select,.el-textarea :not(#addtitle [name=title])").removeClass("is-disabled");

                }


            },
            error: function (resp) {

            },

            complete: function (resp) {

            }
        });

    }
}


function getrelated() {
    var Tinput = $("#relatedT").val();

    if (Tinput.length > 2) {

        $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: {
                "title": "gettitles",
                "titlename": Tinput
            },
            beforeSend: function (resp) {
                
                $("#relatt").show();
                $("#relatedlist").html('<i class="el-icon-loading"></i>');
                
                
            },
            success: function (resp) {
                

                if (resp.code == 'true') {
                    
                    var titles = resp.titles;


                    $("#relatedlist").html('');
                    
                    titles.forEach(element => {
                        console.log(element.image)
                        $("#relatedlist").append('<li onclick="addrelated(`'+ element.title +'`,`'+ element.image +'`,`'+ element.id +'`)" id="el-autocomplete-2096-item-0" role="option" class="t'+element.id+'"><div class="list-left"><img src="process/' + element.image + '" class="poster"></div> <div class="list-body"><div class="_600 text-primary">' + element.title + '</div> <small>Korean Korean Drama<span> - 2019</span></small></div></li>');
                    })

                } else {
                    
                    $("#titleslist").html('<p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">لا يوجد تطابق</p>');

                }


            },
            error: function (resp) {

            },

            complete: function (resp) {

            }
        });

    }
}
var ra='#';
var related=[];
function addrelated(text,image,id){
    
    var exist;
    $("#relatedbody #norelated").hide()
    if (related.length=='0'){
        related.push({id:id,format:""});
            $("#relatedbody").append('<tr id="r'+id+'" class="item type-new" draggable="false"><td width="12" align="center">'+ra+'</td> <td><div class="list-left"><img src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">Korean Korean Drama</div></td> <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="selectrela'+id+'" onchange="changeformat(`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="ormake">السيناريو الاصلي</option><option value="mstory">القصة الام</option><option value="compl" >تتمة</option><option value="remake">إعادة انتاج</option><option value="smmake">إنتاج مصغر</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td> <td align="right"><!----> <a onclick="deleterelated(`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
     
            $(".t"+id).hide();
    }else{
      related.forEach(element => {
        if(element.id==id){
            console.info(element.id)
           exist='true';
            
        }else{
            
            exist='false';
        
        }
    });  
    }
    
    
    if (exist=='false'){
        related.push({id:id,format:""});
            $("#relatedbody").append('<tr id="r'+id+'" class="item type-new" draggable="false"><td width="12" align="center">'+ra+'</td> <td><div class="list-left"><img src="process/'+image+'" class="poster" draggable="false"></div> <div><b><a href="post.php?id='+id+'" target="_blank" draggable="false">'+text+'</a></b></div> <div class="text-muted">Korean Korean Drama</div></td> <td><div class="el-select"><!----><div class="el-input el-input--suffix"><!----><select id="selectrela'+id+'" onchange="changeformat(`'+id+'`)" readonly="readonly" autocomplete="off" placeholder="" class="el-input__inner"><option></option><option value="ormake">السيناريو الاصلي</option><option value="mstory">القصة الام</option><option value="compl" >تتمة</option><option value="remake">إعادة انتاج</option><option value="smmake">إنتاج مصغر</option></select><!----><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!----></span><!----></span><!----><!----></div></div></td> <td align="right"><!----> <a onclick="deleterelated(`'+id+'`)" class="btn btn-sm btn-remove white"><span><i class="fa fa-times"></i></span></a></td></tr>');
     
            $(".t"+id).hide();
        
        }else{
           
            $("#r"+id).animate({
           opacity:'0.5',
           },1000)

           $("#r"+id).animate({
               opacity:'1',
           },1000)
            
           return;
        }

}

function changeformat(id){
    
    thisval=$("#selectrela"+id).val();
    
    related.forEach(element => {
        if(element.id==id){
            element.format=thisval;
            return; 
        }
    });
    
}


function deleterelated(id){
    
    var k=0;
    related.forEach(element => {
        k=k+1;
        if(element.id==id){
            console.info(element.id+" : "+k);
            return; 
        }
    });
    
    related.splice(k-1);
//  var idin=related.indexOf(id);
//  related.splice(idin);
    $("#r"+id).remove();
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
                    $('#showcover').html('<div class="edit-cover" style="width: 266px; margin-right: 12px; margin-bottom: 12px; float: left;"><img src="' + e.target.result + '" style="width: 100%;"></div>');
                }
            };
        }




        reader.readAsDataURL(imgUrl.files[0]);

    }
}


        
