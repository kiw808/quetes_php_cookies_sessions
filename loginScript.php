<?php
require ('./inc/data/users.php');

$errorMessage = '';

// Register new user
if (isset($_POST['submit-reg'])) {
    if (!empty($_POST['registername'])) {
        array_push($users, $_POST['registername']);
        session_start();
        $_SESSION['login'] = $_POST['registername'];
        $_SESSION['cart'] = [];
        header('location: ./index.php');
        exit();
    }
    else {
        $errorMessage = 'Error : no username input ...';
    }
    echo $errorMessage;
}

// Login with username
if (isset($_POST['submit-log'])) {
    if (!empty($_POST['loginname'])) {
        if (!in_array($_POST['loginname'], $users)) {
            $errorMessage = 'Error : incorrect username ...';
        }
        else {
            session_start();
            $_SESSION['login'] = $_POST['loginname'];
            $_SESSION['cart'] = [];
            header('location: ./index.php');
            exit();
        }
    }
    else {
        $errorMessage = 'Error : no username input ...';
    }
    echo $errorMessage;
}
