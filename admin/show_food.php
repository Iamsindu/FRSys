<?php 
        require_once 'class/common.class.php';
        require_once 'class/resturant.class.php';
        require_once 'class/category.class.php';
        require_once 'layout/header.php';
        $resturant=new resturant;
        $category =  new category;
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

                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Resturant Info</h4>
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
                                                               echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_resturant.php?id=".$value->rest_id."'>Update</a>"."&nbsp"; 
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
                                            <h4 class="mt-0 header-title">location</h4>
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>City</th>
                                                    <th>Street</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                               
                                               $data = $resturant->selectlocation_byid();
                                               foreach ($data as $value)
                                               {  ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><?php echo $value->city; ?></td>
                                                        <td><?php echo $value->street;?></td>
                                                   
                                                    <td>
                                                    <?php 
                                                               echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_resturant_location.php?id=".$value->rest_id."'>Update</a>"."&nbsp";
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
                                        <h4 class="mt-0 header-title">Gallery</h4>
                                        <?php 
                                            echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_resturant_photo.php?id=".$resturant->rest_id."'>Update</a>"."&nbsp";       
                                        ?>    
                                                <p></p>
                
                                                <div class="popup-gallery">
                                                <?php
                                                $data1 = $resturant->selectphoto_byid();
                                                foreach ($data1 as $value1){  ?>
                                                    <?php 
                                                    echo'<a class="pull-left" href="images/'.$value1->photo.'" title="'.$value1->photo.'">'; 
                                                    ?>
                                                        <div class="img-fluid">
                                                           <?php echo '<img src="images/'.$value1->photo.'" width="275">'; ?>
                                                        </div>
                                                    </a>
                                                    <?php } ?>
                                                </div> 
                                                  
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                    <div class="card-body">
                                    <h4 class="mt-0 header-title">Category</h4>
                                    <div class="button-items">
                                        <?php $datas = $resturant->selectrcat_byid();
                                                foreach ($datas as $values){
                                                    $category->cat_id=$values->cat_id;
                                                    $info=$category->selectcategorybyid();
                                                    foreach($info as $cat_name) {
                                                     ?>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" disabled><?php echo $cat_name->catname; ?></button>
                                        <?php } } ?>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                    <div class="card-body">
                                    <h4 class="mt-0 header-title">Action</h4>
                                    <div class="button-items">
                                    <?php 
                                            echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_resturant_category.php?id=".$resturant->rest_id."'>Update</a>"."&nbsp";       
                                        ?>
                                        
                                       
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php 
            require_once 'layout/footer.php';
            ?>