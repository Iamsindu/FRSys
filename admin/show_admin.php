<?php 
require_once 'layout/header.php';
require_once 'class/common.class.php';
require_once 'class/admin.class.php';
//require_once 'class/session.class.php';
//sessionhelper::checklogin();
//require_once 'selector.php';
$admin = new admin;
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
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Show Admin</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Admin Table</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->




        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Lists of all users with own privileges.</h4>
                        <!-- <p class="text-muted m-b-30 font-14">
                                                Use <code>.table-striped</code> to add zebra-striping to any table row
                                                within the <code>&lt;tbody&gt;</code>.
                                            </p> -->

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Last Login
                                    <th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$admin= new admin;
								$data = $admin->selectadmin();
								$n=1;
								foreach ($data as $value)
                                 { if($value->role!='User') 
                                    {
                                     ?>
                                <tr>
                                    <td><?php echo $n; $n++; ?></td>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo $value->email_id;?></td>
                                    <td><?php echo $value->role;?></td>
                                    <td><?php echo $value->status;?></td>
                                    <td> <?php 
														echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_admin.php?id=".$value->admin_id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_admin.php?id=".$value->admin_id."'>Delete</a>";
													
													
											?>
                                    </td>
                                    <td><?php if($value->last_login=='0000-00-00 00:00:00'){ echo "Not Logged In"; }else{ echo $value->last_login; } ?>
                                    </td>
                                </tr>
                                <?php	
                                    }
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