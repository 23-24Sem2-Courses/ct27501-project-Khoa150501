<?php
include_once __DIR__ . '/../src/partials/header.php';

?>

<?php include_once __DIR__ . '/../src/partials/navbar.php'?>


<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
    <br>
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="img/logo.png" alt="logo">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Đăng ký</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="fullname">Họ và tên</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Bạn chưa nhập họ và tên	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Bạn chưa nhập Email
									</div>
								</div>

                                <div class="mb-3">
									<label class="mb-2 text-muted" for="phone">Số điện thoại</label>
									<input id="password" type="tel" class="form-control" name="phone" required>
								    <div class="invalid-feedback">
								    	Bạn chưa nhập số điện thoại
							    	</div>
								</div>

                                <div class="mb-3">
									<label class="mb-2 text-muted" for="address">Địa chỉ</label>
									<input id="password" type="text" class="form-control" name="address" required>
								    <div class="invalid-feedback">
								    	Bạn chưa nhập địa chỉ
							    	</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Bạn chưa nhập mật khẩu
							    	</div>
								</div>

								<div class="text-center">
									<button type="submit" class="btn btn-primary ms-auto">
										Đăng ký	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Bạn đã có tài khoản? <a href="dangNhap.php" class="text-dark">Đăng nhập ngay</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

    <script src="../lib/bootstrap-5.0.2-dist/js/login.js"></script>
    
    
</body>

