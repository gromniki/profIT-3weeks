<?php
/**
 * Created by Roman Golubev.
 * User: gromniki
 * Date: 16.11.2016
 */

$pic = $_GET['file'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Full Pic</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/grstyle.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="page-image">
    <div class="container">
        <div class="row">
            <section class="col-lg-12  page-image__flex">
                <img class="img-big-gr  img-responsive" src="/img/galleryBig/<?php echo $pic; ?>" alt="<?php echo $pic; ?>">
                <a class="btn btn-success btn-md" href="/gallery.php">Назад</a>
            </section>
        </div>
    </div>
</body>
</html>
