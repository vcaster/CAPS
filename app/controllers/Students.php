<?php
class Students extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('portals/login');
        } elseif ($_SESSION['user_cat'] != 3) {
            redirect('portals/login');
        }

        $this->stdModel = $this->model('Student');
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
        $adm = $this->stdModel->getAdmS();
        $score = $this->stdModel->getScore();
        if ($adm >= 1) {
            $data =[
            'adm' => 'YES',
            'scr' => $score,
            'off' => 2
            ];
        } else {
             $data =[
            'adm' => 'NO',
            'scr' => $score,
            'off' => 2
             ];
        }
       
        $this->view('students/dashboard', $data);
    }

    public function profile()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data =[
            'email' => trim($_POST['email']),
            'phonen' => trim($_POST['phonen']),
            'nationality' => trim($_POST['nationality']),
            'address' => trim($_POST['address']),
            ];

            if ($this->stdModel->stdUpt($data)) {
                 flash('post_message', 'Profile Updated.');
                    redirect("students/profile");
            } else {
                die('Something went wrong');
            }
        } else {
            $std = $this->stdModel->getStdP();

            $data = [
            'std' => $std
            ];
            $this->view('students/profile', $data);
        }
    }

    public function Logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_cat']);
        session_destroy();
        redirect('portals/login');
    }
}
