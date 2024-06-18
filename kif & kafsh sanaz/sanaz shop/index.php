<?php include_once "header.php"; ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"> ارائه بهترین و به روز ترین برند ها</h1>
			<p class="lead text-muted">کیف و کفش عضو جدا نشدنی تیپ های کامل است و همیشه یکی از مهم ترین دغدغه های افراد شیک پوش به همین دلیل ما در بوتیک مجموعه بی نظیری از انواع کیف و کفش مردانه و کیف و کفش زنانه را از بهترین فروشنده های کشور جمع آوری کرده ایم تا شما به راحتی مدل ها را مقایسه و خریدی هوشمندانه و راحت داشته باشید</p>
			<p>
				<a href="#" class="btn btn-warning my-2">تماس با ما</a>
				<a href="#" class="btn btn-light my-2">فروشگاه</a>
			</p>
		</div>
	</section>

	<div class="container">
		<div class="row mb-2">
			<div class="col-md-6">
			
			</div>
			<div class="col-md-12">
				<div class="card flex-md-row mb-4 box-shadow h-md-250">
					<div class="card-body d-flex flex-column align-items-start">
						<h3 class="mb-0">
							<a class="text-dark" href="#">ارسال رایگان</a>
						</h3>
						<div class="mb-1 text-muted"></div>
						<p class="card-text mb-auto">با ارسال رایگان محصولات به سراسر کشور، به شما فرصتی فوق العاده برای آشنایی با محصولات و اطمینان از کفیت آنها میدهیم. 
							 به ما بپیوندید و از این فرصت فوق العاده غافل نشوید.</p>
						<a href="#">ادامه مطلب</a>
					</div>
					<img class="card-img-right flex-auto d-none d-md-block" src="images/ersal_raygan2.jpg" width="200px" height="180px"  "Card image cap">
				</div>
			</div>
		</div>
	</div>

	<div class="album py-5 bg-light">
		<div class="container">

			<h4 class="pb-3 mb-4 border-bottom">
				جدیدترین محصولات ...
			</h4>
			<div class="row">

				<?php
				if(isset($_GET['cat_id'])){
					$cat_id = $_GET['cat_id'];
					$q = "SELECT * FROM products WHERE category_id = $cat_id ORDER BY product_id DESC LIMIT 20";
				}else{
					$q = "SELECT * FROM products ORDER BY product_id DESC LIMIT 20";
				}
				$data = mysqli_query($conn,$q);

				while($row = mysqli_fetch_assoc($data)){

				?>

				<div class="col-12 col-md-3">
					<div class="card mb-4 box-shadow">
						<img class="card-img-top" src="admin/<?php  echo $row['pic'] ?>" alt="Card image cap">
						<div class="card-body">
							<p class="card-text"><?php  echo $row['title'] ?></p>

							<p class="card-text">قیمت:
								<span style="color: black;">
									<?php
									//محاصبه میزان تخفیف
									$dis = $row['price'] - ($row['price'] * $row['discount'] / 100);
									//جدا کردن سه رقم سه رقم اعداد
									echo number_format($dis);
									?>
								</span> تومان</p>
							<?php
							if ($row['discount'] > 0){
							?>
							<p class="card-text text-muted small">قیمت اصلی: <del style="color: #c0c0c0;"><?php  echo number_format($row['price']) ?></del> تومان</p>
							<?php } ?>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="single.php?p_id=<?php  echo $row['product_id'] ?>" class="btn btn-sm btn-outline-secondary">نمایش <i class="fal fa-eye"></i></a>
									<a href="index.php?id_cart=<?php  echo $row['product_id'] ?>" class="btn btn-sm btn-outline-warning">افزودن به سبد خرید <i class="fal fa-cart-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>

			</div>

			<nav class="blog-pagination pt-3 border-top">
				<a class="btn btn-outline-warning" href="#">1</a>
				<a class="btn btn-outline-secondary disabled" href="#">2</a>
				<a class="btn btn-outline-secondary disabled" href="#">3</a>
				<a class="btn btn-outline-secondary disabled" href="#">4</a>
			</nav>

		</div>
	</div>

</main>

<footer class="text-muted">
	<div class="container">
		<p class="float-left">
			<a href="#">برگشت به بالای صفحه <i class="fal fa-arrow-alt-square-up" style="font-size: 2rem;color: #0c5460;"></i></a>
		</p>
		
	</div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>