<?php 
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/category.class.php';
//require_once 'class/session.class.php';
//sessionhelper::checklogin();
//require_once 'selector.php';
$category = new category;
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
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active">Show Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Show Category</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">List of all Categories.</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$data = $category->selectcategory();
								$n=1;
								foreach ($data as $value)
								{ ?>
                                <tr>
                                    <td><?php echo $n; $n++; ?></td>
                                    <td><?php echo $value->catname; ?></td>
                                    <td style="word-break: break-all;width:50%;"><?php echo $value->dsc;  ?>
                                    <td> <?php 
											echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_category.php?id=".$value->cat_id."'>Update</a>"."&nbsp"; 		
											?>
                                    </td>
                                </tr>
                                <?php	} ?>
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