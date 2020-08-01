<?php

use App\Controllers\Article;
use App\Controllers\Index;

require __DIR__ . '/autoload.php';

$ctrl = new Article();
$ctrl->action();

/*
if ( isset($_GET['id']) && !empty($_GET['id']) ) {
    $view = new View();

    //берем статью под соотвествующим id
    $view->article = Article::findById($_GET['id']);

    $content = $view->redner(__DIR__ . '/App/Templates/zzz_article.php');

    echo $content;
} else {
    echo 'Такой статьи не существует, вернитесь в <a href="/">список новостей</a>';
}
*/
