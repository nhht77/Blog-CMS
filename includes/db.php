<?php
    
    $db['db_host'] = 'localhost';
    $db['db_user_name'] = 'root';
    $db['db_user_password'] = 'root';
    $db['db_name'] = 'cms';
    
    foreach($db as $key=>$value){define(strtoupper($key), $value);}

//    SET UPPERCASE THE NAME OF DB ARRAY
    $conn = new mysqli($db['db_host'],$db['db_user_name'],$db['db_user_password']);
    $conn->select_db($db['db_name']);

    if($conn){}



?>