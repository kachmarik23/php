<?php
echo 'задание 24<br>';
$num=442158755745;

$count=0;
for($i=1;$i<strlen($num);$i++){
    $arr[]=substr($num,$i,1);
    }
foreach ($arr as $value){
    if($value == 5){
        $count++;
    }
}
echo $count.'<br>';
echo 'задание 25<br>';
echo '<br>';
$arrRnd=[];
for ($i=0;$i<10;$i++){
    $arrRnd[]=rand(1,123);
}
foreach ($arrRnd as $item=>$value){
    echo "[$item] => $value<br>";
}
echo '<br>min: '.$min=min($arrRnd).'<br>';
echo 'max: '.$max=max($arrRnd).'<br><br>';
foreach ($arrRnd as $item=>$value){
    if($value == $min){
        $arrRnd[$item]=$max;
    }
    if($value == $max){
        $arrRnd[$item]=$min;
    }
}
foreach ($arrRnd as $item=>$value){
    echo "[$item] => $value<br>";
}
echo $count.'<br>';
echo 'задание 26<br>';
echo '<br>';
$arrRnd=[];
for($i=0;$i<5;$i++){
    $arrRnd[]=rand(-100,100);
}
print_r($arrRnd);
echo '<br>';
$countPar=0;
foreach ($arrRnd as $item=>$value){
    if($value>=0) {
        $item = $item % 2;
        if ($item !== 0) {
            echo $value . '<br>';
        }
        if($item==0){
            $countPar=($countPar+1)*$value;
        }
    }
}

echo $countPar;


