var addt_r=0;
var addt_l;


function addtL(w){
    addt_l=w;
    
    $(".m-y-sm button").removeClass('selected');
    $("#"+w).addClass('selected');
}

function addrep(id){
              
              $('html,body').animate({
                    scrollTop: $('#addco').offset().top-200
              }, 'slow');
              $("#sendc").html('رد');
              $("#sendc").css('background-color','green');
              $("#sendc").css('color','white');
              $("#sendc").attr('onclick','opertion(`reply`,`'+id+'`)');
              $("#cancel_e").show()
    
}

function addrepfd(id,idf){
              
              $('html,body').animate({
                    scrollTop: $('#addco'+idf).offset().top-200
              }, 'slow');
              $("#sendc"+idf).html('رد');
              $("#sendc"+idf).css('background-color','green');
              $("#sendc"+idf).css('color','white');
              $("#sendc"+idf).attr('onclick','opertion(`fdreply`,`'+id+'|'+idf+'`)');
              $("#cancel_e"+idf).show()
    
}


function addT(id,image,name,year,type,epi){
    // add_modal
    // addtitle
    // addimage

    $("#addtitle").text(name+' ('+year+')');
    $("#addimage").attr('src','process/'+image);
    
    if (type=='movie' || (type=='serie' && (epi=='' || epi=='0')) || (type=='tvshow' && (epi=='' || epi=='0'))){
        $(".episode-seen").hide();
    }else{
        $(".episode-seen").show();
        $("#epi_w").attr('max',epi);
        $("#epi_e").text(epi);
    }
    $("#save_add").attr('onclick','opertion(`add_t`,`'+id+'`)');
    $("#add_modal").modal('show');  
}
var opened=[];
function spoilerP(type,id){
    

    if (opened.includes(type+id)){
        
        $("#spd"+type+id).removeClass('reveal');
        $("#spd"+type+id).removeClass('_active');
        $("#spd"+type+id).html('إظهار التعليق');
        $("#sp"+type+id).hide();
        
        const index = opened.indexOf(type+id);
        opened.splice(index, 1);
        
    }else{
        
        $("#spd"+type+id).addClass(' reveal _active');
        $("#spd"+type+id).html('إخفاء التعليق');
        $("#sp"+type+id).show();
        
        opened.push(type+id);
        
    }
    
      
}

