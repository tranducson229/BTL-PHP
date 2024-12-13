<?php
// Kết nối cơ sở dữ liệu
require_once '../model/connect.php';

// Lấy dữ liệu từ bảng "products" mà người dùng đã thêm vào giỏ hàng
$query = "SELECT * FROM product WHERE NumberPro > 0"; // Điều kiện: Số lượng (NumberPro) > 0

// $cartItems = $stmt->fetchAll;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm trong giỏ hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Danh sách sản phẩm trong giỏ hàng</h1>
    <?php if (empty($cartItems)): ?>
        <p>Giỏ hàng hiện tại không có sản phẩm nào!</p>
    <?php else: ?>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalPrice = 0;
                foreach ($cartItems as $index => $item):
                    $subtotal = $item['NumberPro'] * $item['PricePro'];
                    $totalPrice += $subtotal;
                ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($item['NamePro']); ?></td>
                    <td>
                        <img src="../uploads/<?php echo htmlspecialchars($item['Picture']); ?>" alt="Hình ảnh" width="50">
                    </td>
                    <td><?php echo $item['NumberPro']; ?></td>
                    <td><?php echo number_format($item['PricePro'], 0, ',', '.'); ?> VND</td>
                    <td><?php echo number_format($subtotal, 0, ',', '.'); ?> VND</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-end"><strong>Tổng cộng:</strong></td>
                    <td><strong><?php echo number_format($totalPrice, 0, ',', '.'); ?> VND</strong></td>
                </tr>
            </tfoot>
        </table>
    <?php endif; ?>
</div>
</body>
</html>