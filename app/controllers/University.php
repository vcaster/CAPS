<?php
class University extends Controller
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
        $this->view('university/dashboard', $data);
    }

    public function studentapp()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/studentapp", $data);
    }

    public function studentlist()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/studentlist", $data);
    }

    public function studentprofile()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/studentprofile", $data);
    }

    public function coursescutoff()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/coursescutoff", $data);
    }

    public function coursecutoffedit()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/coursecutoffedit", $data);
    }

    public function courselist()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/courselist", $data);
    }

    public function marketplace()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("university/marketplace", $data);
    }
}
