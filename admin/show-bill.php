<?php 
require_once 'layout/header.php';
require_once 'admin.class.php';
require_once 'common.class.php';
$admin = new admin;
$value[]=$admin->selectuser();
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

                <?php 
            require_once 'layout/footer.php';
            ?>