<?php 
include "../model/control_user.php";
session_start();
if(isset($_POST['txtsub'])){
        $data = new data_user();
        // move_uploaded_file($_FILES['txtavatar']['tmp_name'],'../upload/'.$_FILES['txtavatar']['name']);
        $update=$data->update_profile($_SESSION['username'],$_POST['txtmail'],  $_POST['txtaddress'], $_POST['txtgender']);
        if($update){
            echo "<script>alert('Đã cập nhật thông tin');
             window.location.href = '../Guest/profile.php';
            </script>;";
        } 
        else {echo "<script>alert('Chưa thực hiện được');</script>";}
    }
    if(isset($_POST['txtupdate_id'])){
        $data = new data_user();
        // move_uploaded_file($_FILES['txtavatar']['tmp_name'],'../upload/'.$_FILES['txtavatar']['name']);
        $update = $data->update_profile_id($_POST['id'], $_POST['txtmail'],  $_POST['txtaddress'], $_POST['txtgender'], $_POST['txtpass']);
        
        if($update){
            echo "<script>
                alert('Đã cập nhật thông tin');
                window.location.href = '../advance-admin/account_select.php';
            </script>";
        } else {
            echo "<script>alert('Chưa thực hiện được');</script>";
        }
    }
    
    
?>