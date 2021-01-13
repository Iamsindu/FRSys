<?php 
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/discount.class.php';
//require_once 'class/session.class.php';
//sessionhelper::checklogin();
//require_once 'selector.php';
$discount = new discount;
 ?>

                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                                <li class="breadcrumb-item"><a href="#">Discount</a></li>
                                                <li class="breadcrumb-item active">Show Discount</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Discount List</h4>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Show Discount</h4>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Discount (%)</th>
                                                        <th>Event</th>
                                                        <th>Release Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
								                    $data = $discount->selectdiscount();
								                    $n=1;
								                    foreach ($data as $value)
								                { ?>
								 	<tr>
								 		<td><?php echo $n; $n++; ?></td>
								 		<td><?php echo $value->discount; ?></td>
								 	    <td><?php echo $value->event;?></td>
                                         <td><?php echo $value->rels_date;?></td>
                                         <td><?php echo $value->exp_date;?></td>
								 	    <td> <?php 
														echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_discount.php?id=".$value->discount_id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_discount.php?id=".$value->discount_id."'>Delete</a>";
													
													
											?>
										  </td>
								 	</tr>
								<?php	
								}
							 ?>
                                                <!-- <tr>
                                                    <th scope="row">1</th>
                                                    <td>10%</td>
                                                    <td>Christmas</td>
                                                      <td> <button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>20%</td>
                                                    <td>Dashain</td>
                                                      <td> <button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr> -->
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                                           

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php 
            require_once 'layout/footer.php';
            ?>