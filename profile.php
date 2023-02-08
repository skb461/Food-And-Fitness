<?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodnfitness";

  $id = $_GET['data'];

  $conn = mysqli_connect($hostname,$username,$password,$dbname);

  $select_info = "SELECT * FROM profile_check_demo_4 WHERE id = '$id'";

  $past = mysqli_query($conn,$select_info);

  $s = mysqli_fetch_assoc($past);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>FoodnFitness / Profile</title>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	</head>
	<style>
		.sidenav {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #EBEBEB;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidenav p {
		  padding: 4px 4px 4px 16px;
		  text-decoration: none;
		  font-size: 15px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		  cursor: pointer;
		}

		.sidenav p:hover {
		  color: #000;
		}

		.sidenav .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		#main {
		  transition: margin-left .5s;
		  padding: 16px;
		}

		.menu_open_byImage {
			width: 50px;
		}

		.menu_open_byImage_2 {
			width: 200px;
		}

		.card {
			background: #FAFAFA;
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
		}

		.input_login{
			border-radius: 10px;
			border: 0px;
			border-bottom: #3498DB 3px solid;
		}

		.bg_card_holder {
			background: rgba(225, 225, 225, 0.4);
		}

		.main_logo {
			margin-top: -120px;
		}

		.right_side_static {
			height: 70vh;
			transition: 0.5s;
			border-left: 8px solid #EBEBEB;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
	</style>
	<body>



		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>

				<?php 
					if ($s['id'] == $id) {
						if ($s['gender'] === "Male") {
							$imgName = "bay.png";
						}
						if ($s['gender'] === "Female") {
							$imgName = "woman.png";
						}
						if ($s['gender'] === "Other") {
							$imgName = "user.png";
						}
					}
				?>

		  	<img src="image/<?php echo $imgName ?>" class="p-md-2 py-lg-4 menu_open_byImage_2 d-block mx-auto" alt="">

			<h2 class="text-center p-lg-4 p-md-2 mb-lg-5 my-md-2">
				<?php 
					if ($s['id'] == $id) {
						echo $s['name'];
					}
				?>
			</h2>

			<div class="p-lg-4 p-md-2 my-lg-5 my-md-2">
				<p>Age: <?php 
					if ($s['id'] == $id) {
						echo $s['age'];
					}
				?>
				</p>
				<p>
					Weight: <?php 
					if ($s['id'] == $id) {
						echo $s['weight'];
					}
				?>
				</p>
				<p>Height: <?php 
					if ($s['id'] == $id) {
						echo $s['height'];
					}
				?>
				</p>
				<p>BMI: <?php 
					if ($s['id'] == $id) {
						echo $s['bmi'];
					}
				?>
				</p>
				<p>Blood Presure: <?php 
					if ($s['id'] == $id) {
						echo $s['bld_psr_hi'].'/'.$s['bld_psr_low'];
					}
				?>
				</p>
				<p>Blood Suger: <?php 
					if ($s['id'] == $id) {
						echo $s['bld_sgr'];
					}
				?>
				</p>
			</div>

			<div class="p-lg-4 p-md-2 my-lg-5 my-md-2">
				
				<h4>Health Status</h4>


				<?php
					if ($s['id'] == $id) {
						if ($s['bld_psr_hi'] < 90 && $s['bld_psr_low'] < 60) {
							$coloBldPsr = "bg-primary";
							$textBldPsr = "Low";
						}
						if ($s['bld_psr_hi'] < 125 && $s['bld_psr_hi'] > 90 && $s['bld_psr_low'] < 90 && $s['bld_psr_low'] > 60) {
							$coloBldPsr = "bg-success";
							$textBldPsr = "Normal";				
						}
						if ($s['bld_psr_hi'] >= 125 && $s['bld_psr_low'] >= 90) {
							$coloBldPsr = "bg-danger";
							$textBldPsr = "High";					
						}
					}
				?>


				<p class="text-muted">1. Blood Pressure (<?php echo $textBldPsr ?>)</p>
				<div class="progress">
				  <div class="progress-bar <?php echo $coloBldPsr ?>" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br>

				<?php
					if ($s['id'] == $id) {
						if ($s['bmi'] < 18.5) {
							$coloBmi = "bg-primary";
							$textBmi = "Under Weight";
						}
						if ($s['bmi'] >= 18.5 && $s['bmi'] <= 24.6) {
							$coloBmi = "bg-success";
							$textBmi = "Normal";				
						}
						if ($s['bmi'] >= 24.7 && $s['bmi'] <= 29.5) {
							$coloBmi = "bg-warning";
							$textBmi = "Obesity 1";						
						}
						if ($s['bmi'] > 29.5) {
							$coloBmi = "bg-danger";
							$textBmi = "Over Weight";					
						}
					}
				?>

				<p class="text-muted">2. BMI (<?php echo $textBmi ?>)</p>

				<div class="progress">
				  <div class="progress-bar <?php echo $coloBmi ?>" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br>

				<?php
					//$bld_sgr_color = "bg-danger";
					if ($s['id'] == $id) {
						if ($s['bld_sgr'] < 2.6) {
							$bld_sgr_color = "bg-primary";
							$textSgr = "Low";
						}
						if ($s['bld_sgr'] >= 2.6 && $s['bld_sgr'] <= 8.2) {
							$bld_sgr_color = "bg-success";
							$textSgr = "Normal";					
						}
						if ($s['bld_sgr'] >= 8.3 && $s['bld_sgr'] <= 10) {
							$bld_sgr_color = "bg-warning";
							$textSgr = "Warning";					
						}
						if ($s['bld_sgr'] > 10) {
							$bld_sgr_color = "bg-danger";
							$textSgr = "High";				
						}
					}

				?>

				<p class="text-muted">3. Your Sugar Level (<?php echo $textSgr ?>)</p>

				<div class="progress">
				  <div class="progress-bar <?php echo $bld_sgr_color ?>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br>

			</div>

	      	<form action="index.php" method="POST" accept-charset="utf-8">

	      		<button type="submit" id="btn" class="btn btn-outline-dark mx-5 mb-5">Log Out</button>

	      	</form>

		</div>
		<span style="cursor:pointer" onclick="openNav()"> 
		  	<img src="image/menu.png" class="p-md-2 py-lg-4 menu_open_byImage" alt="">
		</span>
		<div class="row main_logo">
			<img src="image/foodnfitness_logo.png" class="p-md-2 py-lg-1 col-lg-3 col-md-4 ml-auto mt-5" alt="">
		</div>

		<hr class="py-3 mt-5 bg-primary">

		<div id="main" class="row">

			<div class="col-9">

			 	<div class="container-fluid">
			 		<div class="row">

			 			<div class="card text-center mx-auto my-3" style="width: 30rem;">
						  <div class="card-body">
						    <h1 class="card-title">Eat Now</h1>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#foodModal">Check Food</a>


						    <!-- Modal -->
							<div class="modal fade bg_card_holder" id="foodModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">

							      <div class="modal-header text-center">
							        <h5 class="modal-title" id="foodTitle">Check Food</h5>
							      </div>

							      <div class="modal-body">

							      	<input type="text" name="fname" id="fname" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Food Name Please" onkeyup="showHint(this.value)"><br>

							      </div>

							      <div class="modal-footer text-left">
							        
											<p class="text-dark">
												<span id="txtHint">( Status ) </span>
											</p>

							      </div>

							    </div>
							  </div>
							</div>


						  </div>
						</div>

			 			<div class="card text-center mx-auto my-3" style="width: 30rem;">
						  <div class="card-body">
						    <h1 class="card-title">BMI</h1>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bmiModal">Measure</a>


						    <!-- Modal -->
							<div class="modal fade bg_card_holder" id="bmiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">

							      <div class="modal-header text-center">
							        <h5 class="modal-title" id="foodTitle">BMI</h5>
							      </div>

							      <div class="modal-body">
							      	

							      	<form action="post.php" method="POST" accept-charset="utf-8">

							      		<input type="hidden" name="id" value="<?php echo $id ?>">

							      		<input type="number" name="bodyHeight" id="bodyHeight" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Your Height Please"><br>

												<input type="number" name="bodyWeight" id="bodyWeight" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Your Weight Please"><br>

							      		<button type="submit" id="btn" class="btn btn-primary mr-auto">Measure</button>

							      	</form>


							      </div>

							      <!-- <div class="modal-footer">
							        <button type="button" id="btn" class="btn btn-primary mr-auto col-4" data-dismiss="modal">Measure</button>
							      </div> -->

							    </div>
							  </div>
							</div>


						  </div>
						</div>

			 		</div>
			 		<div class="row">

			 			<div class="card text-center mx-auto my-3" style="width: 30rem;">
						  <div class="card-body">
						    <h1 class="card-title">Blood Presure</h1>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bpModal">Measure</a>


						    <!-- Modal -->
							<div class="modal fade bg_card_holder" id="bpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">

							      <div class="modal-header text-center">
							        <h5 class="modal-title" id="foodTitle">Blood Presure</h5>
							      </div>

							      <div class="modal-body">

							      	<form action="post.php" method="POST" accept-charset="utf-8">

							      		<input type="hidden" name="id" value="<?php echo $id ?>">
							      		<input type="number" name="bloodPressure_hi" id="SYSTOLICbloodPressure" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Your SYSTOLIC Blood Pressure Please"><br>

										<input type="number" name="bloodPressure_low" id="DIASTOLICbloodPressure" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Your DIASTOLIC Blood Pressure Please"><br>

							      		<button type="submit" id="btn_psr" class="btn btn-primary mr-auto">Update</button>

							      	</form>

									

							      </div>

							      <!-- <div class="modal-footer">
							        <button type="button" id="btn_psr" class="btn btn-primary mr-auto col-4" data-dismiss="modal">Measure</button>
							      </div> -->

							    </div>
							  </div>
							</div>


						  </div>
						</div>

			 			<div class="card text-center mx-auto my-3" style="width: 30rem;">
						  <div class="card-body">
						    <h1 class="card-title">Blood Suger</h1>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bsModal">Measure</a>


						    <!-- Modal -->
							<div class="modal fade bg_card_holder" id="bsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">

							      <div class="modal-header text-center">
							        <h5 class="modal-title" id="foodTitle">Blood Suger</h5>
							      </div>

							      <div class="modal-body">

							      	<form action="post.php" method="POST" accept-charset="utf-8">

							      		<input type="hidden" name="id" value="<?php echo $id ?>">
							      		<input type="number" name="bloodSuger" id="bloodSuger" class="d-block mx-auto col-12 p-2 input_login" placeholder="Enter Your Blood Suger Please"><br>

							      		<button type="submit" id="btn_sgr" class="btn btn-primary mr-auto">Update</button>

							      	</form>

							      </div>

							      <!-- <div class="modal-footer">
							        
							      </div> -->

							    </div>
							  </div>
							</div>


						  </div>
						</div>

			 		</div>		
			 	</div>

			</div>

			<div class="col-3 right_side_static px-3 ml-auto">

				<?php
					if ($s['id'] == $id) {
						if ($s['bmi'] < 18.5) {
							$sgText = "You are underweight"."<br><br>"."Sleep more than 8 hours"."<br><br>"."Eat helathy foods";
						}
						if ($s['bmi'] >= 18.5 && $s['bmi'] <= 24.6) {
							$sgText = "You are fit"."<br><br>"."Eat balanced food"."<br><br>"."Walk 5000 steps everyday";				
						}
						if ($s['bmi'] >= 24.7 && $s['bmi'] <= 29.5) {
							$sgText = "You are overweight"."<br><br>"."Walk 5000+ steps everyday"."<br><br>"."Run or swim 1 hour"."<br><br>"."Eat low calories food"."<br><br>"."Skip oily foods";					
						}
						if ($s['bmi'] > 29.5) {
							$sgText = "Your health is at risk"."<br><br>"."Consult with a doctor";					
						}
					}
				?>

				<h1 class="text-center p-lg-4 p-md-2 mb-lg-5 my-md-2">Sugestion</h1>
				
				<p class="text-muted h5 py-3"><?php echo $sgText ?></p>
				


			</div>

		</div>

		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			}


			function showHint(str) {
			  if (str.length == 0) {
			    document.getElementById("txtHint").innerHTML = "";
			    return;
			  } else {
			    var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
			        document.getElementById("txtHint").innerHTML = this.responseText;
			      }
			    };
			    xmlhttp.open("GET", "gethint.php?q=" + str, true);
			    xmlhttp.send();
			  }
			}
		</script>


		<!-- <script type="text/javascript" src="script.js"></script> -->

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
