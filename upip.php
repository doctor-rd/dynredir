<?php
file_put_contents("myip.txt", $_SERVER['REQUEST_TIME']."    ".$_SERVER['REMOTE_ADDR']."\n")
?>
