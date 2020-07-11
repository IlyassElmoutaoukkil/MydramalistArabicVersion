// yayaaaaaaaaa

//Created By Ilyass Elmoutaoukkil with all LOVE <3

var content = '';
var title = '';
var type = '';
var ones = false;

function fs_list(element, key, e) {
    switch (element) {
        case 'content':
            content = key;
            $(".content").removeClass('selected');
            $(e).addClass('selected')
            break;

        case 'titleo':
            title = $(e).val();
            break;

        case 'type':
            type = key;
            $(".type").removeClass('selected');
            $(e).addClass('selected')
            break;

    }

    ones = ((content == 'title' || content == 'persone') && (title != '' && title.length > 3 && title.length < 65) && (type == 'vote' || type == 'public' || type == 'private'));

    if ((content == 'title' || content == 'persone') && (title != '' && title.length > 3 && title.length < 65) && (type == 'vote' || type == 'public' || type == 'private')) {

        $("#fs_done").removeClass('is-disabled');
        $("#fs_done").removeAttr('disabled');
    } else {
        $("#fs_done").addClass('is-disabled');
        $("#fs_done").attr('disabled', 'disabled');
    }


}

function nextS() {
    if (ones) {
        $("#spageT").text(title);
        $("#spageTI").val(title);

        switch (type) {

            case 'vote':
                $("#listT_vo").attr('selected', 'selected')
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").removeClass('fa-eye')
                $(".eye").addClass('fa-eye')
                break;

            case 'public':
                $("#listT_pub").attr('selected', 'selected')
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").removeClass('fa-eye')
                $(".eye").addClass('fa-eye')
                break;

            case 'private':
                $("#listT_pra").attr('selected', 'selected')
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").removeClass('fa-eye')
                $(".eye").addClass('fa-eye-slash')
                break;
        }

        switch (content) {

            case 'title':
                $("#contentL").attr("value", 'عناوين')
                $("#search").attr('placeholder', 'بحث عن عناوين لإضافتها الى اللائحة')
                break;

            case 'persone':
                $("#contentL").attr("value", 'أشخاص')
                $("#search").attr('placeholder', 'بحث عن أشخاص لإضافتهم الى اللائحة')
                break;
        }



        $("#fa").hide();
        $("#la").show();
    }
}


function typech(e) {
    var valt = $(e).val();

    if (valt == 'vote' || valt == 'private' || valt == 'public') {
        type = valt;
        switch (type) {
            case 'vote':
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").removeClass('fa-eye')
                $(".eye").addClass('fa-eye')
                break;

            case 'public':
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").removeClass('fa-eye')
                $(".eye").addClass('fa-eye')
                break;

            case 'private':
                $(".eye").removeClass('fa-eye')
                $(".eye").removeClass('fa-eye-slash')
                $(".eye").addClass('fa-eye-slash')
                break;
        }
    }
}

function gettorp(e) {
    var key = $(e).val()
    if (key.length > 3) {
        $("#searchdiv").show()
        if (content == 'persone') {
            getdata('get', key);
        } else {
            getdata('get', key);
        }
    } else {
        $("#searchdiv").hide()
    }
}

