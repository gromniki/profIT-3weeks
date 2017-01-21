<?php

// Gallery/Галерея
/*
 * Напишите свою функцию, которая будет на вход получать путь до папки,
 * а возвращать массив - список файлов из этой папки.
 * В результате не должно быть файлов "." и ".."!
**/

function filesList($path) {
    $arr = scandir($path);
    $ret = [];
    
    foreach ($arr as $file) {
        if($file != '.' && $file != '..') {
            $ret[] = $file;
        }
    }

    return $ret;
}

// var_dump(filesList(__DIR__ . '/img/gallery'));

/*  4.*
 *  Напишите функцию getAllComments(), которая на вход получит папку, 
 *  в которой находятся файлы комментариев (см. п. 3), 
 *  а вернет массив, в котором ключи - это время, когда был оставлен комментарий 
 *  (подсказка - сохраняйте это время в имени файла), а значения - тексты комментариев. 
 *  Примените функцию для вывода комментариев на странице из пункта 3.
 */

function getAllComments($path) {
    $newArr = [];

    foreach ($path as $fileComm) {
        $outComm = file_get_contents(__DIR__ . '/comments/' . $fileComm);

        $split = pathinfo(__DIR__ . '/comments/' . $fileComm);
        $filename = $split['filename'];

        $newArr[$filename] = $outComm;
    }

    return $newArr;
}


