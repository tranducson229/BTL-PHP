<?php
include('register_control.php');

$get_data = new data_register();

if (isset($_POST['sub'])) {
    
    if (!empty($_POST['txtTen']) && !empty($_POST['txtEmail']) && !empty($_POST['pass'])&& !empty($_POST['confirm_password']))
     {
        $in_data = $get_data->insert_uid($_POST['txtTen'],$_POST['txtEmail'],$_POST['pass'],$_POST['confirm_password']);
        
        if ($in_data) 
        {
            echo "<script>alert('Thành công');
            window.location= '../View/register.php';
            </script>";
          
        } 
        else 
        {
            echo "<script>alert('Không thực thi được');</script>";
        }
    } 
    else 
    {
        echo "<script>alert('Vui lòng điền vào tất cả các trường');</script>";
    }
    if($_POST['confirm_password']==$_POST['pass']){
        echo"<script>alert('Thành công');</script>";
    }
}


?>