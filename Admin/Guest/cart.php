<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
            color: #007bff;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #dee2e6;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .empty-cart {
            text-align: center;
            font-size: 18px;
            margin-top: 50px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <h1>Giỏ hàng của bạn</h1>
    <?php if (!empty($_SESSION['cart'])) : ?>
        <table>
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
                    <td colspan="4" style="text-align: right; font-weight: bold;">Tổng cộng</td>
                    <td colspan="2" style="font-weight: bold; color: #dc3545;">
                        <?php echo number_format($total); ?> VND
                    </td>
                </tr>
            </tbody>
        </table>
    <?php else : ?>
        <p class="empty-cart">Giỏ hàng của bạn đang trống!</p>
    <?php endif; ?>

    <div style="text-align: center;">
        <a href="fruit.php" class="btn">Quay lại trang chủ</a>
    </div>
</body>
</html>