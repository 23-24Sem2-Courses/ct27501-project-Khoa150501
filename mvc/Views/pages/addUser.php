<?php require_once "./public/partials/header.php" ?>
<style>
    
    h1{
        text-align: center;
        margin-top: 100px;
    }
 .form-group {
    max-width: 500px;
 } 
 form{

    justify-content: center;
    margin-left: 35%;
 }
</style>

    <h1>Thêm User</h1>
        <form action="AdminshowUser" method="post">
        <div class="form-group">
              <label for="id">
                <strong>Id</strong>
               </label>
           <input type="number" class="form-control border-success" placeholder=""id="id" name="id" required>
                </div>
        <div class="form-group">
              <label for="fullname">
                <strong>Họ và tên:</strong>
               </label>
           <input type="text" class="form-control border-success" placeholder="Nhập họ và tên"id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                  <label for="email">
                        <strong>Email:</strong>
                   </label>
                     <input type="email" class="form-control border-success" placeholder="Nhập Email" id="email" name="email" required>
                  </div>
                   <div class="form-group">
                        <label for="phone_number">
                          <strong>Số điện thoại:</strong>
                             </label>
                               <input type="number" class="form-control border-success" placeholder="Nhập số điện thoại" id="phone_number" name="phone_number" required>
                             </div>
                          <div class="form-group">
                          <label for="address">
                         <strong>Địa chỉ:</strong>
                        </label>
                             <input type="text" class="form-control border-success" placeholder="Nhập địa chỉ" id="address" name="address" required>
                         </div>
                         <div class="form-group">
                          <label for="password">
                         <strong>Mật khẩu:</strong>
                        </label>
                             <input type="password" class="form-control border-success" placeholder="Nhập mật khẩu" id="password" name="password" required>
                         </div>
                         <button type="submit" class="btn btn-success btn-lock" > Thêm</button>
          </form>                                        