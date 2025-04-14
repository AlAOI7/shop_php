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
                                                <th> العنوان الاول </th>
												<th>صورةةالمنتج</th>
                                                <th> العنوان الثاني</th>
                                                <th> العنوان الثالث</th>
                                                <th> العنوان الرابع</th>
                                                <th>الاجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM banner");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                   <td><?= $prorow['id'] ;?></td>
                                                <td><?= $prorow['t1'] ;?></td>
                                                <td>
                                                    <img width="60px" src="products/banner/<?= $prorow['image'] ;?>">
                                                </td>
                                                
                                                <td><?= $prorow['t2'] ;?></td>
												<td><?= $prorow['t3'] ;?></td>
                                                <td><?= $prorow['t4'] ;?></td>
                                                <td>
    												<a href="edit-banner.php?id=<?= $prorow['id'] ;?>" class="btn btn-success">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="delete-banner.php?id=<?= $prorow['id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id </th>
                                                <th> title 1 </th>
                                                <th>banner Image</th>
                                                <th> title 2 </th>
                                                <th> title 3 </th>
                                                <th>title 4 </th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>