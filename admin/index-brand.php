<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> عرض الاعلانات</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                             
												<th>صورة العلامة التجارية</th>
                                              
                                                <th>الاجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM brand");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                   <td><?= $prorow['id'] ;?></td>
                                            
                                                <td>
                                                    <img width="60px" src="products/brand/<?= $prorow['image'] ;?>">
                                                </td>
                                                
                                                <td>
    												
    												<a href="delete-brand.php?id=<?= $prorow['id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id </th>
                                              
                                                <th>brand Image</th>
                                              
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>