<?php

    $isXmlHttpRequest = array_key_exists('X_REQUESTED_WITH', $_SERVER) &&
        $_SERVER['X_REQUESTED_WITH'] == 'XMLHttpRequest';
 
    if ($isXmlHttpRequest) {
        header('Content-type: application/json');
        echo json_encode(1);
    }
 else {
header('Content-type: application/json');
        echo json_encode(0);        
}
    //echo $_GET['login'];
    //echo $_GET['password'];
?>
