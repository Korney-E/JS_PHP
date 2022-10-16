$("document").ready(function () {
    $("#authorizationOk-form").off().on("submit", function () {

        $.ajax({
            url: "/dataProcessing/php/exit.php",
            method: "post",
            cache: false,
            data: {},
            dataType: "html",
            success: function (data) {
                document.location.reload(true);
            }
        });
    });
});


