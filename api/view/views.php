<?php
function getMainForm (){
    $html = '
<form action="http://webinar/api/index.php?action=add" method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="Name"><br>
<input type="number" name="age" placeholder="Age"><br>
<input type="file" name="file"><br>
<input type="submit" value="Add User"> 
</form>';
    $html.=buildTable();
    die($html);
}
