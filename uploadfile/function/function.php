<?php
function viewForm(){
    $html='
<form enctype="multipart/form-data" action="index.php" method="post">
<input type="file" name="file">
<input type="submit" value="upLOad">
</form>';
    echo $html;
}
function uploadFile() {
    $patch_to_upload = 'uploadimg/';
    $uploadfile=$_FILES[file];
    $filename=$patch_to_upload.$uploadfile['name'];
    move_uploaded_file($uploadfile['tmp_name'],$filename);
}
