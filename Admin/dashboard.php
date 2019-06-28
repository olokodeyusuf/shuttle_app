


<?php include "connect.php";
session_start();
ob_start(); 

include "header.php"; ?>

<?php include "sidebar.php"; ?>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <!-- <i class="icon-layers float-right text-muted"></i> -->
                                    <h6 class="text-muted text-uppercase m-b-20">Busses</h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?php 
                                                    $id=0;
                                                    $sql1= $con-> query("SELECT * FROM bus ORDER BY bus_id DESC");
                                                    if ($sql1) {
                                                        while ($row1 = $sql1->fetch_assoc()) {
                                                            $id++;

                                                        }}
                                                         echo $id;
                                                        ?></h2>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <!-- <i class="icon-paypal float-right text-muted"></i> -->
                                    <h6 class="text-muted text-uppercase m-b-20">Bookings</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup"><?php 
                                                    $idf=0;
                                                    $sql= $con-> query("SELECT * FROM bookings ORDER BY id DESC");
                                                    if ($sql) {
                                                        while ($row = $sql->fetch_assoc()) {
                                                            $idf++;

                                                        }}
                                                         echo $idf;
                                                        ?></span></h2>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <!-- <i class="icon-chart float-right text-muted"></i> -->
                                    <h6 class="text-muted text-uppercase m-b-20">Parks</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup"><?php 
                                                    $iddd=0;
                                                    $sql3= $con-> query("SELECT * FROM parks ORDER BY park_id DESC");
                                                    if ($sql3) {
                                                        while ($row3 = $sql3->fetch_assoc()) {
                                                            $iddd++;

                                                        }}
                                                         echo $iddd;
                                                        ?></span></h2>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <!-- <i class="icon-rocket float-right text-muted"></i> -->
                                    <h6 class="text-muted text-uppercase m-b-20">Bustops</h6>
                                    <h2 class="m-b-20" data-plugin="counterup"><?php 
                                                    $idd=0;
                                                    $sql4= $con-> query("SELECT * FROM bus_stop ORDER BY bus_stop_id DESC");
                                                    if ($sql4) {
                                                        while ($row4 = $sql4->fetch_assoc()) {
                                                            $idd++;

                                                        }}
                                                         echo $idd;
                                                        ?></h2>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                

                <?php include "footer.php"; ?>