$('body').on('click', '.delete', function(){
    var res = confirm('Подтвердите удаление');
    if(!res) return false;
});



$(document).on('click', '.del_img', function() {
    $(this).closest('.file-upload').find('.overlay').css({'display':'block'});
    $(this).fadeOut();
    $(this).closest('.file-upload').find('.overlay').css({'display':'none'});
    var $this = $(this),

        src = $this.data('src');
    console.log(src);
    $.ajax({
        url: adminpath + '/product/delete-gallery',
        data: {src: src,
               upload: 1  },
        type: 'POST',
        beforeSend: function(){
            $this.closest('.file-upload').find('.overlay').css({'display':'block'});
        },
        success: function(res){
            console.log(res);
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                if(res == 1){
                    $this.fadeOut();
                }
            }, 1000);
        },
        error: function(){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                alert('Ошибка');
            }, 1000);
        }
    });
});

$(document).on('click', '.del-item', function(){
    var res = confirm('Удалить изображение?');
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminpath + '/product/delete-gallery',
        data: {id: id, src: src},
        type: 'POST',
        beforeSend: function(){
            $this.closest('.file-upload').find('.overlay').css({'display':'block'});
        },
        success: function(res){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                if(res == 1){
                    $this.fadeOut();
                }
            }, 1000);
        },
        error: function(){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                alert('Ошибка');
            }, 1000);
        }
    });
});

$('.sidebar-menu a').each(function(){
    var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if(link == location){
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }
});

// CKEDITOR.replace('editor1');
$( '#editor1' ).ckeditor();
$( '#editor2' ).ckeditor();
$('#reset-filter').click(function(){
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});

$(".select2").select2({
    placeholder: "Начните вводить наименование товара",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});
$(".select3").select2({
    placeholder: "Введите нужный атрибут",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/detail-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});


if($('div').is('#single')){
    var buttonSingle = $("#single"),
        buttonMulti = $("#multi"),
        buttonSlider = $('#slider'),
        file;
}

if(buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img  data-src = (' + response.file + ') src="/images/' + response.file + '" style="max-height: 150px;" class="d del-item" >');
            }, 1000);
        }
    });
}

if(buttonMulti){
    new AjaxUpload(buttonMulti, {
        action: adminpath + buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonMulti.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append('<img  data-src = ' + response.file +'  src="/images/' + response.file + '" style="max-height: 150px;" class="del_img" > ');
            }, 1000);
        }
    });
}
if(buttonSlider){
    new AjaxUpload(buttonSlider, {
        action: adminpath + buttonSlider.data('url') + "?upload=1",
        data: {name: buttonSlider.data('name')},
        name: buttonSlider.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSlider.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSlider.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonSlider.data('name')).html('<img  data-src = (' + response.file + ') src="/images/' + response.file + '" style="max-height: 150px;" class=" del-item" >');
            }, 1000);
        }
    });
}

$('#add').on('submit', function(){
    if(!isNumeric( $('#category_id').val() )){
        alert('Выберите категорию');
        return false;
    }
});

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
$('#add').on('submit', function(){
    if(!isNumeric( $('#brand_id').val() )){
        alert('Выберите бренд');
        return false;
    }
});





$(document).ready(function () {
    $(".add_attr").on('click',function () {

        $('.attr_block').append("  <div class=\"row\">\n" +
            "                            <div class=\"form-group col-md-6  \">\n" +
            "\n" +
            "                                <label for=\"detail\">Атрибут</label>\n" +
            "                                <select name=\"detail[]\" class=\"form-control select3\"></select>\n" +
            "                            </div>\n" +
            "                            <div class=\"form-group col-md-5 \">\n" +
            "                                <label>Значение</label>\n" +
            "                                <input type=\"text\" name=\"detail_attrs[]\" class=\"form-control\" placeholder=\"Введите значение ...\" autocomplete=\"off\" style=\"background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto; \" required>\n" +
            "                                <span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>\n" +
            "                            </div>\n" +
            "                            <div class=\"form-group col-md-1  \">\n" +
            "                                <label for=\"detail\"></label>\n" +
            "                                <button type=\"button\" class=\"btn btn-block btn-danger delete-attr delete\">удалить</button>\n" +
            "                            </div>\n" +
            "                            </div>");
        $('.select3').select2({placeholder: "Введите нужный атрибут",
            //minimumInputLength: 2,
            cache: true,
            ajax: {
                url: adminpath + "/product/detail-product",
                delay: 250,
                dataType: 'json',
                data: function (params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    return {
                        results: data.items
                    };
                }
            }});
    })

});
$('body').on('click', '.delete-attr', function() {
    console.log(this);
    $(this).closest('.row').fadeOut(300).remove();

});
