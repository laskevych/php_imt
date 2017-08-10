<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',true);
error_reporting(E_ALL);

require_once "data/menu.php";
require_once "data/categories.php";
require_once "data/products.php";

/*Вывод меню*/
function viewMenu($pages) {
    if($pages) {
        echo "<ul>";
        foreach ($pages as $page) {
            if ($page->visible && $page->menu_id == 1) {
                if($page->url == '') {
                    echo "<li><a href='?r=pages&id=".$page->id."'>$page->name</a></li>";
                }
            }
        }
        echo "</ul>";
    }
}

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
        echo "<ul>";
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
        echo "</ul>";
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
        //дальше сами) ретурна не было 5 дней назад
    }
}

/*Вывод cookie о последнем посещении*/
//Еще работаю над этим

