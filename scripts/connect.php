<?php 
    $bd = mysqli_connect('localhost', 'root', '', 'test1');
    echo $_POST['selphpIN'] . ' ';
    echo $_POST['selphpOUT'] . ' ';
    echo $_POST['datein'] . ' ';
    echo $_POST['dateout'] . ' ';
    error_reporting(E_ALL & ~E_NOTICE);
    error_reporting(0);
?>