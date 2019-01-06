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
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">53 Total Products!</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">296 Total Invoice Generated!</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">5 Products Added This Month!</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">49 Invoive Generated This Month!</div>
                </div>
              </div>
            </div>
          </div>

        <!-- Generate An Invoice -->
        <div class="card mb-3">
            <div class="card-header">
            	<i class="fas fa-chart-area"></i>
            	Generate An Invoice
            </div>
            <div class="card-body">
              	<div class="container">
            		<form action="" method="POST">
            			<div class="form-row mt-4">
	                        <div class="col-sm-6 pb-3">
	                            <label for="exampleFirst">Customer Name</label>
	                            <input type="text" class="form-control" id="exampleFirst">
	                        </div>
	                        <div class="col-sm-6 pb-3">
	                            <label for="exampleLast">City</label>
	                            <input type="text" class="form-control" id="exampleLast">
	                        </div>
	                        <div class="col-sm-3 pb-3">
	                            <label for="exampleSt">State</label>
	                            <select class="form-control" id="exampleSt">
	                                <option>Pick a state</option>
	                            </select>
	                        </div>
	                        <div class="col-sm-3 pb-3">
	                            <label for="exampleZip">Postal Code</label>
	                            <input type="text" class="form-control" id="exampleZip">
	                        </div>
	                        <div class="col-sm-6 pb-3">
	                            <label for="exampleCity">Country</label>
	                            <input type="text" class="form-control" id="exampleCity">
	                        </div>
	                        <div class="col-md-6 pb-3">
	                            <label for="exampleMessage">Address</label>
	                            <textarea class="form-control" id="exampleMessage"></textarea>
	                        </div>
	                        <div class="col-md-3 pb-3">
	                        	<label for="exampleZip">Invoice ID</label>
	                            <input type="text" class="form-control" id="exampleZip" value="LS-020180436" disabled>
	                        </div>
	                        <div class="col-md-3 pb-3">
	                        	<label for="exampleZip">Invoice Generation Date</label>
	                            <input type="date" class="form-control" id="exampleZip">
	                        </div>	                    
                    	</div>

                    	<table class="table" style="margin-top: 50px;">
							<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>PRODUCT</th>
									<th>AMOUNT</th>
									<th>GST</th>
									<th>PRICE</th>
									<th>TOTAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>HP 16GB Pendrive</td>
									<td>2</td>
									<td>18%</td>
									<td>₹ 550</td>
									<td>₹ 1100</td>
								</tr>
								<tr>
									<td>2</td>
									<td>WD 1 TB External Hard Disk</td>
									<td>1</td>
									<td>18%</td>
									<td>₹ 3200</td>
									<td>₹ 3200</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="5">All Total</th>
									<th>₹ 3300</th>
								</tr>
								<tr>
									<th colspan="5">Discount</th>
									<th>₹ 300</th>
								</tr>
								<tr>
									<th colspan="5">Total Amount To Be Paid</th>
									<th>₹ 3000</th>
								</tr>
							</tfoot>
						</table>
            		</form>
              	</div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

<?php
  include ("footer.php");
?>