<form method="POST">
    <textarea name="entry" required></textarea>
    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['entry'])) {
    $entry = date("Y-m-d H:i:s") . " - " . $_POST['entry'] . PHP_EOL;
    file_put_contents("guestbook.txt", $entry, FILE_APPEND);
}
?>
