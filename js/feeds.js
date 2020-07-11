var arrayoffiles=[];
var fl=[];
var post='';
var text='';
var spoiler='';
var privacy='pub';
var link='';
var delef=[];

function addarticle(){
		var title=$("#title").val();
		var body= $("#summernote1").val();
		var key = $("#keywords").val();
		var keyword=JSON.stringify(key);
		
		if(title.length<20 || body.length<200){
            if(title.length<20){
                toastr["info"]("المقال جد قصير.");
            }else if(body.length<200){
                toastr["info"]("العنوان  جد قصير.");
            }
			
		}else{
		$.ajax({
			url: 'process/process.php',
			type: 'POST',
			data: {'article':'create',"title":title,"body":body,"keyword":keyword},
			beforeSend: function (resp){
			  $("#loading").show()
			},
			success: function (resp) {
				if(resp.code){
				  $("#loading").hide();
				  toastr["success"]("تم إضافة المقال بنجاح.");
				  $("#add_link").modal('hide');
				}
				else{
				  $("#loading").hide()
				}
			},
			error: function (resp) {
						  $("#loading").hide()
			},

			complete: function (resp) {}
		});
	}
}

function showtag(){
    $(".tag-media").show()
}

function gettitle(e){
    var key=$(e).val();
    if (key.length<3){$("#searchdiv").hide();}else{
        $("#searchdiv").show()
         var data = {'get': 'related','key': key};
         var url = 'process/process_t.php';

$.ajax({
        url: url,
        type: 'POST',
        data: data,
        beforeSend: function (resp){
          $("#searchdS").show();  
        },
        success: function (resp) {
            if (resp.code == "true") {
                var t=resp.titles;
                if (t.length=='0'){
                    $("#listT").html('<b class="text-center">لا توجد اي عناوين مشابهة.</b>');
                }else{
                switch (data.get) {
                    case 'related':
                        var titles = resp.titles;
                        $("#listT").html('');
                            titles.forEach(element => {
                                $("#listT").append('<li id="e' + element.id + '" onclick="feedselect(`' + element.id + '`,`' + element.image + '`,`' + element.title + '`,`' + element.synopsis + '`,`' + element.country + '`)" id="el-autocomplete-9844-item-0" role="option" class=""><div class="list-left"><img style="height:61px;width:48px;" src="process/' + element.image + '" class="poster"></div> <div class="list-body"><div class="_600 text-primary">' + element.title + '</div> <small>' + element.country + '<span> - ' + element.p_date + '</span></small></div></li>');
                            })
                     break;
                }
            }
          $("#searchdS").hide();  

            } else {
          $("#searchdS").hide();  

            }
        },
        error: function (resp) {
            console.log('error: ' + resp.code)
          $("#searchdS").hide();  

        },

        complete: function (resp) {}
    });
}
}

function feedselect(id,image,title,syno,country){
    
    $(".tag-media").html('<div class="media-tag-item"><div class="media-tag-remove" onclick="feedsdeleteEl(`pst`,`'+id+'`,``)"><i class="fa fa-times"></i></div> <a class="media-tag-cover"><img src="process/'+image+'" class="img-responsive"></a> <div class="media-tag-body"><a href="post.php?id='+id+'" target="_blank" class="media-tag-title">'+title+'</a> <div class="media-tag-text">'+syno+'</div></div></div>')
    
    post=id;
}


function uploasdmypic(imgUrl){
        if (imgUrl.files && imgUrl.files[0]) {
                $('#upload').show();
                $("#feedc").html('')
                fl=imgUrl.files;
                arrayoffiles=Array.from(fl);
                if(fl.length<5){
                var x=-1;
                    delef=[];
                for(var i=0;i<fl.length;i++){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    x=x+1;
                    $("#feedc").append('<div id="imp'+x+'" class="collage-photo"><i onclick="feedsdeleteEl(`img`,`'+fl.item(x).name+'`,`'+x+'`)" class="fa fa-times btn-remove-attachment"></i> <img style="height:150px" src="'+e.target.result+'"></div>')
                    }
                    reader.readAsDataURL(imgUrl.files[i]);                    
                } 
                }else{
                    toastr["error"]("حدث خطأ، لقد تجاوزت الحد المسموح به من الصور.");
                    setTimeout(function (){
                               toastr["info"]("الحد المسموح به من الصور هو 4 صور."); 
                    },3000
                    )
                }
        }
}

