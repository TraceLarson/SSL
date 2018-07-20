$(document).ready(function () {
    // AJAX REQUEST
    $("#ajaxSubmit").click(function () { // When button is clicked
        $.ajax({ // AJAX will submit the form
            method: "POST", // using the POST method
            url: "/Login/ajaxPars", // To THIS TARGET URL
            data: { // This is the data it will send
                "username": $("#username").val(),
                "password": $("#password").val(),
            },
            success: function (msg) { // THis is what will be returned.
                if (msg == "welcome") {
                    alert("welcome " + $("#username").val() );
                    window.location.href = "/Welcome";
                }else{
                    alert('Bad Login');
                }
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
        complete: function () {
            $('.content-container').removeClass("d-none");
        }
    });
    $('.carousel').carousel({
        interval: 5000
    });

});

