<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php

  if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $t1 = mysqli_escape_string($conn, $_POST['t1']);
    $t2 = mysqli_escape_string($conn, $_POST['t2']);
    $t3 = mysqli_escape_string($conn, $_POST['t3']);
    $t4 = mysqli_escape_string($conn, $_POST['t4']);
    

    $sql = mysqli_query($conn, "UPDATE banner SET t1 = '$t1', t2 = '$t2', t3 = '$t3', t4 = '$t4' WHERE id = '$id' ");


    if ($sql) {
      echo "<script> alert('banner Edited...!!!') </script>";
      echo "<script> location = 'index.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">تحرير  الاعلان</h4>
              <?php  
                  if (empty($_GET['id'])) {
                    echo "<script> alert('please select a banner first...!!!') </script>";
                    echo "<script> location = 'index-banner.php' </script>";
                  }else{
                    $id = mysqli_escape_string($conn, $_GET['id']);
                    $prosql = mysqli_query($conn, "SELECT * FROM banner WHERE id = '$id' ");
                    $prorow = mysqli_fetch_assoc($prosql);
                  }


              ?>
                                    <div class="form-group row">
                                        <label for="t1" class="col-sm-3 text-right control-label col-form-label">اسم المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="t1" type="text" class="form-control" id="t1" value="<?= $prorow['t1'] ;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="t2" class="col-sm-3 text-right control-label col-form-label">اسم المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="t2" type="text" class="form-control" id="t2" value="<?= $prorow['t2'] ;?>">
                                        </div>
                                    </div>  <div class="form-group row">
                                        <label for="t3" class="col-sm-3 text-right control-label col-form-label">اسم المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="t3" type="text" class="form-control" id="t3" value="<?= $prorow['t3'] ;?>">
                                        </div>
                                    </div>  <div class="form-group row">
                                        <label for="t4" class="col-sm-3 text-right control-label col-form-label">اسم المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="t1" type="text" class="form-control" id="t4" value="<?= $prorow['t4'] ;?>">
                                        </div>
                                    </div>
									                   
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="update" type="submit" class="btn btn-primary">تعديل</button>
                                        <input type="hidden" name="id" value="<?= $prorow['id'] ;?>">
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>