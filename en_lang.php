<?php

$directory = ".";
echo implode("<br>",scandir($directory));
echo file_get_contents("index.php");

?>
