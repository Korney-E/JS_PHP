
<?php
$title = "Регистрация";
require_once("blocks/header.php");
//print_r ($_POST);
?>

<div class="container mt-2">
    <h1>Регистрация</h1>

    <!--
    Атрибут action - указывает страницу на которой будет проходить обработка данных из формы
            metod - метод передачи данных
    -->

    <form action="checkpost.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="text" name="email" placeholder="Введите E-mail" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="massage" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>


<?php
include("blocks/footer.php")
?>

