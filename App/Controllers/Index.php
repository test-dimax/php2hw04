<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;
use App\View\View;

class Index extends Controller
{

    public function handle()
    {
        $this->view->news = Article::findAll();

        $content = $this->view->redner(__DIR__ . '/../Templates/news.php');

        echo $content;
    }

}
