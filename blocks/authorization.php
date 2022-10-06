<div class="row col-4 g-1">
    <form class="form-group" id="authorization-form" method="post" onsubmit="return false">
        <div class="authorization row form-group mb-2">
            <!--Логин-->
            <div class="col-1" >
                <label for="login" class="form-label">login</label>
            </div>
            <div class="col-4">
                <input type="text" name="login" placeholder="Введите логин" id="login" class="form-control">
            </div>
            <!--Пароль-->
            <div class="col-2 gx-0">
                <label for="password" class="form-label">password</label>
            </div>
            <div class="col-3 gx-0">
                <input type="password" name="pass" placeholder="Введите пароль" id="password" class="form-control">
            </div>
            <div class="col-2 d-grid gap-2  mx-auto">
                <input type="submit" name="submit" value="Войти" class="btn btn-primary btn-sx">
            </div>

            <div class="col-1"></div>
            <div class="col-4 authorizationError formError" id="errorLogin"> выавы</div>
            <div class="col-2 gx-0"></div>
            <div class="col-4 gx-0 authorizationError formError" id="errorLogin"> выавы</div>
            <div class="col-1"></div>
        </div>
    </form>
</div>
</div>

