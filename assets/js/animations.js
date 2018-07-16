$(document).ready(function(){
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });
    $(".progress-bar").animate({
        width: "100%"
    }, 800);
    $(".progress-bar").animate({
        height: "0"
    }, {
        duration: 900,
        complete: function(){
            $('.content-container').removeClass("d-none");
        }
    });
    $('.carousel').carousel({
        interval: 5000
    });

});

