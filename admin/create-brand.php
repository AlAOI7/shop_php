<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php  
  if (isset($_POST['submit'])) {
    $target = "products/brand/".basename($_FILES['image']['name']);



    $image = $_FILES['image']['name'];
 


    $sql = mysqli_query($conn, "INSERT INTO brand (image)
     VALUES ( '$image')");

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if ($sql) {
      echo "<script> alert('New brand added...!!!') </script>";
      echo "<script> location = 'create-brand.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">اضافة   علامة تجارية </h4>

                                    
                                    
									<div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">صورة المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-warning">اضافة</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>