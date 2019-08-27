<?php
define(DIR, 'gallery/');
/**
 *
 */
function viewForm()
{
    $html = '<div style="margin-top: 20px; margin-left: 20px"><form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="UpLoad">
</form></div>';
    echo $html;
}

/**
 * @param $dir
 */
function uploadFile($dir)
{
    $uploadFile = $_FILES[file];
    $fileName = $uploadFile['name'];
    $fileTmpName = $uploadFile['tmp_name'];
    move_uploaded_file($fileTmpName, $dir . $fileName);

}

/**
 * @param $dir
 */
function showImg($dir)
{
    $dirFile = scandir($dir);
    foreach ($dirFile as $item => $value) {
        if ($value === '.' || $value === '..') {
            unset($dirFile[$item]);
        }
    }
    $count = count($dirFile) / 3;
    $html = "<div style='margin-left: 20px'><table><tbody>";
    for ($i = 0; $i < ceil($count); $i++) {
        $html .= "<tr>";
        for ($j = 0; $j < 3; $j++) {
            $html .= "<td>";
            $value = array_shift($dirFile);
            if ($value != '') {
                $html .= "<img src='$dir$value' height='150px'>";
            }
            $html .= "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table></div>";
if($_FILES[file]!=''){
    header('Location: index.php');
}
    echo $html;
}