function feedsdeleteEl(el,id,num){ //el: pic,title 
    switch(el){
        case 'img':
            var fname='';
            var index;
            var x=-1;
            for (i=0;i<arrayoffiles.length;i++){
                x++;
                var name=arrayoffiles[i].name;
                if (name==id){
                    fname=name;
                    index=x;
                    console.log('line: '+x);
                }                
            }
            
            arrayoffiles.splice(index,1);
            if(fname!=''){delef.push(fname);}else{}
            $('#imp'+num).hide();
            
        break;
        
        case 'pst':
            $(".tag-media .media-tag-item").remove();
            post='';
            $(".tag-media").html(' <div class="tag-media-wrapper"><div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-9435" class="el-autocomplete" style="display: block;"><div class="el-input el-input--suffix"><!----><input onkeyup="gettitle(this)" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان..." minlength="3" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-9435-item--1"><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i><span><span></div><div role="region" id="searchdiv" class="el-autocomplete-suggestion el-popper" style="display: none;"><div class="el-scrollbar"><div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;"><ul id="listT" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-9435"><p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;"></p></ul></div><div class="el-scrollbar__bar is-horizontal"><div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div></div><div class="el-scrollbar__bar is-vertical"><div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div></div></div></div></div></div></div>');
            
        break;
    }
}


function checklink(e){
    var linki=$(e).val();
      var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    if(!!pattern.test(linki)){
        $(".el-message-box__errormsg").hide();
        link=linki;
        
    }else{
        $(".el-message-box__errormsg").show()
        link=null;
    }
        
}


function addlink(e){
     var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    if(!!pattern.test(link)){
        fetchlink();
    }else{
        $(".el-message-box__errormsg").show()
        $(".el-message-box__errormsg").animate({marginRight: '20px'},400);
        $(".el-message-box__errormsg").animate({marginRight: '0px'},300);
        $(".el-message-box__errormsg").animate({marginRight: '20px'},200);
        $(".el-message-box__errormsg").animate({marginRight: '0px'},100);
    }
}

function fetchlink(){
    $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: {'feeds':'urlf','url':link},
        beforeSend: function(resp){
            $("#add_link").modal('hide');
            $(".el-loading-mask").show()
        },
        success: function (resp) {
            
            if (resp.code == "true") {
                $(".el-loading-mask").hide();
                $("#add_link").modal('hide');
                $("#linksh").show()
                $("#linksh").html('<i onclick="deletelink()" class="fa fa-times btn-remove-embed"></i> <div class="feed-attachment link"><div class="attachment-thumbnail" style="background-image: url(&quot;'+resp.image_src+'&quot;);"><a rel="nofollow" target="_blank" href="'+resp.image_src+'"></a></div> <div class="media-body attachment-body"><div><a rel="nofollow" target="_blank" href="'+link+'" class="text-primary"><b>'+resp.title+'</b></a></div> <p>'+resp.body+'</p> <div><small class="text-muted">'+resp.URL+'</small></div></div></div>')
                
            } else {
                $(".el-loading-mask").hide();
                toastr["error"]("حدث خطأ.");
                $("#add_link").modal('show');
            }
            
        },
        error: function (resp) {
            console.log();
            $(".el-loading-mask").hide()
            toastr["error"]("حدث خطأ.");
            $("#add_link").modal('show');
        },

        complete: function (resp) {}
    });
}

function deletelink(){
    if (link=null){
        $("#linksh").hide()
        $("#linksh").html('');
    }else{
        link=null;
        $("#linksh").hide()
        $("#linksh").html('');
    }
}

function priv(op){
    switch(op){
        case 'chan':
        $("#privop").show()
        break;
        case 'pub':
        privacy='pub';
        $("#shopr").html('عام')
        $("#shopri").attr('class','fa fa-globe')
        $(".el-dropdown-menu li").removeClass('active');
        $("#pr_pub").addClass('active');
        $("#privop").hide()
        break;
        
        case 'pri':
        privacy='pri';
        $("#shopr").html('خاص')
        $("#shopri").attr('class','fa fa-users')
        $(".el-dropdown-menu li").removeClass('active');
        $("#pr_pri").addClass('active');
         $("#privop").hide()
            
        break;
    }
}

