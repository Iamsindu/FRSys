 <!-- Loader -->
        <?php 
            require_once 'layout/header.php';
            require_once 'class/common.class.php';
            require_once 'class/resturant.class.php';
            require_once 'class/user.class.php';
            require_once 'class/orders.class.php';
            $rest = new resturant ;
            $user = new users;
            $order = new orders;
            $count1= $rest->count();
            $count2= $user->count();
            $count3 = $order->count();
            $resturant = $count1[0]->count;
            $users = $count2[0]->count;
            $orders = $count3[0]->count;
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
                                                <li class="breadcrumb-item active">Admin Panel</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                                    
                            <div class="row">
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-webcam"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php echo $resturant; ?></h5>
                                                        <p class="mb-2 text-muted"> Total Resturants</p>                                                                 
                                                    </div>
                                                </div>
                                                <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-multiple-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php echo $users; ?></h5>
                                                        <p class="mb-0 text-muted">Total Users</p>
                                                    </div>
                                                </div>
                                               <!--  <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div> -->                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-basket"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php echo $orders; ?></h5>
                                                        <p class="mb-0 text-muted">New Orders</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div>  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-rocket"></i>
                                                    </div>
                                                </div>
                                                <div class="col-9 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner">RS.3241</h5>
                                                        <p class="mb-0 text-muted">Total Sales</p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            <!-- </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Column -->
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <!-- <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5 class="header-title pb-3 mt-0">Overview</h5>
                                            <div id="multi-line-chart" style="height:400px;"></div>
                                        </div>
                                    </div> -->
                                </div>
                                 <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="card bg-white m-b-30">
                                        <div class="card-body new-user">
                                                <h5 class="header-title mt-0 ">New Users</h5>
                                            <ul class="list-unstyled mb-0 pr-3" id="boxscroll2" tabindex="1" style="overflow: hidden; outline: none;">
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Shephalikaa Gautam</p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">Shivanagar</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                 <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Aaditya Karki</p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">Deepnagar</small>
                                                        </div>
                                                    </div>
                                                </li>
                                          <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">                                                    
                                                            <p class="media-heading mb-0">Abhinav Khatri</p>
                                                            <!-- <small class="pull-right text-muted">10 min ago</small> -->
                                                            <small class="text-muted">Hallanagar</small>                                                   
                                                        </div>
                                                    </div>
                                                </li> 
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Advik Panthi</p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">Devinagar</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Avhyudaya Pokhrel</p>
                                                            <!-- <small class="pull-right text-muted">36 min ago</small> -->
                                                            <small class="text-muted">Sukkhanagar</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Anusandhan Parajuli</p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">Bescamp</small>
                                                        </div>
                                                    </div>
                                                </li> 
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/avatar.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Stuti Kafle</p>
                                                            <!-- <small class="pull-right text-muted">58 min ago</small> -->
                                                            <small class="text-muted">Dingarnagar</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                    
                                        </div>                                
                                    </div>
                                </div>
                                
                            </div>

                           
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center">
                                    <div class="card bg-white m-b-30">
                                        <div class="card-body new-user">
                                            <h5 class="header-title mb-4 mt-0">Resturant Review</h5>
                                            <div class="table-responsive">
                                              <ul class="list-unstyled mb-0 pr-3"  id="boxscroll" tabindex="1" style=" overflow: hidden; outline: none; ">
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/refresh-cafe.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0"> Refresh Cafe
                                                                <!-- <i class="fa fa-circle text-success mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">30 mon ago</small> -->
                                                            <small class="text-muted">A fine example of a specific kind of restaurant. It can be delicious food with excellent service - <b>Paridhi Parajuli </b> </small>
                                                        </div>
                                                    </div>
                                                </li>
                                                 <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/galaxy.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Galaxy Cafe 
                                                                 <!-- <i class="fa fa-circle text-success mr-1 pull-right"></i> -->
                                                            </p>
                                                             <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">Extraordinary. Meets an elite standard by which you judge all other restaurants. - <b>Mallika Singh</b> </small>
                                                        </div>
                                                    </div>
                                                </li>
                                          <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/logo.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">                                                    
                                                            <p class="media-heading mb-0"> The Concept Club and Pub
                                                                <!-- i class="fa fa-circle text-danger mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">10 min ago</small> -->
                                                            <small class="text-muted">Appealing atmosphere, helpful staff, and brilliant service.  - <b>Sanjita Poudel </b></small>                                                   
                                                        </div>
                                                    </div>
                                                </li> 
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/lavish.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">The Lavish Lounge and Bar
                                                                <!-- <i class="fa fa-circle text-success mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">I experienced a delicious main course and caring staff—but pity about the French fries. -  <b>Kusum Ranjitakar </b></small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/logo.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Vitamin Foods and Cafe
                                                                <!-- <i class="fa fa-circle text-danger mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">36 min ago</small> -->
                                                            <small class="text-muted">The service was above average, but the French fries were too unpalatable to finish. - <b>Sagun Karanjit </b> </small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/resturantlogo.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Signature Bakery & Cafe 
                                                                <!-- <i class="fa fa-circle text-success mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">Now</small> -->
                                                            <small class="text-muted">I’d love to visit again. I'd recommend it as a nice place to go with friends, family, or a partner. Do try their famous masala dosa.     - <b>Trija Thebe</b>                                                       </small>
                                                        </div>
                                                    </div>
                                                </li> 
                                                <li class="p-3">
                                                    <div class="media">
                                                        <div class="thumb float-left">
                                                            <a href="#">
                                                                <img class=" rounded-circle" src="assets/images/users/lime.png" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading mb-0">Lime & Lemon Lounge Cafe
                                                                <!-- <i class="fa fa-circle text-danger mr-1 pull-right"></i> -->
                                                            </p>
                                                            <!-- <small class="pull-right text-muted">58 min ago</small> -->
                                                            <small class="text-muted">Not withstanding the disinterested waters, I highly recommend this restaurant. The food is delicious and the atmosphere is brilliant. -<b>Melisha Ghimire</b>

                                                            </small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                             
                            </div>  

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 FRS by VSCUBE
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

        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
        
        });
        </script>

    </body>
</html>