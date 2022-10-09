<?php
//session_start();
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
    ?>

<body class="d-flex flex-column h-100">

    <div class="container">
        <?php
            require_once("blocks/header.php");
        ?>

        <div class="row text-center align-items-center">
            <div>
                <h1>ТЕСТОВОЕ ЗАДАНИЕ</h1>
                <br>
                <br>
                <h5><strong>Логин:</strong> LoginTest</h5>
                <h5><strong>Пароль:</strong> 123456q</h5>
            </div>
        </div>

        <?php
        include("blocks/footer.php")
        ?>

    </div>

</body>
</html>