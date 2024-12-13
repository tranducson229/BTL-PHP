<?php
session_start();


if (isset($_GET['id'])) {
    $idToRemove = $_GET['id'];

    // Kiểm tra xem giỏ hàng có tồn tại trong session không
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            // Kiểm tra nếu sản phẩm trong giỏ hàng có ID trùng với ID sản phẩm cần xóa
            if ($item['id'] == $idToRemove) {
                // Nếu có, xóa sản phẩm khỏi giỏ hàng
                unset($_SESSION['cart'][$key]);
                break; // Dừng vòng lặp sau khi xóa sản phẩm
            }
        }
        // Đảm bảo rằng mảng giỏ hàng không bị bỏ trống các chỉ mục (re-index lại mảng)
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Sau khi xóa, điều hướng lại trang giỏ hàng
header("Location: cart.php");
exit;
?>