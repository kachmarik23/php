<?php
$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. 
А там хоть трава не расти.';
$text=explode('.',$str);
$textRevers='';
$count=count($text);

for ($i=0;$i<$count; $i++){
    $strPop=array_pop($text);
    if(!empty($strPop)){
        $textRevers.=$strPop.'.';
    }
}
echo $str;
echo '<br>';
echo $textRevers;



