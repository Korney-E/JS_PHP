//Обработка формы
$("document").ready(function () {
    $("#authorization-form").off().on("submit", function () {
        checkAuthorization();
    });
});

function error2(nameId, fail) {
    document.getElementById(nameId).innerHTML = fail;
}

function resetError2() {
    document.getElementById("errorAuthorization",).innerHTML = "";
}

function checkAuthorization() {
    let el = document.getElementById("authorization-form");
    let login = el.loginAuthorization.value;
    let pass = el.passAuthorization.value;
    let fail = "";

    window.onload = resetError2();

    // var name = document.getElementById("name").value;
    if (login.length < 6) {
        fail = "Логин должен быть меньше 6-и символов";
        error2("errorAuthorization", fail);
    } else if (pass.length < 6) {
        fail = "Пароль должен быть не меньше 6-ти символов";
        error2("errorAuthorization", fail);
    } else if (pass.match(/[-*#$%^&()@!~`+=_]/)) {
        fail = "Пароль не должен содержать спецсимволы";
        error2("errorAuthorization", fail);
    } else if (/^[A-ZА-ЯЁ]+$/i.test(pass)) {
        fail = "Пароль должен содержать цифры";
        error2("errorAuthorization", fail);
    } else if (/^[0-9]+$/i.test(pass)) {
        fail = "Пароль должен содержать буквы";
        error2("errorAuthorization", fail);
    }

    if (fail === "") {
        send2(login, pass);
    }
}

function send2($login, $pass) {
    let arrData = {
        "login": $login,
        "password": $pass
    }
    let jsonStr = JSON.stringify(arrData);

    $.ajax({
        url: "/dataProcessing/php/checkAuthorization.php",
        method: "post",
        dataType: "html",
        data: {dataQuery: jsonStr},
        success: function (data) {
            if (data === "14") {
                error2("errorAuthorization", "Такой логин не существует. Зарегистрируйтесь");
            }
            if (data === "23") {
                error2("errorAuthorization", "Вы набрали не верный пароль");
            }
            if (data === "13") {
                error2("errorAuthorization", "Такого пароля и логина не существует. Зарегистрируйтесь");
            }
            if (data === "24") {
                error2("errorAuthorization", "Поздравляем Вы успешно прошли авторизацию!");

                // $(document).ready(function () {
                //     $("#authorization-form").hide();
                //     $("#authorizationOk-form").show();
                // })
            }
            //     else
            //     $("#authorization-form").show();
            // $("#authorizationOk-form").hide();
        }
    });
}