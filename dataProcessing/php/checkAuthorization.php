<?php
//    include "/dataProcessing/php/const.php";

$salt = "123456789101112";

$answerlogin = 0;
$answerPassword = 0;

//Прием и обработка JSON
//Расконвертация JSON строки. Параметр true необходим чтобы создался ассоциативный массив
$jsonData = json_decode($_POST["dataQuery"], true);
$loginCheck = $jsonData["login"];
$passwordCheck = $jsonData["password"];

// Открываем файл bd.json
$file = file_get_contents('doc/bd.json');
// Декодируем файл json в массив
$taskList = json_decode($file);

//При помощи цикла ищем совпадение логина в массиве
for ($i = 0; $i < count($taskList); $i++) {
    foreach ($taskList[$i] as $key => $value) {
        if ($key === "login" || $key === "password") {
            $loginValue = $value;

            if ($loginValue == $loginCheck) {
                $answerlogin = 1;
            }

            if ($loginValue == md5($passwordCheck . $salt)) {
                $answerPassword = 1;
            }
        }
    }
}

//Ответ существует или нет логин
if ($answerlogin == 0) {
    print ("1");//Такого логина не существует.
}
if ($answerlogin == 1) {
    print ("2");//Пользователь найден.

}
//Ответ существует или нет пароль приусловии что логин найден
if ($answerPassword == 0) {
    print ("3");//Неверный пароль.
}
if ($answerPassword == 1) {
    print ("4"); //Пароль найден
}
// - очищаем переменную $file
unset($file);



