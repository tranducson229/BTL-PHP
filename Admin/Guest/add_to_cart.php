<?php
session_start();

// Kiểm tra nếu có dữ liệu sản phẩm trong URL
if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['picture']) && isset($_GET['price'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $picture = $_GET['picture'];
    $price = $_GET['price'];

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    $found = false;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $id) {
                // Nếu đã có, tăng số lượng
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }
    }

    // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
    if (!$found) {
        $item = [
            'id' => $id,
            'NamePro' => $name,
            'Picture' => $picture,
            'PricePro' => $price,
            'quantity' => 1,
        ];
        $_SESSION['cart'][] = $item;
    }
}

// Quay lại trang sản phẩm sau khi thêm vào giỏ hàng
header("Location: index.php");
exit;
?>
