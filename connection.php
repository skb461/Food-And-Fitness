<?php
  
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodnfitness";

  $conn = mysqli_connect($hostname,$username,$password,$dbname);

  $dbQuery = "CREATE TABLE profile_check_demo_4(

      id VARCHAR(10) PRIMARY KEY,
      name VARCHAR(10),
      phnnumber VARCHAR(10),
      email VARCHAR(20),
      compassword VARCHAR(30)

      -- height FLOAT(3),
      -- weight FLOAT(3),
      -- bmi FLOAT(3),
      -- bld_sgr FLOAT(3),
      -- bld_psr_hi INT(3),
      -- bld_psr_low INT(3)

    )";

  mysqli_query($conn,$dbQuery);
  
?>
