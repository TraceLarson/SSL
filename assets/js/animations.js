$(document).ready(function(){
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

});

