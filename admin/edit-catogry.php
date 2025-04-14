<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php

  if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = mysqli_escape_string($conn, $_POST['name']);
    $slug = mysqli_escape_string($conn, $_POST['slug']);



    $sql = mysqli_query($conn, "UPDATE catogry SET name = '$name', slug = '$slug',
 WHERE id = '$id' ");


    if ($sql) {
      echo "<script> alert('catogry Edited...!!!') </script>";
      echo "<script> location = 'index-catogry.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">تحرير القسم</h4>
              <?php  
                  if (empty($_GET['id'])) {
                    echo "<script> alert('please select a catogry first...!!!') </script>";
                    echo "<script> location = 'index-catogry.php' </script>";
                  }else{
                    $id = mysqli_escape_string($conn, $_GET['id']);
                    $prosql = mysqli_query($conn, "SELECT * FROM catogry WHERE id = '$id' ");
                    $prorow = mysqli_fetch_assoc($prosql);
                  }


              ?>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">اسم المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="fname" value="<?= $prorow['name'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label">مخزون المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="slug" type="text" class="form-control" id="slug" value="<?= $prorow['slug'] ;?>">
                                        </div>
                                    </div>

                                  
                            


									                   
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="update" type="submit" class="btn btn-success">تعديل</button>
                                        <input type="hidden" name="id" value="<?= $prorow['id'] ;?>">
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>