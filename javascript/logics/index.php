<html>
<head>
    <title>Test</title>
</head>
<body>
<h1>TEST</h1>
<!-- Посчитать количество 1 -->
<script>

    var test =[1,2,1,2,1,4,2,1];
    var length = test.length;
    var count =0;
    var count1=0;
    var count2=0;

    for (var i=0; i<length; i++ ){
        switch (true) {
            case test[i] === 1:
                count1++;
                break;
            case test[i] === 2:
                count2++;
                break;
        }
        if (test[i] === 1){
            count++;
        }
        console.log('Valeu: '+ test[i]);

    }
    console.log('Всего едениц: ' + count);
    console.log('Всего едениц по SWITCH: ' + count1);
    console.log('Всего двоек по SWITCH: ' + count2);

</script>
</body>
</html>
