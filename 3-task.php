<?php
if (file_exists("config.txt")) {
    rename("config.txt", "config.bak");
} else {
    die("Error: config.txt does not exist.");
}
?>
