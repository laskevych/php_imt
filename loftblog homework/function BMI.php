<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 09.07.2017
 * Time: 20:42
 * Функция высчитавает Ваш ИМТ (индекс массы тела)
 * Выводил предупреждение на экран
 */

function BMI ($m, $h) {
    $total = $m / pow ($h,2);
    echo 'Ваш индекс массы тела равен: '.round($total, 2),'<br>';

    switch ($total) {
        case $total<16: echo 'У Вас выраженный дефицит массы тела';
            break;
        case $total>=16 && $total<=18.5: echo 'У Вас недостаточная (дефицит) масса тела';
            break;
        case $total>18.5 && $total<=24.99: echo 'У Вас нормальный вес';
            break;
        case $total>25 && $total<30: echo 'У Вас избыточная масса тела';
            break;
        case $total>=30 && $total<=35: echo 'У Вас ожирение первой степени';
            break;
        case $total>35 && $total<=40: echo 'У Вас ожирение второй степени';
            break;
        case $total>40: echo 'У Вас ожирение третьей степени';
            break;
        default: echo 'Вы не правильно ввели значения';
    }
}
BMI(mt_rand(60, 160),mt_rand(1.2, 2.2));