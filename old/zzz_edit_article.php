<?php

use App\Models\Article;
use \App\View\View;

require __DIR__ . '/autoload.php';

$view = new View();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $view->article = Article::findById($_GET['id']);
}

$content = $view->redner(__DIR__ . '/App/Templates/edit.php');

echo $content;
