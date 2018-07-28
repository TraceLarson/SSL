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
                    alert("welcome " + $("#username").val());
                    window.location.href = "/Welcome";
                } else {
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



    // FB SCRIPTS

    $app_id = '338414790032228';
    $secret = 'ab66a4d3782a6650cb788bdbe44379bb';
    $version = 'v1.1'; // 'v1.1' for example
    // initialize Account Kit with CSRF protection
    AccountKit_OnInteractive = function () {
        AccountKit.init(
            {
                appId: "338414790032228",
                state: "csrf",
                version: "v1.1",
                fbAppEventsEnabled: true,
                debug: true,
                redirect: "/Api/facebook"
            }
        );
    };

    // login callback
    function loginCallback(response) {
        if (response.status === "PARTIALLY_AUTHENTICATED") {
            var code = response.code;
            var csrf = response.state;
            // Send code to server to exchange for access token
        }
        else if (response.status === "NOT_AUTHENTICATED") {
            // handle authentication failure
            alert('Auth Failure');
        }
        else if (response.status === "BAD_PARAMS") {
            // handle bad parameters
            alert('Bad Params');
        }
    }

    // phone form submission handler
    function smsLogin() {
        var countryCode = document.getElementById("country_code").value;
        var phoneNumber = document.getElementById("phone_number").value;
        AccountKit.login(
            'PHONE',
            {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
            loginCallback
        );
    }


    // email form submission handler
    function emailLogin() {
        var emailAddress = document.getElementById("email").value;
        AccountKit.login(
            'EMAIL',
            {emailAddress: emailAddress},
            loginCallback
        );
    }

    function loginCallback(response) {
        if (response.status === "PARTIALLY_AUTHENTICATED") {
            document.getElementById("code").value = response.code;
            document.getElementById("csrf").value = response.state;
            document.getElementById("login_success").submit();
        }
    }

});


