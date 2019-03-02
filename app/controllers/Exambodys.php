<?php
class Exambodys extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('portals/login');
        } elseif ($_SESSION['user_cat'] != 1) {
            redirect('portals/login');
        }
        
        $this->exambodyModel = $this->model('Exambody');
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
        $cutoff = $this->exambodyModel->getCutoff();
        $rowUni = $this->exambodyModel->RowsUni();
        $rowCourse = $this->exambodyModel->RowsCourse();
        $data =[
        'body' => $cutoff,
        'uni' => $rowUni,
        'cos' => $rowCourse
        ];
        $this->view('exambodys/dashboard', $data);
    }

    public function universities()
    {
        $data = [
        'title' => 'Welcome'
        ];
        $this->view('exambodys/universities', $data);
    }

    public function reguni()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'uname' => trim($_POST['uname']),
            'uniname' => trim($_POST['uniname']),
            'pass' => trim($_POST['pass']),
            'cpass' => trim($_POST['cpass']),
            'pass_err' => '',
                       
            ];
            if ($data['pass'] != $data['cpass']) {
                $data['pass_err'] = 'Passwords do not match';
                die("Something went wrong: Passwords don\'t match");
            }
            if (empty($data['uname'])) {
                $data['confirm_password_err'] = 'Passwords do not match';
                die("Something went wrong: Username empty");
            }
            if (empty($data['uniname'])) {
                $data['confirm_password_err'] = 'Passwords do not match';
                die("Something went wrong: university empty");
            }
            if (empty($data['pass_err'])) {
                $data['cpass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
            
            
                if ($this->exambodyModel->reguni($data)) {
                    flash('post_message', 'University regsitered.');
                    redirect("exambodys/uniedit");
                } else {
                    die('Something went wrong');
                }
            }
        } else {
            $this->view('exambodys/reguni');
        }
    }

    public function uniedit()
    {
        // Get unis
        $unis = $this->exambodyModel->getUnies();

        $data = [
        'unis' => $unis
        ];

        $this->view('exambodys/uniedit', $data);
    }
    
    public function unidelete($id)
    {
        if ($this->exambodyModel->unidelete($id)) {
            flash('post_message', 'University Removed');
            redirect('exambodys/uniedit');
        } else {
            die('Something went wrong');
        }
    }

    public function coursedelete($id)
    {
        if ($this->exambodyModel->coursedelete($id)) {
            flash('post_message', 'Course Removed');
            redirect('exambodys/courseedit');
        } else {
            die('Something went wrong');
        }
    }

    public function courseedit()
    {
        // Get courses
        $courses = $this->exambodyModel->getCourses();

        $data = [
        'courses' => $courses
        ];
        $this->view('exambodys/courseedit', $data);
    }

    public function regcourse()
    {
                // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'course' => trim($_POST['course']),
            ];
                           
            if ($this->exambodyModel->regcourse($data)) {
                flash('post_message', 'Course regsitered.');
                redirect("exambodys/courseedit");
            } else {
                die('Something went wrong');
            }
        } else {
            $this->view('exambodys/regcourse');
        }
    }

    public function cutoff()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'cutoff' => trim($_POST['cutoff']),
            ];
                           
            if ($this->exambodyModel->regCutoff($data)) {
                flash('post_message', 'Cut off regsitered.');
                redirect("exambodys/cutoff");
            } else {
                die('Something went wrong');
            }
        } else {
            $cutoff = $this->exambodyModel->getCutoff();

            $data =[
            'body' => $cutoff
            ];

            $this->view('exambodys/cutoff', $data);
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
