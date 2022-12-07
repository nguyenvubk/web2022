<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;


class NewsController extends Controller
{
    public function __construct()
    {
    }

    public function news() {
        return $this->render('news');
    }
    public function content() {
        return $this->render('content');
    }
    public function index() 
    {
        $this->setLayout('admin');
        return $this->render('/admin/news/news');      
    }
    public function update() 
    {
        $this->setLayout('admin');
        return $this->render('/admin/news/edit_news');      
    }
    public function create() 
    {
        $this->setLayout('admin');
        return $this->render('/admin/news/create_news');      
    }
    public function details() 
    {
        $this->setLayout('admin');
        return $this->render('/admin/news/details_news');      
    }
}
?>