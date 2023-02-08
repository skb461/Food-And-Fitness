<?php
	
	$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodnfitness";

  $conn = mysqli_connect($hostname,$username,$password,$dbname);

		$username = $_POST["username"];
		$password = $_POST["password"];

		$query = "SELECT * FROM profile_check_demo_4";

		$info = mysqli_query($conn,$query);

		while ($fetchData = mysqli_fetch_assoc($info)) {

			if ($username == $fetchData['id'] && $password == $fetchData['compassword']) {
				$id_pass = $fetchData['id'];
				header('location:profile.php?data='.$id_pass);
			}
		}

	
?>