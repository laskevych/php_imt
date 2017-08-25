<?php
include "data/menu.php";
$site_page = getPage($pages,$id) ?>

<h1><?php echo $site_page->name ?></h1>

<?php if($site_page->description) :?>
    <div>
        <?php echo $site_page->description ?>
    </div>
<?php endif;?>
