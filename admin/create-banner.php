<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php  
  if (isset($_POST['submit'])) {
    $target = "products/banner/".basename($_FILES['image']['name']);

    $t1 = mysqli_escape_string($conn, $_POST['t1']);
    $t2 = mysqli_escape_string($conn, $_POST['t2']);
    $t3 = mysqli_escape_string($conn, $_POST['t3']);
    $t4 = mysqli_escape_string($conn, $_POST['t4']);

    $image = $_FILES['image']['name'];
 


    $sql = mysqli_query($conn, "INSERT INTO banner (t1, t2, t3, t4, image)
     VALUES ('$t1', '$t2', '$t3', '$t4',  '$image')");

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if ($sql) {
      echo "<script> alert('New banner added...!!!') </script>";
      echo "<script> location = 'create-banner.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">اضافة  اعلان جديد </h4>

                                    <div class="form-group row">
                                        <label for="t1" class="col-sm-3 text-right control-label col-form-label">العنوان الاول </label>
                                        <div class="col-sm-9">
                                            <input name="t1" type="text" class="form-control" id="t1" placeholder="..">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="t2" class="col-sm-3 text-right control-label col-form-label">العنوان الثاني </label>
                                        <div class="col-sm-9">
                                            <input name="t2" type="text" class="form-control" id="t2" placeholder=". ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="t3" class="col-sm-3 text-right control-label col-form-label"> العنوان الثالث</label>
                                        <div class="col-sm-9">
                                            <input name="t3" type="text" class="form-control" id="t3" placeholder=". ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="t4" class="col-sm-3 text-right control-label col-form-label"> العنوان الرابع </label>
                                        <div class="col-sm-9">
                                            <input name="t4" type="text" class="form-control" id="t4" placeholder=".. ">
                                        </div>
                                    </div>


                                   
                                    
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