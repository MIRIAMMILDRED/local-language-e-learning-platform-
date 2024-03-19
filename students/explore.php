<!DOCTYPE html>
<?php require "userinfo.php"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Cursus - Explore</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">

</head>

<body>
	<!-- Header Start -->
	<?php include("header.php"); ?>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<?php include("menu.php"); ?>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-lg-8">
						<div class="section3125">
							<div class="explore_search">
								<div class="ui search focus">
									<div class="ui left icon input swdh11">
										<input class="prompt srch_explore" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
										<i class="uil uil-search-alt icon icon2"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="_14d25">
							<div class="row">
								<?php
								$query = (mysqli_query($conn, "SELECT * FROM courses"));
								?>

								<?php while ($row = mysqli_fetch_array($query)) { ?>
									<div class="col-lg-3 col-md-4">
										<div class="fcrse_1 mt-30">
											<a href="course_detail_view.php" class="fcrse_img">
												<img src="../Teachers/uploads/thumbnails/<?php echo $row['thumbnail']; ?>" alt="">
												<div class="course-overlay">
													<div class="badge_seller" style="color:primary">Class <?php echo $row['course_level']; ?></div>

													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														<?php echo rand(5, 25); ?> hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												
												<div class="vdtodt">
													<span class="vdt14"><?php echo  date('d/M/Y  h: i a',$row['time_added']);?></span>
													<?php $days = round(($time-$row['time_added'])/86400); ?>
													<span class="vdt14"><?php echo $days;?> days ago</span>
												</div>
												<a href="course_detail_view.php" class="crse14s"><?php echo $row['short_description']; ?></a>
												<a href="#" class="crse-cate"><?php echo $row['Name']; ?></a>
												<div class="auth1lnkprce">
													<a href="course_detail_view.php?course_id=<?php echo $row['ID']; ?>" class="upload_btn">View Course</a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
								<div class="col-md-12">
									<div class="main-loader mt-50">
										<div class="spinner">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</div>
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>

</body>

</html>