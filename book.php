	<?php 
	 include_once 'connect.php';
	 session_start();

	 if (isset($_POST['submit'])) {
		$bus = $_POST['bus'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$from = $_POST['from'];
		$to = $_POST['to'];

		$booking_date = date('d-m-y');

		$sql = $conn->query("INSERT INTO bookings(bus_id,name,booking_date,booked_date,start_point,end_point) values('$bus','$name','$booking_date','$date','$from','$to') ");

		if ($sql) {
			$_SESSION['message'] = "You have successfully booked the bus ";
			$_SESSION['bus'] = $bus;
			$_SESSION['name'] = $name;
			$_SESSION['date'] = $date;
			$_SESSION['to'] = $to;
			$_SESSION['from'] = $from;

			header('location: booked.php');
		}
		
		else{
			$error = "Failed";
		}
	 }

	?>

	<!DOCTYPE HTML>
	<html>
	<head>
	<title>FPI SHUTTLE BUS TRANSPORT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			 new WOW().init();
		</script>
	<!--//end-animate-->
	</head>
	<body>
	<!-- top-header -->

	<?php include_once 'header.php'; ?>
	<!--- /top-header ---->
	<!--- header ---->
	</div>
	<!--- /header ---->
	<!--- footer-btm ----><!--- /footer-btm ---->
	<!--- banner ---->
	<div class="banner-1">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">FPI SHUTTLE BUS TRANSPORT</h1>
		</div>
	</div>
	<div class="container">
		<div class="col-md-5 bann-info1">
			<i class="fa fa-ticket"></i>
			<h3>EASY TICKET BOOKING </h3> 
		</div>
		<div class="col-md-7 bann-info">
			<h2>Online Tickets Booking </h2>
			<?php if (isset($message)): ?>
				<p class="alert alert-success"><?php echo $message; unset($message); ?></p>
			<?php endif ?>

			<?php if (isset($error)): ?>
				<p class="alert alert-danger"><?php echo $error; unset($error); ?></p>
			<?php endif ?>
			<div class="ban-top">
			<form method="post">
				<div class="bnr-left" style="width: 103%">
					<label class="inputLabel">Name</label>
					<input class="city" type="text" name="name"  required=>
				</div>
					<div class="clearfix"></div>
				<div class="bnr-left">
					<label class="inputLabel">From</label>
					<select class="city" name="from" required>
						<?php 
							$park = $conn->query("SELECT * from parks");
							if ($park->num_rows > 0) {
								while ($row = $park->fetch_assoc()) {
						?>
						<option><?php echo $row['park_name'] ?></option>
					<?php }} ?>
					</select>
				</div>
				<div class="bnr-left">
					<label class="city">To</label><br>
					<select class="city" name="to" required>
						<?php 
							$bus_stop = $conn->query("SELECT * from bus_stop");
							if ($bus_stop->num_rows > 0) {
								while ($row = $bus_stop->fetch_assoc()) {
						?>
						<option><?php echo $row['bus_stop_name'] ?></option>
					<?php }} ?>
					</select>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="ban-bottom">
				<div class="bnr-right">
					<label class="inputLabel">Date</label>
					<input class="date" type="date" name="date" required=>
				</div><div class="bnr-left">
					<label class="inputLabel">Type of bus choosen</label>
					<select class="city" name="bus" required>
						<?php 
							$bus = $conn->query("SELECT * from bus");
							if ($bus->num_rows > 0) {
								while ($row = $bus->fetch_assoc()) {
						?>
						<option><?php echo $row['bus_name'] ?></option>
						
					<?php }} ?>
					

					</select>
				</div>
					<div class="clearfix"></div>
					<!---start-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
						<script>
							$(function() {
							$( "#datepicker,#datepicker1" ).datepicker();
							});
						</script>
				<!---/End-date-piker---->
			</div> 
			<br>
			<br>
			<br>
			
			<h1>MAKE PAYMENT</h1 color="pink">
			<div class="bnr-left" style="width: 103%">
					<label class="inputLabel">Input your accont details </label>
					<input class="city" type="text" name="ACCOUNT" PLACEHOLDER="Enter card number">
				</div>
				<br>
				<br>
				<br>
				<br>
			<div class="sear">
				<button class="seabtn" name="submit">Book ticket</button>
			</div>
		</form>
		</div>
		<div class="clearfix"></div>
	</div>
<!--- /banner ---->
<!--- travel ---->
<div class="travel">
	<div class="container">
		<h3>FPI SHUTTLE PARKS </h3>
		<?php 
			$park = $conn->query("SELECT * from parks ");
			if ($park->num_rows > 0) {
				while ($row = $park->fetch_assoc()) {
		?>
		<p><?php echo $row['park_name'] ?></p>
	<?php }} ?>
			<div class="tra-top">
				<h4>FPI SHUTTLE PARK EAST CAMPUS : Bus routes and timings</h4>
					<ul class="rout">
						<li class="rou">Route</li>
						<li class="ser">Bus Services <span class="sen"></span></li>
						<li class="fir">DEPATURE</span></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="las">ARRIVAL</span></li>
						
						<div class="clearfix"></div>
					</ul>
					<!--- rou-secnd ----><!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>complex </p>
							<h6><a href="#">complex park</a></h6>
						</li>
						<li class="ser">
							<p>big Buses</p>
						</li>
						<li class="fir">
							<p>08:00 AM</p>
						</li>
						<li class="las">
							<p>10:00 AM</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>AUD</p>
							<h6><a href="#">New market</a></h6>
						</li>
						<li class="ser">
							<p>The white bus</p>
						</li>
						<li class="fir">
							<p>08:00 AM</p>
						</li>
						<li class="las">
							<p>10:00 AM</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>"B"Block</p>
							<h6><a href="#">"B" classes</a></h6>
						</li>
						<li class="ser">
							<p>The coaster buses</p>
						</li>
						<li class="fir">
							<p>08:00 AM</p>
						</li>
						<li class="las">
							<p>10:00 AM</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>off campus</p>
							<h6><a href="#">Deuteronomy junction</a></h6>
						</li>
						<li class="ser">
							<p>The red Bus</p>
						</li>
						<li class="fir">
							<p>06:00 PM</p>
						</li>
						<li class="las">
							<p>NOT SPECIFIED</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>SCHOOL TWO </p>
							<h6><a href="#">Bus stop</a></h6>
						</li>
						<li class="ser">
							<p> The red bus</p>
						</li>
						<li class="fir">
							<p>06:00 PM</p>
						</li>
						<li class="las">
							<p>NOT SPECIFIED</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>ORITA</p>
							<h6><a href="#">JUNCTION</a></h6>
						</li>
						<li class="ser">
							<p>The Red Bus</p>
						</li>
						<li class="fir">
							<p>06:00 PM</p>
						</li>
						<li class="las">
							<p>NOT SPECIFIED</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>LIBRARY</p>
							<h6><a href="#">MAJIYAGBE BASE 1</a></h6>
						</li>
						<li class="ser">
							<p>BLUE BUS</p>
						</li>
						<li class="fir">
							<p>06:00 PM</p>
						</li>
						<li class="las">
							<p>NOT SPECIFIED</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<li class="rou">
							<p>EXPRESS</p>
							<h6><a href="#">AEROPLANE HOUSE</a></h6>
						</li>
						<li class="ser">
							<p>BLUE BUS</p>
						</li>
						<li class="fir">
							<p>06:00 PM</p>
						</li>
						<li class="las">
							<p>NOT SPECIFIED</p>
						</li>
						<li class="dat">
							<a href="bus.html" class="det">View Buses</a>
						</li>
					
	</div>
</div>
<!--- /travel ---->
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="bus.html">AUD/NEW MARKET CHATER</a></li>
					<li><a href="bus.html">"B" BLOCK CHATER</a></li>
					<li><a href="bus.html"> COMPLEX CHATER
					</a></li>
					<li><a href="bus.html">COMPLEX PARK CHATER</a></li>
					<br>
					<br>
					<br>
					<h3>ON CAMPUS ROUTE </h3>
					<li><a href="bus.html"> AUD/NEW MARKET</a></li>
					<li><a href="bus.html">"B" BLOCK</a></li>
					<li><a href="bus.html"> COMPLEX</a></li>
					<h3> OFF CAMPUS ROUTE</h3>
					<li><a href="bus.html">DEUTERONOMY</a></li>
					
					<li><a href="bus.html"> SCHOOL TWO BUS STOP</a></li>
					<li><a href="bus.html">ORITA JUNCTION</a></li>
					<li><a href="bus.html">LIBRARY JUNCTION</a></li>
					<li><a href="bus.html">EXRESS</a></li>
					
					
					<li><a href="bus.html"></a></li>
					<li><a href="bus.html"></a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="travels.html">COMPLEX</a></li>
					<li><a href="travels.html">A.U.D / MARKET</a></li>
					<li><a href="travels.html">"B" BLOCK</a></li>
					<li><a href="travels.html">COMPLEX PARK</a></li>
					<li><a href="travels.html"> ORITA </a></li>
					<li><a href="travels.html"> LIBRARY</a></li>
					
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
					<ul class="rou-secnd animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
						<?php 
							$trip = $conn->query("SELECT * from trips");
							if ($trip->num_rows > 0) {
								while ($row = $trip->fetch_assoc()) {
						?>
					<?php }} ?>
						
						<li class="rou">
						<p><?php echo $row['departure_place'] ?></p>
						</li>
						<li class="ser">
							<p><?php echo $row['bus_id'] ?></p>
						</li>
						<li class="fir">
							<p><?php echo $row['start_time'] ?></p>
						</li>
						<li class="las">
							<p><?php echo $row['return_time'] ?></p>
						</li>
						<div class="clearfix"></div>
					</ul>
					<!--- /rou-secnd ---->
					<!--- rou-secnd ---->
					
<!--- /travel ---->
<!--- footer-top ---->
<!-- <div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="bus.html">AUD/NEW MARKET CHATER</a></li>
					<li><a href="bus.html">"B" BLOCK CHATER</a></li>
					<li><a href="bus.html"> COMPLEX CHATER
					</a></li>
					<li><a href="bus.html">COMPLEX PARK CHATER</a></li>
					<br>
					<br>
					<br>
					<h3>ON CAMPUS ROUTE </h3>
					<li><a href="bus.html"> AUD/NEW MARKET</a></li>
					<li><a href="bus.html">"B" BLOCK</a></li>
					<li><a href="bus.html"> COMPLEX</a></li>
					<h3> OFF CAMPUS ROUTE</h3>
					<li><a href="bus.html">DEUTERONOMY</a></li>
					
					<li><a href="bus.html"> SCHOOL TWO BUS STOP</a></li>
					<li><a href="bus.html">ORITA JUNCTION</a></li>
					<li><a href="bus.html">LIBRARY JUNCTION</a></li>
					<li><a href="bus.html">EXRESS</a></li>
					
					
					<li><a href="bus.html"></a></li>
					<li><a href="bus.html"></a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="travels.html">COMPLEX</a></li>
					<li><a href="travels.html">A.U.D / MARKET</a></li>
					<li><a href="travels.html">"B" BLOCK</a></li>
					<li><a href="travels.html">COMPLEX PARK</a></li>
					<li><a href="travels.html"> ORITA </a></li>
					<li><a href="travels.html"> LIBRARY</a></li>
					
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
 --><!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
											</div>
											<div class="login-right">
												<form>
													<h3>Create your account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		
	
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
													<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
												</ul>
											</div>
											<div class="login-right">
												<form>
													<h3>Create your account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html"></a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												<li class="na-me">
													<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
												</li>
												<li class="na-me">
													<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
												</li>
												<li class="na-me">
													<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
																												
													</select>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
																												
													</select>
												</li>
												<li class="descrip">
													<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //write us -->
</body>
</html>
