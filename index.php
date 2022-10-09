<?php
session_start();
$_SESSION["auth"];
//echo "Статус переменной ".$_SESSION["auth"]."<br>";

//echo session_id();
//session_destroy();

//    $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
//    $num++;
//    $_SESSION["num"] = $num;
//    echo "Session установлена установлены ".$num." раз";
//session_destroy();
?>
<!doctype html>
<html lang="ru">


<!--//Провека работает ли JavaScript-->
<noscript>Включите JavaScript</noscript>
<!--Провека работает ли JavaScript//-->
<?php
    include("blocks/head.php");
    $title = "Главная страница";
    require_once("blocks/header.php");
?>

    <body class="d-flex flex-column h-100">
        <div class="row text-center align-items-center">
            <div>
                <h1>ТЕСТОВОЕ ЗАДАНИЕ</h1>
            </div>
        </div>
    </div>

    </body>

</html>