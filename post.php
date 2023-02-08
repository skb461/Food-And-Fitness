<?php
	$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodnfitness";

  $conn = mysqli_connect($hostname,$username,$password,$dbname);

  $id = $_POST['id'];
  $bld_sgr = $_POST['bloodSuger'];
  $bld_psr_hi = $_POST['bloodPressure_hi'];
  $bld_psr_low = $_POST['bloodPressure_low'];
  $h = $_POST['bodyHeight'];
  $w = $_POST['bodyWeight'];


  if ($bld_sgr != NULL) {

	  $update = "UPDATE profile_check_demo_4 SET bld_sgr = '$bld_sgr' WHERE id='$id'";

	  $result = mysqli_query($conn,$update);

	  header('location:profile.php?data='.$id);
  }
  elseif ($bld_psr_hi != NULL && $bld_psr_low != NULL) {
  	
  	$update = "UPDATE profile_check_demo_4 SET bld_psr_hi = '$bld_psr_hi', bld_psr_low = '$bld_psr_low' WHERE id='$id'";

	  $result = mysqli_query($conn,$update);

	  header('location:profile.php?data='.$id);
  }
  elseif ($h != NULL && $w != NULL) {
  	
  	$bmi = round(($w/(($h*$h)/10000)),2);

    $update = "UPDATE profile_check_demo_4 SET height = '$h', weight = '$w', bmi = '$bmi' WHERE id='$id'";

    $result = mysqli_query($conn,$update);

	header('location:profile.php?data='.$id);
  }
  else{
  	echo "error happend";
  }
  ?>
