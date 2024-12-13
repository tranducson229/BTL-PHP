<?php
    include('register_connect.php');
    class data_register
    {
        public function insert_uid($txtTen, $txtEmail, $pass, $comfirm_pass)
        {
            global $conn;
            $sql = "INSERT INTO dangnhap (username,email,matkhau,confirm_password)
                    VALUES ('$txtTen', '$txtEmail', '$pass','$comfirm_pass')"; 
            
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function select_id($id)
        {
            global $conn;
            $sql="SELECT * from register ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_register_id($id)
        {
            global $conn;
            $sql="select * from register where uid=$uid";
            $run=mysqli_query($conn,$sql);
            return $run;
        }

        public function select_all_gd()
        {
            global $conn;
            $sql = "SELECT * FROM register";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
    }


?>