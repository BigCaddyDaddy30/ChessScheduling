<?php

if ($_SESSION['sess_userrole'] < 3) {
    require_once('database-config.php');
    $q = 'INSERT INTO schedule (game,division,week,player1,player1_points,player2,player2_points)
    VALUES (NULL,:division,:week,:player1,NULL,:player2,NULL)';
    $query = $dbh->prepare($q);
    $query->execute(array(
            ':division' => $_POST['input_division'],
            ':week' => $_POST['input_week'],
            ':player1' => $_POST['input_player1'],
            ':player2' => $_POST['input_player2'],
        ));
}
header('Location: schedule.php');
?>