//Operations :  like|comment|report|reply|like_comment|like_reply|
var morec=0;
function opertion(type,id){
    var data;
    switch (type){
        
        
        case 'deleteart':
            data={'operation':'deleteart','id':id};
        break;
            
        case 'deletels':
            data={'operation':'deletels','id':id};
        break;
            
        case 'deletetp':
            data={'operation':'deletetp','id':id};
        break;
            
        case 'ac|like' || 'dr|like':
          console.log(type+' '+id);
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        case 'ar|like':
          console.log(type+' '+id);
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        case 'rc|like':
          console.log(type+' '+id);
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
            
        case 'cm|like' :
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
            
        case 'dr|like' :
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
            
        case 'ls|like' :
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
            
        case 'fd|like' :
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case 'reviewd' :
          data={'operation':'reviewd','d':helprd,'id':id};
        break;
        
        case 'addreco' :
          $review=$("#recotext").val();
          data={'operation':'addreco','id':id,'idR':recoid,'text':$review};
        break;
        
        case 'rp|like' :
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case 'deletec_c'  :
            var all=type.split('_');
            data={'operation':all[0],'type':all[1],'id':id};
        break;
        
        case 'deletec_r' :
            var all=type.split('_');
            data={'operation':all[0],'type':all[1],'id':id};
        break;
                
        case 'ac|more_c' || 'dr|more_c' || 'ar|more_c' :
          morec++;
            
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'page':morec,'id':id};
            
        break;
                
        case 'fd|more_c' :
          
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
            
        break;
        
        case   'ac|report' || 'dr|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'rp|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'rc|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'ls|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'tp|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'cm|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'fd|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
        
        case    'ar|report':
          var all=type.split('|');
          data={'operation':all[1],'post':all[0],'id':id};
        break;
            
        case 'ac|comment': //ac; actor, ar: article, dr:drama
          
          var comment = $('#addco').val();
            
          if (comment.length>3){
              var spoi = $('#spoi').prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
            
        case 'ls|comment': //ac; actor, ar: article, dr:drama
          
          var comment = $('#addco').val();
            
          if (comment.length>3){
              var spoi = $('#spoi').prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
            
        case  'ar|comment': //ac; actor, ar: article, dr:drama
          
          var comment = $('#addco').val();
            
          if (comment.length>3){
              var spoi = $('#spoi').prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
            
        case  'rv|comment': //ac; actor, ar: article, dr:drama
          
          var comment = $('#addco').val();
            
          if (comment.length>3){
              var spoi = $('#spoi').prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
        
        case  'dr|comment': //ac; actor, ar: article, dr:drama
          
          var comment = $('#addco').val();
            
          if (comment.length>3){
              var spoi = $('#spoi').prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
        
        
        case  'fd|comment': //ac; actor, ar: article, dr:drama
          
            
          var comment = $('#addco'+id).val();
            
          if (comment.length>3){
              var spoi = $('#spoi'+id).prop('checked');
              var all=type.split('|');
              data={'operation':all[1],'post':all[0],'id':id,'comment':comment,'spoiler':spoi};
          }else{
              $('#addco').css('border','2px solid red');
              setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
              return;
          }
            
        break;
        
        
        case 'ac|update_c' || 'ar|update_c': //ac; actor, ar: article, dr:drama
          
          var idall=id.split('|');
              
              var comment = $('#addco').val();
            
              if (comment.length>3){
                  
                  var spoi = $('#spoi').prop('checked');
                  var all=type.split('|');
                  data={'operation':all[1],'post':all[0],'id':idall[1],'comment':comment,'idC':idall[0],'spoiler':spoi};
                  
              }else{
                  
                  $('#addco').css('border','2px solid red');
                  setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
                  return;
                  
              }
            
        break;
        case 'dr|update_c': //ac; actor, ar: article, dr:drama
          
          var idall=id.split('|');
              
              var comment = $('#addco').val();
            
              if (comment.length>3){
                  
                  var spoi = $('#spoi').prop('checked');
                  var all=type.split('|');
                  data={'operation':all[1],'post':all[0],'id':idall[1],'comment':comment,'idC':idall[0],'spoiler':spoi};
                  
              }else{
                  
                  $('#addco').css('border','2px solid red');
                  setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
                  return;
                  
              }
            
        break;
        
            
       case 'fd|update_c': //ac; actor, ar: article, dr:drama
          
          var idall=id.split('|');
              var all=type.split('|');
              var comment = $('#addco'+idall[1]).val();
            
              if (comment.length>3){
                  
                  var spoi = $('#spoi'+idall[1]).prop('checked');
                  var all=type.split('|');
                  data={'operation':all[1],'post':all[0],'id':idall[1],'comment':comment,'idC':idall[0],'spoiler':spoi};
                  
              }else{
                  
                  $('#addco'+all[1]).css('border','2px solid red');
                  setTimeout(function(){$('#addco'+all[1]).css('border','1px solid #edeff0');},3000)
                  return;
                  
              }
            
        break;
        
        case 'reply': //ac; actor, ar: article, dr:drama


              var comment = $('#addco').val();
            
              if (comment.length>3){
                  var spoi = $('#spoi').prop('checked');
                  data={'operation':type,'id':id,'post':'cm','comment':comment,'spoiler':spoi};
              }else{
                  $('#addco').css('border','2px solid red');
                  setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
                  return;
              }
            
        break;
        
        case 'fdreply': //ac; actor, ar: article, dr:drama

              var idall=id.split('|');
              var idf=idall;
              var comment = $('#addco'+idall[1]).val();
            
              if (comment.length>3){
                  var spoi = $('#spoi'+idall[1]).prop('checked');
                  data={'operation':'reply','id':idall[0],'post':'cm','comment':comment,'spoiler':spoi};
              }else{
                  $('#addco'+idall[1]).css('border','2px solid red');
                  setTimeout(function(){$('#addco'+idall[1]).css('border','1px solid #edeff0');},3000)
                  return;
              }
            
        break;
            
       
            
         
        case 'update_r':
          var comment = $('#addco').val();
            
              if (comment.length>3){
                  
                  var spoi = $('#spoi').prop('checked');
                 
                  data={'operation':'update_r','id':id,'comment':comment,'spoiler':spoi};
                  
              }else{
                  
                  $('#addco').css('border','2px solid red');
                  setTimeout(function(){$('#addco').css('border','1px solid #edeff0');},3000)
                  return;
                  
              }
        break;
            
        case 'like_comment':
          data={'operation':'like_comment','id':id};
        break;
            
        case 'like_reply':
          data={'operation':'like_reply','id':id};
        break;
        
        case 'add_t':

//        rat_si  rate_situation
          var rat_si = $("#rat_si").val();
          
//        epi_w   watched_episodes
          var epi_w = $("#epi_w").val();
            
//        note_r  note
          var note_r = $("#note_r").val();
            
          var preo=$("#preo").val()
          
          var numrew=$("#numrew").val()
          
          var watchag=$("#watchag").val()
          
          var dstart=$("#dstart").val()
          
          var dfinish=$("#dfinish").val()
          
            
//        addt_r  rating /5
//        addt_l  wht i like abt this one;
//        id      id of the title 
             
            
            data={'operation':'add_t','id':id,'rat_si':rat_si,'epi_w':epi_w,'note_r':note_r,'addt_r':addt_r,'addt_l':addt_l,'preo':preo,'numrew':numrew,'watchag':watchag,'dstart':dstart,'dfinish':dfinish};
            
        break;
    }
    
    var oldL;
    $.ajax({
        url: 'process/process.php',
        type: 'POST',
        data: data,
        beforeSend: function (resp) {
           if(data.operation=='add_t'){
                    $("#save_add").html('إرسال <i class="el-icon-loading"></i>');
           }
            
           if(data.operation=='comment'){
                    $("#sendc").html('إرسال <i class="el-icon-loading"></i>');
           }
            
            if(data.operation=='like'){
                       oldL =  $("#likenum"+po+id).text();
                       var po =data.post;
                       var id =data.id;
                    $("#likenum"+po+id).html('<i class="el-icon-loading"></i>');
            }
            
            if(data.operation=='more_c'){
                          $("#more_cS").html('تحميل ... <i class="el-icon-loading"></i>')
            }
            
            if(data.operation=='update_c'){
                if (data.post=='fd'){
                    $("#sendc"+data.id).html('تعديل <i class="el-icon-loading"></i>');
                }else{
                    $("#sendc").html('تعديل <i class="el-icon-loading"></i>');
                }
            }
            
            if(data.operation=='addreco'){
                    $("#addrecob").html('<i class="el-icon-loading"></i>');
                    $(".el-loading-mask").show()
            }
            
            if(data.operation=='reviewd'){
                if (data.d=='1'){
                        $("#ry"+data.id).html('<i class="el-icon-loading"></i>');
                }else{
                        $("#rn"+data.id).html('<i class="el-icon-loading"></i>');
                }
            }
        },
        success: function (resp) {
           if (resp.code=='true'){  
               switch (resp.mcode){
                       
                   case 'revd':
                        if (data.d=='1'){
                                $("#rn"+data.id).removeClass('voted');
                                $("#rn"+data.id).addClass('white');
                                $("#ry"+data.id).removeClass('white');
                                $("#ry"+data.id).addClass('voted');
                                $("#ry"+data.id).html('نعم');
                        }else{
                                $("#ry"+data.id).removeClass('voted');
                                $("#ry"+data.id).addClass('white');
                                $("#rn"+data.id).removeClass('white');
                                $("#rn"+data.id).addClass('voted');
                                $("#rn"+data.id).html('لا');

                        }
                   break;   
                       
                   case 'artdeleted':
                        toastr["success"]("تمة الحذف بنجاح، شكرا");
                        setTimeout(function () {
                        window.location.href = "articles.php";
                        }, 3000);
                   break;
                       
                   case 'topicdeleted':
                        toastr["success"]("تمة الحذف بنجاح، شكرا");
                        setTimeout(function () {
                        window.location.href = "topic.php";
                        }, 3000);
                   break;
                       
                   case 'listdeleted':
                        toastr["success"]("تمة الحذف بنجاح، شكرا");
                        setTimeout(function () {
                        window.location.href = "lists.php";
                        }, 3000);
                   break;
                       
                   case 'liked':
                       
                       var l= resp.data.postL;
                       var po =data.post;
                       var id =data.id;
                       
                       
                       if (po=='fd'){
                           $("#likedivmini"+po+id).addClass('active');
                           $("#likediv"+po+id).addClass('liked');
                           $("#likenummini"+po+id).html(l+1);
                           $("#likenum"+po+id).html(l+1);
                       }else{
                           $("#likenummini"+po+id).html(l+1);
                           $("#likedivmini"+po+id).addClass('active');
                           $("#likenum"+po+id).html(l+1);
                           $("#likediv"+po+id).addClass('active');
                           $("#likediv"+po+id+"2").addClass('active');
                       }
                      
                       
                   break;
                   
                   case 'reported':
                       
                       var id =data.id;
                       
                       if (data.post=='rp'){
                            
                           $("#menutr"+id).html('<i style="color:red" class="fa fa-flag"></i>');
                           $("#menutr"+id).removeClass('menu-toggle');
                           $("#menutdivr"+id).html('إلغاء التبليغ');
                       }else if(data.post=='cm'){
                           $("#menut"+id).html('<i style="color:red" class="fa fa-flag"></i>');
                           $("#menut"+id).removeClass('menu-toggle');
                           $("#menutdiv"+id).html('إلغاء التبليغ');
                           
                           $("#dcm"+id).css('color','red');
                       }else if(data.post=='fd'){
                           $("#menutfd"+id).html('<i style="color:red" class="fa fa-flag"></i>');
                           $("#menutfd"+id).removeClass('menu');
                           $("#menutdivfd"+id).html('إلغاء الابلاغ');
                       }else if(data.post=='ls' || data.post=='ar' || data.post=='rc' || data.post=='tp'){$("#dls"+id).css('color','red');}
                   break;
                       
                   case 'disreported':
                       var id =data.id;
                       
                       if (data.post=='rp'){
                           $("#menutr"+id).html('');
                           $("#menutdivr"+id).html('تبليغ');
                           $("#menutr"+id).addClass('menu-toggle');
                       }else if(data.post=='cm'){
                            $("#menut"+id).html('');
                            $("#menutdiv"+id).html('تبليغ');
                            $("#menut"+id).addClass('menu-toggle');
                            $("#dcm"+id).css('color','#666');

                       }else if(data.post=='fd'){
                            $("#menutfd"+id).html('');
                            $("#menutdivfd"+id).html('أبلاغ');
                            $("#menutfd"+id).addClass('menu');
                       }else if(data.post=='ls' || data.post=='ar' || data.post=='rc' || data.post=='tp'){$("#dls"+id).css('color','#888');}
                       
                   break;
                   
                   case 'rated':
                       $("#save_add").css('background-color','#f24e4e');
                       $("#save_add").html('تم الحفظ <i class="fa fa-check"></i>');
                       $('#addTb'+data.id).html('<i class="fa fa-check"></i>');
                       $("#add_modal").modal('hide');  
                       id='';
                       rat_si='';
                       epi_w='';
                       note_r='';
                       addt_r='';
                       addt_l='';
                       $("#save_add").html('حفظ');
                   break; 
                       
                   case 'addreco':
                        $("#addrecob").html('تم النشر');
                        $(".el-loading-mask").hide()
                        toastr["success"]("تمة الاضافة بنجاح، شكرا");
                        setTimeout(function () {
                        window.location.href = "post.php?id="+data.id;
                        }, 3000);
                   break;  
                       
                   case 'recoAlr':
                        $("#addrecob").html('تم النشر');
                        $(".el-loading-mask").hide()
                        toastr['warning']("لقد قمت مسبقا بهده الاضافة، المرجوا اختيار عنوانا اخر، شكرا جزيلا.");
                   break; 
                       
                   case 'updated':
                       
                       
                       if (data.post=='fd'){
                       $("#sendc"+data.id).html('تم التعديل <i class="fa fa-check"></i>');
                        setTimeout(function (){$("#sendc"+data.id).html(' نشر ');},3000);
                       
                       $("#sendc"+data.id).css('background-color','white');
                       $("#sendc"+data.id).css('color','black');
                       $('#addco'+data.id).val('');
                        }else{
                       $("#sendc").html('تم التعديل <i class="fa fa-check"></i>');
                        setTimeout(function (){$("#sendc").html(' نشر ');},3000);
                       
                       $("#sendc").css('background-color','white');
                       $("#sendc").css('color','black');
                       $('#addco').val('');
                        }
                       
                       if (data.operation=='update_c'){
                          $('html,body').animate({
                            scrollTop: $("#commentid"+data.idC).offset().top-200
                       }, 'slow'); 
                       }else{
                           $('html,body').animate({
                            scrollTop: $("#repid"+data.id).offset().top-200
                       }, 'slow');
                       }
                       
                       
                       if (data.spoiler){
                           
                           if (data.operation=='update_c'){
                                $("#post_message"+data.idC).html('<div><a onclick="spoilerP(`cm`,'+data.idC+')"  id="spdcm'+data.idC+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="spcm'+data.idC+'" style="display:none" class="spoiler p-a"><p id="message'+data.idC+'"></p></div></div>');
                           }else{
                                $("#post_messageR"+data.id).html('<div><a onclick="spoilerP(`rp`,'+data.id+')"  id="spdrp'+data.id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="sprp'+data.id+'" style="display:none" class="spoiler p-a"><p id="Rmessage'+data.id+'"></p></div></div>');   
                           }
                           
                       }else{
                           if (data.operation=='update_c'){
                                $("#post_message"+data.idC).html('<p id="message'+data.idC+'"></p>');
                           }else{
                                $("#post_messageR"+data.id).html('<p id="Rmessage'+data.id+'"></p>');
                           }
                       }
                       
                       if (data.operation=='update_c'){
                           $("#message"+data.idC).text(data.comment);
                           $("#commentid"+data.idC).css('border','2px solid #00619d');
                           setTimeout(function (){$("#commentid"+data.idC).css('border','none');$("#commentid"+data.idC).css('border-top','1px solid rgba(120, 130, 140, 0.13)');},5000);
                       }else{
                           $("#Rmessage"+data.id).text(data.comment);
                           $("#repid"+data.id).css('border','2px solid #00619d');
                           setTimeout(function (){$("#repid"+data.id).css('border','none');$("#repid"+data.id).css('border-top','1px solid rgba(120, 130, 140, 0.13)');},5000);
                       }
                       
                       if (data.operation=='update_c'){
                            if (data.post=='fd'){
                                $("#sendc"+data.id).attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)');
                            }else{
                                $("#sendc").attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)');
                            }
                       }else{
                            var atr=$("#cancel_e").attr('onclick');
                            var len=atr.length
                            var usf=atr.slice(8,len);
                            $("#sendc").attr('onclick','opertion'+usf);
                       }

                        $("#cancel_e").hide()

                   break; 
                       
                   case 'commented':
                       $("#sendc").html('تم النشر <i class="fa fa-check"></i>');
                        setTimeout(function (){$("#sendc").html(' نشر ');},3000);
                       $('#addco').val('')
                       
                       if (data.post=='fd'){
                           $("#sendc"+data.id).html('تم النشر <i class="fa fa-check"></i>');
                            setTimeout(function (){$("#sendc"+data.id).html(' نشر ');},3000);
                           $('#addco'+data.id).val('');
                       }
                       
                        var id=resp.data.postR
                        var username=resp.data.postE
                        var picture=resp.data.myL
                        var myid=resp.data.myR
                       
                        if (data.spoiler){
                        
                        var text='<div class="post-message" id="post_message'+id+'"><div><a onclick="spoilerP(`cm`,'+id+')"  id="spdcm'+id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="spcm'+id+'" style="display:none" class="spoiler p-a"><p id="message'+id+'"></p></div></div></div>';
                            
                        }else{
                        var text='<div class="post-message" id="post_message'+id+'"><p id="message'+id+'"></p></div>';                    
                        }
                        var dt='قبل لحظات';
                        
                       
                       
                       if (data.post=='fd'){
                            $("#comment-top"+data.id).prepend('<li id="commentid'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"><b id="likenumcm'+id+'">0</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menut'+id+'" class="menu-toggle"></a><div id="menutdiv'+id+'" class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_c(`'+data.post+'`,`'+id+'`,`'+data.id+'`,`'+data.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_c`,`'+id+'`)">حذف</a> </div></li><li><a  class="reply" onclick="addrepfd(`'+id+'`,`'+data.id+'`)" >رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span id="likedivminicm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"> <b id="likenumminicm'+id+'" >0</b> <i class="like-heart"></i></span></li><li><a  onclick="addrepfd(`'+id+'`,`'+data.id+'`)" class="reply">رد</a></li></ul><!----></div></div><!----><!----></li>')
                           }else{
                               $("#comment-top").prepend('<li id="commentid'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"><b id="likenumcm'+id+'"></b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menut'+id+'" class="menu-toggle"></a><div id="menutdiv'+id+'" class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_c(`'+data.post+'`,`'+id+'`,`'+data.id+'`,`'+data.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_c`,`'+id+'`)">حذف</a> </div></li><li><a  class="reply" onclick="addrep(`'+id+'`)" >رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span id="likedivminicm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"> <b id="likenumminicm'+id+'" ></b> <i class="like-heart"></i></span></li><li><a  onclick="addrep(`'+id+'`)" class="reply">رد</a></li></ul><!----></div></div><!----><!----></li>')
                           }
                            
                       $("#message"+id).text(data.comment);
                   break;
                   
                   
                   case 'replied':
                       
                        if (type=='fdreply'){
                            
                            var fdid=idf[1];
                            $("#sendc"+fdid).html('تم الرد <i class="fa fa-check"></i>');
                            setTimeout(function (){$("#sendc"+fdid).html(' نشر ');},3000);
                            $('#addco'+fdid).val('')
                            
                        }else{
                            
                            $("#sendc").html('تم الرد <i class="fa fa-check"></i>');
                            setTimeout(function (){$("#sendc").html(' نشر ');},3000);
                            $('#addco').val('')
                        }
                       
                        if (type=='fdreply'){
                            var atr=$("#cancel_e"+fdid).attr('onclick');
                        }else{
                            var atr=$("#cancel_e").attr('onclick');
                        }
                       
                        var len=atr.length
                        var usf=atr.slice(8,len);
                        
                        if (type=='fdreply'){
                            $("#sendc"+fdid).attr('onclick','opertion'+usf);
                            $("#sendc"+fdid).css('background-color','white');
                            $("#sendc"+fdid).css('color','black');
                            $("#cancel_e"+fdid).hide()
                        }else{
                            $("#sendc").attr('onclick','opertion'+usf);
                            $("#sendc").css('background-color','white');
                            $("#sendc").css('color','black');
                            $("#cancel_e").hide()
                        }

                        var id=resp.data.postR
                        var username=resp.data.postE
                        var picture=resp.data.myL
                        var myid=resp.data.myR
                        var repn=resp.data.postRp
                        
                        if (data.spoiler){
                        var text='<div class="post-message" id="post_message'+id+'"><div><a onclick="spoilerP(`rp`,'+id+')"  id="spdrp'+id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="sprp'+id+'" style="display:none" class="spoiler p-a"><p id="Rmessage'+id+'"></p></div></div></div>';  
                        }else{
                        var text='<div class="post-message" id="post_message'+id+'"><p id="Rmessage'+id+'"></p></div>';     
                        }
                       
                        var dt='قبل لحظات';
                       
                        if (repn=='0'){
                            
                            $("#commentid"+data.id).append('<ul id="children'+data.id+'" class="children"></lu>');
                            $("#children"+data.id).prepend('<li id="reply'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivrp'+id+'" onclick="opertion(`rp|like`,`'+id+'`)"class="btn-like"><b id="likenumrp'+id+'">0</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menutr'+id+'" class="menu-toggle"></a><div id="menutdivr'+id+'" class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_r(`'+id+'`,`'+data.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_r`,`'+id+'`)">حذف</a> </div></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span class="btn-like">3 <i class="like-heart"></i></span></li><li><a  class="reply">Reply</a></li></ul><!----></div></div><!----><!----></li>')
                            
                        }else{
                            
                            $("#children"+data.id).prepend('<li id="reply'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)"class="btn-like"><b id="likenumcm'+id+'">0</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menutr'+id+'" class="menu-toggle"></a><div id="menutdivr'+id+'" class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_r(`'+id+'`,`'+data.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_r`,`'+id+'`)">حذف</a> </div></li><li><a  class="reply">رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span class="btn-like">3 <i class="like-heart"></i></span></li><li><a  class="reply">Reply</a></li></ul><!----></div></div><!----><!----></li>')
                            
                        }

                       $("#Rmessage"+id).text(data.comment);
                       
                       
                       $('html,body').animate({
                            scrollTop: $("#reply"+id).offset().top-200
                       }, 'slow');
                       
                       $("#reply"+id).css('border','2px solid #00619d');
                       
                       setTimeout(function (){$("#reply"+id).css('border','none');$("#reply"+id).css('border-top','1px solid rgba(120, 130, 140, 0.13)');},5000);
                       
                   break;
                   
                   
                   case 'moreCEexist':
                        
                        resp.data.forEach(element => {
                                const dt = moment(element.wn, "YYYY-MM-DD hh:mm:ss").fromNow();

                                var id=element.cmi;
                                var username=element.username;
                                var picture=element.picture;
                                var myid=element.code;
                                var likes=element.liken;

                                if (element.spoiler=='true'){
                                var text='<div class="post-message" id="post_message'+id+'"><div><a onclick="spoilerP(`cm`,`'+id+'`)"  id="spdcm'+id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="spcm'+id+'" style="display:none" class="spoiler p-a"><p id="message'+id+'"></p></div></div></div>';
                                }else{
                                var text='<div class="post-message" id="post_message'+id+'"><p id="message'+id+'"></p></div>';                         
                                }

                                if (element.how==element.code){
                                    var option='<div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_c(`'+data.post+'`,`'+id+'`,`'+element.thisP+'`,`'+element.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_c`,`'+id+'`)">حذف</a> </div>';
                                }else{
                                    if (element.idR=='true'){
                                        var option='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdiv'+id+'" onclick="opertion(`cm|report`,`'+id+'`)" class="dropdown-item story-share">إلغاء التبليغ</a> </div>'; 
                                    }else{
                                        var option='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdiv'+id+'" onclick="opertion(`cm|report`,`'+id+'`)" class="dropdown-item story-share">تبليغ</a> </div>'; 
                                    }                    
                                }
                                    if(data.post=='fd'){
                                    $("#comment-top"+data.id).append('<li id="commentid'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"><b id="likenumcm'+id+'">'+(likes)+'</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menut'+id+'" class="menu-toggle"></a>'+option+'</li><li><a  class="reply" onclick="addrepfd(`'+id+'`,`'+data.id+'`)" >رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span id="likedivminicm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"> <b id="likenumminicm'+id+'" ></b> <i class="like-heart"></i></span></li><li><a  onclick="addrepfd(`'+id+'`,`'+data.id+'`)" class="reply">رد</a></li></ul><!----></div></div><!----><!----></li>')
                                    }else{
                                    $("#comment-top").append('<li id="commentid'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"><b id="likenumcm'+id+'">'+(likes)+'</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menut'+id+'" class="menu-toggle"></a>'+option+'</li><li><a  class="reply" onclick="addrep(`'+id+'`)" >رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span id="likedivminicm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"> <b id="likenumminicm'+id+'" ></b> <i class="like-heart"></i></span></li><li><a  onclick="addrep(`'+id+'`)" class="reply">رد</a></li></ul><!----></div></div><!----><!----></li>')
                                    }

                                    if (element.idR=='true'){
                                    $("#menut"+id).html('<i style="color:red" class="fa fa-flag"></i>');
                                    $("#menut"+id).removeClass('menu-toggle');
                                    $("#menutdiv"+id).html('إلغاء التبليغ');
                                    }else{
                                    }
                            
                               if (element.RepCount>100){
                                   $("#message"+id).html('<span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>')
                               }else{
                                   $("#message"+id).text(element.comment);
                               }
                            
// ---------------------------------------REPLIES------------------------------------
                            
                               if (element.thisT.length=='0'){
                                   
                               }else{
                                   $("#commentid"+id).append('<ul class="children" id="children'+id+'">');
                                   element.thisT.forEach(reply => {
                                       
                                        const dt = moment(reply.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                                       
                                       var myl='';
                                       if (reply.myl=='true'){
                                           myl='active';
                                       }
                                           
                                       if (reply.spoiler=='true'){
                                            var text='<div class="post-message" id="post_messageR'+reply.id+'"><div><a onclick="spoilerP(`rp`,`'+reply.id+'`)"  id="spdrp'+reply.id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="sprp'+reply.id+'" style="display:none" class="spoiler p-a"><p id="Rmessage'+reply.id+'"></p></div></div></div>';
                                       }else{
                                            var text='<div class="post-message" id="post_messageR'+reply.id+'"><p id="Rmessage'+reply.id+'"></p></div>';
                                       }
                                       
                                        if (reply.idU==element.how){
                                            var Roption='<div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_r(`'+reply.id+'`,`'+reply.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_r`,`'+reply.id+'`)">حذف</a> </div>';
                                        }else{
                                            if (reply.idT=='true'){
                                                var Roption='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdivr'+reply.id+'" onclick="opertion(`rp|report`,`'+reply.id+'`)" class="dropdown-item story-share">إلغاء التبليغ</a> </div>'; 
                                            }else{
                                                var Roption='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdivr'+reply.id+'" onclick="opertion(`rp|report`,`'+reply.id+'`)" class="dropdown-item story-share">تبليغ</a> </div>'; 
                                            }                    
                                        }
                                       
                                       $("#children"+id).append('<li id="repid'+reply.id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivrp'+reply.id+'" onclick="opertion(`rp|like`,`'+reply.id+'`)" class="btn-like '+myl+'"><b id="likenumrp'+reply.id+'">'+(reply.likesn)+'</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menutr'+reply.id+'" class="menu-toggle"></a>'+Roption+'</li><li></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+reply.picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+reply.code+'" target="_blank" class="user-display text-primary in-link"><b>'+reply.username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span class="btn-like">3 <i class="like-heart"></i></span></li><li><a  class="reply">Reply</a></li></ul><!----></div></div><!----><!----></li>')
                                       
                                       if (reply.idT=='true'){
                                            $("#menutr"+reply.id).html('<i style="color:red" class="fa fa-flag"></i>');
                                            $("#menutr"+reply.id).removeClass('menu-toggle');
                                            $("#menutdivr"+reply.id).html('إلغاء التبليغ');
                                        }else{
                                        }
                                       
                                       $("#Rmessage"+reply.id).text(reply.replie);
                                       
                                       if (element.reported>100){
                                           $("#Rmessage"+reply.id).html('<span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>')
                                       }else{
                                             $("#Rmessage"+reply.id).text(reply.replie);
                                       }
                                   })
                               }
                       
                       });
                       
                       if (resp.data<6 || data.post=='fd'){
                          $("#more_cS").html('لا يوجد مزيد من التعليقات')
                          setTimeout(function (){$("#more_cB").hide();},5000)
                       }else{
                           
                          $("#more_cS").html('المزيد من التعاليق')
                          
                       }
                   break;
                   
                   case 'disliked':
                      
                       var l= resp.data.postL;
                       var po =data.post;
                       var id =data.id;
                       
                       if (po=='fd'){
                           $("#likedivmini"+po+id).addClass('active');
                           $("#likediv"+po+id).addClass('liked');
                           $("#likenummini"+po+id).html(l-1);
                           $("#likenum"+po+id).html(l-1);
                       }else{
                           $("#likenum"+po+id).html(l-1);
                           $("#likediv"+po+id).removeClass('active');
                           $("#likenummini"+po+id).html(l-1);
                           $("#likedivmini"+po+id).removeClass('active');
                           $("#likediv"+po+id+"2").removeClass('active');
                       }

                   break;
                   
                   
                   case 'c_deleted':
                      
                       var id =data.id;
                       $("#commentid"+id).css('background-color','#c1010142');
                       $("#commentid"+id).css('color','white');
                       $("#commentid"+id).animate({opacity:'0',marginLeft: '20px'},750,function(){$("#commentid"+id).hide();});
                      
                   break;     
                   
                   case 'r_deleted':
                      
                       var id =data.id;
                       $("#repid"+id).css('background-color','#c1010142');
                       $("#repid"+id).css('color','white');
                       $("#repid"+id).animate({opacity:'0',marginLeft: '20px'},750,function(){$("#repid"+id).hide();});
                      
                   break;                
               }
            }else{
                if (resp.mcode=='notLogin'){
                   toastr["info"]("المرجوا تسجيل الدخول. ");
                    if(data.operation=='like'){
                       var po =data.post;
                       var id =data.id;
                       $("#likenum"+po+id).html(oldL);
                    }
                    
                    if (resp.mcode=='errorupdate' || resp.mcode=='postNEU'){
                     $("#sendc").css('color','black');
                     $('#addco').val('');
                     $("#sendc").attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)'); 
                     $("#cancel_e").hide()
                   }
                    
                }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                    if(data.operation=='like'){
                       var po =data.post;
                       var id =data.id;
                       $("#likenum"+po+id).html(oldL);
                    }
                    
                    if (resp.mcode=='errorupdate' || resp.mcode=='postNEU'){
                     $("#sendc").css('color','black');
                     $('#addco').val('');
                     $("#sendc").attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)'); 
                     $("#cancel_e").hide()
                   }
                    
                }else{
                   toastr["error"]("حدث خطأ. المرجو التأكد من اتصالك بالانترنت");
                   $("#save_add").html('حفظ');
                   $("#sendc").html('نشر');
                   $("#sendc").css('background-color','white');
                   $("#addrecob").html('تم النشر');
                   $(".el-loading-mask").hide()
                        
                   if (resp.mcode=='errorupdate' || resp.mcode=='postNEU'){
                     $("#sendc").css('color','black');
                     $('#addco').val('');
                     $("#sendc").attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)'); 
                     $("#cancel_e").hide()
                   }

                }
            }
        },
        error: function (resp) {
                   toastr["error"]("حدث خطأ. المرجو التأكد من اتصالك بالانترنت");
                   $("#save_add").html('حفظ');
                   $("#sendc").html('نشر');
                   $("#more_cS").html('المزيد من التعاليق')
            
                    if (data.update_c=='errorupdate'){
                     $("#sendc").css('color','black');
                     $('#addco').val('');
                     $("#sendc").attr('onclick','opertion(`'+data.post+'|comment`,`'+data.id+'`)'); 
                     $("#cancel_e").hide()
                   }
            
                    if (data.operation=='addreco'){
                     $("#addrecob").html('تم النشر');
                        $(".el-loading-mask").hide()
                        
                   }
            
            if(data.operation=='like'){
                       var po =data.post;
                       var id =data.id;
                       $("#likenum"+po+id).html(oldL);
            }

        },

        complete: function (resp) {
        }
    });
    
}

function upd_c(type,id,idP,spoi){
         
    if (type=='fd'){
     $('#addco'+idP).val($('#message'+id).text());
    
    $('html,body').animate({
       scrollTop: $('#addco'+idP).offset().top-200
    }, 'slow');
    
    if (spoi=='true'){
        $('#spoi'+idP).bootstrapToggle('on');
    }else{
        $('#spoi'+idP).bootstrapToggle('off');
    }
    $("#sendc"+idP).html('تعديل');
    $("#sendc"+idP).css('background-color','green');
    $("#sendc"+idP).css('color','white');
    $("#sendc"+idP).attr('onclick','opertion(`'+type+'|update_c`,`'+id+'|'+idP+'`)');
    $("#cancel_e").show()   
        
    }else{
    $('#addco').val($('#message'+id).text());
    
    $('html,body').animate({
       scrollTop: $('#addco').offset().top-200
    }, 'slow');
    
    if (spoi=='true'){
        $('#spoi').bootstrapToggle('on');
    }else{
        $('#spoi').bootstrapToggle('off');
    }
    $("#sendc").html('تعديل');
    $("#sendc").css('background-color','green');
    $("#sendc").css('color','white');
    $("#sendc").attr('onclick','opertion(`'+type+'|update_c`,`'+id+'|'+idP+'`)');
    $("#cancel_e").show()
    }
    
}

function upd_r(id,spoi){
         
    
    $('#addco').val($('#Rmessage'+id).text());
    
    $('html,body').animate({
       scrollTop: $('#addco').offset().top-200
    }, 'slow');
    
    if (spoi=='true'){
        $('#spoi').bootstrapToggle('on');
    }else{
        $('#spoi').bootstrapToggle('off');
    }
    
    $("#sendc").html('تعديل');
    $("#sendc").css('background-color','green');
    $("#sendc").css('color','white');
    $("#sendc").attr('onclick','opertion(`update_r`,`'+id+'`)');
    $("#cancel_e").show();
    
}

function cancel_e(type,id){
        
        var tp=type.split('|');
        
        if (tp[0]=='fd'){
        $("#sendc"+id).attr('onclick','opertion(`'+type+'`,`'+id+'`)');
        $("#sendc"+id).css('background-color','white');
        $("#sendc"+id).css('color','black');
        $("#sendc"+id).text('نشر');
        $('#addco'+id).val('');
    
        $("#cancel_e"+id).hide()
            
        }else{
        $("#sendc").attr('onclick','opertion(`'+type+'`,`'+id+'`)');
        $("#sendc").css('background-color','white');
        $("#sendc").css('color','black');
        $("#sendc").text('نشر');
        $('#addco').val('');
    
        $("#cancel_e").hide()
        }

}
///
var activems;
var t = 0;
$("#register").submit(function (e) {
    e.preventDefault();
    $("#error").hide();
    if (false) {} else {
        var values = $(this).serialize();
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: values,
            success: function (resp) {
                console.log('succ: ' + resp.code)
                if (resp.code == 'false') {
                    $("#error").show();
                    //username_uncorrects
                    if (resp.codem == "us_Empty") {
                        $('#error').html("المرجوا اختيار اسم مستخدم");
                    } else if (resp.codem == "us_Small") {
                        $('#error').html("المرجوا اختيار اسم مستخدم يتعدى 3 حروف");
                    } else if (resp.codem == "us_Invalid") {
                        $('#error').html("اسم المستخدم يحتوي على أحرف غير صالحة.");
                    } else if (resp.codem == "us_Already") {
                        $('#error').html("اسم المستخدم موجود مسبقا.");

                        //email incorrect
                    } else if (resp.codem == "em_Already") {
                        $('#error').html("البريد الالكتروني موجودا مسبقا");
                    } else if (resp.codem == "em_Invalid") {
                        $('#error').html("البريد الالكتروني غير صالح.");
                    } else if (resp.codem == "ps_small") {
                        $('#error').html("كلمة المرور قصيرة. يجب ان تتعدى 8 حروف.");
                    } else if (resp.codem == "ps_invalid") {
                        $('#error').html("كلمة السر يجب ان تحتوي على حروف و ارقام.");
                    }
                } else {
                    $("#error").hide()
                    toastr["success"]("مرحبا بك ! ");
                    window.location.href = "index.php";
                }
            },
            error: function (resp) {
                console.log('error: ' + resp.code)
            },

            complete: function (resp) {}
        });
    }
})


