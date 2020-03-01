<html>
<head>
    <title>Event</title>


</head>
<body>

<h1 id="title">Event</h1>

<button id="btn">Нажми на меня!</button>
<button id="btn1">Наведи на меня!</button>

<!-- Посчитать количество 1 -->
<script>

/**
 * addEventListener(событие, функция) - добавим слушателя
 */
    document.getElementById('btn').addEventListener('click', function () {
        document.getElementById('title').innerHTML = '<div style="color: red">Event - ClicK</div>';
    })
    /**
     * тоже что и выше, но функция отдельно
     document.getElementById('btn').addEventListener('click',fanClick);
     function fanClick() {
console.log('click');
    }
     */
    document.getElementById('btn1').addEventListener('mouseenter', function () {
        document.getElementById('title').innerHTML = '<div style="color: green">Event - mouseenter</div>'
    })
    document.getElementById('btn1').addEventListener('mouseleave', function () {
        document.getElementById('title').innerHTML = '<div style="color: blue">Event - mouseleave</div>'
    })

</script>
</body>
</html>

