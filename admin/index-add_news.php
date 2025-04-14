<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">إدارة المنتج</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>العلان الاول</th>
                                                <th> الاعلان الثاني</th>
												<th>صورة الاعلان</th>
                                              
                                                <th>الاجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM add_news");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                <td><?= $prorow['id'] ;?></td>
                                            
                                                <td>
                                                <img width="60px" src="products/news/<?= $prorow['image'] ;?>">
                                                </td>
                                                <td><?= $prorow['title1'] ;?></td>
												<td><?= $prorow['title2'] ;?></td>
                                           
                                                <td>
    												<a href="edit-add_news.php?id=<?= $prorow['id'] ;?>" class="btn btn-success">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a href="delete-add_news.php?id=<?= $prorow['id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                              
                                                <th>title1 </th>
                                                <th> title2</th>
                                                <th> Image</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>