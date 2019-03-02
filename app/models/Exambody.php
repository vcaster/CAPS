<?php
class Exambody
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function reguni($data)
    {
        $status = 2;
        $this->db->query('INSERT INTO institution (institutionName,username,password,statusU) VALUES( :intname, :username, :password, :status)');
        $this->db->bind(':intname', $data['uniname']);
        $this->db->bind(':username', $data['uname']);
        $this->db->bind(':password', $data['cpass']);
        $this->db->bind(':status', $status);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function regcourse($data)
    {
        $status = 2;
        $dept = 2;
        $this->db->query('INSERT INTO course (courseName,deptID) VALUES( :cname, :dept)');
        $this->db->bind(':cname', $data['course']);
        $this->db->bind(':dept', $dept);
        // $this->db->bind(':status', $status);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUnies()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM institution WHERE deleted = :status  ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCutoff()
    {
        $status = '1';
        $this->db->query(' SELECT cutOff FROM body WHERE bodyID = :status  ');
        $this->db->bind(':status', $status);
        $row = $this->db->single();

        return $row;
    }

    public function getCourses()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM course WHERE deleted = :status  ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function unidelete($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE institution SET deleted= :status WHERE institutionID = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function regCutoff($data)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query("UPDATE body SET cutOff= :cutoff WHERE bodyID = :status");
        $this->db->bind(':cutoff', $data['cutoff']);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function coursedelete($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE course SET deleted= :status WHERE courseID = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function RowsUni()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM institution WHERE deleted = :status');
        $this->db->bind(':status', $status);
        $row = $this->db->single();
        $roww = $this->db->rowCount();

        return $roww;
    }

    public function RowsCourse()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM course WHERE deleted = :status');
        $this->db->bind(':status', $status);
        $row = $this->db->single();
        $roww = $this->db->rowCount();

        return $roww;
    }
}
