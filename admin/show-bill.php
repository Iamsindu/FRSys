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
                                                <li class="breadcrumb-item"><a href="#">Bill</a></li>
                                                <li class="breadcrumb-item active">Show Bill</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Show Bill</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Bill List</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">DataTables has most features enabled by
                                                default, so all you need to do to use it with your own tables is to call
                                                the construction function: <code>$().DataTable();</code>.
                                            </p> -->
            
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Timestamp</th>
                                                    <th>Bill ID</th>
                                                    <th>Resturant</th>
                                                    <th>Food</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2020-10-11 12:13</td>
                                                    <td>1</td>
                                                    <td>Galaxy Cafe</td>
                                                    <td>French Fries</td>
                                                    <td>2</td>
                                                    <td>4567</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2019-01-11 11:11</td>
                                                    <td>65</td>
                                                    <td>Refresh Cafe</td>
                                                    <td>Spaghetti</td>
                                                    <td>1</td>
                                                    <td>45</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2018-01-11 12:12</td>
                                                    <td>58</td>
                                                    <td>Signature Cafe</td>
                                                    <td>Dumpling</td>
                                                    <td>1</td>
                                                    <td>70</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2018-01-11 1:11</td>
                                                    <td>7</td>
                                                    <td>Darkwood</td>
                                                    <td>Mutton Curry</td>
                                                    <td>4</td>
                                                    <td>5000</td>
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