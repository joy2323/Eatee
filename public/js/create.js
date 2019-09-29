$(document).ready(function () {
    // the body of this function is in assets/js/now-ui-kit.js
    //nowuiKit.initSliders();

    $('#signin-form').submit(function (event) {
        event.preventDefault();
        $.request({
            data: $(this).serialize(),
            before: $.HttpRequestInit('#submit-btn'),
            complete: $.HttpRequestDone(),
            '200': function (e) { redirect.to("overview")},
            error: function (e) { alert(e) }
        });
    });
});

function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

// for (var i = 0; i < 75; i++) {
//     var width = getRandomSize(200, 400);
//     var height = getRandomSize(200, 400);
//     console.log('//www.lorempixel.com/' + width + '/' + height + '/cats')
//     //$('#wall').append('<img src="http://via.placeholder.com/'+ width + 'x' + height + '">');
//     $('#wall').append('<img src="http://www.lorempixel.com/' + width + '/' + height + '/food">');

// }