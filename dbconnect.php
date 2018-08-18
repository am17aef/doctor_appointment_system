
<!-- mysqli -->
<?php
// $con = mysqli_connect("localhost","root","","db_healthcare");

// // Check connection
// if (mysqli_connect_error())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
?>
<?php
$con = mysqli_connect("localhost","root","","db_healthcare");

// Check connection. mysqli_errno() - Returns the error code for the most recent function call
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>