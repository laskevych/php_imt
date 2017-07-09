<?php
/*ЗАДАЧА 1
Вывести четные числа от 0 до 101, с помощью цикла while*/
$a = 0;
while ($a <101){
    echo $a +=2,'<br>';
}

/*ЗАДАЧА 2
Вывести числа в следущей последовательности: 200 199 198 … 0.
Задание решите с помощью цикла for*/
echo '<table border="1">','<tr>';
    for ($b=200; $b<=200 && $b>=0; $b--){
        echo '<td>', $b,'</td>';
    }
echo '</tr>','</table>';

/*ЗАДАЧА 3
Найти сумму чисел от 0 до 100 (включительно). (0+1+2+3+4+5).
Задачу решите с помощью цикла for.*/
$sum = 0;
for ($c=0;$c<=100;$c++){
}
echo $sum = $sum + $c,'<br>';
/*ЗАДАЧА 4
Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
С помощью цикла foreach выведите эти слова в столбик.*/
$language = array('html', 'css', 'php', 'js', 'jq');





/*ЗАДАЧА 5
Вывести строку Hello World! в столбец при помощи цикла for*/
$str = 'HELLO WORLD';
for ($a = 0; $a < strlen($str);$a++){
    echo $str{$a}.'<br>';
}

/*ЗАДАЧА 8
Разноцветная таблица умножения*/
$colors = array(
    "blue" => "#137bff",
    "green" => "#329dff",
    "yellow" => "#fdff45",
    "orange" => "#ffb122",
    "red" => "#ff1e20",
    "pink" => "#ff3aaf",
    "purple" => "#d02eff",
    "purple_2" => "#d02eff",
    "dark_blue" => "#192aff",
);
$cols = 10; $rows = 10;
echo '<table border="1">';
for ($tr=1; $tr<=$rows; $tr++){
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        switch ($td){
            case 1:
                echo "<th style='background: $colors[blue]'>" . $td * $tr . '</th>';
                break;
            case 2:
                echo "<th style='background: $colors[green]'>" . $td * $tr . '</th>';
                break;
            case 3:
                echo "<th style='background: $colors[yellow]'>" . $td * $tr . '</th>';
                break;
            case 4:
                echo "<th style='background: $colors[orange]'>" . $td * $tr . '</th>';
                break;
            case 5:
                echo "<th style='background: $colors[red]'>" . $td * $tr . '</th>';
                break;
            case 6:
                echo "<th style='background: $colors[pink]'>" . $td * $tr . '</th>';
                break;
            case 7:
                echo "<th style='background: $colors[purple]'>" . $td * $tr . '</th>';
                break;
            case 8:
                echo "<th style='background: $colors[purple_2]'>" . $td * $tr . '</th>';
                break;
            case 9:
                echo "<th style='background: $colors[dark_blue]'>" . $td * $tr . '</th>';
                break;
            case 10:
                echo "<th style='background: $colors[blue]'>" . $td * $tr . '</th>';
                break;
            default:
                echo "<td>" . $td * $tr . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

