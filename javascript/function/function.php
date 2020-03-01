<html>
<head>
    <title>Test</title>
    <script>
        window.configs = {
            wight: "300px"
        }
    </script>
</head>
<body>

<h1 id="title">TEST</h1>
<input type="text" class="loginClass" name="loginName" id="login" placeholder="login"><br>
<input type="text" class="passClass" name="pass" id="pass" placeholder="pass"><br>
<button onclick="initA();test()">Нажми на меня!</button>
<button onclick="test1();test2();test3('text')">много функций!</button>
<!-- Посчитать количество 1 -->
<script>
    /**
     * для одного элемента применить конфиг    window.configs
     * @type {string}
     */
    document.getElementById('login').style.width = window.configs.wight;
    /**
     * Для нескольких элементов циклом
     * @type {HTMLCollectionOf<HTMLElementTagNameMap[string]>}
     */
    var inputs = document.getElementsByTagName('input');
    var len = inputs.length;
    for(var i=0; i<len; i++ ){
        document.getElementsByTagName('input')[i].style.width=window.configs.wight;

    }
        function
    initA()
    {
        a = '123';
    }

    function test() {
        console.log(a);
        var titleInner = document.getElementById('login').value;
        document.getElementById('title').innerHTML = titleInner;
        document.getElementById('login').value = '';

    }

    function test1() {
        console.log('Привет я функция ТЕСТ 1 ');
    }

    function test2(testVar = 'default') {
        console.log(testVar);
    }

    function test3(testVar = 'default') {
        console.log(testVar);
    }

</script>
</body>
</html>
