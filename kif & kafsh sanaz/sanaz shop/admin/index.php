<?php
require_once("header.php");
?>

<div class="container-fluid">
	<div class="row">

		<main role="main" class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
				<h1 class="h2">داشبورد</h1>
			</div>
		</main>

		<div class="container">
			<div class="row">
				<div class="offset-2 col-md-4">
					<div class="card dashboard-box">
						<a href="products.php">
							<div class="card-heading pt-3">
								<h1 class="text-center"><i class="fal fa-gifts text-large"></i> </h1>
							</div>
							<div class="card-body">
								<h6 class="text-center">همه ی محصولات</h6>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card dashboard-box">
						<a href="users.php">
							<div class="card-heading pt-3">
								<h1 class="text-center"><i class="fal fa-users text-large"></i> </h1>
							</div>
							<div class="card-body">
								<h6 class="text-center">همه ی کاربران</h6>
							</div>
						</a>

					</div>
				</div>

			
				<div class="offset-2 col-md-4 mt-1">
					<div class="card dashboard-box">
						<a href="insert-product.php">
							<div class="card-heading pt-3">
								<h1 class="text-center"><i class="fal fa-file-invoice text-large"></i> </h1>
							</div>
							<div class="card-body">
								<h6 class="text-center">افزودن محصول</h6>
							</div>
						</a>

					</div>
				</div>

				<div class="col-md-4 mt-1">
					<div class="card dashboard-box">
						<a href="insert-user.php">
							<div class="card-heading pt-3">
								<h1 class="text-center"><i class="fal fa-user-plus text-large"></i> </h1>
							</div>
							<div class="card-body">
								<h6 class="text-center">افزودن کاربر</h6>
							</div>
						</a>

					</div>
				</div>

				


				

			</div>
		</div>


		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">
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
								<a class="nav-link" href="insert-user.php">
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
							<i class="fal fa-browser"></i>
							مشاهده سایت
						</a>
					</li>
				</ul>
			</div>
		</nav>

	</div>
</div>

<?php
require_once("footer.php");
?>