$("#compose-form").submit(function (e) {
    e.preventDefault();
    var values = $(this).serialize();
    $.ajax({
        url: 'process/process.php',
        type: 'POST',
        data: values,
        success: function (resp) {
            if (resp.code == "true") {
                toastr["success"]("تم إرسال رسالتك بنجاح.");
                setTimeout(function () {
                    window.location.href = "message.php";
                }, 500);

            } else {
                if (resp.mcode == 'emptyF') {
                    toastr["error"]("المرجوا ملأ الحقول المطلوبة.");
                } else if (resp.mcode == 'invalidUser') {
                    toastr["error"]("اسم المستخدم الدي اضفته غير متواجد، او غير صحيح");
                }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                } else if (resp.mcode == 'notLogin') {
                    toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
                }
            }
        },
        error: function (resp) {
            console.log('error: ' + resp.code)
        },

        complete: function (resp) {}
    });
})

$("#loginform").submit(function (e) {
    e.preventDefault();
    $("#error").hide()
    if (false) {} else {
        var values = $(this).serialize();
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: values,
            success: function (resp) {
                if (resp.code == true) {
                    window.location.href = "index.php";
                } else {
                    $("#error").html("خطأ في كلمة السر أو البريد الالكتروني.");
                    $("#error").show();
                }

            },
            error: function (resp) {
                console.log('error: ' + resp.code)
            },

            complete: function (resp) {}
        });
    }
})


