<header>
    <div class="row">
        <div class="g-1 col-4"></div>
        <div class="g-1 col-4 text-center mb-5">
            <a href="/">Главная</a> |
            <a href="/pages/registration.php">Регистрация</a>
        </div>
        <div class="row col-4 g-1" id="authorizationBlocHeader">
        <?php
        require_once("blocks/authorization.php");
        ?>
        </div>
    </div>
</header>
