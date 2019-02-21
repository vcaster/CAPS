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
        $deleted = 0;
        $hireDate = $DateTime;
        $status = 3;
        $statuss = 'Applicant';
        $this->db->query('INSERT INTO studentdetails (firstName,lastName,middleName,email,positionID,deptID,birthDate,age,sex,phone,nationality,address,password,hireDate,managerID,filesIDE,statusU)
      VALUES(:firstName, :lastName, :middleName, :email, :position, :dept, :birthDate, :age, :sex, :phone, :nationality, :address, :password, :hireDate, :manger, :files, :status, :statusu)');
        $this->db->bind(':firstName', $data['fname']);
        $this->db->bind(':lastName', $data['lname']);
        $this->db->bind(':middleName', $data['mname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':position', $data['position']);
        $this->db->bind(':dept', $data['dept']);
        $this->db->bind(':birthDate', $hireDate);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':phone', $data['phonen']);
        $this->db->bind(':nationality', $data['nationality']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':password', $data['password']);
      // $this->db->bind(':deleted', $deleted);
        $this->db->bind(':hireDate', $hireDate);
        $this->db->bind(':manger', $managerID);
        $this->db->bind(':files', $filesID);
        $this->db->bind(':statusu', $status);
        $this->db->bind(':status', $statuss);
        
      

      // $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        if ($this->db->execute()) {
            return true;
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
}
