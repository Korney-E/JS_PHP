<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/dataProcessing/css/styles.css">
    <script src="/dataProcessing/js/jquery_3.6.1.js"></script>
    <title><?= $title ?></title>
</head>

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

        <?php
        require_once("blocks/authorizationOk.php");
        ?>
    </div>

    </div>
</header>
<body class="d-flex flex-column h-100">