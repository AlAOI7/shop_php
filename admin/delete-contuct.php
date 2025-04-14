<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a contuct first...!!!') </script>";
    echo "<script> location = 'index-contuct..php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM contuct WHERE id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('contuct deleted...!!!') </script>";
    	echo "<script> location = 'contuct.php' </script>";
  	}
  }

?>