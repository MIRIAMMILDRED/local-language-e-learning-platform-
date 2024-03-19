<!DOCTYPE html>
<?php require "userinfo.php"; ?>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Cursus - All Live Courses</title>
		
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
	<?php include("header.php");?>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<?php include("menu.php");?>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row"><?php 
							$query = mysqli_query($conn,"SELECT * FROM courses");
							?>
					<div class="col-xl-12 col-lg-8">
					
						<div class="section3125">
							<h4 class="item_title">All Live Courses</h4>
							<div class="la5lo1">
								<div class="row"><?php while($course = mysqli_fetch_array($query)){ ?>
									<div class="col-md-3">
										<div class="stream_1 mb-30">
											<a href="course_detail_view.php?course_id=<?php echo $course['ID'];?>" class="stream_bg">
												<img src="../Teachers/uploads/thumbnails/<?php echo $course['thumbnail'];?>" alt="">
												<h4>John Doe</h4>
												<p>live<span></span></p>
											</a>
										</div>
									</div><?php } ?>
									
										<div class="main-loader mt-20">													
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
		</div>
		<?php include("footer.php");?>
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