<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <?php 
            require_once 'layout/header.php';
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
                                                <li class="breadcrumb-item"><a href="#">Discount</a></li>
                                                <li class="breadcrumb-item active">Show Discount</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Discount List</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                        
            
            
                             <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Show Discount</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">
                                                Use <code>.table-striped</code> to add zebra-striping to any table row
                                                within the <code>&lt;tbody&gt;</code>.
                                            </p> -->
            
                                            <table class="table table-hover">
                                                <thead>
                                                 <tr>
                                                    <th>ID</th>
                                                    <th>Rate</th>
                                                    <th>Special Event</th>
                                                    <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>10%</td>
                                                    <td>Christmas</td>
                                                      <td> <button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>20%</td>
                                                    <td>Dashain</td>
                                                      <td> <button type="button" class="btn btn-outline-info waves-effect waves-light">Update</button>
                                                      <button type="button" class="btn btn-outline-danger waves-effect waves-light">Delete</button></td>
                                                </tr>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>