<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php  
  if (isset($_POST['submit'])) {
    $target = "products/news/".basename($_FILES['image']['name']);

    $title1 = mysqli_escape_string($conn, $_POST['title1']);
    $title2 = mysqli_escape_string($conn, $_POST['title2']);
  $image = $_FILES['image']['name'];

    $sql = mysqli_query($conn, "INSERT INTO add_news (title1, title2, image )
     VALUES ('$title1', '$title2', ' $image')");

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if ($sql) {
      echo "<script> alert('New add_news added...!!!') </script>";
      echo "<script> location = 'create-add_news.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">اضافة  اعلان فرعي </h4>

                                    <div class="form-group row">
                                        <label for="title1" class="col-sm-3 text-right control-label col-form-label">الاعلان الاول </label>
                                        <div class="col-sm-9">
                                            <input name="title1" type="text" class="form-control" id="title1" placeholder="..">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title2" class="col-sm-3 text-right control-label col-form-label"> الاعلان الثاني</label>
                                        <div class="col-sm-9">
                                            <input name="title2" type="text" class="form-control" id="title2" placeholder="... ">
                                        </div>
                                    </div>

									<div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">صورة الاعلان</label>
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