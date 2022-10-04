<?php

    //Прием и обработка JSON
    //Расконвертация JSON строки. Параметр true необходим чтобы создался ассоциативный массив
    $jsonData = json_decode($_POST["dataQuery"], true);



    //Кодировка
    $salt = "123456789101112";
    $jsonData["password"] = md5($jsonData["password"].$salt);
    //Кодировка массива в json формат
    $jsonStr = json_encode($jsonData);

    //Чтение JSON файлов
//    $res = file_get_contents("doc/bd.json");
    //Преоброзование строки в массив
//    $bdData = json_decode($res, true);
    //Внесение изменений в json файл
//    for ($i = 0; $i < count($bdData); $i++) {
//        $bdData[$i]["age"] = $bdData[$i]["age"] +10;
//    }
    /*
    Запись данных в json файл
    1. Преобровать массив в json строку - переменная = json_encode($jsonData);
    2. Записать в файл file_put_contents(перобразованный в оыщт формат массив)
    */
    $file = file_get_contents('doc/bd.json');  // Открыть файл bd.json
    $taskList = json_decode($file,TRUE);        // Декодировать в массив
    unset($file);                               // Очистить переменную $file
    $taskList[] = $jsonData;        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
    file_put_contents('doc/bd.json',json_encode($taskList));  // Перекодировать в формат и записать в файл.
    unset($taskList);

//    file_put_contents("doc/bd.json", $jsonStr);
//    print_r($jsonStr);
    var_dump($jsonData);
//    echo "<pre> . $jsonStr.</pre>" ;


