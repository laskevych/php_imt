<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 8</title>
    <style>
        * {
            font-family: sans-serif;
        }
        .h {
            font-size: 25px;
            color: mediumslateblue;
        }
        p {
            font-size: 16px;
        }
        table{
            border-color: black;
        }
    </style>
</head>
<body>
<div>
    <h1 align="center" class="h">Задача 8</h1>
    <p align="center">Создать два массива из 10-ти случайных чисел.
        Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="3">
        <tr>
            <th>Массив 1</th>
            <th>Массив 2</th>
            <th>Схождение массивов</th>
            <th>Расхождение массивов</th>
        </tr>
            <?php $arr =array();?>
            <?php for($i=0; $i<10; $i++):?>
                <?php $arr[$i] = rand(0,10);?>
                    <?php endfor;?>
            <?php $arr2 =array();?>
            <?php for($i=0; $i<10; $i++):?>
                <?php $arr2[$i] = rand(0,10);?>
                    <?php endfor;?>
        <tr>
            <td><pre><?php print_r($arr); ?></pre></td>
            <td><pre><?php print_r($arr2); ?></pre></td>
            <td><pre><?php print_r(array_intersect($arr,$arr2)); ?></pre></td>
            <td><pre><?php print_r(array_diff($arr,$arr2)); ?></pre></td>
        </tr>
    </table>
</div>
</body>
</html>
