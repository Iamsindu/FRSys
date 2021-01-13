<?php 
        require_once 'class/common.class.php';
        require_once 'class/resturant.class.php';
        require_once 'layout/header.php';
        $resturant=new resturant;
        $resturant->rest_id=3;
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

                            <!-- <div class="row">
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
                                                <tbody> -->
                                                
                                                <?php 
                                               
								                //$data = $resturant->selectrestaurant();
								                //$n=1;
                                                //foreach ($data as $value)
                                                //{  ?>
								 	                <tr>
								 		                <!-- <td><?php //echo $n; $n++; ?></td>
								 		                <td><?php //echo $value->rest_name; ?></td>
								 	                    <td><?php //echo $value->email_id;?></td>
                                                        <td><?php //echo $value->phone_no;?></td>
                                                        <td><?php //if($value->delivery==1){echo 'Yes';}else{echo 'No';} ?></td>
                                                        <td><?php //echo $value->status;?></td>				<td><?php //echo $value->open_time;?></td>				 <td><?php //echo $value->close_time;?></td>	    
								 	                    <td> <?php 
														        //echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_rest.php?id=".$value->rest_id."'>Update</a>"."&nbsp"; 
														        //echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_rest.php?id=".$value->rest_id."'>Delete</a>";
													        ?>
										                </td> -->
								 	                <!-- </tr>
                                                <?php	
                                                   // }
							                    ?>             
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> end col 
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Basic example</h4>
                                            <p class="text-muted m-b-30 font-14">For basic styling—light padding and
                                                only horizontal dividers—add the base class <code>.table</code> to any
                                                <code>&lt;table&gt;</code>.
                                            </p>
            
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Phone No</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Delivery</th>
                                                    <th>Open Time</th>
                                                    <th>Close Time</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                               
                                               $data = $resturant->selectrestaurantbyid();
                                               
                                               foreach ($data as $value)
                                               {  ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><?php echo $value->rest_name; ?></td>
                                                        <td><?php echo $value->phone_no;?></td>
                                                       <td><?php echo $value->email_id;?></td>
                                                       <td><?php echo $value->status;?></td>
                                                       <td><?php if($value->delivery==1){echo 'Yes';}else{echo 'No';} ?></td>
                                                       	<td><?php echo $value->open_time;?></td>			<td><?php echo $value->close_time;?></td>
                                                           <td><?php echo $value->dsc;?></td>	    
                                                        <td> 
                                                       </td>
                                                    </tr>
                                                
                                                <tr>
                                                    <td colspan="2"><b>Action<b></td>
                                                    <td colspan="7">
                                                    <?php 
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
                            </div>                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        <h4 class="mt-0 header-title">Lightbox gallery</h4>
                                                <p class="text-muted m-b-30 font-14">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
                
                                                <div class="popup-gallery">
                                                <?php
                                                $data = $resturant->selectphoto_byid();
                                                foreach ($data as $value){  ?>
                                                    <?php 
                                                    echo'<a class="pull-left" href="images/'.$value->photo.'" title="'.$value->photo.'">'; 
                                                    ?>
                                                        <div class="img-fluid">
                                                           <?php echo '<img src="images/'.$value->photo.'" width="275">'; ?>
                                                        </div>
                                                    </a>
                                                    <?php } ?>
                                                </div>       
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