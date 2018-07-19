$(document).ready(function(){

    // AJAX REQUEST
    $("ajaxSubmit").click(function () { // When button is clicked
       $.ajax({ // AJAX will submit the form
           method: "POST", // using the POST method
           url: "/welcome/ajaxPars", // To THIS TARGET URK
           data: { email: $("#email").val(), password: $("#password").val()}, // This is the data it will send
           success: function (msg) { // THis is what will be returned.
               if(msg=="welcome"){
                   alert("welcome");
                   // window.location = "";
               }else{}
           }
       })
    });







    // ANIMATIONS!!!!!!!!!
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

