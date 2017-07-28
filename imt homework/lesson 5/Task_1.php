<?php
function Table ($cols, $rows,$color){
    echo "<table style='background-color:{$color}' border='1' align='center'>";
    for ($tr=1; $tr<=$rows; $tr++){
        echo '<tr>';
        for ($td=1; $td<=$cols; $td++){
            echo "<td>" . $td * $tr . '</td>';
        }
    }
    echo '</tr>';

}
echo '</table>';

Table(10,10,yellow); echo "<br>";
Table(13,7,red); echo "<br>";
Table(5,5,olivedrab); echo "<br>";
