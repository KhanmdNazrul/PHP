<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />

    <?php include "partials/style.php" ?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php require_once "partials/topbar.php" ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php require_once "partials/leftbar.php" ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h4 class="page-title">Manage Doctors</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Manage Doctors</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->

                    <!-- start top-Contant -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center p-1">
                                        <div class="col-lg-6">
                                            <h5 class="font-16">Total Expenses</h5>
                                            <h4 class="text-info pt-1 mb-0">$67,670</h4>
                                        </div>
                                        <div class="col-lg-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center p-1">
                                        <div class="col-lg-6">
                                            <h5 class="font-16">Total Invoice</h5>
                                            <h4 class="text-warning pt-1 mb-0">$7,360</h4>
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center p-1">
                                        <div class="col-lg-6">
                                            <h5 class="font-16">Amount Due</h5>
                                            <h4 class="text-primary pt-1 mb-0">$5000</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center p-1">
                                        <div class="col-lg-6">
                                            <h5 class="font-16">Unpaid Invoices</h5>
                                            <h4 class="text-danger pt-1 mb-0">$2,480</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="chart4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- end top-Contant -->

                    <div class="row">



                        <!-- Start content -->


                        <div class="container-fluid">
                            <div class="page-title-box">

                                <div class="row align-items-center ">
                                    <div class="col-md-12">
                                        <div class="page-title-box">
                                            <h4 class="page-title">Dashboard</h4>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:void(0);">Doctors</a>
                                                </li>

                                                <li class="breadcrumb-item active">Manage Doctor</li>
                                            </ol>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- end page-title -->




                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Default Datatable</h4>
                                            <p class="sub-title">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function
                                            </p>

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <>
                                                        Full texts

                                                        <th>ID</th>
                                                        <th>SPECIALIZATION</th>
                                                        <th>NAME</th>
                                                        <th>PHOTO</th>
                                                        <th>FEES</th>
                                                        <th>CONTACT</th>
                                                        <th>EMAIL</th>
                                                        <th>ACTION</th>


                                                </thead>
                                                <tbody>
                                                    <?php
                                                    require_once "dbconfig.php";

                                                    $sql = $dbf->query("SELECT * FROM doctors");
                                                    $sn = 1;
                                                    while ($row = $sql->fetch_assoc()) {

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $sn ?></td>
                                                            <td><?php echo $row['specilization'] ?></td>
                                                            <td><?php echo $row['doctorName'] ?></td>                                                           
                                                            <td><?php echo $row['photo'] ?></td>
                                                            <td><?php echo $row['docFees'] ?></td>
                                                            <td><?php echo $row['contactno'] ?></td>
                                                            <td><?php echo $row['email'] ?></td>


                                                            <td>
                                                                <div class="button-items">
                                                                    <a href=""> <input class="btn btn-success" type="submit" value="Edit"> </a>
                                                                    <a href=""> <input class="btn btn-danger" type="submit" value="Delete"></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    <?php
                                                        $sn++;
                                                    } ?>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->


                            <!-- end row -->

                        </div>
                        <!-- container-fluid -->


                        <!-- content -->







                        <!-- end row -->


                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->



            </div>
            <?php require_once "partials/footer.php" ?>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <?php require_once "partials/js.php" ?>
</body>

</html>