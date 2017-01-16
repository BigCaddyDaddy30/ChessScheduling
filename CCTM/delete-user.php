<?php
session_start();
if (!empty($_POST['id']) && $_SESSION['sess_userrole'] == 1) {
    require_once('database-config.php');
    $q = 'DELETE FROM members WHERE id=:id';
    $query = $dbh->prepare($q);
    $query->execute(array(
        ':id' => $_POST['id']
    ));
}
header('Location: user-management.php');
?>