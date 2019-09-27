(function($) {
    $.snackbar = function(opts){
        var settings = $.extend({
            text: '',
            type: 'default',
            timeout: 3000,
            icon: false,
            iclass: 'fa fa-ban fa-lg',
            animated: false
        },opts);

        var snackbar = document.createElement('div');

        snackbar.innerHTML = " &nbsp;" + settings.text;

        if(settings.icon){
            var iconClass = document.createElement('i');
            var classList = settings.iclass.split(" ");

            iconClass.classList.add(...classList);
            snackbar.prepend(iconClass);
        }

        $('body').append(snackbar);
        snackbar.setAttribute('id' , 'snackbar');
        snackbar.classList.add('show' , settings.type);

        setTimeout(function () {
            snackbar.remove();
        } , settings.timeout);
    };

    $.snackup = function(opts){
        var settings = $.extend({
            icon: 'fa fa-heart fa-3x',
            timeout: 3000
        }, opts);

        var snackup = document.createElement('div');
        var snackicon = document.createElement('i');
        var classList = settings.icon.split(" ");

        snackicon.classList.add(...classList , 'danger');
        snackup.appendChild(snackicon);
        snackup.setAttribute('id' , 'snackup');
        snackup.classList.add('show');

        $('body').append(snackup);
        setTimeout(function(){
            snackup.remove();
        }, settings.timeout);
    };
})(jQuery);