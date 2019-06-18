<?php
const ARR_LEN = 100;
$arr=[];
for ($i=0;$i<ARR_LEN;$i++){

    $arr[]=rand(11,100);
}
//print_r($arr);
$html='
<table border="1">
    <thead>
        <th>ID</th>
        <th>VALUE</th>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>VALUE 0</td>
        </tr>
        <tr>
            <td>1</td>
            <td>VALUE 1</td>
        </tr>
        
    </tbody>
</table>
';
echo $html;
?>