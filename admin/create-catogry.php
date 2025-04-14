<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php  
  if (isset($_POST['submit'])) {
    $target = "products/catogery/".basename($_FILES['image']['name']);

    $name = mysqli_escape_string($conn, $_POST['name']);
    $slug = mysqli_escape_string($conn, $_POST['slug']);
    $image = $_FILES['image']['name'];
 



    $sql = mysqli_query($conn, "INSERT INTO catogry (name, slug,image) VALUES ('$name', '$slug','$image')");

    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    if ($sql) {
      echo "<script> alert('New catogry added...!!!') </script>";
      echo "<script> location = 'create-catogry.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">اضافة  قسم </h4>

                                  

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label"> اضف القسم </label>
                                        <div class="col-md-4">
                                            <input name="name" type="text" class="form-control" id="name" placeholder="اضافة قسم ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">صورة المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label"> اضف رابط </label>
                                        <div class="col-md-4">
                                            <input name="slug" type="text" class="form-control" id="slug" placeholder="slug القسم">
                                        </div>
                                    </div>



                                 
									
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-warning mr-2">اضافة</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>