<!DOCTYPE html>
<?php require "userinfo.php"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Cursus - Dashboard</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/vertical-responsive-menu1.min.css" rel="stylesheet">
	<link href="css/instructor-dashboard.css" rel="stylesheet">
	<link href="css/instructor-responsive.css" rel="stylesheet">
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
					<div class="col-lg-12">
						<h2 class="st_title"><i class="uil uil-apps"></i> Instructor Dashboard</h2>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Current Enrollment</h5>
								<h2>1500</h2>
								<span class="crdbg_2">New 125</span>
							</div>
							<div class="card_dash_right">
								<img src="images/dashboard/graduation-cap.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Courses</h5>
								<h2>130</h2>
								<span class="crdbg_3">New 5</span>
							</div>
							<div class="card_dash_right">
								<img src="images/dashboard/online-course.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Students Taught</h5>
								<h2>2650</h2>
								<span class="crdbg_4">New 245</span>
							</div>
							<div class="card_dash_right">
								<img src="images/dashboard/knowledge.svg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">Latest Courses performance</h4>
							<div class="la5lo1">
								<div class="owl-carousel courses_performance owl-theme">
									<?php
									$query = mysqli_query($conn, "SELECT * from courses WHERE teacher_id='$teacher_id'");
									while ($course = mysqli_fetch_array($query)) {

									?>
										<div class="item">
											<div class="fcrse_1">
												<a href="course_detail.php?course_id=<?php echo $course['ID'];?>" class="fcrse_img">
													<img src="./uploads/thumbnails/<?php echo $course['thumbnail']; ?>" alt="">
													<div class="course-overlay"></div>
												</a>
												<div class="fcrse_content">
													<div class="vdtodt">
														<span class="vdt14"><?php echo date("d/M/y h:i a", $course['time_added']); ?></span>
													</div>
													<a href="course_detail.php?course_id=<?php echo $course['ID'];?> " class="crsedt145"><?php echo $course['Name']; ?></a>
													<div class="allvperf">
														<div class="crse-perf-left"><?php echo $course['short_description']; ?></div>

													</div>
													<div class="auth1lnkprce">
														<a href="course_detail.php?course_id=<?php echo $course['ID'];?>"" class="upload_btn">View Class</a>
													</div>

												</div>
											</div>
										</div><?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">News</h4>
							<div class="la5lo1">
								<div class="owl-carousel edututs_news owl-theme">
									<?php
									$query = mysqli_query($conn, "SELECT * from courses WHERE teacher_id='$teacher_id' ORDER BY ID DESC");
									while ($course = mysqli_fetch_array($query)) {

									?>
										<div class="item">
											<div class="fcrse_1">
												<a href="course_detail.php?course_id=<?php echo $course['ID'];?>" class="fcrse_img">
													<img src="./uploads/thumbnails/<?php echo $course['thumbnail']; ?>" alt="">
												</a>
												<div class="vdtodt">
														<span class="vdt14"><?php echo date("d/M/y h:i a", $course['time_added']); ?></span>
													</div>
												<div class="fcrse_content">
													<a href="course_detail.php?course_id=<?php echo $course['ID'];?>" class="crsedt145 mt-15"><?php echo $course['Name']; ?></a>
													<p class="news_des45"><?php echo $course['short_description']; ?></p>
													<div class="auth1lnkprce">
														<a href="course_detail.php?course_id=<?php echo $course['ID'];?>" class="upload_btn">View Class</a>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--start footer-->
		<?php include("footer.php"); ?>
		<!--end footer-->
	</div>
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom1.js"></script>
	<script src="js/night-mode.js"></script>

</body>

</html>