<header>
    <div class="row">
        <div class="g-1 col-3"></div>
        <div class="g-1 col-5 text-center mb-5">
            <a href="/">Главная</a> |
            <a href="/pages/registration.php">Регистрация</a>

            <?php
            if (isset($_COOKIE["log"])):
                ?>
                | <a href="/pages/userpage.php">Кабинет пользователя</a>
            <?php
            endif;
            ?>

        </div>
        <div class="row col-4 g-1" id="authorizationBlocHeader">
            <?php
            require(dirname(__FILE__) . "/authorization.php");
            ?>
        </div>
    </div>
</header>
