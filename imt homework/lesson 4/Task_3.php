<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
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
        tr,td,th{
            font-size: 15px;
        }
    </style>
</head>
<body>
<div>
    <h1 align="center" class="h">Задача 3</h1>
    <p align="center">Создайте массив из 1000 случайных чисел.
        Определите, есть ли в массиве повторяющиеся элементы
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="5" style="border: #000000">
        <tr>
            <th>Случайный массив</th>
            <th>Сколько повторяющихся элеметов?</th>
            <th>Сортированый массив</th>
        </tr>
        <?php $arr = array();?>
        <?php for ($y = 0;$y <=50; $y++):$arr[$y] = mt_rand(0,100)?>
        <?php endfor;?>
        <tr>
            <td><?php echo '<pre>',print_r($arr); ?></td>
            <td><?php echo '<pre>',print_r(array_count_values($arr)); ?></td>
            <td><?php sort($arr); echo '<pre>',print_r(array_unique($arr)); ?></td>
        </tr>
    </table>
</div>
</body>
</html>
