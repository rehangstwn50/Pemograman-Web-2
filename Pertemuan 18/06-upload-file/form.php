<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><title>Form Upload</title></head>
<body>
<h3>Upload File</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="berkas" required>
    <button type="submit">Upload</button>
</form>
<p>Batas upload_max_filesize: <b><?php echo ini_get('upload_max_filesize'); ?></b>,
   post_max_size: <b><?php echo ini_get('post_max_size'); ?></b></p>
</body>
</html>
