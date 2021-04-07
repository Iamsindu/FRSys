<?php 
        require_once 'class/common.class.php';
        require_once 'class/food.class.php';
        require_once 'class/category.class.php';
        require_once 'layout/header.php';
        $food=new food;
        $category = new category;
        //$food->rest_id = $_SESSION['rest_id'];
        $food->rest_id = 2;
        //$category =  new category;
        //$resturant->rest_id=3;
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
                                        <h4 class="page-title">Show Food</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Food Info</h4>
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Veg/Non-Veg</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                               
                                               $data = $food->select_restaurantfood_byid();
                                               $r=1;
                                               foreach ($data as $value)
                                               { 
                                                   
                                                  $food->food_id=$value->food_id;
                                                  $info=$food->selectfoodbyid();
                                                  foreach($info as $food_name) {
                                                   ?>
                                                    <tr>
                                                        <td><?php echo $r++; ?></td>
                                                        <td><?php echo $food_name->fname; ?></td>
                                                       <td><?php if($food_name->vg_nvg==1){echo 'Yes';}else{echo 'No';} ?></td>
                                                    <td><?php echo $food_name->dsc;?></td>
                                                   
                                                    <td>
                                                    <?php 
                                                               echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_food.php?id=".$food_name->food_id."'>Update</a>"."&nbsp"; 
                                                               echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_food.php?id=".$food_name->food_id."'>Delete</a>";
                                                           ?>
                                                           </td>
                                                </tr>
                                                <?php	
                                                   }}
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
                                        <div class="row form-material">
                                        <?php 
                                            $foodie = $food->select_restaurantfood_byid();
                                            foreach ($foodie as $count)
                                            { 
                                               $food->food_id=$count->food_id;
                                               $infos=$food->selectfoodbyid();
                                               foreach($infos as $foodiess) {
                                        ?>
                                             <div class="col-md-6">
                                            <h6 class="mt-0 header-title">Food Name :     <?php echo $foodiess->fname; ?></h6>
                                             </div>
                                        <div class="col-md-6">
                                        <?php 
                                            echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_food_photo.php?id=".$foodiess->food_id."'>Update</a>"."&nbsp";       
                                        ?>
                                        </div>
                                        
                
                                                <div class="popup-gallery" style="padding:2% 0 2% 0;">
                                                <?php
                                                $data1 = $food->selectphoto_byid();
                                                foreach ($data1 as $value1){  ?>
                                                    <?php 
                                                    echo'<a class="pull-left" href="images/'.$value1->photo.'" title="'.$value1->photo.'">'; 
                                                    ?>
                                                        <div class="img-fluid">
                                                           <?php echo '<img src="images/'.$value1->photo.'" width="275">'; ?>
                                                        </div>
                                                    </a>
                                                    <?php } ?>
                                                    <p></p>
                                                </div> 
                                              <?php } } ?>  
                                        </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                           
                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        <h4 class="mt-0 header-title">Category</h4>
                                        <div class="row form-material">
                                        <?php
                                            foreach ($foodie as $county)
                                            { 
                                               $food->food_id=$county->food_id;
                                               $inf=$food->selectfoodbyid();
                                               foreach($inf as $fcatt) {
                                        ?>
                                             <div class="col-md-6">
                                            <h6 class="mt-0 header-title">Food Name :     <?php echo $fcatt->fname; ?></h6>
                                             </div>
                                        <div class="col-md-6">
                                        <?php 
                                            echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_food_category.php?id=".$fcatt->food_id."'>Update</a>"."&nbsp";       
                                        ?>
                                        </div>
                                        <div class="button-items col-md-12" style="padding-bottom:2%;">
                                        <?php $dat = $food->selectcategory_byid();
                                                foreach ($dat as $val){
                                                    $category->cat_id=$val->cat_id;
                                                    $infooo=$category->selectcategorybyid();
                                                    foreach($infooo as $cat_name) {
                                                     ?>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" disabled><?php echo $cat_name->catname; ?></button>
                                        <?php } } ?>
                                    </div>
                                               
                                              <?php } } ?>  
                                        </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php 
            require_once 'layout/footer.php';
            ?>