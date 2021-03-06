<?php
session_start();
$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_username'])){
    header('Location: home-page.php?err=2');
}

    require_once('database-config.php');
    $q = 'UPDATE members SET player1_points=:player1_points,player2_points=:player2_points WHERE id=:id';
    $query = $dbh->prepare($q);
    $query->execute(array(
        ':id' => $_POST['id'],
        ':player1_points' => $_POST['player1_points'],
        ':player2_points' => $_POST['player2_points'],
    ));
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/chess/knight.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>IPFW Chess Club - Schedule</title>

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
            <a class="navbar-brand" href="#">IPFW Chess Club - <?php echo $_SESSION['sess_username']; ?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="home-page.php">Home</a></li>
                <li class="active"><a href="schedule.php">Schedule</a></li>
                <li><a href="rankings.php">Rankings</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="user-management.php">User Management</a></li>
                        <li><a href="logout.php">Log Out</a></li>
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

            <?php 
            require('database-config.php');
            $q = 'SELECT game,division,week,player1,player1_points,player2,player2_points FROM schedule 
                    ORDER BY division ASC, week ASC';
            $query = $dbh->prepare($q);
            $query->execute();
            ?>
            <!-- here you can add your content -->

                
            <div class="rTable">
                <div class="rTableRow">
                    <div class="rTableHead"><strong>Division</strong></div>
                    <div class="rTableHead"><strong>Week</strong></div>
                    <div class="rTableHead"><strong>Player 1</strong></div>
                    <div class="rTableHead"><strong>Player 1 Points</strong></div>
                    <div class="rTableHead"><strong>Player 2</strong></div>
                    <div class="rTableHead"><strong>Player 2 Points</strong></div>
                </div>
                <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class=\"rTableRow\">";
                    echo "  <div class=\"rTableCell\">{$row['division']}</div>";
                    echo "  <div class=\"rTableCell\">{$row['week']}</div>";
                    echo "  <div class=\"rTableCell\">{$row['player1']}</div>";
                    #echo "  <div class=\"rTableCell\">{$row['player1_points']}</div>";
                    if($_SESSION['sess_userrole'] < 3 ){ ?>
                        <div class="rTableCell">
                            <form method="POST" action="schedule.php">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>">
                                <input type="float" name="player1_points" class="form-control" value="<?php echo number_format($row['player1_points'],1);?>">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    <?php } else {
                        echo "  <div class=\"rTableCell\">{$row['player1_points']}</div>";
                    }
                    echo "  <div class=\"rTableCell\">{$row['player2']}</div>";
                    #echo "  <div class=\"rTableCell\">{$row['player2_points']}</div>";
                    if($_SESSION['sess_userrole'] < 3 ){ ?>
                        <div class="rTableCell">
                            <form method="POST" action="schedule.php">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>">
                                <input type="float" name="player2_points" class="form-control" value="<?php echo number_format($row['player2_points'],1);?>">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    <?php } else {
                        echo "  <div class=\"rTableCell\">{$row['player2_points']}</div>";
                    }
                    echo "</div>";
                }
                ?>

                <!-- add game section -->
                <?php if($_SESSION['sess_userrole'] < 3){ ?>
                    <div class="rTable">
                        <div class="rTableRow">
                            <form method="POST" action="add-game.php">
                                <input type="number" name="input_division" class="form-control" placeholder="Division...">
                                <input type="number" name="input_week" class="form-control" placeholder="Week...">
                                <input type="text" name="input_player1" class="form-control" placeholder="Player 1...">
                                <input type="text" name="input_player2" class="form-control" placeholder="Player 2...">
                                <button class="btn btn-primary" type="submit">Add Game</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>

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