<?php
//ЗАДАЧА 1
//Приветствие гостя сайта в разное время. Я выполнил через if-elseif-else;

$hour = mt_rand(0,24); // (int)strftime('%H')
$welcome ='';
if($hour>0 and $hour<6){
    $welcome = 'Доброй ночи';
}elseif ($hour>=6 and $hour<12) {
    $welcome = 'Доброе утро';
}elseif ($hour>=12 and $hour<18) {
    $welcome = 'Добрый день';
}elseif ($hour>=18 and $hour<23){
    $welcome = 'Добрый вечер';
}else {
    $welcome = 'Доброй ночи';
}

//Приветствие гостя сайта в разное время. Я выполнил через switch и case;
$hour = mt_rand(0,24);
switch ($hour){
    case $hour>0 and $hour<6:
        echo 'Доброй ночи';
        break;
    case $hour>=6 and $hour<12:
        echo 'Доброе утро';
        break;
    case $hour>=12 and $hour<18:
        echo 'Добрый день';
        break;
    case $hour>=18 and $hour<=23:
        echo 'Добрый вечер';
        break;
    default:
        echo 'Привет';
        break;

}

//ЗАДАЧА 2
//Создайте пример динамического меню для сайта
$leftMenu = array(
    'home'=>'index.php',
    'about'=>'about.php',
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
);
?>
<li><a href='<?= $leftMenu['home']?>'>Домой</a></li>
<li><a href='<?= $leftMenu['about']?>'>О нас</a></li>
<li><a href='<?= $leftMenu['contacts']?>'>Контакты</a></li>
<li><a href='<?= $leftMenu['table']?>'>Таблица</a></li>
<li><a href='<?= $leftMenu['calc']?>'>Калькулятор</a></li>

<?php
//ЗАДАЧА 3
//Выведите фразу «это рабочий день» или «это выходной день;
$date = mt_rand(1,10);
switch ($date){
    case $date>=1 && $date<=5:
        echo 'Сегодня мы работаем!';
        break;
    case $date>5 && $date<=7:
        echo 'У нас сегодня выходной!';
        break;
    default:
        echo 'Мы не уверены работаем сегодня или нет :(';
        break;
}

//ЗАДАЧА 4

//Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5
$number_1 = mt_rand(1,100);
$number_2 = mt_rand(1,100);
echo 'Остаток от деления на 3: ', $number_1 % 3,'<br>','Остаток от деления на 5: ',$number_1 % 5;

//Дано число. Увеличьте его на 30%, на 120%
$number = mt_rand(1,100);
$percent = 30;
$result = $number/100*$percent;
$result = $result + $percent;
echo 'Случайное число увеличено на 30% = ',$result;
echo '<br>';
$percent = 120;
$result = $number/100*$percent;
$result = $result + $percent;
echo 'Случайное число увеличено на 120% = ',$result;

//Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа
$number_1 = mt_rand(1,100);
$percent_1 = 40;
$result_1 = $number_1/100*$percent_1;
echo '40% от случайного числа = ',$result_1,'<br>';
$number_2 = mt_rand(1,100);
$percent_2 = 84;
$result_2 = $number_2/100*$percent_2;
echo '84% от случайного числа = ',$result_2,'<br>';
echo 'Сумма чисел = ',$result_1+$result_2;

//ЗАДАЧА 5

//Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.
$a = mt_rand(1,100);
if ($a >=10){
    echo $a+100;
}else{
    echo $a-30;
}
//Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.
$A = mt_rand(1,100);
if ($A%2 ==0){
    echo $A/2;
}else{
    echo $A*2;
}
/*Дано число. Если оно не меньше 50, то выведите квадрат этого числа,
если же это число больше 10 и меньше 30, то выведите ноль,
в остальных случаях выведите слово "Ошибка"*/
$b = mt_rand(1,100);
switch ($b){
    case $b>50:
        echo sqrt ($b);
        break;
    case  $b>=10 and $b<=30:
        echo '0';
        break;
    default:
        echo 'Ошибка';
}
//Дано два числа. Вывести наибольшее из них.
$c = 12; $d = 10;
echo ($c>$d) ? $c : $d;

//Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'
$a_1=mt_rand(1,100);
$a_2=mt_rand(1,100);
echo "Первое число равно $a_1, торое число равно $a_2. Результат вычислений:";
if (($a_1-$a_2)<=20){
    echo "Да";
}else{
    echo "Нет";
}

/*Дан номер месяца. Вывести название поры года (весна, лето и так далее)
или слово 'Ошибка', если месяца с таким номером не существует.*/
$month=mt_rand(1,15);
switch ($month){
    case $month>=1 and $month<=2:
        echo 'Зима';
        break;
    case $month>=3 and $month<=5:
        echo 'Весна';
        break;
    case $month>=6 and $month<=8:
        echo 'Лето';
        break;
    case $month>=9 and $month<=11:
        echo 'Осень';
        break;
    case $month==12:
        echo 'Зима';
        break;
    default:
        echo 'Ошибка';
}

//ЗАДАЧА 6
//Составить таблицу и определить тип переменной;

$x = array("", null, false, true, 1, 42, 0, -1, "1", "0", "-1", "php", "true", "false");
echo '<table border = 1>';
echo '<tr>','<td>', gettype($x[0]),'</td>','<td>', empty($x[0]),'</td>','<td>', isset($x[0]),'</td>','<td>',(bool)$x[0],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[1]),'</td>','<td>', empty($x[1]),'</td>','<td>', isset($x[1]),'</td>','<td>',(bool)$x[1],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[2]),'</td>','<td>', empty($x[2]),'</td>','<td>', isset($x[2]),'</td>','<td>',(bool)$x[2],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[3]),'</td>','<td>', empty($x[3]),'</td>','<td>', isset($x[3]),'</td>','<td>',(bool)$x[3],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[4]),'</td>','<td>', empty($x[4]),'</td>','<td>', isset($x[4]),'</td>','<td>',(bool)$x[4],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[5]),'</td>','<td>', empty($x[5]),'</td>','<td>', isset($x[5]),'</td>','<td>',(bool)$x[5],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[6]),'</td>','<td>', empty($x[6]),'</td>','<td>', isset($x[6]),'</td>','<td>',(bool)$x[6],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[7]),'</td>','<td>', empty($x[7]),'</td>','<td>', isset($x[7]),'</td>','<td>',(bool)$x[7],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[8]),'</td>','<td>', empty($x[8]),'</td>','<td>', isset($x[8]),'</td>','<td>',(bool)$x[8],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[9]),'</td>','<td>', empty($x[9]),'</td>','<td>', isset($x[9]),'</td>','<td>',(bool)$x[9],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[10]),'</td>','<td>', empty($x[10]),'</td>','<td>', isset($x[10]),'</td>','<td>',(bool)$x[10],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[11]),'</td>','<td>', empty($x[11]),'</td>','<td>', isset($x[11]),'</td>','<td>',(bool)$x[11],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[12]),'</td>','<td>', empty($x[12]),'</td>','<td>', isset($x[12]),'</td>','<td>',(bool)$x[12],'</td>','</tr>';
echo '<tr>','<td>', gettype($x[13]),'</td>','<td>', empty($x[13]),'</td>','<td>', isset($x[13]),'</td>','<td>',(bool)$x[13],'</td>','</tr>';
echo '</table>';

//ЗАДАЧА 7
//Написать код, который выбирает из трех чисел то, которое находится между двумя другими
//Не понял как выполнить задачу

//ДОПОЛНИТЕЛЬНЫЕ ЗАДАЧИ
/*ЗАДАЧА 2
Реализовать функцию перевода 10-го числа в двоичное*/

function binary ($number){
    echo '<table border="1" cellpadding="5">';
        echo '<tr bgcolor="#9fd1ff">';
            echo '<td>','Десятичное число','</td>','<br>';
            echo '<td>','Двоичное число','</td>','<br>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>',$number,'</td>','<br>';
            $bin = decbin($number);
            echo '<td>', $bin,'</td>','<br>';
        echo '</tr>';
    echo '</table>';
}

binary(mt_rand(1,1984));