<?php include('header.php'); ?>

<!--
<!--
<?php
error_reporting(0);
?>
-->




<div id="content-wrapper">

    <div class="container-fluid">

    	<!-- Breadcrumbs-->
      	<ol class="breadcrumb">
        	<li class="breadcrumb-item">
        		<a href="index.php">Dashboard</a>
        	</li>
        	<li class="breadcrumb-item active">Invoice Finder</li>
      	</ol>

      	<div class="card mb-3">
            <div class="card-header">
            	<i class="fas fa-chart-area"></i>
            	Search An Invoice
            </div>
            <div class="card-body">
              	<div class="container">

	<?php
		include('db.php');
	
		if(isset($_GET['id'])){
			
			$id = $_GET['id'];
			$dbc="SELECT * FROM `coustomer` WHERE id='$id'";
			$run=mysqli_query($connection, $dbc);
			$rows = mysqli_fetch_assoc($run);
			
		}
	
	?>
					
					
					
	
	<h2>Name:  <?php echo $rows['name']; ?></h2>
	<h3>ID:  <?php echo $rows['id']; ?></h3>
	<h3>Contact:  <?php echo $rows['contact']; ?></h3>
	<h3>City:  <?php echo $rows['city']; ?></h3>
	<h3>State:  <?php echo $rows['state']; ?></h3>
	<h3>Email:  <?php echo $rows['email']; ?></h3>

</div>


<br><br><br><br>



<div class="container">
	<h3>Select Product</h3>
	<form action="profile.php" method="post">
		<div class="form-group">		
		   <input type="text" class="form-control" id="usr" name="cus_id" value="<?php echo $rows['id']; ?>" hidden="hidden">
		</div>
		
		 <div class="form-group">
			  <label for="sel1">Product Brand:</label>
			  <select class="form-control" id="sel1" name="cproduct_brand">
					<?php include("db.php"); $view="SELECT * FROM `products`"; $result=mysqli_query($connection, $view); $si=1?><?php while($rows=mysqli_fetch_assoc($result)) { ?>
			   			<option value="<?php echo $rows['product_brand']; ?>"><?php echo $rows['product_brand']; ?></option>
			  		<?php $si++; } ?>
			  </select>
		</div>
		<div class="form-group">
			  <label for="sel1">Product Type:</label>
			  <select class="form-control" id="sel1" name="cproduct_details">
					<?php include("db.php"); $view="SELECT * FROM `products`"; $result=mysqli_query($connection, $view); $si=1?><?php while($rows=mysqli_fetch_assoc($result)) { ?>
			   			<option value="<?php echo $rows['product_details']; ?>"><?php echo $rows['product_details']; ?></option>
			  		<?php $si++; } ?>
			  </select>
		</div>
		<div class="form-group">
			  <label for="sel1">Product Size/Model No:</label>
			  <select class="form-control" id="sel1" name="cproduct_sizemodel">
					<?php include("db.php"); $view="SELECT * FROM `products`"; $result=mysqli_query($connection, $view); $si=1?><?php while($rows=mysqli_fetch_assoc($result)) { ?>
			   			<option value="<?php echo $rows['product_sizemodel']; ?>"><?php echo $rows['product_sizemodel']; ?></option>
			  		<?php $si++; } ?>
			  </select>
		</div>
		<div class="form-group">
			  <label for="sel1">Product Price:</label>
			  <select class="form-control" id="sel1" name="cproduct_price">
					<?php include("db.php"); $view="SELECT * FROM `products`"; $result=mysqli_query($connection, $view); $si=1?><?php while($rows=mysqli_fetch_assoc($result)) { ?>
			   			<option value="<?php echo $rows['product_price']; ?>"><?php echo $rows['product_price']; ?></option>
			  		<?php $si++; } ?>
			  </select>
		</div>
		<div class="form-group">
			  <label for="sel1">Amount:</label>
			  <select class="form-control" id="sel1" name="c_pvalue">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			  </select>
		</div>
		<input type="submit" name="submit" value="Add" class="btn btn-success btn-block">
		
	</form>
	
	<?php
		include('db.php');
	
		if(isset($_POST['submit'])){
			
			$cus_id=$_POST['cus_id'];
			$cproduct_brand=$_POST['cproduct_brand'];
			$cproduct_details=$_POST['cproduct_details'];
			$cproduct_sizemodel=$_POST['cproduct_sizemodel'];
			$c_pvalue=$_POST['c_pvalue'];
			$cproduct_price=$_POST['cproduct_price'];
			
			$totalmoney = $cproduct_price * $c_pvalue;
			
			$step1= $totalmoney/100;
			$step2= 18 * $step1;
			
			$step3 = $totalmoney + $step2;
			
			$gst = $step3;  
			
			echo $cus_id;
			
			
			
			$nins="INSERT INTO `coustomer_product`(`cus_id`, `cproduct_brand`, `cproduct_details`, `cproduct_sizemodel`, `c_pvalue`, `cproduct_price`, `ctotproduct_price`, `c_gst`) VALUES ('$cus_id','$cproduct_brand','$cproduct_details','$cproduct_sizemodel','$c_pvalue','$cproduct_price','$totalmoney','$gst')";
			$pnis=mysqli_query($connection, $nins);
			
			if($pnis){
					echo "<script>
									alert('Submit.');
									window.open('profile.php?id=$cus_id','_self');
									
							</script>";
				}else{
					echo "<script>
									alert('Failed.');
									window.open('coustomer.php','_self');
							</script>";
				}
			
		}
	
	?>
	
	
