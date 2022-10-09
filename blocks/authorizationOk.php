<form class="form-group" id="authorizationOk-form" method="post">
    <div class="authorization row form-group mb-2">
        <!--Логин-->
        <div class="col-8"></div>
        <div class="col-2">
            <label for="login" class="form-label"> Login </label>
        </div>

        <div class="col-2 d-grid gap-2  mx-auto">
            <input type="submit" name="exitSession" value="Выйти" class="btn btn-primary btn-sx">
        </div>
    </div>
</form>


<?php

if(array_key_exists('exitSession', $_POST)) {
    $_SESSION["auth"] = 1;
    echo $_SESSION["auth"];
}
?>


<script src="/dataProcessing/js/checkAuthorization.js"></script>
<script src="/dataProcessing/js/checkAuthorizationOk.js"></script>
<script src="/dataProcessing/js/checkRegistration.js"></script>