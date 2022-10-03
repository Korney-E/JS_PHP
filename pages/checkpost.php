<?php

    //Прием и обработка JSON
    //Расконвертация JSON строки. Параметр true необходим чтобы создался ассоциативный массив
    $jsonData = json_decode($_POST["dataQuery"], true);
    //Кодировка
    $salt = "123456789101112";
    $jsonData["password"] = md5($jsonData["password"].$salt);
    //Кодировка массива в json формат
    $jsonStr = json_encode($jsonData);
    var_dump($jsonStr);



