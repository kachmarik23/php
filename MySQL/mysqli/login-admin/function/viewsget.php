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

function getCategoriesViewUser()
{
    $category = getAllCategory();
    if (!empty($category)) {

        $html = "<h2>Список Категорий</h2><table border='1'>
            <thead>";
        foreach ($category[0] as $kay => $value) {
            $html .= "<th>$kay</th>";
        }
        $html .= "</thead>
    <tbody>";
        foreach ($category as $data) {
            $html . "<tr>";
            foreach ($data as $id => $name) {
                $html .= "<td>$name</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tbody>
</table><br>";
        return $html;


    }
    return "<h2>Список Категорий</h2>Нет категорий";
}

function getCategoriesView()
{
    $category = getAllCategory();
    if (!empty($category)) {
        $html = "<h2>Список Категорий</h2><table border='1'>
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
            $html .= "<td><a href='adminget.php?action=del&id=" . $data['id'] . "'>Удалить</a> </td></tr>";
        }
        $html .= "</tbody>
</table><br>";
        $html .= "<p>Добавить категорию</p><form method='post' action='adminget.php?action=add'>
<input type='text' name='add_category' placeholder='Новая категория'>
<input type='submit' value='Добавить'>
</form>";
        return $html;
    }
    $html = "<form method='post' action=''>
<input type='hidden' name='action' value='add'>
<input type='text' name='add_category' placeholder='Новая категория'>
<input type='submit' value='Добавить'>
</form>";
    return "<h2>Список Категорий</h2>Нет категорий" . $html;
}

function getItemsView()
{
    $items = getAllItems();
    if (!empty($items)) {
        $html = "<h2>Список товаров</h2><table border='1'>
            <thead>";

        foreach ($items[0] as $kay => $value) {
            $html .= "<th>$kay</th>";
        }
        $html .= "<th>Remove</th></thead>
    <tbody>";
        foreach ($items as $item) {
            $html . "<tr>";
            foreach ($item as $id => $name) {
                $html .= "<td>$name</td>";
            }
            $html .= "<td><a href='adminget.php?action=del-item&id=" . $item['id'] . "'>Удалить</a> </td></tr>";
        }
        $html .= "</tbody>
</table><br>";
        $html .= "<p>Добавить товары</p><form method='post' action='' id='categoryForm'>
<input type='hidden' name='action' value='add_items'>
<input type='text' name='title' placeholder='Название товара'>
<input type='text' name='description' placeholder='Описание товара'>
<input type='text' name='prise' placeholder='Цена товара'>
<select name='category_id' form='categoryForm'>
<option selected  disabled>Выберите категорию</option>";
        $category = getAllCategory();
        foreach ($category as $value) {
            $html .= "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        }
        $html .= "</select>
<input type='submit' value='Добавить'>
</form>";
        return $html;
    }
    $html = "<form method='post' action='' id='categoryForm'>
<input type='hidden' name='action' value='add_items'>
<input type='text' name='title' placeholder='Название товара'>
<input type='text' name='description' placeholder='Описание товара'>
<input type='text' name='prise' placeholder='Цена товара'>
<select name='category_id' form='categoryForm'>
<option selected  disabled>Выберите категорию</option>";
    $category = getAllCategory();
    foreach ($category as $value) {
        $html .= "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
    }
    $html .= "</select>
<input type='submit' value='Добавить'>
</form>";
    return "<h2>Список товаров</h2>Нет товаров" . $html;
}

function getItemsViewUsers()
{
    $items = getAllItems();
    if (!empty($items)) {
        $html = "<h2>Список товаров</h2><table border='1'>
            <thead>";
        foreach ($items[0] as $kay => $value) {
            $html .= "<th>$kay</th>";
        }
        $html .= "</thead>
    <tbody>";
        foreach ($items as $item) {
            $html . "<tr>";
            foreach ($item as $id => $name) {
                $html .= "<td>$name</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tbody>
</table>";
        return $html;

    }
    return "<h2>Список товаров</h2>Нет товаров <br>";

}