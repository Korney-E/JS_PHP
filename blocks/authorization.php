<?php
if (!isset($_COOKIE["log"])):
?>

<form class="form-group" id="authorization-form" method="post" onsubmit="return false">
    <div class="authorization row form-group mb-2">
        <!--Логин-->
        <div class="col-1">
            <label for="login" class="form-label">login</label>
        </div>
        <div class="col-4">
            <input type="text" name="loginAuthorization" placeholder="Введите логин" id="loginAuthorization"
                   class="form-control">
        </div>
        <!--Пароль-->
        <div class="col-2 gx-0">
            <label for="password" class="form-label">password</label>
        </div>
        <div class="col-3 gx-0">
            <input type="password" name="passAuthorization" placeholder="Введите пароль" id="passwordAuthorization"
                   class="form-control">
        </div>


        <div class="col-2 d-grid gap-2  mx-auto">
            <input type="submit" name="submit" value="Войти" class="btn btn-primary btn-sx">
        </div>

        <div class="col-1"></div>
        <div class="col-10 authorizationError formError" id="errorAuthorization"></div>
        <div class="col-1"></div>

    </div>
</form>
<?php
    else:
?>
<?php
    include("blocks/authorizationOk.php");
?>

<?php
    endif;
?>