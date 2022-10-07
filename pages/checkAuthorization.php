<?php

$answer = "";

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
for ($i = 0; $i < count($taskList); $i++){
    foreach ($taskList[$i] as $key => $value){
        if ($key != "login") {
            $loginValue = $value;
            if ($loginValue === $loginCheck){
                $answer = "Такого логина не существует";
                print ("Такого логина не существует");
                exit();
            }
        }
        if ($key != "password") {
            $loginValue = $value;
            if ($loginValue === $loginCheck){
                $answer = "Такого пароля не существует";
                print ("Такого пароля не существует");
                exit();
            }
        }
    }
}

// - очищаем переменную $file
unset($file);



