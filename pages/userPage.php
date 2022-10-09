<?php
if (isset($_COOKIE["log"])):
?>

<!doctype html>
<html lang="ru">


<!--//Провека работает ли JavaScript-->
<noscript>Включите JavaScript</noscript>
<!--Провека работает ли JavaScript//-->

<?php
include("blocks/head.php");
$title = "Кабинет пользователя";
?>

<body class="d-flex flex-column h-100">

<div class="container">
    <?php
        require_once("blocks/header.php");
    ?>

    <div class="row text-center align-items-center">
        <div>
            <h1>КАБИНЕТ ПОЛЬЗОВАТЕЛЯ</h1>

        </div>
    </div>

    <?php
    include("blocks/footer.php")
    ?>

</div>

</body>
</html>

<?php
    else:
?>
<?php
    header("Location: /");
    exit( );
?>
<?php
    endif;
?>