<?php
header('Location: http://'.explode("    ", file_get_contents("myip.txt"))[1], true, 302);
?>
