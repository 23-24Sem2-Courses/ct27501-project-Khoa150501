<?php require_once "./public/partials/header.php" ?>


<body>

<div>
        <div class="main p-4">
            <h1 class="pt-5">
                Quản lý sản phẩm
            </h1>
            <br>
            <div class="d-flex justify-content-between mb-3">
                <div class="">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Thêm mới
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Thêm sản phẩm</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Tên sản phẩm:</strong>
                                            </label>
                                            <input type="text" class="form-control border-success" placeholder="Nhập tên sản phẩm"
                                                id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Giá tiền:</strong>
                                            </label>
                                            <input type="number" class="form-control border-success" placeholder="Nhập giá tiền" id="">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lock" style="width: 100%;">
                                            Thêm
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Xe 1</td>
                        <td class="text-center">100 triệu</td>
                        <td>
                            
                                <!-- The Modal -->
                            <div class="modal" id="myModalEdit">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Chỉnh sửa sản phẩm</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Tên sản phẩm</strong>

                                                    </label>
                                                    <input type="text" class="form-control border-success" placeholder="Nhập tên sản phẩm"
                                                        id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Giá tiền:</strong>
                                                    </label>
                                                    <input type="number" class="form-control border-success" placeholder="Nhập giá tiền" id="">
                                                </div>
                                                <button type="submit" class="btn btn-success btn-lock" style="width: 100%;">
                                                    Lưu
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModalEdit">
                                <i class="fa-solid fa-pen-to-square"></i></button>            
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!--adminUser-->
    <div class="main p-4">
            <h1 class="pt-5">
                Quản lý người dùng
            </h1>
            <br>
            <div class="d-flex justify-content-between mb-3">
                <div class="">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Thêm mới
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Thêm người dùng</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Họ và tên:</strong>
                                            </label>
                                            <input type="text" class="form-control border-success" placeholder="Nhập họ và tên"
                                                id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Email:</strong>
                                            </label>
                                            <input type="email" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Số điện thoại:</strong>
                                            </label>
                                            <input type="number" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <strong>Địa chỉ:</strong>
                                            </label>
                                            <input type="text" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lock" style="width: 100%;">
                                            Thêm
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td class="text-center">1</td>
                        <td class="text-center">Tài</td>
                        <td class="text-center">tai@gmail.com</td>
                        <td class="text-center">0123456789</td>
                        <td class="text-center">20 Hai Bà Trưng</td>
                        <td>
                            <!-- The Modal -->
                            <div class="modal" id="myModalEdit">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Chỉnh sửa người dùng</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Họ và tên:</strong>
                                                    </label>
                                                    <input type="text" class="form-control border-success" placeholder="Nhập họ và tên"
                                                        id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Email:</strong>
                                                    </label>
                                                    <input type="email" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Số điện thoại:</strong>
                                                    </label>
                                                    <input type="number" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">
                                                        <strong>Địa chỉ:</strong>
                                                    </label>
                                                    <input type="text" class="form-control border-success" placeholder="Nhập mật khẩu" id="passwordInput">
                                                </div>
                                                <button type="submit" class="btn btn-success btn-lock" style="width: 100%;">
                                                    Lưu
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModalEdit">
                                <i class="fa-solid fa-pen-to-square"></i></button>            
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="/public/js/sidebar.js"></script>
    
</body>

