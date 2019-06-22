<?php
echo '<br>';
echo '<br>Задание№ 12<br>';
$n = 1000;
$num = 0;
while ($n > 50) {
    $n = $n / 2;
    $num++;

}
echo '$n = ' . $n . ' $num = ' . $num;
echo '<br>';
echo '<br>Задание№ 13<br>';
const LEN = 10;
$html = '<table border="1"><thead>
<th></th>';
for ($i = 1; $i <= LEN; $i++) {
    $html .= '<th>' . $i . '</th>';
}
$html .= '</thead> <tbody>';
for ($i = 1; $i <= LEN; $i++) {
    $html .= '<tr><td>' . $i . '</td>';
    for ($j = 1; $j <= LEN; $j++) {
        $html .= '<td>' . $j . '</td>';
    }
}
$html .= '</tr></tbody></table>';
echo $html;
echo '<br>';
echo '<br>Задание№ 14<br>';
$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 0;
foreach ($arr as $value) {
    if ($value == 2 || $value == 3 || $value == 4) {
        $e++;
    }
}
$e != 0 ? $e = 'Есть!' : $e = 'Нет!';
echo $e;
echo '<br>';
echo '<br>Задание№ 15<br>';
$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arr as $value) {
    $count++;
}
echo $count . '<br>';
echo $count = count($arr);
echo '<br>';
echo '<br>Задание№ 16<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item => $value) {
    if ($value == 3) {
        $arr[$item] = $arr[$item] . $arr[$item + 1];
        unset($arr[$item + 1]);
    }
    if ($value == 6) {
        $arr[$item] = $arr[$item] . $arr[$item + 1];
        unset($arr[$item + 1]);
    }
}
foreach ($arr as $value) {
    echo $value . '<br>';
}
echo '<br>';
echo '<br>Задание№ 17<br><br>';
$month = date(n);
$arrMes = [
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
];
foreach ($arrMes as $item => $value) {
    if ($item == $month) {
        $arrMes[$item] = '<b>' . $value . '</b>';
    }
}
foreach ($arrMes as $value) {
    echo $value . '<br>';
}
echo '<br>';
echo '<br>Задание№ 18<br><br>';
$arrDia = ['Понедельник',
    "Вторник",
    "Среда",
    "Четверг",
    "Пятница",
    "Суббота",
    "Воскресение"
];

foreach ($arrDia as $item => $value) {
    if ($value == "Суббота" || $value == "Воскресение") {
        $arrDia[$item] = '<b>' . $value . '</b>';
    }
    echo $arrDia[$item] . '<br>';
}
echo '<br>';
echo '<br>Задание№ 19<br><br>';
$day = date(D);

$arrDay = [
    'Mon' => 'Понедельник',
    'Tue' => 'Вторник',
    'Wed' => 'Среда',
    'Thu' => 'Четверг',
    'Fri' => 'Пятница',
    'Sat' => 'Суббота',
    'Sun' => 'Воскресенье'
];
foreach ($arrDay as $item=>$value){

    if ($item == $day){
        $arrDay[$item]='<i>'.$value.'</i>';
    }
    echo $arrDay [$item].'<br>';
}
