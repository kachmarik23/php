<?php
require_once 'function.php';
function getRegisterForm()
{
    $html = "<form method='post' action=''>
    <div><input type='text' id='login' name='login' placeholder='Введите Логин'></div>
    <div><input type='password' id='pas' name='pas' placeholder='Введите пароль'></div>
    <div><input type='password' id='repas' name='repas' placeholder='Подтвердите пароль'></div>
    <div><input type='submit' value='Зарегестрироваться'></div>
    </form> ";
    return $html;
}

function getLoginForm()
{
    $html = "<form method='post' action=''>
<div><input type='text' id='login' name='login' placeholder='Введите логин'></div>
<div><input type='password' id='pas' name='pas' placeholder='Введите пароль'></div>
<div><input type='submit' value='Войти'></div>
</form>";
    return $html;
}

function getLogout()
{
    $html = "<form method='post' action=''>
<input type='hidden' name='action' value='exit'>
<input type='submit' value='Выход'> 
</form>";
    return $html;
}

function getCategoriesView()
{
    $category = getAllCategory();
    if(empty($category)){
        $html="<form method='post' action=''>
<input type='hidden' name='action' value='add'>
<input type='text' name='add_category' placeholder='Новая категория'>
<input type='submit' value='Добавить'>
</form>";
        die("Нет категорий".$html);
    }
    $html = "<table border='1'>
            <thead>";
    foreach ($category[0] as $kay => $value) {
        $html .= "<th>$kay</th>";
    }
    $html .= "<th>Remove</th></thead>
    <tbody>";
    foreach ($category as $data) {
        $html . "<tr>";
        foreach ($data as $id => $name) {
            $html .= "<td>$name</td>";
        }
        $html .= "<td><br><form method='post' action=''>
<input type='hidden' name='action' value='del'>
<input type='hidden' name='del_category' value='".$data['id']."' >
<input type='submit' value='Удалить'>
</form></td></tr>";
    }
    $html .= "</tbody>
</table><br>";
    $html.="<form method='post' action=''>
<input type='hidden' name='action' value='add'>
<input type='text' name='add_category' placeholder='Новая категория'>
<input type='submit' value='Добавить'>
</form>";
    echo $html;
}