<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/chess/Knight.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>IPFW Chess Club - Welcome</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body>

<!-- Navbar will come here -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">IPFW Chess Club</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home-page.php">Home</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="rankings.php">Rankings</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="user-management.php">User Management</a></li>
                        <li><a href="home-page.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->

<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main-raised" style="background-color: white">
		<div class="container" style="padding-top: 50px">

			<!-- here you can add your content -->

			<h1 align="center">Welcome to IPFW Chess Scheduling</h1>
            <h2 align="center"><img src="assets/img/chess/knight.jpg"</img></h2>
			<form class="form" method="" action="">
				<table align="left"><tr>
					<td class="signinTD">
						<div class="header header-primary text-center">
                            <h3><b>New User</b></h3>
						</div>
						<div class="content">

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
								<input type="text" class="form-control" placeholder="First Name...">
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
								<input type="text" class="form-control" placeholder="Last Name...">
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
								<input type="email" class="form-control" placeholder="Email...">
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
								<input type="number" class="form-control" minlength="10" maxlength="10" placeholder="Phone Number...">
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
								<input type="password" placeholder="Password..." class="form-control" />
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
								<input type="password" placeholder="Re-Enter Password..." class="form-control" />
							</div>

							<!-- If you want to add a checkbox to this form, uncomment this code

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                    Subscribe to newsletter
                                </label>
                            </div> -->
						</div>
						<div class="footer text-center">
							<a href="#" class="btn btn-primary btn-lg">Register</a>
						</div>
					</td>
                    </tr></table>

                <table align="center"><tr>
                <td class="signinTD">
						<div class="header header-primary text-center">
                            <h3><b>Existing User</b></h3>
						</div>
						<div class="content">

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
								<input type="email" class="form-control" placeholder="Email...">
							</div>

							<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
								<input type="password" placeholder="Password..." class="form-control" />
							</div>

							<!-- If you want to add a checkbox to this form, uncomment this code

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                    Subscribe to newsletter
                                </label>
                            </div> -->
						</div>
						<div class="footer text-center">
                            <a href="#" class="btn btn-simple btn-sm">Forgot Password</a>
							<a href="#" class="btn btn-primary btn-lg">Login</a>
						</div>
					</td>
				</tr></table>
			</form>
		</div>
	</div>
</div>


</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
