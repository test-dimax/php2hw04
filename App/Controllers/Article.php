<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article as ArticleModel;
use App\View\View;

class Article extends Controller
{

    public function handle()
    {
        $this->view->article = ArticleModel::findById($_GET['id']);

        $content = $this->view->redner(__DIR__ . '/../Templates/article.php');

        echo $content;
    }


}