<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">عرض الاقسام </h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>اسم القسم</th>
                                             
												<th> الرابط</th>
                                                <th>صورة القسم</th>
                                                <th> الاجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM catogry");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                <td><?= $prorow['id'] ;?></td>
                                               
                                                <td><?= $prorow['name'] ;?></td>
												<td><?= $prorow['slug'] ;?></td>
                                                <td>
                                                <img width="60px" src="products/catogery/<?= $prorow['image'] ;?>">
                                                </td>
                                               
                                            </td>
                                                <td>
    												<a href="edit-catogry.php?id=<?= $prorow['id'] ;?>" class="btn btn-success">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="delete-catogry.php?id=<?= $prorow['id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id </th>
                                                <th>catogry name</th>
                                                <th>slug Category</th>
                                                <th>image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>