$("#forgetpass").submit(function (e) {
    e.preventDefault();
    $("#error").hide()
    if (false) {} else {
        var values = $(this).serialize();
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: values,
            success: function (resp) {
                if (resp.code) {
                    
                    $("#error").hide();
                    $("#error").removeClass('alert-danger');
                    $("#error").addClass('alert-success');
                    $("#error").show();
                    $("#error").html("تمة إرسال رسالة تأكيد الى بريدك الالكتروني. شكرا");
                    setTimeout(function () {
                    window.location.href = "index.php";
                    }, 3000);
                    
                } else {
                    
                    $("#error").html("المرجوا ادخال البريد الخاص بك");
                    $("#error").show();
                }

            },
            error: function (resp) {
                toastr['error']('حدث خطأ ... ');
            },

            complete: function (resp) {}
        });
    }
})

function sendm(i) {
    var message = $("#messagetext").val();
    if (message == '') {
        $("#messagetext").css("border", ' #bab6cc 1px solid');
        setTimeout(function () {
            $("#messagetext").css("border", '1px solid #dcdfe6')
        }, 4000)
    } else {
        t = t + 1;
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                "mssg": "sendone",
                "val": message,
                "id": i
            },
            success: function (resp) {
                if (resp.code == 'true') {
                    $("#messagetext").val('');

                    moment.locale("ar_Mo");
                    var date = new Date();
                    var wn = moment(resp.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                    
                    
                    $("#messagel").prepend('<li style="border-right: #bab6cc 3px solid" style="border-right: #bab6cc 3px solid" id="' + t + '" class="post"><div class="post-content"><div class="avatar">                                    <a  href="profile.php?id=' + resp.codei + '" class="user"><img src="process/' + resp.picture + '" class="user-avatar"></a></div><div class="post-body">                                    <div class="post-header p-b-xs"><a href="profile.php?id=' + resp.codei + '" class="user-display text-primary"><b>' + resp.username + '</b></a><span class="mdl-utag"></span><span id="messaged" class="date">' + wn + '</span></div><div class="post-message" >' + message + '</div></div></div></li>');

                    $("#" + t).css("background-color", "#ff96");
                    setTimeout(function () {
                        $("#" + t).css("background-color", "#ffffff");
                    }, 2000);
                } else {

                    if (resp.mcode == 'notLogin') {
                        toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
                    }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                
                    } else {
                        toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
                    }

                }
            },
            error: function (resp) {
                toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
            },

            complete: function (resp) {}
        });
    }
}

var activechat;

