<?php
$salt = "123456789101112";

$answer = "";

//Прием и обработка JSON
//Расконвертация JSON строки. Параметр true необходим чтобы создался ассоциативный массив
$jsonData = json_decode($_POST["dataQuery"], true);
$loginCheck = $jsonData["login"];

// Открываем файл bd.json
$file = file_get_contents('doc/bd.json');
// Декодируем файл json в массив
$taskList = json_decode($file);


//При помощи цикла ищем совпадение логина в массиве
for ($i = 0; $i < count($taskList); $i++) {
    foreach ($taskList[$i] as $key => $value) {
        if ($key == "login") {
            $loginValue = $value;
            if ($loginValue === $loginCheck) {
                $answer = "Такой логин существует";
                print ("Такой логин существует");
                exit();
            }
        }
    }
}

//Кодируем пароль в пришедшем массиве
$jsonData["password"] = md5($jsonData["password"] . $salt);
// Записываем новую строку в json файл для этого:
// - открываем файл bd.json
$file2 = file_get_contents('doc/bd.json');
// - декодируем json файл в массив
$fileDecode = json_decode($file2, TRUE);
// - очищаем переменную $file
unset($file2);
// - представляем новую переменную как элемент массива, в формате "ключ"=>"имя переменной"
$fileDecode[] = $jsonData;
// - записываем в файл измененный массив преобразованный в json формат
file_put_contents('doc/bd.json', json_encode($fileDecode));
unset($fileDecode);



