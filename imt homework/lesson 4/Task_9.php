<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 9</title>
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
    <h1 align="center" class="h">Задача 9</h1>
    <p align="center">Создать массив из 50-ти случайных чисел. Генерируя случайно число,
        проверять есть ли такой ключ в данном массив.
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="5">
        <tr>
            <th>
                Массив из 50 чисел
            </th>
            <th>
                Взлом массива случайным ключем
                <?php $rand = mt_rand(1,100);?>
                <?php echo $rand ?>
            </th>
        </tr>
        <?php $arr =array();?>
        <?php for($i=0; $i<50; $i++):?>
            <?php $arr[$i] = rand(0,50);?>
        <?php endfor;?>
        <tr>
            <td><?php echo "<pre>";print_r($arr); ?></td>
            <td align="center"><?php if (array_key_exists($rand,$arr)):?>
                    <?php echo "Тревога! Похожий ключ! Вызвать штурмовиков!";?>
                <?php else: echo "Совпадений нет!";?>
            </td>
        </tr>
    <?php endif;?>
    </table>
</div>
</body>
</html>
