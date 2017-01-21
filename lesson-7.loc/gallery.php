<?php

// подключение файла с функцией вывода фотографий из каталога
require __DIR__ . '/data.php';

/*
 * 3. Доделайте свою фотогалерею из предыдущих уроков. Добавьте к ней форму загрузки нового файла и обработку загрузки.
 * 4. * Подумайте - как можно ограничить размер заливаемых файлов? А их расширения (добавлять, например, только .jpg и .png)
 */

// программа-обработчик загрузки файлов на сервер. Выполнение пунктов ДЗ 3-4 урока 7
if (!empty($_FILES)) { // если глобальный массив $_FILES не пустой, то выполняется код ниже

    // создаю переменную с размером файла
    $size = 1024000;

    // Делаю всяческие проверки при загрузке файла на сервер
    switch ($file = $_FILES['image']) {
        // Делаю проверку файлов на соответствие типов, указанных в массиве
        case ($file['type'] != 'image/jpeg' && $file['type'] != 'image/png'):
            echo 'Выбран неверный формат файла. Допустим только формат JPG или PNG';
            break;

        // Проверка на размер файла
        case ($file['size'] > $size):
            echo 'Упс... Вы превысили размер файла в 1 Мб! Будьте добры выбрать файл меньшего размера';
            break;

        // Проверка на ошибки
        case ($file['error'] == 0):
            move_uploaded_file($file['tmp_name'], __DIR__ . '/img/galleryBig/fullpic-11.jpg');
            echo 'Файл успешно загружен';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Галерея красивых картинок</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/grstyle.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<header class="">
    <div class="container">
        <div class="row">
            <nav class="col-lg-12">
                <ul class="nav nav-pills">
                    <li role="presentation" class=""><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li role="presentation" class=""><a href="/news.html">Новости</a></li>
                    <li role="presentation" class="active"><a>Галерея</a></li>
                    <li role="presentation" class=""><a href="/contacts.html">Контакты</a></li>
                    <li role="presentation" class=""><a href="/about.html">Обо мне</a></li>
                    <li role="presentation" class=""><a href="/guestbook.php">Гостевая</a></li>
                    <li role="presentation" class=""><a href="/calc.php">Калькулятор</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center  gr--align">
                    <h1>Новости мира программирования</h1>
                    <p>Изучение курса «Мой первый сайт за 3 недели» от Альберта Степанцева с сайта Академии
                        Программирования <a href="http://pr-of-it.ru/">ProfIT</a></p>
                </div>
            </div>
        </div>
    </section>
</header>

<main class="page-main">
    <div class="container">
        <div class="page-gallery">
            <section class="row">

                <!-- Вывод картинок для галереи из папки /img/galleryBig -->
                <?php
                    foreach (filesList(__DIR__ . '/img/galleryBig') as $img) {
                ?>
                        <figure class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <a href="/image.php?file=<?php echo $img; ?>" class="thumbnail">
                                <img src="/img/galleryBig/<?php echo $img; ?>" alt="<?php echo $img; ?>">
                            </a>
                        </figure>
                <?php
                    }
                ?>
                <!-- /Вывод картинок для галереи из папки /img/galleryBig -->

            </section>
            <section class="row">

                <!-- Форма загрузки файлов по пунктам ДЗ 3-4 урока 7 -->
                <form class="add-img"
                    action="/gallery.php"
                    method="post"
                    enctype="multipart/form-data">

                    <input class="form-control" type="file" name="image">
                    <button type="submit" class="btn btn-success btn-md">
                        <i class="glyphicon glyphicon-download-alt"> </i>Загрузить файл
                    </button>
                </form>
                <!-- /Форма загрузки файлов по пунктам ДЗ 3-4 урока 7 -->

            </section>
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