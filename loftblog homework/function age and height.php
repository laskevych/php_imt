<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 09.07.2017
 * Time: 21:47
 */

function loftblog ($age, $height){
    switch ($age){
        case $age <18:
            echo "Вам $age Извините вы еще молоды для программирования",'<br>';
            break;
        case $age >=18 && $age<70:
            echo "Вам $age Вы готовы обучатся программированию",'<br>';
            break;
        default:
            echo "Некорректный возраст",'<br>';
    }
    switch ($height) {
        case $height <175:
            echo "Ваш рост $height Извините вы еще молоды для программирования",'<br>';
            break;
        case $height >=175 && $age<220:
            echo "Ваш рост $height Вы готовы обучатся программированию",'<br>';
            break;
        default:
            echo "Некорректный рост",'<br>';
    }
}

loftblog(23,183);
