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
	  <title>FoodnFitness / Log In or Registration</title>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	</head>
	<style type="text/css">
		.log_in_body{
			margin-top: 50px;
		}

		.jumbotron{
			border-radius: 10px;
		}

		.input_login{
			border-radius: 10px;
			border: 0px;
			border-bottom: #3498DB 3px solid;
		}
	</style>
	<body>

		<div class="container log_in_body">
			<img src="image/foodnfitness_logo.png" class="p-md-2 py-lg-1 bg-transparent border-0 col-7 d-block mx-auto" alt="">

			<h2 class="text-center text-dark py-lg-5 py-md-3">Registration</h2>

			<div class="jumbotron">
				<form action="" method="post" accept-charset="utf-8">
					
					<div class="d-block mx-auto">
						<div class="row">
							<div class="col-6">

								<input type="text" name="name" id="name" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter Your Name Please"><br>

								<input type="date" name="date" id="date" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter Your BOD Please"><br>

								<input type="number" name="phnNumber" id="phnNumber" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter Phone Number please"><br>	

							</div>
							<div class="col-6">
								<input type="text" name="userName" id="userName" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter Your Username Please"><br>

								<select class="d-block mx-auto p-2 input_login col-12" name="gender" id="gender">
									<option value="">Select Your Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select><br>

								<input type="email" name="email" id="email" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter E-mail Please"><br>						
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<input type="password" name="password" id="password" class="d-block mx-auto p-2 input_login col-12" placeholder="Enter Password Please"><br>						
							</div>
							<div class="col-6">
								<input type="password" name="comPassword" id="password" class="d-block mx-auto p-2 input_login col-12" placeholder="Confirm Your Password Please"><br>						
							</div>
						</div>

									
									
						<div class="row">

							<button type="submit" name="sub" value="registration" class="btn btn-primary p-2 mx-auto">Registration</button>
							
						</div>
					</div>

				</form>
			</div>

		</div>

<?php

if(isset($_POST["sub"]))
	{
		$hostname = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "foodnfitness";

	  $conn = mysqli_connect($hostname,$username,$password,$dbname);

		$name = $_POST["name"];
		$phnNumber = $_POST["phnNumber"];
		$id = $_POST["userName"];
		$email = $_POST["email"];
		$gender = $_POST["gender"];
		$comPassword = $_POST["comPassword"];
		$date = $_POST["date"];

		$dateFormat = DateTime::createFromFormat("Y-m-d", $date);

		$today = new Datetime(date('Y-m-d'));
		$diff = $today->diff($dateFormat);

		$age = $diff->y;
		

		$info = "INSERT INTO profile_check_demo_4 (id,name,age,phnnumber,email,gender,compassword) VALUES ('$id','$name','$age','$phnNumber','$email','$gender','$comPassword')";

		$a = mysqli_query($conn,$info);


		$id_pass = $id;
		header('location:profile.php?data='.$id_pass);

	}
?>
		
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
