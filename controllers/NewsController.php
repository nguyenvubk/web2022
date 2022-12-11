<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\News;


class NewsController extends Controller
{
    public function __construct()
    {
    }

    public function news(Request $request) {
        if ($request->getMethod() == 'get') {
            if (!isset($_GET['page'])) {
                $page = 1;
            }
            else $page = Application::$app->request->getParam('page');
            $newsModel = News::getNewsActive($page, 5);
            $maxPage = floor((News::getCountActive()-1)/5) + 1;
            if ($maxPage < 1) $maxPage = 1;
        
            return $this->render('news', [
                'news' => $newsModel,
                'page' => $page,
                'maxPage' => $maxPage
            ]);
            
        }
        return $this->render('news');
    }
    public function content(Request $request) {
        if ($request->getMethod() == 'get') {
            $id = Application::$app->request->getParam('id');
            $newsObj = News::getNewsDetail($id);

            $relate = News::getNewsRelated($id);
            return $this->render('content', [
                'news' => $newsObj,
                'prev' => $relate['prev'],
                'next' => $relate['next']
            ]);


        }
    }
    public function index() 
    {
        $newsModel = News::getAllNews();
        $this->setLayout('admin');
        return $this->render('/admin/news/news', [
            'news' => $newsModel
        ]);      
    }
    public function update(Request $request) 
    {
        if ($request->getMethod() === 'get') {
            $id = Application::$app->request->getParam('id');
            $newsObj = News::getNewsDetail($id);
            $this->setLayout('admin');
            return $this->render('/admin/news/edit_news', [
                'news' => $newsObj
            ]);   
        }   
        else if ($request->getMethod() === 'post' ) {
            $id = Application::$app->request->getParam('id');
            $newsObj = News::getNewsDetail($id);
            $newsObj->loadData($request->getBody());
            $newsObj->update($newsObj);
            Application::$app->response->redirect('/admin/news/details?id='.$newsObj->getId());
        }
    }
    public function create(Request $request) 
    {
        if ($request->getMethod() === 'get' ) {
            $this->setLayout('admin');
            return $this->render('/admin/news/create_news');      
        }
        else if ($request->getMethod() === 'post') {
            $newsModel = new News();
            $newsModel->loadData($request->getBody());
            $newsModel->save();
            Application::$app->response->redirect('/admin/news');
        }
    }
    public function details(Request $request) 
    {
        if ($request->getMethod() === 'get') {
            $id = Application::$app->request->getParam('id');
            $newsObj = News::getNewsDetail($id);

            $this->setLayout('admin');
            return $this->render('/admin/news/details_news', [
                'news' => $newsObj
            ]);      
        }
    }
    public function delete(Request $request) 
    {
        if ($request->getMethod() === 'post') {
            $id = $request->getBody()['id'];
            $newsObj = News::getNewsDetail($id);
            $newsObj->delete();
            Application::$app->response->redirect('/admin/news');
        }
    }
}
?>