<?php

use App\Models\Article;
use \App\View\View;

require __DIR__ . '/autoload.php';

$view = new View();

$view->news = Article::findAll();

$content = $view->redner(__DIR__ . '/App/Templates/admin.php');

echo $content;
