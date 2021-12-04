$('.hotel_location').keyup(function (){
    var data = $(this).val();
    if (data.length>1)
    {
        $.ajax({
            url: '/hotel-search',         /* Куда пойдет запрос */
            method: 'get',             /* Метод передачи (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: {data: data},     /* Параметры передаваемые в запросе. */
            success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
                $('.search_item').remove();
                $('.search-form').show();
               $('.search-form').append(data);
                console.log(data);            /* В переменной data содержится ответ от index.php. */
            }
        });
    }

})

$('body').on('click', '.search_item', function() {
    $('.hotel_location').val($(this).attr('search-name'));
    $('input[name=search_id]').val($(this).attr('search-id'));
    $('input[name=search_type]').val($(this).attr('search-type'));
    $('.search-form').hide();
})

$('.search_add').click(function (){
    var dest_id = $(this).attr('dest_id');
    var dest_type = $(this).attr('dest_type');
    var last_page = $(this).attr('last_page');
    var date_start = $(this).attr('date_start');
    var date_end = $(this).attr('date_end');
    var order = $(this).attr('order');
    $('.bravo-pagination .spinner-border').show();
    $('.search_add').hide();
    $.ajax({
        url: '/hotel-paginate',         /* Куда пойдет запрос */
        method: 'get',             /* Метод передачи (post или get) */
        dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
        data: {dest_id: dest_id,dest_type:dest_type,last_page:last_page,date_start:date_start,date_end:date_end,order:order},     /* Параметры передаваемые в запросе. */
        success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
            $('.bravo-pagination .spinner-border').hide();
            $('.search_add').show();

            $('.hotel_add').append(data);
            var last_page =  $('.search_add').attr('last_page') + 1;
            var max_page = $('.search_add').attr('max_page');
            $('.search_add').attr('last_page',last_page);

            if(max_page == last_page)
                $('.bravo-pagination').hide();

        }
    });
})

$(document).ready(function (){
    var dest_id = $('.search_add').attr('dest_id');
    var dest_type = $('.search_add').attr('dest_type');
    var last_page = $('.search_add').attr('last_page');
    var date_start = $('.search_add').attr('date_start');
    var date_end = $('.search_add').attr('date_end');
    var order = $('.search_add').attr('order');
    $('.bravo-pagination .spinner-border').show();
    $('.search_add').hide();

    $.ajax({
        url: '/hotel-paginate',         /* Куда пойдет запрос */
        method: 'get',             /* Метод передачи (post или get) */
        dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
        data: {dest_id: dest_id,dest_type:dest_type,last_page:last_page,date_start:date_start,date_end:date_end,order:order},     /* Параметры передаваемые в запросе. */
        success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
            $('.bravo-pagination .spinner-border').hide();
            $('.search_add').show();

            $('.hotel_add').append(data);
            var last_page =  parseInt($('.search_add').attr('last_page')) + 1;
            var max_page = $('.search_add').attr('max_page');
            $('.search_add').attr('last_page',last_page);
            if(max_page == last_page)
                $('.bravo-pagination').hide();

        }
    });

})
// $('.btn-search').click(function (){
//
//     $("body").hide();
//     $("html").append("<div><img style='display:block;margin: 0 auto; margin-top: 30vh;' src='/images/ring.gif' alt=''></div>");
// })


