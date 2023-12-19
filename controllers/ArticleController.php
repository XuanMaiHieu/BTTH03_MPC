<?php
require_once 'models/Article.php';

class ArticleController
{
    // Display a list of articles
    public function index()
    {
        $articles = Article::getAll();
        require 'D:\WebEnv\nginx-1.24.0\nginx-1.24.0\html\BTTH03_MVC\views\articles\index.php';
    }

    // Display the article creation form
    public function create()
    {
        require 'views/articles/create.php';
    }

    // Store a newly created article in the database
    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $articles = new Article();
        $articles->setTitle($title);
        $articles->setContent($content);
        $articles->save();

        header('Location: index.php?controller=article&action=index');
    }

    // Display the article editing form
    public function edit()
    {
        $id = $_GET['id'];
        $articles = Article::getById($id);
        require 'views/articles/edit.php';
    }

    // Update the specified article in the database
    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $articles = Article::getById($id);
        $articles->setTitle($title);
        $articles->setContent($content);
        $articles->save();

        header('Location: index.php?controller=article&action=index');
    }

    // Delete the specified article from the database
    public function delete()
    {
        $id = $_GET['id'];
        $articles = Article::getById($id);
        $articles->delete();

        header('Location: index.php?controller=article&action=index');
    }
}
?>
