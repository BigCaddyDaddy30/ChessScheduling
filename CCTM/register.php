<?php

require_once('database-config.php');

// session_start();
// registration fails if any of the fields are empty
// also fails if password does not match confirm_pass
// also fails if email already exists inside the database

if (isset($_POST['first'])
    && isset($_POST['last'])
    && isset($_POST['phone'])
    && isset($_POST['username'])
    && isset($_POST['password']) 
    && isset($_POST['confirm_pass']) 
    && $_POST['password'] == $_POST['confirm_pass']) {
    
    // check if user with email already exists
    $q = 'SELECT email FROM members WHERE email=:email';
    $query = $dbh->prepare($q);
    $query->execute(array(':email' => $_POST['username']));

    if ($query->rowCount() > 0) {
        header('Location: home-page.php?err=4');
        exit();
    } else {
        $q = 'INSERT INTO members (id,first,last,phone,email,password,division,score,type) 
        VALUES (NULL,:first,:last,:phone,:email,:password,NULL,NULL,3)';

        $query = $dbh->prepare($q);

        $query->execute(array(
            ':first' => $_POST['first'],
            ':last' => $_POST['last'],
            ':phone' => $_POST['phone'],
            ':email' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        header('Location: home-page.php');
    }
} else {
    header('Location: home-page.php?err=3');
}

?>