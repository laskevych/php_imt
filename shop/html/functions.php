<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',true);
error_reporting(E_ALL);

require_once "data/menu.php";
require_once "data/categories.php";
require_once "data/products.php";

/*Построение дерева категорий*/
function makeTree($categories,$parent_id=0) {
    $results=array();
    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                if ($category->id!=$parent_id) {
                    $subcategories = makeTree($categories,$category->id);
                    if(!empty($subcategories))
                        $category->subcategories = $subcategories ;
                }
                $results[]=$category;
                unset($category);
            }
        }
    }
    return $results;
}
/*Вывод дерева категорий*/
function viewCategories($categories) {
    if($categories) { // проверка лишней не бывает
        echo "<ol>";
        foreach ($categories as $category) {
            if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
                echo
                    "<li>
                    <a href='?r=categories&id=".$category->id."'>$category->name</a>
                </li>";
                if(isset($category->subcategories)) {
                    // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                    viewCategories($category->subcategories); // передаем в функцию уже массив обьектов покатегорий
                }
            }
        }
        echo "</ol>";
    }
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function viewMenu($pages) {
    if($pages) {
        echo '<ul class="list-inline">';
        foreach ($pages as $page) {
            if ($page->visible && $page->menu_id == 1) {
                if($page->url == '') {
                    echo "<li class='list-inline-item'><a href='".$_SERVER['SCRIPT_NAME']."'>$page->name</a></li>";
                } else {
                    echo "<li class='list-inline-item'><a href='?r=pages&id=".$page->id."'>$page->name</a></li>";
                }
            }
        }
        echo '</ul>';
    }
}

function getPage($pages,$page_id) {
    if($page_id) {
        return $pages[$page_id];
    }
}

function getProduct($products,$id) {
    if($id) {
        return $products[$id];
        //дальше сами) Ретурна не было 5 дней назад
    }
}

/*COOKIES*/
function getLastTime(){
  if ($_COOKIE['lasttime']){
      echo 'Последняя дата посещения сайта:  '.$_COOKIE['lasttime'];
  }else{
      echo 'Вы у нас впервые? Осмотритесь! Тут много крутых вещей!';
  }
}


/*Футер*/
function getFooter(){
    echo 'Это тестовая версия','<br>';
    echo 'an.laskevych@gmail.com';
    echo '<br>';
    getLastTime();
}


/*Код Саши. Корзина*/
if(isset($_GET['amount']) && isset($_GET['id'])) {
    $cart = array();
    $product_id = trim(strip_tags($_GET['id']));
    $amount = trim(strip_tags($_GET['amount']));
    if(isset($_COOKIE['cart'])) {
        $cart = unserialize($_COOKIE['cart']);
    }
    $cart[$product_id] = $amount;
    setcookie('cart',serialize($cart),time()+(60*60*24*30),'/');
    $path = '?r=product&id='.$_GET['id'];
    header("Location: $path");
}
function getCart($products) {
    $cart_products = array();
    $total_amount = 0;
    $total_price = 0;
    $cart = new stdClass();
    if(isset($_COOKIE['cart'])) {
        $ids = unserialize($_COOKIE['cart']);
        foreach ($ids as $id=>$amount) {
            $cart_products[$id] = getProduct($products,$id);
            $cart_products[$id]->amount = $amount;
            $total_price += $cart_products[$id]->variant->price*$amount;
            $total_amount += $amount;
        }
        $cart->items = $cart_products;
    }
    $cart->total_price = $total_price;
    $cart->total_amount = $total_amount;
    return $cart;
}

/*Очистить корнизну*/
function getClearCart ($cart){
    if (isset($_COOKIE['cart'])){
        unset($cart);
        setcookie('cart', null, time()-3600,'/');
        return true;
    }else{
        return false;
    }
}

/*Сформировать заказ*/
$orderName = fopen('files/orders.txt','a+');
    $username = trim($_POST['username']);
    $userlastname = trim($_POST['userlastname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $comment = trim($_POST['comment']);
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];
    $productamount = $_POST['productamount'];


    fwrite($orderName,"===============Заказ №".rand(1,600)."==============="."\n");
    fwrite($orderName,"Имя:" .$username."\n");
    fwrite($orderName,"Фамилия:" .$userlastname."\n");
    fwrite($orderName,"Email:" .$email."\n");
    fwrite($orderName,"Телефон:" .$phone."\n");
    fwrite($orderName,"Адрес доставик:" .$address."\n");
    fwrite($orderName,"Комментарий:" .$comment."\n");
    fwrite($orderName,"Список товаров:" ."\n");
    fwrite($productname, ""."\n");

    //setcookie("cart", "", time()-3600, '/');

/*Регулярное выражение для формы регистрации*/

if($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['registration'])
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];
   if (!preg_match("/[a-z]{4,}[0-9]{1,}/",$login))
   {
       unset($login);
   }
   elseif (!preg_match("/[a-z0-9\?\/\-\*]{4,}/",$password))
   {
       unset($password);
   }
   elseif (!preg_match("/[а-яА-Я\-]{2,}/",$username))
   {
       unset($username);
   }
   elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email))
   {
       unset($email);
   }
   else
   {
       getRegistration();
   }
}

function getRegistration ()
{
    $registrationList = fopen('files/registration.txt','a+');
    fwrite($registrationList,"=============== Пользователь: ".$_POST['login']." ==============="."\n");
    fwrite($registrationList,"Login: ".$_POST['login']."\n");
    fwrite($registrationList,"Password: ".$_POST['password']."\n");
    fwrite($registrationList,"UserName: ".$_POST['username']."\n");
    fwrite($registrationList,"Email: ".$_POST['email']."\n");
    fclose($registrationList);
}



















