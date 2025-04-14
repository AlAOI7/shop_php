<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
<?php

  if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $title1 = mysqli_escape_string($conn, $_POST['title1']);
    $title2 = mysqli_escape_string($conn, $_POST['title2']);
   


    $sql = mysqli_query($conn, "UPDATE add_news SET title1 = '$title1', title2 = '$title2' WHERE id = '$id' ");


    if ($sql) {
      echo "<script> alert('add_news Edited...!!!') </script>";
      echo "<script> location = 'index-add_news.php' </script>";
    }


  }

?>
		
		
		<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">تحرير المنتج</h4>
              <?php  
                  if (empty($_GET['id'])) {
                    echo "<script> alert('please select a add_news first...!!!') </script>";
                    echo "<script> location = 'index-add_news.php' </script>";
                  }else{
                    $id = mysqli_escape_string($conn, $_GET['id']);
                    $prosql = mysqli_query($conn, "SELECT * FROM add_news WHERE id = '$id' ");
                    $prorow = mysqli_fetch_assoc($prosql);
                  }


              ?>
                                    <div class="form-group row">
                                        <label for="title1" class="col-sm-3 text-right control-label col-form-label">الاعانات الفرعية1</label>
                                        <div class="col-sm-9">
                                            <input name="title1" type="text" class="form-control" id="title1" value="<?= $prorow['title1'] ;?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title2" class="col-sm-3 text-right control-label col-form-label">مخزون المنتج</label>
                                        <div class="col-sm-9">
                                            <input name="title2" type="text" class="form-control" id="title2" value="<?= $prorow['title2'] ;?>">
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