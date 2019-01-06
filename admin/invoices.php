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
        	<li class="breadcrumb-item active">Invoice Finder</li>
      	</ol>

      	<div class="card mb-3">
            <div class="card-header">
            	<i class="fas fa-chart-area"></i>
            	Search An Invoice
            </div>
            <div class="card-body">
              	<div class="container">
              		<form class="form" role="form" autocomplete="off" style="width: 60%;">
                        <div class="form-group">
                            <label for="inputName">Invoice ID</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter The Invoice ID" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3">Customer Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name of The Customer">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Date of Invoice Issued</label>
                            <input type="date" class="form-control" id="inputPassword3">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-lg float-right">Search Invoice</button>
                        </div>
                    </form>        
              	</div>
            </div>
        </div>      		
    </div>
</div>      	

<?php
  include ("footer.php");
?>