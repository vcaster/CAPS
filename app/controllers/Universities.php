<?php
class Universities extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('portals/login');
        } elseif ($_SESSION['user_cat'] != 2) {
            redirect('portals/login');
        }

        $this->uniModel = $this->model('University');
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
        $rowA = $this->uniModel->getStdR();
        $cos = $this->uniModel->getCutoffR();
        $mrk = $this->uniModel->getMarketR();
        $data =[
        'adm' => $rowA,
        'cos' => $cos,
        'mrk' => $mrk
        ];
        $this->view('universities/dashboard', $data);
    }

    public function studentprofile($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->uniModel->stdApp($id)) {
                 flash('post_message', 'Student Approved.');
                    redirect("universities/studentlist");
            } else {
                die('Something went wrong');
            }
        } else {
            $std = $this->uniModel->getStds($id);

            $data = [
            'std' => $std
            ];
            $this->view('universities/studentprofile', $data);
        }
    }

    public function studentapp()
    {
        // Get stds
        $std = $this->uniModel->getStd();

        $data = [
        'std' => $std
        ];
        $this->view("universities/studentapp", $data);
    }

    public function studentlist()
    {
        // Get stds
        $std = $this->uniModel->getStdA();

        $data = [
        'std' => $std
        ];
        $this->view("universities/studentlist", $data);
    }

    public function coursescutoff()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->uniModel->stdApp($id)) {
                 flash('post_message', 'Student Approved.');
                    redirect("universities/studentlist");
            } else {
                die('Something went wrong');
            }
        } else {
            $courses = $this->uniModel->getCourses();

            $data = [
            'courses' => $courses
            ];
            $this->view("universities/coursescutoff", $data);
        }
    }

    public function coursecutoffedit()
    {
        $cut = $this->uniModel->getCutoff();

        $data = [
        'cut' => $cut
        ];
        $this->view("universities/coursecutoffedit", $data);
    }

    public function courselist()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'uname' => trim($_POST['uname']),
            'uniname' => trim($_POST['uniname']),
             ];
        } else {
            $cut = $this->uniModel->getCutoff();

            $data = [
            'cut' => $cut
            ];
            $this->view("universities/courselist", $data);
        }
    }

    public function marketplace()
    {
        // Get stds
        $std = $this->uniModel->getMarket();

        $data = [
        'std' => $std
        ];
        $this->view("universities/marketplace", $data);
    }

    public function Logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_cat']);
        session_destroy();
        redirect('portals/login');
    }
}
