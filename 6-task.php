<?php
if (($handle = fopen("employees.csv", "r")) !== false) {
    echo "<table border='1'>";
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        echo "<tr>";
        foreach ($data as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($handle);
}
?>
