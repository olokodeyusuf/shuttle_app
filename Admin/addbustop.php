<?php include "connect.php";
session_start();
ob_start(); 

if (isset($_POST['addbs'])) {
	$bus_stop_name = $_POST['bus_stop_name'];

	$sql = $con-> query("INSERT INTO bus_stop (bus_stop_name) VALUES('$bus_stop_name') ");
	if ($sql) {
		echo "Bustop Added Successfully";
		header("Location: viewbustop.php");
	}
else{
	echo "Error Occured";
}
}

include "header.php"; ?>

<?php include "sidebar.php"; ?>
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Add Bustop/h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Bustop/a></li>
                                        <li class="breadcrumb-item active">Add Bustop</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>



<div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <!-- <h4 class="header-title m-t-0 m-b-30">Input Types</h4> -->

                                    <div class="row">
                                    	<div class="col-lg-3 col-sm-3 col-xs-3 col-md-3 col-xl-3"></div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 col-xl-6">
                                            <form method="post">
                                                <fieldset class="form-group">
                                                    <label for="exampleInputEmail1">Bustop Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter BustopName" name="bus_stop_name">
                                                   
                                                </fieldset

                                                <div class="text-center">
                                                <input type="submit" value=" ADD" class="btn btn-info btn-lg" name="addbs">
                                                </div>

                                            </form>
                                        </div><!-- end col -->

                                    	<div class="col-lg-3 col-sm-3 col-xs-3 col-md-3 col-xl-3"></div>

                                    </div><!-- end row -->
                                </div>
                            </div><!-- end col -->
                        </div>


<?php include "footer.php"; ?>

