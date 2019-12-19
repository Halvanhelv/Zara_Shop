


/* Filters */
$('body').on('change', '.w_sidebar input', function() {
    let originalVal = $('.price-slider').data('slider').getValue().join(",")
    console.log($('.price-slider').data('slider').getValue().join(","));

    var checked = $('.w_sidebar input:checked'),

        data = '';
    checked.each(function() {
        data += this.value + ',';

    });

    if (data || originalVal ) {
        $.ajax({
            url: location.href,
            data: {
                filter: data,
                price: originalVal,
            },
            type: 'GET',
            beforeSend: function() {
                $('.preloader').fadeIn(300, function() {
                    $('.product-one').hide();
                });
            },
            success: function(res) {

                $('.preloader').delay(500).fadeOut('slow', function() {
                    $('.product-one').html(res).fadeIn();
                    var url = location.search.replace(/filter(.+?)(&|$)price(.+?)(&|$)/g, ''); //$2
                    console.log(url);
 //одно регулярное выражение для двоих знначений

                    var newURL = location.pathname + url  + (location.search ? "&" : "?") + "filter=" + data + "&"   + "price=" + originalVal;

                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');

                    history.pushState({}, '', newURL);
                });
            },
            error: function() {
                alert('Ошибка!');
            }
        });
    } else {
        window.location = location.pathname;
    }
});


/*Cart*/
$('body').on('click', '.add-to-cart-link', function(e) {
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.available select').val();
    $.ajax({
        url: '/cart/add',
        data: {
            id: id,
            qty: qty,
            mod: mod
        },
        type: 'GET',
        success: function(res) {
            showCart(res);

        },
        error: function() {
            alert('Ошибка! Попробуйте позже');
        }
    });
});

$('#main_cart .dropdown-menu').on('click', '.del-item', function() {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {
            id: id
        },
        type: 'GET',
        success: function(res) {
            showCart(res);
        },
        error: function() {
            alert('Error!');
        }
    });
});

function showCart(cart) {

    $('#main_cart .dropdown-menu').html(cart);


    if ($('.total_sum').text()) {
        $('.total_count').html($('.top-cart-row .total_sum').text());
        $('.total_ajax_price').html($('.top-cart-row .total_sum').text());
        $('.tabled-data .total_ajax_price').html($('.top-cart-row .total_sum').text());

    } else {
        $('.total_count').text('Пусто');
        $('#cart-page').remove().fadeOut(100);
        if(!$('.cart_view').siblings('.empty_cart').length > 0 && $(".cart_view").length)
        {
            console.log(!$('.cart_view').children('.empty_cart').length > 0 );

            $('.empty_cart').insertAfter($(".cart_view"));
            $(".empty_cart").css(
                {'display': 'block'}
            ).fadeIn(200);

        }


    }
    if ($('.total_qty').text()) {
        $('.count').html($('.top-cart-row .total_qty').text());
    } else {
        $('.count').text('0');
    }
}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function(res) {
            showCart(res);
        },
        error: function() {
            alert('Ошибка! Попробуйте позже');
        }
    });
}

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function(res) {
            showCart(res);
        },
        error: function() {
            alert('Ошибка! Попробуйте позже');
        }
    });
}
/*Cart*/

$('#currency').change(function() {
    window.location = 'currency/change?curr=' + $(this).val();
});

$('.available select').on('change', function() {
    var modId = $(this).val(),
        color = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price'),
        basePrice = $('#base-price').data('base');
    if (price) {
        $('#base-price').text(symboleLeft + price + symboleRight);
    } else {
        $('#base-price').text(symboleLeft + basePrice + symboleRight);
    }
});


$(function() {

    $('#forgot-link').click(function() {
        $('#login').fadeOut(300, function() {
            $('#forgot').fadeIn();
        });
        return false;
    });

    $('#auth-link').click(function() {
        $('#forgot').fadeOut(300, function() {
            $('#login').fadeIn();
        });
        return false;
    });

});



$('body').on('click', '.cart_reload .le-quantity', function() {
    // var id =   $('.le-quantity input').attr('id'),
    var id = $(this).find('input').attr('id'),
        qty = $(this).find('input').attr('value') ? $(this).find('input').attr('value') : 1;
    if (qty < 1) {
        qty = 1;
    }
    $.ajax({
        url: '/cart/rec',
        data: {
            id: id,
            qty: qty
        },
        type: 'GET',
        success: function(res) {
            showCart(res);

        },
        error: function() {
            alert('Ошибка! Попробуйте позже');
        }
    });
});




$('body').on('click', '.del-item1 ', function(e) {
    e.preventDefault();


    var id = $(this).data('id');
    var total = this;
    $.ajax({
        url: '/cart/delete',
        data: {
            id: id
        },
        type: 'GET',
        success: function(res) {
            showCart(res);
            $(total).parents(".del-items").fadeOut(300);





        },
        error: function() {
            alert('Error!');
        }
    });



});
