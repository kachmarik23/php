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
        <th>ID</th>
        <th>VALUE</th>
    </thead>
    <tbody>

        <?php
        const ARR_LEN=100;
        $arr=[];
        for ($i=0;$i<100;$i++){
            $arr[]=rand(1,100);

        echo "<tr><td>$i</td><td>$arr=[$i]</td></tr>";
        }
        ?>

     </tbody>
</table>
</body>
</html>

