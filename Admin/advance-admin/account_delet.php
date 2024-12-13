<!-- <?php
//  include('../model/control_user.php');
//  $id = $_GET['uid'];
//  $data=new data_user();
//  $del=$data->del_profile($id);
//  echo "<script> window.location.href = '/advance-admin/account_select.php';</script>;";
 ?> -->
 <?php
include('../model/control_user.php');

// Kiểm tra nếu `id` được truyền qua URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $get_data = new data_user();

    // Gọi hàm xóa
    $result = $get_data->delete_user($id);

    if ($result) {
        echo "<script>
                alert('Tài khoản đã được xóa thành công!');
                window.location.href = 'account_select.php';
              </script>";
    } else {
        echo "<script>
                alert('Xóa tài khoản thất bại!');
                window.location.href = 'account_select.phpt';
              </script>";
    }
} else {
    echo "<script>
            alert('ID không hợp lệ!');
            window.location.href = 'account_select.php';
          </script>";
}
?>