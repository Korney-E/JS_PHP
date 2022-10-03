<?php
//     print_r($_POST);
//
//if(isset($_GET['name'])):
//         echo $_GET["name"];
//endif;

    $login = $_POST["login"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $name = $_POST["name"];

    $salt = "123456789101112";
    $passwordHash = md5($password.$salt);

    echo $login."<br>";
    echo $password."<br>";
    echo $passwordHash."<br>";
    echo $email."<br>";
    echo $name."<br>";
