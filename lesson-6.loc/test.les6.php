<?php

require __DIR__ . '/data2.php';


// Comments/Комментарии
/* 3.
 * Переделайте свою страницу комментариев.
 * Пусть каждый уже имеющийся комментарий будет находиться в отдельном текстовом файле,
 * страница получит список таких файлов и прочитает каждый из них, вставляя на страницу.
 * Используйте свою функцию из п.1 и функцию file_get_contents().
**/
?>

<!-- Вывод комментариев. Пункт 3. -->
        <h3><strong>Вывод комментариев по 3 пункту ДЗ урока 6</strong></h3>
        <?php

        foreach (filesList(__DIR__ . '/comments') as $comment) {
          $fComment = file_get_contents(__DIR__ . '/comments/' . $comment);

          //$arrayComments = filesList(__DIR__ . '/comments');
          //$fComment = file_get_contents(__DIR__ . '/comments/' . $arrayComments[1]);

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


<?php
/*
 *  Напишите функцию getAllComments(), которая на вход получит папку,
 *  в которой находятся файлы комментариев (см. п. 3),
 *  а вернет массив, в котором ключи - это время, когда был оставлен комментарий
 *  (подсказка - сохраняйте это время в имени файла), а значения - тексты комментариев.
 *  Примените функцию для вывода комментариев на странице из пункта 3.
 *
 *  имя файла должно быть передано в функцию file_get_contents()
 *
 *  $var = pathinfo(__DIR__.'/comments/file.txt'[PATHINFO_FILENAME]);
 *  $fullComment1 = file_get_contents(__DIR__ . '/comments/' . $fileComm['filename']);
 *
 * [7:44:25] Илья Рогаткин: Неее дружище
[7:44:36] Илья Рогаткин: Каждый щас надо проверять
[7:44:46] Илья Рогаткин: Иначе не выйдет каменный цветок
[7:45:02] Илья Рогаткин: Создай новый файл
[7:45:29] Илья Рогаткин: Объяви массив с уже задранными значениями
[7:45:40] Илья Рогаткин: Потом объяви пустой массив
[7:46:11] Илья Рогаткин: И через цикл значения одного массива добавь в ключи другого
 */

echo '<br>';
echo '<hr>';
echo '<br>';


$path = commentsList(); // получаю папку, в которой находятся файлы комментариев (п. 3)
var_dump($path);
echo '<br>';
$newArr = [];  // создаю новый массив


echo '<br>';
foreach ($path as $comm) {  // через цикл прохожусь по массиву
  $val = file_get_contents(__DIR__ . '/comments/' . $comm); //  вывод полных комментариев.

  $date = pathinfo(__DIR__ . '/comments/' . $comm);
  $normalDate = date('d.m.Y H:i', $date['filename']);

  //$filename = $split['filename'];
  $newArr[$normalDate] = $val;
}

var_dump($newArr);

echo '<hr>';
echo '<br>';

?>

<div class="page-comments__comment">
          <div class="row">

            <?php

            $arrComments = commentsList();
            $fullComment1 = file_get_contents(__DIR__ . '/comments/' . $arrComments[1]);

              ?>

<section class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
  <img class="img-responsive" src="/img/noavatar.png" alt="Нет аватарки">
</section>
<article class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
  <p class="author-name">Кащей Бессмертный • <span>1 день назад</span></p>
  <p class="text-comment"><?php echo $fullComment1; ?></p>
  <p class="comment-answer">• <a href="" onclick="return false">Ответить</a>&nbsp;&nbsp; • <a href="" onclick="return false">Поделиться</a></p>
</article>

<?php


?>

</div>
</div>


