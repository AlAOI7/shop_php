<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a catogry first...!!!') </script>";
    echo "<script> location = 'index-catogry.php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM catogry WHERE id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('catogry deleted...!!!') </script>";
    	echo "<script> location = 'index-catogry.php' </script>";
  	}
  }

?>