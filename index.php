<?php
	$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodnfitness";

  $conn = mysqli_connect($hostname,$username,$password,$dbname);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>FoodnFitness</title>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	  
	  <style type="text/css">
		.bg_card_holder{
			background: rgba(225, 225, 225, 0.8);
		}

		.card {
			padding: 5px;
			border-radius: 10px;
			background: rgba(223, 223, 223, 0.6);
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
		}

		.motiv {
			margin-top: -1200px;
			margin-left: 30px;
			padding-top: 30rem;
			margin-bottom: 30rem;
			border-radius: 10px;
			background: rgba(0, 0, 0, 0.4);
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		.input_login{
			border-radius: 10px;
			border: 0px;
			border-bottom: #3498DB 3px solid;
		}
		.crsl_image{
			width: 100%;
		}
	  </style>
	</head>
	<body>

		<!-- head -->
		<section id="head" class="container-fluid my-3">
			<img src="image/foodnfitness_logo.png" class="p-md-2 py-lg-1 bg-transparent border-0 col-4" alt="">
			<a href="login_main.html" title="LogIn" class="btn btn-primary float-right p-2 my-lg-4 my-md-2 my-sm-0 mx-2" data-toggle="modal" data-target="#logInModal">Log In</a>

						    <!-- Modal -->
			<div class="modal fade bg_card_holder" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">

			      <div class="modal-body">

					<div class="d-block mx-auto">
						<img src="image/foodnfitness_logo.png" class="p-md-1 bg-transparent border-0 col-9 d-block mx-auto" alt="">

						<h2 class="text-center text-dark py-md-3">Log In</h2>

						<form action="logincheck.php" method="post">

							<input type="text" name="username" id="username" class="d-block mx-auto col-9 p-2 input_login" placeholder="Enter username Please"><br>

							<input type="password" name="password" id="password" class="d-block mx-auto col-9 p-2 input_login" placeholder="Enter Password Please"><br>

							<div class="row">
								<button type="submit" class="btn btn-primary p-2 col-3 mx-auto" name="sub">Log In</button>
							</div>


						</form>
					</div>

			      </div>

			    </div>
			  </div>
			</div>



			<a href="registration_main.php" title="Registration" class="btn btn-primary float-right p-2 my-lg-4 my-md-2 my-sm-0 mx-2">Registration</a>
		</section>
		<hr class="py-3 bg-primary mt-lg-0 mt-md-3">
		<section id="main_body">

			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="image/bg2.jpg" class="crsl_image">  
			    </div>
			    <div class="carousel-item">
			      <img src="image/bg3.jpg" alt="Chicago" class="crsl_image">  
			    </div>
			    <div class="carousel-item">
			      <img src="image/bg1.jpg" alt="New York" class="crsl_image">  
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>


			<h1 class="col-lg-5 py-md-2 py-lg-5 text-light motiv">
				Stay healthy and fit.<br>
				Take balanced diet everyday.
			</h1>
			<div class="container-fluid bg_card_holder px-lg-5 py-lg-2 p-md-3 mt-5">
				<div class="row mt-5">

					<div class="card mx-auto p-2 border-0 my-3" style="width: 18rem;">
					  <img class="card-img-top" src="image/settings.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">BMI</h5>
					    <a href="https://en.wikipedia.org/wiki/Body_mass_index" target="_blank" class="btn btn-primary">learn More</a>
					  </div>
					</div>

					<div class="card mx-auto p-2 border-0 my-3" style="width: 18rem;">
					  <img class="card-img-top" src="image/loss.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Blood Pressure</h5>
					    <a href="https://en.wikipedia.org/wiki/Blood_pressure" target="_blank" class="btn btn-primary">learn More</a>
					  </div>
					</div>

					<div class="card mx-auto p-2 border-0 my-3" style="width: 18rem;">
					  <img class="card-img-top" src="image/checklist.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Blood Sugar</h5>
					    <a href="https://en.wikipedia.org/wiki/Blood_Sugar_/_Axle_Grinder" target="_blank" class="btn btn-primary">learn More</a>
					  </div>
					</div>

				</div>
			</div>
		</section>






		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
