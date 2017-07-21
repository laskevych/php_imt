<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
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
    </style>
</head>
<body>
<div>
    <h1 align="center" class="h">Задача 2</h1>
    <p align="center">Создать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.
        Результат вывести в виде таблицы (офорить ее рамкой)
    </p>
</div>
<div>
    <table border="1" align="center" cellpadding="5">
        <tr>
            <th>
                Столбик 1
            </th>
            <th>
                Столбик 2
            </th>
        </tr>
        <?php $x = array();?>
        <?php for ($y = 0;$y <=1000; $y++):?>
            <tr>
                <td><?php echo $y; ?></td>
                <td><?php $x[$y] = pow($y, 2);
                    print ($x[$y]); ?>
                </td>
            </tr>
        <?php endfor;?>
    </table>
</div>
</body>
</html>