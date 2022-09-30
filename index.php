    <!--//Провека работает ли JavaScript-->
    <noscript>Включите JavaScript</noscript>
    <!--Провека работает ли JavaScript//-->

    <div class="container text-center">
        <?php
            $title = "Главная страница";
            require_once("blocks/header.php");
        ?>
        <div class="row align-items-center">
            <div>
                <h1>ТЕСТОВОЕ ЗАДАНИЕ</h1>
            </div>
        </div>
    </div>

<!--  Ajax  -->
    <a href="#" id="hide" style="display: none" onclick="return false">Скрыть картинку</a>
    <a href="#" id="show" onclick="return false">Показать картнку</a>


    <p id="load" style="cursor: pointer">Загрузить данные</p>
    <div id="information"></div>
    <img id="iconLoad" src="/img/loading.gif" style=" display: none; width: 5em" alt="">

<?php
    include("blocks/footer.php")
?>

