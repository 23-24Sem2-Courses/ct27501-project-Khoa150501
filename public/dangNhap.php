<?php
include_once __DIR__ . '/../src/partials/header.php';

?>

<?php include_once __DIR__ . '/../src/partials/navbar.php'?>


<script src="\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
    <br><br><br>
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="img/logo.png" alt="logo" width="">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Đăng nhập</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Bạn chưa nhập Email
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Mật khẩu</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Bạn chưa nhập mật khẩu
							    	</div>
								</div>
                                    
								<div class="text-center">
									<button type="submit" class="btn btn-primary ms-auto">
										Đăng nhập
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Bạn chưa có tài khoản? <a href="dangKy.php" class="text-dark">Đăng ký ngay</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="../lib/bootstrap-5.0.2-dist/js/login.js"></script>
    
    
</body>

