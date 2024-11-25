<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật khách hàng</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <!-- header -->
    <?php
    require('layout/header.php');
    ?>
    <!-- code -->
    <div class="update">
        <div class="title">
            <h2>Cập nhật khách hàng</h2>
        </div>
        <div class="main">
            <form action="">
                <div class="gr">
                    <div class="infor">
                        <label for="name">Họ và tên</label>
                        <input type="text" id="name" placeholder="" style="opacity: 0.6;" required>
                    </div>
                    <div class="infor">
                        <label for="tel">Số điện thoại</label>
                        <input type="tel" id="tel" placeholder="" style="opacity: 0.6;" required>
                    </div>
                </div>
                <div class="gr">
                    <div class="infor">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="" style="opacity: 0.6;" required>
                    </div>
                    <div class="infor">
                        <label for="address">Địa chỉ</label>
                        <input type="text" id="address" placeholder="" style="opacity: 0.6;" required>
                    </div>
                </div>
                <div class="infor">
                        <label for="sex"> Giới tính</label>
                        <select id="sex" name="sex" style="opacity: 0.6;" required>
                            <option value="male" selected>Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                    </div>
                <div class="submit"> 
                    <a href="" style="background-color: #1C8552; color : white;">Trở lại</a>
                    <a href="" style="background-color: #FBBE00; color : black;">Cập nhật</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>