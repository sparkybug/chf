<?php 
    session_start();

    include_once 'dbconnect.php';

    if(!isset($_SESSION['userSession'])) {
        header("Location: ../index.php");
    } 

    $usersession = $_SESSION['userSession'];
    $res = mysqli_query($con, "SELECT * FROM userTable WHERE username = '$usersession'");
    $userRow = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>WELCOME <?php echo $userRow['fname'];?> <?php echo $userRow['lname'];?></title>
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/material.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/css/default/style.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/default/blocks.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
		<!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<!-- <link href="assets/css/material.css" rel="stylesheet"> -->
    </head>
	<body>
		
    <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="userDashboard.php">WELCOME <?php echo $userRow['fname'];?> <?php echo $userRow['lname'];?></a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="donation.php" style="color: white; font-size: 2em; text-align: center;border: 1px solid black;margin-top:10px;">DONATE</a>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['fname']; ?> <?php echo $userRow['lname']; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="user.php"><i class="fa fa-fw fa-user"></i> Home</a>
                    </li>
                
                    <li class="divider"></li>

                    <li>
                        <a href="user_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="user_logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="userDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
        
                <li>
                    <a href="referal.php"><i class="fa fa-fw fa-edit"></i> Referral Report</a>
                </li>

                <li>
                    <a href="event_list.php"><i class="fa fa-fw fa-edit"></i> Event List</a>
                </li>

                <li>
                    <a href="event_history.php"><i class="fa fa-fw fa-edit"></i> Event History</a>
                </li>

                <li>
                    <a href="account_history.php"><i class="fa fa-fw fa-edit"></i> Account History</a>
                </li>
            </ul>
        </div> -->
        <!-- /.navbar-collapse -->
    </nav>
<!-- navigation end -->

    <div id="page-wrapper">
	
		<div class="container-fluid">
			<section style="padding-bottom: 50px; padding-top: 150px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
							<div class="user-wrapper">
								<img src="assets/img/patient.png" class="img-responsive" />
								<div class="description">
									<h4><?php echo $userRow['fname']; ?> <?php echo $userRow['lname']; ?></h4>
									<h5> <strong> Student </strong></h5>
									<!-- <p>
										Pellentesque elementum dapibus convallis.
									</p> -->
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								<h3> <?php echo $userRow['fname']; ?> <?php echo $userRow['lname']; ?> </h3>
								<hr />
								
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<table class="table table-user-information" align="center">
											<tbody>	
												<tr>
													<td>First Name</td>
													<td><?php echo $userRow['fname']; ?></td>
												</tr>
												<tr>
													<td>Last Name</td>
													<td><?php echo $userRow['lname']; ?></td>
												</tr>
												<tr>
													<td>Username</td>
													<td><?php echo $userRow['username']; ?></td>
												</tr>
												<tr>
													<td>Email</td>
													<td><?php echo $userRow['email']; ?>
													</td>
												</tr>
												<tr>
													<td>Phone</td>
													<td><?php echo $userRow['phone']; ?>
													</td>
												</tr>
												<tr>
													<td>Referral Link</td>
													<td><?php echo $userRow['referlink']; ?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<div class="col-md-4">
						
						<!-- Large modal -->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
									</div>
									<div class="modal-body">
										<!-- form start -->
										<form action="<?php $_PHP_SELF ?>" method="post" >
											<table class="table table-user-information">
												<tbody>
												
													<tr>
														<td>First Name:</td>
														<td><input type="text" class="form-control" name="fname" value="<?php echo $userRow['fname']; ?>"  /></td>
													</tr>
													<tr>
														<td>Last Name</td>
														<td><input type="text" class="form-control" name="lname" value="<?php echo $userRow['lname']; ?>"  /></td>
													</tr>
													
													<!-- radio button -->
													<!--<tr>-->
													<!--	<td>Maritial Status:</td>-->
													<!--	<td>-->
													<!--		<div class="radio">-->
													<!--			<label><input type="radio" name="patientMaritialStatus" value="single" <?php echo $single; ?>>Single</label>-->
													<!--		</div>-->
													<!--		<div class="radio">-->
													<!--			<label><input type="radio" name="patientMaritialStatus" value="married" <?php echo $married; ?>>Married</label>-->
													<!--		</div>-->
													<!--		<div class="radio">-->
													<!--			<label><input type="radio" name="patientMaritialStatus" value="separated" <?php echo $separated; ?>>Separated</label>-->
													<!--		</div>-->
													<!--		<div class="radio">-->
													<!--			<label><input type="radio" name="patientMaritialStatus" value="divorced" <?php echo $divorced; ?>>Divorced</label>-->
													<!--		</div>-->
													<!--		<div class="radio">-->
													<!--			<label><input type="radio" name="patientMaritialStatus" value="widowed" <?php echo $widowed; ?>>Widowed</label>-->
													<!--		</div>-->
													<!--	</td>-->
													<!--</tr>-->
													<!-- radio button end -->
													<tr>
														<td>DOB</td>
														<!-- <td><input type="text" class="form-control" name="patientDOB" value="<?php echo $userRow['patientDOB']; ?>"  /></td> -->
														<td>
															<div class="form-group ">
																
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar">
																		</i>
																	</div>
																	<input class="form-control" id="patientDOB" name="patientDOB" placeholder="MM/DD/YYYY" type="text" value="<?php echo $userRow['patientDOB']; ?>"/>
																</div>
															</div>
														</td>
														
													</tr>
													<!-- radio button -->
													<tr>
														<td>Gender</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													
													<tr>
														<td>Phone number</td>
														<td><input type="text" class="form-control" name="phone" value="<?php echo $userRow['phone']; ?>"  /></td>
													</tr>
													<tr>
														<td>Email</td>
														<td><input type="text" class="form-control" name="email" value="<?php echo $userRow['email']; ?>"  /></td>
													</tr>
													<tr>
														<td>Address</td>
														<td><textarea class="form-control" name="address"  ><?php echo $userRow['address']; ?></textarea></td>
													</tr>
													<tr>
														<td>
															<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
														</tr>
													</tbody>
													
												</table>
												
												
												
											</form>
											<!-- form end -->
										</div>
										
									</div>
								</div>
							</div>
							<br /><br/>
						</div>
						
					</div>
					<!-- ROW END -->
				</section>
				<!-- SECTION END -->
			</div>
    </div>
			<!-- CONATINER END -->
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script type="text/javascript">
														$(function () {
														$('#patientDOB').datetimepicker();
														});
														</script>
		</body>
	</html>