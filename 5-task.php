<form method="POST" enctype="multipart/form-data">
    <input type="file" name="profile_pic" required>
    <button type="submit">Upload</button>
</form>

<?php
if (isset($_FILES['profile_pic'])) {
    $file = $_FILES['profile_pic'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png'];

    if (!is_dir("uploads/")) {
        mkdir("uploads/");
    }

    if (in_array($ext, $allowed) && $file['size'] <= 2097152) {
        move_uploaded_file($file['tmp_name'], "uploads/" . basename($file['name']));
        echo "Upload successful.";
    } else {
        echo "Upload failed: File must be a JPG/PNG under 2MB.";
    }
}
?>
