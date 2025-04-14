<?php require "inc/security.php"; ?>
<?php  
require "inc/db.php";

if (empty($_GET['id'])) {
    echo "<script> alert('please select a add_news first...!!!') </script>";
    echo "<script> location = 'index.php' </script>";
  }else{
    $id = mysqli_escape_string($conn, $_GET['id']);
    $prosql = mysqli_query($conn, "DELETE FROM add_news WHERE id = '$id' ");
  	
  	if ($prosql) {
  		echo "<script> alert('add_news deleted...!!!') </script>";
    	echo "<script> location = 'index.php' </script>";
  	}
  }

?>