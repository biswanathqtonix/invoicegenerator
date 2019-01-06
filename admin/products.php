<?php
  include ("header.php");
?>

<div id="content-wrapper">

    <div class="container-fluid">

    	<!-- Breadcrumbs-->
      	<ol class="breadcrumb">
        	<li class="breadcrumb-item">
        		<a href="index.php">Dashboard</a>
        	</li>
        	<li class="breadcrumb-item active">Products</li>
      	</ol>

      	<!-- Add A Product -->
        <div class="card mb-3">
            <div class="card-header">
            	<i class="fas fa-chart-area"></i>
            	Add A Product
            </div>
            <div class="card-body">
              	<div class="container">
            		<form action="" method="POST">
            			<div class="form-row mt-4">
	                        <div class="col-sm-4 pb-3">
	                            <label for="productId">Product Code</label>
	                            <input type="number" class="form-control" name="product_code" readonly value="<?php echo(rand(1000,9999)); ?>">
	                        </div>
	                        <div class="col-sm-4 pb-3">
	                            <label for="productBrand">Brand</label>
	                            <input type="text" class="form-control" name="product_brand" required>
	                        </div>
	                        <div class="col-sm-4 pb-3">
	                            <label for="productType">Product Type</label>
	                            <input type="text" class="form-control" name="product_type" required>
	                        </div>
	                        <div class="col-sm-3 pb-3">
	                            <label for="productSize">Product Size/Model No</label>
	                            <input type="text" class="form-control" name="product_sizemodel" required>
	                        </div>
	                        <div class="col-sm-3 pb-3">
	                            <label for="productPrice">Price</label>
	                            <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                    <input type="number" class="form-control text-left" name="product_price" placeholder="49" required>
                                </div>
	                        </div>
	                        <div class="col-sm-6 pb-3">
	                            <label for="productDetailss">Product Details/Comments</label>
	                            <textarea class="form-control" name="product_details" required></textarea>
	                        </div>
	                        <input type="submit" name="submit" value="Add Product" class="btn btn-success btn-lg btn-block">
                    	</div>
            		</form>

            		<?php
            			include ("db.php");

            			if (isset($_POST['submit'])) {
            				$product_code = $_POST['product_code'];
            				$product_brand = ucwords($_POST['product_brand']);
            				$product_type = ucwords($_POST['product_type']);
            				$product_size_model = ucwords($_POST['product_sizemodel']);
            				$product_price = $_POST['product_price'];
            				$product_detils_comments = $_POST['product_details'];


            				$ins = "INSERT INTO `products`(`product_code`, `product_brand`, `product_type`, `product_sizemodel`, `product_price`, `product_details`) VALUES ('$product_code','$product_brand','$product_type','$product_size_model','$product_price','$product_detils_comments')";

            				$res=mysqli_query($connection,$ins);
            				if ($res) {
            					echo "";
            				}
            				else {
            					echo "Insertion Unsuccessful";
            				}
            			}
            		?>

              	</div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="card mb-3">
            <div class="card-header">
            	<i class="fas fa-chart-area"></i>
            	All Product Details
            </div>
            <div class="card-body">
            	<div class="container-fluid">
            		<table class="table">
						<thead class="thead-light">
							<tr>
								<th>Product ID</th>
								<th>Brand</th>
								<th>Type</th>
								<th>Product Size/Model No</th>
								<th>Price</th>
								<th>Product Details/Comments</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>9426</td>
								<td>Lenovo</td>
								<td>Laptop</td>
								<td>Ideapad 320</td>
								<td>₹40000</td>
								<td>i5, 1TB, 8GB RAM, 1080p display, Windows 10</td>
								<td><a href="javascript:void(0)" class="btn btn-info">EDIT</a> <a href="javascript:void(0)" class="btn btn-danger">DELETE</a></td>
							</tr>
							<tr>
								<td>4038</td>
								<td>HP</td>
								<td>Pendrive</td>
								<td>16 GB</td>
								<td>₹1560</td>
								<td>16GB HP Pendrive</td>
								<td><a href="javascript:void(0)" class="btn btn-info">EDIT</a> <a href="javascript:void(0)" class="btn btn-danger">DELETE</a></td>
							</tr>
							<tr>
								<td>1437</td>
								<td>Western Digital</td>
								<td>External Hard Disk</td>
								<td>2 TB</td>
								<td>₹7890</td>
								<td>externl hard disk 2tb</td>
								<td><a href="javascript:void(0)" class="btn btn-info">EDIT</a> <a href="javascript:void(0)" class="btn btn-danger">DELETE</a></td>
							</tr>
							<tr>
								<td>5361</td>
								<td>BSNL</td>
								<td>LAN Cable</td>
								<td>2 Meter</td>
								<td>₹120</td>
								<td>bsnl lan cable of 2 meter</td>
								<td><a href="javascript:void(0)" class="btn btn-info">EDIT</a> <a href="javascript:void(0)" class="btn btn-danger">DELETE</a></td>
							</tr>
						</tbody>		
					</table>			
            	</div>
            </div>
        </div>        	
    </div>
</div>          	

<?php
  include ("footer.php");
?>