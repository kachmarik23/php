<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    a:link{ color: green}
    a:visited{color: pink}
    a:hover{color: red}
    a:active{color: yellow}
    ul {
      list-style-type: none;/*убрать флажок в списке*/
      margin: 0;
      padding: 0;
      overflow: hidden;/*Отображается только область внутри элемента, остальное будет скрыто*/
      background-color: #333333;

    }
    li{
      float: left;
    }
    li a{
      display: block;
      color: white;
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }
    li a:hover{
      background-color: #111111;
    }
    table#tab01{
      width: 100%;
      background-color: #cccccc;
          }
    table#tab01 tr:nth-child(even){/* не четные строки таблы*/
      background-color: #eee;
    }
    table#tab01 tr:nth-child(odd){/* четный строки таблицы*/
      background-color: #fff;
    }
  </style>
</head>
<body>
<div class="content">
  <h1></h1>
  <form action="">
    <input type="text">
    <input type="text">
    <input type="text">
  </form>
  <!-- ctr+/ -->
  <del>удаленный текст</del><br>
  <strong>Важный текст</strong><br>
  <mark>маркер</mark><br>
  <ins>подчеркнутый текст</ins><br>
<sub>нижний регистр</sub> и <sup>верхний регистр</sup>
<p>&copy</p>
<pre>Тег pre не убирает лишние пробелы <h1> Типа     не     работает</h1></pre>
<a href="http://w3schools.com" target="_blank">w3schools.com</a><br>
<a href="#tips">Переехать на #tips</a>

<ul class="">
  <li><a href="#">Home</a></li>
  <li><a href="#">Abaut</a></li>
  <li><a href="#">Contact</a></li>
</ul>

<table id="tab01" style="margin-top:20px">
  <tr>
    <td>1</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td colspan="2">2</td> <!-- colspan="2" объединить 2 ячейки по ширине -->
    <td rowspan="2">2</td> <!-- rowspan="2" объединить 2 ячейки по высоте -->

  </tr>
  <tr>
    <td>3</td>
    <td>3</td>

  </tr>
</table>

<h2 id="tips"  style="margin:600px 0 600px">Вот индинтификатор #tips</h2>





</div>
</body>
</html>
