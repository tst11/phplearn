<?php

    $firstName = $_REQUEST['firstname'];
    $lastName = $_REQUEST['lastname'];
    // $name = $_REQUEST['name'];
    if ($firstName == 'Kevin' and $lastName == 'Yank') {
        echo 'Welcome, oh glorious leader!';
    } else {
        echo 'Welcome to our website, ' . 
        htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
        htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
    }
    // echo 'Welcome to our website, ' .
    // htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
    // htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';

?>