function live() {

    var state;

    getState();

    function getState() {
        console.log("getting state...");
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                "live": "getstate"
            },
            success: function (resp) {
                if (resp.code == 'true') {
                    state = resp.state;
                    $("#not_un").html(state);
                    update();
                } else {
                    if (resp.mcode == 'notLogin') {
                        toastr["info"]("المرجوا تسجيل الدخول للحصول على كافة مزايا الموقع.");
                        setTimeout(getState, 300000);
                    }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                    } else {
                        toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
                        setTimeout(getState, 10000);
                    }
                }
            },
            error: function (resp) {
                toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
                setTimeout(getState, 10000);
            },

            complete: function (resp) {}
        });
    }

    function update() {
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                "live": "update",
                "state": state
            },
            success: function (resp) {
                if (resp.code == 'true') {

                    if (resp.codem == "new_n") {
                        $("#not_un").html(state + 1);

                        switch (resp.coden) {
                            case 'message':
                                t = t + 1;
                                moment.locale("ar_AL");
                                var wn = moment(resp.data.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                                
                                if (activems == resp.data.code) {
                                    
                                    $("#messagel").prepend('<li style="border-right:blue 3px solid" id="' + t + '" class="post"><div class="post-content"><div class="avatar">                                    <a  href="profile.php$id=' + resp.data.code + '" class="user"><img src="process/' + resp.data.picture + '" class="user-avatar"></a></div><div class="post-body">                                    <div class="post-header p-b-xs"><a href="profile.php$id=' + resp.data.code + '" class="user-display text-primary"><b>' + resp.data.user + '</b></a><span class="mdl-utag"></span><span id="messaged" class="date">' + wn + '</span></div><div class="post-message">' + resp.data.message + '</div></div></div></li>');

                                    $("#" + t).css("background-color", "#ff06");
                                    setTimeout(function () {
                                        $("#" + t).css("background-color", "#ffffff");
                                    }, 2000);
                                    
                                } else {
                                    console.log(activems + " == " + resp.data.code);
                                }
                                Lobibox.notify('info', {
                                    img: 'process/' + resp.data.picture, //path to image
                                    msg: resp.data.message,
                                    delay: 3000,
                                    title: resp.data.user,
                                });

                                $("#notl").prepend('<li class="list-group-item unseen"><a href="notification.php?id=' + resp.data.nid + '" class="overlay"></a><span class="avatar"><img src="process/' + resp.data.picture + '" class="w-40 img-circle"></span>                            <span class="message"><a href="profile.php?' + resp.data.code + '"> ' + resp.data.user + ' </a><span> أرسل لك رسالة  <a> "' + resp.data.message.substring(0, 22) + ' ..."</a>.</span><br><small class="timeago">' + wn + '</small></span></li>')

                                break;

                            case 'fReqSent' || 'fReqAccepted':
                                t = t + 1;
                                moment.locale("ar_AL");
                                var wn = moment(resp.data.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                                
                                
                                Lobibox.notify('success', {
                                    img: 'process/' + resp.data.picture, //path to image
                                    msg: resp.data.text,
                                    delay: 3500,
                                    title: resp.data.user,
                                });

                                $("#notl").prepend('<li class="list-group-item unseen"><a href="notification.php?id=' + resp.data.nid + '" class="overlay"></a><span class="avatar"><img src="process/' + resp.data.picture + '" class="w-40 img-circle"></span>                            <span class="message"><a href="profile.php?' + resp.data.code + '"> ' + resp.data.user + ' </a><span> '+ resp.data.text +' .</span><br><small class="timeago">' + wn + '</small></span></li>')

                                break;
                            
                           default :
                                t = t + 1;
                                moment.locale("ar_AL");
                                var wn = moment(resp.data.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                                
                                
                                Lobibox.notify('success', {
                                    img: 'process/' + resp.data.picture, //path to image
                                    msg: resp.data.text,
                                    delay: 3500,
                                    title: resp.data.user,
                                });

                                $("#notl").prepend('<li class="list-group-item unseen"><a href="notification.php?id=' + resp.data.nid + '" class="overlay"></a><span class="avatar"><img src="process/' + resp.data.picture + '" class="w-40 img-circle"></span>                            <span class="message"><a href="profile.php?' + resp.data.code + '"> ' + resp.data.user + ' </a><span> '+ resp.data.text +' </span><br><small class="timeago">' + wn + '</small></span></li>')

                                break;

                            

                        }

                    } else {

                    }

                    state = resp.state;
                    setTimeout(update, 1500);
                } else {
                    toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
                    setTimeout(getState, 10000);
                }
            },
            error: function (resp) {
                toastr["error"]("المرجو التاكد من اتصالك بالانترنت");
                setTimeout(getState, 10000);
            },

            complete: function (resp) {}
        });
    }
}



function messageread(i) {
    $('#messages').show();
    $('#inbox').hide();
    $('#outbox').hide();
    $("#send").hide();
    
    
    $.ajax({
        url: 'process/process.php',
        type: 'POST',
        data: {
            'mssg': "getmssg",
            "id": i
        },
        success: function (resp) {
            if (resp.mcode == 'getIt') {

                activems = i;
                
                var username = resp.userus;
                var picture = resp.userp;
                var id = resp.userid;
                
                var myname = resp.myname;
                var mypicture = resp.myimg;
                var myid = resp.myid;
                
                if ((resp.messages) == '0') {
                    $("#messagesl").html("<h1 style='text-align:center;margin-top:20px'>لا توجد اي رسائل من " + " " + resp.userus + "</h1>");
                    setTimeout(function () {
                        $('[href="#send"]').tab('show');
                    }, 2000);
                    $("input[name=username]").val(resp.userus);
                    $("#thisbus").attr("onclick", "sendm('" + resp.userid + "')");
                } else {
                    //show messages
                    //messages->0->messagetext (x_messages = msc)
                    $("#thisbus").attr("onclick", "sendm('" + resp.userid + "')");
                    
                    $("#messagel").html('')
                    var mes=resp.all;
                    var x=-1;
                    mes.forEach(element => {
                        x=x+1;
                        
                        const wn = moment(element.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                        var mfrom=element.mfrom;
                     if(mfrom==myid){
                        $("#messagel").append('<li style="border-right: #bab6cc 3px solid" class="post"><div class="post-content"><div class="avatar"><a href="profile.php?id='+myid+'" class="user"><img src="process/'+mypicture+'" class="user-avatar"></a></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" class="user-display text-primary"><b>'+myname+'</b></a><span class="mdl-utag"></span><span id="messaged'+myid+'" class="date">'+wn+'</span><!----><!----></div><div class="post-message">'+element.message+'</div></div></div></li>')
                     }else{
                        $("#messagel").append('<li style="border-right:blue 3px solid" class="post"><div class="post-content"><div class="avatar"><a href="profile.php?id='+id+'" class="user"><img src="process/'+picture+'" class="user-avatar"></a></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+id+'" class="user-display text-primary"><b>'+username+'</b></a><span class="mdl-utag"></span><span id="messaged'+id+'" class="date">'+wn+'</span><!----><!----></div><div class="post-message">'+element.message+'</div></div></div></li>')
                     }  
                    });
                    
                }
            } else if (resp.mcode == 'notLogin') {
                toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
            }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                } else {

            }

        },
        error: function (resp) {
            console.log('error: ' + resp)
        },

        complete: function (resp) {}
    });
}


$("#user").keyup(function () {
    var usr = new String($("#user").val())
    if (usr.length > 2) {
        $("#error").hide()
        $("#names").show();
        $("#listu").html('<li id="finding" style="text-align:center"><i class="el-icon-loading"></i></li>');

        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                "mssg": "searchU",
                "word": usr
            },
            success: function (resp) {
                if (resp.mcode == "false") {
                    if (resp.mcode == 'notLogin') {
                        toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
                    
                    }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                
                    } else {
                        $("#finding").remove();
                        $("#listu").html('<p id="error" style="display:display" class="el-select-dropdown__empty" style="margin: 15px 15px 15px 0px;">أسف، لكن لا يوجد اي مستعمل بهدا الاسم.</p>')
                    }

                } else {

                    $("#finding").remove();
                    $("#listu").html('<li onclick="adduser(`' + resp.username + '`)" id="el-autocomplete-3827-item-2" role="option" class=""><div class="user-result"><div class="list-left"><img src="process/' + resp.picture + '" class="w-40 circle"></div> <div class="list-body"><div class="_600 text-primary">' + resp.username + '</div><small>@' + resp.displayname + '</small></div></div></li>')
                }
            },
            error: function (resp) {
                console.log('error: ' + resp.code)
            },

            complete: function (resp) {}
        });

    }
})

function adduser(u) {
    $("#user").val(u);
    $("#names").hide();
}

var page=0;
function morem(o){

       if (o=='plus'){
        page=page+1;
            if (page<0){
              $("#moremP").hide();
            }else{
              $("#moremP").show();
              $("#numpm").text(page)
              moremc()  
            }  
          
        }else{
            page=page-1;
            if (page<0){
              $("#moremP").hide();
            }else{
              $("#moremP").show();
              $("#numpm").text(page)
              moremc()  
            }         
        } 
    
    function moremc(){
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {"mssg":'mssgmore',"page":page,"id":activems},
            success: function (resp) {
                var mes=resp.data;
                    var x=-1;
                
                $("#messagel").html("");
                var array=resp.data
                if(array.length=='0'){ $("#messagel").append('<h4 class="text-center" style="margin-top: 30px;"> لا يوجد مزيد من الرسائل.  </h4>');$("#moremN").hide()}else{
                    mes.forEach(element => {
                        x=x+1;
                        
                        const wn = moment(element.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                        
                        var mypic = resp.info.myimg;
                         var myname = resp.info.myname;
                         var myid = resp.info.myid;
                         
                         var picture = resp.info.picture;
                         var username = resp.info.username;
                         var id = resp.info.id;
                         
                     if(activems==element.mto){
                        $("#messagel").append('<li style="border-right: #bab6cc 3px solid" class="post"><div class="post-content"><div class="avatar"><a href="profile.php?id='+myid+'" class="user"><img src="process/'+mypic+'" class="user-avatar"></a></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" class="user-display text-primary"><b>'+myname+'</b></a><span class="mdl-utag"></span><span id="messaged'+myid+'" class="date">'+wn+'</span><!----><!----></div><div class="post-message">'+element.message+'</div></div></div></li>')
                     }else{
                        $("#messagel").append('<li style="border-right:blue 3px solid" class="post"><div class="post-content"><div class="avatar"><a href="profile.php?id='+id+'" class="user"><img src="process/'+picture+'" class="user-avatar"></a></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+id+'" class="user-display text-primary"><b>'+username+'</b></a><span class="mdl-utag"></span><span id="messaged'+id+'" class="date">'+wn+'</span><!----><!----></div><div class="post-message">'+element.message+'</div></div></div></li>')
                     }  
                    });
            }
                
            },
            error: function (resp) {
            },

            complete: function (resp) {}
            });
    }
}

