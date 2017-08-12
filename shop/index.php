<?php //require_once 'html/cookies.php' ?>
<?php require_once 'html/functions.php' ?>
<?php $cart = getCart($products) ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Мой магазин</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrap">
        <div class="menu">
            <?php //viewMenu($pages) ?>
                <div class="basket">
                    <a href="?r=cart">В корзине</a> <?php echo $cart->total_amount.' товара(ов)' ;?>
                </div>
            </div>
    <aside class="container">
        <div>
            <div class="container-header">
                <h2 class="container-h2">Каталог товаров</h2>
            </div>
            <div class="makeTree">
                <?php
                $categories_tree = makeTree($categories);
                viewCategories($categories_tree);
                ?>
            </div>
        </div>
    </aside>
        <div class="content">
            <h2 class="content-h2">Товары</h2>

            <div> <?php require_once 'html/content.php'?></div>
        </div>
        <footer>
            <div class="footer-text">
                <?php getFooter();?>
            </div>
        </footer>
</div>
</body>
</html>