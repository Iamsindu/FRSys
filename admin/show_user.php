<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>FRS- FOOD RECOMMENDATION SYSTEM</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
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
                                                <li class="breadcrumb-item"><a href="#">Users</a></li>
                                                <li class="breadcrumb-item active">Show Users</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Show users</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Lists of all users with own privileges.</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">DataTables has most features enabled by
                                                default, so all you need to do to use it with your own tables is to call
                                                the construction function: <code>$().DataTable();</code>.
                                            </p> -->
            
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php 
								$admin= new admin;
								$data = $admin->selectadmin();
								$n=1;
								foreach ($data as $value)
								 {if($value->role=='User')
                                    {
                                     ?>
								 	<tr>
								 		<td><?php echo $n; $n++; ?></td>
								 		<td><?php echo $value->username; ?></td>
								 	    <td><?php echo $value->email_id;?></td>
                                         <td><?php 
                                         
                                         echo $value->role;
                                         ?></td>
                                         <td><?php echo $value->status;?></td>
								 	    
								 	    <td> <?php 
														echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update.php?id=".$value->admin_id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete.php?id=".$value->admin_id."'>Delete</a>";
													
													
											?>
										  </td>
								 	</tr>
                                <?php
                                    }	
								}
							 ?>
                                                <!-- <tr>
                                                    <th scope="row">1</th>
                                                    <td>Sandip Pokhrel</td>
                                                    <td>Admin</td>
                                                    <td>Active</td>
                                                    <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Sandip Pokhrel</td>
                                                    <td>Admin</td>
                                                    <td>Active</td>
                                                    <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Sandip Pokhrel</td>
                                                    <td>Admin</td>
                                                    <td>Active</td>
                                                    <td><button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
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

                <footer class="footer">
                    © 2020 FRS BY VSCUBE
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

         <!-- Required datatable js -->
         <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
         <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
         <script src="assets/plugins/datatables/jszip.min.js"></script>
         <script src="assets/plugins/datatables/pdfmake.min.js"></script>
         <script src="assets/plugins/datatables/vfs_fonts.js"></script>
         <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
         <script src="assets/plugins/datatables/buttons.print.min.js"></script>
         <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>


    </body>
</html>