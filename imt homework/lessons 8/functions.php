<?php

/*//Запрашиваем имя гостя сайта
function getGuestBook(){

}

//Выводим гостевую книгу
function viewGuestBook(){
    $book = fopen('data.txt','a+'); // Дописываем файл
    fwrite($book,"\n RICK");
    fclose($book);
    fread($book,filesize('guestbook.txt'));
}*/

//Загрузка изображений
function getDownload (){
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $ext = array('png','jpg','txt','pdf');

        $name = $_FILES['filename']['name'];
        $file = $_FILES['filename']['tmp_name'];
        $file_ext = pathinfo($name,PATHINFO_EXTENSION);
        $base = pathinfo($name, PATHINFO_FILENAME);


        if(in_array($file_ext,$ext)) {
            while (file_exists('download/'.$name)) {
                $name = $base.rand(1,50).'.'.$file_ext;
            }
            $res = move_uploaded_file($file,'download/'.$name);
            if($res) {
                echo "Изображение загружено";

            } else {
                echo "Ошибка загрузки";
            }
        } else {
            echo "Не верный формат файла";
        }
    }
}
//Отображение изображений
function getView ()
{
    $dir = 'download';
    $files = scandir($dir);

    foreach ($files as $value) {
        if ($value != '.' and $value != '..') {
            echo '<div class="col-4 div-img"><img width="100%" src="download/'.$value.' ">',$value,'</div>';
        } else {
        }
    }
}
//Транслит
function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
}
