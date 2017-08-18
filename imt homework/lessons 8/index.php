<?php require_once 'functions.php'?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Альбом</h1>
    <div class="row">
        <div class="col-4 new-div">
            <div class="col-12 div-input">
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="filename" multiple="">
                    <input type="submit" name="go" value="Загрузить">
                </form>
            </div>
            <div class="col-12 download-info">
                <?php getDownload();?>
            </div>
        </div>
        <div class="col-8 new-div-2">
            <?php getView(); ?>
        </div>
    </div>
</div>
<div class="container">
    <h1>Гостевая книга</h1>
    <div class="row">
        <div class="col-4 new-div">
            <p>Введите свое имя</p>
        </div>
        <div class="col-8 new-div-2">
            <p>Список гостей</p>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>