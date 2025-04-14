<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a banner first...!!!') </script>";
    echo "<script> location = 'index.php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM banner WHERE id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('banner deleted...!!!') </script>";
    	echo "<script> location = 'index.php' </script>";
  	}
  }

?>