

    <?php require_once "./public/partials/header.php" ?>
    <?php require_once "./public/partials/sidebar.php" ?>
    <?php require_once "./public/partials/header.php" ?>


<body>



    <!-- Nội dung của QLSP-->
    <div class="main p-4">
            <h1 class="pt-5">
                Quản lý sản phẩm
            </h1>
            <br>
            <div class=" justify-content-between mb-3">
                <div class="">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Thêm mới
                    </button>

                    <!-- The Modal -->
                <div class="p-2">
                    <form class="d-flex" role="search">
                        <input class="border-info form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-dark">
                <tr class="text-center">
                    <th>Mã</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá tiền</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <td><?= $car['car_id'] ?></td>
                        <td><?= $car['nameCars'] ?></td>
                        <td><?= $car['price'] ?></td>
                        <td>
                            <p class="text-center"><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModalEdit">
                                <i class="fa-solid fa-pen-to-square"></i></button>            
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- <a href="logout.php">Logout</a> -->
</body>