<?php
const ARR_LEN = 100;
$arr=[];
for ($i=0;$i<ARR_LEN;$i++){

    $arr[]=rand(11,100);
}
print_r($arr);
?>