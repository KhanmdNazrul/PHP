<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include_once "partials/topbar.php" ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once "partials/leftbar.php" ?>
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
                                    <h4 class="page-title">Doctor Entry</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Zegva</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li class="breadcrumb-item active">Doctor Entry</li>
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

                    <div class="row">
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">


                                    <h5 class="mt-0 header-title">Doctor Entry Form</h5>
                                    
                                    <?php 
                                    
                                    if(isset($_POST['submit'])){
                                        extract($_POST);
                                        require_once "dbconfig.php";

                                       $photo_name= $_FILES['photo']['name'];
                                       $photo_tname= $_FILES['photo']['tmp_name'];
                                       $path = "image/";
                                       $url = $path.$photo_name;

                                     if( move_uploaded_file($photo_tname,$path. $photo_name)){
                                        $dbf->query("INSERT INTO doctors(id, specilization, doctorName, address, photo, docFees, contactno, email, password) VALUES(NULL, '$specilization','$name','$address','$photo_name','$docfees','$contact','$email','$pass')");

                                    if($dbf->affected_rows){
                                        echo "<b style='color:green'><p>Successfully Inserted!</p></b>";
                                    }
                                     } 
                                    }
                                    
                                    ?>



                                    <form class="" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Specialization</label>

                                            <select name="specilization" class="form-control" id="">
                                                <option value="">Select One</option>
                                            <?php 
                                            include_once "dbconfig.php";

                                            $sql = $dbf->query("SELECT specilization FROM doctorspecilization");
                                            while($row = $sql->fetch_assoc()){?>
                                                <option value="<?php echo $row['specilization'] ?>"><?php echo $row['specilization'] ?></option>


                                           <?php   } ?>
                                           
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div>
                                                <textarea required class="form-control" name="address" placeholder="Enter your Address here" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Photo Upload</label>
                                            <input type="file" name="photo" class="form-control" required placeholder="Type something" />
                                        </div>

                                        <div class="form-group">
                                            <label>Doctor Fees</label>
                                            <input type="text" class="form-control" name="docfees" required placeholder="Type something" />
                                        </div>

                                        <div class="form-group">
                                            <label>Contact No.</label>
                                            <input type="text" name="contact" class="form-control" required placeholder="Type something" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required placeholder="Type something" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div>
                                                <input type="password" name="pass" id="pass2" class="form-control" required placeholder="Password" />
                                            </div>
                                            <div class="mt-2">
                                                <input type="password" name="repass" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                            </div>
                                        </div>


                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                    Submit
                                                </button>
                                                <button type="reset" name="cancel" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->


                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <?php include "partials/footer.php" ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Parsley js -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

</body>

</html>