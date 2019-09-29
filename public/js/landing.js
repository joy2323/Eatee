$(document).ready(function () {
    // the body of this function is in assets/js/now-ui-kit.js
    nowuiKit.initSliders();
    
    
});

var duration = $('#navbarDropdownMenuLink1');
var budget = $("input[name=budget]");
var phone = $("input[name=phone]")
var timestamp ;
if(param('utm_source') == 'overview_source'){
        scrollToForm()
    }
function scrollToForm() {

    if ($('#form-table').length != 0) {
        $("html, body").animate({
            scrollTop: $('#form-table').offset().top
        }, 1000);
    }
}

function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

function DisableSpecificDates(date) {
    var today = new Date();
    today.setDate(today.getDate());

    // Now check if the current date is in disabled dates array.
    if (date <= today) {
        return false;
    }
}


$('.date-picker').each(function () {
    $(this).datepicker({
        format: 'dd M yyyy',
        todayHighlight: true,
        beforeShowDay: DisableSpecificDates,
        templates: {
            leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
            rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
        }
    }).on('show', function () {
        $('.datepicker').addClass('open');
        datepicker_color = $(this).data('datepicker-color');
        if (datepicker_color.length != 0) {
            $('.datepicker').addClass('datepicker-' + datepicker_color + '');
        }
    }).on('hide', function () {
        $(this).removeClass('open');
    }).on('changeDate' , function(e){
        $(this).datepicker('hide');
        $(this).removeClass('open');
        timestamp = e.timeStamp
    })
});

$(document).on('click' , '.dropdown-item' , function(e){
    e.preventDefault();
    duration.attr('data-value' , $(this).data('value'))

    duration.html($(this).html())
    
})

$('#subscribe').submit(function(event){
    event.preventDefault();
    $.request({
        data: {action: 'subscribe' , email: $('input[name=subscribe_email').val()},
        before: $.HttpRequestInit($('#subscribe-btn')),
        complete: $.HttpRequestDone(),
        '200': function (e) { alert(e)},
        error: function(e){ alert(e)}
    })
})

$(document).on('submit' , '#form-table' , function(e){
    e.preventDefault()
    if(duration.attr('data-value') == 0){
        console.log('Invalid Date Selected')
        return 0;
    }
    if(isNaN(budget.val() )){
        console.log('Budget must contain Numbers only')
        return 0;
    }

    if(isNaN(phone.val() )){
        console.log('Phone must contain Numbers only')
        return 0;
    }

    redirect.withParams('food-table?' , {
        p: btoa(phone.val()),
        d: btoa(duration.attr('data-value')),
        t:  btoa(timestamp),
        b: btoa(budget.val()),
//         <?php echo isset($_SESSION['logged_id']) ? "cid: " . base64_encode($_SESSION['logged_in']) : false; ?>
//     });
});

var redirect = {
    to: function(url){
        window.location.href(url)   
    },
    withParams: function(url , params){
        console.log(url + encodeObj(params))
        console.log(window.location)
        var clean_uri = location.protocol + "//" + location.host + location.pathname;
        window.location.href =  clean_uri  + url + encodeObj(params) 
    },

}

var encodeObj = function (obj) {
    var encoded = [];
    for (var p in obj) {
        encoded.push(encodeURIComponent(p) + "="+ encodeURIComponent(obj[p]));
    }
        encoded = encoded.join("&");
    return encoded;
}
