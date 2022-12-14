//Обработка формы

$("document").ready(function () {
    //Ожидание события в объекте с id feedBack
    $("#main-form").off().on("submit", function () {
        checkForm();
    });
});


function error(nameId, fail) {
    document.getElementById(nameId).innerHTML = fail;
}


function resetError() {
    document.getElementById("errorLogin",).innerHTML = "";
    document.getElementById("errorPassword").innerHTML = "";
    document.getElementById("errorRePassword").innerHTML = "";
    document.getElementById("errorEmail").innerHTML = "";
    document.getElementById("errorName").innerHTML = "";
}


function checkForm() {
    let el = document.getElementById("main-form");
    let login = el.login.value;
    let pass = el.pass.value;
    let repass = el.repass.value;
    let email = el.email.value;
    let name = el.name.value;
    let fail = "";

    resetError()

    // var name = document.getElementById("name").value;
    if (login.length < 6) {
        fail = "Логин должен быть меньше 6-и символов";
        error("errorLogin", fail);
    }else if (login.indexOf(' ') >= 0){
        fail = "Логин не должен содержать пробелов";
        error("errorLogin", fail);
    }else if (pass.indexOf(' ') >= 0) {
        fail = "Пароль не должен содержать пробелов";
        error("errorPassword", fail);
    }else if (pass.length < 6) {
        fail = "Пароль должен быть не меньше 6-ти символов";
        error("errorPassword", fail);
    }else if (pass.match(/[-*#$%^&()@!~`+=_]/)) {
        fail = "Пароль не должен содержать спецсимволы";
        error("errorPassword", fail);
    }else if (/^[A-ZА-ЯЁ]+$/i.test(pass)) {
        fail = "Пароль должен содержать цифры";
        error("errorPassword", fail);
    }else if (/^[0-9]+$/i.test(pass)) {
        fail = "Пароль должен содержать буквы";
        error("errorPassword", fail);
    }else if (pass !== repass) {
        fail = "Пароли не совпадают";
        error("errorRePassword", fail);
    }else if (email.indexOf(' ') >= 0) {
        fail = "E-mail не должен содержать пробелов";
        error("errorEmail", fail);
    }else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) !== true) {
        fail = "Введите корректный email";
        error("errorEmail", fail);
    }else if (!/^[a-zA-ZА-Яа-яЁё]*$/g.test(document.getElementById("name").value)) {
        fail = "Имя не должно содержать цифры и символы";
        error("errorName", fail);
    }else if (name.length < 2 || name.length > 2) {
        fail = "Имя должно быть равно 2-м буквам";
        error("errorName", fail);
    }

    if (fail === "") {
        send(login, pass, email, name);
    }
}

function send($login, $pass, $email, $name) {
    let arrData = {
        "login": $login,
        "password": $pass,
        "email": $email,
        "name": $name
    }
    let jsonStr = JSON.stringify(arrData);

    $.ajax({
        url: "/dataProcessing/php/checkRegistration.php",
        method: "post",
        dataType: "html",
        data: {dataQuery: jsonStr},
        success: function (data) {
            console.log(data)
            if (data !== "" && JSON.parse(data) === "Такой логин существует") {
                error("errorLogin", "Такой логин существует");
            } else {
                window.location = '/index.php';
                // alert("Вы успешно зарегистрировались! Через 5 секунд будет произведено перенаправление на главную страницу")
                // window.setTimeout(function () {
                //     window.location = '/index.php';
                // }, 5000);
            }
        }
    });
}