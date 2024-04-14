<!DOCTYPE html>
<html>
<head>
    <title>Thêm người dùng mới</title>
    <!-- Định nghĩa jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h2>Thêm người dùng mới</h2>
    <form id="addUserForm" method="post" action="Home.php">
        Tên người dùng: <input type="text" name="username"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Thêm">
    </form>

    <!-- Hiển thị thông báo -->
    <div id="message"></div>

    <!-- Script AJAX -->
    <script>
        // Bắt sự kiện khi form được submit
        $('#addUserForm').submit(function(e) {
            e.preventDefault(); // Ngăn chặn hành động mặc định của form

            // Gửi yêu cầu AJAX
            $.ajax({
                type: 'POST',
                url: 'Home.php?action=add', // Địa chỉ của controller và action xử lý thêm người dùng
                data: $(this).serialize(), // Dữ liệu gửi đi từ form
                success: function(response) {
                    // Hiển thị thông báo thành công
                    $('#message').html('Thành công');
                }
            });
        });
    </script>
</body>
</html>