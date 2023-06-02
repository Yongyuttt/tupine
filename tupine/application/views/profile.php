<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/css/bootstrap.min.css">
	<title>TSE Admission</title>

</head>

<body>
	<section>

		<nav class="navbar navbar-light" style="background-color: #EEEEEE;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/logo-tupine.png") ?>" height="120" alt="tupine logo" loading="lazy" /></a>

				<div class="btn-group me-md-5" role="group">
					<button class="btn  btn-danger me-md-5 dropdown-toggle " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;" type="button"><b><?php echo $users->firstname ?></b></button>
					<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" style="width:50px;" href="<?php echo base_url("") ?>">Profile</a></li>
						<li><a class="dropdown-item" style="width:50px;" href="<?php echo base_url("Account/enroll") ?>">Eroll</a></li>
						<li><a class="dropdown-item" style="width:50px;" href="<?php echo base_url("Account/logout") ?>">LOG OUT</a></li>
					
					</ul>
				</div>
			</div>
		</nav>

	</section>


	<div class="container">
		<div class="row">
			<section>
				<div class="col-12 pt-3" style="border-bottom: 6px solid #BB0000;">
					<button class="btn btn-primary me-md-2 fs-5 " type="button" style="background-color:#BB0000; color: #FFFFFF; border:none;">Application Schedule and information</button>
				</div>
			</section>

			<section>
				<div class="text-box mt-3">
					<div style="text-align: center" ;>
						<h4>TEP – TEPE Inter Admission 2023 <br> TEP-TEPE Inter Program Admission 3 <br> 24 May - 8 Jun 2023</h4>
					</div>
					<div style="color: red; text-align: center" ;>
						<small>The server will open on 24 May 2023 at 10:00 am. ( Bangkok,Thailand ).<br>*** The system will clear the information of applicants who applied before May 24, 2023 at 10:00 a.m. Please register again. ***</small>
					</div>
				</div>
			</section>

			<section>
				<div class="container-fluid">
					<div class="row justify-content-evenly">
						<div class="col-6 p-3">
							<div class="card">
								<div class="card-header fs-4">
									<b>News</b>
								</div>
								<div class="card-body">
									<h5 class="card-title">กำหนดการขอผ่อนผัน ภาคการศึกษาที่ 1/2566</h5>
									<p class="card-text">ยื่นคำร้องขอผ่อนผันค่าใช้จ่าย ภายในวันที่ 25 พฤษภาคม -20 มิถุนายน 2566</p>
									<a href="#" class="btn btn-secondary">รายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>

						<div class="col-6 p-3">
							<div class="card">
								<div class="card-header fs-4">
									<b>Annoucement</b>
								</div>
								<div class="card-body">
									<h5 class="card-title">ตารางสอน ภาคการศึกษาที่ 3/2565</h5>
									<p class="card-text">เปิดเรียน วันที่ 12 มิถุนายน 2566</p>
									<a href="#" class="btn btn-secondary">รายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="col-12 mt-3 mb-3">
					<div class="box " style="border-radius:5px; border:1px solid #CCCCCC; ">
						<div class="box-header fs-5" style="background-color: #EEEEEE;padding-left:8px; padding-top:10px; padding-bottom:10px;">
							<b>Application Schedule and information</b>
						</div>

						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								</thead>
								<tbody>

									<tr class="row mt-2" style="margin-left:5px; margin-right:5px; background-color:#880000; color:#FFFFFF;">

										<td class="col-4">
											<h5><b>Round / details</b></h5>
										</td>
										<td class="col-4">
											<h5><b>Date</b></h5>
										</td>
										<td class="col-4">
											<h5><b>Place</b></h5>
										</td>

									</tr>


									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4 ">
											Application period
										</td>
										<td class="col-4">
											24 May – 8 June 2023
										</td>
										<td class="col-4  ">
											www.tep.engr.tu.ac.th/admission
										</td>
									</tr>

									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4">
											Announcement of applicant eligible for interview
										</td>
										<td class="col-4">
											14 June 2023
										</td>
										<td class="col-4">
											www.tep.engr.tu.ac.th/admission
										</td>
									</tr>

									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4">
											Interview date
										</td>
										<td class="col-4">
											16 June 2023
										</td>
										<td class="col-4">
											Online Interview
										</td>
									</tr>

									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4">
											Announcement of applicants who pass interview
										</td>
										<td class="col-4">
											21 June 2023
										</td>
										<td class="col-4">
											www.tep.engr.tu.ac.th/admission
										</td>
									</tr>

									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4">
											Confirmation date in TCAS clearing house ( Only For Thai Applicants)
										</td>
										<td class="col-4">
											23-24 June 2023
										</td>
										<td class="col-4">
											student.mytcas.com
										</td>
									</tr>

									<tr class="row" style="margin-left:5px; margin-right:5px;">
										<td class="col-4">
											Announcement of the list of eligible applicants:
										</td>
										<td class="col-4">
											3 July 2023
										</td>
										<td class="col-4">
											www.tep.engr.tu.ac.th/admission
										</td>
									</tr>

								</tbody>
							</table>

						</div>
					</div>
				</div>
			</section>

		</div>
	</div>

	<section>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">

					<div class="container">

						<a class="navbar-brand mt-2 ms-2 ms-lg-0" href="#">
							<img src="<?php echo base_url("assets/tu-logo.png") ?>" height="50" alt="" />
						</a>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto" style="text-align:left;">
								<li class="nav-item">
									<p class=""><b>คณะวิศวกรรมศาสตร์</b><br>99 หมู่ 18, ถ.พหลโยธิน, ต.คลองหนึ่ง, อ.คลองหลวง,<br> จ.ปทุมธานี 12120 Tel. +66 (0) 2564 3001-9</p>

								</li>
							</ul>
						</div>

					</div>

				</nav>
			</div>
		</div>

	</section>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.0.js') ?>"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>

</html>