<?php

require __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow" />
  <title>Контактная информация</title>

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
            <li role="presentation" class=""><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
            <li role="presentation" class=""><a href="/news.html">Новости</a></li>
            <li role="presentation" class=""><a href="/gallery.php">Галерея</a></li>
            <li role="presentation" class=""><a href="/contacts.html">Контакты</a></li>
            <li role="presentation" class=""><a href="/about.html">Обо мне</a></li>
            <li role="presentation" class="active"><a>Гостевая</a></li>
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

  <main class="page-main">
    <div class="container">
      <div class="page-comments">

        <!-- Вывод комментариев. Пункт 3. -->
        <h3 style="margin-bottom: 20px;"><strong>Вывод комментариев по 3 пункту ДЗ урока 6</strong></h3>
        <?php

        foreach (filesList(__DIR__ . '/comments') as $comment) {
          $fComment = file_get_contents(__DIR__ . '/comments/' . $comment);
          ?>

          <div class="page-comments__comment">
            <div class="row">
              <section class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                <img class="img-responsive" src="/img/noavatar.png" alt="Нет аватарки">
              </section>
              <article class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                <p class="author-name">Змей Горыныч • <span>1 день назад</span></p>
                <p class="text-comment"><?php echo $fComment; ?></p>
                <p class="comment-answer">• <a href="" onclick="return false">Ответить</a>&nbsp;&nbsp; • <a href="" onclick="return false">Поделиться</a></p>
              </article>
            </div>
          </div>

        <?php
        }
        ?>
        <!-- /Вывод комментариев. Пункт 3. -->


        <hr style="margin: 30px 0;">

        
        <!-- Вывод комментариев. Пункт 4. -->
        <h3 style="margin-bottom: 20px;"><strong>Вывод комментариев по 4 пункту ДЗ урока 6</strong></h3>
        <?php
          foreach ($allComments as $date => $commentFull) {
        ?>

          <div class="page-comments__comment">
            <div class="row">
              <section class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                <img class="img-responsive" src="/img/noavatar.png" alt="Нет аватарки">
              </section>
              <article class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                <p class="author-name">Кащей Бессмертный • <span><?php echo $date ?></span></p>
                <p class="text-comment"><?php echo $commentFull; ?></p>
                <p class="comment-answer">• <a href="" onclick="return false">Ответить</a>&nbsp;&nbsp; • <a href="" onclick="return false">Поделиться</a></p>
                <hr>
              </article>
            </div>
          </div>

        <?php
          }
        ?>
        <!-- /Вывод комментариев. Пункт 4. -->


        <div class="row">
          <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form>
              <fieldset>
                <legend>Добавление комментария</legend>
                <div class="form-group">
                  <label for="addName">Ваше имя</label>
                  <input type="text" class="form-control" id="addName" placeholder="Иван Петров">
                </div>
                <div class="form-group">
                  <label for="addEmail">Ваш e-mail</label>
                  <input type="email" class="form-control" id="addEmail" placeholder="Введите E-mail">
                </div>
                <div class="form-group">
                  <label for="textComment">Напишите свой комментарий</label>
                  <textarea class="form-control" id="textComment" rows="3" placeholder="Привет, курс просто шикарный"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-md"><i class="glyphicon glyphicon-pencil"></i> Добавить комментарий</button>
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