<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php
require "inc/db.php";
if(isset($_POST['submit'])) {

    $Address = mysqli_escape_string($conn, $_POST['Address']);
    $Phone = mysqli_escape_string($conn, $_POST['Phone']);
    $Email  = mysqli_escape_string($conn, $_POST['Email']);
    $facebook = mysqli_escape_string($conn, $_POST['facebook']);
    $twiter = mysqli_escape_string($conn, $_POST['twiter']);
    $instgram = mysqli_escape_string($conn, $_POST['instgram']);
    $watsap = mysqli_escape_string($conn, $_POST['watsap']);
    $youtyoup = mysqli_escape_string($conn, $_POST['youtyoup']);

    $tsql = "UPDATE footerdata SET Address = '$Address', Phone = '$Phone', Email = '$Email', facebook = '$facebook', twiter = '$twiter',  instgram = '$instgram'   watsap = '$watsap'  youtyoup = '$youtyoup' WHERE id='1' ";

    $run_sql = mysqli_query($conn, $tsql);
    if ($run_sql) {
      echo "<script> alert('footer Edited...!!!') </script>";
      echo "<script> location = 'footerdata.php' </script>";
    }


  }
  $fetchtitle = mysqli_query($conn, "SELECT Address,Phone,Email,facebook,twiter,instgram,watsap,youtyoup
   FROM footerdata WHERE id = '1' "); 
  $row = mysqli_fetch_assoc($fetchtitle);
?>
		
	
                         

		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">تحرير المنتج</h4>
                      <div class="form-group row">
                                        <label for="Address" class="col-sm-3 text-right control-label col-form-label"> العنوان</label>
                                        <div class="col-sm-9">
                                            <input name="Address" type="text" class="form-control" id="Address" value="<?php echo $row['Address'] ?>">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="Phone" class="col-sm-3 text-right control-label col-form-label"> رقم الهاتف</label>
                                        <div class="col-sm-9">
                                            <input name="Phone" type="text" class="form-control" id="Phone" value=" <?php echo $row['Phone'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="Email" class="col-sm-3 text-right control-label col-form-label"> البريد الالكتروني</label>
                                        <div class="col-sm-9">
                                            <input name="Email" type="text" class="form-control" id="Email" value=" <?php echo $row['Email'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="facebook" class="col-sm-3 text-right control-label col-form-label"> facebook</label>
                                        <div class="col-sm-9">
                                            <input name="facebook" type="text" class="form-control" id="facebook" value=" <?php echo $row['facebook'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="twiter" class="col-sm-3 text-right control-label col-form-label">twiter </label>
                                        <div class="col-sm-9">
                                            <input name="twiter" type="text" class="form-control" id="twiter" value=" <?php echo $row['twiter'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="instgram" class="col-sm-3 text-right control-label col-form-label">انستجرام </label>
                                        <div class="col-sm-9">
                                            <input name="instgram" type="text" class="form-control" id="instgram" value=" <?php echo $row['instgram'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="watsap" class="col-sm-3 text-right control-label col-form-label">واتس اب </label>
                                        <div class="col-sm-9">
                                            <input name="watsap" type="text" class="form-control" id="watsap" value=" <?php echo $row['watsap'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="youtyoup" class="col-sm-3 text-right control-label col-form-label"> يوتيوب</label>
                                        <div class="col-sm-9">
                                            <input name="youtyoup" type="text" class="form-control" id="youtyoup" value="<?php echo $row['youtyoup'] ?>">
                                        </div>
                                    </div>
									                   
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">تعديل</button>
                                        <input type="hidden" name="id" value="<?= $prorow['id'] ;?>">
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    
					

<?php require "footer.php" ; ?>