</div>


				
<br><br><br><br>				
				
				
<div class="container table-responsive">
<table class="table">
	
	
	
	<?php
		include('db.php');
	
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sel="SELECT * FROM `coustomer_product` WHERE cus_id='$id'";
			$rsel=mysqli_query($connection, $sel);
			$si=1;
			
			
			$selc="SELECT SUM(c_gst) as total FROM `coustomer_product` WHERE cus_id='$id'";
			$rselc=mysqli_query($connection, $selc);
			$row = mysqli_fetch_array($rselc);
			
			$coust_id = $row['cus_id'];
			
			$xsum = $row['total'];
			
			
			
			$sum = ceil($xsum);
			
			
			
	
		}
	?>
	
	
    <thead class="thead-dark">
      <tr>
        <th>Product</th>
        <th>Amount</th>
        <th>GST</th>
		<th>Price</th>
		<th>Total</th>
		<th>Action</th>
      </tr>
    </thead>
	<?php
		while($rows= mysqli_fetch_assoc($rsel))
		{
	?>
    <tbody>
      <tr>
        <td><?php echo $rows['cproduct_brand']; ?>/ <?php echo $rows['cproduct_details']; ?>/ <?php echo $rows['cproduct_sizemodel']; ?></td>
        <td><?php echo $rows['c_pvalue']; ?></td>
		<td>18%</td>
		<td><?php echo $rows['cproduct_price']; ?> Rs</td>
		<td><?php echo $rows['c_gst']; ?>  Rs</td>
		<td><a href="profile.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
      </tr>
    </tbody>
	<?php
		$si++;
		}
	?>
	
  </table>
	
</div>
	
	<div class="row">
		<div class="col-md-2 offset-md-10">
			<form action="" method="post">
				<div class="form-group">
					<label for="usr">Discount:</label>
					<input type="text" class="form-control"  name="discount">
				</div>	
			</form>
		</div>			
	</div>			

				
	<h2 style="float: right">Total <?php echo $sum; ?>Rs</h2>
	<a href="../index.php?id=<?php echo $coust_id; ?>" class="btn btn-dark" style="float: right;">Proceed</a>			
			<br><br>
				
            </div>
        </div>      		
    </div>
</div>





































<?php include('footer.php'); ?>