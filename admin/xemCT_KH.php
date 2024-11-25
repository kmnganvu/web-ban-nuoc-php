<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khách hàng</title>
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
            <h2 style="font-size:23px">Quản lý tài khoản</h2>
        </div>
        <div class="main">
            <form action="">
                <table>
                    <tr>
                        <th colspan="2" style="text-align: center;">Chi tiết khách hàng</th>
                    </tr>
                    <tr>
                        <th>ID khách hàng</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <td>0396529216</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>kmnganvu@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Tên đăng nhập</th>
                        <td>kmnganvu</td>
                    </tr>
                    <tr>
                        <th>Họ và tên</th>
                        <td>Vũ Thị Kim Ngân</td>
                    </tr>
                    <tr>
                        <th>Giới tính</th>
                        <td>Nữ</td>
                    </tr>

                </table>
                <div class="submit">
                    <a href="" style="background-color: #1C8552; color : white;">Trở lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>