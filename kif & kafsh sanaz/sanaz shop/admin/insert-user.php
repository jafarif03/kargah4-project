<?php
require_once ("header.php");

if(isset($_POST['email'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$address = $_POST['address'];
	$registerTime = date("Y-m-d H:i:s");

	$selectEmail = "SELECT * FROM `user` WHERE `email`='$email'";

	$exist = mysqli_query($conn,$selectEmail);
	if(mysqli_num_rows($exist) > 0){
		header("location: insert-user.php?error=1");
		return;
	}

	$query = "INSERT INTO user(email,password,firstname,lastname,address,registerTime) VALUES ('$email','$password','$firstname','$lastname','$address','$registerTime')";

	if(mysqli_query($conn,$query)){
		header("location: index.php");
	}else {
		header("location: insert-user.php?error=1");
	}
}
?>

	<div class="container-fluid">
		<div class="row">

			<main role="main" class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h1 class="h2">افزودن کاربر جدید</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
					</div>
				</div>
			</main>

			<div class="container">

				<div class="row">
					<div class="offset-2 col-md-10">
						<div class="card mt-5">
							<div class="card-body">
								<?php if(isset($_GET['error'])){ ?>
									<h6 class="text-center mb-4 p-1 bg-warning text-white">این ایمیل از قبل ثبت نام شده است </h6>
								<?php } ?>

								<form method="post" action="" class="needs-validation" novalidate>
									<div class="row">
										<div class="col-md-6 mb-3">
											<label for="firstName">نام</label>
											<input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
											<div class="invalid-feedback">
												لطفا نام را وارد کنید.
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<label for="lastName">نام خانوادگی</label>
											<input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="">
											<div class="invalid-feedback">
												لطفا نام خانوادگی را وارد کنید.
											</div>
										</div>
									</div>

									<div class="mb-3">
										<label for="email">ایمیل</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
										<div class="invalid-feedback">
											لطفا ایمیل را وارد کنید
										</div>
									</div>

									<div class="mb-3">
										<label for="email">رمز عبور</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
										<div class="invalid-feedback">
											لطفا رمز عبور را واد کنید
										</div>
									</div>

									<div class="mb-3">
										<label for="address">آدرس</label>
										<input type="text" class="form-control" id="address" name="address">
										<div class="invalid-feedback">
											لطفا آدرس را وارد کنید
										</div>
									</div>

									<hr class="mb-4">
									<button class="btn btn-primary btn-lg btn-block" type="submit">ثبت کاربر</button>
								</form>

							</div>
						</div>
					</div>
				</div>

			</div>


			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="index.php">
								<i class="fal fa-tachometer-slowest"></i>
								داشبورد
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="products.php">
								<i class="fal fa-list-alt"></i>
								محصولات
							</a>

							<ul class="nav flex-column">
								<li class="nav-item small">
									<a class="nav-link" href="insert-product.php">
										<i class="fal fa-plus"></i>
										افزودن محصول
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="users.php">
								<i class="fal fa-users"></i>
								کاربران
							</a>

							<ul class="nav flex-column">
								<li class="nav-item small">
									<a class="nav-link active" href="insert-user.php">
										<i class="fal fa-plus"></i>
										افزودن کاربر
									</a>
								</li>
							</ul>

						</li>

						<li class="nav-item">
							<a class="nav-link" href="category.php">
								<i class="fal fa-clipboard-list-check"></i>
								دسته بندی ها
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="../index.php">
								<i class="fal fa-comments-alt"></i>
								مشاهده سایت
							</a>
						</li>
					</ul>
				</div>
			</nav>

		</div>
	</div>

<?php
require_once ("footer.php");
?>