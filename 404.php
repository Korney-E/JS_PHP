<?php
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
            <h1>ТАКОЙ СТРАНИЦЫ НЕ СУЩЕСТВУЕТ</h1>
            <br>
            <br>
            <h5>Ошибка 404</h5>

    <?php
    include("blocks/footer.php")
    ?>

</div>

</body>
</html>