<?php 
        require_once 'class/common.class.php';
        require_once 'class/resturant.class.php';
        require_once 'layout/header.php';
        $resturant=new resturant;
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
                                                <li class="breadcrumb-item"><a href="#">Resturant</a></li>
                                                <li class="breadcrumb-item active">Show Resturant</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Show Resturant</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Listing all the resturants...</h4>            
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Phone Number</th>
                                                    <th>Delivery</th>
                                                    <th>Status</th>
                                                    <th>Open Time</th>
                                                    <th>Close Time</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php 
                                               
								                $data = $resturant->selectrestaurant();
								                $n=1;
                                                foreach ($data as $value)
                                                {  ?>
								 	                <tr>
								 		                <td><?php echo $n; $n++; ?></td>
								 		                <td><?php echo $value->rest_name; ?></td>
								 	                    <td><?php echo $value->email_id;?></td>
                                                        <td><?php echo $value->phone_no;?></td>
                                                        <td><?php if($value->delivery==1){echo 'Yes';}else{echo 'No';} ?></td>
                                                        <td><?php echo $value->status;?></td>				<td><?php echo $value->open_time;?></td>				 <td><?php echo $value->close_time;?></td>	    
								 	                    <td> <?php 
														        echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_rest.php?id=".$value->rest_id."'>Update</a>"."&nbsp"; 
														        echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_rest.php?id=".$value->rest_id."'>Delete</a>";
													        ?>
										                </td>
								 	                </tr>
                                                <?php	
                                                    }
							                    ?>             
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