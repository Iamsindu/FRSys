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
											    echo "<a  class='btn btn-outline-info waves-effect waves-light' href='update_user.php?id=".$value->admin_id."'>Update</a>"."&nbsp"; 
											    echo "<a class='btn btn-outline-danger waves-effect waves-light' href='delete_user.php?id=".$value->admin_id."'>Delete</a>";
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
                <?php 
            require_once 'layout/footer.php';
            ?>