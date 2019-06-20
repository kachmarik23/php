<?php
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr['ID ' . $i] = 'value ' . rand(1, 100);
}
$html = '<table border="1">
<thead>
<th>ID</th><th>Value</th>
</thead>
<tbody>';
foreach ($arr as $key => $value) {
    $html .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr></tr>';
}
$html .= '</tbody>

</table>';
echo $html;
?>
