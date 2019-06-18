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
while($a<1000000){
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

?>
