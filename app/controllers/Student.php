<?php
class Student extends Controller
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
        $this->view('student/dashboard', $data);
    }

    public function profile()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('student/profile', $data);
    }
}
