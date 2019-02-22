<?php
class Exambody extends Controller
{

    public function __construct()
    {

        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $posts = $this->postModel->getPosts();

        $data = [
        'title' => 'Welcome',
        'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function dashboard()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/dashboard', $data);
    }

    public function universities()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/universities', $data);
    }

    public function reguni()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/reguni', $data);
    }

    public function uniedit()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/uniedit', $data);
    }

    public function courseedit()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/courseedit', $data);
    }

    public function regcourse()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/regcourse', $data);
    }

    public function cutoff()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambody/cutoff', $data);
    }
}
