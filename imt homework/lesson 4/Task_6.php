<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 6</title>
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
    <h1 align="center" class="h">Задача 6</h1>
    <p align="center">Сгенерировать массив из 10-ти случайных чисел. После этого,
        сгенерировать одно случайно число и проверить, входи ли оно в данный массив.
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="5">
        <tr>
            <th>
                Массив из 10 чисел
            </th>
            <th>
                Взлом массива случайным числом
                <?php $rand = mt_rand(1,10);?>
                <?php echo $rand ?>
            </th>
        </tr>
        <?php $arr =array();?>
        <?php for($i=0; $i<10; $i++):?>
            <?php $arr[$i] = rand(0,10);?>
        <?php endfor;?>
        <tr>
            <td><?php echo "<pre>";print_r($arr); ?></td>
            <td align="center"><?php if (in_array($rand,$arr)):?>
                    <?php echo "Тревога! Совпадение! Вызвать штурмовиков!";?>
                <?php else: echo "Совпадений нет!";?>
            </td>
        </tr>
    <?php endif;?>
    </table>
</div>
</body>
</html>

