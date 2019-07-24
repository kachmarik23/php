<?php
function viewTextarea()
{
    $html = '<form action="index.php" method="post">
                <textarea placeholder="Ввеите текст 1" name="text1"></textarea><br>
                <textarea placeholder="Введите текст 2" name="text2"></textarea><br>
                <input type="submit" value="Comprobar">
            </form>';
    return $html;
}
function getCommonWords($a,$b){
    if(empty($a)||empty($b)){
       die('Введите данные');
    }
    $a=explode(" ", $a);
    $b=explode(" ", $b);
    $countA=count($a);
    $a_b=[];
    for ($i=0; $i<$countA; $i++){
        $itemA=array_shift($a);

        foreach ($b as $value){
            if ($itemA==$value){
                $a_b[]=$value;
            }
        }
    }
return $a_b;
}