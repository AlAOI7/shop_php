<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a brand first...!!!') </script>";
    echo "<script> location = 'index-brand..php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM brand WHERE id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('brand deleted...!!!') </script>";
    	echo "<script> location = 'index-brand.php' </script>";
  	}
  }

?>