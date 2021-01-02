<?php 
        require_once 'layout/header.php';
        require_once 'class/common.class.php';
        require_once 'class/admin.class.php';
        require_once 'class/menu.class.php';
        $menu = new menu;
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
                                                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                                                <li class="breadcrumb-item active">Show Menu</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Show Menu</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                             <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Show Menu Table</h4>            
                                            <table class="table table-hover">
                                                <thead>
                                                 <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $data=$menu->selectmenu();
                                                    $n=1;
                                                    foreach ($data as $value)
                                                    {  ?>
                                                    <tr>
								 		                <td><?php echo $n; $n++; ?></td>
								 		                <td><?php echo $value->menuname; ?></td>
								 	                    <td><?php echo $value->dsc;?></td>
                                                        <td><?php echo $value->photo_id;?></td>							 	    
								 	                    <td> <?php 
														    echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_menu.php?id=".$value->menu_id."'>Update</a>"."&nbsp"; 
														    echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_menu.php?id=".$value->menu_id."'>Delete</a>";
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