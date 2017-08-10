<?php require_once 'html/functions.php' ?>
<!--Еще не разобрался где подключать куки-->
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Мой магазин</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrap">
    <header>
        <div class="menu">
            <?//php viewMenu($pages) ?>
        </div>
    </header>
    <aside class="container">
        <div>
            <h2 class="container-h2">Каталог товаров</h2>
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
            <div>
                <p class="footer-text">Это тестовый интернет магазин.</p>
                <p class="footer-text">an.laskevych@gmail.com</p>
            </div>

        </footer>
</div>
</body>
</html>