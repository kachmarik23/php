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
<table>
    <tbody>
    <?php
        $rows=rand(5,50);
        $cols=rand(5,50);


        $colors = ['red','yellow','blue','gray','maroon','brown','green'];

        for ($i=0;$i<$rows;$i++){
            $x=rand(0,6);
            $color=$colors[$x];
            echo "<tr><td bgcolor='$color'>".rand(-159,982)."</td>";
            for($j=1;$j<$cols;$j++){
                $x=rand(0,6);
                $color=$colors[$x];
                echo "<td bgcolor='$color'>".rand(-159,982)."</td>";
            }
        }
        ?>
    </tr>
    </tbody>
</table>
</body>
</html>