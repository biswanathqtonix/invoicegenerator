<?php include('header.php'); ?>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h2>New Coustomer</h2>
				<form action="" method="post">
					 <div class="form-group">
					   <label for="usr">Name:</label>
					   <input type="text" class="form-control" name="name">
					 </div>
					 <div class="form-group">
					   <label for="usr">City:</label>
					   <input type="text" class="form-control" name="city">
					 </div>
					 <div class="form-group">
					   <label for="usr">State:</label>
					   <input type="text" class="form-control" name="state">
					 </div>
					 <div class="form-group">
					   <label for="usr">Contact:</label>
					   <input type="text" class="form-control"  name="contact">
					 </div>
					 <div class="form-group">
					   <label for="usr">Address:</label>
					   <input type="text" class="form-control"  name="address">
					 </div>
					 <div class="form-group">
					   <label for="usr">Email:</label>
					   <input type="text" class="form-control" name="email">
					 </div>
					 <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
					 
				</form>
				
				<?php
				include('db.php');
				
				if(isset($_POST['submit'])){
					
					$name=$_POST['name'];
					$city=$_POST['city'];
					$state=$_POST['state'];
					$contact=$_POST['contact'];
					$address=$_POST['address'];
					$email=$_POST['email'];
					
					$ins="INSERT INTO `coustomer`(`name`, `city`, `state`, `contact`, `address`, `email`) VALUES ('$name','$city','$state','$contact','$address','$email')";
					$upd=mysqli_query($connection, $ins);
					
					if($ins){
						echo "<script>
									alert('Your information has been submitted successfully.');
									window.open('coustomer.php','_self');
							</script>";
					}
					else{
						echo "<script>
									alert('Failed.');
									window.open('coustomer.php','_self');
							</script>";
					}
					
				}
				
				?>
				
				
				
			</div>
			<div class="col-md-6">
				<table class="table">
					<?php
						include('db.php');
						$sel="SELECT * FROM `coustomer`";
						$rsel=mysqli_query($connection, $sel);
						$si=1;
					?>
					
					
					<thead class="thead-dark">
					  <tr>
						<th>ID</th>
						<th>Name</th>
						<th></th> 
						<th></th>   
					  </tr>
					</thead>
					
					<?php
						while($rows= mysqli_fetch_assoc($rsel))
						{
					?>
					
					<tbody>
					  <tr>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['name']; ?></td>
						<td><a href="profile.php?id=<?php echo $rows['id']; ?>">View</a></td>
						<td><a href="coustomer.php?id=<?php echo $rows['id']; ?>">Delete</a></td>    
					  </tr>
					</tbody>
					
					<?php
						$si++;
						}
					?>		
							
				 </table>
				
				
				
				<!--==========Delete=============-->
				
				<?php
				include('db.php');
				
				if (isset($_GET['id'])) {
				
				$id=$_GET['id'];
				
				$del="DELETE FROM `coustomer` WHERE id='$id'";
				$drun=mysqli_query($connection, $del);
				
				if($drun){
					echo "<script>
									alert('Deleted.');
									window.open('coustomer.php','_self');
							</script>";
				}else{
					echo "<script>
									alert('Failed.');
									window.open('coustomer.php','_self');
							</script>";
				}
				
				
				}
				
				?>
				
				<!--==========Delete=============-->
				
				
				
				
				
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
