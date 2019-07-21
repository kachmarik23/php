<?php
function getMainForm (){
    $html = '
<form action="http://webinar/api/index.php?action=add" method="POST" >
<input type="text" name="name" placeholder="Name">
<input type="number" name="age" placeholder="Age">
<input type="submit" value="Add User"> 
</form>';
    $html.=buildTable();
    die($html);
}
