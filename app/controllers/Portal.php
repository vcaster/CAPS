<?php
class Portal extends Controller
{

    public function __construct()
    {

        $this->postModel = $this->model('Post');
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
            $data =[
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
            'age' => trim($_POST['age']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'dept_err' => '',
            'password_err' => '',
            'age_err' => '',
            'confirm_password_err' => '',
            'sex_err' => '',
            'birthdate_err' => '',
            'phonen_err' => '',
            'localgov_err' => '',
            'nationality_err' => '',
            'Institution_err' => '',
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
                if ($this->userModel->findUserByEmail($data['email'])) {
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
                $data['localgov_err'] = 'Please choose local goverment';
            }
            if (empty($data['Institution'])) {
                $data['Institution_err'] = 'Please select Institution';
            }
            if (empty($data['dept'])) {
                $data['dept_err'] = 'Please select department';
            }
            if (empty($data['birthdate'])) {
                $data['birthdate_err'] = 'Please enter birth date';
            }
            if (empty($data['sex'])) {
                $data['sex_err'] = 'Please select sex';
            }
            if (empty($data['age'])) {
                $data['age_err'] = 'Please enter age';
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
                if ($this->userModel->register($data)) {
                    flash('registered', 'User registered and can login now.');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
              // Load view with errors
                $this->view('users/register', $data);
            }
        } else {
          // Init data
          // (isset($_POST['position'])) ? $_POST['position'] :
            // $depts = $this->userModel->getDept();
            // $positions = $this->userModel->getPosition();
            $depts = $this->userModel->getPositionsA();

            $data =[
            'depts' => $depts,
            'dept' => '',
            'position' => '',
            'fname' => '',
            'lname' => '',
            'mname' => '',
            'email' => '',
            'phonen' => '',
            'nationality' => '',
            'address' => '',
            'sex' => '',
            'birthdate' => '',
            'age' => '',
            'password' => '',
            'confirm_password' => '',
            'dept_err' => '',
            'password_err' => '',
            'age_err' => '',
            'confirm_password_err' => '',
            'sex_err' => '',
            'birthdate_err' => '',
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
            $this->view('portal/register', $data);
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

          // Check Emaill
            if ($this->userModel->findUserByEmail($data['email'])) {
            } else {
                $data['email_err'] = 'Email not found';
            }

          // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
              // Validated
              //check and set Login

                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = "Incorrect Username or Password";
                    $this->view('users/login', $data);
                }
            } else {
              // Load view with errors
                $this->view('users/login', $data);
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
            $this->view('portal/login', $data);
        }
    }
}
