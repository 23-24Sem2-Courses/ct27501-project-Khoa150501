
<body>
    <h2>Chỉnh sửa thông tin người dùng</h2>
   
    <form action="updateUser" method="post">
        <input type="hidden" name="id" value="<?php echo $use['id']; ?>" required>
        <label for="fullname">Họ và tên:</label>
        <input type="text" name="fullname" value="<?php echo $use['fullname']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $use['email']; ?>" required><br>
        <label for="phone_number">Số điện thoại:</label>
        <input type="text" name="phone_number" value="<?php echo $use['phone_number']; ?>" required><br>
        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" value="<?php echo $use['address']; ?>" required><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" value="<?php echo $use['password']; ?>" required><br>
        <input type="submit" value="Cập nhật">
    </form>
    <?php var_dump($use) ?>
</body>
</body>