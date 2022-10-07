//Обработка формы

$("document").ready(function () {
    //Ожидание события в объекте с id feedBack
    $("#authorization-form").off().on("submit", function () {
        checkAuthorization();

    });
});

    function error2(nameId2, fail2) {
    document.getElementById(nameId2).innerHTML = fail2;
}


    function resetError2() {
    document.getElementById("errorAuthorization",).innerHTML = "";
}


    function checkAuthorization() {
    let el = document.getElementById("authorization-form");
    let login = el.login.value;
    let pass = el.pass.value;
    let fail2 = "";

window.onload = resetError2();

    // var name = document.getElementById("name").value;
    if (login.length < 6) {
        fail2 = "Логин должен быть меньше 6-и символов";
        error2("errorAuthorization", fail2);
    } else if (pass.length < 6) {
        fail2 = "Пароль должен быть не меньше 6-ти символов";
        error2("errorAuthorization", fail2);
    } else if (pass.match(/[-*#$%^&()@!~`+=_]/)) {
        fail2 = "Пароль не должен содержать спецсимволы";
        error2("errorAuthorization", fail2);
    } else if (/^[A-ZА-ЯЁ]+$/i.test(pass)) {
        fail2 = "Пароль должен содержать цифры";
        error2("errorAuthorization", fail2);
    } else if (/^[0-9]+$/i.test(pass)) {
        fail2 = "Пароль должен содержать буквы";
        error2("errorAuthorization", fail2);
    }

    if (fail2 === "") {
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
        url: "/pages/checkAuthorization.php",
        method: "post",
        dataType: "html",
        data: {dataQuery: jsonStr},
        success: function (data) {
            if (data === "Такой логин или  пароль не существует"){
                data;
                error2("errorLogin", data);
                console.log("Hello people")
            }else {
                console.log("Такой логин не существует")
            }
            console.log(data);
        }
    });
}