function donefeed(){ //link,text,img,post
    var text= $("#text").val();
    var spoiler=$("#spoi").prop('checked');
    if (link!=''  || (text.length>3 && text.length<300) || fl.length>0){    
        //dooo that todaaaaay
        
        if((text.length<3 ||  text.length>300) && text.length!='' ){
            toastr["info"]("يجب ان يحتوي نص موضوعك على الاقل 3 حروف. وعلى الاكثر 300 حرف.");
        }
    var  data = new FormData();
            var l=link
        var p=post
    var jso=JSON.stringify(delef);
    data.append('feeds','create');
    data.append('text',text);
    data.append('link',l);
    data.append('post',p);
    data.append('spoiler',spoiler);
    data.append('privacy',privacy);
    data.append('delef',jso);
    if (fl.length<=4){
        for (var x = 0; x < fl.length; x++) {
            data.append("fileToUpload[]",  document.getElementById('fls').files[x]);
        }
    }
    
        
   
    $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show();
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم النشر ، بنجاح.");
                setTimeout(function(){window.location.href = "feeds.php";},2500);
                
            } else {
                
                $(".el-loading-mask").hide();
                
                switch (resp.mcode){
                    case 'textlong':
                     toastr["error"]("حدث خطأ،.");
                    break;
                    case 'images':
                     toastr["error"]("حدث خطأ، الصور التي اخترتها ليست صالحة، المرجو اختيار صور اخرى..");
                    break;
                }
                
                
                
                
            }
        },

        error: function (resp) {
            $(".el-loading-mask").hide();
            toastr["error"]("حدث خطأ.");

        },
            
        complete: function (resp) {}
    });
    
}else{
    if(text.length<3 ||  text.length>300){
            toastr["info"]("يجب ان يحتوي نص موضوعك على الاقل 3 حروف. وعلى الاكثر 300 حرف.");
    }
}
}


