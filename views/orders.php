<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Orders | Wawooh Dashboard</title>
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
            <? include __DIR__ .'/view-stubs/vendorSide.php'?>
            <!-- partial -->
            <div class="content-wrapper">
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
                <div class="row grid-margin">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Order status</h6>
                                <div class="d-flex table-responsive">
                                    <div class="btn-group mr-2">
                                        <button class="btn btn-sm btn-info"><i class="mdi mdi-plus-circle-outline"></i>
                                            Add
                                        </button>
                                    </div>
                                    <div class="btn-group mr-2">
                                        <button type="button" class="btn btn-light"><i
                                                class="mdi mdi-alert-circle-outline"></i></button>
                                        <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group mr-2">
                                        <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group ml-auto mr-2 border-0">
                                        <input type="text" class="form-control" placeholder="Search Here">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i>
                                        </button>
                                        <button type="button" class="btn btn-light"><i
                                                class="mdi mdi-dots-vertical"></i></button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mt-3 border-top">
                                        <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Customer</th>
                                            <th>Ship</th>
                                            <th>Best Price</th>
                                            <th>Purchsed Price</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>50014</td>
                                            <td>David Grey</td>
                                            <td>Italy</td>
                                            <td>$6300</td>
                                            <td>$2100</td>
                                            <td>
                                                <div class="badge badge-success badge-fw">Progress</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>50015</td>
                                            <td>Stella Johnson</td>
                                            <td>Brazil</td>
                                            <td>$4500</td>
                                            <td>$4300</td>
                                            <td>
                                                <div class="badge badge-warning badge-fw">Open</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>50016</td>
                                            <td>Marina Michel</td>
                                            <td>Japan</td>
                                            <td>$4300</td>
                                            <td>$6440</td>
                                            <td>
                                                <div class="badge badge-danger badge-fw">On hold</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>50017</td>
                                            <td>John Doe</td>
                                            <td>India</td>
                                            <td>$6400</td>
                                            <td>$2200</td>
                                            <td>
                                                <div class="badge badge-success badge-fw">Progress</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                                    <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                                    <nav>
                                        <ul class="pagination pagination-info mb-0">
                                            <li class="page-item"><a class="page-link"><i
                                                        class="mdi mdi-chevron-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link">1</a></li>
                                            <li class="page-item"><a class="page-link">2</a></li>
                                            <li class="page-item"><a class="page-link">3</a></li>
                                            <li class="page-item"><a class="page-link">4</a></li>
                                            <li class="page-item"><a class="page-link"><i
                                                        class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a
                            href="#">Wawooh</a>. All rights reserved.</span>
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
