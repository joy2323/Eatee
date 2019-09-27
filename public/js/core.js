var route = `${window.location.protocol}//${window.location.hostname}/food-app/app/routes`;

    (function ($) {
        var btnText = ''
        var btnInit = ''

        $.request = function (options) {
            var params = $.extend({
                url: route,
                data: {},
                headers: {},
                before: function () { console.log('Requesting...') },
                complete: function () { console.log('XHR Complete...') },
                '200': function () { console.log('XHR 200..') },
                '405': function () { console.log('XHR 405...') },
                '500': function () { console.log('XHR 500...') },
                '409': function () { console.log('XHR 409...') },
                error: function (e) { console.log('XHR Error...' , e) }
            }, options)

            $.ajax({
                url: params.url,
                method: 'POST',
                data: params.data,
                headers: params.headers,
                beforeSend: function () { typeof params.before == 'function' ? params.before() : params.before },
                cache: false,
                success: function (e) {
                    try {
                        var XHR = JSON.parse(e)
                        if (XHR.response == 200) { params['200'](XHR.message , XHR.data) }
                        else { (params.error(XHR.message)) }
                    } catch (e1) {
                        console.log(e1)
                        console.log(e)
                    }
                },
                error: function (e, xhr, status) {
                    console.log(e.responseText)
                    console.log(xhr)
                    console.log(status)
                }
            }).done(function () { $.HttpRequestDone(true) /*  params.complete() */ })
        };

        $.track = function(options) {
            options.action = 'track';

            $.ajax({
                url: route,
                method: 'POST',
                data: options,
                cache: false,
                success: function (e) {
                    try {
                        var XHR = JSON.parse(e)
                        if (XHR.response == 200) { console.log(XHR.message) }
                        else { console.log(XHR.message) }
        
                    } catch (e1) {
                        console.log(e1)
                        console.log(e)
                    }
                },
                error: function (e, xhr, status) {
                    console.log(e.responseText)
                    console.log(xhr)
                    console.log(status)
                }
            })
        };

        $.HttpStatus = function (code) {
            switch (code) {
                case 405:
                    break;
                case 500:
                    break;
                case 400:
                    break;
                case 404:
                    break;
                case 409:
                    break;
            }
        };

        $.HttpRequestInit = function (button) {
            btnText = $(button).html()
            btnInit = button

            $(button).html('<i class="fa fa-spinner fa-pulse"></i>')
            $(button).attr('disabled', 'disabled')
            $(button).addClass('disabled');
        };

        $.HttpRequestDone = function (activate) {
            activate = typeof activate !== 'undefined' ? activate : false;
            if (activate) {
                $(btnInit).html(btnText)
                $(btnInit).removeAttr('disabled', 'disabled')
                $(btnInit).removeClass('disabled');
            }
        };

        $.fn.transform = function (options) {
            var settings = $.extend({
                type: "text",
                animate: "none",
                text: "Success",
                src: 'none.jpg'
            }, options)

            this.html('');
            settings.type == "text"
                ? this.html(settings.text)
                : false;
            settings.type == "image"
                ? this.html(`<img src=${settings.src} />`)
                : false;
        };
    }(jQuery));

function param(name) {
    return (location.search.split(name + '=')[1] || '').split('&')[0];
}

var redirect = {
    to: function(url){
        window.location.href = url 
    },
    withParams: function(url , params){
        console.log(url + encodeObj(params))
        console.log(window.location)
        window.open(window.location.href  + url + encodeObj(params) , "_blank")
    },

}

function payWithPaystack(obj){
    console.log(obj.trans_amount);
    var trans_amount = obj.trans_amount;
    var user_email = obj.user_email;
    var msisdn = obj.msisdn;
    var redirect = obj.redirect;
    var unique_reference = obj.unique_reference;
    var handler = PaystackPop.setup({
    key: 'pk_test_fac8c640963faf09127ea23a98da8ec9c6e0f191',
    email: user_email,
    amount: trans_amount * 100,
    ref: unique_reference,
    metadata: {
       custom_fields: [
          {
            display_name: "Mobile Number",
            variable_name: "mobile_number",
            value: msisdn,
          }
       ]
    },
    callback: function(response){
        // $.request({
            
        // })
        //window.location=redirect;
    },
    onClose: function(){
        //alert('window closed');
    }
  });
  handler.openIframe();
}
