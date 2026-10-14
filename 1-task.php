<?php
$file = fopen("welcome.txt", "w");
fwrite($file, "Welcome to PHP File Handling!");
fclose($file);
?>
