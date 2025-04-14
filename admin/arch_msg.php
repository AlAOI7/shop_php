<?php require "inc/security.php"; ?>
<?php require "inc/db.php"; ?>

 <?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">الرسائل المؤرشفة</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="150px">الاسم</th>
                                                <th width="150px">موضوع</th>
                                                <th width="250px">الايميل</th>
                                                <th width="">الرساله</th>
                                            </tr>
                                        </thead>
                                        
<?php 
    $sql = mysqli_query($conn, "SELECT * FROM contact WHERE status = '1' ");
    while ($row = mysqli_fetch_assoc($sql)) {
?>                                  
                                        
                                        <tbody>
                                            <tr>
                                                <td><?= $row['name'] ; ?></td>
                                                <td><?= $row['subject'] ; ?></td>
                                                <td><?= $row['email'] ; ?></td>
                                                <td><?= $row['message'] ; ?></td>
                                            </tr>
                                        </tbody>
                                        
    <?php } ?>
                                        
                                        <tfoot>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>الموضوع</th>
                                                <th>الايميل</th>
                                                <th>الرساله</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>