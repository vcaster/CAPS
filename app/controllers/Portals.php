<?php
class Portals extends Controller
{

    public function __construct()
    {

        $this->portalModel = $this->model('Portal');
    }

    public function register()
    {
        if (isset($_POST['submitreg'])) {
          // Process form
          // Process form
              // die('sa');
          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
            $courses = $this->portalModel->getCourses();
            $states = $this->portalModel->getState();
            $insts = $this->portalModel->getInst();
            $data =[
            // 'depts' => $depts,
            'insts' => $insts,
            'states' => $states,
            'courses' => $courses,
            'fname' => trim($_POST['fname']),
            'lname' => trim($_POST['lname']),
            'mname' => trim($_POST['mname']),
            'email' => trim($_POST['email']),
            'phonen' => trim($_POST['phonen']),
            'nationality' => trim($_POST['nationality']),
            'address' => trim($_POST['address']),
            'state' => trim($_POST['state']),
            'cos' => trim($_POST['cos']),
            'localgov' => trim($_POST['localgov']),
            'Institution' => trim($_POST['Institution']),
            'sex' => trim($_POST['sex']),
            'birthdate' => trim($_POST['birthdate']),
            // 'age' => trim($_POST['age']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'dept_err' => '',
            'password_err' => '',
            'age_err' => '',
            'confirm_password_err' => '',
            'sex_err' => '',
            'birthdate_err' => '',
            'cos_err' => '',
            'phonen_err' => '',
            'localgov_err' => '',
            'nationality_err' => '',
            'Institution_err' => '',
            'state_err' => '',
            'address_err' => '',
            'fname_err' => '',
            'lname_err' => '',
            'mname_err' => '',
            'email_err' => ''
            ];


          // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
              // Check email
                if ($this->portalModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

          // Validate Name
            if (empty($data['fname'])) {
                $data['fname_err'] = 'Please enter first name';
            }
            if (empty($data['lname'])) {
                $data['lname_err'] = 'Please enter last name';
            }
            if (empty($data['mname'])) {
                $data['mname_err'] = 'Please enter middle name';
            }
          //other validation
            if (empty($data['phonen'])) {
                $data['phonen_err'] = 'Please enter phone number';
            }
            if (empty($data['nationality'])) {
                $data['nationality_err'] = 'Please enter nationality';
            }
            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter address';
            }
            if (empty($data['localgov'])) {
                $data['localgov_err'] = 'Please enter local goverment';
            }
            if (empty($data['cos'])) {
                $data['cos_err'] = 'Please select course';
            }
            if (empty($data['Institution'])) {
                $data['Institution_err'] = 'Please select Institution';
            }
            if (empty($data['state'])) {
                $data['state_err'] = 'Please select State';
            }
            if (empty($data['birthdate'])) {
                $data['birthdate_err'] = 'Please enter birth date';
            }
            if (empty($data['sex'])) {
                $data['sex_err'] = 'Please select sex';
            }
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Pleae enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

          // Validate Confirm Password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            }

          // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) &&
            empty($data['lname_err']) && empty($data['mname_err']) &&
            empty($data['phonen_err']) && empty($data['nationality_err']) &&
            empty($data['address_err']) && empty($data['position_err']) &&
            empty($data['dept_err'])  && empty($data['birthdate_err']) &&
            empty($data['sex_err']) && empty($data['age_err']) && empty($data['password_err']) &&
            empty($data['confirm_password_err'])) {
              // Validated
              //Hash PASSWORD
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              //Register Users
                if ($this->portalModel->register($data)) {
                    flash('registered', 'User registered and can login now.');
                    redirect('portals/login');
                } else {
                    die('Something went wrong');
                }
            } else {
              // Load view with errors
                $this->view('portals/register', $data);
            }
        } else {
          // Init data
          // (isset($_POST['position'])) ? $_POST['position'] :
            // $depts = $this->userModel->getDept();
            // $positions = $this->userModel->getPosition();
            // $depts = $this->portalModel->getPositionsA();
            $courses = $this->portalModel->getCourses();
            $states = $this->portalModel->getState();
            $insts = $this->portalModel->getInst();
            $data =[
            // 'depts' => $depts,
            'insts' => $insts,
            'states' => $states,
            'courses' => $courses,
            'fname' => '',
            'lname' => '',
            'mname' => '',
            'email' => '',
            'phonen' => '',
            'Institution' => '',
            'localgov' => '',
            'nationality' => '',
            'address' => '',
            'sex' => '',
            'state' => '',
            'birthdate' => '',
            'cos' => '',
            'password' => '',
            'confirm_password' => '',
            'dept_err' => '',
            'password_err' => '',
            'cos_err' => '',
            'confirm_password_err' => '',
            'sex_err' => '',
            'birthdate_err' => '',
            'localgov_err' => '',
            'Institution_err' => '',
            'state_err' => '',
            'phonen_err' => '',
            'fname_err' => '',
            'nationality_err' => '',
            'position_err' => '',
            'address_err' => '',
            'lname_err' => '',
            'mname_err' => '',
            'email_err' => '',
            ];
            


          // Load view
            $this->view('portals/register', $data);
        }
    }
    public function login()
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
            $data =[
            'email' => trim($_POST['email']),
            //'password' => trim($_POST['password']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
            ];

          // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

          // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

          
          // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
              // Validated
              //check and set Login
                $checkExam = $this->portalModel->checkExam($data['email']);
                $checkUni = $this->portalModel->checkUni($data['email']);
                $checkStd = $this->portalModel->checkStd($data['email']);

                if ($checkExam) {
                    $loggedInExam = $this->portalModel->loginE($data['email'], $data['password']);
                    if ($loggedInExam) {
                        $this->createUserSession($loggedInExam);
                    } else {
                        $data['password_err'] = "Incorrect Username or Password";
                        $this->view('portals/login', $data);
                    }
                }
                if ($checkUni) {
                    $loggedInUni = $this->portalModel->loginU($data['email'], $data['password']);
                    if ($loggedInUni) {
                        $this->createUserSession($loggedInUni);
                    } else {
                        $data['password_err'] = "Incorrect Username or Password";
                        $this->view('portals/login', $data);
                    }
                }
                if ($checkStd) {
                    $loggedInStd = $this->portalModel->loginS($data['email'], $data['password']);
                    if ($loggedInStd) {
                        $this->createUserSession($loggedInStd);
                    } else {
                        $data['password_err'] = "Incorrect Username or Password";
                        $this->view('portals/login', $data);
                    }
                }
            } else {
              // Load view with errors
                $this->view('portals/login', $data);
            }
        } else {
          // Init data
            $data =[
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',
            ];

          // Load view
            $this->view('portals/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->username;
        $_SESSION['user_cat'] = $user->statusU;

        if ($_SESSION['user_cat'] == 1) {
            redirect("exambody/dashboard");
        } elseif ($_SESSION['user_cat'] == 2) {
            redirect("university/dashboard");
        } elseif ($_SESSION['user_cat'] == 3) {
            redirect("student/dashboard");
        }
    }

    public function Logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_lname']);
        session_destroy();
        redirect('users/login');
    }
}
