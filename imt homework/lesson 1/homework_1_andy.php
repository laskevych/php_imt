<?php
//ЗАДАЧА 3
//Даны переменные $a=10 и $b=3. Найдите остаток от деления $a на $b
$a = 10; $b = 3;
echo $a % $b;
//Результат = 1


//ЗАДАЧА 4
/*Возведите 2 в 10 степень. Результат вывести на экран
Найдите квадратный корень из 245. ";*/
echo pow(2, 10);
echo sqrt(245);
//Результат = 1024,15.652475842499;


//ЗАДАЧА 5
//Вывести текующую дату
echo 'Сегодня: ', date('D, j F Y H:i:s');


//ЗАДАЧА 6
/*Найти сумму процентов от 5–ти заданных чисел
Исходные числа 100,200,300,400,500
Проценты от чисел по порядку – 10,20,30,40,50*/
$a = 100; $b = 200; $c = 300; $d = 400; $f = 500;
$aa = $a * 10 / 100;
$bb = $b * 20 / 100;
$cc = $c * 30 / 100;
$dd = $d * 40 / 100;
$ff = $f * 50 / 100;
echo $aa + $bb + $cc + $dd + $ff;
//Результат = 550
