<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 5</title>
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

    <?php function generate ($length = 64) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $result = '';
        for ($i = 0; $i <= $length; $i++) {
            $result .= $characters[mt_rand (0, strlen ($characters) - 1)];
        }
        return $result;
    } //Как прафильно оформлять код php в html? Вот так как я сделал функцию или как ниже?
    ?>
</head>
<body>
<div>
    <h1 align="center" class="h">Задача 5</h1>
    <p align="center">Дана строка. Если ее длина больше 10 символов, то оставить в строке
        только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="5" style="border: #000000">
        <tr>
            <th>Случайный пароль</th>
            <td><?php echo $str = generate(rand(1,12)); ?></td>
        </tr>
        <?php $str_2 = strlen($str);?>
        <?php if ($str_2 >= 10):?>
            <?php $result = substr($str, 0, 6);?>
        <?php else:?>
            <?php for (($i = $str_2+1); $i <= 12; $i++):?>
                <?php   $result = str_pad($str, $i, '+');  ?>
            <?php endfor;?>
        <?php endif;?>
        <tr>
            <th>Обрезанный пароль</th>
            <td><?php echo $result ?></td>
        </tr>
    </table>
</div>
</body>
</html>
