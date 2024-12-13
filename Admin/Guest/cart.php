<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<body>
    <h1>Giỏ hàng của bạn</h1>
    <?php if (!empty($_SESSION['cart'])) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $item) :
                    $subtotal = $item['PricePro'] * $item['quantity'];
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><img src="../upload/<?php echo $item['Picture']; ?>" width="100" height="100" alt=""></td>
                        <td><?php echo $item['NamePro']; ?></td>
                        <td><?php echo number_format($item['PricePro']); ?> VND</td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo number_format($subtotal); ?> VND</td>
                        <td>
                        <a href="remove_cart.php?id=<?php echo $item['id']; ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Tổng cộng</td>
                    <td colspan="2"><?php echo number_format($total); ?> VND</td>
                </tr>
            </tbody>
        </table>
    <?php else : ?>
        <p>Giỏ hàng của bạn đang trống!</p>
    <?php endif; ?>

    <a href="fruit.php">Quay lại trang chủ</a>
</body>
</html>