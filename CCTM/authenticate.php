<?php

require('database-config.php');

session_start();

$username = "";
$password = "";
 
if(isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$q = 'SELECT * FROM members WHERE email=:username AND password=:password';

$query = $dbh->prepare($q);

$query->execute(array(':username' => $username, ':password' => $password));


if($query->rowCount() == 0) {
    header('Location: home-page.php?err=1');
} else {
    $row = $query->fetch(PDO::FETCH_ASSOC);

    session_regenerate_id();
    $_SESSION['sess_user_id'] = $row['id'];
    $_SESSION['sess_username'] = $row['email'];
    $_SESSION['sess_userrole'] = $row['type'];

    echo $_SESSION['sess_userrole'];
    session_write_close();
    
    header('Location: schedule.php');
}

?>