function deletefeed(id){
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
                url: 'process/process_l.php',
                type: 'POST',
                data: {'feeds':'delete','id':id},

                beforeSend: function (resp) {
                },

                success: function (resp) {
                    if (resp.code == 'true') {
                        toastr["success"]("تم الحذف ، بنجاح.");
                        $("#feed_"+id).animate({
                            opacity: 0,
                            marginRight: '30px'
                        },500,function(){$("#feed_"+id).remove()});
                    } else {                    
                       toastr["error"]("حدث خطأ، ..");                      
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


var spoifd=[];

function fdspoiler(id,e){
    
    if (spoifd.includes(id)){
        
        $("#fd_desc"+id+", #fd_atta"+id).hide()
        $(e).hide();
        $("#feedsp"+id).show()
        const index = spoifd.indexOf(id);
        spoifd.splice(index, 1);
        
    }else{
        
        $("#fd_desc"+id+", #fd_atta"+id).show()
        $(e).hide();
        $("#fd_hde"+id).show()
        spoifd.push(id);
        
    }
}
var gallery;
function feedims(grp,e){
    var imagesarray=[];
    var group= $(e).attr('data-vue-img-group');
    var inputs= $(".collage-photo img");
    for(var i = 0; i < inputs.length; i++){
        if ($(inputs[i]).attr('data-vue-img-group')==grp){
            var img=$(inputs[i]);
            var aia={'src':$(inputs[i]).attr('src'),'w':img[0].naturalWidth,'h':img[0].naturalHeight};
            imagesarray.push(aia);
        }
    }
    console.log(imagesarray);
    var items=imagesarray;
    var options = {
    // optionName: 'option value'
    // for example:
     // start at first slide
    shareButtons: [
    {id:'facebook', label:'انشرها على الفايسبوك', url:'https://www.facebook.com/sharer/sharer.php?u={{url}}'},
    {id:'twitter', label:'تويتر', url:'https://twitter.com/intent/tweet?text={{text}}&url={{url}}'},
    {id:'download', label:'تحميل', url:'{{raw_image_url}}', download:true}
    ],
};
    
$("#hdr").hide()
var pswpElement = document.querySelectorAll('.pswp')[0];
    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
gallery.init();

    gallery.listen('close', function() {
    console.log('closed');
    $("#hdr").show()
});

}


var oldimg=[];

function  fdupdate(id){
     $('html,body').animate({scrollTop: 0} ,800);
     var input = $("#fls");
     
        input.replaceWith(input.val('').clone(true));
    
     $("#feedc").html('');
     
     $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: {'feeds':'edit','id':id},

        beforeSend: function (resp) {
            $(".el-loading-mask").show();
        },

        success: function (resp) {
            if (resp.code == 'true') {
                
                //fetch data ...
                var feedinfo=resp.data.feedinfo
                var post=resp.data.post
                var image=resp.data.images;
                var link=resp.data.link;
                    
                    
                
                    $("#text").val(feedinfo.text);
                
                    if (feedinfo.spoiler=='true'){
                        $('#spoi').bootstrapToggle('on');
                    }else{
                        $('#spoi').bootstrapToggle('off');
                    }
                    
                    if (feedinfo.privacy=='pub'){
                        privacy='pub';
                        $("#privop li").removeClass('active');
                        $("#pr_pub").addClass('active');
                        $("#shopr").html('عام')
                        $("#shopri").attr('class','fa fa-globe')
                    }else{
                        privacy='pri';
                        $("#privop li").removeClass('active');
                        $("#pr_pri").addClass('active');
                        $("#shopr").html('خاص')
                        $("#shopri").attr('class','fa fa-friens')
                    }
                
                    if (image.length=='0'){
                        
                    }else{
                        $("#upload").show()
                        var xi=0;
                        image.forEach(img => {
                            xi++;
                            $("#feedc").append('<div id="imp'+xi+'" class="collage-photo"><i onclick="UfeedsdeleteEl(`'+xi+'`,`'+img.name+'`,`'+img.id+'`)" class="fa fa-times btn-remove-attachment"></i> <img style="height:150px" src="process/'+img.name+'"></div>');
                            oldimg.push(img.id);
                        });
                    }
                
                    if (post.length=='0'){
                        
                    }else{
                        $(".tag-media").html('<div class="media-tag-item"><div class="media-tag-remove" onclick="onclick="feedsdeleteEl(`pst`,`'+post[0]+'`,``)"><i class="fa fa-times"></i></div> <a class="media-tag-cover"><img src="process/'+post[3]+'" class="img-responsive"></a> <div class="media-tag-body"><a href="post.php?id='+post[0]+'" target="_blank" class="media-tag-title">'+post[1]+'</a> <div class="media-tag-text"></div></div></div>')
                        $(".tag-media").show();
                        post=post[0];
                    }
                
                    if (link.length=='0'){
                        
                    }else{
                        
                        
                        $("#linksh").html('<i onclick="deletelink()" class="fa fa-times btn-remove-embed"></i> <div class="feed-attachment link"><div class="attachment-thumbnail" style="background-image: url(&quot;'+link.image_src+'&quot;);"><a rel="nofollow" target="_blank" href="'+link.image_src+'"></a></div> <div class="media-body attachment-body"><div><a rel="nofollow" target="_blank" href="'+link+'" class="text-primary"><b>'+link.title+'</b></a></div> <p>'+link.body+'</p> <div><small class="text-muted">'+link.url+'</small></div></div></div>')
                        
                        $("#linksh").show();
                    }
                
                    $("#donefeed").attr('onclick','updatefeed(`'+id+'`)');
                    $("#fls").attr('onchange','uploadfeedsimg(this)');
                    $("#donefeed").html('تعديل');
                    
                
                    // !!!!!!!!   LIIINK !!!!!!!!///  ----------IMPORTANT----------
                
                    $("#cancelpub").show();
                
                    
                $(".el-loading-mask").hide()
                
            } else {
                
                $(".el-loading-mask").hide();
                toastr["error"]("حدث خطأ.");
            }
        },

        error: function (resp) {
            $(".el-loading-mask").hide();
            toastr["error"]("حدث خطأ.");

        },
            
        complete: function (resp) {}
    });
}

function updatefeed(id){ //link,text,img,post
    var text= $("#text").val();
    var spoiler=$("#spoi").prop('checked');
    if (link!=''  || (text.length>3 && text.length<300) || fl.length>0 || oldimg.length>0){    
        //dooo that todaaaaay
        
        
    var  data = new FormData();
    var l=link
    var p=post
    var jso=JSON.stringify(delef);
    var oldim=JSON.stringify(oldimg);
    data.append('feeds','update');
    data.append('text',text);
    data.append('link',l);
    data.append('post',p);
    data.append('spoiler',spoiler);
    data.append('privacy',privacy);
    data.append('delef',jso);
    data.append('oldim',oldim);
    data.append('id',id);
        
    if (fl.length<=4){
        for (var x = 0; x < fl.length; x++) {
            data.append("fileToUpload[]",  document.getElementById('fls').files[x]);
        }
    }
    
        
   
    $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show();
        },

        success: function (resp) {
            if (resp.code == 'true') {

                $(".el-loading-mask").hide()
                toastr["success"]("تم التحديث ، بنجاح.");
                setTimeout(function(){window.location.href = "feeds.php";},2200);
                
            } else {
                
                $(".el-loading-mask").hide();
                
                switch (resp.mcode){
                    case 'textlong':
                     toastr["error"]("حدث خطأ،.");
                    break;
                    case 'images':
                     toastr["error"]("حدث خطأ، الصور التي اخترتها ليست صالحة، المرجو اختيار صور اخرى..");
                    break;
                }
                
                
                
                
            }
        },

        error: function (resp) {
            $(".el-loading-mask").hide();
            toastr["error"]("حدث خطأ.");

        },
            
        complete: function (resp) {}
    });
    
}else{
    if(text.length<3 ||  text.length>300){
            toastr["info"]("يجب ان يحتوي نص موضوعك على الاقل 3 حروف. وعلى الاكثر 300 حرف.");
    }
}
}

