<?php
if (!is_dir("archives/")) {
    mkdir("archives/");
}

foreach (glob("*.log") as $file) {
    copy($file, "archives/" . basename($file));
}
?>
