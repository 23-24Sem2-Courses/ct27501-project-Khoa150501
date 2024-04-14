<?php require_once "./public/partials/header.php" ?>
<?php require_once "./public/partials/sidebar.php" ?>


<link rel="stylesheet" href="/public/css/admin.css">
<body>

    <!--adminUser-->
    <div class="main p-4">
            <h1 class="pt-5">
                Quản lý người dùng
            </h1>
            <br>
            <div class=" justify-content-between mb-3">
                <div class="">
                <button class="btn btn-primary" ><a href="/admin/showAdduser" style="color: aliceblue; ">Thêm</a></button>

                <div class="p-2">
                    <form class="d-flex" role="search">
                        <input class="border-info form-control me-2" type="search" placeholder="Tìm kiếm người dùng" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark">
                <tr class="text-center">
                    <th>Mã</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Password</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($user as $use): ?>
                    <tr> 
                        <td  ><?= $use['id'] ?></td>
                        <td  ><?= $use['fullname'] ?></td>
                        <td  ><?= $use['email'] ?> </td> 
                        <td  ><?= $use['phone_number'] ?></td>
                        <td  ><?= $use['address'] ?></td>
                        <td  ><?= $use['password'] ?></td>
                        <td>
                            <!-- The Modal -->
                            <div class="d-flex">
                           <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModalEdit">
                                <a href="/admin/editUserForm?action=update"> <i class="fa-solid fa-pen-to-square"></i></a></button>   
                             
                                <a href="deleteData?action=delete&id=2" ><i class="fa-solid fa-trash" ></i></a>
                                
                                <!-- <form method="post" action="deleteData">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="3">
                                <button type="submit" class="btn btn-danger btn-sm ml-1" ><i class="fa-solid fa-trash" ></i></button>
                                </form> -->
                         
                        </div>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                   
                    
                </tbody>
            </table>
         
        </div>
    </div>
    <script src="/public/js/sidebar.js"></script>
    
</body>

