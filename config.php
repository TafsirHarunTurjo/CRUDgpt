<?php
// Database configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "userdata");

function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
}
?>
