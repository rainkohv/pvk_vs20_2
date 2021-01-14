<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index(){
        // echo 'index method is loaded<br>';
        $data = array(
            'title' => 'Welcome to pages',
            'content' => 'Pages view is loaded by MVC'
        );
        $this->view('pages/index', $data);
    }

    public function about(){
        //modeltest
        $this->pagesModel->addUser();
        $users = $this->pagesModel->getUsers();
        print_r($users);
        // echo 'about method is loaded<br>';
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }
}