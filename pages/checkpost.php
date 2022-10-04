<?php

    //Прием и обработка JSON
    //Расконвертация JSON строки. Параметр true необходим чтобы создался ассоциативный массив
    $jsonData = json_decode($_POST["dataQuery"], true);

    //Пременная с login
    $key = $jsonData["name"];
    $arrKey = ["login", "password", "email", "name"];
//    $keyFind = array_search($key, array_column($jsonData, 'login'));
//    $keyFind = array_keys(array_combine(array_keys($jsonData), array_column($jsonData, 'login')),$key);


    //$ar - сам большой массив по которому осуществляется поиск
    //$findValue - Value который надо найти (в примере ANTONOVKA)
    //$executeKeys - массив с перечнем ключей $executeKeys = array ('name1','name2','name3','name4','name5')
    function findArray ($ar, $findValue, $executeKeys){
        $result = array();

        foreach ($ar as $k => $v) {
            if (is_array($ar[$k])) {
                $second_result = findArray ($ar[$k], $findValue, $executeKeys);
                $result = array_merge($result, $second_result);
                continue;
            }
            if ($v === $findValue) {
                var_dump("Имя занято");
            }
        }
        return $result;
    }


    //Кодировка
//    $salt = "123456789101112";
//    $jsonData["password"] = md5($jsonData["password"].$salt);
//    //Кодировка массива в json формат
//    $jsonStr = json_encode($jsonData);
    // Открыть файл bd.json
    $fileJson = file_get_contents('doc/bd.json');
    // Декодирование массива
    $taskList = json_decode($fileJson,TRUE);
//    // Очистка переменной $fileJson
//    //    unset($file);
//    // Представление новой переменной как элемент массива, в формате 'ключ'=>'имя переменной'
//    $taskList[] = $jsonData;
//    // Перекодировка в формат json и записать в файл.
//    file_put_contents('doc/bd.json',json_encode($taskList));
//    // Очистка переменной $taskList
//    //    unset($taskList);

$keyFind = findArray($taskList, $key, $arrKey);


//    var_dump($jsonData);
//    var_dump($taskList[1]);
//    var_dump($taskList[3]);
//    var_dump($taskList[0]["name"]);
//    var_dump($key);
    var_dump($keyFind);





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
//    $file = file_get_contents('doc/bd.json');  // Открыть файл bd.json
//    $taskList = json_decode($file,TRUE);        // Декодировать в массив
//    unset($file);                               // Очистить переменную $file
//    $taskList[] = $jsonData;        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
//    file_put_contents('doc/bd.json',json_encode($taskList));  // Перекодировать в формат и записать в файл.
//    unset($taskList);

//    file_put_contents("doc/bd.json", $jsonStr);
//    print_r($jsonStr);
//    var_dump($jsonData);
//    echo "<pre> . $jsonStr.</pre>" ;


