<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wawooh Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/css/dash/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/dash/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/dash/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/dash/perfect-scrollbar.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/dash/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/dash/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png"/>
    <link rel="stylesheet" href="assets/css/designerdash.css">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <? include __DIR__ . '/view-stubs/vendorHeader.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <? include __DIR__ . '/view-stubs/vendorSide.php' ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-warning">
                            <strong>Please, update your profile details to have full access to the service</strong>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">All Orders</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Total Products</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Total Amount</p>
                                        <h6>$ 0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Total Pending Amount</p>
                                        <h6>$ 0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12"><h4>Orders Details (total)</h4></div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Pending</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Confirmed</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Ready to Ship</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Shipping</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Cancelled</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <div class="ml-3 orderDetails">
                                        <p class="mb-0">Delivered</p>
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                                <div class="card" style="height: 250px;">
                                    <div class="card-body">
                                        <h6 class="card-title">Orders Today</h6>
                                        <div class="row">
                                            <div class="col-12 text-center" style="padding-top: 30px">
                                                <div class="row">
                                                    <div class="col-12 border-right">
                                                        <h4>0</h4>
                                                        <p>Pending</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-md-8 col-lg-12 grid-margin stretch-card">
                                <div class="card" style="height: 250px; background: rgb(4,3,3); color: #cd9933">
                                    <div class="card-body">
                                        <h6 class="card-title"></h6>
                                        <div class="row">
                                            <div class="col-12 text-center" style="padding-top: 30px">
                                                <div class="row">
                                                    <div class="col-12 border-right">
                                                        <h4></h4>
                                                        <p>Something coming here soon!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Daily Sales</h6>
                                <div class="w-75 mx-auto">
                                    <div class="d-flex justify-content-between text-center">
                                        <div class="wrapper">
                                            <h4>$2256</h4>
                                            <small class="text-muted">Total sales</small>
                                        </div>
                                        <div class="wrapper">
                                            <h4>584</h4>
                                            <small class="text-muted">Compaign</small>
                                        </div>
                                    </div>
                                    <div id="dashboard-donut-chart" style="height:250px"></div>
                                </div>
                                <div id="legend" class="donut-legend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Total Revenue</h6>
                                <div class="w-75 mx-auto">
                                    <div class="d-flex justify-content-between text-center mb-5">
                                        <div class="wrapper">
                                            <h4>6,256</h4>
                                            <small class="text-muted">Total sales</small>
                                        </div>
                                        <div class="wrapper">
                                            <h4>8569</h4>
                                            <small class="text-muted">Open Compaign</small>
                                        </div>
                                    </div>
                                </div>
                                <div id="morris-line-example" style="height:250px;"></div>
                                <div class="w-75 mx-auto">
                                    <div class="d-flex justify-content-between text-center mt-5">
                                        <div class="wrapper">
                                            <h4>5136</h4>
                                            <small class="text-muted">Online Sales</small>
                                        </div>
                                        <div class="wrapper">
                                            <h4>4596</h4>
                                            <small class="text-muted">Store Sales</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                                    <i class="mdi mdi-facebook icon-lg text-facebook"></i>
                                    <div class="wrapper ml-md-3">
                                        <p class="text-facebook mb-0 font-weight-medium">15k Likes</p>
                                        <small class="text-muted mb-0">You main list growing !</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                                    <i class="mdi mdi-twitter icon-lg text-twitter"></i>
                                    <div class="wrapper ml-md-3">
                                        <p class="text-twitter mb-0 font-weight-medium">18k followers</p>
                                        <small class="text-muted mb-0">There you are !</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                                    <i class="mdi mdi-linkedin icon-lg text-linkedin"></i>
                                    <div class="wrapper ml-md-3">
                                        <p class="text-linkedin mb-0 font-weight-medium">5k connections</p>
                                        <small class="text-muted mb-0">Going good !</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a
                                href="">Wawooh</a>. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/js/dash/jquery.min.js"></script>
<script src="assets/js/dash/popper.min.js"></script>
<script src="assets/js/dash/bootstrap.min.js"></script>
<script src="assets/js/dash/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="assets/js/dash/jquery.barrating.min.js"></script>
<script src="assets/js/dash/Chart.min.js"></script>
<script src="assets/js/dash/raphael.min.js"></script>
<script src="assets/js/dash/morris.min.js"></script>
<script src="assets/js/dash/jquery.sparkline.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/dash/off-canvas.js"></script>
<script src="assets/js/dash/hoverable-collapse.js"></script>
<script src="assets/js/dash/misc.js"></script>
<script src="assets/js/dash/settings.js"></script>
<script src="assets/js/dash/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/dash/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
