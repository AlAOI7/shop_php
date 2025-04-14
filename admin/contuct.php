<?php require "inc/security.php"; ?>
<?php require "nav.php" ; ?>

<?php require "sidemenu.php" ; ?>
        
 
 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> عرض رسائل العميل</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                      
												<th>الاسم</th>
                                                <th>  البريد الالكتروني</th>
                                                <th> الهاتف </th>
                                                <th>  الموضوع</th>
                                                <th>  الرسالة</th>
                                                <th>الاجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php  
                        $prosql = mysqli_query($conn, "SELECT * FROM contuct");
                        while ($prorow = mysqli_fetch_assoc($prosql)) {
                
                    ?>
                                            <tr>
                                                   <td><?= $prorow['id'] ;?></td>
                                                <td><?= $prorow['name'] ;?></td>
                                                <td>
                                                <?= $prorow['email'] ;?></td>
                                                </td>
                                                <td><?= $prorow['telephone'] ;?></td>
												<td><?= $prorow['subject'] ;?></td>
                                                <td><?= $prorow['message'] ;?></td>
                                                
                                                <td>
    											
    												<a href="delete-contuct.php?id=<?= $prorow['id'] ;?>" class="btn btn-danger">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                    <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id </th>
                                            
                                                   <th>namee</th>
                                                <th> email </th>
                                                <th> telephone </th>
                                                <th>subject</th>
                                                <th>message</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                  
<?php require "footer.php" ; ?>