function UfeedsdeleteEl(i,name,id){
    var index= oldimg.indexOf(id);
    oldimg.splice(index,1);
    $("#imp"+i).remove();
}

function uploadfeedsimg(imgUrl){
        if (imgUrl.files && imgUrl.files[0]) {
                if (oldimg.length=='0'){
                    $('#upload').show();
                    $("#feedc").html('')
                }
                
                fl=imgUrl.files;
                arrayoffiles=Array.from(fl);
                if(!(fl.length+oldimg.length>4)){
                    var x=-1;
                    var n=oldimg.length;
                    delef=[];
                    
                    for(var i=0;i<fl.length;i++){
                        var reader = new FileReader();
                        reader.onload = function (e) {
                        x=x+1;
                        n++;
                        $("#feedc").append('<div id="imp'+n+'" class="collage-photo"><i onclick="feedsdeleteEl(`img`,`'+fl.item(x).name+'`,`'+x+'`)" class="fa fa-times btn-remove-attachment"></i> <img style="height:150px" src="'+e.target.result+'"></div>')
                        }
                        reader.readAsDataURL(imgUrl.files[i]);                    
                    } 
                    
                }else{
                    toastr["error"]("حدث خطأ، لقد تجاوزت الحد المسموح به من الصور.");
                    setTimeout(function (){
                               toastr["info"]("الحد المسموح به من الصور هو 4 صور."); 
                    },3000
                    )
                }
        }
}

function canceledit(){
    link='';
    post='';
    $("#text").val();
    var input = $("#fls");
    input.replaceWith(input.val('').clone(true));
    $("#feedc").html('');
    delef=[];
    oldimg=[];
    $(".tag-media").html(' <div class="tag-media-wrapper"><div aria-haspopup="listbox" role="combobox" aria-owns="el-autocomplete-9435" class="el-autocomplete" style="display: block;"><div class="el-input el-input--suffix"><!----><input onkeyup="gettitle(this)" type="text" autocomplete="off" valuekey="value" placeholder="بحث عن عنوان..." minlength="3" fetchsuggestions="function n(n){var r=arguments.length;return r?r>1?e.apply(t,arguments):e.call(t,n):e.call(t)}" debounce="600" placement="bottom-start" class="el-input__inner" role="textbox" aria-autocomplete="list" aria-controls="id" aria-activedescendant="el-autocomplete-9435-item--1"><span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-icon-search el-input__icon"></i><span><span></div><div role="region" id="searchdiv" class="el-autocomplete-suggestion el-popper" style="display: none;"><div class="el-scrollbar"><div class="el-autocomplete-suggestion__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;"><ul id="listT" class="el-scrollbar__view el-autocomplete-suggestion__list" role="listbox" id="el-autocomplete-9435"><p class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;"></p></ul></div><div class="el-scrollbar__bar is-horizontal"><div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div></div><div class="el-scrollbar__bar is-vertical"><div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div></div></div></div></div></div></div>');
    $("#linksh").hide()
    $("#linksh").html('');
    $("#cancelpub").hide()
}