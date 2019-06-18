<?php
for($i=0; $i<10; $i+=2){
    echo $i.'<br>';
};
echo '<br>';
$arr = [1,3,5,7,9,11];
$count = count($arr);
for($i=0; $i<$count; $i++){
    echo $arr[$i].'<br>';
}
echo '<br>';
$arrStr =['да','нет','ненаю','нет'];
$count = count($arrStr);
for ($i=0; $i<$count; $i++){
  if ($arrStr[$i]==='нет')
  {
      echo "найдено $i<br>";
      continue;
      /*die($i);*/
  }
      echo "Не найдено $i<br>";

}
echo '<br>';
$arrStr =['да','нет','ненаю','нет'];
$count = count($arrStr);
for ($i=0; $i<$count; $i++)
{
    if ($arrStr[$i]==='нет')
    {
        echo 'Мы нашли элемент массива со значением '.$arrStr[$i].', его индекс - '.$i;
        break;
    }
}
/*
$a=2;
while(Sa<5){
    echo $a.'<br>';
}*/
echo '<br>';
$a=2;
$canter = 0;
while($a<1000000 && $canter < 100){
    $a*=$a;
    $canter++;
}
echo $canter;
echo '<br>';
$a=1;
$canter = 0;
$limit = 100;
While($a<1000000 && $limit>0){
    $a *= $a;
    $canter++;
    $limit--;
}
echo $canter;
echo '<br>';
$a = 0;
do{
    $a++;
    echo "$a<br>";
}while($a<10);

$i=0;
while($i<10){
    echo $i;
    $i++;
}

echo '<br>';
$arr=[
    0=>'один',
    10=>'два',
    200=>'три'
];
foreach ($arr as $index=>$value){
      echo"$index ==> $value <br>";
}
echo '<br>';
foreach ($arr as $a=>$b){
    echo "$a<br>";
}

$arr=[

    0=>['name'=>'vova','age'=>'34'],
    1=>['name'=>'grisha','age'=>'72']

];
foreach ($arr as $index=>$value){
    foreach ($value as $name=>$dat){
        echo "$name ==> $dat <br>";
    }
}
echo '<br>';
$arrFlp=[
    0=>'one',
    1=>'two'
];
foreach (array_flip($arrFlp) as $keys){
    echo "$keys<br>";
}

$arrAssoc=[
    1=>'un',
    2=>'dos',
    3=>'tres'
];
foreach($arrAssoc as $key => $value){
    $arrAssoc[$key]=$value.'-hello';
   }
print_r($arrAssoc);
?>
