<!-- // Обработка формы  -->
<div class="container mt-8">
    <?php
        $title = "Регистрация";
        require_once("blocks/header.php");
    ?>

    <div id="test"></div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="form-group" id="main-form" method="post" onsubmit="return false">
                <!--Логин-->
                <div class="row form-group mb-2">
                    <div class="col-4">
                        <label for="login" class="form-label">login (unique)</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control">
                    </div>
                    <div class="formError" id="errorLogin"> </div>
                </div>

                <!--Пароль-->
                <div class="row form-group mb-2">
                    <div class="col-4">
                        <label for="password" class="form-label">password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="pass" placeholder="Введите пароль" id="password" class="form-control">
                    </div>
                    <div class="formError" id="errorPassword"> </div>
                </div>

                <!--Проверка пароля-->
                <div class="row form-group mb-2">
                    <div class="col-4">
                        <label for="repassword" class="form-label">confirm_password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="repass" placeholder="Повторите пароль" id="repassword" class="form-control">
                    </div>

                    <div class="formError" id="errorRePassword"> </div>
                </div>

                <!--E-mail-->
                <div class="row form-group mb-2">
                    <div class="col-4">
                        <label for="email" class="form-label">email (unique)</label>
                    </div>
                    <div class="col-8">
                        <input type="email" name="email" placeholder="Введите E-mail" id="email" class="form-control">
                    </div>
                    <div class="formError" id="errorEmail"> </div>
                </div>

                <!--Имя-->
                <div class="row form-group mb-2">
                    <div class="col-4">
                        <label for="name" class="form-label">name</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
                    </div>
                    <div class="formError" id="errorName"> </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" id="send" name="submit" value="Готово" class="btn btn-primary btn-sx">
                </div>
            </form>
            <div id="information" class="text-center"></div>
        </div>
    </div>


</div>

<script src="/dataProcessing/js/function.js"></script>
<?php
include("blocks/footer.php")
?>

<!--  Обработка формы // -->



