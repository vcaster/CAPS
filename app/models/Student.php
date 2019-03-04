<?php
class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getStdP()
    {
        $status = '0';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN institution i ON s.institution=i.institutionID INNER JOIN course c ON s.courseofstudy=c.courseID INNER JOIN result r ON s.result=r.resultID INNER JOIN state st ON s.state=st.id WHERE s.email = :email ');
        // $this->db->bind(':status', $status);
        $this->db->bind(':email', $_SESSION['user_id']);
        $row = $this->db->single();

        return $row;
    }

    public function stdUpt($data)
    {
        // $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE studentdetails SET email= :email1, phoneno= :phonen, nationality= :nationality, address= :address WHERE email = :email');
        $this->db->bind(':email', $_SESSION['user_id']);
        $this->db->bind(':email1', $data['email']);
        $this->db->bind(':phonen', $data['phonen']);
        $this->db->bind(':nationality', $data['nationality']);
        $this->db->bind(':address', $data['address']);
        // $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAdmS()
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('SELECT courseApp FROM studentdetails WHERE email = :email AND courseApp = :status');
        $this->db->bind(':email', $_SESSION['user_id']);
        $this->db->bind(':status', $status);
        if ($this->db->execute()) {
            $row = $this->db->single();
            $roww = $this->db->rowCount();

            return $roww;
        } else {
            return false;
        }
    }

    public function getScore()
    {
        // $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN result r ON s.result=r.resultID WHERE email = :email ');
        $this->db->bind(':email', $_SESSION['user_id']);
        // $this->db->bind(':status', $status);
        $row = $this->db->single();

        return $row;
    }
}
