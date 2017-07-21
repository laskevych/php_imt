<?php
$keys =array();
for($i=0; $i<10; $i++){
    $keys[$i] = rand(0,10);
}
$values =array();
for($x=0; $x<10; $x++){
    $values[$x] = rand(0,10);
}
echo '<pre>';
$arr = array_combine($keys,$values);
ksort($arr);
foreach ($arr as $key => $val) {
    echo "$key = $val\n";
}
echo '<br>';
asort($arr);
foreach ($arr as $val => $key) {
    echo "$val = $key\n";
}

