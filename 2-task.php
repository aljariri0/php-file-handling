<?php
$file = fopen("fruits.txt", "r");
echo "<ul>";
while (($line = fgets($file)) !== false) {
    echo "<li>" . htmlspecialchars($line) . "</li>";
}
echo "</ul>";
fclose($file);
?>
