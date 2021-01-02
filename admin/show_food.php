<?php 
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/food.class.php';
//require_once 'class/session.class.php';
//sessionhelper::checklogin();
//require_once 'selector.php';
$food = new food;
 ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                                <li class="breadcrumb-item"><a href="#">Food</a></li>
                                                <li class="breadcrumb-item active">Show Food</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Show Food Table</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-sm-11">
                                            <!-- <h4 class="mt-0 header-title">Default Datatable</h4> -->
                                        </div>
                                        <div class="col-sm-1">
                                           <!-- <button type="button" class="btn btn-link waves-effect">Link</button> -->
                                                    </div>
                                                </div>
                                            
            
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Food Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Veg/Non-Veg</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php 
								$data = $food->selectfood();
								$n=1;
								foreach ($data as $value)
								{?>
								 	<tr>
								 		<td><?php echo $n; $n++; ?></td>
								 		<td><?php echo $value->fname; ?></td>
								 	    <td><?php echo $value->dsc;?></td>
                                        <td><?php echo $value->price;?></td>
                                        <td><?php if($value->vg_nvg==1){echo 'Veg';}else{echo 'Non Veg';}?></td>
								 	    <td><?php 
												echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update.php?id=".$value->food_id."'>Update</a>"."&nbsp"; 
												echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete.php?id=".$value->food_id."'>Delete</a>";	
											?>
										</td>
								 	</tr>
								<?php	
								    }
							    ?>
                                                <!-- <tr>
                                                    <td>131</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>Mithoo chaaa hai bross</td>
                                                    <td>1000</td>
                                                    <td>Refresh cafe</td>
                                                    <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td>131</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>Mithoo chaaa hai bross</td>
                                                    <td>1000</td>
                                                    <td>Refresh cafe</td>
                                                    <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                   <td>131</td>
                                                   <td>Tiger Nixon</td>
                                                   <td>Mithoo chaaa hai bross</td>
                                                   <td>1000</td>
                                                   <td>Refresh cafe</td>
                                                   <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                     <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                               -->
                                               
                                              
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