<?php

// Выполнение домашнего задания урока 7 пункта 1:

/*
 * Напишите калькулятор. Основывайтесь на коде, который был показан на уроке.
 * Добавьте в форму выбор операции (сложение, вычитание, умножение, деление).
 * Для создания выбора операции используйте элемент select.
 * В обработчике формы вам может быть полезен оператор switch...case
 * ( http://php.net/manual/ru/control-structures.switch.php )
**/

    // Проверяю, существует ли элемент массива с ключом number1 в пришедшем глобальном массиве POST
    if (isset($_POST['number1'])) {
        $num1 = $_POST['number1'];
    } else {
        $num1 = 0;
    }
    // Проверяю, существует ли элемент массива с ключом number2 в пришедшем глобальном массиве POST
    if (isset($_POST['number2'])) {
        $num2 = $_POST['number2'];
    } else {
        $num2 = 0;
    }
    // Проверяю, существует ли элемент массива с ключом arithmetic в пришедшем глобальном массиве POST
    if (isset($_POST['arithmetic'])) {
        $operand = $_POST['arithmetic'];
        // В зависимости от того, что выбрал пользователь, то действие и происходит.
        switch ($operand) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
        }
    } else {
        $result = 0;
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <title>Калькулятор</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/grstyle.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<header class="">
    <div class="container">
        <div class="row">
            <nav class="col-lg-12">
                <ul class="nav nav-pills">
                    <li role="presentation" class=""><a><i class="glyphicon glyphicon-home"></i></a></li>
                    <li role="presentation" class=""><a href="/news.html">Новости</a></li>
                    <li role="presentation" class=""><a href="/gallery.php">Галерея</a></li>
                    <li role="presentation" class=""><a href="/contacts.html">Контакты</a></li>
                    <li role="presentation" class=""><a href="/about.html">Обо мне</a></li>
                    <li role="presentation" class=""><a href="/guestbook.php">Гостевая</a></li>
                    <li role="presentation" class="active"><a>Калькулятор</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center  gr--align">
                    <h1>Новости мира программирования</h1>
                    <p>Изучение курса «Мой первый сайт за 3 недели» от Альберта Степанцева с сайта Академии Программирования <a href="http://pr-of-it.ru/">ProfIT</a></p>
                </div>
            </div>
        </div>
    </section>
</header>

<main class="container">
    <div class="container">
        <div class="page-comments">
            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form class="form-inline" action="/calc.php" method="post">
                        <fieldset>
                            <legend>Простой калькулятор</legend>
                            <input class="form-control" type="number" name="number1" placeholder="Число 1">
                            <select class="form-control" name="arithmetic">
                                <option>+</option>
                                <option>-</option>
                                <option>*</option>
                                <option>/</option>
                            </select>
                            <input class="form-control" type="number" name="number2" placeholder="Число 2">
                            <button type="submit" class="btn btn-success btn-md">=</button>
                            
                            <!-- Вывод результата подсчета двух чисел в калькуляторе -->
                            <strong><?php echo $result; ?></strong>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p>Голубев Роман Александрович</p>
                <address>
                    <a href="http://vk.com/gromniki" target="_blank">Страничка ВК</a><br>
                    <strong>e-mail:</strong> grom272008@yandex.ru<br>
                    <strong>skype:</strong> golubev_roman
                </address>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img class="img-responsive pull-right" src="/img/snowman2.png" width="96" height="96" alt="Логотип">
            </div>
        </div>
    </div>
</footer>

</body>
</html>