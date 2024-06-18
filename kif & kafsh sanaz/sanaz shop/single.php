<?php
require_once("config.php");

if(isset($_GET['p_id'])){

	$query = "SELECT * FROM `products` WHERE `product_id`=".$_GET['p_id'];

	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result);
}

?>
<?php include_once "header.php"; ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"> ارائه بهترین و به روز ترین برند ها</h1>
			<p class="lead text-muted">کیف و کفش عضو جدا نشدنی تیپ های کامل است و همیشه یکی از مهم ترین دغدغه های افراد شیک پوش به همین دلیل ما در بوتیک مجموعه بی نظیری از انواع کیف و کفش مردانه و کیف و کفش زنانه را از بهترین فروشنده های کشور جمع آوری کرده ایم تا شما به راحتی مدل ها را مقایسه و خریدی هوشمندانه و راحت داشته باشید</p>
			<p>
				<a href="#" class="btn btn-warning my-2">تماس با ما</a>
				<a href="#" class="btn btn-secondary my-2">فروشگاه</a>
			</p>
		</div>
	</section>



	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
					<div class="col-12 col-md-12">
						<div class="card mb-4 box-shadow row">
							<div class="row">
								<div class="col-md-5">
									<img class="card-img-top" src="admin/<?php  echo $row['pic'] ?>" style="width: 480px;height: 400px" alt="Card image cap">
								</div>
								<div class="col-md-7">
									<h4 class="card-text text-center pt-2"><?php  echo $row['title'] ?></h4>
									<p class="card-text mt-5 mb-5 p-2 border-right-green-3"><?php  echo $row['description'] ?></p>

									<div class="row">

										<div class="col-lg-4 mt-5 mb-5">
											<p class="card-text">قیمت:
												<span style="color: black;">
												<?php
												//محاصبه میزان تخفیف
												$dis = $row['price'] - ($row['price'] * $row['discount'] / 100);
												//جدا کردن سه رقم سه رقم اعداد
												echo number_format($dis);
												?>
												</span> تومان</p>
										</div>

										<div class="col-lg-4 mt-5 mb-5">
											<?php
											if ($row['discount'] > 0){
												?>
												<p class="card-text text-muted small ">قیمت اصلی: <del style="color: #c0c0c0;"><?php  echo number_format($row['price']) ?></del> تومان</p>
											<?php } ?>
										</div>
									</div>

									<div class="text-left ml-3">
										<div class="btn-group">
											<a href="index.php?id_cart=<?php  echo $row['product_id'] ?>" class="btn btn-sm btn-outline-warning">افزودن به سبد خرید <i class="fal fa-cart-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>

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