function friendreq(id,req,op){
    
    $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {"frn":req,"id":id,"op":op},
            success: function (resp) {
                if (resp.code=='true'){
                    switch (resp.mcode){
                            
                        case 'fReqSent':
                            toastr["success"]("تم إرسال طلب الصداقة بنجاح");
                            $("#env"+id).html('<button onclick="friendreq(`'+id+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0"><i class="fal fa-user-clock"></i><span> طلب مرسل <i class="fa fa-caret-down"></i></span></button>');
                            $("#allenv").css("right","70%"); 
                        break;
                        
                        case 'fReqCanceled':
                            toastr["success"]("تم إلغاء طلب الصداقة بنجاح");
                            $("#env"+id).html('<button onclick="friendreq(`'+id+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0"><span><i class="fa fa-caret-down"></i>إضافة</span> <i class="fal fa-user"></i></button>');
                            $("#allenv").css("right","76%"); 
                        break;
                            
                        case 'fReqUnfriend':
                            toastr["success"]("تم الحذف من قائمة الاصدقاء.");
                            $("#env"+id).html('<button onclick="friendreq(`'+id+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0"><span><i class="fa fa-caret-down"></i>إضافة</span> <i class="fal fa-user"></i></button>');
                            $("#allenv").css("right","76%"); 
                        break;
                            
                        case 'fReqAccepted':
                            toastr["success"]("ثمة الإضافة بنجاح.");
                            $("#env"+id).html('<button onclick="friendreq(`'+id+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0"><span><i class="fa fa-caret-down"></i>صديق</span><i class="fal fa-check"></i></button>');
                            $("#allenv").css("right","76%"); 
                            $("#invref"+id).hide()
                        break;
                            
                        case 'fReqRejected':
                            toastr["success"]("ثمة رفض طلب.");
                            $("#env"+id).html('<button onclick="friendreq(`'+id+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-8072" role="button" tabindex="0"><span><i class="fa fa-caret-down"></i>إضافة</span> <i class="fal fa-user"></i></button>');
                            $("#invref"+id).hide()
                            $("#allenv").css("right","76%"); 
                        break;
                            
                    }
                }else{
                    switch (resp.mcode){
                        case'RSError':
                            toastr["error"]("خطأ في إرسال طلب الصداقة.");
                        break;
                        
                        case'FRCError':
                            toastr["error"]("خطأ في إلغاء طلب الصداقة.");
                        break;
                        
                        case'FRUError':
                            toastr["error"]("خطأ في إلغاء عملية الحذف من قائمة الاصدقاء.");
                        break;
                        
                        case'FRUError':
                            toastr["error"]("خطأ في إلغاء عملية الحذف من قائمة الاصدقاء.");
                        break;
                        
                        case'FRAError':
                            toastr["error"]("خطأ في عملية قبول الصداقة.");
                        break;
                        
                        case'FRJError':
                            toastr["error"]("خطأ في عملية رفض دعوة الصداقة.");
                        break;
                            
                    }
                }
            },
            error: function (resp) {
                console.log('error: ' + resp)
            },

            complete: function (resp) {}
            });
}

function uploadmypic(imgUrl){
        
        if (imgUrl.files && imgUrl.files[0]) {
            
                var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#myimgpic').attr('src', e.target.result);
                }
               
                reader.readAsDataURL(imgUrl.files[0]);

        }
}

var wd;

$("#per_inf").submit(function(e){
    e.preventDefault();
    
    var  data = new FormData(this);
        
    data.append('settings','profile');
        
        
    $.ajax({
        url: 'process/process.php',
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
                toastr["success"]("تم حفظ التغييرات.");
                var newe=$("#per_inf [name='email']").val();
                if(newe==email){
                   
                }else{
                    $("#imv").html('غير مؤكد.');
                    toastr["info"]("لقد تم ارسال رسالة تأكيد لبريدك الالكتروني، المرجوا تأكيده.");
                }

            } else {
                
                $(".el-loading-mask").hide();
                
                switch (resp.mcode){
                    case 'usernameError':
                     toastr["error"]("حدث خطأ في عملية التعديل، المرجوا اختيار اسم مستعمل أخر.");
                    break;
                    case 'emailError':
                     toastr["error"]("حدث خطأ في عملية التعديل، المرجوا اختيار بريد الكتروني أخر.");
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
})


$("#passchange").submit(function(e){
    e.preventDefault();
    
    
    var  data = new FormData(this);
        
    data.append('settings','privacy');
        
        
    $.ajax({
        url: 'process/process.php',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function (resp) {
            $(".el-loading-mask").show()
        },

        success: function (resp) {
            if (resp.code) {
                toastr['success']("تم تغيير كلمة السر بنجاح.");
                $(".el-loading-mask").hide();
                setTimeout(function () {
                    window.location.href = "settings.php";
                    }, 3000);
            } else {
                
                
                    //username_uncorrects
                    if (resp.mcode == "ps_small") {
                        toastr['error']("كلمة المرور قصيرة. يجب ان تتعدى 8 حروف.");
                    } else if (resp.mcode == "ps_invalid") {
                        toastr['error']("كلمة السر يجب ان تحتوي على حروف و ارقام.");
                    } else if (resp.mcode == "valErr") {
                        toastr['error']("تأكيد كلمة السر مختلفة مع كلمة السر.");
                    }
                
                $(".el-loading-mask").hide();
            }
        },

        error: function (resp) {
            $(".el-loading-mask").hide();
            toastr["error"]("حدث خطأ.");

        },
            
        complete: function (resp) {}
    });
})

// function of pagination; actors, ...


function datapaginate(type,page){
    if(type=='fd'){
        page.split('|');
        
        var pagidata={'paginate':type,'page':page[0],'fdtype':page[1]};
    }else{
        var pagidata={'paginate':type,'page':page};
    }
    $.ajax({
        url: 'process/process.php',
        type: 'POST',
        data: pagidata,
        beforeSend: function (resp){
            $("#l"+p+" a").html('<i class="el-icon-loading"></i>');
            $(".feed-wrapper").css('opacity','0.2');
        },
        success: function (resp) {
           if (resp.code=='true'){
               
               switch (pagidata.paginate){
                    case 'actors':
                       if (resp.mcode=='exist'){
                           $("#l"+p+" a").html(p);
                           var data = resp.data;
                           $("#actorsa").html('');

                           data.forEach(element => {
                               var myL;
                               if (element.myL=='true'){
                                   myL='active';
                               }else{
                                   myL='';
                               }
                               var likes=(element.likesn)-1;

                               $("#actorsa").append('<div class="box"><div class="box-body"><div class="row"><div class="col-xs-9 row-cell content"><span id="likedivac'+element.id+'" class="pull-left jbtn-like '+myL+'" data-stats="" data-id="" data-type="people"><span class="like-cntb" onclick="opertion(`ac|like`,`'+element.id+'`)"><i></i><b id="likenumac'+element.id+'">'+likes+'</b></span></span><h6 class="text-primary title"><a href="persone?id='+element.id+'">'+element.fname+' '+element.lname+'</a></h6><div class="text-muted"><span class="spacer">'+element.country+'</span></div><p>'+element.biography+'</p></div><div class="col-xs-3 row-cell cover"><a href="persone?id='+element.id+'"><img style="width:160px;height:200px" class="img-responsive cover" src="process/'+element.picture+'" alt="'+element.fname+' '+element.lname+'"></a></div></div></div></div>');

                            });

                       }else{
                           $("#actorsa").html('<h1 style="text-align:center; margin-top:25px; ">لا يوجد مزيد من الفنانين</h1>')
                       }
                    break;
                       
                   case 'feed':
                       $(".feed-wrapper").css('opacity','1');   
                       //Hide posts->ShowNewOnes [ name->text->owner||not->text->likes->mylike->images->link->post->comments->reply.  ]
                       
//                                To add a post we need to:
//                                        + Spoiler: true || false
//                                        + PostOwner: Mine||notMine
//                                        + PostExist: True||false
                       
                       
                       $(".feeds-list").html('');
                       
                       var feeds=resp.data.pos;
                       
                       feeds.forEach(feedinfo => {
                           if (feedinfo.spoiler=='true'){
                               var spoiler=true;
                           }else{
                               var spoiler=false;
                           }
                           
                           //Variables:
                           
                            var feed_id=feedinfo.id
                            
                            var feed_username=feedinfo.poster[0];
                            var feed_userC=feedinfo.poster[1];
                            var feed_picture=feedinfo.poster[2];
                            var feed_mine=feedinfo.poster[3];
                           
                            
                            
                            var feed_time=feedinfo.wn
                            var feed_privacy=feedinfo.privacy
                            var feed_text=feedinfo.text
                            var feed_likes=feedinfo.prim_info['postL'];
                            var feed_myL=feedinfo.prim_info['myL'];
                            var feed_comments=feedinfo.prim_info['comments'];
                            
                           
                            if (feed_mine){
                                
                                var feed_options='<a data-toggle="dropdown" class="menu"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a class="dropdown-item ">تعديل</a><a onclick="deletefeed(`'+feed_id+'`)" class="dropdown-item ">حذف</a>';
                                
                            }else{
                                if (feedinfo.prim_info['myRe']=='true'){
                                    var feed_options='<a data-toggle="dropdown"  id="menutfd'+feed_id+'"  class=""><i style="color:red" class="fa fa-flag"></i></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  onclick="opertion(`fd|report`,`'+feed_id+'`)" id="menutdivfd'+feed_id+'" class="dropdown-item "> إلغاء الإبلاغ</a>';
                                }else{
                                   var feed_options='<a data-toggle="dropdown"   id="menutfd'+feed_id+'" class="menu"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a onclick="opertion(`fd|report`,`'+feed_id+'`)" id="menutdivfd'+feed_id+'" class="dropdown-item ">إبلاغ</a>'; 
                                }
                                
                                
                            }
                            
                            if (feedinfo.poimages.length=='0'){
                                var feed_images=false;
                            }else{
                                var feed_images=true;
                            }
                           
                            if(feed_privacy=='pub'){
                                var feed_type='public';
                                var feed_wrd='عام';
                                var perst='';
                            }else{
                                var feed_type='friends';
                                var feed_wrd='خاص';
                                var perst='';
                            }
                           
                           if (spoiler){
                               var sp1d='<div id="feedsp'+feed_id+'" onclick="fdspoiler(`'+feed_id+'`,this)" class="feed-spoiler">هذا المنشور يحتوي على حرق.</div>';
                               var sp2d='<div style="display: none;" onclick="fdspoiler(`'+feed_id+'`,this)" id="fd_hde'+feed_id+'"><button class="btn m-t-xs btn-block btn-link">إخفاء المنشور</button></div>';
                    
                           }else{
                               var sp1d='';
                               var sp2d='';
                           }
                            
                            var feed_dt= moment(feed_time, "YYYY-MM-DD hh:mm:ss").fromNow();
                           
                           $(".feeds-list").append('<div id="feed_'+feed_id+'" class="feed_story"><div id="'+feed_id+'" '+perst+' data="'+feed_id+'" class="box"><div class="feed-wrapper"><div id="feedb_'+feed_id+'" class="box-body feed-body"><div class="author-meta" style="display: inline-flex;"><a target="_blank" href="profile.php?id='+feed_userC+'" class="feed_author"><img src="process/'+feed_picture+'" class="w-48 avatar"></a><div class="header" style="margin-right: 10px"><a target="_blank" href="profile.php?id='+feed_userC+'" class="text-primary author-name">'+feed_username+'</a><div class="feed-status"></div><div class="feed-date"><i title="public" class="stream-icon public"></i>'+feed_dt+'</div></div><div class="box-tool" style="right:96%"><div class="options dropdown">'+feed_options+'</div></div></div></div>'+sp1d+'<p id="fd_desc'+feed_id+'" class="feed-desc">'+feed_text+'</p><div id="fd_atta'+feed_id+'" class="feed-attachment posts"></div><div style="display:none" id="medT'+feed_id+'" class="media-tag-item"></div><div style="display:none" id="link'+feed_id+'" class="feed-attachment link"></div>'+sp2d+'<div class="box-social-footer pull-right"><span onclick="opertion(`fd|like`,`'+feed_id+'`)" class="feed-social"><span class="likes-cnt" id="likenumfd'+feed_id+'">'+feed_likes+'</span><button id="likedivfd'+feed_id+'" class="story-like "></button></span><span class="feed-social hmr_10"><a id="liked" class="btn-cmts"></a><span class="cmts-cnt"> '+feed_comments+'</span></span></div><div id="likers'+feed_id+'" class="feed-users-likes"></div></div><div class="feed-comments box-body"><div class="thread-post-form"><div class="post-form-body"><div class="avatar"><img src="process/'+resp.data.myimg+'" class="user-avatar"></div><div class="post-form-textarea"><div class="form-group"><div class="el-textarea"><textarea id="addco'+feed_id+'" autocomplete="off" placeholder="أضف تعليقا..." class="el-textarea__inner" style="min-height: 33px; height: 33px;"></textarea><!----></div></div><div class="text-left post-form-footer"><input type="checkbox" id="spoi'+feed_id+'" aria-hidden="false" class="el-checkbox__original commspoi" value=""><button id="sendc'+feed_id+'" onclick="opertion(`fd|comment`,`'+feed_id+'`)" type="button" class="el-button btn white m-l-sm el-button--default el-button--mini"><!----><!----><span>نشر</span></button><button style="display:none" id="cancel_e'+feed_id+'" onclick="cancel_e(`fd|comment`,`'+feed_id+'`)" type="button" class="el-button btn white m-l-sm el-button--danger el-button--mini pull-right"><!----><!----> <span>إلغاء</span></button><!----></div></div></div></div><ul id="comment-top'+feed_id+'" class="post-list"></ul></div></div></div></div>');
                           
                           if (feedinfo.link.length=='0'){
                              
                           }else{
                               $("#link"+feed_id).html('<div class="attachment-thumbnail" style="background-image: url(&quot;'+feedinfo.link.image_src+'&quot;);"><a rel="nofollow" target="_blank" href="'+feedinfo.link.link+'"></a></div> <div class="attachment-body"><div><a rel="nofollow" target="_blank" href="'+feedinfo.link.link+'" class="text-primary"><b>'+feedinfo.link.title+'</b></a></div> <p>'+feedinfo.link.body+'</p> <div><small class="text-muted">'+feedinfo.link.url+'</small></div></div>');
                               $("#link"+feed_id).show();
                           }
                           var likersnumapp=feedinfo.likers.length-10;
                           if (feedinfo.likers.length==0){
                               
                           }else{
                               var x=0;
                               var textapen=false;
                               feedinfo.likers.forEach(likerinfo => {
                                   x++
                                   if (x>10){
                                        if (!textapen){
                                            $("#likers"+feed_id).append('+'+likersnumapp);
                                            textapen=true;
                                        }
                                        
                                   }else{
                                      $("#likers"+feed_id).append('<a target="_blank" href="profile.php?id='+likerinfo[0]+'" data-meta="'+likerinfo[1]+'" title="'+likerinfo[1]+'" class="w-24 avatar"><img src="process/'+likerinfo[2]+'" width="24"></a>') 
                                   }
                               });
                           }
                           
                           if (feedinfo.title.length=='0'){
                               
                           }else{
                               $("#medT"+feed_id).show()
                               $("#medT"+feed_id).html('<a target="_blank" class="media-tag-cover" href="post?id='+feedinfo.title[0]+'" style="margin-left:15px;"><img src="process/'+feedinfo.title[3]+'" class="img-responsive"></a><div class="media-tag-body">'+feedinfo.title[2]+'<a target="_blank" class="media-tag-title" href="post?id='+feedinfo.title[0]+'">'+feedinfo.title[1]+'</a><div class="media-tag-text"></div></div>')
                           }
                           
                           if (feed_myL=='true'){
                               $("#likedivfd"+feed_id).addClass('active');
                           }
                           if (feed_images){
                               var imgtwo=feedinfo.poimages.length-1;
                               $("#fd_atta"+feed_id).html('<div class="feed-collage collage-'+feedinfo.poimages.length+'"><div id="collage1'+feed_id+'" class="collage-photo"></div><div id="collage2'+feed_id+'" class="collage-photo collage-photo-by-'+imgtwo+'"></div></div>')
                               
                               $("#collage1"+feed_id).html('<img onclick="feedims(`imsgr'+feed_id+'`,this)" style="height:460px" src="process/'+feedinfo.poimages[0]+'" data-vue-img-src="process/'+feedinfo.poimages[0]+'" data-vue-img-group="imsgr'+feed_id+'">');
                               
                               if (feedinfo.poimages.length>1){
                                   var fon=true;
                                   feedinfo.poimages.forEach(element => {
                                       if (fon){
                                           fon=false;
                                       }else{
                                       var height=Math.floor(100/imgtwo);
                                       $("#collage2"+feed_id).append('<img style="height:'+height+'%" onclick="feedims(`imsgr'+feed_id+'`,this)" src="process/'+element+'" data-vue-img-src="process/'+element+'" data-vue-img-group="imsgr'+feed_id+'">');
                                       }
                                   })
                               }
                               
                           }else{
                               
                           }
                                                     
                           if (spoiler){
                               
                               $("#fd_desc"+feed_id+", #fd_atta"+feed_id).hide();
                           }else{
                              
                           }
                           
                           if (feedinfo.comm.length=='0'){
                           }else{
                              feedinfo.comm.forEach(element => {
                                const dt = moment(element.wn, "YYYY-MM-DD hh:mm:ss").fromNow();

                                var id=element.cmi;
                                var username=element.username;
                                var picture=element.picture;
                                var myid=element.code;
                                var likes=element.liken;

                                if (element.spoiler=='true'){
                                var text='<div class="post-message" id="post_message'+id+'"><div><a onclick="spoilerP(`cm`,`'+id+'`)"  id="spdcm'+id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="spcm'+id+'" style="display:none" class="spoiler p-a"><p id="message'+id+'"></p></div></div></div>';
                                }else{
                                var text='<div class="post-message" id="post_message'+id+'"><p id="message'+id+'"></p></div>';                         
                                }

                                if (element.how==element.code){
                                    var option='<div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_c(`fd`,`'+id+'`,`'+element.thisP+'`,`'+element.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_c`,`'+id+'`)">حذف</a> </div>';
                                }else{
                                    if (element.idR=='true'){
                                        var option='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdiv'+id+'" onclick="opertion(`cm|report`,`'+id+'`)" class="dropdown-item story-share">إلغاء التبليغ</a> </div>'; 
                                    }else{
                                        var option='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdiv'+id+'" onclick="opertion(`cm|report`,`'+id+'`)" class="dropdown-item story-share">تبليغ</a> </div>'; 
                                    }                    
                                }
                                    
                                    $("#comment-top"+feedinfo.id).append('<li id="commentid'+id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivcm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"><b id="likenumcm'+id+'">'+(likes)+'</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menut'+id+'" class="menu-toggle"></a>'+option+'</li><li><a  data="'+feed_id+'" class="reply" onclick="addrepfd(`'+id+'`,`'+feed_id+'`)" >رد</a></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+myid+'" target="_blank" class="user-display text-primary in-link"><b>'+username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li><span id="likedivminicm'+id+'" onclick="opertion(`cm|like`,`'+id+'`)" class="btn-like"> <b id="likenumminicm'+id+'" ></b> <i class="like-heart"></i></span></li><li><a  onclick="addrepfd(`'+id+'`,`'+feed_id+'`)" data="'+feed_id+'" class="reply">رد</a></li></ul><!----></div></div><!----><!----></li>')
                                    
                                  
                                    if (element.idR=='true'){
                                    $("#menut"+id).html('<i style="color:red" class="fa fa-flag"></i>');
                                    $("#menut"+id).removeClass('menu-toggle');
                                    $("#menutdiv"+id).html('إلغاء التبليغ');
                                    }else{
                                    }
                            
                               if (element.RepCount>100){
                                   $("#message"+id).html('<span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>')
                               }else{
                                   $("#message"+id).text(element.comment);
                               }
                            
// ---------------------------------------REPLIES------------------------------------
                            
                               if (element.thisT.length=='0'){
                                   
                               }else{
                                   $("#commentid"+id).append('<ul class="children" id="children'+id+'">');
                                   element.thisT.forEach(reply => {
                                       
                                        const dt = moment(reply.wn, "YYYY-MM-DD hh:mm:ss").fromNow();
                                       
                                       var myl='';
                                       if (reply.myl=='true'){
                                           myl='active';
                                       }
                                           
                                       if (reply.spoiler=='true'){
                                            var text='<div class="post-message" id="post_messageR'+reply.id+'"><div><a onclick="spoilerP(`rp`,`'+reply.id+'`)"  id="spdrp'+reply.id+'" class="btn btn-xs btn-spoiler">إظهار التعليق</a><div id="sprp'+reply.id+'" style="display:none" class="spoiler p-a"><p id="Rmessage'+reply.id+'"></p></div></div></div>';
                                       }else{
                                            var text='<div class="post-message" id="post_messageR'+reply.id+'"><p id="Rmessage'+reply.id+'"></p></div>';
                                       }
                                       
                                        if (reply.idU==element.how){
                                            var Roption='<div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share" onclick="upd_r(`'+reply.id+'`,`'+reply.spoiler+'`)">تعديل</a><a  class="dropdown-item story-share" onclick="opertion(`deletec_r`,`'+reply.id+'`)">حذف</a> </div>';
                                        }else{
                                            if (reply.idT=='true'){
                                                var Roption='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdivr'+reply.id+'" onclick="opertion(`rp|report`,`'+reply.id+'`)" class="dropdown-item story-share">إلغاء التبليغ</a> </div>'; 
                                            }else{
                                                var Roption='<div  class="dropdown-menu dropdown-menu-scale pull-right"><a id="menutdivr'+reply.id+'" onclick="opertion(`rp|report`,`'+reply.id+'`)" class="dropdown-item story-share">تبليغ</a> </div>'; 
                                            }                    
                                        }
                                       
                                       $("#children"+id).append('<li id="repid'+reply.id+'" class="post comment"><div class="post-content"><ul class="post-tooltip post-menu hidden-xs-down"><li><span id="likedivrp'+reply.id+'" onclick="opertion(`rp|like`,`'+reply.id+'`)" class="btn-like '+myl+'"><b id="likenumrp'+reply.id+'">'+(reply.likesn)+'</b> <i class="like-heart"></i></span></li><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" id="menutr'+reply.id+'" class="menu-toggle"></a>'+Roption+'</li><li></li></ul><div class="avatar"><span class="user in-link"><img style="height:100%" src="process/'+reply.picture+'" class="user-avatar"></span></div><div class="post-body"><div class="post-header p-b-xs"><a href="profile.php?id='+reply.code+'" target="_blank" class="user-display text-primary in-link"><b>'+reply.username+'</b></a> <span class="mdl-utag"><span class="mdl-btag"><span><span> <span class="date">'+dt+'</span></div>'+text+'</p></div><ul class="post-tooltip post-menu-footer hidden-sm-up"><li class="dropdown"><a  data-toggle="dropdown" rel="nofollow" class="menu-toggle"></a><div class="dropdown-menu dropdown-menu-scale pull-right"><a  class="dropdown-item story-share">Share</a> </div></li><li><span class="btn-like">3 <i class="like-heart"></i></span></li><li><a  class="reply">Reply</a></li></ul><!----></div></div><!----><!----></li>')
                                       
                                       if (reply.idT=='true'){
                                            $("#menutr"+reply.id).html('<i style="color:red" class="fa fa-flag"></i>');
                                            $("#menutr"+reply.id).removeClass('menu-toggle');
                                            $("#menutdivr"+reply.id).html('إلغاء التبليغ');
                                        }else{
                                        }
                                       
                                       $("#Rmessage"+reply.id).text(reply.replie);
                                       
                                       if (element.reported>100){
                                           $("#Rmessage"+reply.id).html('<span style="color:red;border-right:2px solid red;border-left:2px solid red;padding-right:5px ;padding-left:5px">تم حدف التعليق، بسبب التبليغ عنه بشدة.</span>')
                                       }else{
                                             $("#Rmessage"+reply.id).text(reply.replie);
                                       }
                                   })
                               }
                       
                       });
                           }
                       })
                            $('.commspoi').bootstrapToggle({
                                                                off: 'عام',
                                                                on: 'حرق',
                                                                onstyle: 'danger',
                                                                size: 'mini'
                                                            });   
                       
                       
                       $("#l"+p+" a").html(p);
                       
                       
                       $('html,body').animate({
                            scrollTop: 0
                        } ,800);
                   break;
               }
               
               
           }else{
               
           }
        },
        error: function (resp) {
        },

        complete: function (resp) {
            $('html,body').animate({
                            scrollTop: 0
                        } ,800);
        }
    });
     
}

function addrev(id,e){
    
    var rstory=Math.floor(r1);
    var ract=Math.floor(r2);
    var rmusic=Math.floor(r3);
    var rrewatch=Math.floor(r4);
    var average=Math.floor(r5);
    
    var spoil=$("#spoi").prop('checked');
    var rewde=$("#fwat").prop('checked');
    
    var cancelw=$("#fdr").prop('checked');
    var episw=$("#ew").val();
    
    var headl=$("#headl").val();
    var review=$("#revt").val();
    
    if (headl=='' || review=='' || review<3 ){
        switch (''){
            case headl:
                $("#headl").css('border','1px solid red');
                setTimeout(function(){ $("#headl").css('border','1px solid #b3d8ff');},3000);
            break;
            
            case review:
                $("#revt").css('border','1px solid red');
                setTimeout(function(){$("#revt").css('border','1px solid #b3d8ff');},3000);
            break;
        }
    }else{
        $.ajax({
            url: 'process/process.php',
            type: 'POST',
            data: {
                "operation": "addreview",
                "id": id,
                "rstory": rstory,
                "ract": ract,
                "rmusic": rmusic,
                "rrewatch": rrewatch,
                "average": average,
                "spoil": spoil,
                "rewde": rewde,
                "headl": headl,
                "review": review,
                "cancelw": cancelw,
                "episw": episw
            },
            beforeSend: function (resp){
                $(e).html('<i class="fa fa-spin fa-spinner"></i>')
            },
            success: function (resp) {
                if (resp.code == 'true') {
                    $(this).html('<b style="color:green">تمت اضافة</b>')
                    toastr["success"]("تمت الاضافة بنجاح!");
                    setTimeout(function () {
                    window.location.href = "post.php?id="+id;
                    }, 3000);
                } else {
                    toastr["error"]("المرجو التاكد من المعلومات المرسلة.");
                }
            },
            error: function (resp) {
                toastr["error"]("المرجو التاكد من اتصالك بالانترنت,و المعلومات المرسلة.");
            },

            complete: function (resp) {}
        });
    }
    
}

function readmore_r(id,e){
    var opreview=[];
        $("#review_b_"+id).addClass('full-read');        
        const index = opreview.indexOf(id);
        opreview.splice(index, 1);
        $(e).hide()   
}
var helprd;
function helpreview(d,id){
    if (d=='1' || d=='0'){
        helprd=d;
        opertion('reviewd',id);
    }
}

function getTitles(e){
    var key = $(e).val();

    if (key.length<2){$("#titles").hide();}else{
    
    
        $.ajax({
            url: 'process/process_t.php',
            type: 'POST',
            data: {'get':'related','key':key},
            beforeSend: function (resp) {
                $("#icont").attr('class', "el-input__icon el-icon-loading");
                $("#titles").show()
            },
            success: function (resp) {
                
                $("#icont").attr('class', "el-icon-search el-input__icon");
                
                
                    var titles = resp.titles;
                    
                    $("#titles").html('');
                    
                    titles.forEach(element => {
                        if (!(element.id==$("#title").attr('dataid'))){
                            $("#titles").append('<li id="title+'+element.id+'" onclick="addrecol(`'+element.id+'`,`'+element.image+'`,`'+element.title+'`,`'+element.country+'`)" id="el-autocomplete-9844-item-0" role="option" class=""><div class="list-left"><img style="height:61px;width:48px;" src="process/'+element.image+'" class="poster"></div> <div class="list-body"><div class="_600 text-primary">'+element.title+'</div> <small>'+element.country+'<span> - '+element.p_date+'</span></small></div></li>');
                        }
                    })
                    
                
            },
            error: function (resp) {
                $("#titles").hide()
            },

            complete: function (resp) {

            }
        });
    }
}

var recoid='';
var recoid_o='';

function addrecol(id,image,title,country){
        
    if (!($("#title").attr('datatitle')==id)){
        var ctitle=$("#title").attr('datatitle');
        $("#titles").hide();
        $("#title").val(title);
        $("#coveri").html('<a href="post.php?id='+id+'" target="_blank" class="cover"><img src="process/'+image+'" width="120" style="height:100%"></a>')
        $('#rev').html('<label>ما الذي يجعل  <b>'+ctitle+'</b> مشابها ل <b><span>'+title+'</span></b>؟</label>');
        $('#revd').show();
        recoid=id
        recoid_o=$("#title").attr('dataid');
    }
}

function addreco(e){
    var recotext=$("#recotext").val();
    if($("#recotext").val()=='0' || recotext.length<200 || recotext.length>995){
       toastr["info"]("يجب ان يكون سبب الشبه بين العملين من اكثر من 200 حرف و اقل من 1000 حرف.");
    }else{
           opertion('addreco',$("#title").attr('dataid'));
    }
}

function itemtolist(id,idL,tp){
    if(tp=='dr' || tp=='ac'){
        $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: {'list':'addto','id':id,'idL':idL,'tp':tp},
        success: function (resp) {
            if (resp.code == "true") {
                
                if(tp=='ac'){
                   toastr["success"](".تمت إضافة الشخص الى هده الائحة بنجاح.");
                }else{
                   toastr["success"](".تمت إضافة العنوان الى هده الائحة بنجاح.");
                }
                
            } else {
                if (resp.mcode == 'alrExist') {
                    
                    if(tp=='dr'){
                        toastr["info"]("هده اللائحة تحتوي على هذا العمل مسبقا.");
                    }else{
                        toastr["info"]("هده اللائحة تحتوي على هذا الشخص مسبقا.");
                    }
                    
                } else if (resp.mcode == 'typeError') {
                    toastr["info"]("يجب ان تختار لائحة مناسبة لهدا العمل.");
                } else if (resp.mcode == 'notLogin') {
                    toastr["error"]("خطأ، المرجوا تسجيل الدخول اولا.");
                }else if (resp.mcode=='emailVer'){
                   toastr["warning"](".المرجوا تأكيد البريد الالكتروني الخاص بك");
                    toastr.options = {
                    "timeOut": 15000
                    }
                   
                }
            }
        },
        error: function (resp) {
            console.log('error: ' + resp.code)
        },

        complete: function (resp) {}
        });
    }
}


function votelist(id,idL,tp){
    if(tp=='dr' || tp=='ac'){
        $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: {'list':'addvo','id':id,'idL':idL,'tp':tp},
        success: function (resp) {
            if (resp.code == "true") {
                if(resp.mcode=='vote'){
                    toastr["success"](".تم التصويت بنجاح.");
                    $("#vote"+id).css('border-color','#d21818')
                    $("#vote"+id).html('الغاء الصوت');
                    $("#votes"+id).html(resp.score);
                }else{
                    toastr["success"](".تم  الغاء الصوت بنجاح.");
                    $("#vote"+id).css('border-color','#dcdcdc')
                    $("#vote"+id).html('إضافة صوت');
                    $("#votes"+id).html(resp.score);
                }
            } else {
                 toastr["error"]("حدث خطأ ...");
            }
        },
        error: function (resp) {
            toastr["error"]("حدث خطأ ...");
        },

        complete: function (resp) {}
        });
    }
}


function listdelt(id,idL,tp){
    if(tp=='dr' || tp=='ac'){
        $.ajax({
        url: 'process/process_l.php',
        type: 'POST',
        data: {'list':'listdelt','id':id,'idL':idL,'tp':tp},
        success: function (resp) {
            if (resp.code == "true") {
                if(resp.mcode=='vote'){
                }else{
                    toastr["success"](".تم حدف العنوان بنجاح.");
                    $("#mdl-"+id).css('border-color','red')
                    $("#mdl-"+id).animate({
                        opacity:'0px',
                        marginRight: '50px'
                    },750,function (){$("#mdl-"+id).remove()})
               
                }
            } else {
                 toastr["error"]("حدث خطأ ...");
            }
        },
        error: function (resp) {
            toastr["error"]("حدث خطأ ...");
        },

        complete: function (resp) {}
        });
    }
}

function deletereco(id){
        Swal.fire({
          title: 'هل أنت متأكد؟',
          text: "لن يكون بإمكانك استرجاع هدا المنشور.",
          icon: 'warning',
          showCancelButton: true,
          cancelButtonColor: '#d33',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'نعم!',
          cancelButtonText : 'إلغاء'
        }).then((result) => {
          if (result.value) {
              $.ajax({
                url: 'process/process.php',
                type: 'POST',
                data: {'recom':'delete','id':id},

                beforeSend: function (resp) {
                },

                success: function (resp) {
                    if (resp.code == 'true') {
                        toastr["success"]("تم الحذف ، بنجاح.");
                        $("#rec_"+id).animate({
                            opacity: 0,
                            marginRight: '30px'
                        },500,function(){$("#rec_"+id).remove()});
                    } else {                    
                       toastr["error"]("حدث خطأ، ..d");                      
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
function getfriends(e,tp){
    
    var name=$(e).val();
    
    if(name.length<3){
        
    }else{
        $.ajax({
                url: 'process/process.php',
                type: 'POST',
                data: {'frn':'getfr','name':name,'tp':tp},

                beforeSend: function (resp) {
                    $("#loading").html('<i class="el-icon-loading"></i>');
                    $(".el-loading-mask").show();
                },

                success: function (resp) {
                    if (resp.code) {
                        $("#loading").html('<i class="el-icon-search"></i>');
                        $(".el-loading-mask").hide();
                        
                        //show data
                        var friends = resp.data;
                        $("#frdl").html('');
                        friends.forEach(element => {
                                $("#frdl").append('<li class="list-item col-sm-12 col-lg-6 m-b"><span class="pull-right m-r"><a href="profile.php?id='+element.code+'"><img style="heigt:64px; height:64px" src="process/'+element.picture+'" class="img-responsive rounded"></a></span><div class="p-a-0">                                                            <div class="pull-left m-r">                                                                <div data-username="" class="friend-edge " style="display: inline-flex;">                                                      <div class="el-dropdown" id="env'+element.code+'">                                                                        <button onclick="friendreq(`'+element.code+'`,`friendreq`,``)" type="button" class="el-button el-button--default el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-9247" role="button" tabindex="0">                                                                            <span>                                                                                <i class="fa fa-caret-down"></i>حذف</span>                                                                            <i class="fal fa-times"></i>                                                                        </button>                                                                        <ul class="el-dropdown-menu el-popper" style="display: none;" id="dropdown-menu-9247">                                                                            <li tabindex="-1" class="el-dropdown-menu__item"><span>حظر</span></li>                                                                        </ul>                                                                    </div>                                                              </div>                                                            </div> <a href="profile.php?id='+element.code+'" class="text-primary"><b>'+element.username+'</b></a></div></li>');
                        })
                        
                    } else {                    
                       toastr["error"]("حدث خطأ، ");       
                        $("#loading").html('<i class="el-icon-search"></i>');
                        $(".el-loading-mask").hide();
                    }
                },

                error: function (resp) {
                    $(".el-loading-mask").hide();
                    $("#loading").html('<i class="el-icon-search"></i>');
                    toastr["error"]("حدث خطأ.");
                },

                complete: function (resp) {}
            });
    }
    
}