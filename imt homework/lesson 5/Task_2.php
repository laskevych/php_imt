<?php
$menu = array(
    'home'=>'index.php',
    'about'=>'about.php',
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
);
function MainMenu ($menu,$type = true){
    if ($menu) {
        foreach ($menu as $name => $link) {
            if ($type) {
                echo "<li style='display: inline'><a href='$link'>&nbsp&nbsp$name</a></li>";
            }
            else {
                echo "<li><a href='$link'>$name</a></li>";
            }
        }
    }
}

MainMenu($menu);
MainMenu($menu,false);