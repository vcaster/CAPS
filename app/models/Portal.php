<?php
class Portal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data)
    {
        date_default_timezone_set("Africa/Lagos");
        $CurrentTime=time();
        $DateTime=strftime("%Y-%m-%d", $CurrentTime);
        $managerID = 0;
        $filesID = 0;
        $result = 1;
        $hireDate = $DateTime;
        $status = 0;
        $statuss = 3;
        $this->db->query('INSERT INTO studentdetails (firstName,lastName,middleName,dateOfBirth,email,phoneno,state,localgovt,nationality,gender,courseofstudy,institution,address,result,status,username,password,statusU)
      VALUES(:firstName, :lastName, :middleName, :birthDate, :email, :phone, :state, :localgov, :nationality, :sex, :cos, :Institution, :address, :result, :status, :username, :password, :statuss)');
        $this->db->bind(':firstName', $data['fname']);
        $this->db->bind(':lastName', $data['lname']);
        $this->db->bind(':middleName', $data['mname']);
        $this->db->bind(':birthDate', $data['birthdate']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phonen']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':localgov', $data['localgov']);
        $this->db->bind(':nationality', $data['nationality']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':cos', $data['cos']);
        $this->db->bind(':Institution', $data['Institution']);
        $this->db->bind(':result', $result);
        $this->db->bind(':status', $status);
        $this->db->bind(':statuss', $statuss);
        $this->db->bind(':username', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':password', $data['password']);
        // var_dump($data['email']);
      // $this->db->bind(':deleted', $deleted);
        // $this->db->bind(':hireDate', $hireDate);
        // $this->db->bind(':manger', $managerID);
        // $this->db->bind(':files', $filesID);
        // $this->db->bind(':statusu', $status);
        // $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // login User
    public function loginE($email, $password)
    {
        $this->db->query('SELECT * FROM body WHERE username = :email ');
        $this->db->bind(':email', $email);
      // $this->db->bind(':fname', $password);


        $row = $this->db->single();

      // if($row){
      //   return $row;
      // }else{
      //   return fasle;
      // }

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }
        // login User
    public function loginU($email, $password)
    {
        $this->db->query('SELECT * FROM institution WHERE username = :email ');
        $this->db->bind(':email', $email);
      // $this->db->bind(':fname', $password);


        $row = $this->db->single();

      // if($row){
      //   return $row;
      // }else{
      //   return fasle;
      // }

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

       // login User
    public function loginS($email, $password)
    {
        $this->db->query('SELECT * FROM studentdetails WHERE email = :email ');
        $this->db->bind(':email', $email);
      // $this->db->bind(':fname', $password);


        $row = $this->db->single();

      // if($row){
      //   return $row;
      // }else{
      //   return fasle;
      // }

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }
    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM studentdetails WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

      // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
        //  die("asa");
            return false;
        }
    }

    public function checkExam($email)
    {
        $this->db->query('SELECT * FROM body WHERE username = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

      // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
        //  die("asa");
            return false;
        }
    }

    public function checkUni($email)
    {
        $this->db->query('SELECT * FROM institution WHERE username = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

      // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
        //  die("asa");
            return false;
        }
    }

    public function checkStd($email)
    {
        $this->db->query('SELECT * FROM studentdetails WHERE username = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

      // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
        //  die("asa");
            return false;
        }
    }

    public function getCourses()
    {
        $this->db->query(' SELECT * FROM course');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getState()
    {
        $this->db->query(' SELECT * FROM state');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getInst()
    {
        $this->db->query(' SELECT * FROM institution');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();
        return $results;
    }
}
