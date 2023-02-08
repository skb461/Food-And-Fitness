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
			margin-top: 100px;
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

			<h2 class="text-center text-dark py-lg-5 py-md-3">Log In</h2>

			<div class="jumbotron">
				<div class="d-block mx-auto">
					<input type="email" name="email" id="email" class="d-block mx-auto col-5 p-2 input_login" placeholder="Enter Email Please"><br>
					<input type="password" name="password" id="password" class="d-block mx-auto col-5 p-2 input_login" placeholder="Enter Password Please"><br>
					<div class="row">
						<a href="profile.html" title="LearnMore" class="btn btn-primary p-2 col-2 mx-auto">Log In</a>
					</div>
				</div>
			</div>

		</div>

		
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
