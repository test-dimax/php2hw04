<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    Article::delete($_GET['id']);
    header('Location: /Admin.php');
    exit;
} else {
    echo 'Статьи которую вы пытаетесь удалить не существует. Вернитесь в <a href="Admin.php">панель администратора</a>';
}
