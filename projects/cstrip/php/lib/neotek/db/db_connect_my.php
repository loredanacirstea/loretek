<?php

//print_r(file_list_subdirs("/Volumes/SAMSUNG/mine/"));  // /tif-segmented


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cstrip';

$dbh = new PDO( 
    'mysql:host='.$hostname.';dbname='.$dbname, 
    $username, 
    $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );




?>