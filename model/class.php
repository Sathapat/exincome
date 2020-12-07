<?php 

    define('db_server', 'localhost');
    define('db_user', 'root');
    define('db_pass', '');
    define('db_name', 'exincome');

    class DB {
        function __construct(){
            $this->conn = mysqli_connect(db_server, db_user, db_pass, db_name);

            if(mysqli_connect_errno()){
                echo "เชิ่อมต่อไม่สำเร็จ :". mysqli_connect_error();
            }
        }

        public function fetch_record(){
            $result = mysqli_query($this->conn, "SELECT * FROM record INNER JOIN member ON record.m_id = member.m_id ORDER BY record.r_id DESC");
            return $result;
        }

        public function sum_income(){
            return $result = mysqli_query($this->conn, "SELECT sum(r_income) AS sum_income  FROM record");
        }

        public function sum_expense(){
            $result = mysqli_query($this->conn, "SELECT sum(r_expense) AS sum_expense  FROM record");
            return $result;
        }

        public function member_goal(){
            $result = mysqli_query($this->conn, "SELECT * FROM record INNER JOIN member ON record.m_id = member.m_id");
            return $result;
        }

        public function insert_record($date, $time, $income, $expense){
            $result = mysqli_query($this->conn, "INSERT INTO record (r_date, r_time, r_income, r_expense, m_id)VALUES('$date', '$time', '$income', '$expense', '1')");
            return $result;
        }

    }



?>