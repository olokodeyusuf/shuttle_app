<?php 
include "connect.php";
session_start();
ob_start();

include "header.php";
include "sidebar.php";
 ?>
 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
<div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-striped table-bordered">
                                                <thead class="thead-default">
                                                <tr>
                                                    <th>S/N</th>
                                                    <th data-priority="1">Name</th>
                                                    <th data-priority="3">From</th>
                                                    <th data-priority="1">To</th>
                                                    <th data-priority="3">Date</th>
                                                    <th data-priority="3">Bus</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                	<?php 
                                                	$id=0;
                                                	$sql= $con-> query("SELECT * FROM bookings ORDER BY id DESC");
                                                	if ($sql) {
                                                	 	while ($row = $sql->fetch_assoc()) {
                                                	 		$id++;
                                                	 	?>
                                                <tr>
                                                    <th><?php echo $id; ?></th>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['start_point']; ?></td>
                                                    <td><?php echo $row['end_point']; ?></td>
                                                    <td><?php echo $row['booked_date']; ?></td>
                                                    <td><?php echo $row['bus_id']; ?></td>
                                                    <td><a href="del-booking.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                               <?php }} ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



<?php include "footer.php"; ?>