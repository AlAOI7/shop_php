
<?php include_once('include/header.php');?>

<?php include_once('include/nav.php');?> 
<?php
if (empty($_POST['name'])) {
	echo "<script> alert('Please make payment firsrt...!!!!') </script>";
	echo "<script> location = 'checkout.php' </script>";
}
	if (isset($_POST['submit'])) {
		$name = mysqli_escape_string($conn, $_POST['name']);
		$user_id = mysqli_escape_string($conn, $_POST['user_id']);
		$user_email = mysqli_escape_string($conn, $_POST['user_email']);
		$mobile = mysqli_escape_string($conn, $_POST['mobile']);
		$method = mysqli_escape_string($conn, $_POST['payment']);
		$trxid = mysqli_escape_string($conn, $_POST['trxid']);
		$address = mysqli_escape_string($conn, $_POST['address']);

		$cartsql = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id' AND user_email = '$user_email' ");
		$pro_amount = 0;
		while ($cartrow = mysqli_fetch_assoc($cartsql)) {
			$pro_id = $cartrow['product_id'];
			$pro_name = $cartrow['pro_name'];
			$pro_qty = $cartrow['qty'];
			$tack_id = $cartrow['tack_id'];
			$pro_amount = $cartrow['qty'] * $cartrow['price'];

		    $pro_ordr_sql = mysqli_query($conn, "INSERT INTO pro_order(name, user_id, user_email, mobile, pro_id, pro_name, pro_qty, amount, method, trxid, address, track_id, ordr_status) VALUES ('$name', '$user_id', '$user_email', '$mobile', '$pro_id', '$pro_name', '$pro_qty', '$pro_amount', '$method', '$trxid', '$address', '$tack_id', '0')");

		    $productsql = mysqli_query($conn, "SELECT stock FROM product WHERE pro_id = '$pro_id' ");
		    $productrow = mysqli_fetch_assoc($productsql);
		    $previous_pro_count = $productrow['stock'];
		    $new_stock_count = $productrow['stock'] - $pro_qty;
		    $stocksql = mysqli_query($conn, "UPDATE product SET stock = '$new_stock_count' WHERE pro_id = '$pro_id' ");
		}

	}
?>
	
	<!-- page -->
	<div class="services-breadcrumb hidethispart">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">الرئيسية</a>
						<i>|</i>
					</li>
					<li>فاتورة</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">فاتورة
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					
					<div class="resp-tabs-container hor_1">
					
						
						<table class="table table-striped table-bordered">
						  <thead>
						
						


						 
							</thead>
							
							<tr>
								<th style="color: black;" scope="col"><?= $name ;?></th>
								<th></th>
								<th></th>
								<th></th>
								<th style="color: black;" scope="col">الاسم</th>
						  </tr>

						  <tr>
								<th style="color: black;" scope="col"> <?= $mobile ;?></th>
								<th></th>
								<th></th>
								<th></th>
								<th style="color: black;" scope="col">رقم الهاتف</th>
						  </tr>
						  <tr>
									<th style="color: black;" scope="col"> <?= $address ;?></th>
									<th></th>
									<th></th>
									<th></th>
									<th style="color: black;" scope="col">العنوان</th>
						  </tr>
						  <tr>
									<th style="color: black;" scope="col"> <?= date("Y-m-d") ;?></th>
									<th></th>
									<th></th>
									<th></th>
									<th style="color: black;" scope="col">التاريخ</th>
						  </tr>
						  <tr>
						  <?php if (!empty($trxid)): ?>
									<th style="color: black;" scope="col"> <?= $trxid ;?></th>
									<?php endif ?>
									<th></th>
									<th></th>
									<th></th>
									<th style="color: black;" scope="col">رقم الدفع او رقم بطاقة الدفع:</th>
						  </tr>

						  <tbody>
						  </tbody>
						</table>
						<br>
						<br>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th style="color: black;" scope="col">الرقم</th>
						      <th style="color: black;" scope="col">الاسم</th>
							  <th style="color: black;" scope="col">رقم الكود</th>
						      <th style="color: black;" scope="col">الكمية</th>
						      <th style="color: black;" scope="col">السعر</th>
						      <th style="color: black;" scope="col">الاجمالي</th>
						    </tr>
						  </thead>
						  <tbody>
		<?php  
			$invo_cart_sql = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id' AND user_email = '$user_email' ");
			$invo_per_total = 0;
			$invo_total = 0;
			$counter = 1;
			while ($invo_cart_row = mysqli_fetch_assoc($invo_cart_sql)) {
		?>
						    <tr>
						      <th style="color: black;"><?= $counter ;?></th>
						      <td style="color: black;"><?= $invo_cart_row['pro_name'] ;?></td>
							  <td class="color: black;"><?= $invo_cart_row['tack_id'] ;?></td>
						      <td style="color: black;"><?= $invo_cart_row['qty'] ;?></td>
						      <td style="color: black;"><?= $invo_cart_row['price'] ;?></td>
						      <td style="color: black;">
						      	<?php 
						      		$invo_per_total = $invo_cart_row['qty'] * $invo_cart_row['price'] ;
						      		echo $invo_per_total;
						      	?>
						      </td>
						    </tr>
		<?php
			$counter++;
			$invo_total += $invo_per_total;
		 	} 
		?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td style="color: black;">الاجمالي: <?= $invo_total ;?> Tk</td>
							</tr>
						  </tbody>
						</table>
					
						<a style="float: right;" class="btn btn-primary hidethispart" href="javascript:print()">طباعة</a>
					
					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->
<?php  
$clear_cart_sql = mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id' AND user_email = '$user_email' ");

?>
	<?php require "include/footer.php" ; ?>