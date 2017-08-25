<?php setcookie('lasttime',date('d.m.Y H:i'),time()+120,'/');?>
<?php require_once 'html/functions.php' ?>
<?php $cart = getCart($products) ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Мой магазин</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row col-12">
        <div class="col-6 head-info">
            <?php viewMenu($pages) ?>
        </div>
        <div class="col-5 head-info head-radius-1" style="padding-top: 5px">
            <form class="form-inline" action="" method="post">
                <input type="text" name="login" placeholder="Логин" class="form-inline col-sm-6">
                <small class="form-text text-muted">a-z+0-9</small>
                <input type="password" name="password" placeholder="Пароль" class="form-inline col-sm-6">
                <small class="form-text text-muted">a-z+0-9+знаки /-*?</small>
                <input type="text" name="username" placeholder="Имя" class="form-inline col-sm-6">
                <small class="form-text text-muted">а-яА-Я</small>
                <input type="email" name="email" placeholder="Email" class="form-inline col-sm-6">
                <small class="form-text text-muted">Стандарт</small>
                <input type="submit" name="registration" class="btn badge-primary btn-sm col-sm-12" value="Регистрация">
            </form>
        </div>
        <div class="col-1 head-info head-radius-2">
            <a href="?r=cart"><img src="files/images/basket.png" width="50%"> <?php echo $cart->total_amount;?></a>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
                <div class="col-3 menu-tree">
                    <div class="menu-h2">
                        <h4>Каталог</h4>
                    </div>
                    <?php $categories_tree = makeTree($categories); viewCategories($categories_tree);?>
                </div>
            <div class="col-9 products">
                <div><?php require_once 'html/content.php'?></div>
            </div>
        </div>
    </div>
     <div class="container">
        <div class="col-12 <!--footer-100-->">
        </div>
        <div class="col-12">
            <?php getFooter();?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>