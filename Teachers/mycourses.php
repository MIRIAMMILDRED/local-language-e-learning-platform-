﻿<!DOCTYPE html>
<?php require 'userinfo.php'; ?>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Cursus - My Courses</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu1.min.css" rel="stylesheet">
		<link href="css/instructor-dashboard.css" rel="stylesheet">
		<link href="css/instructor-responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		<link href="css/datepicker.min.css" rel="stylesheet">
		
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
										
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="my_courses_tabs" style="margin-top: 0;">
							<ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill" href="#pills-my-courses" role="tab" aria-controls="pills-my-courses" aria-selected="true"><i class="uil uil-book-alt"></i>My Courses</a>
								</li>
								<!--<li class="nav-item">
									<a class="nav-link" id="pills-my-purchases-tab" data-toggle="pill" href="#pills-my-purchases" role="tab" aria-controls="pills-my-purchases" aria-selected="false"><i class="uil uil-download-alt"></i>My Purchases</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-upcoming-courses-tab" data-toggle="pill" href="#pills-upcoming-courses" role="tab" aria-controls="pills-upcoming-courses" aria-selected="false"><i class="uil uil-upload-alt"></i>Upcoming Courses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-discount-tab" data-toggle="pill" href="#pills-discount" role="tab" aria-controls="pills-discount" aria-selected="false"><i class="uil uil-tag-alt"></i>Discounts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-promotions-tab" data-toggle="pill" href="#pills-promotions" role="tab" aria-controls="pills-promotions" aria-selected="false"><i class="uil uil-megaphone"></i>Promotions</a>
								</li>-->
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th>Title</th>
													<th class="text-center" scope="col">Publish Date</th>
													<th class="text-center" scope="col">Class</th>
													<th class="text-center" scope="col">Parts</th>
													<th class="text-center" scope="col">Language</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = mysqli_query($conn,"SELECT * FROM courses WHERE teacher_id = '$teacher_id'");
												while($row = mysqli_fetch_array($query)){

												?>
												<tr>
													<td class="text-center"><?php echo $row['ID'];?></td>
													<td><?php echo $row['Name'];?></td>
													<td class="text-center"><?php echo date("d M Y 
													| h:i", $row['time_added']);?></td>
													<td class="text-center"><?php echo $row['course_level'];?></td>
													<td class="text-center">5</td>
													<td class="text-center"><a href="#"><?php echo $row['language'];?></a></td>
													<td class="text-center">
														<a href="curriculum.php?course_id=<?php echo $row['ID'];?>" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr><?php }?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-my-purchases" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta" scope="col">Title</th>
													<th class="cell-ta" scope="col">Vendor</th>
													<th class="cell-ta" scope="col">Category</th>
													<th class="text-center" scope="col">Delivery Type</th>
													<th class="text-center" scope="col">Price</th>
													<th class="text-center" scope="col">Purchase Date</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">001</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="cell-ta"><a href="#">Zoena Singh</a></td>
													<td class="cell-ta"><a href="#">Web Development</a></td>
													<td class="text-center"><b class="course_active">Download</b></td>
													<td class="text-center">$15</td>
													<td class="text-center">25 March 2020</td>
													<td class="text-center">
														<a href="#" title="Download" class="gray-s"><i class="uil uil-download-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
														<a href="#" title="Print" class="gray-s"><i class="uil uil-print"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">002</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="cell-ta"><a href="#">Rock William</a></td>
													<td class="cell-ta"><a href="#">C++</a></td>
													<td class="text-center"><b class="course_active">Download</b></td>
													<td class="text-center">$20</td>
													<td class="text-center">20 March 2020</td>
													<td class="text-center">
														<a href="#" title="Download" class="gray-s"><i class="uil uil-download-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
														<a href="#" title="Print" class="gray-s"><i class="uil uil-print"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>								
								</div>
								<div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta">Title</th>
													<th class="text-center" scope="col">Thumbnail</th>
													<th class="text-center">Category</th>
													<th class="text-center">Price</th>
													<th class="text-center">Date</th>
													<th class="text-center" scope="col">Status</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">01</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center">$15</td>
													<td class="text-center">9 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">02</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center">$12</td>
													<td class="text-center">8 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">03</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center"><a href="#">View</a></td>
													<td class="text-center"><a href="#">Photography</a></td>
													<td class="text-center">$6</td>
													<td class="text-center">7 April 2020</td>
													<td class="text-center"><b class="course_active">Pending</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-discount" role="tabpanel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<div class="panel-title adcrse1250">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
														New Discount
													</a>
												</div>
											</div>
											<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
												<div class="panel-body adcrse_body">
													<div class="row">
														<div class="col-lg-8">
															<div class="discount_form">
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="mt-20 lbel25">	
																			<label>Course*</label>
																		</div>
																		<select class="ui hj145 dropdown cntry152 prompt srch_explore">
																			<option value="">Select Course</option>
																			<option value="1">Course Title Here</option>
																			<option value="2">Course Title Here</option>
																			<option value="3">Course Title Here</option>
																			<option value="4">Course Title Here</option>
																			<option value="5">Course Title Here</option>
																			<option value="6">Course Title Here</option>
																			<option value="7">Course Title Here</option>
																		</select>
																	</div>
																	<div class="col-lg-6 col-md-6">	
																		<div class="ui search focus mt-20 lbel25">
																			<label>Discount Amount</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore" type="number" name="off" value="" required="" min="1" max="99" placeholder="Percent (eg. 20 for 20%)">															
																			</div>
																		</div>										
																	</div>
																	<div class="col-lg-6 col-md-6">	
																		<div class="ui search focus mt-20 lbel25">
																			<label>Start Date</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore datepicker-here" type="text" data-language="en" placeholder="dd/mm/yyyy">															
																			</div>
																		</div>										
																	</div>
																	<div class="col-lg-6 col-md-6">	
																		<div class="ui search focus mt-20 lbel25">
																			<label>End Date</label>
																			<div class="ui left icon input swdh19">
																				<input class="prompt srch_explore datepicker-here" type="text" data-language="en" placeholder="dd/mm/yyyy">															
																			</div>
																		</div>										
																	</div>
																	<div class="col-lg-6 col-md-6">	
																		<button class="discount_btn" type="submit">Save Changes</button>										
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">Item No.</th>
													<th class="cell-ta">Course</th>
													<th class="text-center" scope="col">Start Date</th>
													<th class="text-center" scope="col">End Date</th>
													<th class="text-center" scope="col">Discount</th>
													<th class="text-center" scope="col">Status</th>
													<th class="text-center" scope="col">Actions</th>
												</tr>
											</thead>
											<tbody>
                                                <tr>
													<td class="text-center">01</td>
													<td class="cell-ta">Course Title Here</td>
													<td class="text-center">02 November 2019</td>
													<td class="text-center">19 November 2019</td>
													<td class="text-center">20%</td>
													<td class="text-center"><b class="course_active">Active</b></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
                                            </tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-promotions" role="tabpanel" aria-labelledby="pills-promotions-tab">
									<div class="promotion_tab mb-10">
										<img src="images/dashboard/promotion.svg" alt="">
										<h4>Baby promotion plan is activated!</h4>
										<p>By activating promotion plans you can improve course views and sales.</p>
										<button class="plan_link_btn" onclick="window.location.href = '#';">Change New Plan</button>
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
	<script src="js/custom1.js"></script>
	<script src="js/night-mode.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/i18n/datepicker.en.js"></script>
	
</body>
</html>