<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/view.css">
</head>
<body>
    <!-- header -->
    <?php
    require('layout/header.php');
    ?>
    <!-- code -->
    <div class="view">
        <div class="title">
            <h2 style="font-size:23px">Quản lý sản phẩm</h2>
        </div>
        <div class="main">
            <form action="">
                <table>
                    <tr>
                        <th colspan="2" style="text-align: center;">Chi tiết sản phẩm</th>
                    </tr>
                    <tr>
                        <th>ID sản phẩm</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <td>Matcha Latte</td>
                    </tr>
                    <tr>
                        <th>Giá</th>
                        <td>35.000 VND</td>
                    </tr>
                    <tr>
                        <th>Số lượng</th>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>Phân loại</th>
                        <td>Trà</td>
                    </tr>
                    <tr>
                        <th>Mô tả sản phẩm</th>
                        <td>Chất gây nghiện</td>
                    </tr>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <td><img src="img/MatchaLatte.jpg" width="50px" height="50px"></td>
                    </tr>

                </table>
                <div class="submit">
                    <a href="quanLySP.php" style="background-color: #1C8552; color : white;">Trở lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>