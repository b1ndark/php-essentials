<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <pre><?php 
    
        var_dump(true);
        var_dump(false);

        $value = true;
        var_dump($value);

        echo "----\n";

        $meaning = 42;
        var_dump($meaning > 45);
        var_dump($meaning > 13);
        var_dump(40 + 8 > 13);
        var_dump(40 + 2 > 13);

        echo "----\n";

        var_dump($meaning > 15);
        var_dump($meaning < 15);
        var_dump($meaning > 42);
        var_dump($meaning >= 42);

        echo "----\n";

        $name = 'John';
        var_dump($name === 'John');
        var_dump($name !== 'John');
        var_dump($name === 'Sophie');

        echo "----\n";

        $age = 30;
        var_dump($age === 30);
        var_dump($age === '30');

        var_dump($age == '30');
        var_dump($age != '30');
        var_dump($age != '29');

    
    ?></pre>
</body>
</html>