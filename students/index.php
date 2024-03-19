<!DOCTYPE html>
<?php require "userinfo.php"; ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Cursus - Index</title>

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
							<?php 
							$query=(mysqli_query($conn, "SELECT * FROM courses")); ?>
							
							<h4 class="item_title">Live Classes</h4>
							<a href="live_streams.html" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel live_stream owl-theme">
									<?php
									
									while($course = mysqli_fetch_array($query)) {
										
										?>
									<div class="item">
										<div class="stream_1">
											<a href="live_output.html" class="stream_bg">
												<img src="../Teachers/uploads/thumbnails/<?php echo $course['thumbnail'];?>" alt="">
											<h4>John Doe</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="section3125 mt-50">
						<?php 
							$query = mysqli_query($conn,"SELECT * FROM course_registration WHERE student_id = '$student_id'");
							
							?>
							<h4 class="item_title">Enrolled Courses</h4>
							<a href="#" class="see150">See all</a>
							<div class="la5lo1">
								<div class="owl-carousel featured_courses owl-theme">
								<?php while($course = mysqli_fetch_array($query)){ 
									$cid = $course['course_id']; 
									
									$query2 = mysqli_query($conn,"SELECT * FROM courses WHERE ID = '$cid'");
									$course_info = mysqli_fetch_array($query2);
									?>
									<div class="item">
										<div class="fcrse_1 mb-20">
											<a href="course_detail_view.php?course_id=<?php echo $cid?>" class="fcrse_img">
												<img src="../Teachers/uploads/thumbnails/<?php echo $course_info['thumbnail'];?>"" alt="">
												<div class="course-overlay">
													<div class="badge_seller">Class <?php echo $course_info['course_level'];?></div>
													
													<span class="play_btn1"><i class="uil uil-play"></i></span>
													<div class="crse_timer">
														25 hours
													</div>
												</div>
											</a>
											<div class="fcrse_content">
												
												<div class="vdtodt">
													<span class="vdt14"><?php echo  date('d/M/Y  h: i a',$course_info['time_added']);?></span>
													<span class="vdt14"><?php $days = round(($time-$course_info['time_added'])/86400); ?> days ago</span>
												</div>
												<a href="course_detail_view.php?course_id=<?php echo $cid?>" class="crse14s"><?php echo $course_info['short_description']?></a>
												<a href="course_detail_view.php?course_id=<?php echo $cid?>" class="crse-cate"><?php echo $course_info['Name'];?></a>
												<div class="auth1lnkprce">
													<a href="course_detail_view.php?course_id=<?php echo $cid?>" class="upload_btn">View Class</a>
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