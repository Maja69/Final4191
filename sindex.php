<?php

session_start();
 

$_SESSION["id"] = "4191";

pre_r($_SESSION);

function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>
<a href="sindex2.php">Go to sindex2.php</a>