function getdata(op, da) {

    switch (op) {
        case 'get':
            if (content == 'title') {
                var data = {
                    'get': 'related',
                    'key': da
                };
                var url = 'process/process_t.php'
            } else {
                var data = {
                    'get': 'work',
                    'key': da
                };
                var url = 'process/process_t.php'
            }

            break;

        case 'send':
            data = da;
            var url = 'process/process_l.php';
            break;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (resp) {
            if (resp.code == "true") {
                switch (op) {
                    case 'get':

                        var titles = resp.titles;

                        $("#searchdiv").html('');

                        if (data.get == 'work') {
                            titles.forEach(element => {
                                $("#searchdiv").append('<li id="e' + element.id + '" onclick="addtoClist(`' + element.id + '`,`' + element.picture + '`,`' + element.fname + '`,`' + element.lname + '`,`' + element.country + '`)" id="el-autocomplete-2388-item-1" role="option" class=""><div class="list-left"><img style="height:48px;width:48px;" src="process/' + element.picture + '" class="w-40 circle"></div> <div class="list-body"><div class="_600 text-primary">' + element.fname + ' ' + element.lname + '</div> <small>' + element.country + ', ' + element.dayb + '</small></div></li>');
                            })
                        }
                        if (data.get == 'related') {
                            titles.forEach(element => {
                                $("#searchdiv").append('<li id="e' + element.id + '" onclick="addtoClist(`' + element.id + '`,`' + element.image + '`,`' + element.title + '`,`' + element.rate + '`,`' + element.country + '`)" id="el-autocomplete-9844-item-0" role="option" class=""><div class="list-left"><img style="height:61px;width:48px;" src="process/' + element.image + '" class="poster"></div> <div class="list-body"><div class="_600 text-primary">' + element.title + '</div> <small>' + element.country + '<span> - ' + element.p_date + '</span></small></div></li>');
                            })
                        }
                        break;

                    case 'send':
                        if (resp.code=='true'){
                                   toastr["success"]("تم تسجيل اللائحة الجديدة بنجاح.");
                                   setTimeout(function(){window.location.href = "lists.php"},1800);
                        }else{
                            if (resp.mcode=='alrExist'){
                                     toastr["danger"]("العنوان الذي اخترته، قد قمت بتسجيله سابقا.");
                            }
                            
                            if (resp.mcode=='desclong'){
                                     toastr["error"]("الوصف الدي ادخلته يجب الا يتعدى اكثر من 580 كلمة.");
                            }
                        }
                    break;
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

var elements = [];
var x = 0

function addtoClist(id, picture, fname, lname, country) {
    //persone | title
    //----------------
    //picture-> image
    //fname  -> title
    //lname  -> country
    //country-> rate

    if (elements.some(e => e.id == id)) {

        $("#el" + id).animate({
            opacity: '0.5',
        }, 1000, function () {
            $("#el" + id).css('background-color', '#e36969b5');
            $("#a" + id).css('color', '#ffffff')
        })

        $("#el" + id).animate({
            opacity: '1',
        }, 5000, function () {
            $("#el" + id).css('background-color', 'white');
            $("#a" + id).css('color', '#7fc05c')
        })

    } else {
        if (elements.length == '0') {
            $("#searchdiv").html('');
        }
        elements.push({
            id: id,
            comment: ""
        });
        x = x + 1;
        if (content == 'title') {
            $("#finalCli").append('<li id="el' + id + '" class="list-group-item item"><div class="list-left"> <span id="lo' + x + '"  class="list-order">' + x + '</span></div> <div class="list-cover"><img style="height:70px;" src="process/' + picture + '" class="img-responsive"></div> <div class="list-details"><div class="list-tools pull-left"><div class="list-order-input"><span></span></div> <button onclick="addcommto(`' + id + '`,`' + fname + '`)" type="button" class="el-button btn btn-xs btn-reason white el-button--default el-button--mini"><!----><!----><span><i class="far fa-pencil"></i> <span>أضف تعليقا</span></span></button> <button onclick="deleteitem(`' + id + '`)" type="button" class="el-button btn btn-xs white btn-delete el-button--default el-button--mini"><!----><!----><span><i class="far fa-trash"></i></span></button></div> <a href="post.php?id=' + id + '" target="_blank" class="title text-primary">' + fname + '</a> <div>' + country + '</div> <!----></div></li>');
        } else {
            $("#finalCli").append('<li id="el' + id + '" class="list-group-item item"><div class="list-left"> <span id="lo' + x + '" class="list-order">' + x + '</span></div> <div class="list-cover"><img style="height:70px;" src="process/' + picture + '" class="img-responsive"></div> <div class="list-details"><div class="list-tools pull-left"><div class="list-order-input"><span></span></div> <button onclick="addcommto(`' + id + '`,`' + fname + '`)" type="button" class="el-button btn btn-xs btn-reason white el-button--default el-button--mini"><!----><!----><span><i class="far fa-pencil"></i> <span>أضف تعليقا</span></span></button> <button onclick="deleteitem(`' + id + '`)" type="button" class="el-button btn btn-xs white btn-delete el-button--default el-button--mini"><!----><!----><span><i class="far fa-trash"></i></span></button></div> <a href="persone.php?id=' + id + '" target="_blank" class="title text-primary">' + fname + ' ' + lname + '</a> <div>' + country + '</div> <!----></div></li>');
        }


        $("#e" + id).hide();
    }

}




function addcommto(id, name) {
    if (elements.some(e => e.id == id)) {

        $("#comm_h_t").html('أضف تعليقا ل <b>' + name + '</b>')
        $("#donecommB").attr('data', id)
        $("#add_comD").modal('show');
    } else {

    }
}

function donecomment(e) {
    var id = $(e).attr('data');
    if (elements.some(k => k.id == id)) {
        elements.forEach(element => {
            if (element.id == id) {
                element.comment = $('#summernote2').val();
            }
        })
    } else {}
    
    $("#add_comD").modal('hide');
}

function deleteitem(id) {
    var index = -1;
    var k;
    if (elements.some(k => k.id == id)) {
        elements.forEach(element => {
            index = index + 1;
            if (element.id == id) {
                k = index;
            }
        })
    } else {}
    elements.splice(k, 1);
    $("#el" + id).animate({
        opacity: 0,
        marginRight: '100px'
    }, 400, function () {
        $("#el" + id).remove();
    })

    setTimeout(function () {
        var reorderli = $("#finalCli li").length;
        var x = 0;
        while (x < reorderli) {
            x++;
            var el = $("#finalCli li:nth-of-type(" + x + ") .list-order").text(x);
        }
    }, 500)

}


function listcreate(e) {
    
    var descr = $(".sum").val()


    if (
        (type == 'private' || type == 'public' || type == 'vote') &&
        (content == 'title' || content == 'persone') &&
        (title.length > 3 || title.length < 65) &&
        (Array.isArray(elements))
    ) {
        var el=JSON.stringify(elements)
        var data = {
            'list': 'create',
            'type': type,
            'content': content,
            'title': title,
            'elements': el,
            'desc': descr
        };
        getdata('send', data);
    } else {
        toastr["error"]("المرجوا ملأ الحقول المطلوبة، و التأكد من كون كل الشروط محترمة.");
    }
}

function titlechange(e){
    var nt=$(e).val();
    if(nt.length<3 || nt.length>65){
        toastr["error"]("يجب ان يكون عدد حروف الاسم اقل من 65 حرف، و أكثر عن 3 حروف");
        $(e).val(title);
    }else{
        title=nt;
    }
}
