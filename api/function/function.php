<?php
/**
 * $name[]=[//$name[] - чтобы сохранить все данные, чтоб структура данных в json не нарушалась
 * сначало мы сохраняем пустой массив $name[], потом добавим данные другого массива
 * $name[]=[
 * 'name' => $_REQUEST['name'],
 * 'age' => $_REQUEST['age']
 * ]
 * а для того что-бы переаписывались данные, перед добавлением новых данных
 * считываем существующие $name = readData();
 *
 */
function writeDat()
{
    if (empty($_REQUEST['name']) || empty($_REQUEST['age'])) {
        die('Нет данных');
    }
    $name = readData();
    $name[] = [
        'name' => $_REQUEST['name'],
        'age' => $_REQUEST['age']
    ];
    $json_Data = json_encode($name);
    file_put_contents('users/users', $json_Data);
    header('Location: index.php');//перенаправление на главную
}

/**
 * @return mixed
 */
function readData()
{
    $data = file_get_contents('users/users');//считываем данные
    $arr = json_decode($data, true);// декодируем json
    return $arr;
}

function buildTable()
{
    $html = '<table border="1">
                <thead><th>id</th><th>Name</th><th>Age</th></thead>
                <tbody>';
    $arr = readData();
    foreach ($arr as $id => $item) {
        $html .= '<tr><td>' . $id . '</td><td>' . $item['name'] . '</td><td>' . $item['age'] . '</td>';
    }
    $html .= '</tr></tbody></table>
    <div><p>Добавить Юзверя</p></div>';
    echo $html;
}
