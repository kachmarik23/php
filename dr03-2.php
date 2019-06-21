<?php
echo '<br>';
echo '<br>Задание№ 12<br>';
$n = 1000;
$num =0;
while ($n>50){
    $n=$n/2;
    $num++;

}
echo '$n = '.$n.' $num = '.$num;
echo '<br>';
echo '<br>Задание№ 13<br>';
const LEN=10;
$html='<table border="1"><thead>
<th></th>';
for ($i=1;$i<=LEN;$i++){
    $html.='<th>'.$i.'</th>';
}
$html.='</thead> <tbody>';
for($i=1;$i<=LEN;$i++){
    $html.='<tr><td>'.$i.'</td>';
    for ($j=1;$j<=LEN;$j++){
        $html.='<td>'.$j.'</td>';
    }
}
$html.='</tr></tbody></table>';
echo $html;