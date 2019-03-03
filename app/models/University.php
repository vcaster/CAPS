<?php
class University
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getStd()
    {
        $app = '0';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN institution i ON s.institution=i.institutionID INNER JOIN course c ON s.courseofstudy=c.courseID INNER JOIN result r ON s.result=r.resultID INNER JOIN state st ON s.state=st.id WHERE courseApp = :app AND i.username = :uname');
        $this->db->bind(':app', $app);
        $this->db->bind(':uname', $_SESSION['user_id']);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCutoff()
    {
        // $app = '0';
        $this->db->query('SELECT * FROM cut_off cu INNER JOIN institution i ON cu.institutionID=i.institutionID INNER JOIN course c ON cu.courseID=c.courseID WHERE i.username = :uname');
        // $this->db->bind(':app', $app);
        $this->db->bind(':uname', $_SESSION['user_id']);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCutoffR()
    {
        // $app = '0';
        $this->db->query('SELECT * FROM cut_off cu INNER JOIN institution i ON cu.institutionID=i.institutionID INNER JOIN course c ON cu.courseID=c.courseID WHERE i.username = :uname');
        // $this->db->bind(':app', $app);
        $this->db->bind(':uname', $_SESSION['user_id']);
        $row = $this->db->single();
        $roww = $this->db->rowCount();

        return $roww;
    }

    public function getMarket()
    {
        $app = '0';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN result r ON s.result=r.resultID INNER JOIN course c ON s.courseofstudy=c.courseID WHERE s.courseApp = :app');
        $this->db->bind(':app', $app);
        // $this->db->bind(':uname', $_SESSION['user_id']);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getMarketR()
    {
        $app = '0';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN result r ON s.result=r.resultID INNER JOIN course c ON s.courseofstudy=c.courseID WHERE s.courseApp = :app');
        $this->db->bind(':app', $app);
        // $this->db->bind(':uname', $_SESSION['user_id']);
        $row = $this->db->single();
        $roww = $this->db->rowCount();

        return $roww;
    }

    public function getStdA()
    {
        $app = '1';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN institution i ON s.institution=i.institutionID INNER JOIN course c ON s.courseofstudy=c.courseID INNER JOIN result r ON s.result=r.resultID INNER JOIN state st ON s.state=st.id WHERE courseApp = :app AND i.username = :uname');
        $this->db->bind(':app', $app);
        $this->db->bind(':uname', $_SESSION['user_id']);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getStdR()
    {
        $app = '1';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN institution i ON s.institution=i.institutionID INNER JOIN course c ON s.courseofstudy=c.courseID INNER JOIN result r ON s.result=r.resultID INNER JOIN state st ON s.state=st.id WHERE courseApp = :app AND i.username = :uname');
        $this->db->bind(':app', $app);
        $this->db->bind(':uname', $_SESSION['user_id']);
        $row = $this->db->single();
        $roww = $this->db->rowCount();

        return $roww;
    }

    public function getStds($id)
    {
        $status = '0';
        $this->db->query('SELECT * FROM studentdetails s INNER JOIN institution i ON s.institution=i.institutionID INNER JOIN course c ON s.courseofstudy=c.courseID INNER JOIN result r ON s.result=r.resultID INNER JOIN state st ON s.state=st.id WHERE s.studentID = :id');
        // $this->db->bind(':status', $status);
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function stdApp($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE studentdetails SET courseApp= :status WHERE studentID = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getCourses()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM course WHERE deleted = :status  ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
}
