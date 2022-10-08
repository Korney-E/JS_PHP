    <form class="form-group" id="authorizationOk-form" method="post" style="display: none" onsubmit="return false">
        <div class="authorization row form-group mb-2">
            <!--Логин-->
            <div class="col-8"></div>
            <div class="col-2" >
                <label for="login" class="form-label">login</label>
            </div>

            <div class="col-2 d-grid gap-2  mx-auto">
                <input type="submit" name="submit" value="Выйти" class="btn btn-primary btn-sx">
            </div>
        </div>
    </form>

    <script src="/dataProcessing/js/checkAuthorization.js"></script>
    <script src="/dataProcessing/js/checkAuthorizationOk.js"></script>
    <script src="/dataProcessing/js/checkRegistration.js"></script>