<?php require_once "./public/partials/header.php" ?>
<?php require_once "./public/partials/sidebar.php" ?>


<link rel="stylesheet" href="/public/css/admin.css">
<body>

    <!--adminUser-->
    <div class="main p-4">
            <h1 class="pt-5">
                Quản lý tư vấn
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
                    <th>Email</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>ghiChu</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($user as $use): ?>
                    <tr> 
                        <td  ><?= $use['id'] ?></td>
                        <td  ><?= $use['email'] ?> </td> 
                        <td  ><?= $use['fulname'] ?></td>
                        <td  ><?= $use['phonenumber'] ?></td>
                        <td  ><?= $use['ghiChu'] ?></td>
                        <td>
                            <!-- The Modal -->
                            <div class="d-flex">
                            <p class="text-center"><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModalEdit">
                                <i class="fa-solid fa-pen-to-square"></i></button>            
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                         
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

