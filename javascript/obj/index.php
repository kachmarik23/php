<html>
<head>
    <title>Obj</title>
</head>
<body>
<h1 id="title">Obj</h1>
<script>
    var person = {
        name: 'Oleg',
        say: function () {
            return ('my name is ' + this.name);
        },
        test: {
            name: 'Oleg',
            func: function () {
                console.log('name ' + this.name);
            }
        }
    }

    function alertHi()
    {
        alert('Привет');
    }

    setTimeout(alertHi,2000);

    setInterval(function () {
console.log('tick');
    }, 3000);



</script>
</body>
</html>

