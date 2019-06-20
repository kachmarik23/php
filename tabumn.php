<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
    <th></th>
    <?php
    $arrTd = [];
    for ($i = 1; $i <= 10; $i++) {
        echo '<th>' . $i . '</th>';
        $arrTd[] = $i;
    }
    echo '    </thead>
    <tbody>';

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$i</td>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $j * $i . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>